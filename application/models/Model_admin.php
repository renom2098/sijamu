<?php

class Model_admin extends CI_Model  {

    function __construct(){
        parent::__construct();
    }

  // start datatables
  var $column_order = array(null, 'nama_peraturan', 'jenis_peraturan', 'nama_file'); //set column field database for datatable orderable
  var $column_search = array('nama_peraturan', 'jenis_peraturan', 'nama_file'); //set column field database for datatable searchable
  var $order = array('id' => 'asc'); //default order 
 
  private function _get_datatables_query() {
      $this->db->select('*');
      $this->db->from('data_penetapan');
      $i = 0;
      foreach ($this->column_search as $peraturan) { // loop column 
          if(@$_POST['search']['value']) { // if datatable send POST for search
              if($i===0) { // first loop
                  $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                  $this->db->like($peraturan, $_POST['search']['value']);
              } else {
                  $this->db->or_like($peraturan, $_POST['search']['value']);
              }
              if(count($this->column_search) - 1 == $i) //last loop
                  $this->db->group_end(); //close bracket
          }
          $i++;
      }
         
      if(isset($_POST['order'])) { // here order processing
          $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
      }  else if(isset($this->order)) {
          $order = $this->order;
          $this->db->order_by(key($order), $order[key($order)]);
      }
  }

    function get_datatables() {
        $this->_get_datatables_query();
        if(@$_POST['length'] != -1)
        $this->db->limit(@$_POST['length'], @$_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

  function count_filtered() {
      $this->_get_datatables_query();
      $query = $this->db->get();
      return $query->num_rows();
  }

  function count_all() {
      $this->db->from('data_penetapan');
      return $this->db->count_all_results();
  }
  
    function insert_dataPenetapan($nama_file){
        $form = $this->input->post("f");
        $timenow = date("Y-m-d");
        
        $this->db->set($form);
        $this->db->set("nama_file", $nama_file);
        $this->db->set("_ctimeupload", $timenow);
        $this->db->set("_ctimeupdate", $timenow);
        return $this->db->insert("data_penetapan");
    }

    function view_dataPenetapan(){
        $id = $this->input->post("id");
        $this->db->from("data_penetapan");
        $this->db->where("id", $id);
        return $this->db->get()->row();
    }

    function update_dataPenetapan(){
        $id = $this->input->post("id");
        $form = $this->input->post("f");
        $timenow = date("Y-m-d");

        $this->db->set($form);
        $this->db->set("_ctimeupdate", $timenow);
        $this->db->where("id", $id);
        return $this->db->update("data_penetapan");
    }

    function delete_dataPenetapan(){
        $id = $this->input->post("id");
        $this->db->where("id", $id);
        return $this->db->delete("data_penetapan");
    }

}