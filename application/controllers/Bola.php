<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bola extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Bola_model');
	}	 

	public function ambil_data_bola($id)
	{
		$data['ambil_data_bola'] = $this->Bola_model->get_id($id);
		$this->load->view('ubah_data_bola', $data);	
	}

	
	public function data_bola()
	{
		$data['data_bola'] = $this->Bola_model->get_data();
		$this->load->view('data_bola', $data);	
	}

	public function tambah_data()
	{
		$this->load->helper('form');	
		$this->load->view('tambah_data_bola');	
	}
		
	public function kirim_data()
	{
		$this->load->helper('url');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_std', 'Nama_std', 'trim|required|is_unique[stadion.nama_std]');
		$this->form_validation->set_rules('lokasi', 'Lokasi', 'trim|required|is_unique[stadion.lokasi]required');

		if($this->form_validation->run()  != FALSE) {

		$nama_std=$this->input->post('nama_std');
		$lokasi=$this->input->post('lokasi');
		$kapasitas=$this->input->post('kapasitas');


		$data=array(
			'nama_std'=>$nama_std,
			'lokasi'=>$lokasi,
			'kapasitas'=>$kapasitas,
		);


		$this->Bola_model->tambah_data($data, 'Bola');
		redirect('bola/data_bola');	
	}else {
		$this->load->view('tambah_data_bola');	
	}
}

public function ubah_data()
	{
		$this->load->library('form_validation');
		$id = $this->input->post('id');
		$nama_std = $this->input->post('nama_std');
		$lokasi = $this->input->post('lokasi');
		$kapasitas = $this->input->post('kapasitas');
		$this->form_validation->set_rules('nama_std', 'Nama_std', 'required');
		$this->form_validation->set_rules('lokasi', 'Lokasi', 'required');

		if($this->form_validation->run()  != FALSE) {

			$data=array(
				'nama_std'=>$nama_std,
				'lokasi'=>$lokasi,
				'kapasitas'=>$kapasitas,
			);


		$this->Bola_model->ubah_data($id,$data, 'stadion');
		$this->session->set_flashdata('success', 'Data Berhasil diperbaharui');
		redirect('bola/data_bola');	
	}else {
		$data['ambil_data_bola'] = $this->Bola_model->get_id($id);
		$this->load->view('ubah_data_bola', $data);	
	}
}

public function lihat()
	{
		$data['lihat'] = $this->Bola_model->tampil_lihat();
		$this->load->view('lihat/lihat', $data);	
	}

public function hapus($id){
	$where = array('id' => $id);
	$this->Bola_model->hapus_data($where,'bola');
	redirect('Bola/data_bola');
	}
}
