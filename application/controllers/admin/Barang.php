<?php
class Barang extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url();
            redirect($url);
        };
		$this->load->model('m_kategori');
		$this->load->model('m_barang');
		// $this->load->library('barcode');
	}
	function index(){
	// if($this->session->userdata('akses')=='1'){
	// 	$data['data']=$this->m_barang->tampil_barang();
	// 	$data['kat']=$this->m_kategori->tampil_kategori();
	// 	$data['kat2']=$this->m_kategori->tampil_kategori();
	// 	$this->load->view('admin/v_barang',$data);
	// }else{
 //        echo "Halaman tidak ditemukan";
 //    }

    if($this->session->userdata('akses')=='1'){
		$data['data']=$this->m_barang->tampil_barang_2();
		$data['sat']=$this->m_kategori->tampil_satuan();
		$data['kat2']=$this->m_kategori->tampil_kategori();
		$data['gol']=$this->m_kategori->tampil_golongan();
		$this->load->view('admin/v_barang',$data);
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
	function tambah_barang(){
	if($this->session->userdata('akses')=='1'){
		$kode_brg=$this->input->post('kode_brg');
		$id_ms_brg=$this->input->post('id_ms_brg');
		$kat_brg=$this->input->post('kat_brg');
		$gol_brg=$this->input->post('gol_brg');
		$nama_brg=$this->input->post('nama_brg');
		$ket_brg=$this->input->post('ket_brg');
		$jenis_brg=$this->input->post('jenis_brg');
		$sat_brg=$this->input->post('sat_brg');
		$spek_brg=$this->input->post('spek_brg');
		$qty_brg=$this->input->post('qty_brg');
		$harga_brg=str_replace(',', '', $this->input->post('harga_brg'));
		$this->m_barang->simpan_barang_2($kode_brg,$id_ms_brg,$kat_brg,$gol_brg,$nama_brg,$ket_brg,$jenis_brg,$sat_brg,$spek_brg,$qty_brg,$harga_brg);
		echo $this->session->set_flashdata('msg','<label class="label label-success">Data barang berhasil ditambah</label>');
		redirect('admin/barang');
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
	function edit_barang(){
	if($this->session->userdata('akses')=='1'){
		$kode_brg=$this->input->post('kode_brg');
		$id_ms_brg=$this->input->post('id_ms_brg');
		$kat_brg=$this->input->post('kat_brg');
		$gol_brg=$this->input->post('gol_brg');
		$nama_brg=$this->input->post('nama_brg');
		$ket_brg=$this->input->post('ket_brg');
		$jenis_brg=$this->input->post('jenis_brg');
		$sat_brg=$this->input->post('sat_brg');
		$spek_brg=$this->input->post('spek_brg');
		$qty_brg=$this->input->post('qty_brg');
		$harga_brg=str_replace(',', '', $this->input->post('harga_brg'));
		$this->m_barang->update_barang_2($kode_brg,$id_ms_brg,$kat_brg,$gol_brg,$nama_brg,$ket_brg,$jenis_brg,$sat_brg,$spek_brg,$qty_brg,$harga_brg);
		echo $this->session->set_flashdata('msg','<label class="label label-success">Data barang berhasil diubah</label>');
		redirect('admin/barang');
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
	function hapus_barang(){
	if($this->session->userdata('akses')=='1'){
		$kode_brg=$this->input->post('kode_brg');
		$this->m_barang->hapus_barang_2($kode_brg);
		echo $this->session->set_flashdata('msg','<label class="label label-success">Data barang berhasil dihapus</label>');
		redirect('admin/barang');
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
}