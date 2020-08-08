<?php
ob_start();
session_start();
include 'config/koneksi.php';
$admin_username = $_POST['username'];
$admin_password = $_POST['password'];

// $query = "SELECT * FROM m_user WHERE username = '$admin_username' AND password='$admin_password'";
// $hasil = mysqli_query($query); 
$hasil = mysqli_query($conn,"SELECT * FROM m_user WHERE username = '$admin_username' AND password='$admin_password'");
$data = mysqli_fetch_array($hasil);
$ketemu=mysqli_num_rows($hasil);

if ($ketemu > 0)
{
	if($data["id_level"] == 1)
		{echo "sukses";
			session_start(); 
			$_SESSION['username'] = $data['username'];  
			$_SESSION['password']= $data['password'];
			$_SESSION['id_level']= $data['id_level']; 
			header('location:page/index.php');
		}else if($data["id_level"] == 2)
		{
			session_start(); 
			$_SESSION['username'] = $data['username'];  
			$_SESSION['password']= $data['password'];
			$_SESSION['id_level']= $data['id_level'];  	
			header('location:page/index.php');
		}else if($data["id_level"] == 3)
		{
			session_start();  
			$_SESSION['username'] = $data['username'];   
			$_SESSION['password']= $data['password'];
			$_SESSION['id_level']= $data['id_level'];
			header('location:page/index.php');
		} 
		else
		{
			// echo"<script>alert('Akun Anda belum diverifikasi !');document.location='login.php'</script>";
			header('location:http:login.php?&ins=Hak Akses Ditolak!');
		}
	}
else
{

	// echo"<script>alert('Login gagal ! Username atau password salah !');document.location='index.php'</script>";
} 
?>