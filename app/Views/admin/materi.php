 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <h1>
             <?= $title; ?>
         </h1>
         <br><br>
         <?php if (session()->get('level') == "Guru") { ?>
             <ol class="breadcrumb">
                 <li><a href="<?= base_url('guru') ?>"><i class="fa fa-home"></i> Home</a></li>
                 <li class="active">Data Materi</li>
             </ol>
         <?php } elseif (session()->get('level') == "Admin") { ?>
             <ol class="breadcrumb">
                 <li><a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                 <li class="active">Data Materi</li>
             </ol>
         <?php } ?>
     </section>

     <div class="row">
         <div class="col-sm-12">
             <div class="box box-success box-solid">
                 <div class="box-header with-border">
                     <h3 class="box-title"><i class="fa  fa-table"></i> Data <?= $title; ?></h3>
                     <?php if (session()->get('level') == "Guru") { ?>
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
                                     <th class="text-center">Nama Materi</th>
                                     <th class="text-center">Kelas</th>
                                     <?php if (session()->get('level') == "Guru") { ?>
                                         <th width="150px" class="text-center">Action</th>
                                     <?php } ?>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php $no = 1;
                                    foreach ($materi as $key => $value) { ?>
                                     <tr>
                                         <td class="text-center"><?= $no++; ?></td>
                                         <td><?= $value['nama_materi'] ?></td>
                                         <td class="text-center"><?= $value['kelas'] ?></td>
                                         <?php if (session()->get('level') == "Guru") { ?>
                                             <td class="text-center">
                                                 <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?= $value['id_materi'] ?>"><i class="fa fa-edit"></i></button>
                                                 <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value['id_materi'] ?>"><i class="fa fa-trash"></i></button>
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

     <?php if (session()->get('level') == "Guru") { ?>
         <!-- modal add -->
         <div class="modal fade" id="add">
             <div class="modal-dialog">
                 <div class="modal-content box box-success box-solid">
                     <div class="modal-header box-header with-border">
                         <h4 class="modal-title">Tambah Materi</h4>
                     </div>

                     <div class="modal-body">
                         <?php
                            echo form_open('data_materi/add');
                            ?>
                         <div class="form-group">
                             <label>Nama Materi</label>
                             <input name="nama_materi" class="form-control" placeholder="nama materi" required>
                         </div>
                         <div class="form-group row">
                             <div class="col-lg-8">
                                 <label class="form-control-label">Kelas</label>
                                 <select name="kelas" class="form-control" id="kelas" required>
                                     <option value="">- Pilih -</option>
                                     <option value="Qiraah">Qiraah</option>
                                     <option value="kitabah">kitabah</option>
                                     <option value="Reguler">Reguler</option>
                                     <option value="Mubtadin">Mubtadin</option>
                                     <option value="Mutawasithin">Mutawasithin</option>
                                     <option value="Muntahin">Muntahin</option>
                                     <option value="Al-Taannii">Al-Taannii</option>
                                     <option value="Al-Sarii">Al-Sarii</option>
                                     <option value="Al-Idlofi">Al-Idlofi</option>
                                     <option value="Hadits Besar">Hadits Besar</option>
                                 </select>
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
         <?php foreach ($materi as $key => $value) { ?>
             <div class="modal fade" id="edit<?= $value['id_materi'] ?>">
                 <div class="modal-dialog">
                     <div class="modal-content box box-success box-solid">
                         <div class="modal-header box-header with-border">
                             <h4 class="modal-title">Edit Materi</h4>
                         </div>

                         <div class="modal-body">
                             <?php
                                echo form_open('data_materi/edit/' . $value['id_materi']);
                                ?>
                             <div class="form-group">
                                 <label>Nama Materi</label>
                                 <input name="nama_materi" class="form-control" value="<?= $value['nama_materi'] ?>" required>
                             </div>
                             <div class="form-group row">
                                 <div class="col-lg-8">
                                     <label class="form-control-label">Kelas</label>
                                     <select name="kelas" class="form-control" id="kelas" required>
                                         <option value="">- Pilih -</option>
                                         <option value="Qiraah" <?= $value['kelas'] == "Qiraah" ? "selected" : ""; ?>>Qiraah</option>
                                         <option value="kitabah" <?= $value['kelas'] == "kitabah" ? "selected" : ""; ?>>kitabah</option>
                                         <option value="Reguler" <?= $value['kelas'] == "Reguler" ? "selected" : ""; ?>>Reguler</option>
                                         <option value="Mubtadin" <?= $value['kelas'] == "Mubtadin" ? "selected" : ""; ?>>Mubtadin</option>
                                         <option value="Mutawasithin" <?= $value['kelas'] == "Mutawasithin" ? "selected" : ""; ?>>Mutawasithin</option>
                                         <option value="Muntahin" <?= $value['kelas'] == "Muntahin" ? "selected" : ""; ?>>Muntahin</option>
                                         <option value="Al-Taannii" <?= $value['kelas'] == "Al-Taannii" ? "selected" : ""; ?>>Al-Taannii</option>
                                         <option value="Al-Sarii" <?= $value['kelas'] == "Al-Sarii" ? "selected" : ""; ?>>Al-Sarii</option>
                                         <option value="Al-Idlofi" <?= $value['kelas'] == "Al-Idlofi" ? "selected" : ""; ?>>Al-Idlofi</option>
                                         <option value="Hadits Besar" <?= $value['kelas'] == "Hadits Besar" ? "selected" : ""; ?>>Hadits Besar</option>
                                     </select>
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
         <?php foreach ($materi as $key => $value) { ?>
             <div class="modal fade" id="delete<?= $value['id_materi'] ?>">
                 <div class="modal-dialog">
                     <div class="modal-content box box-success box-solid">
                         <div class="modal-header box-header with-border">
                             <h4 class="modal-title">Delete Materi</h4>
                         </div>

                         <div class="modal-body">
                             Apakah anda yakin ingin menghapus <b><?= $value['nama_materi'] ?> ?</b>
                         </div>

                         <div class="modal-footer">
                             <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                             <a href="<?= base_url('data_materi/delete/' . $value['id_materi']) ?>" class="btn btn-primary">Delete</a>
                         </div>
                     </div>
                     <!-- /.modal-content -->
                 </div>
                 <!-- /.modal-dialog -->
             </div>
         <?php } ?>
     <?php } ?>