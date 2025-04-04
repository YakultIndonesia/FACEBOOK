document.addEventListener("DOMContentLoaded", function () { fetch("https://api.digiflazz.com/v1/price-list", { method: "POST", headers: { "Content-Type": "application/json" }, body: JSON.stringify({ username: "xalihag1G6vD", buyer_sku_code: "", sign: "a0a6f469-fd11-5e6c-96a2-4cde525ec318" }) }) .then(response => response.json()) .then(data => { const kategoriUtamaList = document.getElementById("kategori-utama-list"); const subkategoriList = document.getElementById("subkategori-list"); const produkList = document.getElementById("produk-list"); const subkategoriTitle = document.getElementById("subkategori-title"); const produkTitle = document.getElementById("produk-title");

let kategoriUtamaSet = new Set();
    let kategoriSubSet = {};

    // Fungsi untuk format nama file
    function formatFileName(name) {
        return name.toLowerCase().replace(/\s+/g, "-").replace(/[^a-z0-9-]/g, "");
    }

    // Menampilkan kategori utama
    data.data.forEach(item => {
        if (!kategoriUtamaSet.has(item.category)) {
            kategoriUtamaSet.add(item.category);
            kategoriSubSet[item.category] = new Set();
            let kategoriItem = document.createElement("div");
            kategoriItem.classList.add("kategori-item");
            let kategoriFileName = formatFileName(item.category);
            kategoriItem.innerHTML = `
                <img src="image/kategori/${kategoriFileName}.png" alt="${item.category}" onclick="pilihKategoriUtama('${item.category}')">
                <p>${item.category}</p>
            `;
            kategoriUtamaList.appendChild(kategoriItem);
        }
        kategoriSubSet[item.category].add(item.brand);
    });

    // Fungsi untuk menampilkan subkategori setelah memilih kategori utama
    window.pilihKategoriUtama = function(kategori) {
        subkategoriList.innerHTML = "";
        produkList.innerHTML = "";
        produkTitle.style.display = "none";
        subkategoriTitle.style.display = "block";
        subkategoriList.style.display = "flex";

        kategoriSubSet[kategori].forEach(brand => {
            let subkategoriItem = document.createElement("div");
            subkategoriItem.classList.add("kategori-item");
            let brandFileName = formatFileName(brand);
            subkategoriItem.innerHTML = `
                <img src="image/subkategori/${brandFileName}.png" alt="${brand}" onclick="tampilkanProduk('${brand}')">
                <p>${brand}</p>
            `;
            subkategoriList.appendChild(subkategoriItem);
        });
    };

    // Fungsi untuk menampilkan produk setelah memilih subkategori
    window.tampilkanProduk = function(subkategori) {
        produkList.innerHTML = "";
        produkTitle.style.display = "block";

        data.data.forEach(item => {
            if (item.brand === subkategori) {
                let produkItem = document.createElement("div");
                produkItem.classList.add("produk-item");
                let brandFileName = formatFileName(item.brand); // Folder berdasarkan brand
                let produkFileName = formatFileName(item.product_name);
                produkItem.innerHTML = `
                    <img src="image/produk/${brandFileName}/${produkFileName}.png" alt="${item.product_name}">
                    <h3>${item.product_name}</h3>
                    <p>Rp ${item.price}</p>
                    <button onclick="prosesPembayaran('${item.buyer_sku_code}', ${item.price})">Beli</button>
                `;
                produkList.appendChild(produkItem);
            }
        });
    };
});

});







