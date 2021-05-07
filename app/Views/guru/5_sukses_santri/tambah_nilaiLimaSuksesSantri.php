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
             <li><a href="<?= base_url('data_nilai/limaSuksesSantri') ?>">Nilai 5 Sukses Santri</a></li>
             <li class="active">Nilai Santri</li>
         </ol>
     </section>
     <div class="row">
         <div class="col-sm-12">
             <div class="box box-gray box-solid">
                 <div class="box-header with-border">
                     <h3 class="box-title"><i class="fa  fa-table"></i></h3>&emsp;
                     <a href="<?= base_url('data_nilai/limaSuksesSantri') ?>" class="right"><i class="fa fa-mail-reply"></i> Kembali</a>
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
                                             <td>
                                                 <select name="nilai_A" id="nilai_A" class="form-control" required>
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
                                                 <select name="nilai_B" id="nilai_B" class="form-control" required>
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
                                                 <select name="nilai_C" id="nilai_C" class="form-control" required>
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
                                                 <select name="nilai_D" id="nilai_D" class="form-control" required>
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
                                                 <select name="nilai_E" id="nilai_E" class="form-control" required>
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
                             <a href="<?= base_url('data_nilai/limaSuksesSantri') ?>" type="submit" class="btn btn-primary">Simpan</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>