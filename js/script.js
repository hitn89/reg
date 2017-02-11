// проверка логина на длину, латинские символы и цифры, первая буква
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

// проверка почты регулярным выражением
function mailScan() {
  var mail = document.getElementById("mail").value;
  var errMail = "";

  var re = /^([a-z0-9_\-]+\.)*[a-z0-9_\-]+@([a-z0-9][a-z0-9\-]*[a-z0-9]\.)+[a-z]{2,6}$/i;

  if(!re.test(mail)){
    errMail += "Не корректно введен e-mail";
  }

document.getElementById('errMail').innerHTML = errMail;
}


// проверка имени
function nameScan() {
  var name = document.getElementById("name").value;
  var errName = "";

  var re = /^[a-zA-Zа-яА-Я'][a-zA-Zа-яА-Я-' ]+[a-zA-Zа-яА-Я']?$/u;

  if(!re.test(name)){
    errName += "Не корректно введено Имя";
  }

document.getElementById('errName').innerHTML = errName;
}


// проверка пароля
function passwordScan() {

  document.getElementById('errPasswordR').innerHTML = "Пароли не одинаковы";
  var password = document.getElementById("password").value;
  var errPassword = "";

  var re = /^[\d\w]{3,10}$/;

  if(!re.test(password)){
    errPassword += "Не корректно введен пароль. Пароль должен содержать от 3х до 10 символов, и содержать только латинские символы и цифры";
  }

document.getElementById('errPassword').innerHTML = errPassword;
}


// сравниваем пароли
function passwordRScan() {
  var passwordR = document.getElementById("passwordR").value;
  var password = document.getElementById("password").value;
  var errPasswordR = "";

  if (password !== passwordR) {
    errPasswordR = "Пароли не одинаковы";
  }

document.getElementById('errPasswordR').innerHTML = errPasswordR;
}
