<?php
include '../koneksi.php';

$id = $_GET['id'];

$currentUserId = $_SESSION['id'];
$currentUserName = $_SESSION['nama'];


$queryDelete = "DELETE FROM transaksi WHERE transaksi_id='$id'";
$resultDelete = mysqli_query($koneksi, $queryDelete);

if ($resultDelete) {
    $queryLog = "INSERT INTO log_data (transaksi_id, transaksi_tanggal, transaksi_jenis, transaksi_kategori, transaksi_nominal, transaksi_keterangan, user_id, user_nama, keterangan)
                  SELECT transaksi_id, transaksi_tanggal, transaksi_jenis, transaksi_kategori, transaksi_nominal, transaksi_keterangan, '$currentUserId', '$currentUserName', 'Dihapus'
                  FROM transaksi
                  WHERE transaksi_id = '$id'";
    
    $resultLog = mysqli_query($koneksi, $queryLog);

    if ($resultLog) {
        header("location:transaksi.php");
    } else {
        echo "Error logging deletion: " . mysqli_error($koneksi);
    }
} else {
    echo "Error deleting record: " . mysqli_error($koneksi);
}