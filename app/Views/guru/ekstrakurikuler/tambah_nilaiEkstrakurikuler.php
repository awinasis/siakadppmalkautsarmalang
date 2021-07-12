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
                     <h3 class="box-title"><i class="fa  fa-table"></i></h3>&emsp;
                     <a href="<?= base_url('data_nilai/ekstrakurikuler') ?>" class="left"><i class="fa fa-mail-reply"></i> Kembali</a>
                     <div class="box-body">
                         <?php
                            echo form_open('data_nilai/addNilaiEkstrakurikuler');
                            ?>
                         <div class="table-responsive">
                             <table id="example2" class="table table-bordered table-striped with-check">
                                 <thead>
                                     <tr>
                                         <th class="text-center">NIS</th>
                                         <th class="text-center">Pencak Silat</th>
                                         <th class="text-center">Sepakbola/Futsal</th>
                                         <th class="text-center">Senam Pagi</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <tr>
                                         <td class="text-center"><input name="NIS" class="form-control" type="number" required></td>
                                         <td>
                                             <select name="nilai_1" id="nilai_1" class="form-control" required>
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
                                             <select name="nilai_2" id="nilai_2" class="form-control" required>
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
                                             <select name="nilai_3" id="nilai_1" class="form-control" required>
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