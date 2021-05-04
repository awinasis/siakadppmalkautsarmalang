 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <h1 style="color:MediumSeaGreen; font-family:timesnewrohman;">
             <?= $title; ?>
         </h1>
         <br><br>
         <ol class="breadcrumb">
             <li><a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
             <li><a href="<?= base_url('file_surat') ?>">Data Surat</a></li>
             <li class="active">View Surat</li>
         </ol>
     </section>

     <div class="row">
         <div class="col-sm-12">
             <table class="table table-bordered">
                 <tr>
                     <th width="100px">No</th>
                     <th width="30px">:</th>
                     <td><?= $surat['id_surat']; ?></td>
                     <th width="120px">Tanggal Upload</th>
                     <th width="30px">:</th>
                     <td><?= $surat['tgl_upload']; ?></td>
                 </tr>

                 <tr>
                     <th width="100px">Nama Surat</th>
                     <th width="30px">:</th>
                     <td><?= $surat['nama_surat']; ?></td>
                     <th width="120px">Tanggal Update</th>
                     <th width="30px">:</th>
                     <td><?= $surat['tgl_update']; ?></td>
                 </tr>

                 <tr>
                     <th width="100px">Kategori</th>
                     <th width="30px">:</th>
                     <td><?= $surat['kategori']; ?></td>
                     <th width="120px">Ukuran File</th>
                     <th width="30px">:</th>
                     <td><?= $surat['ukuran_file']; ?></td>
                 </tr>
             </table>
         </div>
     </div>

     <div class="col-sm-12">
         <iframe src="<?= base_url('file_arsip/' . $surat['file']) ?>" height="1000px" width="100%" style="border:2px solid blue;" title="Iframe Example"></iframe>
     </div>
 </div>