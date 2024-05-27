<?php 
// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);

$login = mysqli_query($koneksi, "SELECT * FROM user WHERE user_username='$username' AND user_password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
	session_start();
	$data = mysqli_fetch_assoc($login);
	$_SESSION['id'] = $data['user_id'];
	$_SESSION['nama'] = $data['user_nama'];
	$_SESSION['username'] = $data['user_username'];
	$_SESSION['level'] = $data['user_level'];

	if($data['user_level'] == "administrator"){
		$_SESSION['status'] = "administrator_logedin";
		header("location:admin/");
	}else if($data['user_level'] == "bendahara"){
		$_SESSION['status'] = "bendahara_logedin";
		header("location:bendahara/");
	}else if($data['user_level'] == "user"){
		$_SESSION['status'] = "user_logedin";
		header("location:user/");
	}else if($data['user_level'] == "tamu"){
		$_SESSION['status'] = "tamu_logedin";
		header("location:user/");
	}else{
		header("location:index2.php?alert=gagal");
	}
}else{
	header("location:index2.php?alert=gagal");
}
