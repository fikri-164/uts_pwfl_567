<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

	public function datamhs(){
		return $this->db->count_all_results('mhs');
	}

	public function jmlhlk()
    {
      return $this->db->where(array('jenis_kelamin'=>'Laki-laki'))->count_all_results('mhs');
    }

    public function jmlhpr()
    {
      return $this->db->where(array('jenis_kelamin'=>'Perempuan'))->count_all_results('mhs');
    }

}