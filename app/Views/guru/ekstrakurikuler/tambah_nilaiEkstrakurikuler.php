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
             <li><a href="<?= base_url('data_nilai/ekstrakurikuler/') ?>">Nilai Ekstrakurikuler</a></li>
             <li class="active">Nilai Santri</li>
         </ol>
     </section>
     <div class="row">
         <div class="col-sm-12">
             <div class="box box-gray box-solid">
                 <div class="box-header with-border">
                     <h3 class="box-title"><i class="fa  fa-table"></i></h3>
                     <div class="box-body">
                         <div class="table-responsive">
                             <table class="table table-bordered table-striped with-check">
                                 <thead>
                                     <tr>
                                         <th rowspan='2'>No.</th>
                                         <th rowspan='2'>NIS</th>
                                         <th rowspan='2'>Nama</th>
                                         <th rowspan='2'>L/P</th>
                                         <th rowspan='2'>Pencak Silat</th>
                                         <th rowspan='2'>Sepakbola/Futsal</th>
                                         <th rowspan='2'>Senam Pagi</th>
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
                                             <td>
                                                 <select name="nilai_1" id="nilai_1" class="form-control" required>
                                                     <option value=""></option>
                                                     <option value="A">A</option>
                                                     <option value="B+">B+</option>
                                                     <option value="B">B</option>
                                                     <option value="B-">B-</option>
                                                     <option value="C+">C+</option>
                                                     <option value="C">C</option>
                                                     <option value="C-">C-</option>
                                                     <option value="D">D</option>
                                                     <option value="E">E</option>
                                                 </select>
                                             </td>
                                             <td>
                                                 <select name="nilai_2" id="nilai_2" class="form-control" required>
                                                     <option value=""></option>
                                                     <option value="A">A</option>
                                                     <option value="B+">B+</option>
                                                     <option value="B">B</option>
                                                     <option value="B-">B-</option>
                                                     <option value="C+">C+</option>
                                                     <option value="C">C</option>
                                                     <option value="C-">C-</option>
                                                     <option value="D">D</option>
                                                     <option value="E">E</option>
                                                 </select>
                                             </td>
                                             <td>
                                                 <select name="nilai_3" id="nilai_1" class="form-control" required>
                                                     <option value=""></option>
                                                     <option value="A">A</option>
                                                     <option value="B+">B+</option>
                                                     <option value="B">B</option>
                                                     <option value="B-">B-</option>
                                                     <option value="C+">C+</option>
                                                     <option value="C">C</option>
                                                     <option value="C-">C-</option>
                                                     <option value="D">D</option>
                                                     <option value="E">E</option>
                                                 </select>
                                             </td>
                                         </tr>
                                     <?php } ?>
                                 </tbody>
                             </table>
                         </div>
                         <div class="modal-footer">
                             <a href="<?= base_url('data_nilai/ekstrakurikuler') ?>" type="submit" class="btn btn-primary">Simpan</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>