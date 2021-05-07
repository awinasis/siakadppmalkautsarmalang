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
                         <div class="table-responsive">
                             <table class="table table-bordered table-striped with-check">
                                 <thead>
                                     <tr>
                                         <th rowspan='2'>No.</th>
                                         <th rowspan='2'>NIS</th>
                                         <th rowspan='2'>Nama</th>
                                         <th rowspan='2'>L/P</th>
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
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php $no = 1;
                                        foreach ($nilai as $key => $value) { ?>
                                         <tr>
                                             <td class="text-center"><?= $no++; ?></td>
                                             <td class="text-center"><?= $value['NIS'] ?></td>
                                             <td><?= $value['nama_santri'] ?></td>
                                             <td><?= $value['jenis_kelamin'] ?></td>
                                             <td><input name="nilai_IP1" class="form-control" required></td>
                                             <td><input name="nilai_IP2" class="form-control" required></td>
                                             <td><input name="nilai_IP3" class="form-control" required></td>
                                             <td><input name="nilai_IP4" class="form-control" required></td>
                                             <td><input name="nilai_IP5" class="form-control" required></td>
                                             <td><input name="nilai_IP6" class="form-control" required></td>
                                             <td><input name="nilai_IP7" class="form-control" required></td>
                                             <td><input name="nilai_IP8" class="form-control" required></td>
                                             <td><input name="nilai_IP9" class="form-control" required></td>
                                         </tr>
                                     <?php } ?>
                                 </tbody>
                             </table>
                         </div>
                         <div class="modal-footer">
                             <a href="<?= base_url('data_nilai/prestasiKuliah') ?>" type="submit" class="btn btn-primary">Simpan</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>