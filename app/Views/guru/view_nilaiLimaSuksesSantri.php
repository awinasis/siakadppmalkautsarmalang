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
                                         <th rowspan='2'>Faham Jamaah</th>
                                         <th rowspan='2'>Mandiri Ibadah</th>
                                         <th rowspan='2'>Akhlaqul Karimah</th>
                                         <th rowspan='2'>Entengan dalam sabilillah</th>
                                         <th rowspan='2'>Sukses keilmuan</th>
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
                                             <td><?= $value['nilai_A'] ?></td>
                                             <td><?= $value['nilai_B'] ?></td>
                                             <td><?= $value['nilai_C'] ?></td>
                                             <td><?= $value['nilai_D'] ?></td>
                                             <td><?= $value['nilai_E'] ?></td>
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