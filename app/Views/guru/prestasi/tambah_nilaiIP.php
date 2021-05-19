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
             <li><a href="<?= base_url('data_nilai/prestasiKuliah') ?>">Nilai IP</a></li>
             <li class="active">Nilai Santri</li>
         </ol>
     </section>

     <div class="row">
         <div class="col-sm-12">
             <div class="box box-gray box-solid">
                 <div class="box-header with-border">
                     <h3 class="box-title"><i class="fa  fa-table"></i></h3>&emsp;
                     <a href="<?= base_url('data_nilai/prestasiKuliah') ?>" class="right"><i class="fa fa-mail-reply"></i> Kembali</a>
                     <div class="box-body">
                         <?php
                            echo form_open('data_nilai/addNilaiIP');
                            ?>
                         <div class="table-responsive">
                             <table id="example2" class="table table-bordered table-striped with-check">
                                 <thead>
                                     <tr>
                                         <th class="text-center" rowspan='2'>NIS</th>
                                         <th rowspan='2'>Nama</th>
                                         <th class="text-center" rowspan='2'>L/P</th>
                                         <th class="text-center" colspan=" 9">Nilai Indeks Prestasi (IP)</th>
                                     </tr>
                                     <tr>
                                         <th class="text-center">Smt 1</th>
                                         <th class="text-center">Smt 2</th>
                                         <th class="text-center">Smt 3</th>
                                         <th class="text-center">Smt 4</th>
                                         <th class="text-center">Smt 5</th>
                                         <th class="text-center">Smt 6</th>
                                         <th class="text-center">Smt 7</th>
                                         <th class="text-center">Smt 8</th>
                                         <th class="text-center">Smt > 8</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <tr>
                                         <td class="text-center"><input name="NIS" class="form-control" type="number" required></td>
                                         <td><input name="nama_santri" class="form-control" required></td>
                                         <td>
                                             <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                                                 <option value="#">-- Pilih --</option>
                                                 <option value="L">L</option>
                                                 <option value="P">P</option>
                                             </select>
                                         </td>
                                         <td><input name="nilai_IP1" class="form-control"></td>
                                         <td><input name="nilai_IP2" class="form-control"></td>
                                         <td><input name="nilai_IP3" class="form-control"></td>
                                         <td><input name="nilai_IP4" class="form-control"></td>
                                         <td><input name="nilai_IP5" class="form-control"></td>
                                         <td><input name="nilai_IP6" class="form-control"></td>
                                         <td><input name="nilai_IP7" class="form-control"></td>
                                         <td><input name="nilai_IP8" class="form-control"></td>
                                         <td><input name="nilai_IP9" class="form-control"></td>
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