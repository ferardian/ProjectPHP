<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_mod extends CI_Model {

	public function select_all(){
		$this->db->from('tb_user');
		$this->db->join('tb_ruangan','tb_ruangan.kd_ruang=tb_user.kd_ruang');
		$this->db->order_by('id_user','DESC');
		return $this->db->get();
		
		
	}


	function get_ruang(){
		return $this->db->get('tb_ruangan');
	}

	function get_status(){
		return $this->db->get('tb_kategori_user');
	}

	function get_inmut(){
		return $this->db->get('tb_kategori_inmut');
	}

}