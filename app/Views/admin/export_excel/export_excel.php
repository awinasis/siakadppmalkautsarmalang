<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Santri.xls");
?>

<div class="row">
    <div class="col-sm-12">
        <div class="box box-success box-solid">
            <div class="box-header with-border"></div>
            <div class="box-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="50px" class="text-center">No</th>
                                <th class="text-center">NIS</th>
                                <th class="text-center">Nama Santri</th>
                                <th class="text-center">Tempat Lahir</th>
                                <th class="text-center">Tanggal Lahir</th>
                                <th class="text-center">Jenis Kelamin</th>
                                <th class="text-center">Gol. Darah</th>
                                <th class="text-center">Alamat</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">No.Telp</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Universitas</th>
                                <th class="text-center">Fakultas</th>
                                <th class="text-center">Jurusan/Prodi</th>
                                <th class="text-center">kelas Santri</th>
                                <th class="text-center">Angkatan Santri</th>
                                <th class="text-center">Nama Ayah</th>
                                <th class="text-center">Pekerjaan Ayah</th>
                                <th class="text-center">No.Telp Ayah</th>
                                <th class="text-center">Nama Ibu</th>
                                <th class="text-center">Pekerjaan Ibu</th>
                                <th class="text-center">No.Telp Ibu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($santri as $key => $value) { ?>
                                <tr>
                                    <td class="text-center"><?= $no++; ?></td>
                                    <td class="text-center"><?= $value['NIS'] ?></td>
                                    <td><?= $value['nama_santri'] ?></td>
                                    <td class="text-center"><?= $value['tempat_lahir'] ?></td>
                                    <td class="text-center"><?= $value['tanggal_lahir'] ?></td>
                                    <td class="text-center"><?= $value['jenis_kelamin'] ?></td>
                                    <td class="text-center"><?= $value['gol_darah'] ?></td>
                                    <td class="text-center"><?= $value['alamat'] ?></td>
                                    <td class="text-center"><?= $value['email'] ?></td>
                                    <td class="text-center"><?= $value['noTelp'] ?></td>
                                    <td class="text-center"><?= $value['status'] ?></td>
                                    <td class="text-center"><?= $value['universitas'] ?></td>
                                    <td class="text-center"><?= $value['fakultas'] ?></td>
                                    <td class="text-center"><?= $value['jurusan_prodi'] ?></td>
                                    <td class="text-center"><?= $value['kelas_santri'] ?></td>
                                    <td class="text-center"><?= $value['angkatan_santri'] ?></td>
                                    <td><?= $value['nama_ayah'] ?></td>
                                    <td class="text-center"><?= $value['pekerjaan_ayah'] ?></td>
                                    <td class="text-center"><?= $value['noTelp_ayah'] ?></td>
                                    <td><?= $value['nama_ibu'] ?></td>
                                    <td class="text-center"><?= $value['pekerjaan_ibu'] ?></td>
                                    <td class="text-center"><?= $value['noTelp_ibu'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>