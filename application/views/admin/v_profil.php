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

            <ul class="nav navbar-nav navbar-left navbar-top-links">
                </ul>

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
                            <h1 class="page-header"><center>Profil</center></h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>

                     <!-- /.row -->
                    <div class="row">
                        <div class="hero-widget well well-sm" style="margin-left:auto;margin-right:auto;display:block;width:300px">
                                <div class="icon">
                                    <img style="width:200px;border-radius: 8px;" src="<?php echo base_url().'assets/img/profil.jpeg'?>" alt="gambar"/>
                                </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <!-- /.col-lg-4 -->
                         <div class="panel panel-primary" style="margin-left:auto;margin-right:auto;display:block;width: 450px;">
                                <div class="panel-heading" style="text-align: center; font-size: 25px;">
                                    Biodata
                                </div>
                                <div class="panel-body">
                                    <table style="font-size: 18px">
                                        <colgroup>
                                            <col width="70px"/>
                                            <col width="20px"/>
                                        </colgroup>
                                        <tr>
                                        <td><b>Nama</b></td>
                                        <td>:</td>
                                        <td>Salsabila Sekar Anggraini Hermawan</td>
                                        </tr>
                                        <tr>
                                        <td><b>NIM</b></td>
                                        <td>:</td>
                                        <td>1830122</td>
                                        </tr>
                                        <tr>
                                        <td><b>Prodi</b></td>
                                        <td>:</td>
                                        <td>Akademi Informatika Dan Komputer</td>
                                        </tr>
                                        <tr>
                                        <td><b>Asal</b></td>
                                        <td>:</td>
                                        <td>Kubu Raya</td>
                                        </tr>
                                        
                                    </table>
                                </div>
                            </div>
                    </div>
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

    </body>
</html>
