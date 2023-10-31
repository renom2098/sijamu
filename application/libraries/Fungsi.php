<?php

Class Fungsi {
    protected $ci;

    function __construct(){
        $this->ci =& get_instance();
    }

    function user_login(){
        $this->ci->load->model('model_auth');
        $id = $this->ci->session->userdata('id');
        $user_data = $this->ci->model_auth->get($id)->row();
        return $user_data;
    }
}