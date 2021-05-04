<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <h1>
             <?= $title; ?>
         </h1>
         <br><br>
         <ol class="breadcrumb">
             <!-- <li><a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li> -->
             <!-- <li class="active">Data Pembayaran</li> -->
         </ol>
     </section>

     <div class="row">
         <div class="col-sm-12">
             <div class="box box-success box-solid">
                 <div class="box-header with-border">
                     <h3 class="box-title"> Data <?= $title; ?></h3>

                     <!-- <div class="box-tools pull-right">
                         <button type="button" class="btn btn-box-tool" data-toggle="modal" data-target="#add"><i class="fa fa-plus"> Tambah</i></button>
                     </div> -->
                     <!-- /.box-tools -->
                 </div>
                 <!-- /.box-header -->
                 <div class="box-body">
                     <!-- <?php
                        if (session()->getFlashdata('pesan')) {
                            echo '<div class="alert alert-success" role="alert">';
                            echo session()->getFlashdata('pesan');
                            echo '</div>';
                        }
                        ?> -->
                     <div class="table-responsive">
                         <table id="example1" class="table table-bordered table-striped">
                             <thead>
                                 <tr>
                                     <th width="50px" class="text-center">No</th>
                                     <th class="text-center">NIS</th>
                                     <th class="text-center">Nama Santri</th>
                                     <th class="text-center">Periode Pembayaran</th>
                                     <th class="text-center">Keterangan</th>
                                     <th class="text-center">Tagihan</th>
                                     <th class="text-center">Terbayar</th>
                                     <th class="text-center">Status</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php $no = 1;
                                    foreach ($pembayaran as $key => $value) { ?>
                                     <tr>
                                         <td class="text-center"><?= $no++; ?></td>
                                         <td><?= $value['NIS'] ?></td>
                                         <td><?= $value['nama_santri'] ?></td>
                                         <td class="text-center"><?= $value['periode_pembayaran'] ?></td>
                                         <td><?= $value['keterangan'] ?></td>
                                         <td class="text-center"><?= $value['tagihan'] ?></td>
                                         <td class="text-center"><?= $value['terbayar'] ?></td>
                                         <td><?= $value['status'] ?></td>
                                         <td class="text-center">
                                             <!-- <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?= $value['id_pembayaran'] ?>"><i class="fa fa-edit"></i></button>
                                             <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value['id_pembayaran'] ?>"><i class="fa fa-trash"></i></button> -->
                                         </td>
                                     </tr>
                                 <?php } ?>
                             </tbody>
                         </table>
                     </div>
                 </div>
                 <!-- /.box-body -->
             </div>
             <!-- /.box -->
         </div>
     </div>