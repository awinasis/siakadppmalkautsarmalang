<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
    <ul class="nav navbar-nav">
        <?php

        use App\Controllers\Data_Pesan;
        use CodeIgniter\Session\Session;

        if (session()->get('level') == "Admin") { ?>
            <li><a href="<?= base_url('admin') ?>"><i class="fa fa-tachometer"></i> Dashboard</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Master <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="<?= base_url('pengumuman') ?>"><i class="fa fa-bullhorn"></i> Pengumuman</a></li>
                    <li><a href="<?= base_url('data_kelas') ?>"><i class="fa fa-institution"></i> Kelas</a></li>
                    <li><a href="<?= base_url('anggota_kelas') ?>"><i class="fa  fa-user-plus"></i> Anggota Kelas</a></li>
                    <li><a href="<?= base_url('data_materi') ?>"><i class="fa fa-book"></i> Materi</a></li>
                    <!-- <li><a href="<?= base_url('data_rps') ?>"><i class="fa fa-file-text"></i> Rencana Pembelajaran Semester (RPS)</a></li> -->
                    <li><a href="<?= base_url('data_pembayaran') ?>"><i class="fa fa-money"></i> Pembayaran</a></li>
                    <li><a href="<?= base_url('bio_guru') ?>"><i class="fa fa-user"></i> Dewan Guru</a></a></li>
                    <li><a href="<?= base_url('bio_santri') ?>"><i class="fa fa-users"></i> Santri</a></a></li>
                    <li><a href="<?= base_url('data_rapor') ?>"><i class="fa fa-archive"></i> Rapor</a></a></li>
                    <li><a href="<?= base_url('file_surat') ?>"><i class="fa fa-send"></i> Surat</a></a></li>
                    <li><a href="<?= base_url('data_pesan') ?>"><i class="fa fa-envelope"></i> Pesan</a></a></li>
                    <li><a href="<?= base_url('tahun_akademik') ?>"><i class="fa fa-calendar-o"></i> Tahun Akademik</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="<?= base_url('tahun_akademik/setting') ?>"><i class="fa fa-cog"></i> TA Management</a></li>
                    <li><a href="<?= base_url('data_user') ?>"><i class="fa fa-cogs"></i> User Management</a></li>
                </ul>
            </li>
            <!-- <li><a href="#"><i class="fa fa-info-circle"></i> About</a></li> -->
        <?php } elseif (session()->get('level') == "Guru") { ?>
            <!-----Menu Halaman Guru------>
            <li><a href="<?= base_url('guru') ?>"><i class="fa fa-home"></i> Beranda</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">General <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="<?= base_url('guru/biodata_guru') ?>"><i class="fa fa-user"></i> Biodata Guru</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Akademik <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="<?= base_url('bio_santri') ?>"><i class="fa fa-users"></i> Data Santri</a></li>
                    <li><a href="<?= base_url('data_kelas') ?>"><i class="fa fa-institution"></i> Kelas</a></li>
                    <li><a href="<?= base_url('anggota_kelas') ?>"><i class="fa  fa-user-plus"></i> Anggota Kelas</a></li>
                    <li><a href="<?= base_url('data_materi') ?>"><i class="fa fa-book"></i> Materi</a></li>
                    <li><a href="<?= base_url('data_absensi/detailAbsensi') ?>"><i class="fa  fa-pencil"></i> Absensi</a></li>
                    <li><a href="<?= base_url('data_rapor') ?>"><i class="fa fa-archive"></i> Rapor</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nilai <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="<?= base_url('data_nilai/index') ?>"><i class="fa fa-circle-o"></i> Materi Reguler</a></li>
                    <li><a href="<?= base_url('data_nilai/tampil_nilaiMateriHB') ?>"><i class="fa fa-circle-o"></i> Materi HB</a></li>
                    <li><a href="<?= base_url('data_nilai/konsepPraktikum') ?>"><i class="fa fa-circle-o"></i> Pemahaman Konsep & Praktikum</a></li>
                    <li><a href="<?= base_url('data_nilai/konsepPraktikum_HB') ?>"><i class="fa fa-circle-o"></i> Pemahaman Konsep & Praktikum HB</a></li>
                    <li><a href="<?= base_url('data_nilai/sikapPerilaku') ?>"><i class="fa fa-circle-o"></i> Sikap & Perilaku</a></li>
                    <li><a href="<?= base_url('data_nilai/limaSuksesSantri') ?>"><i class="fa fa-circle-o"></i> Lima Sukses Santri</a></li>
                    <li><a href="<?= base_url('data_nilai/ekstrakurikuler') ?>"><i class="fa fa-circle-o"></i> Kegiatan Ekstrakurikuler</a></li>
                    <li><a href="<?= base_url('data_nilai/prestasiKuliah') ?>"><i class="fa fa-circle-o"></i> Prestasi Kuliah</a></li>
                    <li><a href="<?= base_url('data_nilai/catatanSaranPengurus') ?>"><i class="fa fa-circle-o"></i> Catatan dan Saran Pengurus</a></li>
                </ul>
            </li>

        <?php } elseif (session()->get('level') == "Santri") { ?>
            <!-----Menu Halaman Santri------>
            <li><a href="<?= base_url('santri/index') ?>"><i class="fa fa-home"></i> Beranda</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">General <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="<?= base_url('santri/biodata_santri') ?>"><i class="fa fa-users"></i> Biodata Santri</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Akademik <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <!-- <li><a href="<?= base_url('santri/rps') ?>"><i class="fa fa-file-text"></i> Rencana Pembelajaran Semester (RPS)</a></li> -->
                    <li><a href="<?= base_url('santri/nilai_santri') ?>"><i class="fa fa-folder-open"></i> Nilai Santri</a></li>
                    <li><a href="<?= base_url('santri/request_surat') ?>"><i class="fa fa-envelope"></i> Pengajuan Surat</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pembayaran <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="<?= base_url('santri/pembayaran_ppm') ?>"><i class="fa fa-money"></i> Pembayaran PPM</a></li>
                </ul>
            </li>
        <?php } ?>
    </ul>
    &emsp;
    <?php if (session()->get('level') == "Santri") { ?>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-open"></i>
                        <!-- <span class="label label-success"><i class="fa fa-circle text-white"></i></span> -->
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <ul class="menu">
                                <!-- start message -->
                                <li>
                                    <a>
                                        <div align="center">
                                            <img src="<?= base_url('foto/' . session()->get('foto')) ?>" class=" img-circle" alt="User Image">
                                        </div>
                                    </a>
                                </li>
                                <!-- end message -->
                            </ul>
                        </li>
                        <li class="footer"><a href="<?= base_url('santri/pesan') ?>">See All Messages</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    <?php } ?>
</div>
<!-- /.navbar-collapse -->
<!-- Navbar Right Menu -->

<div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
        <?php if (session()->get('username') == "") { ?>
            <li><a href="<?= base_url('auth/index') ?>"><i class="fa fa-sign-in"></i> Login</a></li>
        <?php } else { ?>

            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <!-- The user image in the navbar-->
                    <img src="<?= base_url('foto/' . session()->get('foto')) ?>" class="user-image" alt="User Image">
                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                    <span class="hidden-xs"><?= session()->get('nama') ?></span>&emsp;<i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu">
                    <!-- The user image in the menu -->
                    <li class="user-header">
                        <img src="<?= base_url('foto/' . session()->get('foto')) ?>" class=" img-circle" alt="User Image">

                        <p>
                            <?php if (session()->get('level') == "Admin") {
                                echo session()->get('username');
                            } else if (session()->get('level') == "Guru") {
                                echo "Guru";
                            } else if (session()->get('level') == "Santri") {
                                echo session()->get('username');
                            } ?> /
                            <?= session()->get('nama')  ?>
                            <small><?= date('d M Y') ?></small>
                        </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <div class="pull-left">
                            <button type="button" class="btn btn-default btn-flat" data-toggle="modal" data-target="#detail"><i class="fa fa-address-book"></i> Profile</button>
                        </div>
                        <div class="pull-right">
                            <a href="<?= base_url('auth/logout') ?>" onclick="return confirm('Apakah anda yakin ingin keluar ?');" class="btn btn-default btn-flat"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </li>
                </ul>
            </li>
        <?php } ?>
    </ul>
</div>


<!-- /.navbar-custom-menu -->
</div>
<!-- /.container-fluid -->
</nav>
</header>

<!-- modal profile -->
<div class="modal fade" id="detail">
    <div class="modal-dialog modal-sm">
        <div class="modal-body">
            <div class="modal-content box box-success box-solid">
                <div class="modal-header box-header with-border">
                    <h4 class="modal-title"><i class="fa fa-newspaper-o"></i></h4>
                    <div class="box-body box-profile">
                        <img src="<?= base_url('foto/' . session()->get('foto')) ?>" class="profile-user-img img-responsive img-circle">
                        <h3 class="profile-username text-center"><?= session()->get('nama')  ?></h3>
                    </div>
                    <div class="tab-pane" id="timeline">
                        <!-- The timeline -->
                        <ul class="timeline timeline-inverse">
                            <li>
                                <i class="fa fa-user-circle bg-yellow"></i>
                                &emsp;&emsp;&emsp;&emsp;&nbsp;username :
                                <div class="timeline-item">
                                    <div class="timeline-body">
                                        <?= session()->get('username'); ?>
                                    </div>
                                </div>
                            </li>
                            <!-- END timeline item -->
                            <br>
                            <!-- timeline item -->
                            <li>
                                <i class="fa fa-key bg-blue"></i>
                                &emsp;&emsp;&emsp;&emsp;&nbsp;password :
                                <div class="timeline-item">
                                    <div class="timeline-body">
                                        <?= session()->get('password'); ?>
                                    </div>
                                </div>
                            </li>
                            <!-- END timeline item -->
                            <li>
                                <i class="fa fa-eject"></i>
                            </li>
                            <br>
                        </ul>
                        <div align="center">
                            <i class="fa fa-circle-o text-red"></i>
                            <i class="fa fa-circle-o text-red"></i>
                            <i class="fa fa-circle-o text-red"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Full Width Column -->
<div class="content-wrapper">
    <div class="container">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">