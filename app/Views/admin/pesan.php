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
             <li class="active">Pesan</li>
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
                                     <th class="text-center">NIS</th>
                                     <th class="text-center">Nama Santri</th>
                                     <th class="text-center">Pesan</th>
                                     <th class="tex-center">Date Created</th>
                                     <th class="tex-center">Date Updated</th>
                                     <th width="150px" class="text-center">Action</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php $no = 1;
                                    foreach ($pesan as $key => $value) { ?>
                                     <tr>
                                         <td class="text-center"><?= $no++; ?></td>
                                         <td><?= $value['NIS'] ?></td>
                                         <td><?= $value['nama_santri'] ?></td>
                                         <td><?= $value['pesan'] ?></td>
                                         <td class="text-center"><?= $value['date_created'] ?></td>
                                         <td class="text-center"><?= $value['date_updated'] ?></td>
                                         <td class="text-center">
                                             <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?= $value['id_pesan'] ?>"><i class="fa fa-edit"></i></button>
                                             <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value['id_pesan'] ?>"><i class="fa fa-trash"></i></button>
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
         <div class="modal-dialog">
             <div class="modal-content box box-success box-solid">
                 <div class="modal-header box-header with-border">
                     <h4 class="modal-title">Tambah Pesan</h4>
                 </div>

                 <div class="modal-body">
                     <?php
                        echo form_open('data_pesan/add');
                        ?>
                     <div class="form-group row">
                         <div class="col-sm-6">
                             <label>NIS</label>
                             <input type="number" class="form-control" id="NIS" name="NIS" required>
                         </div>
                     </div>

                     <div class="form-group">
                         <label>Pesan</label>
                         <textarea class="form-control" id="pesan" name="pesan" style="height: 100px" required></textarea>
                     </div>

                     <div class="modal-footer">
                         <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                         <button type="submit" class="btn btn-primary">Simpan</button>
                     </div>
                     <?php echo form_close(); ?>
                 </div>
             </div>
             <!-- /.box-body -->
         </div>
         <!-- /.box -->
     </div>

     <!-- modal edit -->
     <?php foreach ($pesan as $key => $value) { ?>
         <div class="modal fade" id="edit<?= $value['id_pesan'] ?>">
             <div class="modal-dialog">
                 <div class="modal-content box box-success box-solid">
                     <div class="modal-header box-header with-border">
                         <h4 class="modal-title">Edit Pesan</h4>
                     </div>

                     <div class="modal-body">
                         <?php
                            echo form_open('data_pesan/edit/' . $value['id_pesan']);
                            ?>

                         <div class="form-group row">
                             <div class="col-sm-6">
                                 <label>NIS</label>
                                 <input type="number" class="form-control" id="NIS" name="NIS" value="<?= $value['NIS'] ?>" readonly>
                             </div>
                         </div>

                         <div class="form-group">
                             <label>Nama Santri</label>
                             <input class="form-control" id="nama_santri" name="nama_santri" value="<?= $value['nama_santri'] ?>" readonly>
                         </div>

                         <div class="form-group">
                             <label>Pesan</label>
                             <textarea class="form-control" id="pesan" name="pesan" style="height: 100px"><?= htmlentities($value['pesan']); ?></textarea>
                         </div>

                         <div class="modal-footer">
                             <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                             <button type="submit" class="btn btn-primary">Simpan</button>
                         </div>
                     </div>
                     <?php echo form_close(); ?>
                 </div>
                 <!-- /.modal-content -->
             </div>
             <!-- /.modal-dialog -->
         </div>
     <?php } ?>

     <!-- modal delete -->
     <?php foreach ($pesan as $key => $value) { ?>
         <div class="modal fade" id="delete<?= $value['id_pesan'] ?>">
             <div class="modal-dialog">
                 <div class="modal-content box box-success box-solid">
                     <div class="modal-header box-header with-border">
                         <h4 class="modal-title">Delete Pesan</h4>
                     </div>

                     <div class="modal-body">
                         Apakah anda yakin ingin menghapus <b>Pesan ini ?</b>
                     </div>

                     <div class="modal-footer">
                         <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                         <a href="<?= base_url('data_pesan/delete/' . $value['id_pesan']) ?>" class="btn btn-primary">Delete</a>
                     </div>
                 </div>
                 <!-- /.modal-content -->
             </div>
             <!-- /.modal-dialog -->
         </div>
     <?php } ?>
 </div>