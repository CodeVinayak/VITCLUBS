<?php
include("connection.php");
include("jsfun.php");
$mail = mysqli_real_escape_string($conn, $_POST['register_email']);
$name = mysqli_real_escape_string($conn, $_POST['register_username']);
$pass = sha1(mysqli_real_escape_string($conn, $_POST['register_password']));
if ($_POST['register_newsletter'] == 'on') {
    $subs = 1;
} else {
    $subs = 0;
}

$check = mysqli_query($conn, "INSERT INTO `user`(`name`, `password`, `email`, `subscribe`) VALUES('$name','$pass','$mail','$subs')");
_redirect("../");



?>