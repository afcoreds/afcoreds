<?php
class C_Barang extends CI_Controller
{
function __construct()
	{
		parent :: __construct();
		$this->load->model('M_Barang');
	}

function index()
	{
		$data = $this->M_Barang->tampildatabarang();   
		$d['tampil'] = $data;
		$x['isi'] = $this->load->view('V_TampilBarang',$d,true);
		$this->load->view('Template',$x);
	}
function formTambahBarang()
	{ 
		$x['isi'] = $this->load->view('V_formTambahBarang','',true);
		$this->load->view('Template',$x);
	}
function simpan()
	{
		$kode=$this->input->post('kode');
		$nama=$this->input->post('nama');
		$harga=$this->input->post('harga');		
		$this->M_Barang->simpanDataBarang($kode,$nama,$harga);
		redirect('C_Barang/');
	}
function formEditBarang()
	{
		$kode = $this->uri->segment('3');
		$data = $this->M_Barang->SalinDataBarang($kode);    
		$d['tampil'] = $data;    
		$x['isi'] = $this->load->view('V_formEditBarang',$d,true);
		$this->load->view('Template',$x);
	}
function edit()
	{
		$kode=$this->input->post('kode');
		$nama=$this->input->post('nama');
		$harga=$this->input->post('harga');		
		$this->M_Barang->editDataBarang($kode,$nama,$harga);
		redirect('C_Barang/');
	}
function hapus()
	{
		$kode = $this->uri->segment('3');
		$this->M_Barang->hapusDataBarang($kode);
		redirect('C_Barang/');
	}
}
?>