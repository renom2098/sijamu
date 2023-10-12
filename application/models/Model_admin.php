<?php

class Model_admin extends CI_Model  {
    
  function __construct(){
    parent::__construct();
  }

	function get_data_penetapan(){
	  $this->db->from("data_penetapan");
    return $this->db->get();
	}

}