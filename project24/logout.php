<?php
session_start();
session_regenerate_id(true);
session_destroy();
setcookie('logged_in', '', time() - 3600, "/");
header('Location: login.php');
?>
