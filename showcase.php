

<?php

  include("./php/konek.php");

  echo "<html>
  <head><title id='judulhalaman'>TentangQta</title>
  <meta charset='utf-8'>
  <script src='js/script.js'></script>
  <script src='js/aktif.js'></script>
  <link href='css/style.css' rel='stylesheet'>

  </head>
  <body id='awak'>



        <div class='saadah navbar-fixed-top'>";

		include("luhur.php");

		echo "


          </div>

          <center>

		  <div id='daftar_post' style='margin-top:150px;'>";
		  include("showcase_posts.php");

		echo "</div>";


  echo "</center>
  </body>
    <!-- jQuery -->
    <script src='js/jquery.js'></script>

    <!-- Scrolling Nav JavaScript -->
    <script src='js/jquery.easing.min.js'></script>
    <script src='js/scrolling-nav.js'></script>
  </html>";
?>
