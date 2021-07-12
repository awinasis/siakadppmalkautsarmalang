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
             <li><a href="<?= base_url('data_nilai/tampil_nilaiMateriHB') ?>">Nilai Materi HB</a></li>
             <li class="active">Nilai Santri</li>
         </ol>
     </section>

     <div class="row">
         <div class="col-sm-12">
             <div class="box box-gray box-solid">
                 <div class="box-header with-border">
                     <h3 class="box-title"><i class="fa  fa-table"></i></h3>&emsp;
                     <a href="<?= base_url('data_nilai/tampil_nilaiMateriHB') ?>" class="left"><i class="fa fa-mail-reply"></i> Kembali</a>
                     <div class="box-body">
                         <?php
                            echo form_open('data_nilai/addNilaiMateriHB');
                            ?>
                         <div class="table-responsive">
                             <table id="example2" class="table table-bordered table-striped">
                                 <thead>
                                     <tr>
                                         <th rowspan="2" class="text-center">NIS</th>
                                         <th class="text-center" colspan=" 17">Pencapaian Materi</th>
                                     </tr>
                                     <tr>
                                         <th class="text-center">Hafalan Juz 1-5</th>
                                         <th class="text-center">Hafalan Juz 6-10</th>
                                         <th class="text-center">Hafalan Juz 11-15</th>
                                         <th class="text-center">Hafalan Juz 16-20</th>
                                         <th class="text-center">Hafalan Juz 21-25</th>
                                         <th class="text-center">Hafalan Juz 26-30</th>
                                         <th class="text-center">Shahih Bukhari Juz 1</th>
                                         <th class="text-center">Shahih Bukhari Juz 2</th>
                                         <th class="text-center">Shahih Bukhari Juz 3</th>
                                         <th class="text-center">Shahih Bukhari Juz 4</th>
                                         <th class="text-center">Shahih Bukhari Juz 5</th>
                                         <th class="text-center">Shahih Bukhari Juz 6</th>
                                         <th class="text-center">Shahih Bukhari Juz 7</th>
                                         <th class="text-center">Shahih Bukhari Juz 8</th>
                                         <th class="text-center">Musthalah Hadits</th>
                                         <th class="text-center">Syarah al-Asma' al-Husna</th>
                                         <th class="text-center">Syarah Do'a ASAD</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <tr>
                                         <td class="text-center"><input name="NIS" class="form-control" type="number" required></td>
                                         <td><input name="n_A" class="form-control" type="number">%</td>
                                         <td><input name="n_B" class="form-control" type="number">%</td>
                                         <td><input name="n_C" class="form-control" type="number">%</td>
                                         <td><input name="n_D" class="form-control" type="number">%</td>
                                         <td><input name="n_E" class="form-control" type="number">%</td>
                                         <td><input name="n_F" class="form-control" type="number">%</td>
                                         <td><input name="n_G" class="form-control" type="number">%</td>
                                         <td><input name="n_H" class="form-control" type="number">%</td>
                                         <td><input name="n_I" class="form-control" type="number">%</td>
                                         <td><input name="n_J" class="form-control" type="number">%</td>
                                         <td><input name="n_K" class="form-control" type="number">%</td>
                                         <td><input name="n_L" class="form-control" type="number">%</td>
                                         <td><input name="n_M" class="form-control" type="number">%</td>
                                         <td><input name="n_N" class="form-control" type="number">%</td>
                                         <td><input name="n_O" class="form-control" type="number">%</td>
                                         <td><input name="n_P" class="form-control" type="number">%</td>
                                         <td><input name="n_Q" class="form-control" type="number">%</td>
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