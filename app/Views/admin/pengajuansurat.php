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
                 <li class="active">Pengajuan Surat Santri</li>
             </ol>
     </section>

     <div class="row">
         <div class="col-sm-12">
             <div class="box box-success box-solid">
                 <div class="box-header with-border">
                     <h3 class="box-title"><i class="fa  fa-table"></i> Data <?= $title; ?></h3>

                     <div class="box-tools pull-right">
                         <!-- <button type="button" class="btn btn-box-tool" data-toggle="modal" data-target="#add"><i class="fa fa-plus"> Tambah</i></button> -->
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
                                     <th class="text-center">Nama</th>
                                     <th class="text-center">Tahun Ajaran</th>
                                     <th class="text-center">Jenis Surat</th>
                                     <th class="text-center">Status</th>
                                     <th width="150px" class="text-center">Action</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php $no = 1;
                                    foreach ($pengajuan as $key => $value) { ?>
                                     <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td class="text-center"><?= $value['NIS']; ?></td>
                                        <td><?= $value['nama_santri']; ?></td>
                                        <td class="text-center"><?= $value['tahun_ajaran'] ?></td>
                                        <td class="text-center"><?= $value['jenis_surat'] ?></td>
                                        <td class="text-center"><?= $value['status'] ?></td>
                                         <td class="text-center">
                                             <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?= $value['id_pengajuansurat'] ?>"><i class="fa fa-edit"></i></button>
                                             <!-- <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value['id_pengajuansurat'] ?>"><i class="fa fa-trash"></i></button> -->
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

    <!-- modal edit -->
    <?php foreach ($pengajuan as $key => $value) { ?>
             <div class="modal fade" id="edit<?= $value['id_pengajuansurat'] ?>">
                 <div class="modal-dialog">
                     <div class="modal-content box box-success box-solid">
                         <div class="modal-header box-header with-border">
                             <h4 class="modal-title">Edit Pengajuan Surat</h4>
                         </div>

                         <div class="modal-body">
                             <?php
                                echo form_open('data_surat/edit_pengajuansurat/' . $value['id_pengajuansurat']);
                                ?>
                             <div class="form-group row">
                                 <div class="col-lg-6">
                                     <label>NIS</label>
                                     <input name="NIS" type="number" class="form-control" value="<?= $value['NIS'] ?>">
                                 </div>
                             </div>

                             <div class="form-group">
                                 <label>Nama santri</label>
                                 <input name="nama_santri" class="form-control" value="<?= $value['nama_santri'] ?>">
                             </div>

                             <div class="form-group row">
                                 <div class="col-lg-4">
                                     <label>Tahun Ajaran</label>
                                     <input type="tahun_ajaran" class="form-control" name="tahun_ajaran" value="<?= $value['tahun_ajaran'] ?>" />
                                 </div>
                             </div>

                             <div class="form-group row">
                                 <div class="col-lg-6">
                                     <label>Jenis Surat</label>
                                     <input name="jenis_surat" class="form-control" value="<?= $value['jenis_surat'] ?>">
                                 </div>
                             </div>

                             <div class="form-group row">
                                 <div class="col-lg-6">
                                     <label>Status</label>
                                     <input name="status" class="form-control" value="<?= $value['status'] ?>">
                                 </div>

                         <div class="modal-footer">
                             <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                             <button type="submit" class="btn btn-primary">Simpan</button>
                         </>
                         <?php echo form_close(); ?>
                     </div>
                     <!-- /.modal-content -->
                 </div>
                 <!-- /.modal-dialog -->
             </div>
         <?php } ?>