<?php 
include '../config/koneksi.php';
?>
<!DOCTYPE html>
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

    <!-- vendor css -->
    <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="../lib/datatables/css/jquery.dataTables.css" rel="stylesheet">
    <link href="../lib/select2/css/select2.min.css" rel="stylesheet">

    <!-- Slim CSS -->
    <link rel="stylesheet" href="../css/slim.css">

  </head>
  <body>
        <div class="slim-header">
      <div class="container">
        <div class="slim-header-left">
          <img src="../img/Logo_PLN.png" width="4.5%" alt="">&nbsp;&nbsp;&nbsp;<img src="../img/icon.png" width="10%" alt=""> 
        </div><!-- slim-header-left -->
        <div class="slim-header-right">  
          <div class="dropdown dropdown-b">
            <a href="" class="header-notification" data-toggle="dropdown">
              <i class="icon ion-ios-bell-outline"></i>
              <span class="indicator"></span>
            </a>
            <div class="dropdown-menu">
              <div class="dropdown-menu-header">
                <h6 class="dropdown-menu-title">Notifications</h6>
                <div>
                  <a href="">Mark All as Read</a>
                  <a href="">Settings</a>
                </div>
              </div><!-- dropdown-menu-header -->
              <div class="dropdown-list">
                <!-- loop starts here -->
                <a href="" class="dropdown-link">
                  <div class="media">
                    <img src="http://via.placeholder.com/500x500" alt="">
                    <div class="media-body">
                      <p><strong>Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                      <span>October 03, 2017 8:45am</span>
                    </div>
                  </div><!-- media -->
                </a>
                <!-- loop ends here -->
                <a href="" class="dropdown-link">
                  <div class="media">
                    <img src="http://via.placeholder.com/500x500" alt="">
                    <div class="media-body">
                      <p><strong>Mellisa Brown</strong> appreciated your work <strong>The Social Network</strong></p>
                      <span>October 02, 2017 12:44am</span>
                    </div>
                  </div><!-- media -->
                </a>
                <a href="" class="dropdown-link read">
                  <div class="media">
                    <img src="http://via.placeholder.com/500x500" alt="">
                    <div class="media-body">
                      <p>20+ new items added are for sale in your <strong>Sale Group</strong></p>
                      <span>October 01, 2017 10:20pm</span>
                    </div>
                  </div><!-- media -->
                </a>
                <a href="" class="dropdown-link read">
                  <div class="media">
                    <img src="http://via.placeholder.com/500x500" alt="">
                    <div class="media-body">
                      <p><strong>Julius Erving</strong> wants to connect with you on your conversation with <strong>Ronnie Mara</strong></p>
                      <span>October 01, 2017 6:08pm</span>
                    </div>
                  </div><!-- media -->
                </a>
                <div class="dropdown-list-footer">
                  <a href="page-notifications.html"><i class="fa fa-angle-down"></i> Show All Notifications</a>
                </div>
              </div><!-- dropdown-list -->
            </div><!-- dropdown-menu-right -->
          </div><!-- dropdown -->
          <div class="dropdown dropdown-c">
            <a href="#" class="logged-user" data-toggle="dropdown">
              <img src="http://via.placeholder.com/500x500" alt="">
              <span>Katherine</span>
              <i class="fa fa-angle-down"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <nav class="nav">
                <a href="page-profile.html" class="nav-link"><i class="icon ion-person"></i> View Profile</a>
                <a href="page-edit-profile.html" class="nav-link"><i class="icon ion-compose"></i> Edit Profile</a> 
                <a href="page-signin.html" class="nav-link"><i class="icon ion-forward"></i> Keluar</a>
              </nav>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </div><!-- header-right -->
      </div><!-- container -->
    </div><!-- slim-header -->

    <div class="slim-navbar">
      <div class="container">
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" href="home.php">
              <i class="icon ion-ios-home-outline"></i>
              <span>Dashboard</span>
            </a> 
          </li>
           
          <li class="nav-item with-sub active">
            <a class="nav-link" href="#">
              <i class="icon ion-ios-book-outline"></i>
              <span>Master Data</span>
            </a>
            <div class="sub-item">
              <ul>
                <li><a href="mnamaalat.php">Nama Alat</a></li> 
                <li><a href="alatuji.php">Alat Uji</a></li>  
                <li><a href="mnamaalat.php">User</a></li> 
              </ul>
            </div><!-- dropdown-menu -->
          </li>
          <li class="nav-item with-sub">
            <a class="nav-link" href="#" data-toggle="dropdown">
              <i class="icon ion-ios-gear-outline"></i>
              <span>Transaksi</span>
            </a>
            <div class="sub-item">
              <ul>
                <li><a href="peminjaman.php">Peminjaman</a></li>
                <li><a href="form-layouts.html">Pengembalian</a></li> 
              </ul>
            </div><!-- dropdown-menu -->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="page-messages.html">
              <i class="icon ion-ios-chatboxes-outline"></i>
              <span>Alert</span>
              <span class="square-8"></span>
            </a>
          </li> 
        </ul>
      </div><!-- container -->
    </div><!-- slim-navbar -->
 
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
          </ol>
          <h6 class="slim-pagetitle">Data Nama </h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">    
          <div class="row">
          <div class="col-lg-4">  
            Form Tambah Data<br><br>
            <form action="mnamaalat.php" method="get">
              <div class="form-layout form-layout-5">
                <div class="row">
                  <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> Kode:</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Masukan Kode" id="kode" name="kode">
                  </div>
                </div><!-- row -->
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> Nama:</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Masukan Nama" id="nama" name="nama">
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> No. Seri:</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Masukan No. Seri" id="noseri" name="noseri">
                  </div>
                </div> 
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> Merk:</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Masukan Merk" id="merk" name="merk">
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> Tipe:</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Masukan Tipe" id="tipe" name="tipe">
                  </div>
                </div>
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> Jumlah:</label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" class="form-control" placeholder="Masukan jumlah" id="jumlah" name="jumlah">
                  </div>
                </div>
                <div class="row mg-t-30">
                  <div class="col-sm-8 mg-l-auto">
                    <div class="form-layout-footer">
                      <button class="btn btn-primary bd-0" type="submit">Simpan</button>
                      <a href="mnamaalat.php" class="btn btn-secondary bd-0">Refresh</a>
                    </div><!-- form-layout-footer -->
                  </div><!-- col-8 -->
                </div>
              </div> 
            </form>
          </div>
          <div class="col-lg-8">
            Tampil Data<br><br>

          <!--start fn. simpan data-->
          <?php 
                if(isset($_GET['kode'])){ 
                  
                  $kode = $_GET['kode'];
                  $nama = $_GET['nama'];
                  $noseri = $_GET['noseri'];
                  $merk = $_GET['merk'];
                  $tipe = $_GET['tipe'];
                  $jumlah = $_GET['jumlah'];

                  $query = mysqli_query($conn,"INSERT INTO m_namaalat (id,kode,nama,noseri,merk,tipe,jumlah) VALUES ('','".$kode."','".$nama."','".$noseri."','".$merk."','".$tipe."','".$jumlah."')");  
                  echo "
                    <div class='alert alert-solid alert-success' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                      <span aria-hidden='true'>×</span>
                    </button>
                    <strong>Selamat!</strong> Data Berhasil di Simpan.
                  </div>" ;
                  
                } 

          ?>
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-5p">No.</th>
                  <th class="wd-15p">Kode</th>
                  <th class="wd-20p">Nama</th>
                  <th class="wd-15p">No. Seri</th>
                  <th class="wd-15p">Merk</th> 
                  <th class="wd-10p">Aksi</th> 
                </tr>
              </thead>
              <tbody>
                 <?php  
                  $query = mysqli_query($conn,"select * from m_namaalat");
                  $no = 1;
                  while ($data = mysqli_fetch_array($query)) {?>
                <tr>
                  <td><?=$no;?></td>
                  <td><?=@$data['kode'];?></td>
                  <td><?=@$data['nama'];?></td>
                  <td><?=@$data['noseri'];?></td>
                  <td><?=@$data['merk'];?></td>   
                  <td>
                    <a href="#" class="btn btn-warning btn-icon rounded-circle"><div><i class="fa fa-pencil"></i></div></a>
                    <a href="printbarcode.php?kode=<?=@$data['kode']?>" class="btn btn-primary btn-icon rounded-circle"><div><i class="fa fa-print"></i></div></a>
                    <a href="#" class="btn btn-danger btn-icon rounded-circle"><div><i class="fa fa-trash"></i></div></a>
                  </td> 
                </tr> 
                <?php $no++; } ?>
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div>
        </div>
        </div><!-- section-wrapper -->

      
      </div><!-- container -->
    </div><!-- slim-mainpanel -->
 
  
    <div class="slim-footer">
      <div class="container">
        <p>Copyright 2018 &copy; All Rights Reserved. PLN (Persero)</p>
        <p> version 1.0.1</p>
      </div><!-- container -->
    </div><!-- slim-footer -->

    <script src="../lib/jquery/js/jquery.js"></script>
    <script src="../lib/popper.js/js/popper.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.js"></script>
    <script src="../lib/jquery.cookie/js/jquery.cookie.js"></script>
    <script src="../lib/datatables/js/jquery.dataTables.js"></script>
    <script src="../lib/datatables-responsive/js/dataTables.responsive.js"></script>
    <script src="../lib/select2/js/select2.min.js"></script>

    <script src="../js/slim.js"></script>
    <script>
      $(function(){
        'use strict';

        $('#datatable1').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });

        $('#datatable2').DataTable({
          bLengthChange: false,
          searching: false,
          responsive: true
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>
  </body>
</html>
