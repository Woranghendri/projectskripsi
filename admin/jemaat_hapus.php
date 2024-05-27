<?php 
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "delete from jemaat where id_jemaat='$id'");
header("location:jemaat.php");
