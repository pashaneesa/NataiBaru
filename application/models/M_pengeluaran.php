<?php
class M_pengeluaran extends CI_Model{

	function simpan_pengeluaran($id_keluar,$id_fak,$nama_pel,$tgl){
		$idadmin=$this->session->userdata('idadmin');
		$this->db->query("INSERT INTO pengeluaran (id_keluar,id_fak,nama_pel,tgl_keluar) VALUES ('$id_keluar','$id_fak','$nama_pel','$tgl')");
		foreach ($this->cart->contents() as $item) {
			$data=array(
				'id_fak_keluar' 	=>	$id_fak,
				'id_keluard'		=>	$id_keluar,
				'kode_brg_keluar'	=>	$item['id'],
				'harga_dkeluar'		=>	$item['price'],
				'jml_dkeluar'		=>	$item['qty'],
				'total_dkeluar'		=>	$item['subtotal'],
				
			);
			$this->db->insert('d_pengeluaran',$data);
			// $this->db->query("update barang set qty_brg=qty_brg+'$item[qty]',harga_brg='$item[price]' where kode_brg='$item[id]'");
			$this->db->query("update barang set qty_brg=qty_brg-'$item[qty]' where kode_brg='$item[id]'");
		}
		return true;
	}
	function get_kobel(){
		$q = $this->db->query("SELECT MAX(RIGHT(id_keluar,6)) AS kd_max FROM pengeluaran");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%06s", $tmp);
            }
        }else{
            $kd = "000001";
        }
        return "KL".$kd;
	}

	function get_jml_keluar(){
		$hsl=$this->db->query("SELECT SUM(jml_dkeluar) AS jumlah FROM d_pengeluaran");
		return $hsl;
	}

}