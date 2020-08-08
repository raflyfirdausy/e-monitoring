
<?php
ob_start(); 
error_reporting(0);
if (isset($_SESSION['username']) & isset($_SESSION['password'])& isset($_SESSION['id_level']))
{
  if($_SESSION['id_level']== 1)
    {
        header('location:page/index.php'); 
    }
    elseif ($_SESSION['id_level']== 2)
    {
        header('location:page/index.php');  

    }
    elseif ($_SESSION['id_level']== 3)
    {
        header('location:page/index.php');  
    }
    elseif ($_SESSION['id_level']== 4)
  {
      header('location:pagekom/index.php');  
    }
    else
    {
    }
 }
else if (isset($_SESSION['username']) & !isset($_SESSION['password']))
{
    header('location:autologout.php'); 
}
else if (!isset($_SESSION['username']) & !isset($_SESSION['password']))
{
     
}
?><!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Slim">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/slim/img/slim-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/slim">
    <meta property="og:title" content="Slim">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/slim/img/slim-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/slim/img/slim-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Slim Responsive Bootstrap 4 Admin Template</title>

    <!-- Vendor css -->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="lib/Ionicons/css/ionicons.css" rel="stylesheet">

    <!-- Slim CSS -->
    <link rel="stylesheet" href="css/slim.css">

  </head>
  <body>

    <div class="d-md-flex flex-row-reverse">
      <div class="signin-right">

        <div class="signin-box">
          <h2 class="signin-title-primary">Selamat Datang!</h2>
          <h3 class="signin-title-secondary">Login untuk memulai sistem...</h3>
          <form class="form-horizontal" action="login_proses.php" method="post">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Masukan Username" name="username">
            </div><!-- form-group -->
            <div class="form-group mg-b-50">
              <input type="password" class="form-control" placeholder="Masukan Password" name="password">
            </div><!-- form-group -->
            <button class="btn btn-primary btn-block btn-signin" type="submit">Sign In</button> 
          </form>
        </div>

      </div><!-- signin-right -->
      <div class="signin-left">
        <div class="signin-box"> 
         <img src="img/Logo_PLN.png" width="15%" alt="">&nbsp;&nbsp;&nbsp;<img src="img/icon.png" width="40%" alt=""> <br><br>
          <p>E-Monitoring Alat Kerja merupakan aplikasi elektronik yang digunakan untuk melakukan controlling terhadap peralatan
          yang ada di dalam ruang penyimpanan. Struktur database yang baik maka akan memeberikan efektifitas terhadap.</p>

           

          <p class="tx-12">&copy; Copyright 2019. All Rights Reserved.</p>
        </div>
      </div><!-- signin-left -->
    </div><!-- d-flex -->

    <script src="lib/jquery/js/jquery.js"></script>
    <script src="lib/popper.js/js/popper.js"></script>
    <script src="lib/bootstrap/js/bootstrap.js"></script>

    <script src="js/slim.js"></script>

  </body>
</html>
