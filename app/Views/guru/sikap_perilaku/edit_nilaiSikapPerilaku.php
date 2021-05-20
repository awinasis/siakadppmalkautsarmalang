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
             <li><a href="<?= base_url('data_nilai/sikapPerilaku') ?>">Nilai SIkap & Perilaku</a></li>
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
                         <div class="table-responsive">
                             <table id="example2" class="table table-bordered table-striped">
                                 <thead>
                                     <tr>
                                         <th class="text-center">No.</th>
                                         <th class="text-center">NIS</th>
                                         <th class="text-center">Nama</th>
                                         <th class="text-center">L/P</th>
                                         <th class="text-center">Ketaatan</th>
                                         <th class="text-center">Keta'dhiman</th>
                                         <th class="text-center">Kedisiplinan</th>
                                         <th class="text-center">Kerapian</th>
                                         <th class="text-center">Kesemangatan</th>
                                         <th class="text-center">Partisipasi dalam kegiatan pembelajaran</th>
                                         <th class="text-center">Etika terhadap teman sejawat</th>
                                         <th class="text-center">Kerjasama dalam kelompok</th>
                                         <th class="text-center">Kelengkapan dan kerapian buku dan catatan</th>
                                         <th class="text-center">Action</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php $no = 1;
                                        foreach ($nilai as $key => $value) { ?>
                                         <tr>
                                             <?php echo form_open('data_nilai/editNilaiSikapPerilaku/' . $value['id_sp']); ?>
                                             <td class="text-center"><?= $no++; ?></td>
                                             <td class="text-center"><input name="NIS" class="form-control" type="number" value="<?= $value['NIS'] ?>" readonly></td>
                                             <td><input name="nama_santri" class="form-control" value="<?= $value['nama_santri'] ?>" readonly></td>
                                             <td>
                                                 <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" value="<?= $value['jenis_kelamin'] ?>">
                                                     <option value="L" <?= $value['jenis_kelamin'] == "L" ? "selected" : ""; ?>>L</option>
                                                     <option value="P" <?= $value['jenis_kelamin'] == "P" ? "selected" : ""; ?>>P</option>
                                                 </select>
                                             </td>
                                             <td>
                                                 <select name="nl1" id="nl1" class="form-control" value="<?= $value['nl1'] ?>">
                                                     <option value="A" <?= $value['nl1'] == "A" ? "selected" : ""; ?>>A</option>
                                                     <option value="B+" <?= $value['nl1'] == "B+" ? "selected" : ""; ?>>B+</option>
                                                     <option value="B" <?= $value['nl1'] == "B" ? "selected" : ""; ?>>B</option>
                                                     <option value="B-" <?= $value['nl1'] == "B-" ? "selected" : ""; ?>>B-</option>
                                                     <option value="C+" <?= $value['nl1'] == "C+" ? "selected" : ""; ?>>C+</option>
                                                     <option value="C" <?= $value['nl1'] == "C" ? "selected" : ""; ?>>C</option>
                                                     <option value="C-" <?= $value['nl1'] == "C-" ? "selected" : ""; ?>>C-</option>
                                                     <option value="D" <?= $value['nl1'] == "D" ? "selected" : ""; ?>>D</option>
                                                     <option value="E" <?= $value['nl1'] == "E" ? "selected" : ""; ?>>E</option>
                                                 </select>
                                             </td>

                                             <td>
                                                 <select name="nl2" id="nl2" class="form-control" value="<?= $value['nl2'] ?>">
                                                     <option value="A" <?= $value['nl2'] == "A" ? "selected" : ""; ?>>A</option>
                                                     <option value="B+" <?= $value['nl2'] == "B+" ? "selected" : ""; ?>>B+</option>
                                                     <option value="B" <?= $value['nl2'] == "B" ? "selected" : ""; ?>>B</option>
                                                     <option value="B-" <?= $value['nl2'] == "B-" ? "selected" : ""; ?>>B-</option>
                                                     <option value="C+" <?= $value['nl2'] == "C+" ? "selected" : ""; ?>>C+</option>
                                                     <option value="C" <?= $value['nl2'] == "C" ? "selected" : ""; ?>>C</option>
                                                     <option value="C-" <?= $value['nl2'] == "C-" ? "selected" : ""; ?>>C-</option>
                                                     <option value="D" <?= $value['nl2'] == "D" ? "selected" : ""; ?>>D</option>
                                                     <option value="E" <?= $value['nl2'] == "E" ? "selected" : ""; ?>>E</option>
                                                 </select>
                                             </td>

                                             <td>
                                                 <select name="nl3" id="nl3" class="form-control" value="<?= $value['nl3'] ?>">
                                                     <option value="A" <?= $value['nl3'] == "A" ? "selected" : ""; ?>>A</option>
                                                     <option value="B+" <?= $value['nl3'] == "B+" ? "selected" : ""; ?>>B+</option>
                                                     <option value="B" <?= $value['nl3'] == "B" ? "selected" : ""; ?>>B</option>
                                                     <option value="B-" <?= $value['nl3'] == "B-" ? "selected" : ""; ?>>B-</option>
                                                     <option value="C+" <?= $value['nl3'] == "C+" ? "selected" : ""; ?>>C+</option>
                                                     <option value="C" <?= $value['nl3'] == "C" ? "selected" : ""; ?>>C</option>
                                                     <option value="C-" <?= $value['nl3'] == "C-" ? "selected" : ""; ?>>C-</option>
                                                     <option value="D" <?= $value['nl3'] == "D" ? "selected" : ""; ?>>D</option>
                                                     <option value="E" <?= $value['nl3'] == "E" ? "selected" : ""; ?>>E</option>
                                                 </select>
                                             </td>

                                             <td>
                                                 <select name="nl4" id="nl4" class="form-control" value="<?= $value['nl4'] ?>">
                                                     <option value="A" <?= $value['nl4'] == "A" ? "selected" : ""; ?>>A</option>
                                                     <option value="B+" <?= $value['nl4'] == "B+" ? "selected" : ""; ?>>B+</option>
                                                     <option value="B" <?= $value['nl4'] == "B" ? "selected" : ""; ?>>B</option>
                                                     <option value="B-" <?= $value['nl4'] == "B-" ? "selected" : ""; ?>>B-</option>
                                                     <option value="C+" <?= $value['nl4'] == "C+" ? "selected" : ""; ?>>C+</option>
                                                     <option value="C" <?= $value['nl4'] == "C" ? "selected" : ""; ?>>C</option>
                                                     <option value="C-" <?= $value['nl4'] == "C-" ? "selected" : ""; ?>>C-</option>
                                                     <option value="D" <?= $value['nl4'] == "D" ? "selected" : ""; ?>>D</option>
                                                     <option value="E" <?= $value['nl4'] == "E" ? "selected" : ""; ?>>E</option>
                                                 </select>
                                             </td>

                                             <td>
                                                 <select name="nl5" id="nl5" class="form-control" value="<?= $value['nl5'] ?>">
                                                     <option value="A" <?= $value['nl5'] == "A" ? "selected" : ""; ?>>A</option>
                                                     <option value="B+" <?= $value['nl5'] == "B+" ? "selected" : ""; ?>>B+</option>
                                                     <option value="B" <?= $value['nl5'] == "B" ? "selected" : ""; ?>>B</option>
                                                     <option value="B-" <?= $value['nl5'] == "B-" ? "selected" : ""; ?>>B-</option>
                                                     <option value="C+" <?= $value['nl5'] == "C+" ? "selected" : ""; ?>>C+</option>
                                                     <option value="C" <?= $value['nl5'] == "C" ? "selected" : ""; ?>>C</option>
                                                     <option value="C-" <?= $value['nl5'] == "C-" ? "selected" : ""; ?>>C-</option>
                                                     <option value="D" <?= $value['nl5'] == "D" ? "selected" : ""; ?>>D</option>
                                                     <option value="E" <?= $value['nl5'] == "E" ? "selected" : ""; ?>>E</option>
                                                 </select>
                                             </td>

                                             <td>
                                                 <select name="nl6" id="nl6" class="form-control" value="<?= $value['nl6'] ?>">
                                                     <option value="A" <?= $value['nl6'] == "A" ? "selected" : ""; ?>>A</option>
                                                     <option value="B+" <?= $value['nl6'] == "B+" ? "selected" : ""; ?>>B+</option>
                                                     <option value="B" <?= $value['nl6'] == "B" ? "selected" : ""; ?>>B</option>
                                                     <option value="B-" <?= $value['nl6'] == "B-" ? "selected" : ""; ?>>B-</option>
                                                     <option value="C+" <?= $value['nl6'] == "C+" ? "selected" : ""; ?>>C+</option>
                                                     <option value="C" <?= $value['nl6'] == "C" ? "selected" : ""; ?>>C</option>
                                                     <option value="C-" <?= $value['nl6'] == "C-" ? "selected" : ""; ?>>C-</option>
                                                     <option value="D" <?= $value['nl6'] == "D" ? "selected" : ""; ?>>D</option>
                                                     <option value="E" <?= $value['nl6'] == "E" ? "selected" : ""; ?>>E</option>
                                                 </select>
                                             </td>

                                             <td>
                                                 <select name="nl7" id="nl7" class="form-control" value="<?= $value['nl7'] ?>">
                                                     <option value="A" <?= $value['nl7'] == "A" ? "selected" : ""; ?>>A</option>
                                                     <option value="B+" <?= $value['nl7'] == "B+" ? "selected" : ""; ?>>B+</option>
                                                     <option value="B" <?= $value['nl7'] == "B" ? "selected" : ""; ?>>B</option>
                                                     <option value="B-" <?= $value['nl7'] == "B-" ? "selected" : ""; ?>>B-</option>
                                                     <option value="C+" <?= $value['nl7'] == "C+" ? "selected" : ""; ?>>C+</option>
                                                     <option value="C" <?= $value['nl7'] == "C" ? "selected" : ""; ?>>C</option>
                                                     <option value="C-" <?= $value['nl7'] == "C-" ? "selected" : ""; ?>>C-</option>
                                                     <option value="D" <?= $value['nl7'] == "D" ? "selected" : ""; ?>>D</option>
                                                     <option value="E" <?= $value['nl7'] == "E" ? "selected" : ""; ?>>E</option>
                                                 </select>
                                             </td>

                                             <td>
                                                 <select name="nl8" id="nl8" class="form-control" value="<?= $value['nl8'] ?>">
                                                     <option value="A" <?= $value['nl8'] == "A" ? "selected" : ""; ?>>A</option>
                                                     <option value="B+" <?= $value['nl8'] == "B+" ? "selected" : ""; ?>>B+</option>
                                                     <option value="B" <?= $value['nl8'] == "B" ? "selected" : ""; ?>>B</option>
                                                     <option value="B-" <?= $value['nl8'] == "B-" ? "selected" : ""; ?>>B-</option>
                                                     <option value="C+" <?= $value['nl8'] == "C+" ? "selected" : ""; ?>>C+</option>
                                                     <option value="C" <?= $value['nl8'] == "C" ? "selected" : ""; ?>>C</option>
                                                     <option value="C-" <?= $value['nl8'] == "C-" ? "selected" : ""; ?>>C-</option>
                                                     <option value="D" <?= $value['nl8'] == "D" ? "selected" : ""; ?>>D</option>
                                                     <option value="E" <?= $value['nl8'] == "E" ? "selected" : ""; ?>>E</option>
                                                 </select>
                                             </td>

                                             <td>
                                                 <select name="nl9" id="nl9" class="form-control" value="<?= $value['nl9'] ?>">
                                                     <option value="A" <?= $value['nl9'] == "A" ? "selected" : ""; ?>>A</option>
                                                     <option value="B+" <?= $value['nl9'] == "B+" ? "selected" : ""; ?>>B+</option>
                                                     <option value="B" <?= $value['nl9'] == "B" ? "selected" : ""; ?>>B</option>
                                                     <option value="B-" <?= $value['nl9'] == "B-" ? "selected" : ""; ?>>B-</option>
                                                     <option value="C+" <?= $value['nl9'] == "C+" ? "selected" : ""; ?>>C+</option>
                                                     <option value="C" <?= $value['nl9'] == "C" ? "selected" : ""; ?>>C</option>
                                                     <option value="C-" <?= $value['nl9'] == "C-" ? "selected" : ""; ?>>C-</option>
                                                     <option value="D" <?= $value['nl9'] == "D" ? "selected" : ""; ?>>D</option>
                                                     <option value="E" <?= $value['nl9'] == "E" ? "selected" : ""; ?>>E</option>
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