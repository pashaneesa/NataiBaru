<?php
class M_pembelian extends CI_Model{

	function simpan_pembelian($id_terima,$id_fak,$id_supp,$tgl){
		$idadmin=$this->session->userdata('idadmin');
		$this->db->query("INSERT INTO penerimaan (id_terima,id_fak,id_supp_terima,tgl_terima) VALUES ('$id_terima','$id_fak','$id_supp','$tgl')");
		foreach ($this->cart->contents() as $item) {
			$data=array(
				'id_fak_terima' 	=>	$id_fak,
				'id_terimad'		=>	$id_terima,
				'kode_brg_terima'	=>	$item['id'],
				'harga_dterima'		=>	$item['price'],
				'jml_dterima'		=>	$item['qty'],
				'total_dterima'		=>	$item['subtotal'],
				
			);
			$this->db->insert('d_penerimaan',$data);
			$this->db->query("update barang set qty_brg=qty_brg+'$item[qty]',harga_brg='$item[price]' where kode_brg='$item[id]'");
		}
		return true;
	}
	function get_kobel(){
		$q = $this->db->query("SELECT MAX(RIGHT(id_terima,6)) AS kd_max FROM penerimaan");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%06s", $tmp);
            }
        }else{
            $kd = "000001";
        }
        return "TR".$kd;
	}

	function get_jml_terima(){
		$hsl=$this->db->query("SELECT SUM(jml_dterima) AS jumlah FROM d_penerimaan");
		return $hsl;
	}

}