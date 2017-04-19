<?php 
	class Master_indikator extends CI_Controller{
		 function __construct(){
      	parent:: __construct();
      	$this->load->model(array('indikator_mod'));
      	if (!is_login()) {
        redirect('login_controller');
      	}
    }

    function index(){
    	$data['record']=$this->indikator_mod->select_master_indikator()->result();
    	$this->template->load('template_master','indikator/v_master_indikator',$data);
    }

}


 ?>