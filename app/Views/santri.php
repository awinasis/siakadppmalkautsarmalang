        <!-- Main content -->
        <section class="invoice">
            <!-- title row -->
            <div class="row">
                <div class="col-xs-12">
                    <h4 class="pull-left" style=" color:MediumSeaGreen; font-family:timesnewrohman;"><i class="fa fa-list-alt"></i> Selamat Datang</h4>

                    &emsp;<h2 class="page-header">
                        <h2 style="font-family:timesnewrohman;"><i class="fa fa-bullhorn"></i>&nbsp; Pengumuman :</h2>
                    </h2>
                    <table class="table table-bordered">
                        <tbody>
                            <?php $no = 1;
                            foreach ($pengumuman as $key => $value) { ?>
                                <tr>
                                    <th width="100px">Judul</th>
                                    <th width="30px">:</th>
                                    <td><?= $value['judul_pengumuman'] ?></td>
                                    <th width="120px">Deskripsi</th>
                                    <th width="30px">:</th>
                                    <td><?= $value['isi_pengumuman'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>