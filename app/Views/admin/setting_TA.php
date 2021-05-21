 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <h1 style="color:MediumSeaGreen; font-family:timesnewrohman;">
             Setting <?= $title; ?>
         </h1>
         <br><br>
         <ol class="breadcrumb">
             <li><a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
             <li class="active">Tahun Akademik</li>
         </ol>
     </section>

     <div class="row">
         <div class="col-sm-12">
             <div class="box box-success box-solid">
                 <div class="box-header with-border">
                     <h3 class="box-title"><i class="fa  fa-table"></i> Data <?= $title; ?></h3>
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
                                     <th class="text-center">Tahun Akademik</th>
                                     <th class="text-center">Status</th>
                                     <th width="150px" class="text-center">Action</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php $no = 1;
                                    foreach ($ta as $key => $value) { ?>
                                     <tr>
                                         <td class="text-center"><?= $no++; ?></td>
                                         <td class="text-center"><?= $value['tahun_akademik'] ?></td>
                                         <td class="text-center">
                                             <?php if ($value['status_ta'] == 0) {
                                                    echo '<p class="label text-center bg-red"><i class="fa fa-times-circle"></i>&ensp;Non-Aktif</p>';
                                                } else {
                                                    echo '<p class="label text-center bg-green">Aktif</p>';
                                                } ?>
                                         </td>
                                         <td class="text-center">
                                             <?php if ($value['status_ta'] == 0) { ?>
                                                 <a href="<?= base_url('tahun_akademik/set_status_ta/' . $value['id_ta']) ?>" class="btn btn-success btn-sm"><i class="fa fa-check-square"></i>&ensp;Aktifkan</a>
                                             <?php } ?>
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
 </div>