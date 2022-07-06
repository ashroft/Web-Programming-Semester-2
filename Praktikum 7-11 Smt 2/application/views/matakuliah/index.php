  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Praktikum 6 & 7</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/dashboard">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/mahasiswa">Mahasiswa</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/dosen">Dosen</a></li>
              <li class="breadcrumb-item active">Dosen Matakuliah</li>
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
        <a href="<?php echo base_url();?>index.php/formjadwal"><button type="button" class="btn btn-success">Tambah Jadwal</button></a>
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
    <h3>
        Daftar Mata Kuliah
    <table class="table">
        <thead>
            <tr>
                <th>NO</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Semester</th>
                <th>Mata Kuliah</th>
                <th>SKS</th>
                <th>Dosen</th>
                <th>Hari</th>
                <th>Ruangan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($list_mk as $mk) {
            ?>
                <tr>
                    <td><?= $nomor ?></td>
                    <td><?= $mk->kode ?></td>
                    <td><?= $mk->nama ?></td>
                    <td><?= $mk->semester ?></td>
                    <td><?= $mk->matkul ?></td>
                    <td><?= $mk->sks ?></td>
                    <td><?= $mk->dosen ?></td>
                    <td><?= $mk->hari ?></td>
                    <td><?= $mk->ruangan ?></td>
                </tr>
            <?php
                $nomor++;
            }
            ?>
        </tbody>
    </table>
</div>