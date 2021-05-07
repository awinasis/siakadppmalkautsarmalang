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
             <li><a href="<?= base_url('data_nilai/sikapPerilaku') ?>">Nilai Sikap & Perilaku</a></li>
             <li class="active">Nilai Santri</li>
         </ol>
     </section>
     <div class="row">
         <div class="col-sm-12">
             <div class="box box-gray box-solid">
                 <div class="box-header with-border">
                     <h3 class="box-title"><i class="fa  fa-table"></i></h3>&emsp;
                     <a href="<?= base_url('data_nilai/sikapPerilaku') ?>" class="right"><i class="fa fa-mail-reply"></i> Kembali</a>
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
                                             <td>
                                                 <select name="nl1" id="nl1" class="form-control" required>
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
                                                 <select name="nl2" id="nl2" class="form-control" required>
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
                                                 <select name="nl3" id="nl3" class="form-control" required>
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
                                                 <select name="nl4" id="nl4" class="form-control" required>
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
                                                 <select name="nl5" id="nl5" class="form-control" required>
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
                                                 <select name="nl6" id="nl6" class="form-control" required>
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
                                                 <select name="nl7" id="nl7" class="form-control" required>
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
                                                 <select name="nl8" id="nl8" class="form-control" required>
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
                                                 <select name="nl9" id="nl9" class="form-control" required>
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
                             <a href="<?= base_url('data_nilai/sikapPerilaku') ?>" type="submit" class="btn btn-primary">Simpan</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>