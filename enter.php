<form action="index.php?page=enter&funk=login" method="post">
<table>
  <tr>
    <td align="center"><h1>Вход</h1></td>
  </tr>
  <tr>
    <td><input type="text" id="login" name="login" placeholder="Введите логин или почту"></td>
  </tr>
  <tr>
    <td><input type="password" id="password" name="password" placeholder="Введите пароль"></td>
  </tr>
  <tr>
    <td align="center"><input type="submit" id="submit" value="Войти"></td>
  </tr>
  <tr>
    <td align="center" height="50"><a href="?page=reg">Регистрация</a></td>
  </tr>
</table>
</form>

<?php
include"auth.php";

if ((!empty($_GET['funk'])) && ($_GET['funk'] == "login")) {

    if (!empty($_POST['login'])) {
      $login = $_POST['login'];

      if (!empty($_POST['password'])) {
        $password = $_POST['password'];

        $result = mysql_query("SELECT * FROM users WHERE login='$login' OR mail='$login'");
        $myrow = mysql_fetch_array($result);
        if (empty($myrow['login'])) {
          echo"<font color=red>Не верная пара логин/пароль</font>";
        } else {
          if ($myrow['password'] == md5(md5($password))) {
            $_SESSION['nick'] = $login;
            exit ("<script>location.href='index.php?page=start'</script>");
          } else {
            echo"<font color=red>Не верная пара логин/пароль</font>";
          }
        }

      }

    }

}
 ?>
