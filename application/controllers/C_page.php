<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_page extends CI_Controller {

	public function index()
	{
		
		$data = array(
			"title"	=> "Dashboard",
			"home"	=> "class='nav-item active'",
			"vmhs"	=> "class='nav-item'",
			"vlog"	=> "class='nav-item'",
			"dm" 	=> $this->M_home->datamhs(), 
			"lk" 	=> $this->M_home->jmlhlk(), 
			"pr" 	=> $this->M_home->jmlhpr(), 
			);
		$this->load->view('template/v_header',$data);
		$this->load->view('v_dashboard',$data);
		$this->load->view('template/v_footer2');
	}
		public function mhs()
	{
		$data = array(
			"title"	=> "Data Mahasiswa",
			"home"	=> "class='nav-item'",
			"vmhs"	=> "class='nav-item active'",
			"vlog"	=> "class='nav-item'",
			"amhs" 	=> $this->M_mhs->ambilmhs(), 
			);
		$this->load->view('template/v_header',$data);
		$this->load->view('v_mhs',$data);
		$this->load->view('template/v_footer');
	}

	public function tambahmhs()
	{
		$data = array(
			"title"	=> "Tambah Data Mahasiswa",
			"home"	=> "class='nav-item'",
			"vmhs"	=> "class='nav-item active'",
			"vlog"	=> "class='nav-item'",
			);
		$this->load->view('template/v_header',$data);
		$this->load->view('v_mhs_tambah');
		$this->load->view('template/v_footer');
	}

	public function editmhs($id)
	{
		$data = array(
			"title"	=> "Edit Data Mahasiswa",
			"home"	=> "class='nav-item'",
			"vmhs"	=> "class='nav-item active'",
			"vlog"	=> "class='nav-item'",
			"aamhs" 	=> $this->M_mhs->editambilmhs($id), 
			);
		$this->load->view('template/v_header',$data);
		$this->load->view('v_mhs_edit',$data);
		$this->load->view('template/v_footer');
	}

	public function riwayatmhs($nim)
	{
		$data = array(
			"title"	=> "Log Data Mahasiswa",
			"home"	=> "class='nav-item'",
			"vmhs"	=> "class='nav-item'",
			"vlog"	=> "class='nav-item active'",
			"riwayat" 	=> $this->M_mhs->ambildatanim($nim), 
			);
		$this->load->view('template/v_header',$data);
		$this->load->view('v_riwayat',$data);
		$this->load->view('template/v_footer');
	}

	public function logmhs()
	{
		$data = array(
			"title"	=> "Log Data Mahasiswa",
			"home"	=> "class='nav-item'",
			"vmhs"	=> "class='nav-item'",
			"vlog"	=> "class='nav-item active'",
			"riwayat" 	=> $this->M_mhs->ambillog(), 
			);
		$this->load->view('template/v_header',$data);
		$this->load->view('v_riwayat',$data);
		$this->load->view('template/v_footer');
	}
}