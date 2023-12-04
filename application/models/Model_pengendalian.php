<?php

class Model_pengendalian extends CI_Model  {

    function __construct(){
        parent::__construct();
    }

  // start datatables
  var $column_order = array(null, 'nama_bidang_pengaturan_standar', 'tautan_pelaksanaan_rtm', 'tautan_bukti_pelaksanaan_rtm', 'tautan_pelaksanaan_rtl, tautan_bukti_pelaksanaan_rtl'); //set column field database for datatable orderable
  var $column_search = array('nama_bidang_pengaturan_standar', 'tautan_pelaksanaan_rtm', 'tautan_bukti_pelaksanaan_rtm', 'tautan_pelaksanaan_rtl, tautan_bukti_pelaksanaan_rtl'); //set column field database for datatable searchable
  var $order = array('id' => 'asc'); //default order 
 
  private function _get_datatables_query() {
      if ($this->fungsi->user_login()->level == 1){
            $this->db->select('*');
            $this->db->from('data_pengendalian');
        } else {
            $id_prodi = $this->fungsi->user_login()->prodi;  
            $this->db->select('*');
            $this->db->from('data_pengendalian');
            $this->db->where('id_prodi',$id_prodi);
        }
      $i = 0;
      foreach ($this->column_search as $pengendalian) { // loop column 
          if(@$_POST['search']['value']) { // if datatable send POST for search
              if($i===0) { // first loop
                  $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                  $this->db->like($pengendalian, $_POST['search']['value']);
              } else {
                  $this->db->or_like($pengendalian, $_POST['search']['value']);
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
      $this->db->from('data_pengendalian');
      return $this->db->count_all_results();
  }
  
    function insert_dataPengendalian(){
        $form = $this->input->post("f");
        $timenow = date("Y-m-d");
        $id_level = $this->fungsi->user_login()->level;
        $id_fakultas = $this->fungsi->user_login()->fakultas;
        $id_prodi = $this->fungsi->user_login()->prodi;
        $id_jenis = $this->fungsi->user_login()->jenis;
        
        $this->db->set($form);
        $this->db->set("_ctimeupload", $timenow);
        $this->db->set("_ctimeupdate", $timenow);
        $this->db->set("id_level", $id_level);
        $this->db->set("id_fakultas", $id_fakultas);
        $this->db->set("id_prodi", $id_prodi);
        $this->db->set("id_jenis", $id_jenis);
        return $this->db->insert("data_pengendalian");
    }

    function view_dataPengendalian(){
        $id = $this->input->post("id");
        $this->db->from("data_pengendalian");
        $this->db->where("id", $id);
        return $this->db->get()->row();
    }

    function update_dataPengendalian(){
        $id = $this->input->post("id");
        $form = $this->input->post("f");
        $timenow = date("Y-m-d");
        $id_level = $this->fungsi->user_login()->level;
        $id_fakultas = $this->fungsi->user_login()->fakultas;
        $id_prodi = $this->fungsi->user_login()->prodi;
        $id_jenis = $this->fungsi->user_login()->jenis;

        $this->db->set($form);
        $this->db->set("_ctimeupdate", $timenow);
        $this->db->set("id_level", $id_level);
        $this->db->set("id_fakultas", $id_fakultas);
        $this->db->set("id_prodi", $id_prodi);
        $this->db->set("id_jenis", $id_jenis);
        $this->db->where("id", $id);
        return $this->db->update("data_pengendalian");
    }

    function delete_dataPengendalian(){
        $id = $this->input->post("id");
        $this->db->where("id", $id);
        return $this->db->delete("data_pengendalian");
    }

}