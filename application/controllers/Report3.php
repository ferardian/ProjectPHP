<?php 
	class Report3 extends CI_Controller{

		function __construct(){
			parent:: __construct();
			$this->load->model('report_mod');
			if (!is_login()) {
				redirect('login_controller');
			}
		}

		function index(){ 
			
			//$data['periode'] = $this->Mod_laporan->getperiode()->result();
			//$data['data_karyawan'] = $this->Mod_user->getkaryawan()->result();
			$this->template->load('template_ido','v_report');
			// $this->load->view('template_admin',$data);
		}

		function report_inmut(){ 
			
			//$data['periode'] = $this->Mod_laporan->getperiode()->result();
			$data['data_ruang'] = $this->report_mod->getruang()->result();
			$data['data_indikator'] = $this->report_mod->getindikator_ruang()->result();
			$this->template->load('template_ido','v_report_inmut3',$data);
			// $this->load->view('template_admin',$data);
		}
		
		function report_ikp(){ 
			
			$this->template->load('template_ido','v_report_ikp3');
		}

		function getindikator_ruang(){
		 $id = $this->uri->segment(3);

		 $data =  $this->db->get_where('tb_ruangan',array('kd_ruang' => $id))->row_array();
		 $data =  $this->db->get_where('tb_inmut',array('id_ruang_inmut' => $data['id_ruang_inmut']))->result_array();

		$no=1;
			foreach ($data as $d) {
				?><option value='<?php print $d['kd_inmut'] ?>'>
					<?php print $d['nama_indikator'] ?>
				</option><?}

		}

		function post_inmut(){
			if (isset($_POST['submit'])){
				$tanggal_awal = $this->input->post('tgl_awal');
				$tanggal_akhir = $this->input->post('tgl_akhir');
				$ruang = $this->input->post('kd_ruang');
				$inmut = $this->input->post('kd_inmut');
				$query['record']= $this->db->query('SELECT*,SUM(num) AS jml_num, SUM(denum) AS jml_denum, tb_ruangan.ruangan FROM tb_rekap_inmut join tb_ruangan on tb_rekap_inmut.kd_ruang=tb_ruangan.kd_ruang join tb_inmut on tb_rekap_inmut.kd_inmut=tb_inmut.kd_inmut where tanggal between "'.$tanggal_awal.'" and "'.$tanggal_akhir.'" and tb_rekap_inmut.kd_inmut="'.$inmut.'" and tb_rekap_inmut.kd_ruang="'.$ruang.'" GROUP BY tb_rekap_inmut.kd_ruang,tb_rekap_inmut.kd_inmut')->result();
				$query['tgl_awal']=$tanggal_awal;
				$query['tgl_akhir']=$tanggal_akhir;
			return $this->template->load('template_ido','v_rekap_inmut3',$query);

		}
	}

		function post(){

			if (isset($_POST['submit'])){
				$tanggal_awal = $this->input->post('tgl_awal');
				$tanggal_akhir = $this->input->post('tgl_akhir');
				$tindakan = $this->input->post('tindakan');
				
				$jml_tindakan ['ambil_bulan'] = $this->report_mod->select_bulan($tanggal_awal)->result_array();
				$jml_tindakan ['record'] = $this->report_mod->select($tanggal_awal,$tanggal_akhir,$tindakan)->result();
				$jml_tindakan ['tindakan'] = $tindakan;
				$jml_tindakan ['tindakan2'] = $tindakan2;
				$jml_tindakan ['tindakan3'] = $tindakan3;
				$jml_tindakan ['tindakan4'] = $tindakan4;
				$jml_tindakan ['tgl_awal'] = $tanggal_awal;
				$jml_tindakan ['tgl_akhir'] = $tanggal_akhir;
			

				//$this->template->load('template_admin','v_report_tampil',$jml_tindakan);
				//print_r($jml_tindakan);	
				$html = $this->load->view('v_report_cetak',$jml_tindakan, true);
				$pdfFilePath='cetak.pdf';
				$this->load->library('M_pdf');
			 	$this->m_pdf->pdf->WriteHTML($html);
			 	$this->m_pdf->pdf->Output($pdfFilePath, 'I');
			}
		}


		function cetak_ikp(){
			if (isset($_POST['submit'])){
				$tanggal_awal = $this->input->post('tgl_awal');
				$tanggal_akhir = $this->input->post('tgl_akhir');
				$data['record'] = $this->report_mod->select_ikp($tanggal_awal,$tanggal_akhir)->result();
				$data ['tgl_awal'] = $tanggal_awal;
				$data ['tgl_akhir'] = $tanggal_akhir;
				$html = $this->load->view('v_cetak_ikp',$data, true);
				$pdfFilePath='Laporan IKP.pdf';
				$this->load->library('M_pdf');
			 	$this->m_pdf->pdf->WriteHTML($html);
			 	$this->m_pdf->pdf->Output($pdfFilePath, 'I');
		}
	}



		function cetak(){

			//if (isset($_POST['submit'])){
				$tanggal_awal = $this->input->post('tgl_awal');
				$tanggal_akhir = $this->input->post('tgl_akhir');
				$tindakan = $this->input->post('tindakan');

				$jml_tindakan ['record'] = $this->report_mod->select($tanggal_awal,$tanggal_akhir,$tindakan)->row_array();

				$html = $this->load->view('v_report_cetak',$jml_tindakan, true);
				$pdfFilePath='cetak.pdf';
				$this->load->library('M_pdf');
			 	$this->m_pdf->pdf->WriteHTML($html);
			 	$this->m_pdf->pdf->Output($pdfFilePath, 'I');
				//print_r($jml_tindakan);	
			//}
		}
				/*$data;
				if ($this->input->post('kd_karyawan')==1){
					$data ['record'] = $this->Mod_laporan->select_all($this->input->post('kd_periode'))->result();	
					$data ['periode'] = $this->Mod_laporan->getperiode_where($this->input->post('kd_periode'))->row_array();
					$html = $this->load->view('admin/laporan/v_cetak1',$data,true);
					$pdfFilePath = "cetak.pdf";
			 	$this->load->library('M_pdf');
			 	$this->m_pdf->pdf->WriteHTML($html);
			 	$this->m_pdf->pdf->Output($pdfFilePath, 'I');
				} else if ($this->input->post('kd_karyawan')==0){

				} else {
					$data ['kriteria'] = $this->Mod_laporan->select_kriteria($this->input->post('kd_karyawan'),$this->input->post('kd_periode'))->result();
					$data ['karyawan'] = $this->Mod_laporan->getkaryawan($this->input->post('kd_karyawan'))->row_array();
					$data ['tot'] = $this->Mod_laporan->select_karyawan($this->input->post('kd_karyawan'),$this->input->post('kd_periode'))->row_array();
					$data ['rek'] = $this->Mod_laporan->select_all($this->input->post('kd_periode'))->result();
					$data ['periode'] = $this->Mod_laporan->getperiode_where($this->input->post('kd_periode'))->row_array();
					
					$html = $this->load->view('admin/laporan/v_cetak',$data,true);
					$pdfFilePath = "cek.pdf";
			 	$this->load->library('M_pdf');
			 	$this->m_pdf->pdf->WriteHTML($html);
			 	$this->m_pdf->pdf->Output($pdfFilePath, 'I');
				}
			
					
			 	

			}*/
			// else {
			
			//  	$html = $this->load->view('admin/laporan/v_cetak');	
			//  	$pdfFilePath = "cek.pdf";
			//  	$this->load->library('m_pdf');
			//  	$this->m_pdf->pdf->WriteHTML($html);
			//  	$this->m_pdf->pdf->Output($pdfFilePath, 'I');
			// }
			

		//}


		/*public function lihat(){

			if ($this->input->post('kd_karyawan')==1){
					$data ['record'] = $this->Mod_laporan->select_all($this->input->post('kd_periode'))->result();	
					$data ['periode'] = $this->Mod_laporan->getperiode_where($this->input->post('kd_periode'))->row_array();
					$this->load->view('admin/laporan/v_lihat_semua',$data);
					
				} else if ($this->input->post('kd_karyawan')==0){

				} else {
					$data ['kriteria'] = $this->Mod_laporan->select_kriteria($this->input->post('kd_karyawan'),$this->input->post('kd_periode'))->result();
					$data ['karyawan'] = $this->Mod_laporan->getkaryawan($this->input->post('kd_karyawan'))->row_array();
					$data ['tot'] = $this->Mod_laporan->select_karyawan($this->input->post('kd_karyawan'),$this->input->post('kd_periode'))->row_array();
					$data ['rek'] = $this->Mod_laporan->select_all($this->input->post('kd_periode'))->row_array();
					$data ['grade'] = $this->Mod_laporan->select_all($this->input->post('kd_periode'))->row_array();
					$data ['periode'] = $this->Mod_laporan->getperiode_where($this->input->post('kd_periode'))->row_array();
					$this->load->view('admin/laporan/v_lihat_nilai',$data);
		}
	}

		public function edit(){
			if(isset($_POST['submit'])){
				$this->Mod_user->update();
				redirect('admin/Data_user');

			}else{
				$id = $this->uri->segment(4);
				$data['row']= $this->db->get_where('tb_user',array('id_user'=>$id))->row_array();
				$data['id_user']= $id;
				$this->template->load('template_admin','admin/user/edit',$data);
			}
		}

		public function delete(){
			$this->db->where('id_user', $this->uri->segment(4));
			$this->db->delete('tb_user');
			redirect('admin/Data_user');

		}*/
	}



 ?>