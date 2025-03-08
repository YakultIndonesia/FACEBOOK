function spexerror() {
  swal({
  title: 'Wrong Password',
  text: 'Redirecting..',
  icon: 'error',
  button: 'OK',
  });
}
function spexlogin() {
  swal({
  title: 'Login Successful',
  text: 'Redirecting..',
  icon: 'success',
  button: 'OK',
  });
}
function spexauth() {
  swal({
  title: 'Authentication Required',
  text: '',
  icon: 'warning',
  button: 'OK',
  });
}