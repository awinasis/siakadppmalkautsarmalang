<!-- Chartjs JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/emn178/chartjs-plugin-labels/src/chartjs-plugin-labels.js"></script>

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
            <li><a href="<?= base_url('data_absensi') ?>">Rekap Absensi</a></li>
            <li class="active">View Chart</li>
        </ol>
    </section>

    <div class="row">
        <div class="col-sm-12">
            <div class="box box-success box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa  fa-pie-chart"></i> Chart</h3>
                    <div class="box-tools pull-right">
                        <button onclick="window.print()" class="btn btn-warning"><i class="fa fa-print"></i></button>
                        <!-- <button class="btn btn-danger"><i class="fa fa-download"></i></button> -->
                    </div>
                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <?php
                    if (session()->getFlashdata('pesan')) {
                        echo '<div class="alert alert-success" role="alert">';
                        echo session()->getFlashdata('pesan');
                        echo '</div>';
                    }
                    ?>

                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <thead class="box box-success">
                                <tr>
                                    <th class="text-center">Laporan Prosentase kehadiran KBM Santri dalam 1 bulan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <table class="table table-striped">
                                            <div>
                                                <canvas id="pie-chart-chart" height="90"></canvas>
                                            </div>
                                            <?php
                                            $konek = mysqli_connect("localhost", "root", "", "db_siakad_ppmalkautsar");
                                            ?>
                                            <br><br>
                                            <table width="30%" border="2" align="center" cellpadding="3" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">No</th>
                                                        <th class="text-center">Keterangan</th>
                                                        <th class="text-center">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    $jumlah = null;
                                                    $data = mysqli_query($konek, "select keterangan, COUNT(*) as jumlah_kehadiran from tbl_chart GROUP BY keterangan DESC");
                                                    while ($d = mysqli_fetch_array($data)) {
                                                    ?>
                                                        <tr>
                                                            <td class="text-center"><?php echo $no++; ?></td>
                                                            <td><?php echo $d['keterangan']; ?></td>
                                                            <td class="text-center"><?php echo $d['jumlah_kehadiran']; ?></td>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>