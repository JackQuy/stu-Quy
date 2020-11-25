<?php
session_start();
echo "login";
$_SESSION['is_login'] = true;

header("Location: index.php");
?>
