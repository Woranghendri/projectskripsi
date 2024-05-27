<?php 
include 'header.php';
include '../koneksi.php';
?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Jemaat
      <small>Detail Anggota Jemaat</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <section class="col-lg-6 col-lg-offset-3">       
        <div class="box box-info">

          <div class="box-header">
            <h3 class="box-title">Detail Informasi Anggota Jemaat</h3>
            <a href="jemaat_edit.php" class="btn btn-info btn-sm pull-right"><i class="fa fa-reply"></i> &nbsp; Kembali</a> 
          </div>
          <div class="box-body">

              <?php 
              $id = $_GET['id'];              
              $data = mysqli_query($koneksi, "select * from jemaat where id_jemaat='$id'");
              while($d = mysqli_fetch_array($data)){
                ?>

                <table class="table">
      <tbody>
        <tr>
          <td style="width: 150px">
            <b>NIK</b>
          </td>
          <td>:
            <?php echo $d['nik']; ?>
          </td>
        </tr>
        <tr>
          <td style="width: 150px">
            <b>Nama Keluarga</b>
          </td>
          <td>:
            <?php echo strtoupper ($d['nama_keluarga']); ?>
          </td>
        </tr>
        <tr>
          <td style="width: 150px">
            <b>Nama Lengkap</b>
          </td>
          <td>:
            <?php echo strtoupper ($d['nama_lengkap']); ?>
          </td>
        </tr>
        <tr>
          <td style="width: 150px">
            <b>Relasi Keluarga</b>
          </td>
          <td>:
            <?php echo strtoupper ($d['relasi']); ?>
          </td>
        </tr>
        <tr>
          <td style="width: 150px">
            <b>Kolom</b>
          </td>
          <td>:
            <?php echo $d['kolom']; ?>
          </td>
        </tr>
        <tr>
          <td style="width: 200px">
            <b>Jumlah Anggota Keluarga</b>
          </td>
          <td>:
            <?php echo $d['jumlah_anggota']; ?>
          </td>
        </tr>
        <tr>
          <td style="width: 150px">
            <b>TTL</b>
          </td>
          <td>:
            <?php echo strtoupper ($d['tempat_lh']); ?>
            /
            <?php echo $d['tgl_lh']; ?>
          </td>
        </tr>
        <tr>
          <td style="width: 150px">
            <b>Jenis Kelamin</b>
          </td>
          <td>:
            <?php echo strtoupper ($d['jekel']); ?>
          </td>
        </tr>
        <tr>
          <td style="width: 150px">
            <b>Status Pernikahan</b>
          </td>
          <td>:
            <?php echo strtoupper ($d['status_nikah']); ?>
          </td>
        </tr>
        <tr>
          <td style="width: 150px">
            <b>Tanggal Pernikahan</b>
          </td>
          <td>:
            <?php 
                        if($d['status_nikah'] == "MENIKAH"){
                          echo $d['tgl_nikah'];;
                        }else{
                          echo "-";
                        }
                        ?>
          </td>
        </tr>
         <tr>
          <td style="width: 150px">
            <b>Pekerjaan</b>
          </td>
          <td>:
            <?php echo strtoupper ($d['pekerjaan']); ?>
          </td>
        </tr>
         <tr>
          <td style="width: 150px">
            <b>Pendidikan</b>
          </td>
          <td>:
            <?php echo strtoupper ($d['pendidikan']); ?>
          </td>
        </tr>
        <tr>
          <td style="width: 150px">
            <b>Alamat</b>
          </td>
          <td>:
            <?php echo strtoupper ($d['alamat']); ?>
          </td>
        </tr>
        <tr>
          <td style="width: 150px">
            <b>E-Mail</b>
          </td>
          <td>:
            <?php echo $d['email']; ?>
          </td>
        </tr>
        <tr>
          <td style="width: 150px">
            <b>Telephone</b>
          </td>
          <td>:
            <?php echo $d['telepon']; ?>
          </td>
        </tr>
        <tr>
          <td style="width: 150px">
            <b>Golongan Darah</b>
          </td>
          <td>:
            <?php echo strtoupper ($d['gol_darah']); ?>
          </td>
        </tr>
        <tr>
          <td style="width: 150px">
            <b>Baptis</b>
          </td>
          <td>:
            <?php echo strtoupper ($d['baptis']); ?>
          </td>
        </tr>
        <tr>
          <td style="width: 150px">
            <b>Sidi</b>
          </td>
          <td>:
            <?php echo strtoupper ($d['sidi']); ?>
          </td>
        </tr>
         


      </tbody>
    </table>

                
                <?php
              }

              ?>
              
        
          </div>

        </div>
      </section>
    </div>
  </section>

</div>
<?php include 'footer.php'; ?>