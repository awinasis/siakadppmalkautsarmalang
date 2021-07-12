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
             <li><a href="<?= base_url('data_nilai/konsepPraktikum_HB') ?>">Nilai Konsep & Praktikum HB</a></li>
             <li class="active">Nilai Santri</li>
         </ol>
     </section>

     <div class="row">
         <div class="col-sm-12">
             <div class="box box-gray box-solid">
                 <div class="box-header with-border">
                     <h3 class="box-title"><i class="fa  fa-table"></i></h3>&emsp;
                     <a href="<?= base_url('data_nilai/konsepPraktikum_HB') ?>" class="left"><i class="fa fa-mail-reply"></i> Kembali</a>
                     <div class="box-body">
                         <?php
                            echo form_open('data_nilai/addNilaikonsepPraktikum_HB');
                            ?>
                         <div class="table-responsive">
                             <table id="example2" class="table table-bordered table-striped">
                                 <thead>
                                     <tr>
                                         <th class="text-center">NIS</th>
                                         <th class="text-center">Hafalan Juz 1-5</th>
                                         <th class="text-center">Hafalan Juz 6-10</th>
                                         <th class="text-center">Hafalan Juz 11-15</th>
                                         <th class="text-center">Hafalan Juz 16-20</th>
                                         <th class="text-center">Hafalan Juz 21-25</th>
                                         <th class="text-center">Hafalan Juz 26-30</th>
                                         <th class="text-center">Hafalan Dalil-dalil Lima Bab</th>
                                         <th class="text-center">Hafalan Dalil-dalil Empat Tali Keimanan</th>
                                         <th class="text-center">Hafalan Dalil-dalil Enam Thobi'at Luhur</th>
                                         <th class="text-center">Hafalan Dalil-dalil Tri Sukses Generus</th>
                                         <th class="text-center">Fiqih Thaharah</th>
                                         <th class="text-center">Fiqih Shalat</th>
                                         <th class="text-center">Fiqih Zakat</th>
                                         <th class="text-center">Fiqih Puasa</th>
                                         <th class="text-center">Fiqih Haji & Umrah</th>
                                         <th class="text-center">Wujub Luzum al-Jama'ah</th>
                                         <th class="text-center">Faraidl</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <tr>
                                         <td class="text-center"><input name="NIS" class="form-control" type="number" required></td>
                                         <td><input name="n_1" class="form-control" type="number"></td>
                                         <td><input name="n_2" class="form-control" type="number"></td>
                                         <td><input name="n_3" class="form-control" type="number"></td>
                                         <td><input name="n_4" class="form-control" type="number"></td>
                                         <td><input name="n_5" class="form-control" type="number"></td>
                                         <td><input name="n_6" class="form-control" type="number"></td>
                                         <td><input name="n_7" class="form-control" type="number"></td>
                                         <td><input name="n_8" class="form-control" type="number"></td>
                                         <td><input name="n_9" class="form-control" type="number"></td>
                                         <td><input name="n_10" class="form-control" type="number"></td>
                                         <td><input name="n_11" class="form-control" type="number"></td>
                                         <td><input name="n_12" class="form-control" type="number"></td>
                                         <td><input name="n_13" class="form-control" type="number"></td>
                                         <td><input name="n_14" class="form-control" type="number"></td>
                                         <td><input name="n_15" class="form-control" type="number"></td>
                                         <td><input name="n_16" class="form-control" type="number"></td>
                                         <td><input name="n_17" class="form-control" type="number"></td>
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