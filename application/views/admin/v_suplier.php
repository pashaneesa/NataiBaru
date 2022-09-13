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
                                <a href="<?php echo base_url().'admin/suplier'?>" class="active"><i class="fa fa-truck fa-fw"></i> Supplier</a>
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
                            <h1 class="page-header"><center>Data Supplier</center></h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>

                    <div class="row">
                        <center><?php echo $this->session->flashdata('msg');?></center>
                        <div class="col-lg-12">
                            <div class="pull-right" style="margin-bottom: 10px;"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#largeModal"><span class="fa fa-plus"></span> Tambah Supplier</a></div>
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
                                            <thead>
                                                <tr>
                                                    <th style="text-align:center;width:40px;">No</th>
                                                    <th>Nama Suplier</th>
                                                    <th>Asal</th>
                                                    <th>Alamat</th>
                                                    <th style="width:140px;text-align:center;">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $no=0;
                                                    foreach ($data->result_array() as $a):
                                                        $no++;
                                                        $id=$a['id_supp'];
                                                        $nm=$a['nama_supp'];
                                                        $asal=$a['asal_supp'];
                                                        $alamat=$a['alamat_supp'];
                                                ?>
                                                    <tr>
                                                        <td style="text-align:center;"><?php echo $no;?></td>
                                                        <td><?php echo $nm;?></td>
                                                        <td><?php echo $asal;?></td>
                                                        <td><?php echo $alamat;?></td>
                                                        <td style="text-align:center;">
                                                            <a class="btn btn-xs btn-warning" href="#modalEditPelanggan<?php echo $id?>" data-toggle="modal" title="Edit"><span class="fa fa-edit"></span> Edit</a>
                                                            <a class="btn btn-xs btn-danger" href="#modalHapusPelanggan<?php echo $id?>" data-toggle="modal" title="Hapus"><span class="fa fa-close"></span> Hapus</a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach;?>
                                            </tbody>
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
        <!-- ============ MODAL ADD =============== -->
        <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Tambah Suplier</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/suplier/tambah_suplier'?>">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Suplier</label>
                        <div class="col-xs-9">
                            <input name="nama_supp" class="form-control" type="text" placeholder="Nama Supplier" style="width:280px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Asal</label>
                        <div class="col-xs-9">
                            <input name="asal_supp" class="form-control" type="text" placeholder="Asal" style="width:280px;" required>
                        </div>
                    </div>
                        
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Alamat</label>
                        <div class="col-xs-9">
                            <textarea name="alamat_supp" class="form-control" placeholder="Keterangan Barang" style="width:280px;" required></textarea>
                        </div>
                    </div>   

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Simpan</button>
                </div>
            </form>
            </div>
            </div>
        </div>

        <!-- ============ MODAL EDIT =============== -->
        <?php
                    foreach ($data->result_array() as $a) {
                        $id=$a['id_supp'];
                        $nm=$a['nama_supp'];
                        $asal=$a['asal_supp'];
                        $alamat=$a['alamat_supp'];
                    ?>
                <div id="modalEditPelanggan<?php echo $id?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 class="modal-title" id="myModalLabel">Edit Supplier</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/suplier/edit_suplier'?>">
                        <div class="modal-body">
                            <input name="kode_supp" type="hidden" value="<?php echo $id;?>">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Supplier</label>
                        <div class="col-xs-9">
                            <input name="nama_supp" class="form-control" type="text" placeholder="Nama Supplier" value="<?php echo $nm;?>" style="width:280px;" required>
                        </div>
                    </div>
                        
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Asal</label>
                        <div class="col-xs-9">
                            <input name="asal_supp" class="form-control" type="text" placeholder="Asal" value="<?php echo $asal;?>" style="width:280px;" required>
                        </div>
                    </div>
                        
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Alamat</label>
                        <div class="col-xs-9">
                            <textarea name="alamat_supp" class="form-control" placeholder="Keterangan Barang" style="width:280px;" required><?php echo $alamat;?></textarea>
                        </div>
                    </div>   

                </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button type="submit" class="btn btn-info">Update</button>
                        </div>
                    </form>
                </div>
                </div>
                </div>
            <?php
        }
        ?>

        <!-- ============ MODAL HAPUS =============== -->
        <?php
                    foreach ($data->result_array() as $a) {
                        $id=$a['id_supp'];
                        $nm=$a['nama_supp'];
                        $asal=$a['asal_supp'];
                        $alamat=$a['alamat_supp'];
                    ?>
                <div id="modalHapusPelanggan<?php echo $id?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 class="modal-title" id="myModalLabel">Hapus Supplier</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/suplier/hapus_suplier'?>">
                        <div class="modal-body">
                            <p>Yakin mau menghapus data supplier <?php echo $nm; ?>?</p>
                                    <input name="kode" type="hidden" value="<?php echo $id; ?>">
                        </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button type="submit" class="btn btn-primary">Hapus</button>
                        </div>
                    </form>
                </div>
                </div>
                </div>
            <?php
        }
        ?>
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
