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
            <h3 class="box-title">Perizinan Edit Data Jemaat</h3>
            <div class="btn-group pull-right">            


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


            <div class="table-responsive">
              <table class="table table-bordered table-striped" id="table-datatable">
                <thead>
                  <tr>
                    <th width="1%">NO</th>
                    <th>NIK</th>
                    <th>NAMA</th>
                    <th>JENIS KELAMIN</th>
                    <th>KOLOM</th>
                    <th>ALAMAT</th>
                    <th>ALASAN EDIT DATA JEMAAT</th>
                    <th>AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  include '../koneksi.php';
                  $no=1;
                  $data = mysqli_query($koneksi,"SELECT * FROM jemaat");
                  while($d = mysqli_fetch_array($data)){
                    ?>
                  <?php
              if($d['edit_jemaat'] == "proses"){
                ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $d['nik']; ?></td>
                      <td><?php echo strtoupper ($d['nama_lengkap']); ?></td>
                      <td><?php echo strtoupper ($d['jekel']); ?></td>
                      <td><?php echo  $d['kolom']; ?></td>
                      <td><?php echo strtoupper ($d['alamat']); ?></td>>
                      <td><?php echo strtoupper ($d['alasan_edit']); ?></td>
                      <td>
                        <a href="detail_izin.php?id=<?php echo $d['id_jemaat'] ?>" title="Detail info"
                         class="btn btn-primary btn-sm">
                          <i class="fa fa-info"></i>
                        </a>

                        <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#lihat_izin_<?php echo $d['id_jemaat'] ?>">
                          <i class="fa fa-eye "></i>
                        </button>

                          <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#terima_izin_<?php echo $d['id_jemaat'] ?>">
                          <i class="fa fa-check "></i>
                        </button>

                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#tolak_izin_<?php echo $d['id_jemaat'] ?>">
                          <i class="fa fa-ban "></i>
                        </button>

                <?php
                }
                ?>

                   <!-- modal lihat bukti -->
                        <div class="modal fade" id="lihat_izin_<?php echo $d['id_jemaat'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title" id="exampleModalLabel">Lihat Bukti Upload</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <embed src="../gambar/fotokk/<?php echo $d['foto_izin']; ?>" type="application/pdf" width="100%" height="400px" />
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                </div>
                              </div>
                            </div>
                          </div>

                      <!-- modal terima izin -->
                   <div class="modal fade" id="terima_izin_<?php echo $d['id_jemaat'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Peringatan!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">

                                <p>Anda Yakin Menerima Izin Edit Data Jemaat Ini ?</p>

                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <a href="jemaat_izinedit_terima.php?id=<?php echo $d['id_jemaat'] ?>" class="btn btn-success">Terima</a>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- modal tolak izin -->
                        <div class="modal fade" id="tolak_izin_<?php echo $d['id_jemaat'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Peringatan!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">

                                <p>Anda Yakin Menolak Izin Edit Data Jemaat Ini ?</p>

                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <a href="jemaat_izinedit_tolak.php?id=<?php echo $d['id_jemaat'] ?>" class="btn btn-danger">Ya!</a>
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