<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 style="color:MediumSeaGreen; font-family:timesnewrohman;">
            <?= $title; ?>
        </h1>
        <br><br>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('santri') ?>"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">Data Permintaan Surat</li>
        </ol>
    </section>

    <div class="row">
        <div class="col-sm-12">
            <div class="box box-success box-solid">
                <div class="with-border"></div>
                <!-- /.box-header -->
                <div class="box-body">
                    <!-- Main content -->
                    <section class="invoice">
                        <!-- title row -->
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="pull-left" style=" color:MediumSeaGreen; font-family:timesnewrohman;">Data Pengajuan Surat</h4>
                                        &emsp;&emsp;&emsp;
                                        <h2 class="page-header"></h2>
                                        <table class="table table-bordered">
                                            <tbody>
                                                <div class="box box-default collapsed-box box-solid">
                                                    <div class="box-header with-border">
                                                        <h5 class="box-title" style="color:blue; font-family:timesnewrohman;">Maaf, data saat ini belum ada</h5>
                                                    </div>
                                                </div>
                                            </tbody>
                                        </table>
                                        <a href="<?= base_url('santri/pengajuan_surat') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"> Tambah</i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </div>
</div>