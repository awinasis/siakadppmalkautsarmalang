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
            <li><a href="<?= base_url('data_absensi') ?>">Data Absensi</a></li>
            <li class="active">View Chart</li>
        </ol>
    </section>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mengenal Tabel HTML</title>
        <style>
            section.invoice {
                width: 210mm;
                /* height: 247mm; */
                margin-right: auto;
                margin-left: auto;
            }

            @media print {

                .btn,
                .page-header,
                .header,
                footer {
                    display: none;
                }
            }

            tr:hover {
                background-color: #f5f5f5;
            }
        </style>
    </head>

    </html>

    <div class="text-left">
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <button onclick="window.print()" class="btn btn-warning" class="pull-right"><i class="fa fa-print"></i>&nbsp;Cetak</button>
    </div>
    <section class="invoice">
        <!-- title row -->
        <div class="row">
            <div class="col-xs-12">
                <div class="row">
                    <div class="col-sm-6">
                        <table class="table table-bordered">
                            <tr>
                                <td width="100px">Tahun Akademik :</td>
                                <td width="30px">:</td>
                                <td><?= $ta_aktif['tahun_akademik']; ?></td>
                            </tr>
                            <tr>
                                <td width="100px">NIS</td>
                                <td width="30px">:</td>
                                <td><?= $absensi['NIS']; ?></td>
                            </tr>

                            <tr>
                                <td width="100px">Nama Santri</td>
                                <td width="30px">:</td>
                                <td><?= $absensi['nama_santri']; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <br>
                <table class="table table-bordered">
                    <h4 style="color:black; font-family:timesnewrohman;">
                        Presentase Kehadiran KBM Santri PPM Al-Kautsar, <b>Bulan :</b>
                        <?php $bulan = array(
                            '01' => 'JANUARI',
                            '02' => 'FEBRUARI',
                            '03' => 'MARET',
                            '04' => 'APRIL',
                            '05' => 'MEI',
                            '06' => 'JUNI',
                            '07' => 'JULI',
                            '08' => 'AGUSTUS',
                            '09' => 'SEPTEMBER',
                            '10' => 'OKTOBER',
                            '11' => 'NOVEMBER',
                            '12' => 'DESEMBER',
                        );
                        ?>
                        <b><?php echo $bulan[date('m')] ?></b>
                        <b>
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                        </b>
                    </h4>
                    <div>
                        <canvas id="pie-chart-chart" height="130"></canvas>
                    </div>
                    <?php
                    $konek = mysqli_connect("localhost", "root", "", "db_siakad_ppmalkautsar");
                    ?>
                    <table width="50%" border="2" align="center" cellpadding="3" cellspacing="0">
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
                            $data = mysqli_query($konek, "select keterangan, COUNT(*) as jumlah_kehadiran from tbl_kehadiran GROUP BY keterangan DESC");
                            while ($d = mysqli_fetch_array($data)) { ?>
                                <tr>
                                    <td class="text-center"><?php echo $no++; ?></td>
                                    <td>&emsp;&emsp;<?php echo $d['keterangan']; ?></td>
                                    <td class="text-center"><?php echo $d['jumlah_kehadiran']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </table>
            </div>
        </div>
    </section>
</div>