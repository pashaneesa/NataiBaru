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
                            <h1 class="page-header"><center>Laporan<small> Stok Barang</small></center></h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>

                    <div class="row">
                        <center><?php echo $this->session->flashdata('msg');?></center>
                        <div class="col-lg-12">
                            <div class="pull-right" style="margin-bottom: 10px;"><a href="<?php echo base_url().'welcome/barang'?>" class="btn btn-sm btn-info"><span class="fa fa-file"></span> Print Laporan</a></div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <?php 
                                                $urut=0;
                                                $nomor=0;
                                                $group='-';
                                                foreach($data->result_array()as $d){
                                                $nomor++;
                                                $urut++;
                                                if($group=='-' || $group!=$d['nama_kat']){
                                                    $kat=$d['nama_kat'];
                                                    $query=$this->db->query("SELECT id_kat,nama_kat,nama_brg,SUM(qty_brg) AS tot_stok FROM kategori JOIN barang ON id_kat=kat_brg WHERE nama_kat='$kat'");
                                                    $t=$query->row_array();
                                                    $tots=$t['tot_stok'];
                                                    if($group!='-')
                                                    echo "</table><br>";
                                                    echo "<table align='center' width='900px;' border='1'>";
                                                    echo "<tr><td colspan='2'><b>Kategori: $kat</b></td> <td style='text-align:center;'><b>Total Stok: $tots </b></td></tr>";
                                                    echo "<tr style='background-color:#ccc;'>
                                                        <td width='4%' align='center'>No</td>
                                                        <td width='60%' align='center'>Nama Barang</td>
                                                        <td width='30%' align='center'>Stok</td>
                                                        
                                                        </tr>";
                                                    $nomor=1;
                                                }
                                                $group=$d['nama_kat'];
                                                    if($urut==500){
                                                    $nomor=0;
                                                        echo "<div class='pagebreak'> </div>";
                                                        //echo "<center><h2>KALENDER EVENTS PER TAHUN</h2></center>";
                                                        }
                                                    ?>
                                                    <tr>
                                                            <td style="text-align:center;vertical-align:top;text-align:center;font-size: 12px"><?php echo $nomor; ?></td>
                                                            <td style="vertical-align:top;padding-left:5px;font-size: 12px"><?php echo $d['nama_brg']; ?></td>
                                                            <td style="vertical-align:top;text-align:center;font-size: 12px"><?php echo $d['qty_brg']; ?></td>  
                                                    </tr>
                                                    

                                                    <?php
                                                    }
                                                    ?>
                                        </table>
                                    </div>
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

                    <!-- /.row -->

                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
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

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>
         <script type="text/javascript">
        $(function(){
            $('.harpok').priceFormat({
                    prefix: '',
                    //centsSeparator: '',
                    centsLimit: 0,
                    thousandsSeparator: ','
            });
            $('.harjul').priceFormat({
                    prefix: '',
                    //centsSeparator: '',
                    centsLimit: 0,
                    thousandsSeparator: ','
            });
        });
    </script>

    </body>
</html>
