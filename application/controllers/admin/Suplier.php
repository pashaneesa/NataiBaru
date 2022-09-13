<?php
class Suplier extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url();
            redirect($url);
        };
		$this->load->model('m_suplier');
	}
	function index(){
	if($this->session->userdata('akses')=='1'){
		$data['data']=$this->m_suplier->tampil_suplier();
		$this->load->view('admin/v_suplier',$data);
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
	function tambah_suplier(){
	if($this->session->userdata('akses')=='1'){
		$nama_supp=$this->input->post('nama_supp');
		$asal_supp=$this->input->post('asal_supp');
		$alamat_supp=$this->input->post('alamat_supp');
		$this->m_suplier->simpan_suplier($nama_supp,$asal_supp,$alamat_supp);
		echo $this->session->set_flashdata('msg','<label class="label label-success">Data supplier berhasil ditambah</label>');
		redirect('admin/suplier');
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
	function edit_suplier(){
	if($this->session->userdata('akses')=='1'){
		$kode_supp=$this->input->post('kode_supp');
		$nama_supp=$this->input->post('nama_supp');
		$asal_supp=$this->input->post('asal_supp');
		$alamat_supp=$this->input->post('alamat_supp');
		$this->m_suplier->update_suplier($kode_supp,$nama_supp,$asal_supp,$alamat_supp);
		echo $this->session->set_flashdata('msg','<label class="label label-success">Data supplier berhasil diubah</label>');
		redirect('admin/suplier');
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
	function hapus_suplier(){
	if($this->session->userdata('akses')=='1'){
		$kode=$this->input->post('kode');
		$this->m_suplier->hapus_suplier($kode);
		echo $this->session->set_flashdata('msg','<label class="label label-success">Data supplier berhasil dihapus</label>');
		redirect('admin/suplier');
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
}