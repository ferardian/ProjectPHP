<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class report_mod extends CI_Model {

	function select($tgl_awal,$tgl_akhir,$tindakan){
		if ($tindakan=='UC') {
			$infeksi='ISK';
		}else if($tindakan=='IVL'){
			$infeksi='PLEB';
		} else if ($tindakan=='OP'){
			$infeksi='IDO';
		} else if ($tindakan=='ETT'){
			$infeksi='VAP';
		}

		
		$query = $this->db->query('
			SELECT 

(SELECT COUNT(tindakan) 
	FROM tb_harian 
	WHERE  tindakan="'.$tindakan.'" AND tindakan NOT LIKE ""  AND t.kd_ruang = tb_harian.kd_ruang and tanggal between "'.$tgl_awal.'" and "'.$tgl_akhir.'"
) AS tindakan,

(SELECT COUNT(tindakan2) 
	FROM tb_harian 
	WHERE tindakan2="'.$tindakan.'" AND tindakan2 NOT LIKE ""  AND t.kd_ruang = tb_harian.kd_ruang and tanggal between "'.$tgl_awal.'" and "'.$tgl_akhir.'"
) AS tindakan2,

(SELECT COUNT(tindakan3) 
	FROM tb_harian 
	WHERE tindakan3="'.$tindakan.'" AND tindakan3 NOT LIKE ""  AND t.kd_ruang = tb_harian.kd_ruang and tanggal between "'.$tgl_awal.'" and "'.$tgl_akhir.'"
) AS tindakan3,

(SELECT COUNT(tindakan4) 
	FROM tb_harian 
	WHERE tindakan4="'.$tindakan.'" AND tindakan4 NOT LIKE ""  AND t.kd_ruang = tb_harian.kd_ruang and tanggal between "'.$tgl_awal.'" and "'.$tgl_akhir.'"
) AS tindakan4,

(SELECT COUNT(infeksi) 
	FROM tb_harian 
	WHERE infeksi NOT LIKE "" AND infeksi="'.$infeksi.'" AND t.kd_ruang = tb_harian.kd_ruang and tanggal between "'.$tgl_awal.'" and "'.$tgl_akhir.'"
 ) AS infeksi, 
 
 tb_ruangan.ruangan
 
FROM tb_harian t JOIN tb_ruangan ON t.kd_ruang=tb_ruangan.kd_ruang 
WHERE t.tindakan="'.$tindakan.'" OR t.tindakan2="'.$tindakan.'" OR t.tindakan3="'.$tindakan.'"  OR t.tindakan4="'.$tindakan.'" 
AND t.tanggal BETWEEN "'.$tgl_awal.'" AND "'.$tgl_akhir.'" GROUP BY t.kd_ruang');
		return $query;
	}


	function select_analisa(){
		$query=$this->db->query('SELECT*FROM tb_analisa JOIN tb_inmut ON tb_inmut.kd_inmut=tb_analisa.kd_inmut JOIN tb_ruangan ON tb_ruangan.kd_ruang=tb_analisa.kd_ruang ORDER BY kd_analisa DESC LIMIT 1');
		return $query;

	}

	function select_infeksi($tgl_awal,$tgl_akhir,$tindakan){
		$query = $this->db->query('select count(tindakan) AS tindakan, tb_ruangan.ruangan from tb_harian join tb_ruangan on tb_ruangan.kd_ruang=tb_harian.kd_ruang  where tindakan="'.$tindakan.'" and tanggal between "'.$tgl_awal.'" and "'.$tgl_akhir.'" and infeksi not like "" group by tb_harian.kd_ruang');
				
			
	}

	function select_ikp($tgl_awal,$tgl_akhir){
		return $this->db->query('select*from tb_ikp join tb_insiden on tb_insiden.kd_insiden=tb_ikp.kd_insiden join tb_ruangan on tb_ruangan.kd_ruang=tb_ikp.kd_ruang where tanggal BETWEEN "'.$tgl_awal.'"AND"'.$tgl_akhir.'" order by tanggal' );

	}

	function select_bulan($tgl_awal){
		$query = $this->db->query('select month("'.$tgl_awal.'") as bln from tb_harian group by bln');
		return $query;
	}


	public function getindikator_ruang(){
	
		// $this->db->join('tb_inmut','tb_inmut.id_ruang_inmut=tb_rekap_inmut.id_ruang_inmut');
		$query = $this->db->get('tb_inmut');

		return $query;
}

public function getruang(){
	
		// $this->db->join('tb_inmut','tb_inmut.id_ruang_inmut=tb_rekap_inmut.id_ruang_inmut');
		$query = $this->db->get('tb_ruangan');

		return $query;
}

function daftar_analisa($kd_ruang){
	
		$query=$this->db->query('SELECT*FROM tb_analisa JOIN tb_inmut ON tb_inmut.kd_inmut=tb_analisa.kd_inmut JOIN tb_ruangan ON tb_ruangan.kd_ruang=tb_analisa.kd_ruang where tb_analisa.kd_ruang="'.$kd_ruang.'" ORDER BY kd_analisa DESC ');
		return $query;
}

function daftar_analisa_semua(){
	$query=$this->db->query('SELECT*FROM tb_analisa JOIN tb_inmut ON tb_inmut.kd_inmut=tb_analisa.kd_inmut JOIN tb_ruangan ON tb_ruangan.kd_ruang=tb_analisa.kd_ruang ORDER BY kd_analisa DESC ');
		return $query;	
}


	// public function getruang(){
	// 	return $this->db->get('tb_ruangan');

	// }

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



	// function select_unit($kd_karyawan){

	// 	$this->db->from('tb_karyawan');
	// 	$this->db->join('tb_jabatan','tb_jabatan.kd_jabatan=tb_karyawan.kd_jabatan','left');
	// 	$this->db->join('tb_unit_kerja', 'tb_unit_kerja.kd_unit = tb_karyawan.kd_unit');
	// 	$this->db->where('tb_karyawan.id_karyawan',$kd_karyawan);
	// 	$query = $this->db->get();

	// 	return $query;
	// }
	function select_ruang($kd_ruang){

		$this->db->from('tb_harian');
		$this->db->join('tb_ruangan', 'tb_ruangan.kd_ruang = tb_harian.kd_ruang');
		$this->db->where('tb_harian.kd_ruang',$kd_ruang);
		$query = $this->db->get();

		return $query;
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