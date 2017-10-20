<?php
session_start();
if(!isset($_SESSION["stat_login"]) and
!isset($_SESSION["username"]) and
!isset($_SESSION["password"]))
{
  header("location:index.php");
}else {
$id_pengguna=$_SESSION['username'];
include("konek.php");
mysqli_query($konek, "UPDATE `pengguna` SET `terakhir_on` = TIMESTAMP(NOW()) WHERE `pengguna`.`username` = '$id_pengguna'");
}
?>
