<html>

<head>
  <title>KARDI ONLINE SHOP | Admin Home</title>

  <link href="css/style.css" rel="stylesheet">

</head>

<body>
  <?php
  session_start();
if(!isset($_SESSION["stat_login"]))
{
  echo "<center><div class=\"img_note\">
        <form action='./php/validate.php' method='post'>
        <p>Username :<br />
        <input type='text' class='masuk' name='username' /></p>
        <p>Password :<br />
        <input type='password' class='masuk' name='password' /></p>
        <p><button type='submit'>Login</button></p>
        </form>
        </div>
        <br>
        <p style='margin-top:160px; font-size:23px'>
        <b>KARDI <span style='color:magenta;'>ONLINE SHOP</span></b>
        </p>
        </center>";
}
else {
  header("location:rumahku.php");
      }

 ?>
</body>

</html>
