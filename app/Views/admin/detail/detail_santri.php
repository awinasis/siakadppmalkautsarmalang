 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <h1 style="color:MediumSeaGreen; font-family:timesnewrohman;">
             <?= $title; ?>
         </h1>
         <br><br>
         <?php if (session()->get('level') == "Admin") { ?>
             <ol class="breadcrumb">
                 <li><a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                 <li><a href="<?= base_url('bio_santri') ?>">Data Santri</a></li>
                 <li class="active">Detail Data Santri</li>
             </ol>
         <?php } else if (session()->get('level') == "Guru") { ?>
             <ol class="breadcrumb">
                 <li><a href="<?= base_url('guru') ?>"><i class="fa fa-home"></i> Home</a></li>
                 <li><a href="<?= base_url('bio_santri') ?>">Data Santri</a></li>
                 <li class="active">Detail Data Santri</li>
             </ol>
         <?php } ?>
     </section>

     <div class="col-md-2">
     </div>
     <div class="col-md-8">
         <div class="box box-success box-solid">
             <div class="box-header with-border">
                 <h3 class="box-title"><?= $title; ?></h3>
                 <div class="box-tools pull-right">
                     <a href="<?= base_url('bio_santri') ?>" class="left"><i class="fa fa-mail-reply"></i> Kembali</a>
                 </div>
             </div>
             <div class="box-body">
                 <div class="row">
                     <div class="col-md-12">
                         <div class="chart-responsive">
                             <table class="table table-striped">
                                 <div>
                                     <p class="card-text">
                                         <label for="NIS"><b>NIS &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;: </b></label>
                                         <?= $santri['NIS']; ?>
                                     </p>

                                     <p class="card-text">
                                         <label for="nama_santri"><b>Nama Santri &emsp;&emsp;&nbsp;&emsp;: </b></label>
                                         <?= $santri['nama_santri']; ?>
                                     </p>

                                     <p class="card-text">
                                         <label for="tempat_lahir"><b>Tempat Lahir&emsp;&emsp;&emsp;: </b></label>
                                         <?= $santri['tempat_lahir']; ?>
                                     </p>

                                     <p class="card-text">
                                         <label for="tanggal_lahir"><b>Tanggal Lahir&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;: </b></label>
                                         <?= $santri['tanggal_lahir']; ?>
                                     </p>

                                     <p class="card-text">
                                         <label for="jenis_kelamin"><b>Jenis Kelamin &emsp;&nbsp;&nbsp;&emsp;: </b></label>
                                         <?= $santri['jenis_kelamin']; ?>
                                     </p>

                                     <p class="card-text">
                                         <label for="gol_darah"><b>Golongan Darah &nbsp;&nbsp;&emsp;: </b></label>
                                         <?= $santri['gol_darah']; ?>
                                     </p>

                                     <p class="card-text">
                                         <label for="alamat"><b>Alamat &emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;: </b></label>
                                         <?= $santri['alamat']; ?>
                                     </p>

                                     <p class="card-text">
                                         <label for="email"><b>Email &emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&emsp;: </b></label>
                                         <?= $santri['email']; ?>
                                     </p>

                                     <p class="card-text">
                                         <label for="noTelp"><b>No.Telp &emsp;&emsp;&ensp;&ensp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;: </b></label>
                                         <?= $santri['noTelp']; ?>
                                     </p>

                                     <p class="card-text">
                                         <label for="status"><b>Status &emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;: </b></label>
                                         <?= $santri['status']; ?>
                                     </p>

                                     <p class="card-text">
                                         <label for="universitas"><b>Universitas &emsp;&emsp;&emsp;: </b></label>
                                         <?= $santri['universitas']; ?>
                                     </p>

                                     <p class="card-text">
                                         <label for="fakultas"><b>Fakultas &emsp;&emsp;&emsp;&nbsp;&emsp;: </b></label>
                                         <?= $santri['fakultas']; ?>
                                     </p>

                                     <p class="card-text">
                                         <label for="jurusan_prodi"><b>Jurusan/Prodi &ensp;&emsp;: </b></label>
                                         <?= $santri['jurusan_prodi']; ?>
                                     </p>

                                     <p class="card-text">
                                         <label for="kelas_santri"><b>Kelas Santri &emsp;&ensp;&emsp;: </b></label>
                                         <?= $santri['kelas_santri']; ?>
                                     </p>

                                     <p class="card-text">
                                         <label for="angkatan_santri"><b>Angkatan Santri &ensp;: </b></label>
                                         <?= $santri['angkatan_santri']; ?>
                                     </p>

                                     <p class="card-text">
                                         <label for="nama_ayah"><b>Nama Ayah &emsp;&emsp;&ensp;: </b></label>
                                         <?= $santri['nama_ayah']; ?>
                                     </p>

                                     <p class="card-text">
                                         <label for="pekerjaan_ayah"><b>Pekerjaan Ayah &ensp;: </b></label>
                                         <?= $santri['pekerjaan_ayah']; ?>
                                     </p>

                                     <p class="card-text">
                                         <label for="noTelp_ayah"><b>No.Telp Ayah &emsp;&nbsp;&ensp;: </b></label>
                                         <?= $santri['noTelp_ayah']; ?>
                                     </p>

                                     <p class="card-text">
                                         <label for="nama_ibu"><b>Nama Ibu &emsp;&emsp;&emsp;: </b></label>
                                         <?= $santri['nama_ibu']; ?>
                                     </p>

                                     <p class="card-text">
                                         <label for="pekerjaan_ibu"><b>Pekerjaan Ibu &ensp;&ensp;: </b></label>
                                         <?= $santri['pekerjaan_ibu']; ?>
                                     </p>

                                     <p class="card-text">
                                         <label for="noTelp_ibu"><b>No.Telp Ibu &emsp;&nbsp;&emsp;: </b></label>
                                         <?= $santri['noTelp_ibu']; ?>
                                     </p>

                                 </div>
                             </table>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="col-md-2">
     </div>
 </div>