<?php include("konek.php");

$id1 = $_GET["id_post"];
if($id1!=="")
{
  session_start();
  $id = $_SESSION["id_pengguna"];
  mysqli_query($konek,"DELETE FROM suka WHERE id_postingan='$id1'");
  mysqli_query($konek,"DELETE FROM postingan WHERE id_postingan='$id1' AND id_pengguna='$id'");
}
echo "dihapus :(";
//header("location:../rumahku.php");
?>
