<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
	  parent::__construct();
	  $this->load->model('UserModel');
	}

	public function index(){
	  if($this->session->userdata('authenticated')) // Jika user sudah login (Session authenticated ditemukan)
		redirect('page/welcome'); // Redirect ke page welcome
	  $this->load->view('login'); // Load view login.php
	}

	public function login(){
	  $username = $this->input->post('username'); // Ambil isi dari inputan username pada form login
	  $password = md5($this->input->post('password')); // Ambil isi dari inputan password pada form login dan encrypt dengan md5
	  $user = $this->UserModel->get($username); // Panggil fungsi get yang ada di UserModel.php
	  if(empty($user)){ // Jika hasilnya kosong / user tidak ditemukan
		$this->session->set_flashdata('message', 'Username tidak ditemukan'); // Buat session flashdata
		redirect('auth'); // Redirect ke halaman login
	  }else{
		if($password == $user->password){ // Jika password yang diinput sama dengan password yang didatabase
		  $session = array(
			'authenticated'=>true, // Buat session authenticated dengan value true
			'username'=>$user->username,  // Buat session username
			'nama'=>$user->nama // Buat session authenticated
		  );
		  $this->session->set_userdata($session); // Buat session sesuai $session
		  redirect('page/welcome'); // Redirect ke halaman welcome
		}else{
		  $this->session->set_flashdata('message', 'Password salah'); // Buat session flashdata
		  redirect('auth'); // Redirect ke halaman login
		}
	  }
	}

	public function pendaftaran()
	{
		$this->load->helper('form');
		$this->load->view('pendaftaran');	
	}

	public function proses_daftar()
	{	
		$data=array(
		'username' => $this->input->post('username'),
		'password' => md5($this->input->post('password')),
		'nama' => $this->input->post('nama'),
		);

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');

		if ($this->form_validation->run()  != FALSE) 
		{
			$this->load->view('pendaftaran');
		}
		else {

			$data['user'] = $this->UserModel->tampil_data($data);
			$this->session->set_flashdata('pesan', 'Pendaftaran Berhasil Dilakukan');
			redirect('Auth/pendaftaran', $data);
		}
	}

	public function logout(){
	  $this->session->sess_destroy(); // Hapus semua session
	  redirect('auth'); // Redirect ke halaman login
	}
  
}
