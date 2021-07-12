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
        $koneksi = mysqli_connect("localhost", "root", "", "db_siakad_ppmalkautsar");
        ?>

     <!-- chart laporan -->
     <script>
         (jQuery);
         $(function() {
             //Laporan
             var data = [{
                 data: [
                     <?php
                        $jumlah_lakilaki = mysqli_query($koneksi, "select * from tbl_santri where jenis_kelamin='L'");
                        echo mysqli_num_rows($jumlah_lakilaki);
                        ?>,
                     <?php
                        $jumlah_perempuan = mysqli_query($koneksi, "select * from tbl_santri where jenis_kelamin='P'");
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
                 data: [
                     <?php
                        $jumlah_hadir = mysqli_query($koneksi, "select * from tbl_absensi where keterangan='Hadir'");
                        echo mysqli_num_rows($jumlah_hadir);
                        ?>,
                     <?php
                        $jumlah_alpha = mysqli_query($koneksi, "select * from tbl_absensi where keterangan='Alpha'");
                        echo mysqli_num_rows($jumlah_alpha);
                        ?>,
                     <?php
                        $jumlah_izin = mysqli_query($koneksi, "select * from tbl_absensi where keterangan='Izin'");
                        echo mysqli_num_rows($jumlah_izin);
                        ?>,
                     <?php
                        $jumlah_sakit = mysqli_query($koneksi, "select * from tbl_absensi where keterangan='Sakit'");
                        echo mysqli_num_rows($jumlah_sakit);
                        ?>
                 ],
                 backgroundColor: ['rgb(242, 28, 17)',
                     'rgb(250, 238, 12)',
                     'rgb(99, 250, 12)',
                     'rgb(80, 130, 56)',
                     'rgb(16, 40, 222)',
                     'rgb(227, 5, 123)',
                     'rgb(19, 203, 209)',
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

                     labels: ['Hadir', 'Alpha', 'Izin', 'Sakit'],
                     datasets: data
                 },
                 options: options
             });

         })
     </script>
 </body>