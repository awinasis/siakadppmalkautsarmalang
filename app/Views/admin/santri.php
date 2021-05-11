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
                 <li class="active">Data Santri</li>
             </ol>
         <?php } else if (session()->get('level') == "Guru") { ?>
             <ol class="breadcrumb">
                 <li><a href="<?= base_url('guru') ?>"><i class="fa fa-home"></i> Home</a></li>
                 <li class="active">Data Santri</li>
             </ol>
         <?php } ?>
     </section>

     <?php if (session()->get('level') == "Admin") { ?>
         <div class="row">
             <div class="col-sm-12">
                 <div class="box box-success box-solid">
                     <div class="box-header with-border">
                         <h3 class="box-title"><i class="fa  fa-table"></i> Data <?= $title; ?></h3>
                         <?php if (session()->get('level') == "Admin") { ?>
                             <div class="box-tools pull-right">
                                 <button type="button" class="btn btn-box-tool" data-toggle="modal" data-target="#add"><i class="fa fa-plus"> Tambah</i></button>
                             </div>
                         <?php } ?>
                         <!-- /.box-tools -->
                     </div>
                     <!-- /.box-header -->
                     <div class="box-body">
                         <?php
                            if (session()->getFlashdata('pesan')) {
                                echo '<div class="alert alert-success" role="alert">';
                                echo session()->getFlashdata('pesan');
                                echo '</div>';
                            }
                            ?>

                         <div class="table-responsive">
                             <table id="example1" class="table table-bordered table-striped">
                                 <thead>
                                     <tr>
                                         <th width="50px" class="text-center">No</th>
                                         <th class="text-center">NIS</th>
                                         <th class="text-center">Nama Santri</th>
                                         <th class="text-center">Tempat Lahir</th>
                                         <th class="text-center">Tanggal Lahir</th>
                                         <th class="text-center">Jenis Kelamin</th>
                                         <th class="text-center">Gol. Darah</th>
                                         <th class="text-center">Alamat</th>
                                         <th class="text-center">Email</th>
                                         <th class="text-center">No.Telp</th>
                                         <th class="text-center">Status</th>
                                         <th class="text-center">Universitas</th>
                                         <th class="text-center">Fakultas</th>
                                         <th class="text-center">Jurusan/Prodi</th>
                                         <th class="text-center">kelas Santri</th>
                                         <th class="text-center">Angkatan Santri</th>
                                         <th class="text-center">Nama Ayah</th>
                                         <th class="text-center">No.Telp Ayah</th>
                                         <th class="text-center">Nama Ibu</th>
                                         <th class="text-center">No.Telp Ibu</th>
                                         <?php if (session()->get('level') == "Admin") { ?>
                                             <th width="150px" class="text-center">Action</th>
                                         <?php } ?>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php $no = 1;
                                        foreach ($santri as $key => $value) { ?>
                                         <tr>
                                             <td class="text-center"><?= $no++; ?></td>
                                             <td class="text-center"><?= $value['NIS'] ?></td>
                                             <td><?= $value['nama_santri'] ?></td>
                                             <td class="text-center"><?= $value['tempat_lahir'] ?></td>
                                             <td class="text-center"><?= $value['tanggal_lahir'] ?></td>
                                             <td class="text-center"><?= $value['jenis_kelamin'] ?></td>
                                             <td class="text-center"><?= $value['gol_darah'] ?></td>
                                             <td class="text-center"><?= $value['alamat'] ?></td>
                                             <td class="text-center"><?= $value['email'] ?></td>
                                             <td class="text-center"><?= $value['noTelp'] ?></td>
                                             <td class="text-center"><?= $value['status'] ?></td>
                                             <td class="text-center"><?= $value['universitas'] ?></td>
                                             <td class="text-center"><?= $value['fakultas'] ?></td>
                                             <td class="text-center"><?= $value['jurusan_prodi'] ?></td>
                                             <td class="text-center"><?= $value['kelas_santri'] ?></td>
                                             <td class="text-center"><?= $value['angkatan_santri'] ?></td>
                                             <td><?= $value['nama_ayah'] ?></td>
                                             <td class="text-center"><?= $value['noTelp_ayah'] ?></td>
                                             <td><?= $value['nama_ibu'] ?></td>
                                             <td class="text-center"><?= $value['noTelp_ibu'] ?></td>

                                             <?php if (session()->get('level') == "Admin") { ?>
                                                 <td class="text-center">
                                                     <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?= $value['id_santri'] ?>"><i class="fa fa-edit"></i></button>
                                                     <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value['id_santri'] ?>"><i class="fa fa-trash"></i></button>
                                                 </td>
                                             <?php } ?>
                                         </tr>
                                     <?php } ?>
                                 </tbody>
                             </table>
                         </div>
                     </div>
                     <!-- /.box-body -->
                 </div>
                 <!-- /.box -->
             </div>
         </div>
     <?php } elseif (session()->get('level') == "Guru") { ?>
         <div class="row">
             <div class="col-sm-12">
                 <div class="box box-success box-solid">
                     <div class="box-header with-border">
                         <h3 class="box-title"><i class="fa  fa-table"></i> Data <?= $title; ?></h3>
                         <!-- /.box-tools -->
                     </div>
                     <!-- /.box-header -->
                     <div class="box-body">
                         <?php
                            if (session()->getFlashdata('pesan')) {
                                echo '<div class="alert alert-success" role="alert">';
                                echo session()->getFlashdata('pesan');
                                echo '</div>';
                            }
                            ?>

                         <div class="table-responsive">
                             <table id="example1" class="table table-bordered table-striped">
                                 <thead>
                                     <tr>
                                         <th width="50px" class="text-center">No</th>
                                         <th class="text-center">NIS</th>
                                         <th class="text-center">Nama Santri</th>
                                         <th class="text-center">Tempat Lahir</th>
                                         <th class="text-center">Tanggal Lahir</th>
                                         <th class="text-center">Jenis Kelamin</th>
                                         <th class="text-center">Gol. Darah</th>
                                         <th class="text-center">Alamat</th>
                                         <th class="text-center">Email</th>
                                         <th class="text-center">No.Telp</th>
                                         <th class="text-center">Status</th>
                                         <th class="text-center">Universitas</th>
                                         <th class="text-center">Fakultas</th>
                                         <th class="text-center">Jurusan/Prodi</th>
                                         <th class="text-center">kelas Santri</th>
                                         <th class="text-center">Angkatan Santri</th>
                                         <th class="text-center">Nama Ayah</th>
                                         <th class="text-center">No.Telp Ayah</th>
                                         <th class="text-center">Nama Ibu</th>
                                         <th class="text-center">No.Telp Ibu</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php $no = 1;
                                        foreach ($santri as $key => $value) { ?>
                                         <tr>
                                             <td class="text-center"><?= $no++; ?></td>
                                             <td class="text-center"><?= $value['NIS'] ?></td>
                                             <td><?= $value['nama_santri'] ?></td>
                                             <td class="text-center"><?= $value['tempat_lahir'] ?></td>
                                             <td class="text-center"><?= $value['tanggal_lahir'] ?></td>
                                             <td class="text-center"><?= $value['jenis_kelamin'] ?></td>
                                             <td class="text-center"><?= $value['gol_darah'] ?></td>
                                             <td class="text-center"><?= $value['alamat'] ?></td>
                                             <td class="text-center"><?= $value['email'] ?></td>
                                             <td class="text-center"><?= $value['noTelp'] ?></td>
                                             <td class="text-center"><?= $value['status'] ?></td>
                                             <td class="text-center"><?= $value['universitas'] ?></td>
                                             <td class="text-center"><?= $value['fakultas'] ?></td>
                                             <td class="text-center"><?= $value['jurusan_prodi'] ?></td>
                                             <td class="text-center"><?= $value['kelas_santri'] ?></td>
                                             <td class="text-center"><?= $value['angkatan_santri'] ?></td>
                                             <td><?= $value['nama_ayah'] ?></td>
                                             <td class="text-center"><?= $value['noTelp_ayah'] ?></td>
                                             <td><?= $value['nama_ibu'] ?></td>
                                             <td class="text-center"><?= $value['noTelp_ibu'] ?></td>
                                         </tr>
                                     <?php } ?>
                                 </tbody>
                             </table>
                         </div>
                     </div>
                     <!-- /.box-body -->
                 </div>
                 <!-- /.box -->
             </div>
         </div>
     <?php } ?>

     <?php if (session()->get('level') == "Admin") { ?>
         <!-- modal add -->
         <div class="modal fade" id="add">
             <div class="modal-dialog">
                 <div class="modal-content box box-success box-solid">
                     <div class="modal-header box-header with-border">
                         <h4 class="modal-title">Tambah santri</h4>
                     </div>

                     <div class="modal-body">
                         <?php
                            echo form_open('bio_santri/add');
                            ?>

                         <div class="form-group row">
                             <div class="col-lg-6">
                                 <label>NIS</label>
                                 <input name="NIS" type="number" class="form-control" placeholder="NIS" required>
                             </div>
                         </div>

                         <div class="form-group">
                             <label>Nama Santri</label>
                             <input name="nama_santri" class="form-control" placeholder="nama santri" required>
                         </div>

                         <div class="form-group row">
                             <div class="col-lg-6">
                                 <label>Tempat Lahir</label>
                                 <input name="tempat_lahir" class="form-control" placeholder="tempat lahir" required>
                             </div>

                             <div class="col-lg-6">
                                 <label>Tanggal Lahir</label>
                                 <input name="tanggal_lahir" type="date" class="form-control" placeholder="tanggal lahir" required>
                             </div>
                         </div>

                         <div class="form-group row">
                             <div class="col-lg-8">
                                 <label class="form-control-label">Jenis Kelamin</label>
                                 <div class="form-group">
                                     <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L" required> L
                                     <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P" required> P
                                 </div>
                             </div>
                         </div>

                         <div class="form-group row">
                             <div class="col-lg-4">
                                 <label>Gol. Darah</label>
                                 <input class="form-control" name="gol_darah" placeholder="gol. darah" required>
                             </div>
                         </div>

                         <div class="form-group">
                             <label>Alamat</label>
                             <textarea class="form-control" id="alamat" name="alamat" style="height: 100px" required></textarea>
                         </div>

                         <div class="form-group row">
                             <div class="col-lg-8">
                                 <label>Email</label>
                                 <input name="email" type="email" class="form-control" placeholder="email" required>
                             </div>
                         </div>

                         <div class="form-group row">
                             <div class="col-lg-6">
                                 <label>NoTelp</label>
                                 <input name="noTelp" type="number" class="form-control" placeholder="noTelp" required>
                             </div>
                         </div>

                         <div class="form-group row">
                             <div class="col-lg-6">
                                 <label>Status</label>
                                 <select name="status" class="form-control" id="status" required>
                                     <option value="Mahasiswa">Mahasiswa</option>
                                 </select>
                             </div>
                         </div>

                         <div class="form-group">
                             <label>Universitas</label>
                             <input name="universitas" class="form-control" placeholder="universitas" required>
                         </div>

                         <div class="form-group">
                             <label>Fakultas</label>
                             <input name="fakultas" class="form-control" placeholder="fakultas">
                         </div>

                         <div class="form-group">
                             <label>Jurusan/Prodi</label>
                             <input name="jurusan_prodi" class="form-control" placeholder="jurusan/prodi" required>
                         </div>

                         <div class="form-group row">
                             <div class="col-lg-8">
                                 <label class="form-control-label">kelas Santri</label>
                                 <select name="kelas_santri" class="form-control" id="kelas_santri" required>
                                     <option value="">- Pilih -</option>
                                     <option value="Qiraah">Qiraah</option>
                                     <option value="kitabah">kitabah</option>
                                     <!-- <option value="Reguler">Reguler</option>
                                     <option value="Mubtadin">Mubtadin</option>
                                     <option value="Mutawasithin">Mutawasithin</option>
                                     <option value="Muntahin">Muntahin</option> -->
                                     <option value="Al-Taannii">Al-Taannii</option>
                                     <option value="Al-Sarii">Al-Sarii</option>
                                     <option value="Al-Idlofi">Al-Idlofi</option>
                                     <option value="Hadits Besar">Hadits Besar</option>
                                 </select>
                             </div>
                         </div>

                         <div class="form-group row">
                             <div class="col-lg-4">
                                 <label class="form-control-label">Angkatan Santri</label>
                                 <input type="number" class="form-control" placeholder="angkatan santri" name="angkatan_santri" value="<?php echo date('Y'); ?>" />
                             </div>
                         </div>

                         <div class="form-group">
                             <label>Nama Ayah</label>
                             <input name="nama_ayah" type="" class="form-control" placeholder="nama ayah" required>
                         </div>

                         <div class="form-group row">
                             <div class="col-lg-6">
                                 <label>NoTelp Ayah</label>
                                 <input name="noTelp_ayah" type="number" class="form-control" placeholder="noTelp ayah" required>
                             </div>
                         </div>

                         <div class="form-group">
                             <label>Nama Ibu</label>
                             <input name="nama_ibu" type="" class="form-control" placeholder="nama ibu" required>
                         </div>

                         <div class="form-group row">
                             <div class="col-lg-6">
                                 <label>NoTelp Ibu</label>
                                 <input name="noTelp_ibu" type="number" class="form-control" placeholder="noTelp ibu" required>
                             </div>
                         </div>
                     </div>

                     <div class="modal-footer">
                         <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                         <button type="submit" class="btn btn-primary">Simpan</button>
                     </div>
                     <?php echo form_close(); ?>
                 </div>
                 <!-- /.modal-content -->
             </div>
             <!-- /.modal-dialog -->
         </div>

         <!-- modal edit -->
         <?php foreach ($santri as $key => $value) { ?>
             <div class="modal fade" id="edit<?= $value['id_santri'] ?>">
                 <div class="modal-dialog">
                     <div class="modal-content box box-success box-solid">
                         <div class="modal-header box-header with-border">
                             <h4 class="modal-title">Edit santri</h4>
                         </div>

                         <div class="modal-body">
                             <?php
                                echo form_open('bio_santri/edit/' . $value['id_santri']);
                                ?>

                             <div class="form-group row">
                                 <div class="col-lg-6">
                                     <label>NIS</label>
                                     <input name="NIS" value="<?= $value['NIS'] ?>" class="form-control" placeholder="NIS" required>
                                 </div>
                             </div>

                             <div class="form-group">
                                 <label>Nama Santri</label>
                                 <input name="nama_santri" value="<?= $value['nama_santri'] ?>" class="form-control" placeholder="nama santri" required>
                             </div>

                             <div class="form-group row">
                                 <div class="col-lg-6">
                                     <label>Tempat Lahir</label>
                                     <input name="tempat_lahir" class="form-control" value="<?= $value['tempat_lahir'] ?>" placeholder="tempat lahir" required>
                                 </div>

                                 <div class="col-lg-6">
                                     <label>Tanggal Lahir</label>
                                     <input name="tanggal_lahir" type="date" class="form-control" value="<?= $value['tanggal_lahir'] ?>" placeholder="tanggal lahir" required>
                                 </div>
                             </div>

                             <div class="form-group row">
                                 <div class="col-lg-8">
                                     <label class="form-control-label">Jenis Kelamin</label>
                                     <div class="form-group">
                                         <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L" <?= $value['jenis_kelamin'] == "L" ? "checked" : ""; ?> required> L
                                         <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P" <?= $value['jenis_kelamin'] == "P" ? "checked" : ""; ?> required> P
                                     </div>
                                 </div>
                             </div>

                             <div class="form-group row">
                                 <div class="col-lg-4">
                                     <label>Gol. Darah</label>
                                     <input class="form-control" name="gol_darah" value="<?= $value['gol_darah'] ?>" required>
                                 </div>
                             </div>

                             <div class="form-group">
                                 <label>Alamat</label>
                                 <textarea id="alamat" name="alamat" class="form-control ckeditor" style="height: 100px" required><?= htmlentities($value['alamat']); ?></textarea>
                             </div>

                             <div class="form-group row">
                                 <div class="col-lg-8">
                                     <label>Email</label>
                                     <input name="email" type="email" value="<?= $value['email'] ?>" class="form-control" placeholder="email" required>
                                 </div>
                             </div>

                             <div class="form-group row">
                                 <div class="col-lg-6">
                                     <label>NoTelp</label>
                                     <input name="noTelp" type="number" value="<?= $value['noTelp'] ?>" class="form-control" placeholder="noTelp" required>
                                 </div>
                             </div>

                             <div class="form-group row">
                                 <div class="col-lg-6">
                                     <label>Status</label>
                                     <select name="status" class="form-control" id="status" value="<?= $value['status'] ?>" required>
                                         <option value="Mahasiswa">Mahasiswa</option>
                                     </select>
                                 </div>
                             </div>

                             <div class="form-group">
                                 <label>Universitas</label>
                                 <input name="universitas" value="<?= $value['universitas'] ?>" class="form-control" placeholder="universitas" required>
                             </div>

                             <div class="form-group">
                                 <label>Fakultas</label>
                                 <input name="fakultas" value="<?= $value['fakultas'] ?>" class="form-control" placeholder="fakultas">
                             </div>
                             <div class="form-group">
                                 <label>Jurusan/Prodi</label>
                                 <input name="jurusan_prodi" value="<?= $value['jurusan_prodi'] ?>" class="form-control" placeholder="jurusan_prodi" required>
                             </div>

                             <div class="form-group row">
                                 <div class="col-lg-8">
                                     <label class="form-control-label">kelas Santri</label>
                                     <select name="kelas_santri" class="form-control" id="kelas_santri" required>
                                         <option value="Qiraah" <?= $value['kelas_santri'] == "Qiraah" ? "selected" : ""; ?>>Qiraah</option>
                                         <option value="kitabah" <?= $value['kelas_santri'] == "kitabah" ? "selected" : ""; ?>>kitabah</option>
                                         <!-- <option value="Reguler" <?= $value['kelas_santri'] == "Reguler" ? "selected" : ""; ?>>Reguler</option>
                                         <option value="Mubtadin" <?= $value['kelas_santri'] == "Mubtadin" ? "selected" : ""; ?>>Mubtadin</option>
                                         <option value="Mutawasithin" <?= $value['kelas_santri'] == "Mutawasithin" ? "selected" : ""; ?>>Mutawasithin</option>
                                         <option value="Muntahin" <?= $value['kelas_santri'] == "Muntahin" ? "selected" : ""; ?>>Muntahin</option> -->
                                         <option value="Al-Taannii" <?= $value['kelas_santri'] == "Al-Taannii" ? "selected" : ""; ?>>Al-Taannii</option>
                                         <option value="Al-Sarii" <?= $value['kelas_santri'] == "Al-Sarii" ? "selected" : ""; ?>>Al-Sarii</option>
                                         <option value="Al-Idlofi" <?= $value['kelas_santri'] == "Al-Idlofi" ? "selected" : ""; ?>>Al-Idlofi</option>
                                         <option value="Hadits Besar" <?= $value['kelas_santri'] == "Hadits Besar" ? "selected" : ""; ?>>Hadits Besar</option>
                                     </select>
                                 </div>
                             </div>

                             <div class="form-group row">
                                 <div class="col-lg-4">
                                     <label>Angkatan Santri</label>
                                     <input name="angkatan_santri" type="number" value="<?= $value['angkatan_santri'] ?>" class="form-control" placeholder="angkatan santri" required>
                                 </div>
                             </div>

                             <div class="form-group">
                                 <label>Nama Ayah</label>
                                 <input name="nama_ayah" value="<?= $value['nama_ayah'] ?>" class="form-control" placeholder="nama ayah" required>
                             </div>

                             <div class="form-group row">
                                 <div class="col-lg-6">
                                     <label>NoTelp Ayah</label>
                                     <input name="noTelp_ayah" value="<?= $value['noTelp_ayah'] ?>" class="form-control" placeholder="noTelp ayah" required>
                                 </div>
                             </div>

                             <div class="form-group">
                                 <label>Nama Ibu</label>
                                 <input name="nama_ibu" value="<?= $value['nama_ibu'] ?>" class="form-control" placeholder="nama ibu" required>
                             </div>

                             <div class="form-group row">
                                 <div class="col-lg-6">
                                     <label>NoTelp Ibu</label>
                                     <input name="noTelp_ibu" value="<?= $value['noTelp_ibu'] ?>" class="form-control" placeholder="noTelp ibu" required>
                                 </div>
                             </div>

                         </div>

                         <div class="modal-footer">
                             <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                             <button type="submit" class="btn btn-primary">Simpan</button>
                         </div>
                         <?php echo form_close(); ?>
                     </div>
                     <!-- /.modal-content -->
                 </div>
                 <!-- /.modal-dialog -->
             </div>
         <?php } ?>

         <!-- modal delete -->
         <?php foreach ($santri as $key => $value) { ?>
             <div class="modal fade" id="delete<?= $value['id_santri'] ?>">
                 <div class="modal-dialog">
                     <div class="modal-content box box-success box-solid">
                         <div class="modal-header box-header with-border">
                             <h4 class="modal-title">Delete santri</h4>
                         </div>

                         <div class="modal-body">
                             Apakah anda yakin ingin menghapus <b><?= $value['nama_santri'] ?> ?</b>
                         </div>

                         <div class="modal-footer">
                             <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                             <a href="<?= base_url('bio_santri/delete/' . $value['id_santri']) ?>" class="btn btn-primary">Delete</a>
                         </div>
                     </div>
                     <!-- /.modal-content -->
                 </div>
                 <!-- /.modal-dialog -->
             </div>
         <?php } ?>
     <?php } ?>