<?php 
include '../koneksi.php';
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
$edit_jemaat = 0;
$alasan_edit  = $_POST['alasan_edit'];
$user_id  = $_POST['user_id'];
$foto_izin  = $_POST['foto_izin'];

mysqli_query($koneksi, "insert into jemaat values (NULL,'$nik','$nama_keluarga','$relasi','$kolom','$jumlah_anggota','$nama_lengkap','$tempat_lh','$tgl_lh','$jekel','$status_nikah','$tgl_nikah','$pekerjaan','$pendidikan','$alamat','$email','$telepon','$gol_darah','$baptis','$sidi','$edit_jemaat','$alasan_edit','$user_id','$foto_izin')");

header("location:jemaat.php?alert=berhasil");