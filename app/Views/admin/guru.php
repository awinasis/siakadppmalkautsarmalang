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
                 <li class="active">Data Guru</li>
             </ol>
         <?php } elseif (session()->get('level') == "Admin") { ?>
             <ol class="breadcrumb">
                 <li><a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                 <li class="active">Data Guru</li>
             </ol>
         <?php } ?>
     </section>

     <?php if (session()->get('level') == "Admin") { ?>
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
                                         <th class="text-center">Nama Guru</th>
                                         <th class="text-center">Tempat Lahir</th>
                                         <th class="text-center">Tanggal Lahir</th>
                                         <th class="text-center">Jenis Kelamin</th>
                                         <th class="text-center">Alamat Asal Daerah</th>
                                         <th class="text-center">No.Telp</th>
                                         <th width="150px" class="text-center">Action</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php $no = 1;
                                        foreach ($guru as $key => $value) { ?>
                                         <tr>
                                             <td class="text-center"><?= $no++; ?></td>
                                             <td><?= $value['nama_guru'] ?></td>
                                             <td><?= $value['tempat_lahir'] ?></td>
                                             <td><?= $value['tanggal_lahir'] ?></td>
                                             <td class="text-center"><?= $value['jenis_kelamin'] ?></td>
                                             <td><?= $value['alamat_asal_daerah'] ?></td>
                                             <td><?= $value['noTelp'] ?></td>
                                             <td class="text-center">
                                                 <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?= $value['id_guru'] ?>"><i class="fa fa-edit"></i></button>
                                                 <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value['id_guru'] ?>"><i class="fa fa-trash"></i></button>
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
                         <h4 class="modal-title">Tambah guru</h4>
                     </div>

                     <div class="modal-body">
                         <?php
                            echo form_open('bio_guru/add');
                            ?>
                         <div class="form-group">
                             <label>Nama Guru</label>
                             <input name="nama_guru" class="form-control" placeholder="nama guru" required>
                         </div>

                         <div class="form-group row">
                             <div class="col-lg-6">
                                 <label>Tempat Lahir</label>
                                 <input name="tempat_lahir" class="form-control" placeholder="tempat lahir" required>
                             </div>

                             <div class="col-lg-6">
                                 <label>Tanggal Lahir</label>
                                 <input name="tanggal_lahir" type="date" class="form-control" placeholder="tanggal lahir" required>
                             </div>
                         </div>

                         <div class="form-group row">
                             <div class="col-lg-8">
                                 <label class="form-control-label">Jenis Kelamin</label>
                                 <div class="form-group">
                                     <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L" required> L
                                     <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P" required> P
                                 </div>
                             </div>
                         </div>

                         <div class="form-group">
                             <label>Alamat Asal Daerah</label>
                             <textarea class="form-control" id="alamat_asal_daerah" name="alamat_asal_daerah" style="height: 100px" required></textarea>
                         </div>

                         <div class="form-group row">
                             <div class="col-lg-6">
                                 <label>NoTelp</label>
                                 <input name="noTelp" type="number" class="form-control" placeholder="+62 " required>
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
         <?php foreach ($guru as $key => $value) { ?>
             <div class="modal fade" id="edit<?= $value['id_guru'] ?>">
                 <div class="modal-dialog">
                     <div class="modal-content box box-success box-solid">
                         <div class="modal-header box-header with-border">
                             <h4 class="modal-title">Edit guru</h4>
                         </div>

                         <div class="modal-body">
                             <?php
                                echo form_open('bio_guru/edit/' . $value['id_guru']);
                                ?>
                             <div class="form-group">
                                 <label>Nama Guru</label>
                                 <input name="nama_guru" class="form-control" placeholder="nama guru" value="<?= $value['nama_guru'] ?>" required>
                             </div>

                             <div class="form-group row">
                                 <div class="col-lg-6">
                                     <label>Tempat Lahir</label>
                                     <input name="tempat_lahir" class="form-control" value="<?= $value['tempat_lahir'] ?>" required>
                                 </div>

                                 <div class="col-lg-6">
                                     <label>Tanggal Lahir</label>
                                     <input name="tanggal_lahir" type="date" class="form-control" value="<?= $value['tanggal_lahir'] ?>" required>
                                 </div>
                             </div>

                             <div class="form-group row">
                                 <div class="col-lg-8">
                                     <label class="form-control-label">Jenis Kelamin</label>
                                     <div class="form-group">
                                         <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L" <?= $value['jenis_kelamin'] == "L" ? "checked" : ""; ?> required> L
                                         <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P" <?= $value['jenis_kelamin'] == "P" ? "checked" : ""; ?> required> P
                                     </div>
                                 </div>
                             </div>

                             <div class="form-group">
                                 <label>Alamat</label>
                                 <textarea id="alamat_asal_daerah" name="alamat_asal_daerah" class="form-control ckeditor" style="height: 100px" required><?= htmlentities($value['alamat_asal_daerah']); ?></textarea>
                             </div>

                             <div class="form-group row">
                                 <div class="col-lg-6">
                                     <label>NoTelp</label>
                                     <input name="noTelp" type="number" class="form-control" placeholder="noTelp" value="<?= $value['noTelp'] ?>" required>
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
         <?php foreach ($guru as $key => $value) { ?>
             <div class="modal fade" id="delete<?= $value['id_guru'] ?>">
                 <div class="modal-dialog">
                     <div class="modal-content box box-success box-solid">
                         <div class="modal-header box-header with-border">
                             <h4 class="modal-title">Delete Guru</h4>
                         </div>

                         <div class="modal-body">
                             Apakah anda yakin ingin menghapus <b><?= $value['nama_guru'] ?> ?</b>
                         </div>

                         <div class="modal-footer">
                             <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                             <a href="<?= base_url('bio_guru/delete/' . $value['id_guru']) ?>" class="btn btn-primary">Delete</a>
                         </div>
                     </div>
                     <!-- /.modal-content -->
                 </div>
                 <!-- /.modal-dialog -->
             </div>
         <?php } ?>
     <?php } ?>
 </div>