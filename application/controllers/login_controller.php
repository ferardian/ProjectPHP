<?php

class login_controller extends CI_Controller{
  public function __construct() {
    parent::__construct();
    $this->load->model('Login_model');
  }

  public function index() {

    $this->load->view('v_login');


  }
  public function hasil_login() {
    if ($this->session->userdata('login')==TRUE) {
      if ($this->session->userdata('status')==0){
                redirect('dashboard');
          }elseif ($this->session->userdata('status')==1){
      redirect('dashboard2');
   }else if ($this->session->userdata('status')==2) {
    redirect('dashboard3');
  } else if ($this->session->userdata('status')==3) {
    redirect('dashboard_akreditasi');
  } else if ($this->session->userdata('status')==4) {
    redirect('dashboard_admin');
  } else if ($this->session->userdata('status')==5) {
    redirect('dashboard_master');
  }else {
    redirect('login_controller');
  }
}
}
public function pros_login(){
 $this->form_validation->set_rules('username', 'Nama Akun', 'required');
 $this->form_validation->set_rules('password', 'Password', 'required');
 $this->form_validation->set_message('required', 'Kolom %s harus di isi');
 $this->form_validation->set_error_delimiters('<p class="text-bold">','<p>');

 if ($this->form_validation->run() == TRUE){
  $username = $this->input->post('username');
  $password = $this->input->post('password');
  if ($this->Login_model->get_login($username, $password) == TRUE){
    $hasil = $this->Login_model->get_user($username);
    $nama =$this->Login_model->get_nama($hasil['kd_ruang']);
    $data = array('username'=>$username, 'login' => TRUE, 'status' => $hasil['status'], 'kd_ruang' => $hasil['kd_ruang'], 'id_user' => $hasil['id_user'], 'nama' => $nama['ruangan'], 'id_ruang_inmut' => $hasil['id_ruang_inmut']);
    $this->session->set_userdata($data);
    redirect('login_controller/hasil_login');
  }else{
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong class="fa fa-frown-o"></strong> Akun tidak ditemukan
      </div>');
    redirect('login_controller');
  }
}else{
  $this->load->view('v_login');
}

}
public function logout()
{
  $this->session->sess_destroy();
  redirect ('login_controller');
}

}
