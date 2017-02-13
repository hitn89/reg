<?php session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Сайт</title>
    <link rel="stylesheet" type="text/css" media="all" href="img/style.css" />
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/script.js" type="text/javascript"></script>
  </head>
  <body>
    <table width="100%" height="800" border="1">
      <tr>
        <td align="center" width="80%">
        <?php
        if (empty($_SESSION['nick'])){
          if(!empty($_GET['page'])){
            $page = $_GET['page'];
            switch ($page) {
              case 'enter':
                  include"enter.php";
                break;
              case 'reg':
                  include"reg.php";
                break;
              case 'start':
                  include"start.php";
                break;
              default:
                  echo"Попытка взлома? :))";
                  break;
            }

          } else {
            include"enter.php";
          }
        } else { include"start.php"; }
         ?>
        </td>
        <td valign="top">
          <h2>Зарегестрированные пользователи:</h2>
          <?php include"users.php"; ?>
        </td>
      </tr>
    </table>

  </body>
</html>
