 <!--start fn. simpan data-->
 <?php 
 include '../config/koneksi.php';
 
 $kode = $_POST['kode']; 
 $nama = $_POST['nama']; 

 $query = mysqli_query($conn,"INSERT INTO m_upt (id, nama_upt,id_induk) VALUES ('', '".$nama."' ,".$kode.")");   
 ?>