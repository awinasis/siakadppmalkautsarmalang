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
             <li class="active">Filter Nilai Santri</li>
         </ol>
     </section>

     <!DOCTYPE html>
     <html lang="en">

     <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Filter Nilai</title>
     </head>

     <body>
         <div class="row">
             <div class="col-sm-12">
                 <div class="box box-info box-solid">
                     <div class="box-body">
                         <h4 style="font-family:timesnewrohman;">&ensp;Tahun Ajaran : <b><?= $ta_aktif['tahun_akademik']; ?></b></h4>
                         <table class="table table-bordered table-striped" id="data">
                             <thead>
                                 <tr>
                                     <th class="text-center">Kelas Santri</th>
                                     <th class="text-center">Action</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr>
                                     <?php
                                        echo form_open('');
                                        ?>
                                     <td>
                                         <div class="form-group row">
                                             <div class="col-lg-3"></div>
                                             <div class="col-lg-6">
                                                 <select name="kelas_santri" class="form-control" id="kelas_santri" required>
                                                     <option value="">- Pilih -</option>
                                                     <?php
                                                        $kelas_santri = "";
                                                        ?>
                                                     <option value="Reguler" <?php if ($kelas_santri == "Reguler") {
                                                                                    echo "selected";
                                                                                } ?>>Reguler</option>
                                                     <option value="Hadits Besar" <?php if ($kelas_santri == "Hadits Besar") {
                                                                                        echo "selected";
                                                                                    } ?>>Hadits Besar</option>
                                                 </select>
                                             </div>
                                             <div class="col-lg-3"></div>
                                         </div>
                                     </td>

                                     <td class="text-center">
                                         <button class="btn btn-success btn-sm"><i class="fa fa-arrow-circle-right"></i> Selengkapnya</button>
                                     </td>
                                     <?php echo form_close() ?>
                                 </tr>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>
         <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
         <script type="text/javascript">
             $(document).ready(function() {
                 $('.data').load("view_nilaiMateri.php");
                 $("#selengkapnya").click(function() {
                     var jurusan = $("#kelas_santri").val();
                     $.ajax({
                         type: 'POST',
                         url: "view_nilaiMateri.php",
                         data: {
                             kelas_santri: kelas_santri,
                         },
                         success: function(hasil) {
                             $('.data').html(hasil);
                         }
                     });
                 });
             });
         </script>
     </body>

     </html>
 </div>

 <div class="content-wrapper">
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h4 class="m-0 text-dark">Data Nilai </h4>
                 </div>
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <a href="javascript:history.back()" class="btn btn-default btn-sm">Kembali</a> &nbsp; &nbsp; &nbsp;
                         <div class="dropdown">
                             <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-filter" aria-hidden="true"></i>
                                 <?php
                                    if (!empty($_GET)) {
                                        if (!empty($_GET['filter_time'])) {
                                            echo ($_GET['filter_time']) == 'asc' ? 'Reguler' : 'Hadits Besar';
                                        } else {
                                            echo 'Reguler';
                                        }
                                    } else {
                                        echo 'Reguler';
                                    }
                                    ?>
                             </button>
                             <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                 <a class="dropdown-item" href="?filter_time=desc">Reguler</a>
                                 <a class="dropdown-item" href="?filter_time=asc">Hadits Besar</a>
                             </div>
                         </div>
                     </ol>
                 </div>
             </div>
         </div>
     </div>
     <section class="content">
         <div class="container-fluid">
             <?php if ($rapat['status_rapat'] == 2) : ?>
                 <button type="button" class="btn btn-info mb-2" data-toggle="modal" data-target="#add-forum">
                     <i class="fa fa-plus-square" aria-hidden="true"></i> Tambah
                 </button>
             <?php endif; ?>
             <?php foreach ($forum as $itemforum) : ?>
                 <div class="row">
                     <div class="col-md-12">
                         <div class="card card-primary card-outline">
                             <div class="card-header">
                                 <?= $itemforum['nama']; ?>

                             </div>
                             <div class="card-body">
                                 <?= $itemforum['isi']; ?>

                             </div>
                             <div class="card-footer">
                                 <div class="d-flex justify-content-between">
                                     <div>
                                         <div class="btn-group mr-2" role="group" aria-label="First group">
                                             <button type="button" disabled class="btn btn-sm btn-danger"><?= count($itemforum['likes']) ?></button>
                                             <?php if (in_array($user['id_user'], $itemforum['likes'])) : ?>
                                                 <a href="<?= base_url('/peserta/likeForum/' . $itemforum['id'] . '/' . $user['id_user']) ?>" class="btn btn-sm btn-danger"><i class="fas fa-heart"></i></a>
                                             <?php else : ?>
                                                 <a href="<?= base_url('/peserta/likeForum/' . $itemforum['id'] . '/' . $user['id_user']) ?>" class="btn btn-sm btn-danger"><i class="far fa-heart"></i></a>
                                             <?php endif; ?>
                                         </div>
                                         <div class="btn-group mr-2" role="group" aria-label="First group">
                                             <button type="button" disabled class="btn btn-sm btn-success"><?= $itemforum['total_reply'] ?></button>
                                             <a href="<?= base_url('/peserta/forum/' . $rapat['id_rapat'] . '/' . $itemforum['id']) ?>" class="btn btn-sm btn-success"><i class="fas fa-reply"></i> Balasan </a>
                                         </div>
                                     </div>
                                     <div>
                                         <p class="font-italic"><?= date('d-m-Y H:i:s', strtotime($itemforum['waktu'])); ?></p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             <?php endforeach; ?>
         </div>
     </section>
 </div>