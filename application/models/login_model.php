<?php
class Login_model extends CI_Model{
    public function get_login ($username, $password) {
        return $this->db->get_where('tb_user', array('nama_user' => $username, 'password' => $password))->num_rows();
    }
    public function get_user($username) {
        return $this->db->get_where('tb_user', array('nama_user' => $username))->row_array();
    }

    public function get_nama($kd_ruang){
    	return $this->db->get_where('tb_ruangan', array('kd_ruang' => $kd_ruang))->row_array();
    }
    // public function get_user_siswa($nis) {
    //     return $query = $this->db->get_where('siswa', array('nis' => $nis));
    // }
}
