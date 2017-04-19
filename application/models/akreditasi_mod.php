<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class akreditasi_mod extends CI_Model
{

	function select_all(){
		$this->db->from('tb_dokumen');
		$this->db->join('tb_standar','tb_standar.kd_standar = tb_dokumen.kd_standar');
		$this->db->join('tb_jenis_dok', 'tb_jenis_dok.kd_jenis_dok = tb_dokumen.kd_jenis_dok');
		//$this->db->join('tb_kelompok', 'tb_kelompok.kd_kelompok = tb_pokja.kd_kelompok');
		$this->db->join('tb_pokja', 'tb_pokja.kd_pokja = tb_dokumen.kd_pokja');
		$this->db->join('tb_ep', 'tb_ep.kd_ep = tb_dokumen.kd_ep');
		// $this->db->where('tb_dokumen.kd_dokumen',$kd_dokumen);
		$this->db->order_by('kd_dokumen','DESC');
		// $this->db->order_by('id_pas','DESC');
		$query = $this->db->get();

		return $query;
		// $this->db->from('tb_rekap_inmut');
		// $this->db->join('tb_inmut', 'tb_inmut.kd_inmut = tb_rekap_inmut.kd_inmut');
		// $this->db->join('tb_ruangan', 'tb_ruangan.kd_ruang = tb_rekap_inmut.kd_ruang');
		
		// $query = $this->db->get();

		// return $query;
	}


	public function simpan($data){


		$this->db->insert('tb_dokumen',$data);
	}


	public function getpokja(){
		$query = $this->db->get('tb_pokja');
		return $query;
	}

	public function getstandar(){
		$query = $this->db->get('tb_standar');
		return $query;
	}

	public function getep(){
		$query = $this->db->get('tb_ep');
		return $query;
	}

	public function getkelompok(){
		$query = $this->db->get('tb_kelompok');
		return $query;
	}

	public function getjenisdok(){
		$query = $this->db->get('tb_jenis_dok');
		return $query;
	}

	public function getnamafile(){
		$query = $this->db->get('tb_dokumen');
		return $query;
	}

	public function pokja(){
		$this->db->from('tb_pokja');
		//$this->db->join('tb_kelompok', 'tb_kelompok.kd_kelompok = tb_pokja.kd_kelompok');
		$this->db->group_by('kd_pokja');
		$query = $this->db->get();
		return $query;
	}

	public function masuk_pokja($id){
		$this->db->from('tb_dokumen');
		$this->db->join('tb_standar','tb_standar.kd_standar = tb_dokumen.kd_standar');
		$this->db->join('tb_jenis_dok', 'tb_jenis_dok.kd_jenis_dok = tb_dokumen.kd_jenis_dok');
		//$this->db->join('tb_kelompok', 'tb_kelompok.kd_kelompok = tb_dokumen.kd_kelompok');
		$this->db->join('tb_pokja', 'tb_pokja.kd_pokja = tb_dokumen.kd_pokja');
		//$this->db->join('tb_kelompok', 'tb_kelompok.kd_kelompok = tb_pokja.kd_kelompok');
		$this->db->join('tb_ep', 'tb_ep.kd_ep = tb_dokumen.kd_ep');
			$this->db->where('tb_dokumen.kd_pokja', $id);
			$query = $this->db->get();
			return $query;
	}



}