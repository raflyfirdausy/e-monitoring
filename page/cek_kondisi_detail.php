<?php  
  include '../config/koneksi.php'; 
  $query = mysqli_query($conn,"select * from m_kondisi_param WHERE id_kondisi = '".$_GET['id']."'");
  while ($data = mysqli_fetch_array($query)) {?>
    <div class="form-group">
      <div class="col-lg-12"> 
        <label><?=@$data['parameter']; ?></label>  
        <input type="text" class="form-control pull-right" id="<?=@$data['parameter']; ?>" name="<?=@$data['parameter']; ?>" placeholder="<?=@$data['parameter']; ?>....">
      </div>
    </div>  
<?php }?>
    <div class="form-group">
      <div class="col-lg-12"> 
        <label>Foto</label>  
        <input type="file" id="gambar" name="gambar" class="form-control-file" onchange = 'uploadImage(this)'  data-target = '#aImgShow'>
      </div>
    </div>  