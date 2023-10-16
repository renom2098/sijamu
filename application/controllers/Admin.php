<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  function __construct()
	{
		parent::__construct();
		$this->load->model("model_admin","mdl");
	}

  function _temmplateTop(){
    $this->load->view('temp_main/head');
    $this->load->view('temp_main/sidebar');
  }

  function _templateBottom(){
    $this->load->view('temp_main/footer');
  }

  // Home
  public function index(){
    $this->_temmplateTop();
    $this->load->view('admin/home');
    $this->_templateBottom();
  }

  // Penetapan
  public function penetapan(){
    $this->_temmplateTop();
    $this->load->view('admin/penetapan');
    $this->_templateBottom();
  }

  public function getData_penetapan(){
		$list = $this->mdl->get_datatables();
        $data = array();
        $no = @$_POST['start'];
        foreach ($list as $peraturan) {
            $no++;
            $row = array();
            $row[] = $no.".";
            $row[] = $peraturan->nama_peraturan;
            $row[] = $peraturan->jenis_peraturan;
            $row[] = $peraturan->nama_file;
            // add html for action
            $row[] = '<a href="'.site_url('item/edit/'.$peraturan->id).'" class="btn btn-primary btn-xs">Update</a>
                    <a href="'.site_url('item/del/'.$peraturan->id).'" onclick="return confirm(\'Yakin hapus data?\')"  class="btn btn-danger btn-xs">Delete</a>';
            $data[] = $row;
        }
        $output = array(
                    "draw" => @$_POST['draw'],
                    "recordsTotal" => $this->mdl->count_all(),
                    "recordsFiltered" => $this->mdl->count_filtered(),
                    "data" => $data,
                );
        // output to json format
        echo json_encode($output);
  }

  public function viewAddDataPenetapan(){
    $this->load->view('admin/view_formAddPenetapan');
  }

  public function insert_dataPenetapan(){
    $this->mdl->insert_dataPenetapan();
    redirect("admin/penetapan");
  }

}