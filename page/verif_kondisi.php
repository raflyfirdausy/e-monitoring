 <?php include 'header.php';  include '../config/koneksi.php';?>
      <section class="content">  
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Verifikasi</h3>
          </div>
          <div class="box-body">
            <div class="col-md-12">   
            <div class="col-md-12">
                 <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">                
                      <div class="box box-success"> 

                        <div class="box-header with-border">
                          Verifikasi Laporan Kondisi
                        </div>
                        <div  class="table-responsive">
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr class="headings">
                                    <th width="3%">No </th>
                                    <th width="20%">Gardu Induk</th>
                                    <th width="10%">Kondisi</th>
                                    <th width="10%">Tgl Input</th>
                                    <th width="20%">Status Kondisi</th> 
                                    <th width="10%">Status Laporan</th> 
                                    <th width="10%">Aksi</th> 
                                </tr>  
                            </thead>
                            <tbody>  
                              <?php 
                                  $query = mysqli_query($conn,"SELECT A.*,B.nama_gi,C.kondisi
                                            FROM t_kondisi A
                                            LEFT JOIN m_gi B ON A.id_gi = B.id
                                            LEFT JOIN m_kondisi C ON A.id_kondisi = C.id
                                            WHERE A.status_kondisi ='2'");
                                  $no = 1;
                                  while ($data = mysqli_fetch_array($query)) {?>
                                      <tr>
                                          <td><?php echo $no; ?></td>
                                          <td><?=@$data['nama_gi']; ?></td>
                                          <td><?php echo $data['kondisi']; ?></td>
                                          <td><?php echo $data['tgl_input']; ?></td>
                                          <td>
                                            <?php if($data['status_kondisi'] == '1'){?>
                                              <span class="label label-success">Normal</span>
                                            <?php }else{?> 
                                              <span class="label label-danger">Anomali</span>
                                            <?php }?>
                                          </td>
                                          <td>  
                                            <?php if($data['status'] == '1'){?>
                                              <span class="label label-info">Laporan Dikirim</span>
                                            <?php }else if($data['status'] == '2'){?> 
                                              <span class="label label-warning">Laporan Diverifikasi</span>
                                            <?php }else{?>
                                              <span class="label label-success">Selesai</span>
                                            <?php }?>
                                          </td> 
                                          <td>  
                                            <?php if($data['status'] == '1'){?>
                                            <a href="input_rencana.php?id=<?=@$data['qr'];?>" class="btn btn-primary"> <i class="fa fa-pencil"></i>  Input Rencana</a>  
                                            <?php }else if($data['status'] == '2'){?>
                                            <a href="input_rencana.php?id=<?=@$data['qr'];?>" class="btn btn-warning"> <i class="fa fa-search"></i>  Lihat Rencana</a> 
                                             <?php }else{?>
                                              <span class="label label-success">Selesai</span>
                                            <?php }?> 
                                          </td>   
                                      </tr>
                              <?php $no++; } ?>
                            </tbody>
                          </table>
                        </div>
                       </div>
                    </div>
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
