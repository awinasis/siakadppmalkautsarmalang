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
                     <a href="<?= base_url('data_nilai/sikapPerilaku') ?>" class="left"><i class="fa fa-mail-reply"></i> Kembali</a>
                     <div class="box-body">
                         <?php
                            echo form_open('data_nilai/addNilaiSikapPerilaku');
                            ?>
                         <div class="table-responsive">
                             <table id="example2" class="table table-bordered table-striped">
                                 <thead>
                                     <tr>
                                         <th class="text-center">NIS</th>
                                         <th class="text-center">Ketaatan</th>
                                         <th class="text-center">Keta'dhiman</th>
                                         <th class="text-center">Kedisiplinan</th>
                                         <th class="text-center">Kerapian</th>
                                         <th class="text-center">Kesemangatan</th>
                                         <th class="text-center">Partisipasi dalam kegiatan pembelajaran</th>
                                         <th class="text-center">Etika terhadap teman sejawat</th>
                                         <th class="text-center">Kerjasama dalam kelompok</th>
                                         <th class="text-center">Kelengkapan dan kerapian buku dan catatan</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <tr>
                                         <td class="text-center"><input name="NIS" class="form-control" type="number" required></td>
                                         <td>
                                             <select name="nl1" id="nl1" class="form-control" required>
                                                 <option value="#">-- Nilai --</option>
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
                                                 <option value="#">-- Nilai --</option>
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
                                                 <option value="#">-- Nilai --</option>
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
                                                 <option value="#">-- Nilai --</option>
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
                                                 <option value="#">-- Nilai --</option>
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
                                                 <option value="#">-- Nilai --</option>
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
                                                 <option value="#">-- Nilai --</option>
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
                                                 <option value="#">-- Nilai --</option>
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
                                                 <option value="#">-- Nilai --</option>
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