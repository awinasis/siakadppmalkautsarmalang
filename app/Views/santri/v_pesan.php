         <!-- Content Header (Page header) -->
         <section class="content-header">
             <h1 style="color:MediumSeaGreen; font-family:timesnewrohman;">
                 <?= $title; ?>
             </h1>
             <br><br>
             <ol class="breadcrumb">
                 <li><a href="<?= base_url('santri') ?>"><i class="fa fa-home"></i> Home</a></li>
                 <li class="active">Message</li>
             </ol>
         </section>

         <!-- Main content -->
         <section class="invoice">
             <!-- title row -->
             <div class="row">
                 <div class="col-xs-12">
                     <h4 class="pull-left" style=" color:MediumSeaGreen; font-family:timesnewrohman;"><i class="fa fa-comments"></i> Message</h4>
                     &emsp;<h2 class="page-header"></h2>
                     <table class="table table-bordered">
                         <tbody>
                             <?php $no = 1;
                                foreach ($pesan as $key => $value) { ?>
                                 <tr>
                                     <td><?= $value['pesan'] ?></td>
                                 </tr>
                             <?php } ?>
                         </tbody>
                     </table>
                 </div>
             </div>
         </section>