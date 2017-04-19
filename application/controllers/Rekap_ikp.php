<?php 
	class rekap_ikp extends CI_Controller{

		public function __construct(){
			parent:: __construct();
			$this->load->model(array('rekap_mod','ruangan_mod'));
			if (!is_login()) {
				redirect('login_controller');
			}
		}

		public function index(){ 
			//$session_id = $this->session->userdata('kd_ruang');
			// $data ['record']= $this->rekap_mod->select_all()->result();
			// $this->template->load('template_admin','rekap/v_rekap',$data);

		$session_id = $this->session->userdata('kd_ruang');
		$user = $this->rekap_mod->getid($session_id)->row_array();
		$ruangan = $this->rekap_mod->select_ikp($user['kd_ruang'])->result();
		$data['record']=$ruangan;
		$this->template->load('template_admin','rekap_ikp/v_rekap_ikp',$data);
		}

		public function lihat_semua(){
			$data['record'] = $this->rekap_mod->select_ikp_semua()->result();
			$this->template->load('template_super_admin','rekap_ikp/v_semua_ikp',$data);
		}

		public function post (){
			$a = $this->session->userdata('kd_ruang');
			$now = date('Y-m-d H:i:s');
			if (isset($_POST['submit'])){

				$data=array(
					 'kd_ruang'=>$a,
					 'tanggal'=>$this->input->post('tanggal'),
					 'nama_pasien'=>$this->input->post('nama_pasien'),
					 'tindak_lanjut'=>$this->input->post('tindak_lanjut'),
					 'grading'=>$this->input->post('grading'),
					 'kd_insiden'=>$this->input->post('kd_insiden'),
					 'umur'=>$this->input->post('umur'),
					 'sentinel'=>$this->input->post('sentinel'),
					 'ktd'=>$this->input->post('ktd'),
					 'knc'=>$this->input->post('knc'),
					 'ktc'=>$this->input->post('ktc'),
					'kpc'=>$this->input->post('kpc'),
					);
				$this->db->insert('tb_ikp',$data);
				redirect('rekap_ikp');

			}else {
			$data['tindak_lanjut'] = $this->db->anggota_enum('tb_ikp','tindak_lanjut');
			$data['grading'] = $this->db->anggota_enum('tb_ikp','grading');
			$data['data_ruangan'] = $this->rekap_mod->getruang()->result();
			$data['data_insiden'] = $this->rekap_mod->getinsiden()->result();
			//$data['data_jabatan'] = $this->Mod_karyawan->getjabatan()->result();
			$this->template->load('template_admin','rekap_ikp/post',$data);	
			}
			

		}

		

		public function edit(){
			$a = $this->session->userdata('kd_ruang');
			$now = date('Y-m-d H:i:s');
			if(isset($_POST['submit'])){
				$data=array(
					'kd_ruang'=>$a,
					 'tanggal'=>$this->input->post('tanggal'),
					 'nama_pasien'=>$this->input->post('nama_pasien'),
					 'tindak_lanjut'=>$this->input->post('tindak_lanjut'),
					 'grading'=>$this->input->post('grading'),
					 'kd_insiden'=>$this->input->post('kd_insiden'),
					 'umur'=>$this->input->post('umur'),
					 'sentinel'=>$this->input->post('sentinel'),
					 'ktd'=>$this->input->post('ktd'),
					 'knc'=>$this->input->post('knc'),
					 'ktc'=>$this->input->post('ktc'),
					'kpc'=>$this->input->post('kpc'),
					);
				$this->db->where('id', $this->input->post('id'));
				$this->db->update('tb_ikp',$data);
				redirect('rekap_ikp');

			}else{
				$id = $this->uri->segment(3);
				$data['tindak_lanjut'] = $this->db->anggota_enum('tb_ikp','tindak_lanjut');
				$data['grading'] = $this->db->anggota_enum('tb_ikp','grading');
				$data['data_insiden'] = $this->rekap_mod->getinsiden()->result();
				$data['row']= $this->db->get_where('tb_ikp',array('id'=>$id))->row_array();
				$data['id']= $id;
				//print_r($id);
				$this->template->load('template_admin','rekap_ikp/edit',$data);
			}
		}
}