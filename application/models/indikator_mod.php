<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class indikator_mod extends CI_Model
{
	
	function select_all($kd_ruang){
		$this->db->from('tb_rekap_inmut');
		$this->db->join('tb_ruangan','tb_ruangan.kd_ruang = tb_rekap_inmut.kd_ruang');
		$this->db->join('tb_inmut', 'tb_inmut.kd_inmut = tb_rekap_inmut.kd_inmut');
		$this->db->where('tb_rekap_inmut.kd_ruang',$kd_ruang);
		$this->db->order_by('id','DESC');
		// $this->db->order_by('id_pas','DESC');
		$query = $this->db->get();

		return $query;
		// $this->db->from('tb_rekap_inmut');
		// $this->db->join('tb_inmut', 'tb_inmut.kd_inmut = tb_rekap_inmut.kd_inmut');
		// $this->db->join('tb_ruangan', 'tb_ruangan.kd_ruang = tb_rekap_inmut.kd_ruang');
		
		// $query = $this->db->get();

		// return $query;
	}


	function select_master_indikator(){
		return $this->db->get('tb_inmut');
	}

	function lihat_semua(){

		return $this->db->get('tb_ruangan',14);
		//$this->db->join('tb_pokja', 'tb_pokja.kd_pokja = tb_dokumen.kd_pokja');
		
	
		// $this->db->from('tb_rekap_inmut');
		// $this->db->join('tb_ruangan','tb_ruangan.kd_ruang = tb_rekap_inmut.kd_ruang');
		// $this->db->join('tb_inmut', 'tb_inmut.kd_inmut = tb_rekap_inmut.kd_inmut');
		// $this->db->order_by('id','DESC');
		// // $this->db->order_by('id_pas','DESC');
		// $query = $this->db->get();

		// return $query;
	}


	function lihat_ruangan($id){
		$this->db->from('tb_rekap_inmut');
		$this->db->join('tb_ruangan','tb_ruangan.kd_ruang = tb_rekap_inmut.kd_ruang');
		$this->db->join('tb_inmut', 'tb_inmut.kd_inmut = tb_rekap_inmut.kd_inmut');
		$this->db->where('tb_rekap_inmut.kd_ruang',$id);
		$this->db->order_by('id','DESC');
		$query = $this->db->get();

		return $query;
	}

	function select_analisa($kd_ruang){
		$this->db->from('tb_analisa');
		$this->db->join('tb_ruangan','tb_ruangan.kd_ruang=tb_analisa.kd_ruang');
		$this->db->join('tb_inmut','tb_inmut.kd_inmut=tb_analisa.kd_inmut');
		$this->db->where('tb_analisa.kd_ruang',$kd_ruang);
		$this->db->order_by('kd_analisa','DESC');
		return $this->db->get();

	}

function cetak_analisa($id){
		$this->db->from('tb_analisa');
		$this->db->join('tb_ruangan','tb_ruangan.kd_ruang=tb_analisa.kd_ruang');
		$this->db->join('tb_inmut','tb_inmut.kd_inmut=tb_analisa.kd_inmut');
		$this->db->where('tb_analisa.kd_analisa',$id);
		return $this->db->get();

	}

	public function getid($id)
	{
		$this->db->where('kd_ruang', $id);
		return $this->db->get('tb_ruangan');

	}


	function simpan(){
		$data=array('id_karyawan'=>$this->input->post('id_karyawan'),
 //'no_id'=>$this->input->post('no_id').
		'nama_karyawan'=>$this->input->post('nama'),
		'tempat_lahir'=>$this->input->post('tempat_lahir'),
		'tgl_lahir'=>$this->input->post('tgl_lahir'),
		'jekel'=>$this->input->post('jekel'),
		'alamat'=>$this->input->post('alamat'),
		'no_telp'=>$this->input->post('no_telp'),
		'pendidikan'=>$this->input->post('pendidikan'),
		'tgl_masuk'=>$this->input->post('tgl_masuk'),
		'kd_unit'=>$this->input->post('kd_unit'),
		'kd_jabatan'=>$this->input->post('kd_jabatan'),
//'jurusan'=>$this->input->post('koor_unit')


			);

		$this->db->insert('tb_karyawan',$data);
	}

	public function getindikator_ruang($id_ruang_inmut){
		$this->db->from('tb_inmut');
		// $this->db->join('tb_inmut','tb_inmut.id_ruang_inmut=tb_rekap_inmut.id_ruang_inmut');
		$this->db->where('tb_inmut.id_ruang_inmut',$id_ruang_inmut);
		
		$query = $this->db->get();

		return $query;


	}
	//join 3 tabel
	public function getindikator_utama(){
		$this->db->from('tb_rekap_inmut');
		$this->db->join('tb_inmut','tb_inmut.id_ruang_inmut=tb_rekap_inmut.id_ruang_inmut');
		$this->db->where('tb_rekap_inmut.id_ruang_inmut',$id_ruang_inmut);
		$query = $this->db->get();

		return $query;

	}
}

 ?>