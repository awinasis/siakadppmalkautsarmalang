 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <h1 style="color:MediumSeaGreen; font-family:timesnewrohman;">
             <?= $title; ?>
         </h1>
         <br><br>
         <?php if (session()->get('level') == "Guru") { ?>
             <ol class="breadcrumb">
                 <li><a href="<?= base_url('guru') ?>"><i class="fa fa-home"></i> Home</a></li>
                 <li class="active">Data Kelas</li>
             </ol>
         <?php } elseif (session()->get('level') == "Admin") { ?>
             <ol class="breadcrumb">
                 <li><a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                 <li class="active">Data Kelas</li>
             </ol>
         <?php } ?>
     </section>

     <div class="row">
         <div class="col-sm-12">
             <div class="box box-success box-solid">
                 <?php if (session()->get('level') == "Guru") { ?>
                     <div class="box-header with-border">
                         <h3 class="box-title"><i class="fa  fa-table"></i> Data <?= $title; ?></h3>
                         <!-- /.box-tools -->
                         <?php if (session()->get('level') == "Guru") { ?>
                             <div class="box-tools pull-right">
                                 <button type="button" class="btn btn-box-tool" data-toggle="modal" data-target="#add"><i class="fa fa-plus"> Tambah</i></button>
                             </div>
                         <?php } ?>
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
                                         <th class="text-center">Kelas</th>
                                         <?php if (session()->get('level') == "Guru") { ?>
                                             <th width="150px" class="text-center">Action</th>
                                         <?php } ?>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php $no = 1;
                                        foreach ($kelas as $key => $value) { ?>
                                         <tr>
                                             <td class="text-center"><?= $no++; ?></td>
                                             <td><?= $value['kelas'] ?></td>
                                             <?php if (session()->get('level') == "Guru") { ?>
                                                 <td class="text-center">
                                                     <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?= $value['id_kelas'] ?>"><i class="fa fa-edit"></i></button>
                                                     <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value['id_kelas'] ?>"><i class="fa fa-trash"></i></button>
                                                 </td>
                                             <?php } ?>
                                         </tr>
                                     <?php } ?>
                                 </tbody>
                             </table>
                         </div>
                     </div>
                     <!-- /.box-body -->
                 <?php } elseif (session()->get('level') == "Admin") { ?>
                     <div class="with-border">
                         <!-- /.box-tools -->
                         <?php if (session()->get('level') == "Guru") { ?>
                             <div class="box-tools pull-right">
                                 <button type="button" class="btn btn-box-tool" data-toggle="modal" data-target="#add"><i class="fa fa-plus"> Tambah</i></button>
                             </div>
                         <?php } ?>
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
                             <table class="table table-striped">
                                 <thead>
                                     <tr>
                                         <th width="50px" class="text-center">No</th>
                                         <th class="text-center">Kelas</th>
                                         <?php if (session()->get('level') == "Guru") { ?>
                                             <th width="150px" class="text-center">Action</th>
                                         <?php } ?>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php $no = 1;
                                        foreach ($kelas as $key => $value) { ?>
                                         <tr>
                                             <td class="text-center"><?= $no++; ?></td>
                                             <td><?= $value['kelas'] ?></td>
                                             <?php if (session()->get('level') == "Guru") { ?>
                                                 <td class="text-center">
                                                     <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?= $value['id_kelas'] ?>"><i class="fa fa-edit"></i></button>
                                                     <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value['id_kelas'] ?>"><i class="fa fa-trash"></i></button>
                                                 </td>
                                             <?php } ?>
                                         </tr>
                                     <?php } ?>
                                 </tbody>
                             </table>
                         </div>
                     </div>
                     <!-- /.box-body -->
                 <?php } ?>
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
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span></button>
                         <h4 class="modal-title">Tambah Kelas</h4>
                     </div>

                     <div class="modal-body">
                         <?php
                            echo form_open('data_kelas/add');
                            ?>

                         <div class="form-group">
                             <label>Kelas</label>
                             <input name="kelas" class="form-control" placeholder="Kelas" required>
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
         <?php foreach ($kelas as $key => $value) { ?>
             <div class="modal fade" id="edit<?= $value['id_kelas'] ?>">
                 <div class="modal-dialog">
                     <div class="modal-content box box-success box-solid">
                         <div class="modal-header box-header with-border">
                             <h4 class="modal-title">Edit Kelas</h4>
                         </div>

                         <div class="modal-body">
                             <?php
                                echo form_open('kelas/edit/' . $value['id_kelas']);
                                ?>

                             <div class="form-group">
                                 <label>Kelas</label>
                                 <input name="kelas" value="<?= $value['kelas'] ?>" class="form-control">
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
         <?php foreach ($kelas as $key => $value) { ?>
             <div class="modal fade" id="delete<?= $value['id_kelas'] ?>">
                 <div class="modal-dialog">
                     <div class="modal-content">
                         <div class="modal-header">
                             <h4 class="modal-title">Delete Kelas</h4>
                         </div>

                         <div class="modal-body">
                             Apakah anda yakin ingin menghapus <b><?= $value['kelas'] ?> ?</b>
                         </div>

                         <div class="modal-footer">
                             <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                             <a href="<?= base_url('data_kelas/delete/' . $value['id_kelas']) ?>" class="btn btn-primary">Delete</a>
                         </div>
                     </div>
                     <!-- /.modal-content -->
                 </div>
                 <!-- /.modal-dialog -->
             </div>
         <?php } ?>
     <?php } elseif (session()->get('level') == "Admin") { ?>
     <?php } ?>