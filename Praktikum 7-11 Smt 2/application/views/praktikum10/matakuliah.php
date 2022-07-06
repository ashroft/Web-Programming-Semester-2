  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Praktikum 10</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Prodi</li>
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/praktikum10mahasiswa">Mahasiswa</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/praktikum10dosen">Dosen</a></li>
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
          <a href="<?php echo base_url();?>index.php/tambahprodi"><button type="button" class="btn btn-success">Tambah Prodi</button></a>

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
        <div class="col-md-12">
    <h3>Daftar Prodi</h3>
    <table class="table">
        <thead>
            <tr>
                <th>NO</th><th>KODE</th><th>Nama Prodi</th><th>Ketua Prodi</th>
                <?php
                  if($this->session->userdata('ROLE')=='ADMIN'){
                ?>
                <th>Action</th>
                <?php
                  }
                ?>
            </tr>
        </thead>
    <tbody>
    <?php
    $nomor=1;
    foreach($list_prodi as $row){
    ?>
        <tr>
            <td><?=$nomor?></td>
            <td><?=$row->kode?></td>
            <td><?=$row->nama?></td>
            <td><?=$row->kaprodi?></td>
            <?php
              if($this->session->userdata('ROLE')=='ADMIN'){
            ?>
            <td>
              <a href="<?php echo base_url();?>index.php/tambahprodi/edit?id=<?=$row->kode?>">Edit</a> |
              <a href="<?php echo base_url();?>index.php/tambahprodi/delete?id=<?=$row->kode?>"
              onclick="if(!confirm('Anda Yakin Hapus Prodi KODE <?=$row->kode?>?')) {return false}" >Delete</a>
            </td>
            <?php
              }
            ?>
        </tr>
    <?php
    $nomor++;
    }
    ?>
    </tbody>
    </table>
</div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->