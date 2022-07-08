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
          <h1 class="card-title">KOMENTAR USER</h1>

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
          <a href="<?php echo base_url("index.php/komentar/form")?>" class="btn btn-success btn-lg active" >add</a>
        </div>
        <table class="table table-striped m-2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Isi</th>
                    <th>Users_id</th>
                    <th>Faskes_id</th>
                    <th>Nilai_rating_id</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $nomor = 1;
                    foreach ($komentar as $kmn) {
                ?> 
                <tr>
                    <td><?php echo $nomor ?></td>
                    <td><?php echo $kmn -> tanggal ?></td>
                    <td><?php echo $kmn -> isi ?></td>
                    <td><?php echo $kmn -> users_id ?></td>
                    <td><?php echo $kmn -> faskes_id ?></td>
                    <td><?php echo $kmn -> nilai_rating_id ?></td>
                    <td>
                        <a href="<?php echo base_url("index.php/komentar/detail/$kmn->id")?>">Detail</a>
                        &nbsp;
                        <a href="<?php echo base_url("index.php/komentar/edit/$kmn->id")?>" class="btn btn-success btn-lg active" >Update</a>
                        &nbsp;
                        <a href="<?php echo base_url("index.php/komentar/delete/$kmn->id")?>"class="btn btn-danger btn-lg active"
                        onclick=" return hapusMahasiswa('Apakah Anda yakin ingin menghapus data dengan id <?php echo $kmn-> id ?> ?')" >Delete</a> 
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