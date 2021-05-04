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
             <li class="active">Data Pembayaran</li>
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
                                     <th class="text-center">Periode Pembayaran</th>
                                     <th class="text-center">Keterangan</th>
                                     <th class="text-center">Tagihan</th>
                                     <th class="text-center">Terbayar</th>
                                     <th class="text-center">Status</th>
                                     <th width="150px" class="text-center">Action</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php $no = 1;
                                    foreach ($pembayaran as $key => $value) { ?>
                                     <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                         <td><?= $value['NIS'] ?></td>
                                         <td><?= $value['nama_santri'] ?></td>
                                         <td class="text-center"><?= $value['periode_pembayaran'] ?></td>
                                         <td><?= $value['keterangan'] ?></td>
                                         <td class="text-center"><?= $value['tagihan'] ?></td>
                                         <td class="text-center"><?= $value['terbayar'] ?></td>
                                         <td><?= $value['status'] ?></td>

                                         <td class="text-center">
                                             <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?= $value['id_pembayaran'] ?>"><i class="fa fa-edit"></i></button>
                                             <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value['id_pembayaran'] ?>"><i class="fa fa-trash"></i></button>
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
                     <h4 class="modal-title">Tambah Pembayaran</h4>
                 </div>

                 <div class="modal-body">
                     <?php
                        echo form_open('data_pembayaran/add');
                        ?>
                     <div class="form-group row">
                         <div class="col-lg-6">
                             <label>NIS</label>
                             <input name="NIS" type="number" class="form-control" placeholder="NIS" required>
                         </div>
                     </div>

                     <div class="form-group">
                         <label>Nama santri</label>
                         <input name="nama_santri" class="form-control" placeholder="nama santri" required>
                     </div>

                     <div class="form-group row">
                         <div class="col-lg-4">
                             <label>Periode Pembayaran</label>
                             <input type="number" class="form-control" placeholder="periode pembayaran" name="periode_pembayaran" value="<?php echo date('Y'); ?>" />
                         </div>
                     </div>

                     <div class="form-group row">
                         <div class="col-lg-6">
                             <label>Keterangan</label>
                             <input name="keterangan" class="form-control" placeholder="keterangan" required>
                         </div>
                     </div>

                     <div class="form-group row">
                         <div class="col-lg-6">
                             <label>Tagihan</label>
                             <input name="tagihan" class="form-control" placeholder="tagihan" required>
                         </div>
                         <div class="col-lg-6">
                             <label>Terbayar</label>
                             <input name="terbayar" class="form-control" placeholder="terbayar" required>
                         </div>
                     </div>

                     <div class="form-group row">
                         <div class="col-lg-8">
                             <label class="form-control-label">Status</label>
                             <select name="status" class="form-control" id="status" required>
                                 <option value="">- Pilih -</option>
                                 <option value="Lunas">LUNAS</option>
                                 <option value="Belum Lunas">BELUM LUNAS</option>
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
     <?php foreach ($pembayaran as $key => $value) { ?>
         <div class="modal fade" id="edit<?= $value['id_pembayaran'] ?>">
             <div class="modal-dialog">
                 <div class="modal-content box box-success box-solid">
                     <div class="modal-header box-header with-border">
                         <h4 class="modal-title">Edit pembayaran</h4>
                     </div>

                     <div class="modal-body">
                         <?php
                            echo form_open('data_pembayaran/edit/' . $value['id_pembayaran']);
                            ?>
                         <div class="form-group row">
                             <div class="col-lg-6">
                                 <label>NIS</label>
                                 <input name="NIS" type="number" class="form-control" placeholder="NIS" value="<?= $value['NIS'] ?>" required>
                             </div>
                         </div>

                         <div class="form-group">
                             <label>Nama santri</label>
                             <input name="nama_santri" class="form-control" placeholder="nama santri" value="<?= $value['nama_santri'] ?>" required>
                         </div>

                         <div class="form-group row">
                             <div class="col-lg-4">
                                 <label>Periode Pembayaran</label>
                                 <input type="number" class="form-control" placeholder="periode pembayaran" name="periode_pembayaran" value="<?= $value['periode_pembayaran'] ?>" />
                             </div>
                         </div>

                         <div class="form-group row">
                             <div class="col-lg-6">
                                 <label>Keterangan</label>
                                 <input name="keterangan" class="form-control" placeholder="keterangan" value="<?= $value['keterangan'] ?>" required>
                             </div>
                         </div>

                         <div class="form-group row">
                             <div class="col-lg-6">
                                 <label>Tagihan</label>
                                 <input name="tagihan" class="form-control" placeholder="tagihan" value="<?= $value['tagihan'] ?>" required>
                             </div>
                             <div class="col-lg-6">
                                 <label>Terbayar</label>
                                 <input name="terbayar" class="form-control" placeholder="terbayar" value="<?= $value['terbayar'] ?>" required>
                             </div>
                         </div>

                         <div class="form-group row">
                             <div class="col-lg-8">
                                 <label class="form-control-label">Status</label>
                                 <select name="status" class="form-control" id="status" required>
                                     <option value="">- Pilih -</option>
                                     <option value="Lunas" <?= $value['status'] == "LUNAS" ? "selected" : ""; ?>>LUNAS</option>
                                     <option value="Belum Lunas" <?= $value['status'] == "BELUM LUNAS" ? "selected" : ""; ?>>BELUM LUNAS</option>
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
     <?php foreach ($pembayaran as $key => $value) { ?>
         <div class="modal fade" id="delete<?= $value['id_pembayaran'] ?>">
             <div class="modal-dialog">
                 <div class="modal-content box box-success box-solid">
                     <div class="modal-header box-header with-border">
                         <h4 class="modal-title">Delete Pembayaran</h4>
                     </div>

                     <div class="modal-body">
                         Apakah anda yakin ingin menghapus <b><?= $value['keterangan'] ?> ?</b>
                     </div>

                     <div class="modal-footer">
                         <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                         <a href="<?= base_url('data_pembayaran/delete/' . $value['id_pembayaran']) ?>" class="btn btn-primary">Delete</a>
                     </div>
                 </div>
                 <!-- /.modal-content -->
             </div>
             <!-- /.modal-dialog -->
         </div>
     <?php } ?>