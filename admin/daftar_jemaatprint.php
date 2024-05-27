 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>GMIM MUSOMA TOSURAYA BARAT</title>
 	<link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">

 </head>
 <body>

 	<center>
 		<h4>DAFTAR ANGGOTA JEMAAT GMTB</h4>
 	</center>


 	 <?php 
       include '../koneksi.php';
  // error_reporting(0);
  error_reporting(E_ALL ^ E_DEPRECATED);
            if(isset($_GET['kolom'])){
              $kolom = $_GET['kolom'];
              ?>

              <div class="row">
                <div class="col-lg-6">
                  <table class="table table-bordered">
                    <tr>
                      <th>KOLOM : <?php 
                        if($kolom == "semua"){
                          echo "SEMUA KOLOM";
                        }else{
                          $k = mysqli_query($koneksi,"select * from jemaat where kolom='$kolom'");
                          $kk = mysqli_fetch_assoc($k);
                          echo $kk['kolom'];
                        }
                        ?></th>
 					</tr>
 				</table>

 			</div>
 		</div>

 		<div class="table-responsive">
 			<table class="table table-bordered table-striped">
 				<thead>
                    <tr>
                    <th width="1%">NO</th>
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
                      $data = mysqli_query($koneksi,"SELECT * FROM jemaat ORDER BY kolom ASC");
                    }else{
                      $data = mysqli_query($koneksi,"SELECT * FROM jemaat where kolom='$kolom'");
                    }
                    while($d = mysqli_fetch_array($data)){

                      ?>
                      <tr>
                        <td class="text-center"><?php echo $no++; ?></td>
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


<script>

    window.print();
    $(document).ready(function(){

    });
  </script>

 </body>
 </html>
