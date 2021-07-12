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
             <li><a href="<?= base_url('data_nilai/ekstrakurikuler') ?>">Nilai Ekstrakurikuler</a></li>
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
                         <div class="table-responsive">
                             <table id="example2" class="table table-bordered table-striped">
                                 <thead>
                                     <tr>
                                         <th class="text-center">No.</th>
                                         <th class="text-center">NIS</th>
                                         <th class="text-center">Nama</th>
                                         <th class="text-center">L/P</th>
                                         <th class="text-center">Pencak Silat</th>
                                         <th class="text-center">Sepakbola/Futsal</th>
                                         <th class="text-center">Senam Pagi</th>
                                         <th class="text-center">Action</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php $no = 1;
                                        foreach ($nilai as $key => $value) { ?>
                                         <tr>
                                             <?php echo form_open('data_nilai/editNilaiEkstrakurikuler/' . $value['id_ne']); ?>
                                             <td class="text-center"><?= $no++; ?></td>
                                             <td><input name="NIS" class="form-control text-center" type="number" value="<?= $value['NIS'] ?>" readonly></td>
                                             <td><input name="nama_santri" class="form-control" value="<?= $value['nama_santri'] ?>" readonly></td>
                                             <td class="text-center"><?= $value['jenis_kelamin'] ?></td>
                                             <td>
                                                 <select name="nilai_1" id="nilai_1" class="form-control" value="<?= $value['nilai_1'] ?>">
                                                     <option value="A" <?= $value['nilai_1'] == "A" ? "selected" : ""; ?>>A</option>
                                                     <option value="B+" <?= $value['nilai_1'] == "B+" ? "selected" : ""; ?>>B+</option>
                                                     <option value="B" <?= $value['nilai_1'] == "B" ? "selected" : ""; ?>>B</option>
                                                     <option value="B-" <?= $value['nilai_1'] == "B-" ? "selected" : ""; ?>>B-</option>
                                                     <option value="C+" <?= $value['nilai_1'] == "C+" ? "selected" : ""; ?>>C+</option>
                                                     <option value="C" <?= $value['nilai_1'] == "C" ? "selected" : ""; ?>>C</option>
                                                     <option value="C-" <?= $value['nilai_1'] == "C-" ? "selected" : ""; ?>>C-</option>
                                                     <option value="D" <?= $value['nilai_1'] == "D" ? "selected" : ""; ?>>D</option>
                                                     <option value="E" <?= $value['nilai_1'] == "E" ? "selected" : ""; ?>>E</option>
                                                 </select>
                                             </td>

                                             <td>
                                                 <select name="nilai_2" id="nilai_2" class="form-control" value="<?= $value['nilai_2'] ?>">
                                                     <option value="A" <?= $value['nilai_2'] == "A" ? "selected" : ""; ?>>A</option>
                                                     <option value="B+" <?= $value['nilai_2'] == "B+" ? "selected" : ""; ?>>B+</option>
                                                     <option value="B" <?= $value['nilai_2'] == "B" ? "selected" : ""; ?>>B</option>
                                                     <option value="B-" <?= $value['nilai_2'] == "B-" ? "selected" : ""; ?>>B-</option>
                                                     <option value="C+" <?= $value['nilai_2'] == "C+" ? "selected" : ""; ?>>C+</option>
                                                     <option value="C" <?= $value['nilai_2'] == "C" ? "selected" : ""; ?>>C</option>
                                                     <option value="C-" <?= $value['nilai_2'] == "C-" ? "selected" : ""; ?>>C-</option>
                                                     <option value="D" <?= $value['nilai_2'] == "D" ? "selected" : ""; ?>>D</option>
                                                     <option value="E" <?= $value['nilai_2'] == "E" ? "selected" : ""; ?>>E</option>
                                                 </select>
                                             </td>

                                             <td>
                                                 <select name="nilai_3" id="nilai_3" class="form-control" value="<?= $value['nilai_3'] ?>">
                                                     <option value="A" <?= $value['nilai_3'] == "A" ? "selected" : ""; ?>>A</option>
                                                     <option value="B+" <?= $value['nilai_3'] == "B+" ? "selected" : ""; ?>>B+</option>
                                                     <option value="B" <?= $value['nilai_3'] == "B" ? "selected" : ""; ?>>B</option>
                                                     <option value="B-" <?= $value['nilai_3'] == "B-" ? "selected" : ""; ?>>B-</option>
                                                     <option value="C+" <?= $value['nilai_3'] == "C+" ? "selected" : ""; ?>>C+</option>
                                                     <option value="C" <?= $value['nilai_3'] == "C" ? "selected" : ""; ?>>C</option>
                                                     <option value="C-" <?= $value['nilai_3'] == "C-" ? "selected" : ""; ?>>C-</option>
                                                     <option value="D" <?= $value['nilai_3'] == "D" ? "selected" : ""; ?>>D</option>
                                                     <option value="E" <?= $value['nilai_3'] == "E" ? "selected" : ""; ?>>E</option>
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