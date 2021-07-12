 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <h4 style="color:MediumSeaGreen; font-family:timesnewrohman;">
             Tahun Ajaran : <b><?= $ta_aktif['tahun_akademik']; ?></b>| <?= $title; ?> : <b>Al-Sarii</b></h4>
         <br><br>
         <ol class=" breadcrumb">
             <li><a href="<?= base_url('guru') ?>"><i class="fa fa-home"></i> Home</a></li>
             <li class="active">Anggota Kelas</li>
         </ol>
     </section>

     <div class="row">
         <div class="col-sm-12">
             <div class="box box-success box-solid">
                 <div class="box-header with-border">
                     <h3 class="box-title"><i class="fa  fa-table"></i> Data <?= $title; ?></h3>
                 </div>
                 <div class="box-body">
                     <div class="table-responsive">
                         <table id="example1" class="table table-bordered table-striped">
                             <thead>
                                 <tr>
                                     <th class="text-center">No</th>
                                     <th class="text-center">NIS</th>
                                     <th class="text-center">Santri</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php
                                    $no = 1;
                                    $koneksi = mysqli_connect("localhost", "root", "", "db_siakad_ppmalkautsar");

                                    $query = "SELECT s.NIS as NIS, s.nama_santri as nama_santri FROM tbl_santri s JOIN tbl_kelas k on s.id_kelas=k.id_kelas where kelas='Al-Sarii'";

                                    $result = mysqli_query($koneksi, $query);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>";
                                            echo "<td><center>" . $no++ . "</td>";
                                            echo "<td><center>" . $row['NIS'] . "</td>";
                                            echo "<td>" . $row['nama_santri'] . "</td>";
                                        }
                                    }
                                    ?>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>