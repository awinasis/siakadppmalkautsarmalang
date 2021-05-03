<!-- Chartjs JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/emn178/chartjs-plugin-labels/src/chartjs-plugin-labels.js"></script>

<!DOCTYPE html>
<html>

<head>
    <title>Jam (Aktif) With JavaScript</title>
</head>

<body>
    <div align="center">
        <!-- Menampilkan Hari, Bulan dan Tahun -->
        <script type='text/javascript'>
            var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
            var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
            var date = new Date();
            var day = date.getDate();
            var month = date.getMonth();
            var thisDay = date.getDay(),
                thisDay = myDays[thisDay];
            var yy = date.getYear();
            var year = (yy < 1000) ? yy + 1900 : yy;
            document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
        </script>

        <!-- Menampilkan Jam (Aktif) -->
        <div id="clock"></div>
        <script type="text/javascript">
            function showTime() {
                var a_p = "";
                var today = new Date();
                var curr_hour = today.getHours();
                var curr_minute = today.getMinutes();
                var curr_second = today.getSeconds();
                if (curr_hour < 12) {
                    a_p = "AM";
                } else {
                    a_p = "PM";
                }
                if (curr_hour == 0) {
                    curr_hour = 12;
                }
                if (curr_hour > 12) {
                    curr_hour = curr_hour - 12;
                }
                curr_hour = checkTime(curr_hour);
                curr_minute = checkTime(curr_minute);
                curr_second = checkTime(curr_second);
                document.getElementById('clock').innerHTML = curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
            }

            function checkTime(i) {
                if (i < 10) {
                    i = "0" + i;
                }
                return i;
            }
            setInterval(showTime, 500);
        </script>
    </div>
</body>

</html>

<br><br>
<!-- ./col -->
<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-purple">
            <div class="inner">
                <h3><?= $total_pengumuman ?></h3>

                <p>Pengumuman</p>
            </div>
            <div class="icon">
                <i class="fa fa-bullhorn"></i>
            </div>
            <a href="<?= base_url('pengumuman') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box  bg-aqua">
            <div class="inner">
                <h3><?= $total_santri ?></h3>

                <p>Santri</p>
            </div>
            <div class="icon">
                <i class="fa fa-mortar-board"></i>
            </div>
            <a href="<?= base_url('bio_santri') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3><?= $total_guru ?></h3>

                <p>Dewan Guru</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="<?= base_url('bio_guru') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <!-- <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-green">
            <div class="inner">
                <h3>#</h3>

                <p>Pembayaran</p>
            </div>
            <div class="icon">
                <i class="fa fa-money"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div> -->

    <!-- <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-red">
            <div class="inner">
                <h3>#</h3>

                <p>Kelas</p>
            </div>
            <div class="icon">
                <i class="fa fa-institution"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div> -->

    <!-- <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-grey">
            <div class="inner">
                <h3>#</h3>

                <p>Materi</p>
            </div>
            <div class="icon">
                <i class="fa fa-book"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div> -->

    <!-- <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-maroon">
            <div class="inner">
                <h3>#</h3>

                <p>Absensi</p>
            </div>
            <div class="icon">
                <i class="fa fa-pencil"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div> -->

    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-fuchsia">
            <div class="inner">
                <h3><?= $total_user ?></h3>

                <p>User Management</p>
            </div>
            <div class="icon">
                <i class="fa fa-cogs"></i>
            </div>
            <a href="<?= base_url('data_user') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->

    <div class="row">
        <div class="col-sm-6">
            <div class="box box-primary box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Data Santri PPM Al-kautsar</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="chart-responsive">
                                <table class="table table-striped">
                                    <div>
                                        <canvas id="doughnut-chart-santri" height="180"></canvas>
                                    </div>
                                </table>
                            </div>
                            <!-- ./chart-responsive -->
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer no-padding">
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="<?= base_url('admin/viewchartJK/') ?>">Laki-Laki <span class="pull-right text-blue"><i class="fa fa-info-circle fa-2x"></i></span></a></li>
                        <li><a href="<?= base_url('') ?>">Perempuan <span class="pull-right text-blue"><i class="fa fa-info-circle fa-2x"></i></span></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="box box-primary box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Data </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="chart-responsive">
                                <table class="table table-striped">
                                    <div>
                                        <canvas id="line-chart" height="180"></canvas>
                                    </div>
                                </table>
                            </div>
                            <!-- ./chart-responsive -->
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>