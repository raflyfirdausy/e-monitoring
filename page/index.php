 <?php include 'header.php'?>
      <section class="content">  
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Selamat Datang</h3>
          </div>
          <div class="box-body">
            <div class="col-md-4">
              <div class="box box-warning">
              <div class="box-header with-border">
                <h3 class="box-title"> E-Monitoring Perlatan Alat Kerja</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body" align="center"> 
                <img src="tema/dist/img/logo_Pln.png" alt="logo" width="50%" align="center"> 
                <br> 
                <hr> 
              </div>
              <!-- /.box-body -->
            </div>
          </div>
          <div class="col-md-8"> 
              <div class="box box-warning">
              <div class="box-header with-border">
                <h3 class="box-title">Menu::..</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body"> 
                <div class="col-lg-6 col-xs-6"> 
                  <a href="cek_kondisi.php">
                    <div class="small-box bg-blue">
                      <div class="inner">
                        <h3>Transaksi</h3>

                        <p>Cek Kondisi</p>
                      </div>
                      <div class="icon">
                        <i class="fa fa-file-text-o"></i>
                      </div>
                      <p class="small-box-footer">
                        Detail <i class="fa fa-arrow-circle-right"></i>
                      </p>
                    </div>
                  </a> 
                </div>
                <div class="col-lg-6 col-xs-6"> 
                  <a href="verif_kondisi.php">
                    <div class="small-box bg-aqua">
                      <div class="inner">
                        <h3>Verifikasi</h3>

                        <p>Verif Laporan Perbaikan</p>
                      </div>
                      <div class="icon">
                        <i class="fa fa-check"></i>
                      </div>
                      <p class="small-box-footer">
                        Detail <i class="fa fa-arrow-circle-right"></i>
                      </p>
                    </div>
                  </a> 
                </div>
                <div class="col-lg-6 col-xs-6"> 
                  <a href="tracking.php">
                    <div class="small-box bg-orange">
                      <div class="inner">
                        <h3>Tracking</h3>

                        <p>Cari Laporan Perbaikan</p>
                      </div>
                      <div class="icon">
                        <i class="fa  fa-search"></i>
                      </div>
                      <p class="small-box-footer">
                        Detail <i class="fa fa-arrow-circle-right"></i>
                      </p>
                    </div>
                  </a> 
                </div>
                <div class="col-lg-6 col-xs-6"> 
                  <a href="pel_ver.php">
                    <div class="small-box bg-green">
                      <div class="inner">
                        <h3>Pengerjaan</h3>

                        <p>Pengerjaan Laporan Perbaikan</p>
                      </div>
                      <div class="icon">
                        <i class="fa  fa-cogs"></i>
                      </div>
                      <p class="small-box-footer">
                        Detail <i class="fa fa-arrow-circle-right"></i>
                      </p>
                    </div>
                  </a> 
                </div>
              </div>
              <!-- /.box-body -->
            </div>
          </div> 
          </div>
          <!-- /.box-body -->
        </div> 
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 1.1
      </div>
      <strong>Copyright &copy; <?=date('Y')?> <a href="pln.com">PLN (Persero)</a>.</strong> All rights
      reserved.
    </div>
    <!-- /.container -->

  </footer>

  <footer>
        <div class="android tetepf">
            <div class="row"  style="margin-left: auto; margin-right: auto;">
                <table class="col-sm-12" >
                   <!-- <tr></tr> -->
                    <tr><br>
                        <td>
                            <div class="col-sm-6">
                                <center><a href="index.php" class="nav-link" style="color: white; font-size: 14px;"><i class="fa fa-home"></i><br> Dashboard </a></center>
                            </div>
                        </td>

                        <td>
                            <div class="col-sm-6">
                                <center><a href="cek_kondisi.php" class="nav-link" style="color: white; font-size: 14px;"><i class="fa fa-pencil-square"></i><br> Ceking </a></center>
                            </div>
                        </td> 
                        <td>
                            <div class="col-sm-6">
                                <center><a href="verif_kondisi.php" class="nav-link" style="color: white; font-size: 14px;"><i class="fa fa-check-square-o"></i><br> Verifikasi </a></center>
                            </div>
                        </td> 
                        <td>
                            <div class="col-sm-6">
                                <center><a href="tracking.php" class="nav-link" style="color: white; font-size: 14px;"><i class="fa fa-recycle"></i><br> Tracking</a></center>
                            </div>
                        </td> 
                    </tr>
                </table>
            </div>
        </div>
    </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="tema/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="tema/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="tema/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="tema/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="tema/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="tema/dist/js/demo.js"></script>
<!-- InputMask -->
<script src="tema/plugins/input-mask/jquery.inputmask.js"></script>
<script src="tema/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="tema/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- DataTables -->
<script src="tema/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="tema/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- Select2 -->
<script src="tema/plugins/select2/select2.full.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2(); 
  });
</script>
</body>
</html>
