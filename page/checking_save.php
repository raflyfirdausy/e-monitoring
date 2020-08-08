 <!--start fn. simpan data-->
 <?php 
 include '../config/koneksi.php';
 
 // var_dump($_POST);
 // die();
 //simpan ke tabel kondisi
 $qr 				= $_POST['id']; 
 $tgl_input_awal 	= $_POST['tgl_input_awal']; 
 $catatan 			= $_POST['catatan'];  

	if (!empty ($_FILES['gambar']['tmp_name'])){

		//simpan gambar
		$scan =$_FILES['gambar']['name'];
		$scan =stripslashes($scan);
		$scan = str_replace("'", "",$scan);

		$scan =  $qr."_".$scan;
		copy($_FILES['gambar']['tmp_name'],"images/".$scan);
	}
	// var_dump($scan);
	// die();
 $query = mysqli_query($conn,"INSERT INTO t_checking (id, tgl_pelaksanaan,catatan ,foto,qr ) VALUES ('', '".$tgl_input_awal."' ,'".$catatan."','".$scan."','".$qr."' )");    
 
 $query =  mysqli_query($conn,"UPDATE  t_kondisi SET  status = '3' 
     						  WHERE qr = '".$qr."'"); 


$tgl_input 	= date('d/m/Y H:i:s'); 
$query = mysqli_query($conn,"INSERT INTO t_tracking_history (id, qr,tgl_input ,status,keterangan) VALUES ('', '".$qr."' ,'".$tgl_input."','3','Selesai')");  
echo "<script>alert('Data berhasil ditambah !');</script>";
echo "<meta http-equiv='refresh' content='0; url=pel_ver.php'>";  
 ?>