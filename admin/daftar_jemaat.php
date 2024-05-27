<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      LAPORAN
      <small>Data Laporan</small>
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
            <h3 class="box-title">Filter Laporan Jemaat</h3>
          </div>
          <div class="box-body">
            <form method="get" action="">
              <div class="row">
                <div class="col-md-3">

                  <div class="form-group">
                    <label>Kolom</label>
                    <select name="kolom" class="form-control" required="required">
                      <option value="semua">- Semua Kolom -</option>
                      <?php 
                      $jemaat = mysqli_query($koneksi,"SELECT distinct kolom  FROM jemaat ORDER BY kolom ASC");
                      while($k = mysqli_fetch_array($jemaat)){
                        ?>
                        <option <?php if(isset($_GET['kolom'])){ if($_GET['kolom'] == $k['kolom']){echo "selected='selected'";}} ?>  value="<?php echo $k['kolom']; ?>"><?php echo $k['kolom']; ?></option>
                        <?php 
                      }
                      ?>
                    </select>
                  </div>

                </div>

                <div class="col-md-3">

                  <div class="form-group">
                    <br/>
                    <input type="submit" value="TAMPILKAN" class="btn btn-sm btn-primary btn-block">
                  </div>

                </div>
              </div>
            </form>
          </div>
        </div>

        <div class="box box-info">
          <div class="box-header">
            <h3 class="box-title">Laporan DATA JEMAAT PER KOLOM</h3>
          </div>
          <div class="box-body">

            <?php 
            if(isset($_GET['kolom'])){
              $kolom = $_GET['kolom'];
              ?>

              <div class="row">
                <div class="col-lg-6">
                  <table class="table table-bordered">
                    <tr>
                      <th>KOLOM</th>
                      <th>:</th>
                      <td>
                        <?php 
                        if($kolom == "semua"){
                          echo "SEMUA KOLOM";
                        }else{
                          $k = mysqli_query($koneksi,"select * from jemaat where kolom='$kolom'");
                          $kk = mysqli_fetch_assoc($k);
                          echo $kk['kolom'];
                        }
                        ?>

                      </td>
                    </tr>
                  </table>
                  
                </div>
              </div>

              
              <a href="daftar_jemaatprint.php?kolom=<?php echo $kolom ?>" target="_blank" class="btn btn-sm btn-primary"><i class="fa fa-print"></i> &nbsp PRINT</a>
              <div class="table-responsive">
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                    <th width="1%">NO</th>
                    <th>NIK</th>
                    <th>NAMA</th>
                    <th>JENIS KELAMIN</th>
                    <th>KOLOM</th>
                    <th>ALAMAT</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    include '../koneksi.php';
                    $no=1;
                    $total_pemasukan=0;
                    $total_pengeluaran=0;
                    if($kolom == "semua"){
                      $data = mysqli_query($koneksi,"SELECT * FROM jemaat ORDER BY kolom ASC ");
                    }else{
                      $data = mysqli_query($koneksi,"SELECT * FROM jemaat where kolom='$kolom'");
                    }
                    while($d = mysqli_fetch_array($data)){

                      ?>
                      <tr>
                        <td class="text-center"><?php echo $no++; ?></td>
                        <td class="text-center"><?php echo $d['nik']; ?></td>
                        <td><?php echo strtoupper ($d['nama_lengkap']); ?></td>
                        <td><?php echo strtoupper ($d['jekel']); ?></td>
                        <td><?php echo  $d['kolom']; ?></td>
                        <td><?php echo strtoupper ($d['alamat']); ?></td>
                      </tr>
                      <?php 
                    }
                    ?>
                  </tbody>
                </table>



              </div>

              <?php 
            }else{
              ?>

              <div class="alert alert-info text-center">
                Silahkan Filter Laporan Terlebih Dulu.
              </div>

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