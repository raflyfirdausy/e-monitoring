 <?php include 'header.php';  include '../config/koneksi.php';?>
      <section class="content">  
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Form Input Aksesosries</h3>
          </div>
          <div class="box-body">
            <div class="col-md-4"> 
              <?php 
                if(isset($_GET['kode'])){ 
                  $query = mysqli_query($conn,"select * from m_namaalat where kode='".$_GET['kode']."'");
                  $data = mysqli_fetch_array($query);
                } 
              ?>
            <form id="formretribusi" action="javascript:void(0)" method="post" class="form-horizontal"> 
            <div class="col-md-12">
              <div class="form-group">
                <div class="col-lg-12"> 
                  <label>Kode</label>
                  <input type="text" class="form-control pull-right" id="kode" name="kode" placeholder="kode...." value="<?=@$data['kode']?>" readonly>
                </div>
              </div> 
              <div class="form-group">
                <div class="col-lg-12"> 
                  <label>Nama</label>
                  <input type="text" class="form-control pull-right" id="nama" name="nama" placeholder="nama....">
                </div>
              </div> 
              <div class="form-group">
                <div class="col-lg-12"> 
                  <label>Merk</label>
                  <input type="text" class="form-control pull-right" id="merk" name="merk" placeholder="merk....">
                </div>
              </div> 
              <div class="form-group">
                <div class="col-lg-12"> 
                  <label>Type</label>
                  <input type="text" class="form-control pull-right" id="tipe" name="tipe" placeholder="tipe....">
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-12"> 
                  <label>No. Seri</label>
                  <input type="text" class="form-control pull-right" id="noseri" name="noseri" placeholder="noseri....">
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-12"> 
                  <label>Jumlah</label>
                  <input type="text" class="form-control pull-right" id="jumlah" name="jumlah" placeholder="jumlah....">
                </div>
              </div>
              <!-- /.form-group -->
            </div> 
            <!-- /.col -->
            <div align="right">
                <a href="javascript:void(0)" type="button" onclick="simpan();" class="btn btn-info ">Simpan Data...</a> 
                <a href="m_alat.php" type="button" class="btn btn-warning  ">Kembali</a>   
            </div>
            </form>
            </div>
          <div class="col-md-8"> 
              <div class="box box-warning">
              <div class="box-header with-border">
                <h3 class="box-title">Tampil Data::..</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">  
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr class="headings">
                            <th width="3%">No </th>
                            <th width="15%">Kode</th>
                            <th width="10%">Nama</th>
                            <th width="10%">Merk</th>
                            <th >Type</th>
                            <th >No. Seri</th>
                            <th width="10%">Jumlah</th> 
                            <th width="10%">Aksi</th>
                        </tr>  
                    </thead>
                    <tbody> 
                        <?php  
                            $query = mysqli_query($conn,"select * from m_aksesories_alat order by id DESC");
                            $no = 1;
                            while ($data = mysqli_fetch_array($query)) {?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?=@$data['kode']; ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['noseri']; ?></td> 
                                    <td><?php echo $data['merk']; ?></td> 
                                    <td><?php echo $data['tipe']; ?></td> 
                                    <td><?php echo $data['jumlah']; ?></td> 
                                    <td> 
                                       
                                    </td>   
                                </tr>
                        <?php $no++; } ?>
                    </tbody>
                  </table>
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
                url: "simpanaksesories.php",
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
