<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gol extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Gol_model');
	}	 

	public function ambil_data_Gol($id)
	{
		$data['ambil_data_gol'] = $this->Gol_model->get_id($id);
		$this->load->view('ubah_data_gol', $data);	
	}

	
	public function data_gol()
	{
		$data['data_gol'] = $this->Gol_model->get_data();
		$this->load->view('data_gol', $data);	
	}

	public function tambah_data()
	{
		$this->load->helper('form');	
		$this->load->view('tambah_data_gol');	
	}
		
	public function kirim_data()
	{
		$this->load->helper('url');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_tim', 'Nama_std', 'trim|required|is_unique[tim.nama_tim]');
		$this->form_validation->set_rules('jenis_liga', 'Jenis_liga', 'trim|required|is_unique[tim.jenis_liga]required');

		if($this->form_validation->run()  != FALSE) {

		$nama_tim=$this->input->post('nama_tim');
		$jenis_liga=$this->input->post('jenis_liga');
		$negara=$this->input->post('negara');


		$data=array(
			'nama_tim'=>$nama_tim,
			'jenis_liga'=>$jenis_liga,
			'negara'=>$negara,
		);


		$this->Gol_model->tambah_data($data, 'Gol');
		redirect('gol/data_gol');	
	}else {
		$this->load->view('tambah_data_gol');	
	}
}

public function ubah_data()
	{
		$this->load->library('form_validation');
		$id = $this->input->post('id');
		$nama_tim = $this->input->post('nama_tim');
		$jenis_liga = $this->input->post('jenis_liga');
		$negara = $this->input->post('negara');
		$this->form_validation->set_rules('nama_tim', 'Nama_tim', 'required');
		$this->form_validation->set_rules('jenis_liga', 'Jenis_liga', 'required');

		if($this->form_validation->run()  != FALSE) {

			$data=array(
				'nama_tim'=>$nama_tim,
				'jenis_liga'=>$jenis_liga,
				'negara'=>$negara,
			);


		$this->Gol_model->ubah_data($id,$data, 'tim');
		$this->session->set_flashdata('success', 'Data Berhasil diperbaharui');
		redirect('gol/data_gol');	
	}else {
		$data['ambil_data_gol'] = $this->Gol_model->get_id($id);
		$this->load->view('ubah_data_gol', $data);	
	}
}

public function delok()
	{
		$data['delok'] = $this->Gol_model->tampil_delok();
		$this->load->view('lihat/delok', $data);	
	}

public function delik()
	{
		$data['delik'] = $this->Gol_model->tampil_delok();
		$this->load->view('lihat/delik', $data);	
	}

public function hapus($id){
	$where = array('id' => $id);
	$this->Gol_model->hapus_data($where,'gol');
	redirect('Gol/data_gol');
	}
}