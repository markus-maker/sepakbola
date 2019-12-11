<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bola_model extends CI_Model {

	public function get_data()
	{
		$query = $this->db->get('stadion');
		return $query->result();
	}

	public function tambah_data($data, $table)
	{
		$this->db->insert($table, $data);	
	}

	public function ubah_data($id, $data, $table)
	{
		$this->db->where('id', $id);
		$this->db->update($table, $data);	
	}

	public function get_id($id)
	{
		$this->db->from('stadion');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function tampil_lihat()
	{
		$this->db->select('nama_clb, jadwal, nama_std, lokasi, kapasitas');
		$this->db->from('stadion');
		$this->db->join('jadwal' , 'jadwal.id_jdw2 = stadion.id');
		$query = $this->db->get();
		return $query->result();
	}
	
}
