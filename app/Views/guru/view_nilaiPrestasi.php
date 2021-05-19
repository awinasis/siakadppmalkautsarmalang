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
             <li class="active">Nilai Santri</li>
         </ol>
     </section>

     <div class="row">
         <div class="col-sm-12">
             <div class="box box-gray box-solid">
                 <div class="box-header with-border">
                     <!-- <div class="box-tools pull-left"> -->
                     <a href="<?= base_url('data_nilai/tambahNilaiIP/') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"> Tambah</i></a>
                 </div>
                 <br>
                 <div class="box-body">
                     <div class="table-responsive">
                         <table id="example2" class="table table-bordered table-striped with-check">
                             <thead>
                                 <tr>
                                     <th class="text-center" rowspan='2'>No.</th>
                                     <th class="text-center" rowspan='2'>NIS</th>
                                     <th class="text-center" rowspan='2'>Nama</th>
                                     <th class="text-center" rowspan='2'>L/P</th>
                                     <th class="text-center" colspan=" 9">Nilai Indeks Prestasi (IP)</th>
                                     <th class="text-center" rowspan="2">Action</th>
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
                                 <?php $no = 1;
                                    foreach ($nilai as $key => $value) { ?>
                                     <tr>
                                         <td class="text-center"><?= $no++; ?></td>
                                         <td class="text-center"><?= $value['NIS'] ?></td>
                                         <td><?= $value['nama_santri'] ?></td>
                                         <td><?= $value['jenis_kelamin'] ?></td>
                                         <td><?= $value['nilai_IP1'] ?></td>
                                         <td><?= $value['nilai_IP2'] ?></td>
                                         <td><?= $value['nilai_IP3'] ?></td>
                                         <td><?= $value['nilai_IP4'] ?></td>
                                         <td><?= $value['nilai_IP5'] ?></td>
                                         <td><?= $value['nilai_IP6'] ?></td>
                                         <td><?= $value['nilai_IP7'] ?></td>
                                         <td><?= $value['nilai_IP8'] ?></td>
                                         <td><?= $value['nilai_IP9'] ?></td>

                                         <td class="text-center">
                                             <button class="btn btn-warning btn-sm" <?= $value['id_ip'] ?>><i class="fa fa-edit"></i></button>
                                             <button class="btn btn-danger btn-sm" <?= $value['id_ip'] ?>><i class="fa fa-trash"></i></button>
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
 </div>