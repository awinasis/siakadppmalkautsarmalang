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
            <li class="active">Nilai Santri</li>
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
                                        <h4 class="pull-left" style=" color:MediumSeaGreen; font-family:timesnewrohman;">Data Transkrip Nilai</h4>
                                        &emsp;&emsp;&emsp;
                                        <h2 class="page-header"></h2>
                                        <table class="table table-bordered">
                                            <tbody>
                                                <form method="POST" action="">
                                                    <div class="row mb-3">
                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <select name="nilai" id="nilai" class="form-control">
                                                                    <option value=""></option>
                                                                    <option value=""></option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <select name="nilai" id="nilai" class="form-control">
                                                                    <option value=""></option>
                                                                    <option value=""></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <button id="search" name="search" class="btn btn-warning">Tampilkan</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </tbody>
                                        </table>
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