					<?php 
						error_reporting(0);
						$b=$brg->row_array();
					?>
					<table>
						<tr>
		                    <th style="width:200px;"></th>
		                    <th>Nama Barang</th>
		                    <th>Kategori</th>
		                    <th>Satuan</th>
		                    <th>Harga</th>
		                    <th>Jumlah</th>
		                </tr>
						<tr>
							<td style="width:200px;"></th>
							<td><input type="text" name="nama_brg" value="<?php echo $b['nama_brg'];?>" style="width:300px;margin-right:5px;" class="form-control input-sm" readonly></td>
		                    <td><input type="text" name="kat_brg" value="<?php echo $b['nama_kat'];?>" style="width:120px;margin-right:5px;" class="form-control input-sm" readonly></td>
		                    <td><input type="text" name="satuan_brg" value="<?php echo $b['satuan_brg'];?>" style="width:100px;margin-right:5px;" class="form-control input-sm" readonly></td>
		                    <td><input type="text" name="harga_brg" value="<?php echo $b['harga_brg'];?>" style="width:130px;margin-right:5px;" class="form-control input-sm" required></td>
		                    <td><input type="number" name="jumlah" id="jumlah" value="1" min="1" class="form-control input-sm" style="width:90px;margin-right:5px;" required></td>
		                    <td><button type="submit" class="btn btn-sm btn-primary">Ok</button></td>
						</tr>
					</table>
					