 </section>
 <!-- /.content -->
 </div>
 <!-- /.container -->
 </div>
 <!-- /.content-wrapper -->
 <footer class="main-footer">
     <div class="container">
         <strong>Copyright &copy; <script>
                 document.write(new Date().getFullYear())
             </script> <a href="#">SIAKAD PPM Al-Kautsar Malang</a>.</strong> All rights
         reserved.
     </div>
     <!-- /.container -->
 </footer>
 </div>
 <!-- ./wrapper -->

 <!-- jQuery 3 -->
 <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
 <!-- Bootstrap 3.3.7 -->
 <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
 <!-- SlimScroll -->
 <script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
 <!-- FastClick -->
 <script src="../../bower_components/fastclick/lib/fastclick.js"></script>
 <!-- AdminLTE App -->
 <script src="../../dist/js/adminlte.min.js"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="../../dist/js/demo.js"></script>
 </body>

 </html>

 <!-- jQuery 3 -->
 <script src="<?= base_url() ?> /template/bower_components/jquery/dist/jquery.min.js"></script>
 <!-- Bootstrap 3.3.7 -->
 <script src="<?= base_url() ?> /template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
 <!-- DataTables -->
 <script src="<?= base_url() ?> /template/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
 <script src="<?= base_url() ?> /template/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
 <!-- SlimScroll -->
 <script src="<?= base_url() ?> /template/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
 <!-- FastClick -->
 <script src="<?= base_url() ?> /template/bower_components/fastclick/lib/fastclick.js"></script>
 <!-- AdminLTE App -->
 <script src="<?= base_url() ?> /template/dist/js/adminlte.min.js"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="<?= base_url() ?> /template/dist/js/demo.js"></script>
 <!-- page script -->
 <script>
     $(function() {
         $('#example1').DataTable()
         $('#example2').DataTable({
             'paging': true,
             'lengthChange': false,
             'searching': false,
             'ordering': true,
             'info': true,
             'autoWidth': false
         })
     })
 </script>
 <script>
     window.setTimeout(function() {
         $(".alert").fadeTo(500, 0).slideUp(500, function() {
             $(this).remove();
         });
     }, 3000);
 </script>

 <!-- Chartjs JavaScript -->
 <script src="<?= base_url() ?>https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
 <script src="<?= base_url() ?>https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="<?= base_url() ?>https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
 <script src="<?= base_url() ?>https://cdn.jsdelivr.net/gh/emn178/chartjs-plugin-labels/src/chartjs-plugin-labels.js"></script>

 <body>
     <?php
        $konek = mysqli_connect("localhost", "root", "", "db_siakad_ppmalkautsar");
        ?>

     <!-- chart laporan -->
     <script>
         (jQuery);
         $(function() {
             //Laporan absensi
             var data = [{
                 data: [
                     <?php
                        $jumlah_hadir = mysqli_query($konek, "select * from tbl_chart where keterangan='hadir'");
                        echo mysqli_num_rows($jumlah_hadir);
                        ?>,
                     <?php
                        $jumlah_alpha = mysqli_query($konek, "select * from tbl_chart where keterangan='alpha'");
                        echo mysqli_num_rows($jumlah_alpha);
                        ?>,
                     <?php
                        $jumlah_belajar = mysqli_query($konek, "select * from tbl_chart where keterangan='belajar'");
                        echo mysqli_num_rows($jumlah_belajar);
                        ?>,
                     <?php
                        $jumlah_izin = mysqli_query($konek, "select * from tbl_chart where keterangan='izin'");
                        echo mysqli_num_rows($jumlah_izin);
                        ?>,
                     <?php
                        $jumlah_izinTerlambat = mysqli_query($konek, "select * from tbl_chart where keterangan='izin terlambat'");
                        echo mysqli_num_rows($jumlah_izinTerlambat);
                        ?>,
                     <?php
                        $jumlah_nugas = mysqli_query($konek, "select * from tbl_chart where keterangan='nugas'");
                        echo mysqli_num_rows($jumlah_nugas);
                        ?>,
                     <?php
                        $jumlah_sakit = mysqli_query($konek, "select * from tbl_chart where keterangan='sakit'");
                        echo mysqli_num_rows($jumlah_sakit);
                        ?>,
                     <?php
                        $jumlah_terlambat = mysqli_query($konek, "select * from tbl_chart where keterangan='terlambat'");
                        echo mysqli_num_rows($jumlah_terlambat);
                        ?>
                 ],
                 backgroundColor: ['rgb(242, 28, 17)',
                     'rgb(250, 238, 12)',
                     'rgb(99, 250, 12)',
                     'rgb(16, 40, 222)',
                     'rgb(227, 5, 123)',
                     'rgb(19, 203, 209)',
                     'rgb(129, 132, 133)',
                 ],
                 borderColor: "#fff"
             }];

             var options = {
                 tooltips: {
                     enabled: true
                 },
                 options: {
                     responsive: true,
                     maintainAspectRatio: true,
                     plugins: {
                         labels: {
                             render: 'percentage',
                             precision: 2
                         }
                     },
                 }
             };

             var ctx = document.getElementById("pie-chart-chart").getContext('2d');
             var myChart = new Chart(ctx, {
                 type: 'pie',
                 data: {
                     labels: ['Hadir', 'Alpha', 'Belajar', 'Izin', 'Izin Terlambat', 'Nugas', 'Sakit', 'Terlambat'],
                     datasets: data
                 },
                 options: options
             });

         })
     </script>

     <script>
         (jQuery);
         $(function() {
             //Laporan
             var data = [{
                 data: [
                     <?php
                        $jumlah_lakilaki = mysqli_query($konek, "select * from tbl_santri where jenis_kelamin='L'");
                        echo mysqli_num_rows($jumlah_lakilaki);
                        ?>,
                     <?php
                        $jumlah_perempuan = mysqli_query($konek, "select * from tbl_santri where jenis_kelamin='P'");
                        echo mysqli_num_rows($jumlah_perempuan);
                        ?>,
                 ],

                 backgroundColor: ['rgb(242, 28, 17)',
                     'rgb(250, 238, 12)',
                 ],
                 borderColor: "#fff"
             }];

             var options = {
                 tooltips: {
                     enabled: true
                 },
                 options: {
                     responsive: true,
                     maintainAspectRatio: true,
                     plugins: {
                         labels: {
                             render: 'percentage',
                             precision: 2
                         }
                     },
                 }
             };
             var ctx = document.getElementById("doughnut-chart-santri").getContext('2d');
             var myDoughnutChart = new Chart(ctx, {
                 type: 'doughnut',
                 data: {
                     labels: ['L', 'P'],
                     datasets: data
                 },
                 options: options
             });
         });
     </script>

     <script>
         (jQuery);
         $(function() {
             //Laporan absensi
             var data = [{
                 data: [],
                 backgroundColor: ['rgb(242, 28, 17)',
                     'rgb(250, 238, 12)',
                     'rgb(99, 250, 12)',
                     'rgb(16, 40, 222)',
                     'rgb(227, 5, 123)',
                     'rgb(19, 203, 209)',
                     'rgb(129, 132, 133)',
                 ],
                 borderColor: "#fff"
             }];

             var options = {
                 tooltips: {
                     enabled: true
                 },
                 options: {
                     responsive: true,
                     maintainAspectRatio: true,
                     plugins: {
                         labels: {
                             render: 'percentage',
                             precision: 2
                         }
                     },
                 }
             };

             var ctx = document.getElementById("line-chart").getContext('2d');
             var myChart = new Chart(ctx, {
                 type: 'line',
                 data: {
                     labels: ['A', 'B', 'C', 'D', 'F', 'G', 'H'],
                     datasets: data
                 },
                 options: options
             });

         })
     </script>
 </body>