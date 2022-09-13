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
                                <a href="<?php echo base_url().'admin/barang'?>" class="active"><i class="fa fa-cubes fa-fw"></i> Stok Barang</a>
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
                            <h1 class="page-header"><center>Data Stok Barang</center></h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>

                    <div class="row">
                        <center><?php echo $this->session->flashdata('msg');?></center>
                        <div class="col-lg-12">
                            <div class="pull-right" style="margin-bottom: 10px;"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#largeModal"><span class="fa fa-plus"></span> Tambah Barang</a></div>
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
                                                <th style="text-align:center;width:40px;">No</th>
                                                <th>Kode Barang</th>
                                                <th>Nama Barang</th>
                                                <th>Kategori</th>
                                                <th>Satuan</th>
                                                <th>Stok</th>
                                                <th>Harga</th>
                                                
                                                <th style="width:100px;text-align:center;">Aksi</th>
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
                                                        <td style="text-align:center;font-size: 12px"><?php echo $no;?></td>
                                                        <td style="font-size: 12px"><?php echo $id;?></td>
                                                        <td style="font-size: 12px"><?php echo $nm;?></td>
                                                        <td style="font-size: 12px"><?php echo $kat;?></td>
                                                        <td style="font-size: 12px"><?php echo $sat;?></td>
                                                        <td style="font-size: 12px"><?php echo $qty;?></td>
                                                        <td style="font-size: 10px"><?php echo 'Rp '.number_format($harga);?></td>
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
        <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Tambah Barang</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/barang/tambah_barang'?>">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Kode Barang</label>
                        <div class="col-xs-9">
                            <input name="kode_brg" class="form-control" type="text" placeholder="Kode Barang" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >ID MS Barang</label>
                        <div class="col-xs-9">
                            <input name="id_ms_brg" class="form-control" type="text" placeholder="ID MS Barang" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Barang</label>
                        <div class="col-xs-9">
                            <input name="nama_brg" class="form-control" type="text" placeholder="Nama Barang" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Kategori</label>
                        <div class="col-xs-9">
                             <select style="width: 335px" name="kat_brg" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Kategori" data-width="80%" placeholder="Pilih Kategori" required>
                                <?php foreach ($kat2->result_array() as $k2) {
                                    $id_kat=$k2['id_kat'];
                                    $nm_kat=$k2['nama_kat'];
                                    ?>
                                        <option value="<?php echo $id_kat;?>"><?php echo $nm_kat;?></option>
                                <?php }?>
                                
                             </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Golongan</label>
                        <div class="col-xs-9">
                             <select style="width: 335px" name="gol_brg" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Golongan" data-width="80%" placeholder="Pilih Golongan" required>
                                <?php foreach ($gol->result_array() as $k2) {
                                    $id_gol=$k2['id_gol'];
                                    $nm_gol=$k2['nama_gol'];
                                    ?>
                                        <option value="<?php echo $id_gol;?>"><?php echo $nm_gol;?></option>
                                <?php }?>
                             </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jenis</label>
                        <div class="col-xs-9">
                             <select style="width: 335px" name="jenis_brg" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Jenis" data-width="80%" placeholder="Pilih Jenis" required>
                                <option>N</option>
                                <option>S</option>
                             </select>
                        </div>
                    </div>               

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Satuan</label>
                        <div class="col-xs-9">
                             <select style="width: 335px"name="sat_brg" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Satuan" data-width="80%" placeholder="Pilih Satuan" required>
                                <option>UNIT</option>
                                <option>PCS</option>
                                <option>SET</option>
                                <option>KG</option>
                                <option>LTR</option>
                                <option>BKS</option>
                                <option>UNIT</option>
                                <option>PCS</option>
                             </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Keterangan</label>
                        <div class="col-xs-9">
                            <textarea name="ket_brg" class="form-control" placeholder="Keterangan Barang" style="width:335px;" required></textarea>
                            <!-- <input name="nama_brg" class="form-control" type="text" placeholder="Nama Barang..." style="width:335px;" required> -->
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Spesifikasi</label>
                        <div class="col-xs-9">
                            <textarea name="spek_brg" class="form-control" placeholder="Spesifikasi Barang" style="width:335px;" required></textarea>
                            <!-- <input name="nama_brg" class="form-control" type="text" placeholder="Nama Barang..." style="width:335px;" required> -->
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Stok</label>
                        <div class="col-xs-9">
                            <input name="qty_brg" class="form-control" type="number" placeholder="Stok Barang" style="width:335px;">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Harga</label>
                        <div class="col-xs-9">
                            <input name="harga_brg" class="harpok form-control" type="text" placeholder="Harga Barang" style="width:335px;">
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
                        $kode=$a['kode_brg'];
                        $id=$a['id_ms_brg'];
                        $nama=$a['nama_brg'];
                        $kat=$a['nama_kat'];
                        $gol=$a['nama_gol'];
                        $kat2=$a['id_kat'];
                        $gol2=$a['id_gol'];
                        $jenis=$a['jenis_brg'];
                        $sat=$a['satuan_brg'];
                        $ket=$a['ket_brg'];
                        $spek=$a['spek_brg'];
                        $qty=$a['qty_brg'];
                        $harga=$a['harga_brg'];
                    ?>
                <div id="modalEditPelanggan<?php echo $kode?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 class="modal-title" id="myModalLabel">Edit Barang</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/barang/edit_barang'?>">
                        <div class="modal-body">

                        <div class="form-group">
                            <label class="control-label col-xs-3" >Kode Barang</label>
                            <div class="col-xs-9">
                                <input name="kode_brg" class="form-control" type="text" value="<?php echo $kode;?>" placeholder="Kode Barang" style="width:335px;" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                        <label class="control-label col-xs-3" >ID MS Barang</label>
                        <div class="col-xs-9">
                            <input name="id_ms_brg" class="form-control" type="text" value="<?php echo $id;?>" placeholder="ID MS Barang" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Barang</label>
                        <div class="col-xs-9">
                            <input name="nama_brg" class="form-control" type="text" value="<?php echo $nama;?>" placeholder="Nama Barang" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Kategori</label>
                        <div class="col-xs-9">
                             <input name="kat_brg" class="form-control" type="hidden" value="<?php echo $kat2;?>" placeholder="Nama Barang" style="width:335px;" readonly>
                             <input name="nama_kat" class="form-control" type="text" value="<?php echo $kat;?>" placeholder="Nama Barang" style="width:335px;" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Golongan</label>
                        <div class="col-xs-9">
                              <input name="gol_brg" class="form-control" type="hidden" value="<?php echo $gol2;?>" placeholder="Nama Barang" style="width:335px;" readonly>
                             <input name="nama_gol" class="form-control" type="text" value="<?php echo $gol;?>" placeholder="Nama Barang" style="width:335px;" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jenis</label>
                        <div class="col-xs-9">
                             <input name="jenis_brg" class="form-control" type="text" value="<?php echo $jenis;?>" placeholder="Nama Barang" style="width:335px;" readonly>
                        </div>
                    </div>               

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Satuan</label>
                        <div class="col-xs-9">
                             <input name="sat_brg" class="form-control" type="text" value="<?php echo $sat;?>" placeholder="Nama Satuan" style="width:335px;" readonly>
                        </div>
                    </div>  

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Keterangan</label>
                        <div class="col-xs-9">
                            <textarea name="ket_brg" class="form-control" value="<?php echo $ket;?>" placeholder="Keterangan Barang" style="width:335px;" required><?php echo $ket;?></textarea>
                            <!-- <input name="nama_brg" class="form-control" type="text" placeholder="Nama Barang..." style="width:335px;" required> -->
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Spesifikasi</label>
                        <div class="col-xs-9">
                            <textarea name="spek_brg" class="form-control" value="<?php echo $spek;?>" placeholder="Spesifikasi Barang" style="width:335px;" required><?php echo $spek;?></textarea>
                            <!-- <input name="nama_brg" class="form-control" type="text" placeholder="Nama Barang..." style="width:335px;" required> -->
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Stok</label>
                        <div class="col-xs-9">
                            <input name="qty_brg" class="form-control" value="<?php echo $qty;?>" type="number" placeholder="Stok Barang" style="width:335px;">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Harga</label>
                        <div class="col-xs-9">
                            <input name="harga_brg" class="harpok form-control" type="text" value="<?php echo $harga;?>" placeholder="Harga Barang" style="width:335px;">
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
                        $kode=$a['kode_brg'];
                        $id=$a['id_ms_brg'];
                        $nama=$a['nama_brg'];
                        $kat=$a['kat_brg'];
                        $gol=$a['gol_brg'];
                        $jenis=$a['jenis_brg'];
                        $sat=$a['satuan_brg'];
                        $ket=$a['ket_brg'];
                        $spek=$a['spek_brg'];
                        $qty=$a['qty_brg'];
                        $harga=$a['harga_brg'];
                    ?>
                <div id="modalHapusPelanggan<?php echo $kode?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 class="modal-title" id="myModalLabel">Hapus Barang</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/barang/hapus_barang'?>">
                        <div class="modal-body">
                            <p>Yakin mau menghapus data barang <?php echo $nama; ?>?</p>
                                <input name="kode_brg" type="hidden" value="<?php echo $kode; ?>">
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
