<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

  function __construct(){
		parent::__construct();
	}

  // Login Auth
  public function index(){
    check_already_login();
    $this->load->view('temp_login/login');
  }

  public function process(){
    $post = $this->input->post(null, TRUE);
    if(isset($post['login'])){
      $this->load->model('model_auth');
      $query = $this->model_auth->login($post);
      if($query->num_rows() > 0){
        $row = $query->row();
        $params = array(
          'id' => $row->id,
          'level' => $row->level
        );
        $this->session->set_userdata($params);
        $lvl=$this->session->userdata('level');
        if ($lvl == 1) { // ADMIN
                redirect("admin");
            }
            elseif($lvl == 2){ // Auditor
                redirect("auditor");
            } elseif($lvl == 3) { // Audite
              redirect("audite");
            } elseif($lvl == 4) { // Pimpinan
              redirect("pimpinan");
            } else {
              echo "<script>
              alert('Sorry gagal login, username atau password salah!');
              window.location='".site_url('auth')."'
              </script>";
            }
      } else {
        echo "<script>
        alert('Sorry gagal login, username atau password salah!');
        window.location='".site_url('auth')."'
        </script>";
      }
    } 
  }

  public function logout(){
    $params = array('id', 'level');
    $this->session->unset_userdata($params);
    redirect('auth');
  }

}