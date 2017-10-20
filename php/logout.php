<?php
session_start();
$username1=$_SESSION["username"];
include("konek.php");
mysqli_query($konek, "UPDATE `pengguna` SET `lagi_on` = '0',`terakhir_keluar` = TIMESTAMP(NOW()) WHERE `pengguna`.`username` = '$username1'");
unset($_SESSION["stat_login"]);
unset($_SESSION["username"]);
unset($_SESSION["password"]);
session_destroy();
header("location:../index.php");
 ?>
