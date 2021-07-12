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
             <li><a href="<?= base_url('data_absensi') ?>"> Absensi</a></li>
             <li class="active">Rekap Absensi</li>
         </ol>
     </section>

     <div class="row">
         <div class="col-sm-12">
             <div class="box box-gray box-solid">
                 <div class="box-header with-border">
                     <h3 class="box-title"><i class="fa  fa-table"></i></h3>
                 </div>
                 <div class="box-body">
                     <div class="table-responsive">
                         <table id="example1" class="table table-bordered table-striped">
                             <thead>
                                 <tr>
                                     <th class="text-center">NIS</th>
                                     <th class="text-center">Santri</th>
                                     <th class="text-center">Hadir</th>
                                     <th class="text-center">Izin</th>
                                     <th class="text-center">Sakit</th>
                                     <th class="text-center">Alfa</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php
                                    $koneksi = mysqli_connect("localhost", "root", "", "db_siakad_ppmalkautsar");

                                    $query = "SELECT s.NIS as NIS, s.nama_santri as nama_santri,

(SELECT COUNT(*) AS Hadir FROM tbl_absensi a WHERE 
keterangan='Hadir' AND a.id_santri=s.id_santri GROUP BY id_santri) AS Hadir, 

 (SELECT COUNT(*) AS Izin FROM tbl_absensi a WHERE 
keterangan='Izin' AND a.id_santri=s.id_santri GROUP BY id_santri) AS Izin, 

 (SELECT COUNT(*) AS Sakit FROM tbl_absensi a WHERE 
keterangan='Sakit' AND a.id_santri=s.id_santri GROUP BY id_santri) AS Sakit, 

 (SELECT COUNT(*) AS Alpha FROM tbl_absensi a WHERE 
keterangan='Alpha' AND a.id_santri=s.id_santri GROUP BY id_santri) AS Alpha

FROM tbl_santri s JOIN tbl_kelas k on s.id_kelas=k.id_kelas where kelas = 'Al-Sarii'";

                                    $result = mysqli_query($koneksi, $query);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>";
                                            echo "<td><center>" . $row['NIS'] . "</td>";
                                            echo "<td>" . $row['nama_santri'] . "</td>";
                                            echo "<td><center>" . $row['Hadir'] . "</td>";
                                            echo "<td><center>" . $row['Izin'] . "</td>";
                                            echo "<td><center>" . $row['Sakit'] . "</td>";
                                            echo "<td><center>" . $row['Alpha'] . "</td>";
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