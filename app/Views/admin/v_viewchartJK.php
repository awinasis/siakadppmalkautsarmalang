<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= $title; ?>
        </h1>
        <br><br>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Data Santri PPM Al-Kautsar</li>
        </ol>
    </section>

    <div class="row">
        <div class="col-sm-12">
            <div class="box box-success box-solid">
                <div class="box-header with-border"></div>
                <!-- /.box-header -->
                <div class="box-body">

                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td>
                                        <table class="table table-striped">
                                            <?php
                                            $konek = mysqli_connect("localhost", "root", "", "db_siakad_ppmalkautsar");
                                            ?>
                                            <br><br>
                                            <table width="30%" border="2" align="center" cellpadding="3" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">No</th>
                                                        <th class="text-center">NIS</th>
                                                        <th class="text-center">Nama Santri</th>
                                                        <th class="text-center">Jenis Kelamin</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    $data = mysqli_query($konek, "SELECT * FROM tbl_santri WHERE jenis_kelamin='L'");
                                                    while ($dt = mysqli_fetch_array($data)) {
                                                    ?>
                                                        <tr>
                                                            <td class="text-center"><?php echo $no++; ?></td>
                                                            <td><?php echo $dt['NIS']; ?></td>
                                                            <td>
                                                                <?php
                                                                $data = mysqli_query($konek, "SELECT * FROM tbl_santri WHERE jenis_kelamin='Laki-Laki'");
                                                                while ($dt = mysqli_fetch_array($data)) {
                                                                ?>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        <?php } ?>
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