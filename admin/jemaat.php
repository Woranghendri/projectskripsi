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
        <label class="col-sm-4 col-form-label">Status Pernikahan</label> <font color="red">*Tidak harus mengisi tanggal jika belum menikah</font><br/>
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

                      <div class="form-group">
                        <input type="hidden" name="foto_izin" class="form-control" >
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
                    <th width="9%">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  include '../koneksi.php';
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

                          <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_jemaat_<?php echo $d['id_jemaat'] ?>">
                          <i class="fa fa-edit"></i>
                        </button>


                          <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_jemaat_<?php echo $d['id_jemaat'] ?>">
                            <i class="fa fa-trash"></i>
                          </button>

                        <!-- modal edit data jemaat -->
                        <form action="jemaat_update.php" method="post" enctype="multipart/form-data">
                          <div class="modal fade" id="edit_jemaat_<?php echo $d['id_jemaat'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title" id="exampleModalLabel">Edit Data</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body"> <center><h4><b>DATA ANGGOTA KELUARGA</b></h4></center>

                                <div class="form-group" style="width:100%;margin-bottom:20px">
                                  <label>NIK</label>
                                  <input type="hidden" name="id" required="required" class="form-control" placeholder="Nama Kategori .." value="<?php echo $d['id_jemaat']; ?>">
                                  <input type="number" style="width:100%" name="nik" required="required" class="form-control" placeholder="Nik.." value="<?php echo $d['nik'] ?>">
                                </div>

                                <div class="form-group" style="width:100%;margin-bottom:20px">
                                  <label>NAMA KELUARGA</label>
                                  <input type="text" style="width:100%" name="nama_keluarga" required="required" class="form-control" placeholder="Nama Keluarga .." value="<?php echo $d['nama_keluarga'] ?>">
                                </div>

                                <div class="form-group" style="width:100%;margin-bottom:20px">
                                    <label>RELASI KELUARGA</label>
                                    <select name="relasi" style="width:100%" class="form-control" required="required">
                                      <option value="" >- Pilih -</option>
                                      <option <?php if($d['relasi'] == "SUAMI"){echo "selected='selected'";} ?> value="SUAMI">SUAMI</option>
                                      <option <?php if($d['relasi'] == "ISTRI"){echo "selected='selected'";} ?> value="ISTRI">ISTRI</option>
                                      <option <?php if($d['relasi'] == "ANAK"){echo "selected='selected'";} ?> value="ANAK">ANAK</option>
                                    </select>
                                  </div>

                                <div class="form-group" style="width:100%;margin-bottom:20px">
                                  <label>KOLOM</label>
                                  <input type="number" style="width:100%" name="kolom" required="required" class="form-control" placeholder="Kolom .." value="<?php echo $d['kolom'] ?>">
                                </div>

                                <div class="form-group" style="width:100%;margin-bottom:20px">
                                  <label>JUMLAH ANGGOTA KELUARGA</label>
                                  <input type="number" style="width:100%" name="jumlah_anggota" required="required" class="form-control" placeholder="Jumlah Anggota Keluarga .." value="<?php echo $d['jumlah_anggota'] ?>">
                                </div>

                                <div class="form-group" style="width:100%;margin-bottom:20px">
                                  <label>NAMA LENGKAP</label>
                                  <input type="text" style="width:100%" name="nama_lengkap" required="required" class="form-control" placeholder="Nama Lengkap .." value="<?php echo $d['nama_lengkap'] ?>">
                                </div>

                                <div class="form-group" style="width:100%;margin-bottom:20px">
                                  <label>TTL</label><br/>
                                  <input type="text"  style="width:100%"class="form-control" id="tempat_lh" name="tempat_lh" placeholder="Tempat Lahir" value="<?php echo $d['tempat_lh'] ?>" required>
                                  <input type="date" style="width:100%" class="form-control" id="tgl_lh" name="tgl_lh" placeholder="Tanggal Lahir" value="<?php echo $d['tgl_lh'] ?>" required>
                                </div>

                                  <div class="form-group" style="width:100%;margin-bottom:20px">
                                    <label>JENIS KELAMIN</label>
                                    <select name="jekel" style="width:100%" class="form-control" required="required">
                                      <option value="" >- Pilih -</option>
                                      <option <?php if($d['jekel'] == "PRIA"){echo "selected='selected'";} ?> value="PRIA">PRIA</option>
                                      <option <?php if($d['jekel'] == "WANITA"){echo "selected='selected'";} ?> value="WANITA">WANITA</option>
                                    </select>
                                  </div>

                                <div class="form-group" style="width:100%;margin-bottom:20px">
                                  <label class="col-sm-4 col-form-label">STATUS PERNIKAHAN</label> <font color="red">*Jangan mengisi tanggal jika belum menikah</font><br/>
                                    <select name="status_nikah" style="width:100%" id="status_nikah" class="form-control">
                                      <option>- Pilih -</option>
                                      <option <?php if($d['status_nikah'] == "MENIKAH"){echo "selected='selected'";} ?> value="MENIKAH">MENIKAH</option>
                                      <option <?php if($d['status_nikah'] == "BELUM MENIKAH"){echo "selected='selected'";} ?> value="BELUM MENIKAH">BELUM MENIKAH</option>
                                      <option <?php if($d['status_nikah'] == "CERAI MATI"){echo "selected='selected'";} ?> value="CERAI MATI">CERAI MATI</option>
                                      <option <?php if($d['status_nikah'] == "CERAI HIDUP"){echo "selected='selected'";} ?> value="CERAI HIDUP">CERAI HIDUP</option> 
                                    </select>

                                <input type="date" style="width:100%" class="form-control" id="tgl_nikah" name="tgl_nikah" placeholder="Tanggal Pernikahan"  value="<?php echo $d['tgl_nikah'] ?>" >
                              </div>


                                <div class="form-group" style="width:100%;margin-bottom:20px">
                                  <label>PEKERJAAN</label>
                                  <input type="text" style="width:100%" name="pekerjaan" required="required" class="form-control" placeholder="Pekerjaan .." value="<?php echo $d['pekerjaan'] ?>">
                                </div>

                                <div class="form-group" style="width:100%;margin-bottom:20px">
                                  <label>PENDIDIKAN</label>
                                  <input type="text" style="width:100%" name="pendidikan" required="required" class="form-control" placeholder="Pendidikan .." value="<?php echo $d['pendidikan'] ?>">
                                </div>

                                <div class="form-group" style="width:100%;margin-bottom:20px">
                                  <label>ALAMAT</label>
                                  <input type="text" style="width:100%" name="alamat" required="required" class="form-control" placeholder="Alamat .." value="<?php echo $d['alamat'] ?>">
                                </div>

                                <div class="form-group" style="width:100%;margin-bottom:20px">
                                  <label>E-MAIL</label>
                                  <input type="text" style="width:100%" name="email" required="required" class="form-control" placeholder="E-mail .." value="<?php echo $d['email'] ?>">
                                </div>

                                <div class="form-group" style="width:100%;margin-bottom:20px">
                                  <label>TELEPON</label>
                                  <input type="number" style="width:100%" name="telepon" required="required" class="form-control" placeholder="Telepon .." value="<?php echo $d['telepon'] ?>">
                                </div>

                                <div class="form-group" style="width:100%;margin-bottom:20px">
                                  <label>GOLONGAN DARAH</label>
                                  <input type="text" style="width:100%" name="gol_darah" required="required" class="form-control" placeholder="Golongan Darah .." value="<?php echo $d['gol_darah'] ?>">
                                </div>

                                <div class="form-group" style="width:100%;margin-bottom:20px">
                                    <label>BAPTIS</label>
                                    <select name="baptis" style="width:100%" class="form-control" required="required">
                                      <option value="" >- Pilih -</option>
                                      <option <?php if($d['baptis'] == "Sudah"){echo "selected='selected'";} ?> value="Sudah">Sudah</option>
                                      <option <?php if($d['baptis'] == "Belum"){echo "selected='selected'";} ?> value="Belum">Belum</option>
                                    </select>
                                  </div>

                                  <div class="form-group" style="width:100%;margin-bottom:20px">
                                    <label>SIDI</label>
                                    <select name="sidi" style="width:100%" class="form-control" required="required">
                                      <option value="" >- Pilih -</option>
                                      <option <?php if($d['sidi'] == "Sudah"){echo "selected='selected'";} ?> value="Sudah">Sudah</option>
                                      <option <?php if($d['sidi'] == "Belum"){echo "selected='selected'";} ?> value="Belum">Belum</option>
                                    </select>
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



                         <!-- modal hapus -->
                        <div class="modal fade" id="hapus_jemaat_<?php echo $d['id_jemaat'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Peringatan!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">

                                <p>Yakin ingin menghapus data ini ?</p>

                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <a href="jemaat_hapus.php?id=<?php echo $d['id_jemaat'] ?>" class="btn btn-primary">Hapus</a>
                              </div>
                            </div>
                          </div>
                        </div>
                
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