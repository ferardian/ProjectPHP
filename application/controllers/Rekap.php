<?php 
	class Rekap extends CI_Controller{

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
		$ruangan = $this->rekap_mod->select_ruang($user['kd_ruang'])->result();
		$data['record']=$ruangan;
		$this->template->load('template_admin','rekap/v_rekap',$data);
		}


		public function get_data(){

			$id = $this->input->get('id');
		
			$info = $this->db->select("*")
										 ->from("tb_harian")
										 ->where("no_rm",$id)
										 ->get()
										 ->row();
			echo json_encode($info);
			
		}


		public function lihat_semua(){
			$data['record'] = $this->rekap_mod->lihat_semua()->result();
			$this->template->load('template_super_admin','rekap/v_semua_infeksi',$data);
		}

		public function lihat_ruangan(){
			$id = $this->uri->segment(3);
			$data['record']=$this->rekap_mod->lihat_ruangan($id)->result();
			$data['ruang']=$this->rekap_mod->ambil_ruangan($id)->result();
			$this->template->load('template_super_admin','rekap/v_rekap_infeksi_ruang',$data);
		}

		public function post (){
			$a = $this->session->userdata('kd_ruang');
			$now = date('Y-m-d H:i:s');
			if (isset($_POST['submit'])){

				$data=array(
					 'kd_ruang'=>$a,
					 //'tanggal'=>$now,
					 'tanggal'=>$this->input->post('tanggal'),
					 'no_rm'=>$this->input->post('no_rm'),
					 'nama_pas'=>$this->input->post('nama_pas'),
					 'umur'=>$this->input->post('umur'),
					 'jekel'=>$this->input->post('jekel'),
					'diagnosa'=>$this->input->post('diagnosa'),
					'tindakan'=>$this->input->post('tindakan'),
					'tindakan2'=>$this->input->post('tindakan2'),
					'tindakan3'=>$this->input->post('tindakan3'),
					'tindakan4'=>$this->input->post('tindakan4'),
					'infeksi'=>$this->input->post('infeksi'),
					'tirah'=>$this->input->post('tirah'),
					'decubitus'=>$this->input->post('decubitus'),
					'kultur'=>$this->input->post('kultur'),
					'antibiotik'=>$this->input->post('antibiotik'),
					);
				$this->db->insert('tb_harian',$data);
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
				redirect('Rekap');

			}else {
			$data['data_ruangan'] = $this->rekap_mod->getruang()->result();
			//$data['data_jabatan'] = $this->Mod_karyawan->getjabatan()->result();
			$this->template->load('template_admin','Rekap/post',$data);	
			}
			

		}

		public function edit(){
			$a = $this->session->userdata('kd_ruang');
			$now = date('Y-m-d H:i:s');
			if(isset($_POST['submit'])){
				$data=array(
					'kd_ruang'=>$a,
					'tanggal'=>$this->input->post('tanggal'),
					'no_rm'=>$this->input->post('no_rm'),
					 'nama_pas'=>$this->input->post('nama_pas'),
					 'umur'=>$this->input->post('umur'),
					 'jekel'=>$this->input->post('jekel'),
					'diagnosa'=>$this->input->post('diagnosa'),
					'tindakan'=>$this->input->post('tindakan'),
					'tindakan2'=>$this->input->post('tindakan2'),
					'tindakan3'=>$this->input->post('tindakan3'),
					'tindakan4'=>$this->input->post('tindakan4'),
					'infeksi'=>$this->input->post('infeksi'),
					'tirah'=>$this->input->post('tirah'),
					'decubitus'=>$this->input->post('decubitus'),
					'kultur'=>$this->input->post('kultur'),
					'antibiotik'=>$this->input->post('antibiotik'),
					);
				$this->db->where('id_pas', $this->input->post('id_pas'));
				$this->db->update('tb_harian',$data);
				redirect('Rekap');

			}else{
				$id = $this->uri->segment(3);
				$data['row']= $this->db->get_where('tb_harian',array('id_pas'=>$id))->row_array();
				$data['id_pas']= $id;
				//print_r($id);
				$this->template->load('template_admin','rekap/edit',$data);
			}
		}

		public function detail($id)
		{
			$data ['record']=$this->Mod_karyawan->select_unit($id)->result();
			$this->load->view('admin/karyawan/detail',$data);
		}

		public function delete(){
			$this->db->where('id_karyawan', $this->uri->segment(4));
			$this->db->delete('tb_karyawan');
			redirect('admin/Data_karyawan');

		}
	}


 ?>