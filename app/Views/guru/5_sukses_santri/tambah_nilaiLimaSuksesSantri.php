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
                     <a href="<?= base_url('data_nilai/limaSuksesSantri') ?>" class="left"><i class="fa fa-mail-reply"></i> Kembali</a>
                     <div class="box-body">
                         <?php
                            echo form_open('data_nilai/addNilaiLimaSuksesSantri');
                            ?>
                         <div class="table-responsive">
                             <table id="example2" class="table table-bordered table-striped">
                                 <thead>
                                     <tr>
                                         <th class="text-center">NIS</th>
                                         <th class="text-center">Faham Jamaah</th>
                                         <th class="text-center">Mandiri Ibadah</th>
                                         <th class="text-center">Akhlaqul Karimah</th>
                                         <th class="text-center">Entengan dalam sabilillah</th>
                                         <th class="text-center">Sukses keilmuan</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <tr>
                                         <td class="text-center"><input name="NIS" class="form-control" type="number" required></td>
                                         <td class="text-center">
                                             <select name="nilai_A" id="nilai_A" class="form-control" required>
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

                                         <td class="text-center">
                                             <select name="nilai_B" id="nilai_B" class="form-control" required>
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

                                         <td class="text-center">
                                             <select name="nilai_C" id="nilai_C" class="form-control" required>
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

                                         <td class="text-center">
                                             <select name="nilai_D" id="nilai_D" class="form-control" required>
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

                                         <td class="text-center">
                                             <select name="nilai_E" id="nilai_E" class="form-control" required>
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