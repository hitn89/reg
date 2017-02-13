var VALID;
// проверка логина на длину, латинские символы и цифры, первая буква
function validateForm() {

  VALID = true;
  var login = document.getElementById("login").value.toLowerCase();;
  var errLogin = "";

  if(login.length < 4 || login.length > 20) {
    errLogin += "В логине должно быть от 4 до 20 символов<br>";
    VALID = false;
  }
  if(/^[a-zA-Z1-9]+$/.test(login) === false) {
    errLogin += "В логине должны быть только латинские буквы и цифры<br>";
    VALID = false;
  }
  if(parseInt(login.substr(0, 1))) {
    errLogin += "Логин должен начинаться с буквы<br>";
    VALID = false;
  }

// проверка совподения логина в базе
  if (login.length > 0) {
   if (errLogin.length < 1) {
   $.ajax({
     url: "ajax.php?funk=login&login=" + login,
     success: function (data) {
       data = jQuery.parseJSON(data);
       var bdLogin = data[0].login;
         if (login.localeCompare(bdLogin) == 0) {
         VALID = false;
         errLogin = "Пользователь с таким логином уже зарегистрирован";
       }
       $('#errLogin').html(errLogin);
     },
     async: false
   });
  }
  document.getElementById('errLogin').innerHTML = errLogin;
  }

// проверка почты регулярным выражением
  var mail = document.getElementById("mail").value;
  var errMail = "";
  var re = /^([a-z0-9_\-]+\.)*[a-z0-9_\-]+@([a-z0-9][a-z0-9\-]*[a-z0-9]\.)+[a-z]{2,6}$/i;

  if(!re.test(mail)){
    errMail += "Не корректно введен e-mail";
    VALID = false;
  }
  if (mail.length > 0) {
    // проверяем совпадение почты  базе
    if (errMail.length < 1) {
    $.ajax({
      url: "ajax.php?funk=mail&mail=" + mail,
      success: function (data) {
        data = jQuery.parseJSON(data);
        var bdMail = data[0].mail;
          if (mail.localeCompare(bdMail) == 0) {
          VALID = false;
          errMail = "E-mail занят";
        }
        $('#errMail').html(errMail);
      },
      async: false
    });
   }
document.getElementById('errMail').innerHTML = errMail;
}

// проверка имени
  var name = document.getElementById("name").value;
  var errName = "";
  re = /^[a-zA-Zа-яА-Я'][a-zA-Zа-яА-Я-' ]+[a-zA-Zа-яА-Я']?$/u;

  if(!re.test(name)){
    errName += "Не корректно введено Имя";
    VALID = false;
  }
  if (name.length > 0){
document.getElementById('errName').innerHTML = errName;
}

// проверка пароля

  var password = document.getElementById("password").value;
  var errPassword = "";

  re = /^[\d\w]{3,10}$/;

  if(!re.test(password)){
    errPassword = "Пароль должен быть от 3 до 10 символов и содержать только латинские символы и цифры";
    VALID = false;
    }
    if (password.length > 0) {
document.getElementById('errPassword').innerHTML = errPassword;
}

// сравниваем пароли
  var passwordR = document.getElementById("passwordR").value;
  var errPasswordR = "";

  if (password !== passwordR) {
    errPasswordR = "Пароли не совпадают";
    VALID = false;
  }
document.getElementById('errPasswordR').innerHTML = errPasswordR;

if (VALID == true) {
  $('#submit').prop('disabled', false);
} else {
  $('#submit').prop('disabled', true);
}

}
