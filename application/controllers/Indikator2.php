<?php 
	class indikator2 extends CI_Controller{

		public function __construct(){
			parent:: __construct();
			$this->load->model(array('indikator_mod','report_mod'));
			if (!is_login()) {
				redirect('login_controller');
			}
		}

		public function index(){ 
		$session_id = $this->session->userdata('kd_ruang');
		$user = $this->indikator_mod->getid($session_id)->row_array();
		$ruangan = $this->indikator_mod->select_all($user['kd_ruang'])->result();
		$data['record']=$ruangan;
		//$data ['record']= $this->indikator_mod->select_all()->result();
		$this->template->load('template_indikator','indikator/v_indikator2',$data);
		
		}

		
		public function index_analisa(){
			$session_id = $this->session->userdata('kd_ruang');
			$user = $this->indikator_mod->getid($session_id)->row_array();
			$data['record']=$this->indikator_mod->select_analisa($user['kd_ruang'])->result();
			$this->template->load('template_indikator','v_analisa',$data);
		}

		public function post(){
			$id_ruang_inmut = $this->session->userdata('id_ruang_inmut');
			$id_ruang = $this->session->userdata('kd_ruang');
			if (isset($_POST['submit'])){
				$data=array(
			
					'kd_ruang'=>$id_ruang,
					 'tanggal'=>$this->input->post('tanggal'),
					 'num'=>$this->input->post('num'),
					 'denum'=>$this->input->post('denum'),
					 //'nama_indikator'=>$this->input->post('kd_inmut->kd_sub_indikator'),
					'kd_inmut'=>$this->input->post('kd_inmut'),
					);
				$this->db->insert('tb_rekap_inmut',$data);
				redirect('indikator2');

			}else {
		
			$data['data_indikator'] = $this->indikator_mod->getindikator_ruang($id_ruang_inmut)->result();
			$this->template->load('template_indikator','indikator/post2',$data);	
			}
			

		}


		public function post_analisa(){
			if (isset($_POST['submit'])){
				$data=array(
			
					'kd_ruang'=>$this->input->post('kd_ruang'),
					 'tanggal_awal'=>$this->input->post('tgl_awal'),
					 'tanggal_akhir'=>$this->input->post('tgl_akhir'),
					 'jml_num'=>$this->input->post('jml_num'),
					 'jml_denum'=>$this->input->post('jml_denum'),
					 'jumlah'=>$this->input->post('jumlah'),
					 //'nama_indikator'=>$this->input->post('kd_inmut->kd_sub_indikator'),
					//'tanggal_awal'=>$this->input->post('tanggal_awal'),
					//'tanggal_akhir'=>$this->input->post('tanggal_akhir'),
					'analisa'=>$this->input->post('analisa'),
					'kd_inmut'=>$this->input->post('kd_inmut'),
					);
				$this->db->insert('tb_analisa',$data);
				redirect('indikator2/index_analisa'); 
				// $hasil_analisa['record']=$this->report_mod->select_analisa()->result();
				// $html = $this->load->view('v_cetak_analisa',$hasil_analisa, true);
				// $pdfFilePath='indikator.pdf';
				// $this->load->library('M_pdf');
			 // 	$this->m_pdf->pdf->WriteHTML($html);
			 // 	$this->m_pdf->pdf->Output($pdfFilePath, 'I');
				
			}else{
			$data['data_indikator'] = $this->indikator_mod->getindikator_ruang($id_ruang_inmut)->result();
			$this->template->load('template_indikator','indikator/post_analisa',$data);
			}	

		}

		public function cetak_analisa(){
			$id = $this->uri->segment(3);
			$data['record']=$this->indikator_mod->cetak_analisa($id)->result();
			//$data['record']= $this->db->get_where('tb_analisa',array('kd_analisa'=>$id))->result();
			$data['kd_analisa']= $id;

			//$hasil_analisa['record']=$this->report_mod->select_analisa()->result();
			$html = $this->load->view('v_cetak_analisa',$data, true);
			$pdfFilePath='indikator.pdf';
			$this->load->library('M_pdf');
			$this->m_pdf->pdf->WriteHTML($html);
			$this->m_pdf->pdf->Output($pdfFilePath, 'I');
		}

		public function edit(){
			$id_ruang_inmut = $this->session->userdata('id_ruang_inmut');
			$id_ruang = $this->session->userdata('kd_ruang');
			if (isset($_POST['submit'])){
				$data=array(
			
					'kd_ruang'=>$id_ruang,
					 'tanggal'=>$this->input->post('tanggal'),
					 'num'=>$this->input->post('num'),
					 'denum'=>$this->input->post('denum'),
					'kd_inmut'=>$this->input->post('kd_inmut'),
					);
				$this->db->where('id', $this->input->post('id'));
				$this->db->update('tb_rekap_inmut',$data);
				redirect('indikator2');

			}else {
			$id = $this->uri->segment(3);
			$data['data_indikator'] = $this->indikator_mod->getindikator_ruang($id_ruang_inmut)->result();
			$data['row']= $this->db->get_where('tb_rekap_inmut',array('id'=>$id))->row_array();
			$data['id']= $id;
			$this->template->load('template_indikator','indikator/edit2',$data);	
			}
		}

		public function detail($id)
		{
			$data ['record']=$this->Mod_karyawan->select_unit($id)->result();
			$this->load->view('admin/karyawan/detail',$data);
		}

		public function delete(){
			$this->db->where('id', $this->uri->segment(3));
			$this->db->delete('tb_rekap_inmut');
			redirect('indikator');

		}
	}


 ?>