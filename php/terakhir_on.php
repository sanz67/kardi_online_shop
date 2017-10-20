<?php include("konek.php");

$id = $_GET['id'];
session_start();
$id_pengguna = $_SESSION['id_pengguna'];

$hasil1 = mysqli_query($konek, "SELECT terakhir_on FROM pengguna WHERE id_pengguna='$id'");
$sanz = mysqli_fetch_assoc($hasil1);
$hasil = $sanz['terakhir_on'];

$bln=substr($sanz['terakhir_on'], 5, 2);
$tgl=substr($sanz['terakhir_on'], 8, 2);
$thn=substr($sanz['terakhir_on'], 0, 4);

$jam=substr($sanz['terakhir_on'], 11, 2);
$menit=substr($sanz['terakhir_on'], 14, 2);
$detik=substr($sanz['terakhir_on'], 17, 2);

if(substr($sanz['terakhir_on'], 5, 1)==0)
{
  $bln=substr($sanz['terakhir_on'], 6, 1);
}

$month1 = Array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');


echo $month1[$bln-1] . ' ' . $tgl . ', ' . $thn . " " . "$jam:$menit:$detik";
?>
