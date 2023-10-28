<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

  function __construct(){
		parent::__construct();
	}

  // Login Auth
  public function index(){
    $this->load->view('temp_login/login');
  }

}