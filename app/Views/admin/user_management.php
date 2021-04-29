 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <h1>
             <?= $title; ?>
         </h1>
         <br><br>
         <ol class="breadcrumb">
             <li><a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
             <li class="active">Data User</li>
         </ol>
     </section>

     <div class="row">
         <div class="col-sm-12">
             <div class="box box-success box-solid">
                 <div class="box-header with-border">
                     <h3 class="box-title"><i class="fa  fa-table"></i> Data <?= $title; ?></h3>

                     <div class="box-tools pull-right">
                         <button type="button" class="btn btn-box-tool" data-toggle="modal" data-target="#add"><i class="fa fa-plus"> Tambah</i></button>
                     </div>
                     <!-- /.box-tools -->
                 </div>
                 <!-- /.box-header -->
                 <div class="box-body">
                     <?php

                        $errors = session()->getFlashdata('errors');
                        if (!empty($errors)) { ?>
                         <div class="alert alert-danger" role="alert">
                             <ul>
                                 <?php foreach ($errors as $key => $value) { ?>
                                     <li><?= esc($value) ?></li>
                                 <?php } ?>
                             </ul>
                         </div>
                     <?php } ?>

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
                                     <th class="text-center">Nama Santri</th>
                                     <th class="text-center">Username</th>
                                     <th class="tex-center">Password</th>
                                     <th class="tex-center">Level</th>
                                     <th class="text-center">Foto</th>
                                     <th width="150px" class="text-center">Action</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php $no = 1;
                                    foreach ($user as $key => $value) { ?>
                                     <tr>
                                         <td class="text-center"><?= $no++; ?></td>
                                         <td><?= $value['nama_user'] ?></td>
                                         <td><?= $value['username'] ?></td>
                                         <td><?= $value['password'] ?></td>
                                         <td><?= $value['level'] ?></td>
                                         <td class="text-center"><img src="<?= base_url('foto/' . $value['foto']) ?>" class="img-circle" width="50px" height="50px"></td>
                                         <td class="text-center">
                                             <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?= $value['id_user'] ?>"><i class="fa fa-edit"></i></button>
                                             <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value['id_user'] ?>"><i class="fa fa-trash"></i></button>
                                         </td>
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

     <!-- modal add -->
     <div class="modal fade" id="add">
         <div class="modal-dialog">
             <div class="modal-content box box-success box-solid">
                 <div class="modal-header box-header with-border">
                     <h4 class="modal-title">Tambah User</h4>
                 </div>

                 <div class="modal-body">
                     <?php
                        echo form_open_multipart('data_user/add');
                        ?>

                     <div class="form-group">
                         <label>Nama Santri</label>
                         <input name="nama_user" class="form-control" placeholder="nama user" required>
                     </div>

                     <div class="form-group">
                         <label>Username</label>
                         <input name="username" type="number" class="form-control" placeholder="Username" required>
                     </div>

                     <div class="form-group">
                         <label>Password</label>
                         <input name="password" class="form-control" placeholder="password" required>
                     </div>

                     <div class="form-group row">
                         <div class="col-lg-4">
                             <label>Level</label>
                             <select name="level" class="form-control" required>
                                 <option value="">-- Pilih --</option>
                                 <option>Admin</option>
                                 <option>Guru</option>
                                 <option>Santri</option>
                             </select>
                         </div>
                     </div>

                     <div class="form-group">
                         <label>Foto</label>
                         <input name="foto" type="file" class="form-control" placeholder="foto">
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
     <?php foreach ($user as $key => $value) { ?>
         <div class="modal fade" id="edit<?= $value['id_user'] ?>">
             <div class="modal-dialog">
                 <div class="modal-content box box-success box-solid">
                     <div class="modal-header box-header with-border">
                         <h4 class="modal-title">Edit User</h4>
                     </div>

                     <div class="modal-body">
                         <?php
                            echo form_open_multipart('data_user/edit/' . $value['id_user']);
                            ?>

                         <div class="form-group">
                             <label>Nama Santri</label>
                             <input name="nama_user" value="<?= $value['nama_user'] ?>" class="form-control" placeholder="nama user" required>
                         </div>

                         <div class="form-group">
                             <label>Username</label>
                             <input name="username" value="<?= $value['username'] ?>" class="form-control" placeholder="Username" required>
                         </div>

                         <div class="form-group">
                             <label>Password</label>
                             <input name="password" value="<?= $value['password'] ?>" class="form-control" placeholder="password" required>
                         </div>

                         <div class="form-group row">
                             <div class="col-lg-4">
                                 <label class="form-control-label">Level</label>
                                 <select name="level" class="form-control" id="level" required>
                                     <option value="Admin" <?= $value['level'] == "Admin" ? "selected" : ""; ?>>Admin</option>
                                     <option value="Guru" <?= $value['level'] == "Guru" ? "selected" : ""; ?>>Guru</option>
                                     <option value="Santri" <?= $value['level'] == "Santri" ? "selected" : ""; ?>>Santri</option>
                                 </select>
                             </div>
                         </div>

                         <div class="form-group row">
                             <div class="col-lg-12">
                                 <label>Ganti Foto</label>
                                 <input name="foto" type="file" value="<?= $value['foto'] ?>" class="form-control">
                             </div>
                         </div>

                         <div class="form-group">
                             <img src="<?= base_url('foto/' . $value['foto']) ?>" class="img-circle" width="100px" height="100px">
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
     <?php foreach ($user as $key => $value) { ?>
         <div class="modal fade" id="delete<?= $value['id_user'] ?>">
             <div class="modal-dialog">
                 <div class="modal-content box box-success box-solid">
                     <div class="modal-header box-header with-border">
                         <h4 class="modal-title">Delete user</h4>
                     </div>

                     <div class="modal-body">
                         Apakah anda yakin ingin menghapus <b><?= $value['nama_user'] ?> ?</b>
                     </div>

                     <div class="modal-footer">
                         <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                         <a href="<?= base_url('data_user/delete/' . $value['id_user']) ?>" class="btn btn-primary">Delete</a>
                     </div>
                 </div>
                 <!-- /.modal-content -->
             </div>
             <!-- /.modal-dialog -->
         </div>
     <?php } ?>