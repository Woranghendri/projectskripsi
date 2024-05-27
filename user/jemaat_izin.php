<?php 
include '../koneksi.php';
$id  = $_POST['id'];
$alasan_edit  = $_POST['alasan_edit'];
$edit_jemaat = proses;

$rand = rand();
$allowed =  array('jpg','jpeg','pdf');
$foto_izin = $_FILES['foto_izin']['name'];
$ext = pathinfo($foto_izin, PATHINFO_EXTENSION);


if($foto_izin == ""){
	mysqli_query($koneksi, "update jemaat set alasan_edit='$alasan_edit',edit_jemaat='$edit_jemaat' where id_jemaat='$id'") or die(mysqli_error($koneksi));;
	header("location:jemaat_edit.php?alert=perizinandikirim");
}else{
	$ext = pathinfo($foto_izin, PATHINFO_EXTENSION);

	if(!in_array($ext,$allowed) ) {
	header("location:jemaat_edit.php?alert=gagal");
	}else{
		move_uploaded_file($_FILES['foto_izin']['tmp_name'], '../gambar/fotokk/'.$rand.'_'.$foto_izin);
		$xfoto = $rand.'_'.$foto_izin;
		mysqli_query($koneksi, "update jemaat set alasan_edit='$alasan_edit',edit_jemaat='$edit_jemaat',foto_izin='$xfoto' where id_jemaat='$id'");
		header("location:jemaat_edit.php?alert=perizinandikirim");

	}
}