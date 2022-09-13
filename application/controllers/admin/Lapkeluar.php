<?php
class Lapkeluar extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url();
            redirect($url);
        };
		$this->load->model('m_kategori');
		$this->load->model('m_barang');
		$this->load->model('m_suplier');
		$this->load->model('m_pembelian');
		$this->load->model('m_laporan');
	}
	function index(){
	if($this->session->userdata('akses')=='1'){
		$x['data']=$this->m_laporan->get_data_keluar();
		$x['jml']=$this->m_laporan->get_total_keluar();
		$this->load->view('admin/laporan/v_lap_pengeluaran',$x);
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
}