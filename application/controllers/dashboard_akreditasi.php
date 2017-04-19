<?php 
  class dashboard_akreditasi extends CI_Controller{

    function __construct(){
      parent:: __construct();
      $this->load->model('akreditasi_mod');
      if (!is_login()) {
        redirect('login_controller');
      }
    }

    function index(){ 

      $data ['record']=$this->akreditasi_mod->pokja()->result();
     // $data ['karyawan']= $this->Mod_karyawan->hitung_karyawan()->result_array();
      //$data ['pelamar']= $this->Mod_pelamar->hitung_pelamar()->result_array();
      $this->template->load('template_akreditasi','v_dashboard_akreditasi',$data);
      // $this->load->view('admin/dashboard');
    }


  
  }


 ?>