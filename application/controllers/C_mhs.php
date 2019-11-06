<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_mhs extends CI_Controller {

	public function tambahmhs()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nim','nim','required');
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('jk','jk','required');
		$this->form_validation->set_rules('alamat','alamat','required');
		$this->form_validation->set_rules('no_hp','no_hp','required');
		if (!$this->form_validation->run()==false) {
			$this->M_mhs->tambah_mhs();
			$this->session->set_flashdata('berhasil','<label class="label label-success">data berhasil ditambahkan!</label>');
			redirect('c_page/mhs');
		}else {
			$this->session->set_flashdata('gagal','<label class="label label-danger">data gagal ditambahkan!</label>');
			redirect('c_page/tambahmhs');
		}
	}

	public function editmhs()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nim','nim','required');
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('jk','jk','required');
		$this->form_validation->set_rules('alamat','alamat','required');
		$this->form_validation->set_rules('no_hp','no_hp','required');
		if ($this->form_validation->run()!=false) {
			$this->M_mhs->edit_mhs();
			$this->session->set_flashdata('berhasil','<label class="label label-success">data berhasil diedit!</label>');
			redirect('c_page/mhs');
		}else{
			$this->session->set_flashdata('gagal','<label class="label label-danger">data gagal diedit!</label>');
			redirect('c_page/tambahmhs');
			redirect('c_page/editmhs');
		}
	}
		
	public function hapusmhs($id){
		if ($id != "") {
			$this->M_mhs->hapus_mhs($id);
			$this->session->set_flashdata('berhasil','<label class="label label-success">data berhasil dihapus!</label>');
			redirect('c_page/mhs');
		}else{
			$this->session->set_flashdata('gagal','<label class="label label-danger">data gagal dihapus!</label>');
			redirect('c_page/tambahmhs');
			redirect('c_page/mhs');
		}
	}

}