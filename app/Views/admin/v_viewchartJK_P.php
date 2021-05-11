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
            <li class="active">Data Santri PPM Al-Kautsar</li>
        </ol>
    </section>

    <section class="invoice">
        <!-- title row -->
        <div class="row">
            <div class="col-xs-12">
                <h4 class="pull-left" style=" color:MediumSeaGreen; font-family:timesnewrohman;"><i class="fa fa-list-alt"></i> Data Santri <b style="color:Black;">JK : Perempuan</b></h4>
                &emsp;<h2 class="page-header"></h2>
                <table class="table table-bordered">
                    <!-- <div>
                        <canvas id="doughnut-chart-santri" height="180"></canvas>
                    </div> -->
                    <?php
                    $konek = mysqli_connect("localhost", "root", "", "db_siakad_ppmalkautsar");
                    ?>
                    &emsp;
                    <table width="70%" border="2" align="center" cellpadding="5" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">NIS</th>
                                <th class="text-center">Nama Santri</th>
                                <th class="text-center">L/P</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $jumlah = null;
                            $data = mysqli_query($konek, "SELECT * FROM tbl_santri WHERE jenis_kelamin='P'");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>
                                <tr>
                                    <td class="text-center"><?php echo $no++; ?></td>
                                    <td class="text-center"><?php echo $d['NIS']; ?></td>
                                    <td>&emsp;<?php echo $d['nama_santri']; ?></td>
                                    <td class="text-center"><?php echo $d['jenis_kelamin'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </table>
            </div>
        </div>
    </section>