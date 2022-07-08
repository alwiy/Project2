<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body> 
  <script>
        function hapusMahasiswa(pesan){
            if (confirm(pesan)) {
                return true;
            } else {
                return false;
            }
        }
  </script>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Faskes Depok</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url("index.php/login1/logout") ?>">Logout</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h1 class="card-title">Jenis Fasilitas Kesehatan Depok</h1>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <a href="<?php echo base_url("index.php/faskes/form")?>" class="btn btn-success btn-lg active" >add</a>
        </div>
        <div class="card-body table-responsive p-0">
          <table class="table table-head-fixed text-nowrap" >
            <thead align="center">
                <tr>
                    <th>No</th>
                    <th>Rumah Sakit</th>
                    <th>Alamat</th>
                    <th>Latlong</th>
                    <th>Jenis_id</th>
                    <th>Deskripsi</th>
                    <th>Skor_rating</th>
                    <th>Foto 1</th>
                    <th>Foto 2</th>
                    <th>Foto 3</th>
                    <th>Kecamatan_id</th>
                    <th>Website</th>
                    <th>Jumlah_dokter</th>
                    <th>Jumlah_pegawai</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody align="center">
                <?php
                    $nomor = 1;
                    foreach ($faskes as $fks) {
                ?> 
                <tr>
                    <td><?php echo $nomor ?></td>
                    <td><?php echo $fks -> nama ?></td>
                    <td><?php echo $fks -> alamat ?></td>
                    <td><?php echo $fks -> latlong ?></td>
                    <td><?php echo $fks -> jenis_id ?></td>
                    <td><?php echo $fks -> deskripsi ?></td>
                    <td><?php echo $fks -> skor_rating ?></td>
                    <td><?php echo $fks -> foto1 ?></td>
                    <td><?php echo $fks -> foto2 ?></td>
                    <td><?php echo $fks -> foto3 ?></td>
                    <td><?php echo $fks -> kecamatan_id ?></td>
                    <td><?php echo $fks -> website ?></td>
                    <td><?php echo $fks -> jumlah_dokter ?></td>
                    <td><?php echo $fks -> jumlah_pegawai ?></td>
                    <td>
                        <a href="<?php echo base_url("index.php/faskes/detail/$fks->id")?>">Detail</a>
                        &nbsp;
                        <a href="<?php echo base_url("index.php/faskes/edit/$fks->id")?>" class="btn btn-success btn-lg active" >Edit</a>
                        &nbsp;
                        <a href="<?php echo base_url("index.php/faskes/delete/$fks->id")?>"class="btn btn-danger btn-lg active"
                        onclick=" return hapusMahasiswa('Apakah Anda yakin ingin menghapus data yang bernama <?php echo $fks-> nama ?> ?')" >Delete</a> 
                    </td>
                </tr>
                <?php  
                $nomor++;
                }
                ?>
            </tbody>
         </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper --> 
</body>
</html>