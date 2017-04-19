<?php 
	class Inmut extends CI_Controller{

		public function __construct(){
			parent:: __construct();
			$this->load->model(array('Mod_karyawan','Mod_unit','Mod_tugas'));
			if (!is_login()) {
				redirect('login_controller');
			}
		}

		public function index(){ 
			$data ['record']= $this->Mod_karyawan->select_all()->result();
			$this->template->load('template_admin','admin/karyawan/v_karyawan',$data);
		
		}

		public function post(){

			if (isset($_POST['submit'])){
				$this->Mod_karyawan->simpan();
				redirect('admin/Data_karyawan');

			}else {
			$data['data_unit'] = $this->Mod_karyawan->getunit()->result();
			$data['data_jabatan'] = $this->Mod_karyawan->getjabatan()->result();
			$this->template->load('template_admin','admin/karyawan/post',$data);	
			}
			

		}

		public function edit(){
			if(isset($_POST['submit'])){
				$this->Mod_karyawan->update();
				redirect('admin/Data_karyawan');

			}else{
				$id = $this->uri->segment(4);
				$data['row']= $this->Mod_karyawan->select_unit($id)->row_array();
				$data['id_karyawan']= $id;
				$data['data_unit'] = $this->Mod_karyawan->getunit()->result();
				$data['data_jabatan'] = $this->Mod_karyawan->getjabatan()->result();
				$this->template->load('template_admin','admin/karyawan/edit',$data);
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