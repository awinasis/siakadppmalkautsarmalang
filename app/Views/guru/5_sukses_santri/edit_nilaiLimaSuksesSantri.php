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
                         <div class="table-responsive">
                             <table id="example2" class="table table-bordered table-striped">
                                 <thead>
                                     <tr>
                                         <th class="text-center">No.</th>
                                         <th class="text-center">NIS</th>
                                         <th class="text-center">Nama Santri</th>
                                         <th class="text-center">L/P</th>
                                         <th class="text-center">Faham Jamaah</th>
                                         <th class="text-center">Mandiri Ibadah</th>
                                         <th class="text-center">Akhlaqul Karimah</th>
                                         <th class="text-center">Entengan dalam sabilillah</th>
                                         <th class="text-center">Sukses keilmuan</th>
                                         <th class="text-center">Action</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php $no = 1;
                                        foreach ($nilai as $key => $value) { ?>
                                         <tr>
                                             <?php echo form_open('data_nilai/editNilaiLimaSuksesSantri/' . $value['id_lss']); ?>
                                             <td class="text-center"><?= $no++; ?></td>
                                             <td><input name="NIS" class="form-control text-center" type="number" value="<?= $value['NIS'] ?>" readonly></td>
                                             <td><input name="nama_santri" class="form-control" value="<?= $value['nama_santri'] ?>" readonly></td>
                                             <td class="text-center"><?= $value['jenis_kelamin'] ?></td>

                                             <td class="text-center">
                                                 <select name="nilai_A" id="nilai_A" class="form-control" value="<?= $value['nilai_A'] ?>">
                                                     <option value="A" <?= $value['nilai_A'] == "A" ? "selected" : ""; ?>>A</option>
                                                     <option value="B+" <?= $value['nilai_A'] == "B+" ? "selected" : ""; ?>>B+</option>
                                                     <option value="B" <?= $value['nilai_A'] == "B" ? "selected" : ""; ?>>B</option>
                                                     <option value="B-" <?= $value['nilai_A'] == "B-" ? "selected" : ""; ?>>B-</option>
                                                     <option value="C+" <?= $value['nilai_A'] == "C+" ? "selected" : ""; ?>>C+</option>
                                                     <option value="C" <?= $value['nilai_A'] == "C" ? "selected" : ""; ?>>C</option>
                                                     <option value="C-" <?= $value['nilai_A'] == "C-" ? "selected" : ""; ?>>C-</option>
                                                     <option value="D" <?= $value['nilai_A'] == "D" ? "selected" : ""; ?>>D</option>
                                                     <option value="E" <?= $value['nilai_A'] == "E" ? "selected" : ""; ?>>E</option>
                                                 </select>
                                             </td>

                                             <td class="text-center">
                                                 <select name="nilai_B" id="nilai_B" class="form-control" value="<?= $value['nilai_B'] ?>">
                                                     <option value="A" <?= $value['nilai_B'] == "A" ? "selected" : ""; ?>>A</option>
                                                     <option value="B+" <?= $value['nilai_B'] == "B+" ? "selected" : ""; ?>>B+</option>
                                                     <option value="B" <?= $value['nilai_B'] == "B" ? "selected" : ""; ?>>B</option>
                                                     <option value="B-" <?= $value['nilai_B'] == "B-" ? "selected" : ""; ?>>B-</option>
                                                     <option value="C+" <?= $value['nilai_B'] == "C+" ? "selected" : ""; ?>>C+</option>
                                                     <option value="C" <?= $value['nilai_B'] == "C" ? "selected" : ""; ?>>C</option>
                                                     <option value="C-" <?= $value['nilai_B'] == "C-" ? "selected" : ""; ?>>C-</option>
                                                     <option value="D" <?= $value['nilai_B'] == "D" ? "selected" : ""; ?>>D</option>
                                                     <option value="E" <?= $value['nilai_B'] == "E" ? "selected" : ""; ?>>E</option>
                                                 </select>
                                             </td>

                                             <td class="text-center">
                                                 <select name="nilai_C" id="nilai_C" class="form-control" value="<?= $value['nilai_C'] ?>">
                                                     <option value="A" <?= $value['nilai_C'] == "A" ? "selected" : ""; ?>>A</option>
                                                     <option value="B+" <?= $value['nilai_C'] == "B+" ? "selected" : ""; ?>>B+</option>
                                                     <option value="B" <?= $value['nilai_C'] == "B" ? "selected" : ""; ?>>B</option>
                                                     <option value="B-" <?= $value['nilai_C'] == "B-" ? "selected" : ""; ?>>B-</option>
                                                     <option value="C+" <?= $value['nilai_C'] == "C+" ? "selected" : ""; ?>>C+</option>
                                                     <option value="C" <?= $value['nilai_C'] == "C" ? "selected" : ""; ?>>C</option>
                                                     <option value="C-" <?= $value['nilai_C'] == "C-" ? "selected" : ""; ?>>C-</option>
                                                     <option value="D" <?= $value['nilai_C'] == "D" ? "selected" : ""; ?>>D</option>
                                                     <option value="E" <?= $value['nilai_C'] == "E" ? "selected" : ""; ?>>E</option>
                                                 </select>
                                             </td>

                                             <td class="text-center">
                                                 <select name="nilai_D" id="nilai_D" class="form-control" value="<?= $value['nilai_D'] ?>">
                                                     <option value="A" <?= $value['nilai_D'] == "A" ? "selected" : ""; ?>>A</option>
                                                     <option value="B+" <?= $value['nilai_D'] == "B+" ? "selected" : ""; ?>>B+</option>
                                                     <option value="B" <?= $value['nilai_D'] == "B" ? "selected" : ""; ?>>B</option>
                                                     <option value="B-" <?= $value['nilai_D'] == "B-" ? "selected" : ""; ?>>B-</option>
                                                     <option value="C+" <?= $value['nilai_D'] == "C+" ? "selected" : ""; ?>>C+</option>
                                                     <option value="C" <?= $value['nilai_D'] == "C" ? "selected" : ""; ?>>C</option>
                                                     <option value="C-" <?= $value['nilai_D'] == "C-" ? "selected" : ""; ?>>C-</option>
                                                     <option value="D" <?= $value['nilai_D'] == "D" ? "selected" : ""; ?>>D</option>
                                                     <option value="E" <?= $value['nilai_D'] == "E" ? "selected" : ""; ?>>E</option>
                                                 </select>
                                             </td>

                                             <td class="text-center">
                                                 <select name="nilai_E" id="nilai_E" class="form-control" value="<?= $value['nilai_E'] ?>">
                                                     <option value="A" <?= $value['nilai_E'] == "A" ? "selected" : ""; ?>>A</option>
                                                     <option value="B+" <?= $value['nilai_E'] == "B+" ? "selected" : ""; ?>>B+</option>
                                                     <option value="B" <?= $value['nilai_E'] == "B" ? "selected" : ""; ?>>B</option>
                                                     <option value="B-" <?= $value['nilai_E'] == "B-" ? "selected" : ""; ?>>B-</option>
                                                     <option value="C+" <?= $value['nilai_E'] == "C+" ? "selected" : ""; ?>>C+</option>
                                                     <option value="C" <?= $value['nilai_E'] == "C" ? "selected" : ""; ?>>C</option>
                                                     <option value="C-" <?= $value['nilai_E'] == "C-" ? "selected" : ""; ?>>C-</option>
                                                     <option value="D" <?= $value['nilai_E'] == "D" ? "selected" : ""; ?>>D</option>
                                                     <option value="E" <?= $value['nilai_E'] == "E" ? "selected" : ""; ?>>E</option>
                                                 </select>
                                             </td>

                                             <td class="text-center">
                                                 <button type="submit" class="btn btn-primary">Simpan</button>
                                             </td>
                                             <?php echo form_close() ?>
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