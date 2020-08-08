<?php 
include '../config/koneksi.php';
 
$id=$_GET['id']; 

$sql = mysqli_query($conn,"DELETE FROM m_induk WHERE id='$id'");
  
		echo "Data anda sukses dihapus.";
		echo "<meta http-equiv='refresh' content='0; url=m_induk.php'>";
	 
?>