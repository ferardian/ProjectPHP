<?php 
	class Master_user extends CI_Controller{
		 function __construct(){
      	parent:: __construct();
      	$this->load->model(array('user_mod'));
      	if (!is_login()) {
        redirect('login_controller');
      	}
    }

    function index(){
    	$data['record']=$this->user_mod->select_all()->result();
    	$this->template->load('template_master','user/v_user',$data);
    }


    function post(){
        if (isset($_POST['submit'])){
        $data=array(
      
          
           'nama_user'=>$this->input->post('nama_user'),
           'password'=>$this->input->post('password'),
           'status'=>$this->input->post('status'),
           'kd_ruang'=>$this->input->post('kd_ruang'),
          'id_ruang_inmut'=>$this->input->post('id_ruang_inmut'),
          );
        $this->db->insert('tb_user',$data);
        redirect('master_user');

      }else {
    
      $data['data_ruang'] = $this->user_mod->get_ruang()->result();
      $data['data_status'] = $this->user_mod->get_status()->result();
      $data['data_inmut'] = $this->user_mod->get_inmut()->result();
      $this->template->load('template_master','user/post',$data); 
      }
    }




}


 ?>