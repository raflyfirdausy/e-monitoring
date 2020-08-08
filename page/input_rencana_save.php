 <!--start fn. simpan data-->
 <?php 
 include '../config/koneksi.php';
 
 // var_dump($_POST);
 // die();
 //simpan ke tabel kondisi
 $id 					= $_POST['id']; 
 $tgl_input_awal 		= $_POST['tgl_input_awal']; 
 $tgl_input_akhir 	    = $_POST['tgl_input_akhir'];   

 $rab 		= $_POST['rab']; 
 $material  = $_POST['material'];   
 $query = mysqli_query($conn,"INSERT INTO t_rencana ( tgl_awal_kerja,tgl_akhir_kerja ,rab,material,qr ) VALUES ( '".$tgl_input_awal."' ,'".$tgl_input_akhir."','".$rab."','".$material."', '".$id."')");  
  

$query =  mysqli_query($conn,"UPDATE  t_kondisi SET  status = '2' 
     						  WHERE qr = '".$id."'"); 

$tgl_input 	= date('d/m/Y H:i:s'); 
$query = mysqli_query($conn,"INSERT INTO t_tracking_history (id, qr,tgl_input ,status,keterangan) VALUES ('', '".$id."' ,'".$tgl_input."','2','Laporan Terverifikasi')");  

echo "<script>alert('Data berhasil ditambah !');</script>";
echo "<meta http-equiv='refresh' content='0; url=verif_kondisi.php'>";  
 ?>