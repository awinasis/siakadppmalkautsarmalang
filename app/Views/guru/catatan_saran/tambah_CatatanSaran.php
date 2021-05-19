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
             <li><a href="<?= base_url('data_nilai/catatanSaranPengurus') ?>">Catatan & Saran</a></li>
             <li class="active">Nilai Santri</li>
         </ol>
     </section>

     <div class="row">
         <div class="col-sm-12">
             <div class="box box-gray box-solid">
                 <div class="box-header with-border">
                     <h3 class="box-title"><i class="fa  fa-table"></i></h3>&emsp;
                     <a href="<?= base_url('data_nilai/catatanSaranPengurus') ?>" class="right"><i class="fa fa-mail-reply"></i> Kembali</a>
                     <div class="box-body">
                         <?php
                            echo form_open('data_nilai/addCatatanSaran');
                            ?>
                         <div class="table-responsive">
                             <table id="example2" class="table table-bordered table-striped with-check">
                                 <thead>
                                     <tr>
                                         <th rowspan='2' class="text-center">NIS</th>
                                         <th rowspan='2' class="text-center">Nama</th>
                                         <th rowspan='2' class="text-center">L/P</th>
                                         <th class="text-center" colspan="8">Catatan & Saran Pengurus</th>
                                     </tr>
                                     <tr>
                                         <th class="text-center">Deskripsi</th>
                                     </tr>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <tr>
                                         <td class="text-center"><input name="NIS" class="form-control" type="number" required></td>
                                         <td class="text-center"><input name="nama_santri" class="form-control" required></td>
                                         <td class="text-center">
                                             <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                                                 <option value="#">-- Pilih --</option>
                                                 <option value="L">L</option>
                                                 <option value="P">P</option>
                                             </select>
                                         </td>
                                         <td><textarea name="catatan_saran" type="text" class="form-control" required></textarea></td>
                                     </tr>
                                 </tbody>
                             </table>
                         </div>
                         <div class="modal-footer">
                             <button type="submit" class="btn btn-primary">Simpan</button>
                         </div>
                         <?php echo form_close() ?>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>