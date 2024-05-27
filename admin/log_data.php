<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Log Transaksi
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <section class="col-lg-12">
        <div class="box box-info">

          <div class="box-header">
            <h3 class="box-title">Log Transaksi</h3>
            <div class="btn-group pull-right">            
            </div>
          <div class="box-body">

            <div class="table-responsive">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th width="7%" rowspan="2">ID TRANSAKSI</th>
                    <th width="10%" rowspan="2" class="text-center">TANGGAL TRANSAKSI</th>
                    <th rowspan="2" class="text-center">JENIS TRANSAKSI</th>
                    <th rowspan="2" class="text-center">KATEGORI TRANSAKSI</th>
                    <th rowspan="2" class="text-center">NOMINAL TRANSAKSI</th>
                    <th rowspan="2" class="text-center">CATATAN TRANSAKSI</th>
                    <th rowspan="2" class="text-center">ID USER</th>
                    <th rowspan="2" class="text-center">NAMA USER</th>
                    <th rowspan="2" class="text-center">KETERANGAN</th>
                    <th rowspan="2" class="text-center">WAKTU LOG</th>
                  </tr>
                </thead>

                <tbody>
                  <?php 
                  include '../koneksi.php';
                  $data = mysqli_query($koneksi,"SELECT * FROM log_data ");
                  while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                      <td class="text-center"><?php echo $d['transaksi_id']; ?></td>
                      <td class="text-center"><?php echo date('d-m-Y', strtotime($d['transaksi_tanggal'])); ?></td>
                      <td class="text-center"><?php echo $d['transaksi_jenis']; ?></td>
                      <td class="text-center"><?php echo $d['transaksi_kategori']; ?></td>
                      <td class="text-center"><?php echo $d['transaksi_nominal']; ?></td>
                      <td class="text-center"><?php echo $d['transaksi_keterangan']; ?></td>
                      <td class="text-center"><?php echo $d['user_id']; ?></td>
                      <td class="text-center"><?php echo $d['user_nama']; ?></td>
                      <td class="text-center"><?php echo $d['keterangan']; ?></td>
                      <td class="text-center"><?php echo $d['date_time']; ?></td>


                      </td>
                    </tr>
                    <?php 
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>

        </div>
      </section>
    </div>
  </section>

</div>
<?php include 'footer.php'; ?>