<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sepak extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Sepak_model');
	}	 

	public function ambil_data_sepak($id_jdw)
	{
		$data['ambil_data_sepak'] = $this->Sepak_model->get_id($id_jdw);
		$this->load->view('ubah_data_sepak', $data);	
	}

	
	public function data_sepak()
	{
		$data['data_sepak'] = $this->Sepak_model->get_data();
		$this->load->view('data_sepak', $data);	
	}

	public function tambah_data()
	{
		$this->load->helper('form');	
		$this->load->view('tambah_data_sepak');	
	}
		
	public function kirim_data()
	{
		$this->load->helper('url');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_clb', 'Nama_clb', 'trim|required|is_unique[jadwal.nama_clb]');
		$this->form_validation->set_rules('jadwal', 'jadwal', 'trim|required|is_unique[jadwal.jadwal]required');

		if($this->form_validation->run()  != FALSE) {

		$nama_clb=$this->input->post('nama_clb');
		$jadwal=$this->input->post('jadwal');
		$kategori=$this->input->post('kategori');


		$data=array(
			'nama_clb'=>$nama_clb,
			'jadwal'=>$jadwal,
			'kategori'=>$kategori,
		);


		$this->Sepak_model->tambah_data($data, 'Sepak');
		redirect('sepak/data_sepak');	
	}else {
		$this->load->view('tambah_data_sepak');	
	}
}

public function ubah_data()
	{
		$this->load->library('form_validation');
		$id_jdw = $this->input->post('id_jdw');
		$nama_clb = $this->input->post('nama_clb');
		$jadwal = $this->input->post('jadwal');
		$kategori = $this->input->post('kategori');
		$this->form_validation->set_rules('nama_clb', 'Nama_clb', 'required');
		$this->form_validation->set_rules('jadwal', 'Jadwal', 'required');

		if($this->form_validation->run()  != FALSE) {

			$data=array(
				'nama_clb'=>$nama_clb,
				'jadwal'=>$jadwal,
				'kategori'=>$kategori,
			);


		$this->Sepak_model->ubah_data($id_jdw,$data, 'jadwal');
		$this->session->set_flashdata('success', 'Data Berhasil diperbaharui');
		redirect('sepak/data_sepak');	
	}else {
		$data['ambil_data_sepak'] = $this->Sepak_model->get_id($id_jdw);
		$this->load->view('ubah_data_sepak', $data);	
	}
}

public function lihat()
	{
		$data['lihat'] = $this->Sepak_model->tampil_lihat();
		$this->load->view('lihat/lihat', $data);	
	}

public function hapus($id){
	$where = array('id' => $id);
	$this->Sepak_model->hapus_data($where,'sepak');
	redirect('Sepak/data_sepak');
	}
}
