<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Hutang
      <small>Data Hutang</small>
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
            <h3 class="box-title">Catatan Hutang</h3>
            <div class="btn-group pull-right">            

            </div>
          </div>
          <div class="box-body">


            <div class="table-responsive">
              <table class="table table-bordered table-striped" id="table-datatable">
                <thead>
                  <tr>
                    <th width="1%">NO</th>
                    <th width="1%">KODE</th>
                    <th width="10%" class="text-center">TANGGAL</th>
                    <th class="text-center">KETERANGAN</th>
                    <th class="text-center">NOMINAL</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  include 'koneksi.php';
                  $no=1;
                  $data = mysqli_query($koneksi,"SELECT * FROM hutang");
                  while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                      <td class="text-center"><?php echo $no++; ?></td>
                      <td>HTG-000<?php echo $d['hutang_id']; ?></td>
                      <td class="text-center"><?php echo date('d-m-Y', strtotime($d['hutang_tanggal'])); ?></td>
                      <td><?php echo $d['hutang_keterangan']; ?></td>
                      <td class="text-center"><?php echo "Rp. ".number_format($d['hutang_nominal'])." ,-"; ?></td>
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
<?php include 'footer.php'; ?>s