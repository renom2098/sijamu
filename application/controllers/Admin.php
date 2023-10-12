<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  function __construct()
	{
		parent::__construct();
		$this->load->model("model_admin","mdl");
	}

  public function _temmplateTop(){
    $this->load->view('temp_main/head');
    $this->load->view('temp_main/sidebar');
  }

  public function _templateBottom(){
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

  function getData_penetapan(){
		// $list = $this->mdl->get_data_penetapan();
		// $data = array();
		// $no = $this->input->post("start");
		// if(!$this->input->post("draw")){ echo $this->m_reff->page403(); return false;}
		// $no =$no+1;
		// foreach ($list as $dataDB) {
		// 	$tombol='<div aria-label="Basic example" class="btn-groupss" role="group">
		// 	<button onclick="edit(`'.$dataDB->id.'`,`'.$dataDB->nama_peraturan.'`)" class="btn btn-sm btn-secondary pd-x-25 active" type="button">Edit</button> 
		// 	<button onclick="hapus(`'.$dataDB->id.'`,`'.$dataDB->nama_peraturan.'`)" class="btn btn-sm btn-danger pd-x-25" type="button">Hapus</button> 
		// 	</div>';

		// 	$row = array();
		// 	$row[] = $no++;	
		// 	$row[] = $dataDB->nama_peraturan;
		// 	$row[] = $dataDB->jenis_peraturan;
    //   $row[] = $dataDB->nama_file;
		// 	$row[] = $tombol;
      
		// 	$data[] = $row; 
		// }
    $output= array();
    $sql = "SELECT * FROM data_penetapan ";

    $totalQuery = mysqli_query($con,$sql);
    $total_all_rows = mysqli_num_rows($totalQuery);

    $columns = array(
      0 => 'id',
      1 => 'nama_peraturan',
      2 => 'jenis_peraturan',
      3 => 'nama_file',
    );

    if(isset($_POST['search']['value']))
    {
      $search_value = $_POST['search']['value'];
      $sql .= " WHERE username like '%".$search_value."%'";
      $sql .= " OR email like '%".$search_value."%'";
      $sql .= " OR mobile like '%".$search_value."%'";
      $sql .= " OR city like '%".$search_value."%'";
    }

    if(isset($_POST['order']))
    {
      $column_name = $_POST['order'][0]['column'];
      $order = $_POST['order'][0]['dir'];
      $sql .= " ORDER BY ".$columns[$column_name]." ".$order."";
    }
    else
    {
      $sql .= " ORDER BY id desc";
    }

    if($_POST['length'] != -1)
    {
      $start = $_POST['start'];
      $length = $_POST['length'];
      $sql .= " LIMIT  ".$start.", ".$length;
    }	

    $query = mysqli_query($con,$sql);
    $count_rows = mysqli_num_rows($query);
    $data = array();
    while($row = mysqli_fetch_assoc($query))
    {
      $sub_array = array();
      $sub_array[] = $row['id'];
      $sub_array[] = $row['nama_peraturan'];
      $sub_array[] = $row['jenis_peraturan'];
      $sub_array[] = $row['nama_file'];
      $sub_array[] = '<a href="javascript:void();" data-id="'.$row['id'].'"  class="btn btn-info btn-sm editbtn" >Edit</a>  <a href="javascript:void();" data-id="'.$row['id'].'"  class="btn btn-danger btn-sm deleteBtn" >Delete</a>';
      $data[] = $sub_array;
    }

    $output = array(
      'draw'=> intval($_POST['draw']),
      'recordsTotal' =>$count_rows ,
      'recordsFiltered'=>   $total_all_rows,
      'data'=>$data,
    );
    echo  json_encode($output);
      }

}