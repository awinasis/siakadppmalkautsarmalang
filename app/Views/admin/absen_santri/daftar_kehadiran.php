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
            <li class="active">Draft Kehadiran</li>
        </ol>
    </section>

    <div class="row">
        <div class="col-sm-12">
            <div class="box box-success box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa  fa-table"></i> Data <?= $title; ?></h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-toggle="modal" data-target="#add"><i class="fa fa-plus"> Tambah</i></button>
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
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="50px" class="text-center">No</th>
                                    <th class="text-center">NIS</th>
                                    <th class="text-center">Nama Santri</th>
                                    <th class="text-center">Keterangan</th>
                                    <th class="text-center">Sesi Pengajian</th>
                                    <th class="text-center">Kelas</th>
                                    <th class="text-center">Tanggal</th>
                                    <th width="150px" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($draft as $key => $value) { ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td class="text-center"><?= $value['NIS'] ?></td>
                                        <td><?= $value['nama_santri'] ?></td>
                                        <td class="text-center"><?= $value['keterangan']; ?></td>
                                        <td class="text-center"><?= $value['sesi_pengajian']; ?></td>
                                        <td class="text-center"><?= $value['kelas']; ?></td>
                                        <td class="text-center"><?= $value['tanggal']; ?></td>

                                        <td class="text-center">
                                            <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?= $value['id_kehadiran'] ?>"><i class="fa fa-edit"></i></button>
                                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value['id_kehadiran'] ?>"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal add -->
    <div class="modal fade" id="add">
        <div class="modal-dialog">
            <div class="modal-content box box-success box-solid">
                <div class="modal-header box-header with-border">
                    <h4 class="modal-title">Tambah Absensi</h4>
                </div>

                <div class="modal-body">
                    <?php
                    echo form_open_multipart('data_absensi/add_draft');
                    ?>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>NIS :</label>
                            <input name="NIS" id="NIS" type="number" class="form-control" placeholder="NIS" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Nama Santri :</label>
                        <input name="nama_santri" id="nama_santri" class="form-control" placeholder="nama santri" required>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-4">
                            <label>keterangan :</label>
                            <select name="keterangan" id="keterangan" class="form-control" placeholder="keterangan" required>
                                <option value="">-- Pilih --</option>
                                <option value="Hadir">Hadir</option>
                                <option value="Alpha">Alpha</option>
                                <option value="Belajar">Belajar</option>
                                <option value="Izin">Izin</option>
                                <option value="IzinTerlambat">Izin Terlambat</option>
                                <option value="Jaga">Jaga</option>
                                <option value="Kuliah">Kuliah</option>
                                <option value="Nugas">Nugas</option>
                                <option value="Sakit">Sakit</option>
                                <option value="Terlambat">Terlambat</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label>Sesi Pengajian :</label>
                        <div class="form-group">
                            <input type="radio" name="sesi_pengajian" id="sesi_pengajian" value="Shubuh" required> Shubuh
                            <br>
                            <input type="radio" name="sesi_pengajian" id="sesi_pengajian" value="Malam" required> Malam
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-8">
                            <label class="form-control-label">kelas</label>
                            <select name="kelas" class="form-control" id="kelas" required>
                                <option value="">- Pilih -</option>
                                <option value="Qiraah">Qiraah</option>
                                <option value="kitabah">kitabah</option>
                                <option value="Al-Taannii">Al-Taannii</option>
                                <option value="Al-Sarii">Al-Sarii</option>
                                <option value="Reguler">Reguler</option>
                                <option value="Al-Idlofi">Al-Idlofi</option>
                                <option value="Hadits Besar">Hadits Besar</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-8">
                            <label>Tanggal :</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>

    <!-- modal edit -->
    <?php foreach ($draft as $key => $value) { ?>
        <div class="modal fade" id="edit<?= $value['id_kehadiran'] ?>">
            <div class="modal-dialog">
                <div class="modal-content box box-success box-solid">
                    <div class="modal-header box-header with-border">
                        <h4 class="modal-title">Edit Absensi</h4>
                    </div>

                    <div class="modal-body">
                        <?php
                        echo form_open('data_absensi/edit_draft/' . $value['id_kehadiran']);
                        ?>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>NIS :</label>
                                <input name="NIS" id="NIS" type="number" class="form-control" value="<?= $value['NIS'] ?>" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Nama Santri :</label>
                            <input name="nama_santri" id="nama_santri" class="form-control" value="<?= $value['nama_santri'] ?>" readonly>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-4">
                                <label>keterangan :</label>
                                <select name="keterangan" id="keterangan" class="form-control" placeholder="keterangan" required>
                                    <option value="Hadir" <?= $value['keterangan'] == "Hadir" ? "selected" : ""; ?>>Hadir</option>
                                    <option value="Alpha" <?= $value['keterangan'] == "Alpha" ? "selected" : ""; ?>>Alpha</option>
                                    <option value="Belajar" <?= $value['keterangan'] == "Belajar" ? "selected" : ""; ?>>Belajar</option>
                                    <option value="Izin" <?= $value['keterangan'] == "Izin" ? "selected" : ""; ?>>Izin</option>
                                    <option value="IzinTerlambat" <?= $value['keterangan'] == "IzinTerlambat" ? "selected" : ""; ?>>Izin Terlambat</option>
                                    <option value="Jaga" <?= $value['keterangan'] == "Jaga" ? "selected" : ""; ?>>Jaga</option>
                                    <option value="Kuliah" <?= $value['keterangan'] == "Kuliah" ? "selected" : ""; ?>>Kuliah</option>
                                    <option value="Nugas" <?= $value['keterangan'] == "Nugas" ? "selected" : ""; ?>>Nugas</option>
                                    <option value="Sakit" <?= $value['keterangan'] == "Sakit" ? "selected" : ""; ?>>Sakit</option>
                                    <option value="Terlambat" <?= $value['keterangan'] == "Terlambat" ? "selected" : ""; ?>>Terlambat</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label>Sesi Pengajian :</label>
                            <div class="form-group">
                                <input type="radio" name="sesi_pengajian" id="sesi_pengajian" value="Shubuh" <?= $value['sesi_pengajian'] == "Shubuh" ? "checked" : ""; ?>> Shubuh
                                <br>
                                <input type="radio" name="sesi_pengajian" id="sesi_pengajian" value="Malam" <?= $value['sesi_pengajian'] == "Malam" ? "checked" : ""; ?>> Malam
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-8">
                                <label class="form-control-label">kelas</label>
                                <select name="kelas" class="form-control" id="kelas">
                                    <option value="Qiraah" <?= $value['kelas'] == "Qiraah" ? "selected" : ""; ?>>Qiraah</option>
                                    <option value="kitabah" <?= $value['kelas'] == "kitabah" ? "selected" : ""; ?>>kitabah</option>
                                    <option value="Al-Taannii" <?= $value['kelas'] == "Al-Taannii" ? "selected" : ""; ?>>Al-Taannii</option>
                                    <option value="Al-Sarii" <?= $value['kelas'] == "Al-Sarii" ? "selected" : ""; ?>>Al-Sarii</option>
                                    <option value="Reguler" <?= $value['kelas'] == "Reguler" ? "selected" : ""; ?>>Reguler</option>
                                    <option value="Al-Idlofi" <?= $value['kelas'] == "Al-Idlofi" ? "selected" : ""; ?>>Al-Idlofi</option>
                                    <option value="Hadits Besar" <?= $value['kelas'] == "Hadits Besar" ? "selected" : ""; ?>>Hadits Besar</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-8">
                                <label>Tanggal :</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $value['tanggal'] ?>">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary pull-right">Simpan</button>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

    <!-- modal delete -->
    <?php foreach ($draft as $key => $value) { ?>
        <div class="modal fade" id="delete<?= $value['id_kehadiran'] ?>">
            <div class="modal-dialog">
                <div class="modal-content box box-success box-solid">
                    <div class="modal-header box-header with-border">
                        <h4 class="modal-title">Delete Draft Kehadiran</h4>
                    </div>

                    <div class="modal-body">
                        Apakah anda yakin ingin menghapus <b><?= $title; ?>&nbsp;Sesi Pengajian&nbsp;<?= $value['sesi_pengajian']; ?>&nbsp;<?= $value['nama_santri'] ?> ?</b>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                        <a href="<?= base_url('data_absensi/delete_draft/' . $value['id_kehadiran']) ?>" class="btn btn-primary">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>