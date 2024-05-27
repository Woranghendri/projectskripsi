<?php 
include '../koneksi.php';
$nama  = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$level = $_POST['level'];

$rand = rand();
$allowed =  array('gif','png','jpg','jpeg');
$filename = $_FILES['foto']['name'];

$tambahuser = mysqli_query($koneksi, "SELECT * FROM user WHERE user_username='$username' ");
$cek = mysqli_num_rows($tambahuser);
if ($cek > 0){
echo "<script>window.alert('username yang anda masukan sudah ada')
    window.location='user.php'</script>";
}else if($filename == ""){
	mysqli_query($koneksi, "insert into user values (NULL,'$nama','$username','$password','','$level')");
	header("location:user.php");
}else{
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if(!in_array($ext,$allowed) ) {
		header("location:user.php?alert=gagal");
	}else{
		move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar/user/'.$rand.'_'.$filename);
		$file_gambar = $rand.'_'.$filename;
		mysqli_query($koneksi, "insert into user values (NULL,'$nama','$username','$password','$file_gambar','$level')");
		header("location:user.php");
	}
}

