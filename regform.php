<form action="newuser.php" method="post">
<table border="0">
  <tr>
    <td colspan="3"><h1>Регистрация</h1></td>
  </tr>
  <tr>
    <td width="170">Введите логин</td>
    <td width="200"><input type="text" name="login" id="login" onblur="validateForm()"></td>
    <td width="500"><span id="errLogin"></span></td>
  </tr>
  <tr>
    <td>Введите e-mail</td>
    <td><input type="email" id="mail" name="mail" onblur="validateForm()"></td>
    <td><span id="errMail"></span></td>
  </tr>
  <tr>
    <td>Введите Имя</td>
    <td><input type="text" id="name" name="name" onblur="validateForm()"></td>
    <td><span id="errName"></span></td>
  </tr>
  <tr>
    <td>Введите пароль</td>
    <td><input type="password" name="password" id="password" onblur="validateForm()"></td>
    <td><span id="errPassword"></span></td>
  </tr>
  <tr>
    <td>Повторите пароль</td>
    <td><input type="password" id="passwordR" onblur="validateForm()"></td>
    <td><span id="errPasswordR"></span></td>
  </tr>
  <tr>
    <td colspan="3" height="40"><input type="submit" id="submit" value="Зарегистрироваться" disabled></td>
  </tr>
  <tr>
    <td colspan="3" height="40"><a href="?page=enter">Я уже зарегистрирован</a></td>
  </tr>
</table>
</form>
