<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Data
      <small>Data Jemaat</small>
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
            <h3 class="box-title">Anggota Jemaat Gmim Musoma Tosuraya Barat</h3>
            <div class="btn-group pull-right">            

            </div><hr>

          </div>
          <div class="box-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped" id="table-datatable">
                <thead>
                  <tr>
                    <th width="1%">NO</th>
                    <th>NAMA</th>
                    <th>JENIS KELAMIN</th>
                    <th>KOLOM</th>
                    <th>ALAMAT</th>
                    <th width="1%">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  include 'koneksi.php';
                  $no=1;
                  $data = mysqli_query($koneksi,"SELECT * FROM jemaat ORDER BY kolom ASC");
                  while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo strtoupper ($d['nama_lengkap']); ?></td>
                      <td><?php echo strtoupper ($d['jekel']); ?></td>
                      <td><?php echo  $d['kolom']; ?></td>
                      <td><?php echo strtoupper ($d['alamat']); ?></td>
                      <td>
              <a href="detail_jemaat.php?id=<?php echo $d['id_jemaat'] ?>" title="Detail info"
               class="btn btn-primary btn-sm">
                <i class="fa fa-info"></i>
              </a>

                
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