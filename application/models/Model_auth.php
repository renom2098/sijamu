<?php

class Model_auth extends CI_Model  {

    function __construct(){
        parent::__construct();
    }

    public function login($post){
      $this->db->select('*');
      $this->db->from('t_user');
      $this->db->where('username', $post['username']);
      $this->db->where('password', $post['password']);
      $query = $this->db->get();
      return $query;
    }

    public function get($id = null){
      $this->db->from('t_user');
      if($id != null) {
        $this->db->where('id', $id);
      }
      $query = $this->db->get();
      return $query;
    }

}