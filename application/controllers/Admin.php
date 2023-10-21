<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  function __construct()
	{
		parent::__construct();
		$this->load->model("model_penetapan");
    $this->load->model("model_pelaksanaan");
    $this->load->model("model_evaluasi");
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

  // Bagian Penetapan
  public function penetapan(){
    $this->_temmplateTop();
    $this->load->view('admin/penetapan');
    $this->_templateBottom();
  }

  public function getData_penetapan(){
		$list = $this->model_penetapan->get_datatables();
        $data = array();
        $no = @$_POST['start'];
        foreach ($list as $penetapan) {
            $no++;
            $row = array();
            $row[] = $no.".";
            $row[] = $penetapan->nama_peraturan;
            $row[] = $penetapan->jenis_peraturan;
            $row[] = $penetapan->tanggal_ditetapkan;
            // add html for action
            $row[] = '<div aria-label="Basic example" class="btn-groupss" role="group">
            <button onclick="edit(`'.$penetapan->id.'`,`'.$penetapan->nama_peraturan.'`)" class="btn btn-sm btn-primary pd-x-25" type="button" data-bs-toggle="modal" data-bs-target="#editData">Edit</button> 
            <button onclick="hapus(`'.$penetapan->id.'`,`'.$penetapan->nama_peraturan.'`)" class="btn btn-sm btn-danger pd-x-25" type="button">Hapus</button>
            <button onclick="download(`'.$penetapan->id.'`)" class="btn btn-sm btn-secondary pd-x-25" type="button">Download</button>
            </div>';
            $data[] = $row;
        }
        $output = array(
                    "draw" => @$_POST['draw'],
                    "recordsTotal" => $this->model_penetapan->count_all(),
                    "recordsFiltered" => $this->model_penetapan->count_filtered(),
                    "data" => $data,
                );
        // output to json format
        echo json_encode($output);
  }

  public function viewAddDataPenetapan(){
    $this->load->view('admin/view_formAddPenetapan');
  }

  public function viewEditDataPenetapan(){
    $data["data"]=$this->model_penetapan->view_dataPenetapan();
    $this->load->view('admin/view_formEditPenetapan', $data);
  }

  public function insert_dataPenetapan(){
    $config['upload_path']          = './dokumen/penetapan/';
		$config['allowed_types']        = 'xls|xlsx|pdf';
		$config['max_size']             = 10000;
		$config['encrypt_name']			    = FALSE;

		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('nama_file'))
		{
				echo "eror!"; // lebih diindahkan
		}
		else
		{
			$nama_file = $this->upload->data("file_name");
			$this->model_penetapan->insert_dataPenetapan($nama_file);
      redirect("admin/penetapan");
		}    
  }

  public function update_dataPenetapan(){
    $config['upload_path']          = './dokumen/penetapan/';
		$config['allowed_types']        = 'xls|xlsx|pdf';
		$config['max_size']             = 10000;
		$config['encrypt_name']			    = FALSE;

		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('nama_file'))
		{
				echo "eror!"; // lebih diindahkan
		}
		else
		{
			$nama_file = $this->upload->data("file_name");
      $this->model_penetapan->update_dataPenetapan($nama_file);
      redirect("admin/penetapan");
		}
      
  }

  public function delete_dataPenetapan(){
      $this->model_penetapan->delete_dataPenetapan();
  }

  public function downloadPenetapan($id){
		$data = $this->db->get_where('data_penetapan',['id'=>$id])->row();
		force_download('dokumen/penetapan/'.$data->nama_file,NULL);
	}
  // Bagian Penetapan

  // Bagian Pelaksanaan
  public function pelaksanaan(){
    $this->_temmplateTop();
    $this->load->view('admin/pelaksanaan');
    $this->_templateBottom();
  }

  public function getData_pelaksanaan(){
		$list = $this->model_pelaksanaan->get_datatables();
        $data = array();
        $no = @$_POST['start'];
        foreach ($list as $pelaksanaan) {
            $no++;
            $row = array();
            $row[] = $no.".";
            $row[] = $pelaksanaan->nama_dok_pelaksanaan;
            $row[] = $pelaksanaan->jenis_dok_pelaksanaan;
            $row[] = $pelaksanaan->tanggal_ditetapkan;
            // add html for action
            $row[] = '<div aria-label="Basic example" class="btn-groupss" role="group">
            <button onclick="edit(`'.$pelaksanaan->id.'`,`'.$pelaksanaan->nama_dok_pelaksanaan.'`)" class="btn btn-sm btn-primary pd-x-25" type="button" data-bs-toggle="modal" data-bs-target="#editData">Edit</button> 
            <button onclick="hapus(`'.$pelaksanaan->id.'`,`'.$pelaksanaan->nama_dok_pelaksanaan.'`)" class="btn btn-sm btn-danger pd-x-25" type="button">Hapus</button>
            <button onclick="download(`'.$pelaksanaan->id.'`)" class="btn btn-sm btn-secondary pd-x-25" type="button">Download</button>
            </div>';
            $data[] = $row;
        }
        $output = array(
                    "draw" => @$_POST['draw'],
                    "recordsTotal" => $this->model_pelaksanaan->count_all(),
                    "recordsFiltered" => $this->model_pelaksanaan->count_filtered(),
                    "data" => $data,
                );
        // output to json format
        echo json_encode($output);
  }

  public function viewAddDataPelaksanaan(){
    $this->load->view('admin/view_formAddPelaksanaan');
  }

  public function viewEditDataPelaksanaan(){
    $data["data"]=$this->model_pelaksanaan->view_dataPelaksanaan();
    $this->load->view('admin/view_formEditPelaksanaan', $data);
  }

  public function insert_dataPelaksanaan(){
    $config['upload_path']          = './dokumen/pelaksanaan/';
		$config['allowed_types']        = 'xls|xlsx|pdf';
		$config['max_size']             = 10000;
		$config['encrypt_name']			    = FALSE;

		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('nama_file'))
		{
				echo "eror!"; // lebih diindahkan
		}
		else
		{
			$nama_file = $this->upload->data("file_name");
			$this->model_pelaksanaan->insert_dataPelaksanaan($nama_file);
      redirect("admin/pelaksanaan");
		}    
  }

  public function update_dataPelaksanaan(){
    $config['upload_path']          = './dokumen/pelaksanaan/';
		$config['allowed_types']        = 'xls|xlsx|pdf';
		$config['max_size']             = 10000;
		$config['encrypt_name']			    = FALSE;

		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('nama_file'))
		{
				echo "eror!"; // lebih diindahkan
		}
		else
		{
			$nama_file = $this->upload->data("file_name");
      $this->model_pelaksanaan->update_dataPelaksanaan($nama_file);
      redirect("admin/pelaksanaan");
		}
      
  }

  public function delete_dataPelaksanaan(){
      $this->model_pelaksanaan->delete_dataPelaksanaan();
  }

  public function downloadPelaksanaan($id){
		$data = $this->db->get_where('data_pelaksanaan',['id'=>$id])->row();
		force_download('dokumen/pelaksanaan/'.$data->nama_file,NULL);
	}
  // Bagian Pelaksanaan

  // Bagian Evaluasi
  public function evaluasi(){
    $this->_temmplateTop();
    $this->load->view('admin/evaluasi');
    $this->_templateBottom();
  }

  public function getData_evaluasi(){
		$list = $this->model_evaluasi->get_datatables();
        $data = array();
        $no = @$_POST['start'];
        foreach ($list as $evaluasi) {
            $no++;
            $row = array();
            $row[] = $no.".";
            $row[] = $evaluasi->nama_dok_evaluasi;
            $row[] = $evaluasi->jenis_dok_evaluasi;
            $row[] = $evaluasi->tanggal_ditetapkan;
            // add html for action
            $row[] = '<div aria-label="Basic example" class="btn-groupss" role="group">
            <button onclick="edit(`'.$evaluasi->id.'`,`'.$evaluasi->nama_dok_evaluasi.'`)" class="btn btn-sm btn-primary pd-x-25" type="button" data-bs-toggle="modal" data-bs-target="#editData">Edit</button> 
            <button onclick="hapus(`'.$evaluasi->id.'`,`'.$evaluasi->nama_dok_evaluasi.'`)" class="btn btn-sm btn-danger pd-x-25" type="button">Hapus</button>
            <button onclick="download(`'.$evaluasi->id.'`)" class="btn btn-sm btn-secondary pd-x-25" type="button">Download</button>
            </div>';
            $data[] = $row;
        }
        $output = array(
                    "draw" => @$_POST['draw'],
                    "recordsTotal" => $this->model_evaluasi->count_all(),
                    "recordsFiltered" => $this->model_evaluasi->count_filtered(),
                    "data" => $data,
                );
        // output to json format
        echo json_encode($output);
  }

  public function viewAddDataEvaluasi(){
    $this->load->view('admin/view_formAddevaluasi');
  }

  public function viewEditDataEvaluasi(){
    $data["data"]=$this->model_evaluasi->view_dataEvaluasi();
    $this->load->view('admin/view_formEditevaluasi', $data);
  }

  public function insert_dataEvaluasi(){
    $config['upload_path']          = './dokumen/evaluasi/';
		$config['allowed_types']        = 'xls|xlsx|pdf';
		$config['max_size']             = 10000;
		$config['encrypt_name']			    = FALSE;

		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('nama_file'))
		{
				echo "eror!"; // lebih diindahkan
		}
		else
		{
			$nama_file = $this->upload->data("file_name");
			$this->model_evaluasi->insert_dataEvaluasi($nama_file);
      redirect("admin/evaluasi");
		}    
  }

  public function update_dataEvaluasi(){
    $config['upload_path']          = './dokumen/evaluasi/';
		$config['allowed_types']        = 'xls|xlsx|pdf';
		$config['max_size']             = 10000;
		$config['encrypt_name']			    = FALSE;

		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('nama_file'))
		{
				echo "eror!"; // lebih diindahkan
		}
		else
		{
			$nama_file = $this->upload->data("file_name");
      $this->model_evaluasi->update_dataEvaluasi($nama_file);
      redirect("admin/evaluasi");
		}
      
  }

  public function delete_dataEvaluasi(){
      $this->model_evaluasi->delete_dataevaluasi();
  }

  public function downloadEvaluasi($id){
		$data = $this->db->get_where('data_evaluasi',['id'=>$id])->row();
		force_download('dokumen/evaluasi/'.$data->nama_file,NULL);
	}
  // Bagian Evaluasi

}