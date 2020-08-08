 <!--start fn. simpan data-->
 <?php 
 include '../config/koneksi.php';
 
 $kode = $_POST['kode']; 
 $nama = $_POST['nama'];  
 $query = mysqli_query($conn,"INSERT INTO m_utlg ( nama_utlg, id_upt) VALUES ( '".$nama."' ,".$kode.")");   
 ?>