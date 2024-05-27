<?php 
include '../koneksi.php';
$id  = $_POST['id'];
$nik  = $_POST['nik'];
$nama_keluarga  = $_POST['nama_keluarga'];
$relasi  = $_POST['relasi'];
$kolom  = $_POST['kolom'];
$jumlah_anggota  = $_POST['jumlah_anggota'];
$nama_lengkap  = $_POST['nama_lengkap'];
$tempat_lh  = $_POST['tempat_lh'];
$tgl_lh  = $_POST['tgl_lh'];
$jekel  = $_POST['jekel'];
$status_nikah  = $_POST['status_nikah'];
$tgl_nikah  = $_POST['tgl_nikah'];
$pekerjaan  = $_POST['pekerjaan'];
$pendidikan  = $_POST['pendidikan'];
$alamat  = $_POST['alamat'];
$email  = $_POST['email'];
$telepon  = $_POST['telepon'];
$gol_darah  = $_POST['gol_darah'];
$baptis  = $_POST['baptis'];
$sidi  = $_POST['sidi'];

mysqli_query($koneksi, "update jemaat set nik='$nik',nama_keluarga='$nama_keluarga',relasi='$relasi',kolom='$kolom',jumlah_anggota='$jumlah_anggota',jumlah_anggota='$jumlah_anggota',nama_lengkap='$nama_lengkap',tempat_lh='$tempat_lh',tgl_lh='$tgl_lh',jekel='$jekel',status_nikah='$status_nikah',tgl_nikah='$tgl_nikah',pekerjaan='$pekerjaan',pendidikan='$pendidikan',alamat='$alamat',email='$email',telepon='$telepon',gol_darah='$gol_darah',baptis='$baptis',sidi='$sidi' where id_jemaat='$id'");
header("location:jemaat.php?alert=berhasilupdate");
