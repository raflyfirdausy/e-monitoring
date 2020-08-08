 <!--start fn. simpan data-->
 <?php 
 include '../config/koneksi.php';
 
 $kode = $_POST['kode']; 
 $nama = $_POST['nama']; 

 $query = mysqli_query($conn,"INSERT INTO m_jalur (id, nama_jalur,id_gi) VALUES ('', '".$nama."' ,".$kode.")");   
 ?>