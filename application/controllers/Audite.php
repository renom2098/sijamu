<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Audite extends CI_Controller {

  function __construct(){
		parent::__construct();
    check_not_login();
		$this->load->model("model_penetapan");
    $this->load->model("model_pelaksanaan");
    $this->load->model("model_evaluasi");
    $this->load->model("model_pengendalian");
    $this->load->model("model_peningkatan");
    $this->load->model("model_pengguna");
    // ambil session untuk evaluasi
	}

  function _temmplateTop(){
    $this->load->view('temp_main/head');
    $this->load->view('temp_main/sidebar_audite');
  }

  function _templateBottom(){
    $this->load->view('temp_main/footer');
  }

  // Home
  public function index(){
    $this->_temmplateTop();
    $this->load->view('audite/home');
    $this->_templateBottom();
  }

  // Bagian Penetapan
  public function penetapan(){
    $this->_temmplateTop();
    $this->load->view('audite/penetapan');
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
            <button onclick="review(`'.$penetapan->id.'`,`'.$penetapan->nama_peraturan.'`)" class="btn btn-sm btn-info pd-x-25" type="button" data-bs-toggle="modal" data-bs-target="#reviewData">Review</button>
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
    $this->load->view('audite/view_formAddPenetapan');
  }

  public function viewEditDataPenetapan(){
    $data["data"]=$this->model_penetapan->view_dataPenetapan();
    $this->load->view('audite/view_formEditPenetapan', $data);
  }

  public function insert_dataPenetapan(){
    $config['upload_path']          = './dokumen/penetapan/';
		$config['allowed_types']        = 'xls|xlsx|pdf';
		$config['max_size']             = 10000;
		$config['encrypt_name']			    = FALSE;

		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('nama_file'))
		{
			$nama_file = null;
			$this->model_penetapan->insert_dataPenetapan($nama_file);
      redirect("audite/penetapan");
		}
		else
		{
			$nama_file = $this->upload->data("file_name");
			$this->model_penetapan->insert_dataPenetapan($nama_file);
      redirect("audite/penetapan");
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
			$nama_file = null;
			$this->model_penetapan->update_dataPenetapan($nama_file);
      redirect("audite/penetapan");
		}
		else
		{
			$nama_file = $this->upload->data("file_name");
      $this->model_penetapan->update_dataPenetapan($nama_file);
      redirect("audite/penetapan");
		}
      
  }

  public function delete_dataPenetapan(){
      $this->model_penetapan->delete_dataPenetapan();
  }

  public function downloadPenetapan($id){
		$data = $this->db->get_where('data_penetapan',['id'=>$id])->row();
		force_download('dokumen/penetapan/'.$data->nama_file,NULL);
	}

  public function viewReviewDataPenetapan(){
    $data["data"]=$this->model_penetapan->view_dataPenetapan();
    $this->load->view('audite/view_formReviewPenetapan', $data);
  }
  // Bagian Penetapan

  // Bagian Pelaksanaan
  public function pelaksanaan(){
    $this->_temmplateTop();
    $this->load->view('audite/pelaksanaan');
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
            <button onclick="review(`'.$pelaksanaan->id.'`,`'.$pelaksanaan->nama_dok_pelaksanaan.'`)" class="btn btn-sm btn-info pd-x-25" type="button" data-bs-toggle="modal" data-bs-target="#reviewData">Review</button>
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
    $this->load->view('audite/view_formAddPelaksanaan');
  }

  public function viewEditDataPelaksanaan(){
    $data["data"]=$this->model_pelaksanaan->view_dataPelaksanaan();
    $this->load->view('audite/view_formEditPelaksanaan', $data);
  }

  public function insert_dataPelaksanaan(){
    $config['upload_path']          = './dokumen/pelaksanaan/';
		$config['allowed_types']        = 'xls|xlsx|pdf';
		$config['max_size']             = 10000;
		$config['encrypt_name']			    = FALSE;

		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('nama_file'))
		{
      $nama_file = null;
      $this->model_pelaksanaan->insert_dataPelaksanaan($nama_file);
      redirect("audite/pelaksanaan");
		}
		else
		{
			$nama_file = $this->upload->data("file_name");
			$this->model_pelaksanaan->insert_dataPelaksanaan($nama_file);
      redirect("audite/pelaksanaan");
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
      $nama_file = null;
      $this->model_pelaksanaan->update_dataPelaksanaan($nama_file);
      redirect("audite/pelaksanaan");
		}
		else
		{
			$nama_file = $this->upload->data("file_name");
      $this->model_pelaksanaan->update_dataPelaksanaan($nama_file);
      redirect("audite/pelaksanaan");
		}
      
  }

  public function delete_dataPelaksanaan(){
      $this->model_pelaksanaan->delete_dataPelaksanaan();
  }

  public function downloadPelaksanaan($id){
		$data = $this->db->get_where('data_pelaksanaan',['id'=>$id])->row();
		force_download('dokumen/pelaksanaan/'.$data->nama_file,NULL);
	}

  public function viewReviewDataPelaksanaan(){
    $data["data"]=$this->model_pelaksanaan->view_dataPelaksanaan();
    $this->load->view('audite/view_formReviewPelaksanaan', $data);
  }
  // Bagian Pelaksanaan

  // Bagian Evaluasi
  public function evaluasi(){
    $this->_temmplateTop();
    $this->load->view('audite/evaluasi');
    $this->_templateBottom();
  }

  public function getData_evaluasi(){
		$list = $this->model_evaluasi->get_datatables();
        $data = array();
        $no = @$_POST['start'];
        foreach ($list as $evaluasi) {

            $dataProdi = $this->model_pengguna->getProdi($evaluasi->prodi);
            $dataFakultas = $this->model_pengguna->getFakultas($evaluasi->fakultas);  

            $no++;
            $row = array();
            $row[] = $no.".";
            $row[] = $evaluasi->nama_dok_evaluasi;
            $row[] = $evaluasi->jenis_dok_evaluasi;
            $row[] = $dataProdi->nama_prodi;
            $row[] = $dataFakultas->nama_fakultas;
            $row[] = $evaluasi->tanggal_ditetapkan;
            // add html for action
            $row[] = '<div aria-label="Basic example" class="btn-groupss" role="group">
            <button onclick="edit(`'.$evaluasi->id.'`,`'.$evaluasi->nama_dok_evaluasi.'`)" class="btn btn-sm btn-primary pd-x-25" type="button" data-bs-toggle="modal" data-bs-target="#editData">Edit</button> 
            <button onclick="hapus(`'.$evaluasi->id.'`,`'.$evaluasi->nama_dok_evaluasi.'`)" class="btn btn-sm btn-danger pd-x-25" type="button">Hapus</button>
            <button onclick="review(`'.$evaluasi->id.'`,`'.$evaluasi->nama_dok_evaluasi.'`)" class="btn btn-sm btn-info pd-x-25" type="button" data-bs-toggle="modal" data-bs-target="#reviewData">Review</button>
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
    $data["fakultas"]=$this->model_pengguna->getAllFakultas();
    $data["prodi"]=$this->model_pengguna->getAllProdi();
    $this->load->view('audite/view_formAddEvaluasi', $data);
  }

  public function viewEditDataEvaluasi(){
    $data["data_fakultas"]=$this->model_pengguna->getAllFakultas();
    $data["data_prodi"]=$this->model_pengguna->getAllProdi();
    $data["data"]=$this->model_evaluasi->view_dataEvaluasi();
    $this->load->view('audite/view_formEditEvaluasi', $data);
  }

  public function insert_dataEvaluasi(){
    $config['upload_path']          = './dokumen/evaluasi/';
		$config['allowed_types']        = 'xls|xlsx|pdf';
		$config['max_size']             = 10000;
		$config['encrypt_name']			    = FALSE;

		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('nama_file'))
		{
				$nama_file = null;
			  $this->model_evaluasi->insert_dataEvaluasi($nama_file);
        redirect("audite/evaluasi");
		}
		else
		{
			$nama_file = $this->upload->data("file_name");
			$this->model_evaluasi->insert_dataEvaluasi($nama_file);
      redirect("audite/evaluasi");
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
				$nama_file = null;
			  $this->model_evaluasi->update_dataEvaluasi($nama_file);
        redirect("audite/evaluasi");
		}
		else
		{
			$nama_file = $this->upload->data("file_name");
      $this->model_evaluasi->update_dataEvaluasi($nama_file);
      redirect("audite/evaluasi");
		}
      
  }

  public function delete_dataEvaluasi(){
      $this->model_evaluasi->delete_dataevaluasi();
  }

  public function viewReviewDataEvaluasi(){
    $data["data_fakultas"]=$this->model_pengguna->getAllFakultas();
    $data["data_prodi"]=$this->model_pengguna->getAllProdi();
    $data["data"]=$this->model_evaluasi->view_dataEvaluasi();
    $this->load->view('audite/view_formReviewEvaluasi', $data);
  }

  public function downloadEvaluasi($id){
		$data = $this->db->get_where('data_evaluasi',['id'=>$id])->row();
		force_download('dokumen/evaluasi/'.$data->nama_file,NULL);
	}
  // Bagian Evaluasi

  // Bagian Pengendalian
  public function pengendalian(){
    $this->_temmplateTop();
    $this->load->view('audite/pengendalian');
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
            <button onclick="edit(`'.$pengendalian->id.'`,`'.$pengendalian->nama_bidang_pengaturan_standar.'`)" class="btn btn-sm btn-primary pd-x-25" type="button" data-bs-toggle="modal" data-bs-target="#editData">Edit</button>
            <button onclick="review(`'.$pengendalian->id.'`,`'.$pengendalian->nama_bidang_pengaturan_standar.'`)" class="btn btn-sm btn-info pd-x-25" type="button" data-bs-toggle="modal" data-bs-target="#reviewData">Review</button>
            <button onclick="hapus(`'.$pengendalian->id.'`,`'.$pengendalian->nama_bidang_pengaturan_standar.'`)" class="btn btn-sm btn-danger pd-x-25" type="button">Hapus</button>
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

  public function viewAddDataPengendalian(){
    $this->load->view('audite/view_formAddPengendalian');
  }

  public function viewEditDataPengendalian(){
    $data["data"]=$this->model_pengendalian->view_dataPengendalian();
    $this->load->view('audite/view_formEditPengendalian', $data);
  }

  public function viewReviewDataPengendalian(){
    $data["data"]=$this->model_pengendalian->view_dataPengendalian();
    $this->load->view('audite/view_formReviewPengendalian', $data);
  }

  public function insert_dataPengendalian(){
    $this->model_pengendalian->insert_dataPengendalian();
    redirect("audite/pengendalian");
  }

  public function update_dataPengendalian(){
    $this->model_pengendalian->update_dataPengendalian();
    redirect("audite/pengendalian");
  }

  public function delete_dataPengendalian(){
    $this->model_pengendalian->delete_datapengendalian();
  }

  // public function downloadPengendalian($id){
	// 	$data = $this->db->get_where('data_pengendalian',['id'=>$id])->row();
	// 	force_download('dokumen/pengendalian/'.$data->nama_file,NULL);
	// }
  // Bagian Pengendalian

  // Bagian Peningkatan
  public function peningkatan(){
    $this->_temmplateTop();
    $this->load->view('audite/peningkatan');
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
            <button onclick="edit(`'.$peningkatan->id.'`,`'.$peningkatan->nama_pengaturan.'`)" class="btn btn-sm btn-primary pd-x-25" type="button" data-bs-toggle="modal" data-bs-target="#editData">Edit</button>
            <button onclick="review(`'.$peningkatan->id.'`,`'.$peningkatan->nama_pengaturan.'`)" class="btn btn-sm btn-info pd-x-25" type="button" data-bs-toggle="modal" data-bs-target="#reviewData">Review</button>
            <button onclick="hapus(`'.$peningkatan->id.'`,`'.$peningkatan->nama_pengaturan.'`)" class="btn btn-sm btn-danger pd-x-25" type="button">Hapus</button>
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

  public function viewAddDataPeningkatan(){
    $this->load->view('audite/view_formAddPeningkatan');
  }

  public function viewEditDataPeningkatan(){
    $data["data"]=$this->model_peningkatan->view_dataPeningkatan();
    $this->load->view('audite/view_formEditPeningkatan', $data);
  }

  public function viewReviewDataPeningkatan(){
    $data["data"]=$this->model_peningkatan->view_dataPeningkatan();
    $this->load->view('audite/view_formReviewPeningkatan', $data);
  }

  public function insert_dataPeningkatan(){
    $this->model_peningkatan->insert_dataPeningkatan();
    redirect("audite/peningkatan");
  }

  public function update_dataPeningkatan(){
    $this->model_peningkatan->update_dataPeningkatan();
    redirect("audite/peningkatan");
  }

  public function delete_dataPeningkatan(){
    $this->model_peningkatan->delete_dataPeningkatan();
  }
  // Bagian Peningkatan

}