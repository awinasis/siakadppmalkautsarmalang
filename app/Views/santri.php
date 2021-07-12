        <!-- Main content -->

        <section class="invoice">
            <!-- title row -->
            <div class="row">
                <div class="col-xs-12">
                    <h4 class="pull-left" style=" color:MediumSeaGreen; font-family:timesnewrohman;"><i class="fa fa-list-alt"></i> Selamat Datang</h4>
                    &emsp;<h2 class="page-header">
                        <h2 style="font-family:timesnewrohman;"><i class="fa fa-bullhorn"></i>&nbsp; Pengumuman :</h2>
                </div>
            </div>
            <section class="content">
                <div>
                    <?php foreach ($pengumuman as $key => $value) { ?>
                        <?= $value['isi_pengumuman'] ?>
                    <?php } ?>
                </div>
            </section>
        </section>