<?php
class Welcome extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url();
            redirect($url);
        };
        $this->load->model('m_barang');
        $this->load->model('m_suplier');
        $this->load->model('m_pembelian');
        $this->load->model('m_pengeluaran');
        $this->load->model('m_laporan');
	}
	
	function index(){
		$data['brg']=$this->m_barang->get_jml_barang();
		$data['supp']=$this->m_suplier->get_jml_supp();
		$data['terima']=$this->m_pembelian->get_jml_terima();
		$data['keluar']=$this->m_pengeluaran->get_jml_keluar();
		$this->load->view('admin/v_index',$data);
	}

	function profil(){
		$this->load->view('admin/v_profil');
	}

	function barang(){
	if($this->session->userdata('akses')=='1'){
		$x['data']=$this->m_laporan->get_stok_barang();
		$this->load->view('admin/laporan/v_plap_stok_barang',$x);
	}else{
        echo "Halaman tidak ditemukan";
    }
	}

	function terima(){
	if($this->session->userdata('akses')=='1'){
		$x['data']=$this->m_laporan->get_data_terima();
		$x['jml']=$this->m_laporan->get_total_terima();
		$this->load->view('admin/laporan/v_plap_penerimaan',$x);
	}else{
        echo "Halaman tidak ditemukan";
    }
	}

	function keluar(){
	if($this->session->userdata('akses')=='1'){
		$x['data']=$this->m_laporan->get_data_keluar();
		$x['jml']=$this->m_laporan->get_total_keluar();
		$this->load->view('admin/laporan/v_plap_pengeluaran',$x);
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
}