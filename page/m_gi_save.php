 <!--start fn. simpan data-->
 <?php 
 include '../config/koneksi.php';
 
 $kode = $_POST['kode']; 
 $nama = $_POST['nama'];  
 $query = mysqli_query($conn,"INSERT INTO m_gi ( nama_gi, id_utlg) VALUES ( '".$nama."' ,".$kode.")");   
 ?>