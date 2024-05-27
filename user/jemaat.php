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

              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal">
                <i class="fa fa-plus"></i> Tambah Jemaat
              </button>
            </div><hr>
             <?php 
                if(isset($_GET['alert'])){
                  if($_GET['alert']=='gagal'){
                    ?>
                    <div class="alert alert-warning alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h4><i class="icon fa fa-warning"></i> Peringatan !</h4>
                      Ada Kesalahan Silahkan Periksa Data Anda Kembali
                    </div>                
                    <?php
                  }elseif($_GET['alert']=="berhasil"){
                    ?>
                    <div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h4><i class="icon fa fa-check"></i> Success</h4>
                      Berhasil Disimpan
                    </div>                
                    <?php
                  }elseif($_GET['alert']=="berhasilupdate"){
                    ?>
                    <div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h4><i class="icon fa fa-check"></i> Success</h4>
                      Berhasil Update
                    </div>                
                    <?php
                   } elseif($_GET['alert']=="perizinandikirim"){
                    ?>
                    <div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h4><i class="icon fa fa-check"></i> Success</h4>
                      Perizinan Dikirim, Silahkan Menunggu Admin Menanggapi Perizinan Anda
                    </div>                
                    <?php
                  }
                }
                ?>
          </div>
          <div class="box-body">

            <!-- Modal -->
            <form action="simpan_jemaat.php" method="post">
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Tambah Data Jemaat</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body"> <center><h4><b>DATA ANGGOTA KELUARGA</b></h4></center>

                      <div class="form-group">
                        <label>NIK</label>
                        <input type="number" name="nik" required="required" class="form-control" placeholder="Nik ..">
                      </div>

                      <div class="form-group">
                        <label>NAMA KELUARGA</label>
                        <input type="text" name="nama_keluarga" required="required" class="form-control" placeholder="Nama Keluarga ..">
                      </div>

                      <div class="form-group">
        <label class="col-sm-3 col-form-label">Relasi Keluarga</label><br/>
          <select name="relasi" id="relasi" class="form-control">
            <option>- Pilih -</option>
            <option>SUAMI</option>
            <option>ISTRI</option>
            <option>ANAK</option>
          </select>
        </div>

                      <div class="form-group">
                        <label>KOLOM</label>
                        <input type="number" name="kolom" required="required" class="form-control" placeholder="Kolom ..">
                      </div>

                      <div class="form-group">
                        <label>JUMLAH ANGGOTA KELUARGA</label>
                        <input type="number" name="jumlah_anggota" required="required" class="form-control" placeholder="Jumlah Anggota Keluarga ..">
                      </div>

                      <div class="form-group">
                        <label>NAMA LENGKAP</label>
                        <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama ..">
                      </div>

                      <div class="form-group">
                        <label>TTL</label><br/>
        
                        <input type="text" class="form-control" id="tempat_lh" name="tempat_lh" placeholder="Tempat Lahir" required>
                        <input type="date" class="form-control" id="tgl_lh" name="tgl_lh" placeholder="Tanggal Lahir" required>
                      </div>

        <div class="form-group">
        <label class="col-sm-3 col-form-label">Jenis Kelamin</label><br/>
          <select name="jekel" id="jekel" class="form-control">
            <option>- Pilih -</option>
            <option>PRIA</option>
            <option>WANITA</option>
          </select>
        </div>

        <div class="form-group">
        <label class="col-sm-4 col-form-label">Status Pernikahan</label> <font color="red">*Jangan mengisi tanggal jika belum menikah</font><br/>
          <select name="status_nikah" id="status_nikah" class="form-control">
            <option>- Pilih -</option>
            <option>MENIKAH</option>
            <option>BELUM MENIKAH</option>
            <option>CERAI MATI</option>
            <option>CERAI HIDUP</option> 
          </select>

                        <input type="date" class="form-control" id="tgl_nikah" name="tgl_nikah" placeholder="Tanggal Pernikahan">
                      </div>

                      <div class="form-group">
                        <label>PEKERJAAN</label>
                        <input type="text" name="pekerjaan" required="required" class="form-control" placeholder="Pekerjaan ..">
                      </div>

                      <div class="form-group">
                        <label>PENDIDIKAN TERAKHIR</label>
                        <input type="text" name="pendidikan" required="required" class="form-control" placeholder="Pendidikan ..">
                      </div>

                      <div class="form-group">
                        <label>ALAMAT</label>
                        <input type="text" name="alamat" required="required" class="form-control" placeholder="Alamat ..">
                      </div>

                       <div class="form-group">
                        <label>E-Mail</label>
                        <input type="text" name="email" required="required" class="form-control" placeholder="Email ..">
                      </div>

                      <div class="form-group">
                        <label>TELEPON</label>
                        <input type="number" name="telepon" required="required" class="form-control" placeholder="Telepon ..">
                      </div>

                      <div class="form-group">
                        <label>GOLONGAN DARAH</label>
                        <input type="text" name="gol_darah" required="required" class="form-control" placeholder="Golongan Darah ..">
                      </div>

                      <div class="form-group">
        <label class="col-sm-3 col-form-label">BAPTIS</label><br/>
          <select name="baptis" id="baptis" class="form-control" required="required">
            <option>- Pilih -</option>
            <option>Sudah</option>
            <option>Belum</option>
          </select>
        </div>

        <div class="form-group">
        <label class="col-sm-3 col-form-label">SIDI</label><br/>
          <select name="sidi" id="sidi" class="form-control" required="required">
            <option>- Pilih -</option>
            <option>Sudah</option>
            <option>Belum</option>
          </select>
        </div>
                      <div class="form-group">
                        <input type="hidden" name="edit_jemaat" class="form-control" >
                      </div>

                      <div class="form-group">
                        <input type="hidden" name="alasan_edit" class="form-control" >
                      </div>

                      <div class="form-group">
                        <input type="hidden" name="user_id" value="<?php echo $_SESSION['id']; ?>" class="form-control" readonly>
                      </div>

        </div>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>


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
                  include '../koneksi.php';
                  $no=1;
                  $data =  mysqli_query($koneksi,"SELECT * FROM jemaat");
                  while($d = mysqli_fetch_array ($data)){
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo strtoupper ($d['nama_lengkap']); ?></td>
                      <td><?php echo strtoupper ($d['jekel']); ?></td>
                      <td><?php echo  $d['kolom']; ?></td>
                      <td><?php echo strtoupper ($d['alamat']); ?></td>
                      <td>
              <!-- tombol  --> 
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