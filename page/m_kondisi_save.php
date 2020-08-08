 <!--start fn. simpan data-->
 <?php 
 include '../config/koneksi.php';
  
 $nama = $_POST['nama']; 

 $query = mysqli_query($conn,"INSERT INTO m_kondisi (id, kondisi) VALUES ('', '".$nama."' )");   
 ?>