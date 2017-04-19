<?php 
	class akreditasi extends CI_Controller{

		public function __construct(){
			parent:: __construct();
			$this->load->model('akreditasi_mod');
			if (!is_login()) {
				redirect('login_controller');
			}
		}


		public function index(){ 
		$session_id = $this->session->userdata('id_user');
		//$user = $this->indikator_mod->getid($session_id)->row_array();
		$ruangan = $this->akreditasi_mod->select_all()->result();
		$data['record']=$ruangan;
		$data['ruang'] = $session_id;
		//$data ['record']= $this->indikator_mod->select_all()->result();
		$this->template->load('template_akreditasi','akreditasi/v_dokumen',$data);
		
		}


		public function post(){

			if (isset($_POST['submit'])){
				$conf = array(
				'upload_path' => 'file',
				'allowed_types' => 'jpg|png|gif|pdf|docx|doc|xls|xlsx',
				);
			$this->load->library('upload', $conf);
			

			if($this->upload->do_upload('file')){
				$datafile = $this->upload->data();
				$file = $datafile['file_name'];
			

			$data=array('tgl_terbit'=>$this->input->post('tgl_terbit'),
 						'nomor_dokumen'=>$this->input->post('nomor_dokumen'),
			 			'judul_dokumen'=>$this->input->post('judul_dokumen'),
			 			'kd_standar'=>$this->input->post('kd_standar'),
			 			'kd_ep'=>$this->input->post('kd_ep'),
			 			'nama_file' => $file,
			 			//'nama_file' => $this->input->post('nama_file'),
						//'kd_kelompok'=>$this->input->post('kd_kelompok'),
						'kd_jenis_dok'=>$this->input->post('kd_jenis_dok'),
						'kd_pokja'=>$this->input->post('kd_pokja'),

			);
		} else {
			$data=array('tgl_terbit'=>$this->input->post('tgl_terbit'),
 						'nomor_dokumen'=>$this->input->post('nomor_dokumen'),
			 			'judul_dokumen'=>$this->input->post('judul_dokumen'),
			 			'kd_standar'=>$this->input->post('kd_standar'),
			 			'kd_ep'=>$this->input->post('kd_ep'),
			 			//'nama_file' => $file,
			 			'nama_file' => $this->input->post('nama_file'),
						//'kd_kelompok'=>$this->input->post('kd_kelompok'),
						'kd_jenis_dok'=>$this->input->post('kd_jenis_dok'),
						'kd_pokja'=>$this->input->post('kd_pokja'),

			);
		}

			
			$this->akreditasi_mod->simpan($data);
			$this->session->set_flashdata('msg', '<b style="color:blue">Data Berhasil Ditambah</b>');
			redirect('akreditasi');
			}else {
				$data['data_pokja'] = $this->akreditasi_mod->getpokja()->result();
				$data['data_standar'] = $this->akreditasi_mod->getstandar()->result();
				$data['data_ep'] = $this->akreditasi_mod->getep()->result();
				$data['data_jenis'] = $this->akreditasi_mod->getjenisdok()->result();
				$data['data_kelompok'] = $this->akreditasi_mod->getkelompok()->result();
				$data['data_file'] = $this->akreditasi_mod->getnamafile()->result();
				$this->template->load('template_akreditasi','akreditasi/post',$data);	
			}
			

		}

		public function edit(){

			if (isset($_POST['submit'])){
				$conf = array(
				'upload_path' => 'file',
				'allowed_types' => 'jpg|png|gif|pdf|docx|doc|xls|xlsx',
				);
			$this->load->library('upload', $conf);
			

			if($this->upload->do_upload('file')){
				$datafile = $this->upload->data();
				$file = $datafile['file_name'];
			

			$data=array('tgl_terbit'=>$this->input->post('tgl_terbit'),
 						'nomor_dokumen'=>$this->input->post('nomor_dokumen'),
			 			'judul_dokumen'=>$this->input->post('judul_dokumen'),
			 			'kd_standar'=>$this->input->post('kd_standar'),
			 			'kd_ep'=>$this->input->post('kd_ep'),
			 			'nama_file' => $file,
			 			//'nama_file' => $this->input->post('nama_file'),
						//'kd_kelompok'=>$this->input->post('kd_kelompok'),
						'kd_jenis_dok'=>$this->input->post('kd_jenis_dok'),
						'kd_pokja'=>$this->input->post('kd_pokja'),

			);
			//unlink("./file/". $this->input->post('nama_file'));
		} else {
			$data=array('tgl_terbit'=>$this->input->post('tgl_terbit'),
 						'nomor_dokumen'=>$this->input->post('nomor_dokumen'),
			 			'judul_dokumen'=>$this->input->post('judul_dokumen'),
			 			'kd_standar'=>$this->input->post('kd_standar'),
			 			'kd_ep'=>$this->input->post('kd_ep'),
			 			//'nama_file' => $file,
			 			'nama_file' => $this->input->post('nama_file'),
						//'kd_kelompok'=>$this->input->post('kd_kelompok'),
						'kd_jenis_dok'=>$this->input->post('kd_jenis_dok'),
						'kd_pokja'=>$this->input->post('kd_pokja'),

			);
			
		}

		$this->db->where('kd_dokumen', $this->input->post('kd_dokumen'));
		
        $this->db->update('tb_dokumen',$data);
        //$this->db->where('nama_file', $this->input->post('nama_file'));
        //$this->db->update('tb_dokumen', array('nama_file' => $file ));
        redirect('akreditasi');
			}else {
				$data['data_pokja'] = $this->akreditasi_mod->getpokja()->result();
				$data['data_standar'] = $this->akreditasi_mod->getstandar()->result();
				$data['data_ep'] = $this->akreditasi_mod->getep()->result();
				$data['data_jenis'] = $this->akreditasi_mod->getjenisdok()->result();
				$data['data_kelompok'] = $this->akreditasi_mod->getkelompok()->result();
				$data['data_file'] = $this->akreditasi_mod->getnamafile()->result();
				$id = $this->uri->segment(3);
				$data['row']= $this->db->join('tb_standar','tb_standar.kd_standar = tb_dokumen.kd_standar')
				->join('tb_jenis_dok', 'tb_jenis_dok.kd_jenis_dok = tb_dokumen.kd_jenis_dok')
				->join('tb_pokja', 'tb_pokja.kd_pokja = tb_dokumen.kd_pokja')
				->join('tb_ep', 'tb_ep.kd_ep = tb_dokumen.kd_ep')
				->get_where('tb_dokumen',array('kd_dokumen'=>$id))->row_array();
      			$data['id']= $id;
				$this->template->load('template_akreditasi','akreditasi/edit',$data);	
			}
			

		}


		public function edit_all(){

			if (isset($_POST['submit'])){
				$conf = array(
				'upload_path' => 'file',
				'allowed_types' => 'jpg|png|gif|pdf|docx|doc|xls|xlsx',
				);
			$this->load->library('upload', $conf);
			

			if($this->upload->do_upload('file')){
				$datafile = $this->upload->data();
				$file = $datafile['file_name'];
			

			$data=array('tgl_terbit'=>$this->input->post('tgl_terbit'),
 						'nomor_dokumen'=>$this->input->post('nomor_dokumen'),
			 			'judul_dokumen'=>$this->input->post('judul_dokumen'),
			 			'kd_standar'=>$this->input->post('kd_standar'),
			 			'kd_ep'=>$this->input->post('kd_ep'),
			 			'nama_file' => $file,
			 			//'nama_file' => $this->input->post('nama_file'),
						//'kd_kelompok'=>$this->input->post('kd_kelompok'),
						'kd_jenis_dok'=>$this->input->post('kd_jenis_dok'),
						'kd_pokja'=>$this->input->post('kd_pokja'),

			);
			unlink("./file/". $this->input->post('nama_file'));
		} else {
			$data=array('tgl_terbit'=>$this->input->post('tgl_terbit'),
 						'nomor_dokumen'=>$this->input->post('nomor_dokumen'),
			 			'judul_dokumen'=>$this->input->post('judul_dokumen'),
			 			'kd_standar'=>$this->input->post('kd_standar'),
			 			'kd_ep'=>$this->input->post('kd_ep'),
			 			//'nama_file' => $file,
			 			'nama_file' => $this->input->post('nama_file'),
						//'kd_kelompok'=>$this->input->post('kd_kelompok'),
						'kd_jenis_dok'=>$this->input->post('kd_jenis_dok'),
						'kd_pokja'=>$this->input->post('kd_pokja'),

			);
			
		}

		$this->db->where('kd_dokumen', $this->input->post('kd_dokumen'));
        $this->db->update('tb_dokumen',$data);
        $this->db->where('nama_file', $this->input->post('nama_file'));
        $this->db->update('tb_dokumen', array('nama_file' => $file ));
        redirect('akreditasi');
			}else {
				$data['data_pokja'] = $this->akreditasi_mod->getpokja()->result();
				$data['data_standar'] = $this->akreditasi_mod->getstandar()->result();
				$data['data_ep'] = $this->akreditasi_mod->getep()->result();
				$data['data_jenis'] = $this->akreditasi_mod->getjenisdok()->result();
				$data['data_kelompok'] = $this->akreditasi_mod->getkelompok()->result();
				$data['data_file'] = $this->akreditasi_mod->getnamafile()->result();
				$id = $this->uri->segment(3);
				$data['row']= $this->db->join('tb_standar','tb_standar.kd_standar = tb_dokumen.kd_standar')
				->join('tb_jenis_dok', 'tb_jenis_dok.kd_jenis_dok = tb_dokumen.kd_jenis_dok')
				->join('tb_pokja', 'tb_pokja.kd_pokja = tb_dokumen.kd_pokja')
				->join('tb_ep', 'tb_ep.kd_ep = tb_dokumen.kd_ep')
				->get_where('tb_dokumen',array('kd_dokumen'=>$id))->row_array();
      			$data['id']= $id;
				$this->template->load('template_akreditasi','akreditasi/edit_all',$data);	
			}
			

		}

		public function lihat_pokja(){
			$session_id = $this->session->userdata('id_user');
			$data['ruang'] = $session_id;
			$id = $this->uri->segment(3);
			$data['record']=$this->akreditasi_mod->masuk_pokja($id)->result();
			$this->template->load('template_akreditasi','akreditasi/v_dokumen',$data);
		}


		public function get_data(){

			$id = $this->input->get('id');
		
			$info = $this->db->select("*")
										 ->from("tb_dokumen")
										 ->where("nomor_dokumen",$id)
										 ->get()
										 ->row();
			echo json_encode($info);
		}


		public function delete(){
			$this->db->where('kd_dokumen', $this->uri->segment(3));
			$this->db->delete('tb_dokumen');
			redirect('akreditasi');

		}


	}
 ?>