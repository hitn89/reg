function loginScan() {
  var login = document.getElementById("login").value;

  var errLogin = "";

  if(login.length < 4 || login.length > 20) {
    errLogin += "В логине должно быть от 4 до 20 символов<br>";
  }
  if(/^[a-zA-Z1-9]+$/.test(login) === false) {
    errLogin += "В логине должны быть только латинские буквы и цифры<br>";
  }
  if(parseInt(login.substr(0, 1))) {
    errLogin += "Логине должен начинаться с буквы";
  }
document.getElementById('errLogin').innerHTML = errLogin;
}
