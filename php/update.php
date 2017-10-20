<?php include("konek.php");

$judul = $_GET["judul"];
$harga = $_GET["harga"];
$isi = $_GET["pesan"];

if($isi!=="")
{
  session_start();
  $id = $_SESSION["id_pengguna"];
  $sekarang = date("Y-m-d G:i:S");
  $sekarang = date("Y-m-");
  $tgl= date("d");
  $sekarang .= $tgl+1;
  $sekarang .= " ";

  $jam2 = mysqli_query($konek, "SELECT TIME(NOW()) AS jam");
  $jam1 = mysqli_fetch_assoc($jam2);
  $jam = $jam1['jam'];

  $isi = htmlentities($isi);
  $sekarang .= $jam;
  mysqli_query($konek,"INSERT INTO postingan (tgl_post, isi, id_pengguna, suka, harga, judul) VALUES ('$sekarang', '$isi', '$id', '0', '$harga', '$judul')");
}
header("location:../rumahku.php");
?>
