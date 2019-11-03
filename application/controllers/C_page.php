<<<<<<< HEAD
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_page extends CI_Controller {

	public function index()
	{
		$data = array(
            'dm' => $this->M_home->datamhs(), 
            'lk' => $this->M_home->jmlhlk(), 
            'pr' => $this->M_home->jmlhpr(), 
        );
		$this->load->view('template/v_header');
		$this->load->view('v_dashboard',$data);
		$this->load->view('template/v_footer');
	}

	public function mhs()
	{
		$this->load->view('template/v_header');
		$data['amhs'] = $this->M_mhs->ambilmhs();
		$this->load->view('v_mhs',$data);
		$this->load->view('template/v_footer');
	}

	public function tambahmhs()
	{
		$this->load->view('template/v_header');
		$this->load->view('v_mhs_tambah');
		$this->load->view('template/v_footer');
	}

	public function editmhs($id)
	{
		$this->load->view('template/v_header');
		$data['aamhs'] = $this->M_mhs->editambilmhs($id);
		$this->load->view('v_mhs_edit',$data);
		$this->load->view('template/v_footer');
	}

	public function riwayatmhs($nim)
	{
		$this->load->view('template/v_header');
		$data['riwayat'] = $this->M_mhs->ambildatanim($nim);
		$this->load->view('v_riwayat',$data);
		$this->load->view('template/v_footer');
	}

=======
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_page extends CI_Controller {

	public function index()
	{
		$data['amhs'] = $this->M_mhs->ambilmhs();
		$this->load->view('v_mhs',$data);
	}

	public function tambahmhs()
	{
		$this->load->view('v_mhs_tambah');
	}

	public function editmhs($id)
	{
		$data['aamhs'] = $this->M_mhs->editambilmhs($id);
		$this->load->view('v_mhs_edit',$data);
	}

	public function riwayatmhs($nim)
	{
		$data['riwayat'] = $this->M_mhs->ambildatanim($nim);
		$this->load->view('v_riwayat',$data);
	}

>>>>>>> f61187f15a9e036df61543a699c67a3f5e884015
}