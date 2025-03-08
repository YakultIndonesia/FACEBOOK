<?php
/**
* author: Mehmet Ibrahim
* read link for use: http://renklikodlar.net/class/pdo_ile_mysql_veritabani_ice_ve_disa_aktarmak-m22
* website: http://renklikodlar.net
*/

ini_set('memory_limit', '1000M');

class DBYedek {

	private $tablolar = array();
	private $baglan;
	private $sonuc;
    private $error = array();

public function __construct() {
    global $dbhost, $dbuser, $dbpass, $dbdata;
	try {
		$this->baglan = new PDO("mysql:host={$dbhost};dbname={$dbdata}",$dbuser,$dbpass,
		array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		
	} catch (PDOException $e) {
		echo "<b>HATA:Baglantı hatası</b> ". $e->getMessage();
		$this->kapat(); exit;
	}
}


public function kapat() {
    if($this->baglan) { $this->baglan = null; }
}


public function Ice_Aktar($dosya,$maxKomut){
    $sonzaman = time()+$maxKomut; 
    $progressdosya = $dosya.'_temp'; // işlenmiş kayıtlar için temp dosyası

    ($fp = fopen($dosya, 'r')) OR die('<br>' . $dosya . ': <b>Dosyası Açılamıyor!</b>');
    // önceki dosya konumuna git
    $doPozisyon = 0;
    if( file_exists($progressdosya) ){
        $doPozisyon = file_get_contents($progressdosya);
        fseek($fp, $doPozisyon);
    }
    $donguSayaci = 0;
    $query = '';
    while( $sonzaman>time() AND ($line=fgets($fp, 1024000)) ){
        if(substr($line,0,2)=='--' OR trim($line)=='' OR substr($line,0,2)=='/*'){
            continue;
        }
        $query .= $line;
        if( substr(trim($query),-1)==';' ){
			try {
				$islem = $this->baglan->prepare($query);
				$islem->execute();
			} catch (PDOException $e) {
				echo $this->hatabul($e->getTrace(), $e->getCode(), $e->getMessage());
				$this->kapat(); exit;
			}	
            $query = '';
            file_put_contents($progressdosya, ftell($fp)); // geçerli dosya konumunu kaydet
            $donguSayaci++;
        }
    }

    if( feof($fp) ){
		@unlink($progressdosya);
       
    }else{
		// otomatik yeniden yükleme
		echo '<html><head> <meta http-equiv="refresh" content="'.($maxKomut+1).'">';
		// sayfaya bilgi gönder
        echo ftell($fp).'/'.filesize($dosya).' - '.(round(ftell($fp)/filesize($dosya), 2)*100).'%'."<br>";
        echo $donguSayaci.' ';
    }
}

	
public function Disa_Aktar($yol,$zip,$drop,$vtip){
		global $dbdata;
		echo "<strong>" . $dbdata . "</strong> veritabanı için yedek alma işlemi başladı....<br><br>";
		$this->sonuc = "-- " . $dbdata ." veritabanı için sql yedeği.\n\n";
		$this->TabloCek($vtip);
		$this->Olustur($drop);

        $date=date('d-m-Y_H-i-s');
    if ($zip == true){
        $dosya = $yol . "backup-$dbdata-$date.sql.zip";
        $zip = new ZipArchive();
        if ($zip->open($dosya, ZIPARCHIVE::CREATE) !== TRUE) {
            exit("Zip Dosya açılamadı <$dosya>\n");
        }
        $zip->addFromString("backup-$dbdata-$date.sql", $this->sonuc);
        $zip->close();
	} else {
        $dosya = $yol . "backup-$dbdata-$date.sql";
        $fp = fopen($dosya, 'w');
	    fwrite($fp, $this->sonuc);
	    fclose($fp);
	}

		return $dosya;
}


private function Olustur($drop){
		foreach ($this->tablolar as $tbl) {
			$this->sonuc .= "-- `" . $tbl['t_adi'] . "` tablosu için tablo yapısı.\n\n";
			if($drop) { $this->sonuc .= "DROP TABLE IF EXISTS `" . $tbl['t_adi'] . "`;\n"; }
			$this->sonuc .= $tbl['t_yapisi'] . ";\n\n";
			$this->sonuc .= $tbl['t_verisi']."\n\n\n";
		}
}


private function TabloCek($vtip){
		try {
			$sql = $this->baglan->query('SHOW TABLES');
			$sonuc = $sql->fetchAll();
			$i=0;
			foreach($sonuc as $tablo){
				$this->tablolar[$i]['t_adi'] = $tablo[0];
			ob_flush();
			flush();
				$this->tablolar[$i]['t_yapisi'] = $this->tabloYapisi($tablo[0]);
			ob_flush();
			flush();
				$this->tablolar[$i]['t_verisi'] = $this->dokumVeri($tablo[0],$vtip);
			ob_flush();
			flush();
			    echo "<strong>" . $tablo[0] . "</strong> tablosu >>>> ΟΚ<br><br>";
				$i++;
			}
			unset($sql);
			unset($sonuc);
			unset($i);
			return true;
		} catch (PDOException $e) {
	          echo $this->hatabul($e->getTrace(), $e->getCode(), $e->getMessage());
	          $this->kapat(); exit;
		}
}


private function tabloYapisi($tabloAdi){
		try {
		    echo "<strong>" . $tabloAdi . "</strong> tablosu için tablo yapısı alınıyor....<br>";
			$sql = $this->baglan->query('SHOW CREATE TABLE '.$tabloAdi);
			$sonuc = $sql->fetchAll();
			$sonuc[0][1] = preg_replace("/AUTO_INCREMENT=[\w]*./", '', $sonuc[0][1]);
			return $sonuc[0][1];
		} catch (PDOException $e){
	          echo $this->hatabul($e->getTrace(), $e->getCode(), $e->getMessage());
	          $this->kapat(); exit;
		}
}


private function sutunAdlari($tabloAdi) {
		try {
        $sutun = "";
        $sql = $this->baglan->query("SELECT * FROM $tabloAdi LIMIT 1");
        $toplm_sutun = $sql->columnCount();
        for ($counter = 0; $counter < $toplm_sutun; $counter ++) {
            $clmn_meta = $sql->getColumnMeta($counter);
			if ($counter+1 != $toplm_sutun){
				$sutun .= '`' .$clmn_meta['name'] . '`' . ', ';
			} else {
				$sutun .= '`' .$clmn_meta['name'] . '`';
			} 
        }
		
        return $sutun;
		} catch (PDOException $e){
	          echo $this->hatabul($e->getTrace(), $e->getCode(), $e->getMessage());
	          $this->kapat(); exit;
		}
}


private function Degistir($veri){
	$veri = str_replace("'", "\'", $veri);
	$veri = str_replace("\n", "\\n", $veri);
	$veri = str_replace('"', '\"', $veri);
	return $veri;
}


private function dokumVeri($tabloAdi,$vtip){
		try {
			$sql = $this->baglan->query('SELECT * FROM '.$tabloAdi);
			$sonuc = $sql->fetchAll(PDO::FETCH_NUM);
			$veri = '';
			$sayim = count($sonuc);
		    echo "<strong>" . $tabloAdi . "</strong> tablosu için döküm verisi alınıyor....<br>";
		if ($vtip == 1){
			
			if ($sayim > 0){
				$veri = "-- `" . $tabloAdi . "` tablosu için döküm verisi.\n\n";
				for ($counter = 0; $counter < $sayim; $counter ++) {
					$veri .= "INSERT INTO `". $tabloAdi ."` VALUES ('" . implode("','", $this->Degistir($sonuc[$counter])) . "');\n";
				}
			}
			
		} else if ($vtip == 2){
			
			if ($sayim > 0){
				$veri = "-- `" . $tabloAdi . "` tablosu için döküm verisi.\n\n";
				$veri .= 'INSERT INTO `'. $tabloAdi .'` VALUES'."\n";
				for ($counter = 0; $counter < $sayim; $counter ++) {
					if ($counter+1 != $sayim){
						$veri .= "('" . implode("','", $this->Degistir($sonuc[$counter])) . "'),\n";
					} else {
						$veri .= "('" . implode("','", $this->Degistir($sonuc[$counter])) . "');\n";
					}
				}
			}
			
		} else if ($vtip == 3){
			
			if ($sayim > 0){
				$veri = "-- `" . $tabloAdi . "` tablosu için döküm verisi.\n\n";
				for ($counter = 0; $counter < $sayim; $counter ++) {
					$veri .= "INSERT INTO `". $tabloAdi ."` (" . $this->sutunAdlari($tabloAdi) . ") VALUES ('" . implode("','", $this->Degistir($sonuc[$counter])) . "');\n";
				}
			}
			
		} else if ($vtip == 4){
			
			if ($sayim > 0){
				$veri = "-- `" . $tabloAdi . "` tablosu için döküm verisi.\n\n";
				$veri .= 'INSERT INTO `'. $tabloAdi .'` (' . $this->sutunAdlari($tabloAdi) . ') VALUES'."\n";
				for ($counter = 0; $counter < $sayim; $counter ++) {
					if ($counter+1 != $sayim){
						$veri .= "('" . implode("','", $this->Degistir($sonuc[$counter])) . "'),\n";
					} else {
						$veri .= "('" . implode("','", $this->Degistir($sonuc[$counter])) . "');\n";
					}
				}
			}
			
		}
		
			return $veri;
		} catch (PDOException $e){
	          echo $this->hatabul($e->getTrace(), $e->getCode(), $e->getMessage());
	          $this->kapat(); exit;
		}
}


private function hatabul($hata, $kodu, $mesaj) {
	$htmsj = "<b>PHP PDO HATA:</b> " . strval($kodu) . "<br><br>";
	$i=0;
    foreach ($hata as $a){
	if($i==0){ $htmsj .="<b>Class tarafı hata bilgileri</b><br>"; }else{ $htmsj .="<b>Dosya tarafı hata bilgileri</b><br>"; }
	$htmsj .= "Hatalı Function: ". $a["function"] . "<br>";
	$htmsj .= "Hatalı Dosya: ". $a["file"] . "<br>";
	$htmsj .= "Hatalı Satır: ". $a["line"] . "<br><br>";
	$i++;
    }
	$htmsj .= "<b>Hata MSJ:</b> " . $mesaj;
	return $htmsj;
}	
	
}
?>