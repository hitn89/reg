<h1>WELCOME! <?php echo"$_SESSION[nick]"; ?></h1>
<a href="?funk=exit">выход</a>
<?php
if((!empty($_GET['funk'])) && ($_GET['funk']=="exit")) { session_destroy(); echo"exit (\"<script>location.href='index.php'</script>\");"; }
 ?>
