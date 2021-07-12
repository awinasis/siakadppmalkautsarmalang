 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <h1 style="color:MediumSeaGreen; font-family:timesnewrohman;">
             <?= $title; ?>
         </h1>
         <br><br>
         <ol class="breadcrumb">
             <li><a href="<?= base_url('guru') ?>"><i class="fa fa-home"></i> Home</a></li>
             <li class="active">Data Absensi</li>
         </ol>
     </section>

     <div class="row">
         <div class="col-sm-12">
             <div class="box box-success box-solid">
                 <div class="box-header with-border">
                     <h3 class="box-title"><i class="fa  fa-table"></i> <?= $title; ?></h3>

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
                                     <th class="text-center">Tanggal</th>
                                     <th class="text-center">Sesi Pengajian</th>
                                     <th class="text-center">Data</th>
                                     <th width="150px" class="text-center">Action</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php $no = 1;
                                    foreach ($detailabsen as $key => $value) { ?>
                                     <tr>
                                         <td class="text-center"><?= $no++; ?></td>
                                         <td class="text-center"><?= $value['tanggal'] ?></td>
                                         <td class="text-center"><?= $value['sesi_pengajian'] ?></td>

                                         <td class="text-center">
                                             <a href="<?= base_url('data_absensi/') ?> " class="btn btn-success btn-sm">
                                                 <i class="fa fa-calendar"></i> Absensi</a><br>
                                         </td>

                                         <td class="text-center">
                                             <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value['id_detailabsensi'] ?>"><i class="fa fa-trash"></i></button>
                                         </td>
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
                     <h4 class="modal-title">Tambah</h4>
                 </div>

                 <div class="modal-body">
                     <?php
                        echo form_open('data_absensi/add');
                        ?>
                     <div class="form-group row">
                         <div class="col-lg-6">
                             <label>Tanggal</label>
                             <input name="tanggal" type="date" class="form-control" placeholder="date" required>
                         </div>
                     </div>

                     <div class="form-group">
                         <label class="form-control-label">Sesi Pengajian</label>
                         <div class="form-group">
                             <input type="radio" name="sesi_pengajian" value="Malam" required> Malam
                             <input type="radio" name="sesi_pengajian" value="Shubuh" required> Shubuh
                         </div>
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
     <?php foreach ($detailabsen as $key => $value) { ?>
         <div class="modal fade" id="delete<?= $value['id_detailabsensi'] ?>">
             <div class="modal-dialog">
                 <div class="modal-content box box-success box-solid">
                     <div class="modal-header box-header with-border">
                         <h4 class="modal-title">Delete</h4>
                     </div>

                     <div class="modal-body">
                         Apakah anda yakin ingin menghapus <b><?= $value['tanggal'] ?> ?</b>
                     </div>

                     <div class="modal-footer">
                         <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                         <a href="<?= base_url('data_absensi/delete/' . $value['id_detailabsensi']) ?>" class="btn btn-primary">Delete</a>
                     </div>
                 </div>
                 <!-- /.modal-content -->
             </div>
             <!-- /.modal-dialog -->
         </div>
     <?php } ?>