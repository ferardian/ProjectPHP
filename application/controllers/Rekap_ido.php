<?php 
	/**
	* 
	*/
	class Rekap_ido extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
			$this->load->model(array('rekap_ido_mod'));
			if (!is_login()) {
				redirect('login_controller');
			}
		}
	
	public function index(){ 
			//$session_id = $this->session->userdata('kd_ruang');
			// $data ['record']= $this->rekap_mod->select_all()->result();
			// $this->template->load('template_admin','rekap/v_rekap',$data);

		/*$session_id = $this->session->userdata('kd_ruang');
		$user = $this->rekap_mod->getid($session_id)->row_array();
		$ruangan = $this->rekap_mod->select_ruang($user['kd_ruang'])->result();*/
		$data['record']=$this->rekap_ido_mod->select_all()->result();
		$this->template->load('template_ido','rekap_ido/v_rekap_ido',$data);
		}

		public function post (){
			$a = $this->session->userdata('kd_ruang');
			$now = date('Y-m-d H:i:s');
			if (isset($_POST['submit'])){

				$data=array(
					 //'kd_ruang'=>$a,
					 //'tanggal'=>$now,
					 'tgl_masuk'=>$this->input->post('tgl_masuk'),
					 'tgl_keluar'=>$this->input->post('tgl_keluar'),
					 'no_rm'=>$this->input->post('no_rm'),
					 'nama_pas'=>$this->input->post('nama_pas'),
					'tindakan'=>$this->input->post('tindakan'),
					'jenis_op'=>$this->input->post('jenis_op'),
					'klasifikasi'=>$this->input->post('klasifikasi'),
					'waktu'=>$this->input->post('waktu'),
					'antibiotik'=>$this->input->post('antibiotik'),
					);
				$this->db->insert('tb_harian_op',$data);
				// $ambil['nama_pas']=$this->input->post('nama_pas');
				// $ambil['umur']=$this->input->post('umur');
 			    // 	$ambil['jekel']=$this->input->post('jekel');
				// $ambil['diagnosa']=$this->input->post('diagnosa');
				// $ambil['tindakan']=$this->input->post('tindakan');
				// $ambil['infeksi']=$this->input->post('infeksi');
				// $ambil['tirah']=$this->input->post('tirah');
				// $ambil['decubitus']=$this->input->post('decubitus');
				// $ambil['kultur']=$this->input->post('kultur');
				// $ambil['antibiotik']=$this->input->post('antibiotik');
				
				// $post = $this->rekap_mod->simpan($ambil);
				// $this->session->set_userdata('kd_ruang',$post);
				redirect('rekap_ido');

			}else {
			//$data['data_ruangan'] = $this->rekap_mod->getruang()->result();
			//$data['data_jabatan'] = $this->Mod_karyawan->getjabatan()->result();
			$this->template->load('template_ido','rekap_ido/post');	
			}
			

		}












	}


 ?>