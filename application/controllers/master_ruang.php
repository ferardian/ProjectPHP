<?php 
	class Master_ruang extends CI_Controller{
		 function __construct(){
      	parent:: __construct();
      	$this->load->model(array('ruangan_mod','user_mod'));
      	if (!is_login()) {
        redirect('login_controller');
      	}
    }

    function index(){
    	$data['record']=$this->ruangan_mod->select_all()->result();
      $data['data_inmut'] = $this->user_mod->get_inmut()->result();
    	$this->template->load('template_master','ruangan/v_ruangan',$data);
    }

    function post(){
        if (isset($_POST['submit'])){
        $data=array(
          'kd_ruang'=>$this->input->post('kd_ruang'),
          'ruangan'=>$this->input->post('ruangan'),
          'id_ruang_inmut'=>$this->input->post('id_ruang_inmut'),
          );
        $this->db->insert('tb_ruangan',$data);
        redirect('master_ruang');

      }else {
    
      $data['data_ruang'] = $this->user_mod->get_ruang()->result();
      $data['data_status'] = $this->user_mod->get_status()->result();
      $data['data_inmut'] = $this->user_mod->get_inmut()->result();
      $this->template->load('template_master','user/post',$data); 
      }
    }
}


 ?>