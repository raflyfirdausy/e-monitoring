<?php
// memulai session 
session_start();
error_reporting(0);
if (isset($_SESSION['username']) & isset($_SESSION['password']))
{
   
}
else if (isset($_SESSION['username']) & !isset($_SESSION['password']))
{
  header('location:../index.php');  
}
else if (!isset($_SESSION['username']) & !isset($_SESSION['password']))
{
    header('location:../index.php'); 
}

include '../config/koneksi.php';
$inactive = 1000; // Set timeout period in seconds
if (isset($_SESSION['timeout'])) {
    $session_life = time() - $_SESSION['timeout'];
    if ($session_life > $inactive) {
        unset($_SESSION['password']);
        header("Location:../index.php");
    }
}
$_SESSION['timeout'] = time();
?>

  <style type="text/css">
  
/*@media (max-height: 600px) {

   USE THESE CLASSES TO HIDE CONTENT ON MOBILE 
 .mobile-hide {
  visibility: hidden;
    display: none;
 }

}*/
.tengah {
  text-align: center;
  margin-right: auto;
  margin-left: auto;
}

img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}

.tetepf {
    position: fixed;
    bottom: 0;
    width: 100%;
    background-color: #fa5757;
  }

 .desktop{
  display: block;
 }
 .desktop1{
  display: block;
  text-align: left;
 }

 .android{
  display: none;
 }


  @media only screen and (max-width: 868px) {
    .android{
      display: block;
      margin: auto;
    }
    .desktop{
      display: none;
    }
    .desktop1{
      display: block;
      
      margin: auto;
    }
  }

</style>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E-Monitoring</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="tema/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="tema/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="tema/dist/css/skins/_all-skins.min.css">
<!-- DataTables -->
  <link rel="stylesheet" href="tema/plugins/datatables/dataTables.bootstrap.css">
  
  <!-- Select2 -->
  <link rel="stylesheet" href="tema/plugins/select2/select2.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-red layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="" class="navbar-brand"><b>E</b>-Monitoring</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>  

        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li ><a href="index.php"><i class="fa fa-home"></i> Dashboard </a></li>
             
            <li>
            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Master Data<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu"> 
                <li><a href="m_induk.php">Induk</a></li>  
                <li><a href="m_upt.php">UPT</a></li>  
                <li><a href="m_utlg.php">UTLG</a></li>  
                <li><a href="m_gi.php">GI</a></li>  
                <li><a href="m_jalur.php">Jalur</a></li>  
                <li><a href="m_kondisi.php">Kondisi</a></li>  
              </ul>
            </li>   
            <li>
            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Transaksi<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu"> 
                <li><a href="cek_kondisi.php">Cek Kondisi</a></li>   
                <li><a href="verif_kondisi.php">Verifikasi</a></li> 
                <li><a href="pel_ver.php">Pelaksanaan</a></li> 
                <li><a href="tracking.php">Tracking</a></li> 
              </ul>
            </li>  
            <!-- <li>
            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Laporan<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu"> 
                <li><a href="pinjam.php">Peminjaman</a></li>   
                <li><a href="kembali.php">Pengembalian</a></li>   
              </ul>
            </li>  
            <li>
            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Setting<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu"> 
                <li><a href="pinjam.php">Pengguna</a></li>     
              </ul>
            </li>   -->
          </ul> 
        </div> 

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="" class="user-image" alt="User Image">
              <span class="hidden-xs">asa</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="#" class="img-circle" alt="User Image"> 
                <p>admin</p>
              </li> 
            </ul>
          </li> -->
 
           <li class="user user-menu bg-yellow">
           <a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Logout</a>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul> 
      </div> 
      </div>
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <!-- Main content -->
       