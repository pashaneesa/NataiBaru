<?php
class Pengeluaran extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url();
            redirect($url);
        };
		$this->load->model('m_kategori');
		$this->load->model('m_barang');
		$this->load->model('m_suplier');
		$this->load->model('m_pengeluaran');
	}
	function index(){
	if($this->session->userdata('akses')=='1'){
		//$x['sup']=$this->m_suplier->tampil_suplier();
		$data['data']=$this->m_barang->tampil_barang_2();
		$this->load->view('admin/v_pengeluaran',$data);
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
	function get_barang(){
	if($this->session->userdata('akses')=='1'){
		$kobar=$this->input->post('kode_brg');
		$x['brg']=$this->m_barang->get_barang($kobar);
		$this->load->view('admin/v_detail_barang_keluar',$x);
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
	function add_to_cart(){
	if($this->session->userdata('akses')=='1'){
		$nofak=$this->input->post('nofak');
		$tgl=$this->input->post('tgl');
		$pelanggan=$this->input->post('pelanggan');
		$this->session->set_userdata('nofak',$nofak);
		$this->session->set_userdata('tglfak',$tgl);
		$this->session->set_userdata('pelanggan',$pelanggan);
		$kobar=$this->input->post('kode_brg');
		$produk=$this->m_barang->get_barang($kobar);
		$i=$produk->row_array();
		$data = array(
               'id'       => $i['kode_brg'],
               'name'     => $i['nama_brg'],
               'kategori'   => $i['nama_kat'],
               'satuan'   => $i['satuan_brg'],
               'price'    => $this->input->post('harga_brg'),
               'qty'      => $this->input->post('jumlah')
            );

		$this->cart->insert($data); 
		redirect('admin/pengeluaran');
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
	function remove(){
	if($this->session->userdata('akses')=='1'){
		$row_id=$this->uri->segment(4);
		$this->cart->update(array(
               'rowid'      => $row_id,
               'qty'     => 0
            ));
		redirect('admin/pengeluaran');
	}else{
        echo "Halaman tidak ditemukan";
    }
	}

	function simpan_pengeluaran(){
	if($this->session->userdata('akses')=='1'){
		$nofak=$this->session->userdata('nofak');
		$tglfak=$this->session->userdata('tglfak');
		$pelanggan=$this->session->userdata('pelanggan');
		if(!empty($nofak) && !empty($tglfak) && !empty($pelanggan)){
			$id_keluar=$this->m_pengeluaran->get_kobel();
			$order_proses=$this->m_pengeluaran->simpan_pengeluaran($id_keluar,$nofak,$pelanggan,$tglfak);
			if($order_proses){
				$this->cart->destroy();
				$this->session->unset_userdata('nofak');
				$this->session->unset_userdata('tglfak');
				$this->session->unset_userdata('pelanggan');
				echo $this->session->set_flashdata('msg','<label class="label label-success">Pengeluaran barang berhasil di simpan ke Database</label>');
				redirect('admin/pengeluaran');	
			}else{
				redirect('admin/pengeluaran');
			}
		}else{
			echo $this->session->set_flashdata('msg','<label class="label label-danger">Pengeluaran gagal di simpan, periksa kembali semua inputan Anda!</label>');
			redirect('admin/pengeluaran');
		}
	}else{
        echo "Halaman tidak ditemukan";
    }	
	}
}