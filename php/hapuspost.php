<?php include("konek.php");

$id1 = $_GET["id_post"];
if($d1!=="")
{
  session_start();
  $id = $_SESSION["id_pengguna"];
  mysqli_query($konek,"DELETE FROM postingan WHERE id_postingan='$id1' AND id_pengguna='$id'");
  mysqli_query($konek,"DELETE FROM suka WHERE id_postingan='$id1'");
}
header("location:../rumahku.php");
?>
