  <!-- Content Wrapper. Contains page content -->
  <script>
        function hapusMahasiswa(pesan){
            if (confirm(pesan)) {
                return true;
            } else {
                return false;
            }
        }
  </script>
<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Faskes Depok</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url("index.php/login/logout") ?>">Logout</a></li>
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
          <a href="<?php echo base_url("index.php/nilai_rating/form")?>" class="btn btn-success btn-lg active" >Tambah Data</a>
        </div>
        <table class="table table-striped m-2">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nilai Rating</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $nomor = 1;
                    foreach ($nilai_rating as $rtg) {
                ?> 
                <tr>
                    <td><?php echo $nomor ?></td>
                    <td><?php echo $rtg -> nama ?></td>
                    <td>
                        <a href="<?php echo base_url("index.php/nilai_rating/detail/$rtg->id")?>">Detail</a>
                        &nbsp;
                        <a href="<?php echo base_url("index.php/nilai_rating/edit/$rtg->id")?>" class="btn btn-success btn-lg active" >Update</a>
                        &nbsp;
                        <a href="<?php echo base_url("index.php/nilai_rating/delete/$rtg->id")?>"class="btn btn-danger btn-lg active"
                        onclick=" return hapusMahasiswa('Apakah Anda yakin ingin menghapus data yang bernama <?php echo $rtg-> nama ?> ?')" >Delete</a> 
                    </td>
                </tr>
                <?php  
                $nomor++;
                }
                ?>
            </tbody>
        </table>
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