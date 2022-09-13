<?php
class M_suplier extends CI_Model{

	function hapus_suplier($kode){
		$hsl=$this->db->query("DELETE FROM supplier where id_supp='$kode'");
		return $hsl;
	}

	function update_suplier($kode,$nama,$asal,$alamat){
		$hsl=$this->db->query("UPDATE supplier set nama_supp='$nama',asal_supp='$asal',alamat_supp='$alamat' where id_supp='$kode'");
		return $hsl;
	}

	function tampil_suplier(){
		$hsl=$this->db->query("select * from supplier order by id_supp desc");
		return $hsl;
	}

	function simpan_suplier($nama,$asal,$alamat){
		$hsl=$this->db->query("INSERT INTO supplier(nama_supp,asal_supp,alamat_supp) VALUES ('$nama','$asal','$alamat')");
		return $hsl;
	}

	function get_jml_supp(){
		$hsl=$this->db->query("SELECT COUNT(id_supp) AS jumlah FROM supplier");
		return $hsl;
	}

}