<?php
session_start();
include("konek.php");
$username = $_POST["username"];
$password = $_POST["password"];
//$pass = $_POST["password"];
echo $username . " " . $password;

$result=mysqli_query($konek,"SELECT username, password, id_pengguna FROM pengguna WHERE username='$username' and password='$password'");
$rows = mysqli_fetch_array($result);
$pass = $rows['password'];
$id_pengguna = $rows['id_pengguna'];

echo $pass . " " . $id_pengguna;


if(isset($_POST["username"]) and isset($_POST["password"]))
{
  if($_POST["username"]=="" or $_POST["password"]=="")
  {
    echo "gak boleh ada yang kosong";
  }
  elseif($_POST["username"]==$username and  $_POST["password"]==$pass)
  {
    $_SESSION["stat_login"]=1;
    $_SESSION["username"]=$_POST["username"];
    $_SESSION["password"]=$_POST["password"];
    $_SESSION["id_pengguna"]=$id_pengguna;

    mysqli_query($konek, "UPDATE `pengguna` SET `terakhir_masuk` = TIMESTAMP(NOW()), `terakhir_on` = TIMESTAMP(NOW()) WHERE `pengguna`.`id_pengguna` = $id_pengguna");
    ///
    mysqli_query($konek, "UPDATE `pengguna` SET `lagi_on` = '1' WHERE `pengguna`.`id_pengguna` = $id_pengguna");
    //
    header("location:../rumahku.php");

  }else {
    header("location:../index.php");
    echo "username atau password salah<br><br>";
    die("silahkan klik <a href='../index.php'>disini</a> untuk login lagi");
  }
}else {
  echo "data tidak lengkap";
}
