<?php
class M_laporan extends CI_Model{
	function get_stok_barang(){
		$hsl=$this->db->query("SELECT * FROM kategori JOIN barang ON id_kat=kat_brg GROUP BY id_kat,nama_brg");
		return $hsl;
	}
	function get_data_keluar(){
		$hsl=$this->db->query("SELECT id_fak,DATE_FORMAT(tgl_keluar,'%d %M %Y') AS tgl_keluar,kode_brg,nama_brg,satuan_brg,nama_pel,harga_dkeluar,jml_dkeluar,total_dkeluar FROM pengeluaran JOIN d_pengeluaran ON id_keluar=id_keluard JOIN barang ON kode_brg_keluar= kode_brg ORDER BY id_keluar DESC");
		return $hsl;
	}

	function get_total_keluar(){
		$hsl=$this->db->query("SELECT SUM(total_dkeluar) AS total FROM pengeluaran JOIN d_pengeluaran ON id_keluar=id_keluard");
		return $hsl;
	}

	function get_data_terima(){
		$hsl=$this->db->query("SELECT id_fak,DATE_FORMAT(tgl_terima,'%d %M %Y') AS tgl_terima,kode_brg,nama_brg,satuan_brg,harga_dterima,nama_supp,jml_dterima,total_dterima FROM penerimaan JOIN d_penerimaan ON id_terima=id_terimad JOIN barang ON kode_brg_terima= kode_brg JOIN supplier ON id_supp_terima=id_supp ORDER BY id_terima DESC");
		return $hsl;
	}

	function get_total_terima(){
		$hsl=$this->db->query("SELECT SUM(total_dterima) AS total FROM penerimaan JOIN d_penerimaan ON id_terima=id_terimad");
		return $hsl;
	}
}
