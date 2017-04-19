<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ruangan_mod extends CI_Model {

	public function select_all(){

		$this->db->from('tb_ruangan');
		$this->db->order_by('kd_ruang','DESC');
		return $this->db->get();

		
		
	}

	function get_inmut(){
		return $this->db->get('tb_kategori_inmut');
	}

}