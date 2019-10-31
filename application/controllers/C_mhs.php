<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_mhs extends CI_Controller {

	public function tambahmhs()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama','nama','required');
		// $this->form_validation->set_rules('nip','nip','required');
		// $this->form_validation->set_rules('tujuan_tugas','tujuan_tugas','required');
		if (!$this->form_validation->run()==false) {
			$this->M_mhs->tambah_mhs();
			redirect('c_page/');
		}else {
			redirect('c_page/tambahmhs');
		}
	}

	public function editmhs()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama','nama','required');
		// $this->form_validation->set_rules('nip','nip','required');
		// $this->form_validation->set_rules('tujuan_tugas','tujuan_tugas','required');
		if ($this->form_validation->run()!=false) {
			$this->M_mhs->edit_mhs();
			redirect('c_page');
		}else{
			redirect('c_page/editmhs');
		}
	}
		
	public function hapusmhs($id){
		if ($id != "") {
			$this->M_mhs->hapus_mhs($id);
			redirect('c_mhs');
		}else{
			redirect('c_mhs');
		}
	}

}