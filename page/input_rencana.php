 <?php include 'header.php';  include '../config/koneksi.php';
    $query = mysqli_query($conn,"SELECT A.*,B.nama_gi,C.kondisi,D.nilai,D.file
              FROM t_kondisi A
              LEFT JOIN m_gi B ON A.id_gi = B.id
              LEFT JOIN m_kondisi C ON A.id_kondisi = C.id
              LEFT JOIN t_kondisi_detail D ON D.qr = A.qr
              WHERE A.qr ='".$_GET['id']."'"); 
    $data = mysqli_fetch_array($query);
    // var_dump($data);
 ?>
      <section class="content">  
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Form Input Rencana</h3>
          </div>
          <div class="box-body">
            <div class="col-md-12">   
            <div class="col-md-5"> 
                <div class="box box-warning box-solid">
                  <div class="box-header with-border">
                    <h3 class="box-title">Detail Laporan Pemeriksaan</h3>

                    <div class="box-tools pull-right">
                      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                      </button>
                    </div> 
                  </div> 
                  <div class="box-body">
                    <table width="100%" class="table table-striped" >
                      <tr>
                        <td style="width: 35%;">ID Laporan</td>
                        <td>:</td>
                        <td><?=$data['qr']?></td>
                      </tr>
                      <tr>
                        <td>Gardu Induk</td>
                        <td>:</td>
                        <td><?=$data['nama_gi']?></td>
                      </tr>
                      <tr>
                        <td>Tanggal Input</td>
                        <td>:</td>
                        <td><?=$data['tgl_input']?></td>
                      </tr>
                      <tr>
                        <td colspan="3" style="background-color: #ffd9b3;"><b>Detail Laporan</b></td> 
                      </tr>
                      <tr>
                        <td>Kondisi</td>
                        <td>:</td>
                        <td><?=$data['kondisi']?></td>
                      </tr>
                      <tr>
                        <td>Nilai</td>
                        <td>:</td>
                        <td><?=$data['nilai']?></td>
                      </tr>
                      <tr>
                        <td>File Pendukung</td>
                        <td>:</td>
                        <td><img class="rounded-circle mx-auto d-block"  src="images/<?php echo $data['file']; ?>" style="width: 60%"></img></td>
                      </tr>

                    </table>
                  </div> 
                </div>
            </div>
            
            <div class="col-md-7">
                <div class="box box-success box-solid">
                  <div class="box-header with-border">
                    <h3 class="box-title">Input Rencana</h3>

                    <div class="box-tools pull-right">
                      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                      </button>
                    </div>
                    <!-- /.box-tools -->
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body"> 
                      <form action="input_rencana_save.php" method="post" class="form-horizontal" enctype="multipart/form-data">  
                        <input type="hidden" name="id" id="id" value="<?=$_GET['id']?>">
                        <div class="form-group">
                          <div class="col-lg-12"> 
                            <div class="col-lg-6"> 
                              <label>Tanggal Awal Pelaksanaan</label> 
                             <input type="date" name="tgl_input_awal" id="tgl_input_awal" class="form-control" value="<?=date('Y-m-d')?>" >
                            </div>
                            <div class="col-lg-6"> 
                              <label>Tanggal Akhir Pelaksanaan</label> 
                             <input type="date" name="tgl_input_akhir" id="tgl_input_akhir" class="form-control" value="<?=date('Y-m-d')?>" >
                            </div>
                            
                          </div>
                        </div> 
                        <div class="form-group">
                          <div class="col-lg-12"> 
                             <div class="col-lg-12"> 
                             <label>RAB</label> 
                             <input type="text" name="rab" id="rab" class="form-control" placeholder="20000000">
                             </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-lg-12"> 
                             <div class="col-lg-12"> 
                             <label>Material</label> 
                             <input type="text" name="material" id="material" class="form-control" placeholder="Input Material...">
                             </div>
                          </div>
                        </div>
                        <div align="right">
                          <div class="col-lg-12"> 
                             <div class="col-lg-12"> 
                                <button class="btn btn-primary bd-0" type="submit" >Simpan</button>  
                             </div>
                          </div>
                        </div>
                      </form>
                  </div>
                  <!-- /.box-body -->
                </div>
            </div> 
            <!-- /.col -->
            
 
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
      var imageTypes = ['jpeg', 'jpg', 'png', 'pdf']; //Validate the images to show
      function showImage(src, target)
      {
        var fr = new FileReader();
        fr.onload = function(e)
        {
          target.src = this.result;
        };
        fr.readAsDataURL(src.files[0]);

      }

      var uploadImage = function(obj)
      { var val = obj.value;
        var lastInd = val.lastIndexOf('.');
        
        var ext = val.slice(lastInd + 1, val.length);
        if (imageTypes.indexOf(ext.toLowerCase()) !== -1)
        {
          var id = $(obj).data('target');                    
          var src = obj;
          var target = $(id)[0]; 
          //alert(src);
          showImage(src, target);
        }
        else
        {
          alert("File ditolak, Format File yang diijinkan hanya jpeg, jpg, png, pdf ");
          $('#Penduduk_file_ktp').val('');
          document.getElementById("aImgShow").src="";
          obj.value = "";
        }
        
      }  
    </script>
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

  function setkondisi()
  { 
     var a = $("#s_kondisi").val();   
     if(a == ''){
          alert('Pilih Status Kondisi');
          return false;
     }

     if(a == '2')
     {
        // alert(a);
        $("#loaddata").html('Load data parameter');  
        var id = $("#kondisi").val(); 
        if(id == ''){
          alert('Silahkan Pilih Kondisi');
          $("#loaddata").html(''); 
          return false;
        }else{
            $.ajax({
                    url: "cek_kondisi_detail.php",
                    type: "GET",
                    data:"id="+id,   
                    contentType: false,       
                    cache: false,             
                    processData:false, 
                    success: function (data) {  
                      console.log(data);   
                      $("#loaddata").html(data);
                    },
                    error: function(e) { 
                      alert('Gagal Terhubung ke Server');
                      location.reload();
                    }
            }); 
        }
     }else{

        $("#loaddata").html(''); 
     }
  }
</script>
</body>
</html>
