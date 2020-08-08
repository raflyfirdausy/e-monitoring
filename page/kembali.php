 <?php include 'header.php';  include '../config/koneksi.php';?>
      <section class="content">  
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Form Peminjaman</h3>
          </div>
          <div class="box-body">
            <div class="col-md-12">  
            <form id="formretribusi" action="kembali.php" method="post" class="form-horizontal">  
            <div class="col-md-12"> 
              <div class="form-group">
                <div class="col-lg-12"> 
                  <label>Scan Kode Barcode</label>
                  <input type="text" class="form-control pull-right" id="barcode" name="barcode" placeholder="barcode....">
                </div>
              </div>
              <!-- /.form-group -->
            </div> 
            <!-- /.col --><br>
            <div align="right">
                <button class="btn btn-primary bd-0" type="submit">Simpan</button> 
                <a href="pinjam.php" type="button" class="btn btn-warning  ">REFRESH</a>   
            </div>
            </form>
            </div> 

          <!--start fn. simpan data-->
          <?php 
                if(isset($_POST['barcode'])){ 
                   
                  $barcode           = $_POST['barcode'];

                  $query = mysqli_query($conn,"UPDATE trs_peminjaman SET tglkembali = '".date('Y/m/d')."' WHERE idalat = '".$_POST['barcode']."' ");  
                  echo "
                    <div class='alert alert-solid alert-success' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                      <span aria-hidden='true'>×</span>
                    </button>
                    <strong>Selamat!</strong> Data Berhasil di Simpan.
                  </div>" ;
                  echo "<meta http-equiv='refresh' content='0;url=kembali.php'>";
                } 

          ?>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">                
              <div class="box box-success"> 

                <div class="box-header with-border">
                  Tabel Hasil Input 
                </div>
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr class="headings">
                            <th width="3%">No </th>
                            <th width="10%">Kode</th>
                            <th width="20%">Nama Peralatan</th>
                            <th width="10%">Type</th>
                            <th >Nomor Seri</th>
                            <th >Nama Assesories</th>
                            <th width="10%">Jumlah</th>
                            <th width="10%">Kalibrasi</th>
                            <th width="10%">Tgl Keluar </th>
                            <th width="10%">Tgl Kembali</th>
                            <th width="10%">Keterangan</th> 
                        </tr>  
                    </thead>
                    <tbody>
                       <?php  
                          $query = mysqli_query($conn,"select  a.*,b.nama,b.tipe,b.noseri from trs_peminjaman  a 
                                                        left join m_namaalat as b ON a.idalat = b.kode   
                                                        order by id DESC");
                          $no = 1;
                          while ($data = mysqli_fetch_array($query)) {?>
                        <tr>
                          <td><?=$no;?></td>
                          <td><?=@$data['idalat'];?></td>
                          <td><?=@$data['nama'];?></td>
                          <td><?=@$data['tipe'];?></td>
                          <td><?=@$data['noseri'];?></td> 
                          
                          <td> </td> 
                          <td> </td> 
                          <td> </td> 
                          <td><?=@$data['tgltransaksi'];?></td> 
                          <td> </td> 
                          <td> </td>   
                        </tr>  
                        <?php $no++; } ?>
                    </tbody>
                  </table>
                </div>
               </div>
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
        <b>Version</b> 2.3.8
      </div>
      <strong>Copyright &copy; <?=date('Y')?> <a href="pln.com">PLN (Persero) </a>.</strong> All rights
      reserved.
    </div>
    <!-- /.container -->
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
  function simpan() {  
      var a = new FormData(document.getElementById("formretribusi")); 
      // $("#saveprogress").css("display","block");
            $.ajax({
                url: "simpanalat.php",
                type: "POST",
                data: a,  
                enctype: 'multipart/form-data',
                contentType: false,       
                cache: false,             
                processData:false, 
                success: function (data) {  
                  console.log(data); 
                    alert("Selamat data berhasil dikirim!!!"); 
                    location.reload(); 
                },
        error: function(e) { 
          alert('Gagal Terhubung ke Server');
          location.reload();
        }
        });
} 
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
