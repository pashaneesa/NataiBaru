<html lang="en" moznomarginboxes mozdisallowselectionprint>
<head>
    <title>PT. HMBP Natai Baru</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/laporan.css')?>"/>
</head>
<body onload="window.print()">
<div id="laporan">
<table align="center" style="width:900px; border-bottom:3px double;border-top:none;border-right:none;border-left:none;margin-top:5px;margin-bottom:20px;">
<!--<tr>
    <td><img src="<?php// echo base_url().'assets/img/kop_surat.png'?>"/></td>
</tr>-->
</table>
<div class="col-lg-12">
    <img style="margin-left:auto;margin-right:auto;display:block;width:80px;margin-bottom:20px" src="<?php echo base_url().'assets/img/logo2.png'?>" alt="gambar"/>
</div>
<table border="0" align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:0px;">
<tr>
    <td colspan="2" style="width:800px;paddin-left:20px;"><center><h1>LAPORAN PENERIMAAN BARANG</h1></center><br/></td>
</tr>
                       
</table>
 
<table border="0" align="center" style="width:900px;border:none;">
        <tr>
            <th style="text-align:left"></th>
        </tr>
</table>

<table border="1" align="center" style="width:900px;margin-bottom:20px;">
<thead>
    <tr>
        <th style="width:50px;">No</th>
        <th>No Faktur</th>
        <th>Tanggal</th>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Satuan</th>
        <th>Supplier</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Total</th>
    </tr>
</thead>
<tbody>
<?php 
$no=0;
    foreach ($data->result_array() as $i) {
        $no++;
        $nofak=$i['id_fak'];
        $tgl=$i['tgl_terima'];
        $barang_id=$i['kode_brg'];
        $barang_nama=$i['nama_brg'];
        $barang_satuan=$i['satuan_brg'];
        $nama=$i['nama_supp'];
        $barang_harjul=$i['harga_dterima'];
        $barang_qty=$i['jml_dterima'];
        $barang_total=$i['total_dterima'];
?>
    <tr>
        <td style="text-align:center;"><?php echo $no;?></td>
        <td style="padding-left:5px;"><?php echo $nofak;?></td>
        <td style="text-align:center;"><?php echo $tgl;?></td>
        <td style="text-align:center;"><?php echo $barang_id;?></td>
        <td style="text-align:left;"><?php echo $barang_nama;?></td>
        <td style="text-align:left;"><?php echo $barang_satuan;?></td>
        <td style="text-align:left;"><?php echo $nama;?></td>
        <td style="text-align:right;"><?php echo 'Rp '.number_format($barang_harjul);?></td>
        <td style="text-align:center;"><?php echo $barang_qty;?></td>
     <!--    <td style="text-align:right;"><?php echo 'Rp '.number_format($barang_diskon);?></td> -->
        <td style="text-align:right;"><?php echo 'Rp '.number_format($barang_total);?></td>
    </tr>
<?php }?>
</tbody>
<tfoot>
<?php 
    $b=$jml->row_array();
?>
    <tr>
        <td colspan="9" style="text-align:center;"><b>Total</b></td>
        <td style="text-align:right;"><b><?php echo 'Rp '.number_format($b['total']);?></b></td>
    </tr>
</tfoot>
</table>
<table align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>
        <td></td>
</table>
<table align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>
        <th><br/><br/></th>
    </tr>
    <tr>
        <th align="left"></th>
    </tr>
</table>
</div>
</body>
</html>_