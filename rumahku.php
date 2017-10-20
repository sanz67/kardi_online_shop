

<?php

session_start();
if(!isset($_SESSION["stat_login"]) and
!isset($_SESSION["username"]) and
!isset($_SESSION["password"]))
{
  header("location:index.php");
}else {
  include("./php/konek.php");
  $username_ku = $_SESSION["username"];

  include("rumahku_dataakun.php");
  include("rumahku_cekpesan.php");

  ////////////////html dimulai
  echo "<html>
  <head><title id='judulhalaman'>TentangQta $saadah</title>
  <meta charset='utf-8'>
  <script src='js/script.js'></script>
  <script src='js/aktif.js'></script>
  <link href='css/style.css' rel='stylesheet'>

  </head>
  <body id='awak'>



        <div class='saadah navbar-fixed-top'>";

		//include("luhur.php");

		echo "


          </div>

          <center>
          <p style='padding-top:100px'>
           </p>
           <br>
            <textarea class='nangningnung' id='jdl' name='jdl' rows='1' cols='40' placeholder='Judul'></textarea><br><br>
            <textarea class='nangningnung' id='postingan' name='postingan' rows='3' cols='40' placeholder='Deskripsi Barang'></textarea><br/><br>
            <textarea class='nangningnung' id='harga' name='harga' rows='1' cols='40' placeholder='Harga'></textarea>
          <p><button onclick='kirim()'>POST</button></p>
          <br />
          <br />
          <br />


		  <div id='daftar_post'>";


		  include("rumahku_post.php");

		echo "</div>";


  echo "</center>
  </body>
    <!-- jQuery -->
    <script src='js/jquery.js'></script>

    <!-- Scrolling Nav JavaScript -->
    <script src='js/jquery.easing.min.js'></script>
    <script src='js/scrolling-nav.js'></script>
  </html>";
}?>
