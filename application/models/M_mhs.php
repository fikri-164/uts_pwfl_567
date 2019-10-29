<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mhs extends CI_Model {
	public function ambilmhs(){
		$query = $this->db->get('mhs');
		return $query->result_array();
	}
 
	public function editambilmhs($id){
		$this->db->where('id', $id);
		$query = $this->db->get('mhs');
		return $query->result_array();
	}

	public function tambah_mhs()
	{
		$data = array(
			'nim' => $this->input->post('nim'),
			'nama_mhs' => $this->input->post('nama'),
			'jenis_kelamin' => $this->input->post('jk'),
			'alamat' => $this->input->post('alamat'),
			'no_hp' => $this->input->post('no_hp')
		);
		return $this->db->insert('mhs',$data);
	}

	public function edit_mhs()
	{
		$data = array(
			'nim' => $this->input->post('nim'),
			'nama_mhs' => $this->input->post('nama'),
			'jenis_kelamin' => $this->input->post('jk'),
			'alamat' => $this->input->post('alamat'),
			'no_hp' => $this->input->post('no_hp')
		);
		$id_surat_lama = $this->input->post('id');
		$this->db->where('id', $id_surat_lama);
		return $this->db->update('mhs',$data);
	}

	public function hapus_mhs($id){
		return $this->db->delete('mhs',array('id' =>$id));
	}
}