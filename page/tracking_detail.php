      <br><br>
      <?php  
               include '../config/koneksi.php';
               $query = mysqli_query($conn,"SELECT * FROM t_tracking_history WHERE qr = '".$_GET['id']."' ");
               $no = 1;
               while ($data = mysqli_fetch_array($query)) {
                if($data['status'] == '1'){
                      $clr = 'aqua';
                      $querys = mysqli_query($conn,"SELECT A.*,B.nama_gi,C.kondisi,D.nilai,D.file
                                FROM t_kondisi A
                                LEFT JOIN m_gi B ON A.id_gi = B.id
                                LEFT JOIN m_kondisi C ON A.id_kondisi = C.id
                                LEFT JOIN t_kondisi_detail D ON D.qr = A.qr
                                WHERE A.qr ='".$_GET['id']."' "); 
                      $data_detail = mysqli_fetch_array($querys);
                      $detail =  'Anda melakukan pengiriman laporan sebagai berikut :<br>
                      Nama GI : '.$data_detail['nama_gi'].' <br> 
                      Kondisi : '.$data_detail['kondisi'].' <br>  ';
                } if($data['status'] == '2'){
                      $clr = 'orange';
                      $detail = 'Laporan di verifikasi OLEH UPT';
                }if($data['status'] == '3'){
                      $clr = 'green';                      
                      $detail = 'Laporan Telah Selesai.';
                }
                ?>
                <?php if(!empty($data)){?>
                <div class="tab-pane active" id="timeline">
                  <!-- The timeline -->
                  <ul class="timeline timeline-inverse">  
                    <!-- timeline item -->
                    <li>
                      <i class="fa fa-user bg-aqua"></i>

                      <div class="timeline-item">
                       

                        <h3 class="timeline-header">ID Laporan : #<a href="#"><?=$data['qr']?></a>   <span class="time"><i class="fa fa-clock-o"></i>  </span> Tanggal <?=$data['tgl_input']?> 
                        <span class="pull-right-container">
                            <small class="label pull-right bg-<?=$clr?>"><?=$data['keterangan']?></small> 
                        </span>
                        </h3>
                        <div class="timeline-body">
                         <?=$detail?>
                        </div> 
                      </div>
                    </li>
                    <!-- END timeline item -->   
                  </ul>
                </div>
              <?php }else{?>
                <div class="box-body">
                  <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                  Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my entire
                  soul, like these sweet mornings of spring which I enjoy with my whole heart.
                  </div>
                </div>
              <?php }?>
      <?php $no++; } ?>