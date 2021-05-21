 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <h1 style="color:MediumSeaGreen; font-family:timesnewrohman;">
             <?= $title; ?>
         </h1>
         <br><br>
         <ol class="breadcrumb">
             <li><a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
             <li class="active">Data Surat</li>
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
                                     <th class="text-center">Nama Surat</th>
                                     <th class="text-center">Kategori</th>
                                     <th class="tex-center">Tanggal Upload</th>
                                     <th class="tex-center">Tanggal Update</th>
                                     <th class="text-center">File</th>
                                     <th width="150px" class="text-center">Action</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php $no = 1;
                                    foreach ($surat as $key => $value) { ?>
                                     <tr>
                                         <td class="text-center"><?= $no++; ?></td>
                                         <td><?= $value['nama_surat'] ?></td>
                                         <td><?= $value['kategori'] ?></td>
                                         <td class="text-center"><?= $value['tgl_upload'] ?></td>
                                         <td class="text-center"><?= $value['tgl_update'] ?></td>
                                         <td class="text-center">
                                             <a href="<?= base_url('file_surat/viewpdf/' . $value['id_surat']) ?>">
                                                 <i class="fa fa-file-pdf-o fa-4x label-danger"></i></a><br>
                                             <?= number_format($value['ukuran_file']); ?> Byte
                                         </td>

                                         <td class="text-center">
                                             <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?= $value['id_surat'] ?>"><i class="fa fa-edit"></i></button>
                                             <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value['id_surat'] ?>"><i class="fa fa-trash"></i></button>
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
                     <h4 class="modal-title">Tambah Surat</h4>
                 </div>

                 <div class="modal-body">
                     <?php
                        echo form_open_multipart('file_surat/add');
                        ?>

                     <div class="form-group">
                         <label>Nama Surat</label>
                         <input name="nama_surat" id="nama_surat" class="form-control" placeholder="nama surat" required>
                     </div>

                     <div class="form-group row">
                         <div class="col-lg-8">
                             <label>Kategori :</label>
                             <select name="kategori" id="kategori" class="form-control" placeholder="kategori" required>
                                 <option value="">-- Pilih --</option>
                                 <option value="Sertifikat">Sertifikat</option>
                                 <option value="Surat Pengajuan">Surat Pengajuan</option>
                                 <option value="Kartu Pembayaran">Kartu Pembayaran</option>
                                 <option value="Buku Pedoman">Buku Pedoman</option>
                             </select>
                         </div>
                     </div>

                     <div class="form-group">
                         <label>File</label>
                         <input name="file" id="file" type="file" class="form-control" placeholder="file" required>
                         <label class="text-danger"><i class="fa fa-file-pdf-o fa label-danger"></i> File harus format .PDF</label>
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
     <?php foreach ($surat as $key => $value) { ?>
         <div class="modal fade" id="edit<?= $value['id_surat'] ?>">
             <div class="modal-dialog">
                 <div class="modal-content box box-success box-solid">
                     <div class="modal-header box-header with-border">
                         <h4 class="modal-title">Edit Surat</h4>
                     </div>

                     <div class="modal-body">
                         <?php
                            echo form_open_multipart('file_surat/edit/' . $value['id_surat']);
                            ?>

                         <div class="form-group">
                             <label>Nama Surat</label>
                             <input name="nama_surat" value="<?= $value['nama_surat'] ?>" class="form-control">
                         </div>

                         <div class="form-group row">
                             <div class="col-lg-8">
                                 <label>Kategori :</label>
                                 <select name="kategori" id="kategori" class="form-control">
                                     <option value="Sertifikat" <?= $value['kategori'] == "Sertifikat" ? "selected" : ""; ?>>Sertifikat</option>
                                     <option value="Surat Pengajuan" <?= $value['kategori'] == "Surat Pengajuan" ? "selected" : ""; ?>>Surat Pengajuan</option>
                                     <option value="Kartu Pembayaran" <?= $value['kategori'] == "Kartu Pembayaran" ? "selected" : ""; ?>>Kartu Pembayaran</option>
                                     <option value="Buku Pedoman" <?= $value['kategori'] == "Buku Pedoman" ? "selected" : ""; ?>>Buku Pedoman</option>
                                 </select>
                             </div>
                         </div>

                         <div class="form-group">
                             <label>Ganti File</label>
                             <input name="file" type="file" class="form-control"><br><i class="fa fa-file-pdf-o fa-4x label-danger"></i>
                             <?= $value['nama_surat']; ?>
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
     <?php foreach ($surat as $key => $value) { ?>
         <div class="modal fade" id="delete<?= $value['id_surat'] ?>">
             <div class="modal-dialog">
                 <div class="modal-content box box-success box-solid">
                     <div class="modal-header box-header with-border">
                         <h4 class="modal-title">Delete Surat</h4>
                     </div>

                     <div class="modal-body">
                         Apakah anda yakin ingin menghapus <b> Data&nbsp;<?= $value['nama_surat'] ?> ?</b>
                     </div>

                     <div class="modal-footer">
                         <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                         <a href="<?= base_url('file_surat/delete/' . $value['id_surat']) ?>" class="btn btn-primary">Delete</a>
                     </div>
                 </div>
                 <!-- /.modal-content -->
             </div>
             <!-- /.modal-dialog -->
         </div>
     <?php } ?>