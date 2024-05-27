<?php 
include '../koneksi.php';
$id  = $_GET['id'];


mysqli_query($koneksi, "update jemaat set edit_jemaat='selesai',alasan_edit='' where id_jemaat='$id'");

$data = mysqli_query($koneksi, "select * from jemaat where id_jemaat='$id'");
$d = mysqli_fetch_assoc($data);
$foto = $d['foto_izin'];
unlink("../gambar/fotokk/$foto");
mysqli_query($koneksi, "delete foto_izin from user where id_jemaat='$id'");


header("location:jemaat_izinedit.php");