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
             <li class="active">Pengumuman</li>
         </ol>
     </section>

     <div class="row">
         <div class="col-sm-12">
             <div class="box box-success box-solid">
                 <div class="box-header with-border">
                     <h3 class="box-title"><i class="fa  fa-table"></i> Info <?= $title; ?></h3>
                     <div class="box-tools pull-right">
                         <button type="button" class="btn btn-box-tool" data-toggle="modal" data-target="#add"><i class="fa fa-plus"> Tambah</i></button>
                     </div>
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
                                     <th class="text-center">Tanggal Dibuat</th>
                                     <th class="text-center">Judul Pengumuman</th>
                                     <th class="text-center">Deskripsi Pengumuman</th>
                                     <th class="text-center">Tampil</th>
                                     <th width="150px" class="text-center">Action</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php $no = 1;
                                    foreach ($pengumuman as $key => $value) { ?>
                                     <tr>
                                         <td class="text-center"><?= $no++; ?></td>
                                         <td><?= $value['tgl_dibuat'] ?></td>
                                         <td><?= $value['judul_pengumuman'] ?></td>
                                         <td><?= $value['isi_pengumuman'] ?></td>

                                         <td align="center">
                                             <a class="btn btn-primary btn-sm" href="/pengumuman/change_visible/<?= $value['id_pengumuman']; ?>">
                                                 <?= $value['visible_pengumuman'] == "1" ? '<i class="fa fa-eye"></i>' : '<i class="fa fa-eye-slash"></i>' ?>
                                             </a>
                                         </td>

                                         <td class="text-center">
                                             <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?= $value['id_pengumuman'] ?>"><i class="fa fa-edit"></i></button>
                                             <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value['id_pengumuman'] ?>"><i class="fa fa-trash"></i></button>
                                         </td>
                                     <?php } ?>
                                     </tr>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <!-- modal add -->
     <div class="modal fade" id="add">
         <div class="modal-dialog modal-lg">
             <div class="modal-content box box-success box-solid">
                 <div class="modal-header box-header with-border">
                     <h4 class="modal-title">Tambah Pengumuman</h4>
                 </div>

                 <div class="modal-body">
                     <?php
                        echo form_open('pengumuman/add');
                        ?>

                     <div class="form-group">
                         <label>Tanggal Dibuat</label>
                         <input type="date" class="form-control" id="tgl_dibuat" name="tgl_dibuat" required>
                     </div>

                     <div class="form-group">
                         <label>Judul Pengumuman</label>
                         <input name="judul_pengumuman" class="form-control" placeholder="type the title of the announcement" required>
                     </div>

                     <!DOCTYPE html>
                     <html>

                     <head>
                         <label>Deskripsi Pengumuman</label>
                         <script type="text/javascript" src="../public/ckeditor/ckeditor.js">
                             CKEDITOR.replace('isi_pengumuman')
                         </script>
                         <link rel="stylesheet" type="text/css" href="style.css">
                     </head>

                     <body>
                         <div class="kotak">
                             <textarea class="ckeditor" name="isi_pengumuman" id="isi_pengumuman"></textarea>
                             <br>
                             <div class="modal-footer">
                                 <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                                 <button type="submit" class="btn btn-primary pull-right">Simpan</button>
                             </div>
                         </div>
                         <?php echo form_close(); ?>
                     </body>

                     </html>
                 </div>
             </div>
             <!-- /.box-body -->
         </div>
         <!-- /.box -->
     </div>

     <!-- modal edit -->
     <?php foreach ($pengumuman as $key => $value) { ?>
         <div class="modal fade" id="edit<?= $value['id_pengumuman'] ?>">
             <div class="modal-dialog modal-lg">
                 <div class="modal-content box box-success box-solid">
                     <div class="modal-header box-header with-border">
                         <h4 class="modal-title">Edit Pengumuman</h4>
                     </div>

                     <div class="modal-body">
                         <?php
                            echo form_open('pengumuman/edit/' . $value['id_pengumuman']);
                            ?>

                         <div class="form-group">
                             <label>Tanggal Dibuat</label>
                             <input type="date" class="form-control" id="tgl_dibuat" name="tgl_dibuat" value="<?= $value['tgl_dibuat'] ?>" required>
                         </div>

                         <div class="form-group">
                             <label>Judul Pengumuman</label>
                             <input name="judul_pengumuman" class="form-control" placeholder="type the title of the announcement" value="<?= $value['judul_pengumuman'] ?>" required>
                         </div>

                         <!DOCTYPE html>
                         <html>

                         <head>
                             <label>Deskripsi Pengumuman</label>
                             <script type="text/javascript" src="../public/ckeditor/ckeditor.js"></script>
                             <link rel="stylesheet" type="text/css" href="style.css">
                         </head>

                         <body>
                             <div class="kotak">
                                 <textarea class="ckeditor" name="isi_pengumuman" id="isi_pengumuman"><?= htmlentities($value['isi_pengumuman']); ?></textarea>
                                 <br>
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                                     <button type="submit" class="btn btn-primary pull-right">Simpan</button>
                                 </div>
                             </div>
                             <?php echo form_close(); ?>
                         </body>

                         </html>
                     </div>
                 </div>
                 <!-- /.box-body -->
             </div>
             <!-- /.box -->
         </div>
     <?php } ?>

     <!-- modal delete -->
     <?php foreach ($pengumuman as $key => $value) { ?>
         <div class="modal fade" id="delete<?= $value['id_pengumuman'] ?>">
             <div class="modal-dialog">
                 <div class="modal-content box box-success box-solid">
                     <div class="modal-header box-header with-border">
                         <h4 class="modal-title">Delete Pengumuman</h4>
                     </div>

                     <div class="modal-body">
                         Apakah anda yakin ingin menghapus <b><?= $value['judul_pengumuman'] ?> ?</b>
                     </div>

                     <div class="modal-footer">
                         <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                         <a href="<?= base_url('pengumuman/delete/' . $value['id_pengumuman']) ?>" class="btn btn-primary">Delete</a>
                     </div>
                 </div>
                 <!-- /.modal-content -->
             </div>
             <!-- /.modal-dialog -->
         </div>
     <?php } ?>
 </div>