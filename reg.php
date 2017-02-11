<table border="0">
  <tr>
    <td colspan="3"><h1>Регистрация</h1></td>
  </tr>
  <tr>
    <td>Введите логин</td>
    <td><input type="text" id="login" onblur="loginScan()"></td>
    <td width="300"><span id="errLogin"></span></td>
  </tr>
  <tr>
    <td>Введите e-mail</td>
    <td><input type="email" id="mail"></td>
    <td><span id="errMail"></span></td>
  </tr>
  <tr>
    <td>Введите Имя</td>
    <td><input type="text" id="name"></td>
    <td><span id="errName"></span></td>
  </tr>
  <tr>
    <td>Введите пароль</td>
    <td colspan="2"><input type="password" id="passw"></td>
  </tr>
  <tr>
    <td>Повторите пароль</td>
    <td><input type="password" id="passwR"></td>
    <td><span id="errPassw"></span></td>
  </tr>
  <tr>
    <td colspan="3" height="40"><input type="submit" id="submit" value="Зарегистрироваться" disabled></td>
  </tr>
  <tr>
    <td colspan="3" height="40"><a href="?page=enter">Я уже зарегестрирован</a></td>
  </tr>
</table>
