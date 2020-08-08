 <!--start fn. simpan data-->
 <?php 
 include '../config/koneksi.php';
 require 'PHPMailer/PHPMailerAutoload.php';
 // var_dump($_POST);
 // die();
 //simpan ke tabel kondisi
 $gi 			= $_POST['gi']; 
 $kondisi 		= $_POST['kondisi']; 
 $s_kondisi 	= $_POST['s_kondisi']; 
 $tgl_input 	= date('d/m/Y H:i:s'); 

 $qr    = substr(md5($tgl_input."-".$gi."-".$s_kondisi),0,6);

 $jalur = $_POST['jalur']; 
 $titik = $_POST['titik']; 
 $nilai = $_POST['nilai']; 
	if (!empty ($_FILES['gambar']['tmp_name'])){

		//simpan gambar
		$scan =$_FILES['gambar']['name'];
		$scan =stripslashes($scan);
		$scan = str_replace("'", "",$scan);

		$scan = $gi.$kondisi  ."_".$scan;
		copy($_FILES['gambar']['tmp_name'],"images/".$scan);
	}
	// var_dump($scan);
	// die();
 $query = mysqli_query($conn,"INSERT INTO t_kondisi (id, id_kondisi,tgl_input ,id_gi,status,qr,status_kondisi) VALUES ('', '".$kondisi."' ,'".$tgl_input."','".$gi."','1','".$qr."','".$s_kondisi."')");   
 $query = mysqli_query($conn,"INSERT INTO t_kondisi_detail (id, id_kondisi,qr ,ket,nilai,tgl_input,file ) VALUES ('', '".$kondisi."' ,'".$qr."','".$jalur."','".$nilai."','".date('Y/m/d H:i:s')."','".$scan."')");  
 $query = mysqli_query($conn,"INSERT INTO t_tracking_history (id, qr,tgl_input ,status,keterangan) VALUES ('', '".$qr."' ,'".$tgl_input."','1','Laporan diKirim')");  
 
$toemail = 'okiudiono@gmail.com'; //email penerima
$pesan   = 'sssss';

$email = 'okiudiono@gmail.com'; //email pengirim, silahkan diganti dengan email sendiri
$password = 'Okiudi92'; //password gmail

$to_id = $toemail;
$message = $pesan;
$subject = 'Admin Email';
$mail = new PHPMailer;
$mail->FromName = "Admin Email";
$mail->isSMTP();
$mail->Host = 'ssl://smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = $email;
$mail->Password = $password;
$mail->addAddress($to_id);
$mail->Subject = $subject;
$mail->msgHTML($message);

if (!$mail->send()) {
 $error = "Mailer Error: " . $mail->ErrorInfo;
 echo $error; 
}
else {
 echo "<script>
 alert('Email Terkirim');
 </script>";
}

// echo "<script>alert('Data berhasil ditambah !');</script>";
// echo "<meta http-equiv='refresh' content='0; url=cek_kondisi.php'>";  
 ?>