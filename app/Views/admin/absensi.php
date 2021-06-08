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
                 <li class="active">Data Absensi</li>
             </ol>
         <?php } elseif (session()->get('level') == "Admin") { ?>
             <ol class="breadcrumb">
                 <li><a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                 <li class="active">Data Absensi</li>
             </ol>
         <?php } ?>
     </section>

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
                 </div>
                 <div class="box-body">
                     <?php
                        if (session()->getFlashdata('pesan')) {
                            echo '<div class="alert alert-success" role="alert">';
                            echo session()->getFlashdata('pesan');
                            echo '</div>';
                        }
                        ?>

                     <a href="<?= base_url('data_absensi/draft_kehadiran/') ?>" class="btn btn-warning btn-sm">
                         <i class="fa fa-list-ul"></i>&ensp;Draft Kehadiran</a><br><br>

                     <div class="table-responsive">
                         <table id="example1" class="table table-bordered table-striped">
                             <thead class="box box-success">
                                 <tr>

                                     <th class="text-center">NIS</th>
                                     <th class="text-center">Nama Santri</th>
                                     <th class="text-center">Prosentase</th>
                                     <?php if (session()->get('level') == "Admin") { ?>
                                         <th class="text-center">Action</th>
                                     <?php } ?>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php foreach ($absensi as $key => $value) { ?>
                                     <tr>
                                         <td class="text-center"><?= $value['NIS'] ?></td>
                                         <td><?= $value['nama_santri'] ?></td>
                                         <td class="text-center">
                                             <a href="<?= base_url('data_absensi/viewchart/' . $value['NIS']) ?>">
                                                 <i class="fa fa-pie-chart fa-4x"></i><br> Detail</a><br>
                                         </td>

                                         <?php if (session()->get('level') == "Admin") { ?>
                                             <td class="text-center">
                                                 <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value['NIS'] ?>"><i class="fa fa-trash"></i></button>
                                             </td>
                                         <?php } ?>
                                     </tr>
                                 <?php } ?>
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
                     <h4 class="modal-title">Tambah Absensi</h4>
                 </div>

                 <div class="modal-body">
                     <?php
                        echo form_open_multipart('data_absensi/add_absensi');
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
                 </div>

                 <div class="modal-footer">
                     <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-primary">Simpan</button>
                 </div>
                 <?php echo form_close(); ?>
             </div>
         </div>
     </div>

     <!-- modal delete -->
     <?php foreach ($absensi as $key => $value) { ?>
         <div class="modal fade" id="delete<?= $value['NIS'] ?>">
             <div class="modal-dialog">
                 <div class="modal-content box box-success box-solid">
                     <div class="modal-header box-header with-border">
                         <h4 class="modal-title">Delete Absensi</h4>
                     </div>

                     <div class="modal-body">
                         Apakah anda yakin ingin menghapus <b> Data&nbsp;<?= $title; ?>&nbsp;<?= $value['nama_santri'] ?> ?</b>
                     </div>

                     <div class="modal-footer">
                         <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                         <a href="<?= base_url('data_absensi/delete/' . $value['NIS']) ?>" class="btn btn-primary">Delete</a>
                     </div>
                 </div>
             </div>
         </div>
     <?php } ?>
 </div>