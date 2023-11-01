<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auditor extends CI_Controller {

  function __construct(){
		parent::__construct();
    check_not_login();
		$this->load->model("model_penetapan");
    $this->load->model("model_pelaksanaan");
    $this->load->model("model_evaluasi");
    $this->load->model("model_pengendalian");
    $this->load->model("model_peningkatan");
	}

  function _temmplateTop(){
    $this->load->view('temp_main/head');
    $this->load->view('temp_main/sidebar_auditor');
  }

  function _templateBottom(){
    $this->load->view('temp_main/footer');
  }

  // Home
  public function index(){
    $this->_temmplateTop();
    $this->load->view('auditor/home');
    $this->_templateBottom();
  }

}