<?php 
  class dashboard2 extends CI_Controller{

    function __construct(){
      parent:: __construct();
      //$this->load->model(array('Mod_pelamar','Mod_karyawan'));
      if (!is_login()) {
        redirect('login_controller');
      }
    }

    function index(){ 


     // $data ['karyawan']= $this->Mod_karyawan->hitung_karyawan()->result_array();
      //$data ['pelamar']= $this->Mod_pelamar->hitung_pelamar()->result_array();
      $this->template->load('template_ido','dashboard');
      // $this->load->view('admin/dashboard');
    }


  
  }


 ?>