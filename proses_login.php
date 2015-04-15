<?php
session_start();
$username = $_POST['username'];
$pass = $_POST['password'];
if($username <> 'admin' and $pass <> 'admin') {
echo "Username Belum Terdaftar!<br/>";
echo "<a href='login.php'>&amp;amp;laquo; Back</a>";
} else {
$_SESSION['username'];
header('location: index.php');
}

?>