<?php
class M_barang extends CI_Model{

	function hapus_barang_2($kode_brg){
		$hsl=$this->db->query("DELETE FROM barang where kode_brg='$kode_brg'");
		return $hsl;
	}

	function update_barang_2($kode_brg,$id_ms_brg,$kat_brg,$gol_brg,$nama_brg,$ket_brg,$jenis_brg,$sat_brg,$spek_brg,$qty_brg,$harga_brg){
		$user_id=$this->session->userdata('idadmin');
		$hsl=$this->db->query("UPDATE barang SET id_ms_brg='$id_ms_brg',kat_brg='$kat_brg',gol_brg='$gol_brg',nama_brg='$nama_brg',ket_brg='$ket_brg',jenis_brg='$jenis_brg',satuan_brg='$sat_brg',spek_brg='$spek_brg',qty_brg='$qty_brg',harga_brg='$harga_brg' WHERE kode_brg='$kode_brg'");
		return $hsl;
	}

	function tampil_barang_2(){
		$hsl=$this->db->query("SELECT * FROM barang a JOIN kategori b ON kat_brg=id_kat JOIN golongan ON gol_brg=id_gol");
		return $hsl;
	}

	function simpan_barang_2($kode_brg,$id_ms_brg,$kat_brg,$gol_brg,$nama_brg,$ket_brg,$jenis_brg,$sat_brg,$spek_brg,$qty_brg,$harga_brg){
		$user_id=$this->session->userdata('idadmin');
		$hsl=$this->db->query("INSERT INTO barang (kode_brg,id_ms_brg,kat_brg,gol_brg,nama_brg,ket_brg,jenis_brg,satuan_brg,spek_brg,qty_brg,harga_brg) VALUES ('$kode_brg','$id_ms_brg','$kat_brg','$gol_brg','$nama_brg','$ket_brg','$jenis_brg','$sat_brg','$spek_brg','$qty_brg','$harga_brg')");
		return $hsl;
	}


	function get_barang($kobar){
		$hsl=$this->db->query("SELECT * FROM barang JOIN kategori ON kat_brg=id_kat where kode_brg='$kobar'");
		return $hsl;
	}

	function get_jml_barang(){
		$hsl=$this->db->query("SELECT COUNT(kode_brg) AS jumlah FROM barang");
		return $hsl;
	}

	function get_kobar(){
		$q = $this->db->query("SELECT MAX(RIGHT(kode_brg,6)) AS kd_max FROM barang");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%06s", $tmp);
            }
        }else{
            $kd = "000001";
        }
        return "BR".$kd;
	}

}