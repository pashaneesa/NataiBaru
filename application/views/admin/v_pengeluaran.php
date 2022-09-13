<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>PT. HMBP Natai Baru</title>
        <link rel="short icon" href="<?php echo base_url().'assets/img/logo2.png'?>" type="image/png" />

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url().'assets2/css/bootstrap.min.css'?>" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?php echo base_url().'assets2/css/metisMenu.min.css'?>" rel="stylesheet">

        <!-- DataTables CSS -->
        <link href="<?php echo base_url().'assets2/css/dataTables/dataTables.bootstrap.css'?>" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="<?php echo base_url().'assets2/css/dataTables/dataTables.responsive.css'?>" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo base_url().'assets2/css/startmin.css'?>" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo base_url().'assets2/css/font-awesome.min.css'?>" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo base_url().'welcome'?>">PT. HMBP Natai Baru</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> Admin <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="<?php echo base_url().'welcome/profil'?>"><i class="fa fa-user fa-fw"></i> Profil</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url().'administrator/logout'?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <img style="margin-left:auto;margin-right:auto;display:block;width:50px;" src="<?php echo base_url().'assets/img/logo2.png'?>" alt="gambar"/>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="<?php echo base_url().'welcome'?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                             <li>
                                <a href="<?php echo base_url().'admin/barang'?>"><i class="fa fa-cubes fa-fw"></i> Stok Barang</a>
                            </li>
                             <li>
                                <a href="<?php echo base_url().'admin/suplier'?>"><i class="fa fa-truck fa-fw"></i> Supplier</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-shopping-cart fa-fw"></i> Transaksi<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?php echo base_url().'admin/pembelian'?>">Penerimaan Barang</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url().'admin/pengeluaran'?>">Pengeluaran Barang</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Laporan<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                  <li>
                                        <a href="<?php echo base_url().'admin/lapbarang'?>">Stok Barang</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url().'admin/lapterima'?>">Penerimaan Barang</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url().'admin/lapkeluar'?>">Pengeluaran Barang</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                           
                        </ul>
                    </div>
                </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                             <img  style="margin-left:auto;margin-right:auto;display:block;width:80px;margin-top:50px" src="<?php echo base_url().'assets/img/logo2.png'?>" alt="gambar"/>
                            <h1 class="page-header"><center>Pengeluaran Barang</center></h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>

                    <div class="row">
                        <center><?php echo $this->session->flashdata('msg');?></center>
                        <div class="col-lg-12">
                            <div class="pull-right"><a href="#" class="btn btn-sm btn-info" data-toggle="modal" data-target="#largeModal"><span class="fa fa-search"></span> Cari Barang</a></div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row" style="margin-top: 20px;">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <form action="<?php echo base_url().'admin/pengeluaran/add_to_cart'?>" method="post">
                                        <table>
                                            <tr>
                                                <th style="width:100px;padding-bottom:5px;">No Faktur</th>
                                                <th style="width:300px;padding-bottom:5px;"><input type="text" name="nofak" value="<?php echo $this->session->userdata('nofak');?>" class="form-control input-sm" style="width:200px;" required></th>
                                               <th style="width:90px;padding-bottom:5px;">Nama User</th>
                                                <td style="width:350px;">
                                                <input type="text" name="pelanggan" value="<?php echo $this->session->userdata('pelanggan');?>" class="form-control input-sm" style="width:200px;" required>
                                                </td>
                                            </tr>
                                            <tr>
                                               <th>Tanggal</th>
                                                <td>
                                                    <input type="date" name="tgl" style="width: 200px" class="form-control" value="<?php echo $this->session->userdata('tglfak');?>" placeholder="Tanggal..." required/>
                                                </td>
                                            </tr>
                                        </table><hr/>
                                        <table>
                                            <tr>
                                                <th>Kode Barang</th>
                                            </tr>
                                            <tr>
                                                <th><input type="text" name="kode_brg" id="kode_brg" class="form-control input-sm"></th>                     
                                            </tr>
                                                <div id="detail_barang" style="position:absolute;">
                                                </div>
                                        </table>
                                    </form>
                                    <!-- /.table-responsive -->
                                   
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <table class="table table-bordered table-condensed" style="font-size:11px;margin-top:10px;">
                                <thead>
                                    <tr>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th style="text-align:center;">Kategori</th>
                                        <th style="text-align:center;">Satuan</th>
                                        <th style="text-align:center;">Harga</th>
                                        <th style="text-align:center;">Jumlah</th>
                                        <th style="text-align:center;">Sub Total</th>
                                        <th style="width:100px;text-align:center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($this->cart->contents() as $items): ?>
                                    <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
                                    <tr>
                                         <td><?=$items['id'];?></td>
                                         <td><?=$items['name'];?></td>
                                         <td><?=$items['kategori'];?></td>
                                         <td><?=$items['satuan'];?></td>
                                         <td style="text-align:right;"><?php echo number_format($items['price']);?></td>
                                         <td style="text-align:center;"><?php echo number_format($items['qty']);?></td>
                                         <td style="text-align:right;"><?php echo number_format($items['subtotal']);?></td>
                                         <td style="text-align:center;"><a href="<?php echo base_url().'admin/pengeluaran/remove/'.$items['rowid'];?>" class="btn btn-warning btn-xs"><span class="fa fa-close"></span> Batal</a></td>
                                    </tr>
                                    <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="6" style="text-align:center;">Total</td>
                                        <td style="text-align:right;">Rp. <?php echo number_format($this->cart->total());?></td>
                                    </tr>
                                </tfoot>
                            </table>
                            <a href="<?php echo base_url().'admin/pengeluaran/simpan_pengeluaran'?>" class="btn btn-info btn-lg"><span class="fa fa-save"></span> Simpan</a>
                                    <!-- /.table-responsive -->
                                   
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->


                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
                    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Cari Barang</h3>
            </div>
                <div class="modal-body" style="overflow:scroll;height:500px;">
                  <table class="table table-bordered table-condensed" style="font-size:11px;" id="dataTables-example">
                <thead>
                    <tr>
                        <th style="text-align:center;width:40px;">No</th>
                        <th style="text-align:center;width:40px;">Kode Barang</th>
                        <th style="text-align:center;width:40px;">Nama Barang</th>
                        <th style="text-align:center;width:40px;">Kategori</th>
                        <th style="text-align:center;width:40px;">Satuan</th>
                        <th style="text-align:center;width:40px;">Stok</th>
                        <th style="text-align:center;width:40px;">Harga</th>
                        
                        <!-- <th style="width:100px;text-align:center;">Aksi</th> -->
                    </tr>
                </thead>
                <tbody>
                     <?php 
                    $no=0;
                    foreach ($data->result_array() as $a):
                        $no++;
                        $id=$a['kode_brg'];
                        $nm=$a['nama_brg'];
                        $kat=$a['nama_kat'];
                        $sat=$a['satuan_brg'];
                        $qty=$a['qty_brg'];
                        $harga=$a['harga_brg'];
                ?>
                    <tr>
                        <td style="text-align:center;"><?php echo $no;?></td>
                        <td style="text-align:center;"><?php echo $id;?></td>
                        <td style="text-align:center;"><?php echo $nm;?></td>
                        <td style="text-align:center;"><?php echo $kat;?></td>
                        <td style="text-align:center;"><?php echo $sat;?></td>
                        <td style="text-align:center;"><?php echo $qty;?></td>
                        <td style="text-align:right;"><?php echo 'Rp '.number_format($harga);?></td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    
                </div>
            </div>
            </div>
        </div>
            <!-- /#page-wrapper -->
       
        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="<?php echo base_url().'assets2/js/jquery.min.js'?>"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url().'assets2/js/bootstrap.min.js'?>"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?php echo base_url().'assets2/js/metisMenu.min.js'?>"></script>

        <!-- DataTables JavaScript -->
        <script src="<?php echo base_url().'assets2/js/dataTables/jquery.dataTables.min.js'?>"></script>
        <script src="<?php echo base_url().'assets2/js/dataTables/dataTables.bootstrap.min.js'?>"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?php echo base_url().'assets2/js/startmin.js'?>"></script>
         <script src="<?php echo base_url().'assets/js/jquery.price_format.min.js'?>"></script>
                   <script src="<?php echo base_url().'assets/dist/js/bootstrap-select.min.js'?>"></script>

    <script src="<?php echo base_url().'assets/js/jquery.price_format.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/moment.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap-datetimepicker.min.js'?>"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
       <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>
         <script type="text/javascript">
            $(function () {
                $('#datetimepicker').datetimepicker({
                    format: 'DD MMMM YYYY HH:mm',
                });
                
                $('#datepicker').datetimepicker({
                    format: 'YYYY-MM-DD',
                });
                $('#datepicker2').datetimepicker({
                    format: 'YYYY-MM-DD',
                });

                $('#timepicker').datetimepicker({
                    format: 'HH:mm'
                });
            });
    </script>
    <script type="text/javascript">
        $(function(){
            $('.harga_brg').priceFormat({
                    prefix: '',
                    //centsSeparator: '',
                    centsLimit: 0,
                    thousandsSeparator: ','
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            //Ajax kabupaten/kota insert
            $("#kode_brg").focus();
            $("#kode_brg").keyup(function(){
                var kobar = {kode_brg:$(this).val()};
                   $.ajax({
               type: "POST",
               url : "<?php echo base_url().'admin/pengeluaran/get_barang';?>",
               data: kobar,
               success: function(msg){
               $('#detail_barang').html(msg);
               }
            });
            }); 

            $("#kode_brg").keypress(function(e){
                if(e.which==13){
                    $("#jumlah").focus();
                }
            });
        });
    </script>

    </body>
</html>
