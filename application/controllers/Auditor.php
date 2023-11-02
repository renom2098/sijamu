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

  // Bagian Penetapan
  public function penetapan(){
    $this->_temmplateTop();
    $this->load->view('auditor/penetapan');
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

  public function downloadPenetapan($id){
		$data = $this->db->get_where('data_penetapan',['id'=>$id])->row();
		force_download('dokumen/penetapan/'.$data->nama_file,NULL);
	}
  // Bagian Penetapan

  // Bagian Pelaksanaan
  public function pelaksanaan(){
    $this->_temmplateTop();
    $this->load->view('auditor/pelaksanaan');
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

  public function downloadPelaksanaan($id){
		$data = $this->db->get_where('data_pelaksanaan',['id'=>$id])->row();
		force_download('dokumen/pelaksanaan/'.$data->nama_file,NULL);
	}
  // Bagian Pelaksanaan

  // Bagian Evaluasi
  public function evaluasi(){
    $this->_temmplateTop();
    $this->load->view('auditor/evaluasi');
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
    $this->load->view('auditor/view_formAddevaluasi');
  }

  public function viewEditDataEvaluasi(){
    $data["data"]=$this->model_evaluasi->view_dataEvaluasi();
    $this->load->view('auditor/view_formEditevaluasi', $data);
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
      redirect("auditor/evaluasi");
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
      redirect("auditor/evaluasi");
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

  // Bagian Pengendalian
  public function pengendalian(){
    $this->_temmplateTop();
    $this->load->view('auditor/pengendalian');
    $this->_templateBottom();
  }

  public function getData_pengendalian(){
		$list = $this->model_pengendalian->get_datatables();
        $data = array();
        $no = @$_POST['start'];
        foreach ($list as $pengendalian) {
            $no++;
            $row = array();
            $row[] = $no.".";
            $row[] = $pengendalian->nama_bidang_pengaturan_standar;
            $row[] = $pengendalian->_ctimeupload;
            // add html for action
            $row[] = '<div aria-label="Basic example" class="btn-groupss" role="group">
            <button onclick="review(`'.$pengendalian->id.'`,`'.$pengendalian->nama_bidang_pengaturan_standar.'`)" class="btn btn-sm btn-info pd-x-25" type="button" data-bs-toggle="modal" data-bs-target="#reviewData">Review</button>
            </div>';
            $data[] = $row;
        }
        $output = array(
                    "draw" => @$_POST['draw'],
                    "recordsTotal" => $this->model_pengendalian->count_all(),
                    "recordsFiltered" => $this->model_pengendalian->count_filtered(),
                    "data" => $data,
                );
        // output to json format
        echo json_encode($output);
  }

  public function viewReviewDataPengendalian(){
    $data["data"]=$this->model_pengendalian->view_dataPengendalian();
    $this->load->view('auditor/view_formReviewPengendalian', $data);
  }

  // public function downloadPengendalian($id){
	// 	$data = $this->db->get_where('data_pengendalian',['id'=>$id])->row();
	// 	force_download('dokumen/pengendalian/'.$data->nama_file,NULL);
	// }
  // Bagian Pengendalian

  // Bagian Peningkatan
  public function peningkatan(){
    $this->_temmplateTop();
    $this->load->view('auditor/peningkatan');
    $this->_templateBottom();
  }

  public function getData_peningkatan(){
		$list = $this->model_peningkatan->get_datatables();
        $data = array();
        $no = @$_POST['start'];
        foreach ($list as $peningkatan) {
            $no++;
            $row = array();
            $row[] = $no.".";
            $row[] = $peningkatan->nama_pengaturan;
            $row[] = $peningkatan->tanggal_penetapan_baru;
            // add html for action
            $row[] = '<div aria-label="Basic example" class="btn-groupss" role="group">
            <button onclick="review(`'.$peningkatan->id.'`,`'.$peningkatan->nama_pengaturan.'`)" class="btn btn-sm btn-info pd-x-25" type="button" data-bs-toggle="modal" data-bs-target="#reviewData">Review</button>
            </div>';
            $data[] = $row;
        }
        $output = array(
                    "draw" => @$_POST['draw'],
                    "recordsTotal" => $this->model_peningkatan->count_all(),
                    "recordsFiltered" => $this->model_peningkatan->count_filtered(),
                    "data" => $data,
                );
        // output to json format
        echo json_encode($output);
  }

  public function viewReviewDataPeningkatan(){
    $data["data"]=$this->model_peningkatan->view_dataPeningkatan();
    $this->load->view('auditor/view_formReviewPeningkatan', $data);
  }

  // Bagian Peningkatan

}