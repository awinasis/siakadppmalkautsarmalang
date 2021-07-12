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
                     <a href="<?= base_url('data_nilai/catatanSaranPengurus') ?>" class="left"><i class="fa fa-mail-reply"></i> Kembali</a>
                     <div class="box-body">
                         <div class="table-responsive">
                             <table id="example2" class="table table-bordered table-striped">
                                 <thead>
                                     <tr>
                                         <th rowspan='2' class="text-center">No.</th>
                                         <th rowspan='2' class="text-center">NIS</th>
                                         <th rowspan='2' class="text-center">Nama</th>
                                         <th rowspan='2' class="text-center">L/P</th>
                                         <th class="text-center">Catatan & Saran Pengurus</th>
                                         <th rowspan="2" class="text-center">Keputusan</th>
                                         <th rowspan="2" class="text-center">Action</th>
                                     </tr>
                                     <tr>
                                         <th class="text-center">Deskripsi</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php $no = 1;
                                        foreach ($nilai as $key => $value) { ?>
                                         <tr>
                                             <?php echo form_open('data_nilai/editCatatanSaran/' . $value['id_cs']); ?>
                                             <td class="text-center"><?= $no++; ?></td>
                                             <td><input name="NIS" class="form-control text-center" type="number" value="<?= $value['NIS'] ?>" readonly></td>
                                             <td><input name="nama_santri" class="form-control" value="<?= $value['nama_santri'] ?>" readonly></td>
                                             <td class="text-center"><?= $value['jenis_kelamin'] ?></td>
                                             <td class="text-center"><textarea id="catatan_saran" name="catatan_saran" class="form-control ckeditor"><?= htmlentities($value['catatan_saran']); ?></textarea></td>
                                             <td class="text-center">
                                                 <select name="keputusan" id="keputusan" class="form-control" value="<?= $value['keputusan'] ?>">
                                                     <option value="Sangat Baik" <?= $value['keputusan'] == "Sangat Baik" ? "selected" : ""; ?>>Sangat Baik</option>
                                                     <option value="Baik" <?= $value['keputusan'] == "Baik" ? "selected" : ""; ?>>Baik</option>
                                                     <option value="Cukup" <?= $value['keputusan'] == "Cukup" ? "selected" : ""; ?>>Cukup</option>
                                                 </select>
                                             </td>

                                             <td class="text-center">
                                                 <button type="submit" class="btn btn-primary">Simpan</button>
                                             </td>
                                             <?php echo form_close() ?>
                                         </tr>
                                     <?php } ?>
                                 </tbody>
                             </table>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>