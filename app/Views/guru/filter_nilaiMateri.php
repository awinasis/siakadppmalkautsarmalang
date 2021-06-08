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