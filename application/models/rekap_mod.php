<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rekap_mod extends CI_Model {

	function select_all($id_pas){
		// $ruang = $this->session->userdata('kd_ruang');
		// $this->db->where('kd_ruang',$ruang);
		return $this->db->get('tb_harian',$id_pas);
				
		// $this->db->from('tb_harian');
	
		// $this->db->join('tb_ruangan', 'tb_ruangan.kd_ruang = tb_harian.kd_ruang');
		// //$this->db->order_by('tgl_masuk','desc');
		// $query = $this->db->get();

		// return $query;

		// $this->db->from('tb_harian');
		// $this->db->join('tb_ruangan','tb_ruangan.kd_ruang=tb_harian.kd_ruang','left');
		// //$this->db->join('tb_unit_kerja', 'tb_unit_kerja.kd_unit = tb_karyawan.kd_unit');
		// $this->db->where('tb_harian.kd_ruang',$kd_ruang);
		// $query = $this->db->get();

		// return $query;
	}



	function lihat_semua(){

		return $this->db->get('tb_ruangan',14);
		
	}

	function lihat_ruangan($id){
		$this->db->from('tb_harian');
		$this->db->join('tb_ruangan','tb_ruangan.kd_ruang=tb_harian.kd_ruang');
		$this->db->where('tb_harian.kd_ruang',$id);
		$this->db->order_by('id_pas','DESC');
		$query = $this->db->get();

		return $query;
	}

	function ambil_ruangan($id){
		$this->db->select('ruangan');
		$this->db->from('tb_ruangan');
		$this->db->where('kd_ruang',$id);
		$query = $this->db->get();

		return $query;

	}




	public function getruang(){
		return $this->db->get('tb_ruangan');

	}

	public function getinsiden(){
	
		// $this->db->join('tb_inmut','tb_inmut.id_ruang_inmut=tb_rekap_inmut.id_ruang_inmut');
		$query = $this->db->get('tb_insiden');

		return $query;
}

	function simpan($data){
// 		$data=array(//'id_pas'=>$this->input->post('id_pas'),
//  'kd_ruang'=>$kd_ruang,
//  'nama_pas'=>$this->input->post('nama_pas'),
//  'umur'=>$this->input->post('umur'),
//  'jekel'=>$this->input->post('jekel'),
// 'diagnosa'=>$this->input->post('diagnosa'),
// 'tindakan'=>$this->input->post('tindakan'),
// 'infeksi'=>$this->input->post('infeksi'),
// 'tirah'=>$this->input->post('tirah'),
// 'decubitus'=>$this->input->post('decubitus'),
// 'kultur'=>$this->input->post('kultur'),
// 'antibiotik'=>$this->input->post('antibiotik'),

//'jurusan'=>$this->input->post('koor_unit')


			// );

		$this->db->insert('tb_harian',$data);
		//return $this->db->insert_id();
	}



	function select_pasien($id_pas){

		$this->db->from('tb_harian');
		$this->db->join('tb_ruangan','tb_ruangan.kd_ruang=tb_harian.kd_ruang');
		$this->db->where('tb_harian.id_pas',$id_pas);
		$query = $this->db->get();

		return $query;
	}
	function select_ruang($kd_ruang){

		$this->db->from('tb_harian');

		$this->db->join('tb_ruangan', 'tb_ruangan.kd_ruang = tb_harian.kd_ruang');
		$this->db->where('tb_harian.kd_ruang',$kd_ruang);
		$this->db->order_by('id_pas','DESC');
		$query = $this->db->get();

		return $query;
	}

	function select_ikp($kd_ruang){

		$this->db->from('tb_ikp');
		$this->db->join('tb_insiden','tb_insiden.kd_insiden=tb_ikp.kd_insiden');
		$this->db->join('tb_ruangan', 'tb_ruangan.kd_ruang = tb_ikp.kd_ruang');
		$this->db->where('tb_ikp.kd_ruang',$kd_ruang);
		$this->db->order_by('id','DESC');
		$query = $this->db->get();

		return $query;
	}

	function select_ikp_semua(){
		$this->db->from('tb_ikp');
		$this->db->join('tb_insiden','tb_insiden.kd_insiden=tb_ikp.kd_insiden');
		$this->db->join('tb_ruangan', 'tb_ruangan.kd_ruang = tb_ikp.kd_ruang');
		$this->db->order_by('id','DESC');
		return $this->db->get();
	}

	public function getunit(){
		return $this->db->get('tb_unit_kerja');


	}

	public function getjabatan(){
		return $this->db->get('tb_jabatan');
	}

// 	function simpan(){
// 		$data=array('id_karyawan'=>$this->input->post('id_karyawan'),
//  //'no_id'=>$this->input->post('no_id').
//  'nama_karyawan'=>$this->input->post('nama'),
//  'tempat_lahir'=>$this->input->post('tempat_lahir'),
//  'tgl_lahir'=>$this->input->post('tgl_lahir'),
// 'jekel'=>$this->input->post('jekel'),
// 'alamat'=>$this->input->post('alamat'),
// 'no_telp'=>$this->input->post('no_telp'),
// 'pendidikan'=>$this->input->post('pendidikan'),
// 'tgl_masuk'=>$this->input->post('tgl_masuk'),
// 'kd_unit'=>$this->input->post('kd_unit'),
// 'kd_jabatan'=>$this->input->post('kd_jabatan'),
// //'jurusan'=>$this->input->post('koor_unit')


// 			);

// 		$this->db->insert('tb_karyawan',$data);
// 	}

function update(){
		$data=array('id_karyawan'=>$this->input->post('id_karyawan'),
 //'no_id'=>$this->input->post('no_id').
 'nama_karyawan'=>$this->input->post('nama'),
 'tempat_lahir'=>$this->input->post('tempat_lahir'),
 'tgl_lahir'=>$this->input->post('tgl_lahir'),
'jekel'=>$this->input->post('jekel'),
'alamat'=>$this->input->post('alamat'),

'pendidikan'=>$this->input->post('pendidikan'),
'tgl_masuk'=>$this->input->post('tgl_masuk'),
'kd_unit'=>$this->input->post('kd_unit'),
'kd_jabatan'=>$this->input->post('kd_jabatan'),
//'jurusan'=>$this->input->post('koor_unit')


			);

		$this->db->where('id_karyawan', $this->input->post('id_karyawan'));

	$this->db->update('tb_karyawan',$data);
	}

	
	public function getid($id)
	{
		$this->db->where('kd_ruang', $id);
		return $this->db->get('tb_ruangan');

	}
}