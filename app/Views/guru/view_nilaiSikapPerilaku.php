 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <h1>
             <?= $title; ?>
         </h1>
         <br><br>

         <ol class="breadcrumb">
             <li><a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
             <li class="active">Nilai Santri</li>
         </ol>
     </section>

     <div class="row">
         <div class="col-sm-12">
             <div class="box box-gray box-solid">
                 <div class="box-header with-border">
                     <h3 class="box-title"><i class="fa  fa-table"></i> <?= $title; ?></h3>
                     <div class="box-body">
                         <div class="table-responsive">
                             <table class="table table-bordered table-striped with-check">
                                 <thead>
                                     <tr>
                                         <th rowspan='2'>No.</th>
                                         <th rowspan='2'>NIS</th>
                                         <th rowspan='2'>Nama</th>
                                         <th rowspan='2'>L/P</th>
                                         <th rowspan='2'>Ketaatan</th>
                                         <th rowspan='2'>Keta'dhiman</th>
                                         <th rowspan='2'>Kedisiplinan</th>
                                         <th rowspan='2'>Kerapian</th>
                                         <th rowspan='2'>Kesemangatan</th>
                                         <th rowspan='2'>Partisipasi dalam kegiatan pembelajaran</th>
                                         <th rowspan='2'>Etika terhadap teman sejawat</th>
                                         <th rowspan='2'>Kerjasama dalam kelompok</th>
                                         <th rowspan='2'>Kelengkapan dan kerapian buku dan catatan</th>
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
                                             <td><?= $value['nl1'] ?></td>
                                             <td><?= $value['nl2'] ?></td>
                                             <td><?= $value['nl3'] ?></td>
                                             <td><?= $value['nl4'] ?></td>
                                             <td><?= $value['nl5'] ?></td>
                                             <td><?= $value['nl6'] ?></td>
                                             <td><?= $value['nl7'] ?></td>
                                             <td><?= $value['nl8'] ?></td>
                                             <td><?= $value['nl9'] ?></td>
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