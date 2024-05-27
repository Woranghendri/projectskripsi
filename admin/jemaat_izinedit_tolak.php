<?php 
include '../koneksi.php';
$id  = $_GET['id'];


mysqli_query($koneksi, "update jemaat set edit_jemaat='0',alasan_edit='' where id_jemaat='$id'");

header("location:jemaat_izinedit.php");