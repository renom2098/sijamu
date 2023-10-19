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
            $row[] = '<div aria-label="Basic example" class="btn-groupss" role="group">
            <button onclick="edit(`'.$peraturan->id.'`,`'.$peraturan->nama_peraturan.'`)" class="btn btn-sm btn-primary pd-x-25" type="button" data-bs-toggle="modal" data-bs-target="#editData">Edit</button> 
            <button onclick="hapus(`'.$peraturan->id.'`,`'.$peraturan->nama_peraturan.'`)" class="btn btn-sm btn-danger pd-x-25" type="button">Hapus</button>
            <button onclick="download(`'.$peraturan->id.'`)" class="btn btn-sm btn-secondary pd-x-25" type="button">Download</button>
            </div>';
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
  public function viewEditDataPenetapan(){
    $data["data"]=$this->mdl->view_dataPenetapan();
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
				echo "eror!"; // lebih indahkan
		}
		else
		{
			$nama_file = $this->upload->data("file_name");
			$this->mdl->insert_dataPenetapan($nama_file);
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
				$nama_file = $this->upload->data("file_name");
        $this->mdl->update_dataPenetapan($nama_file);
        redirect("admin/penetapan");
		}
		else
		{
			$nama_file = $this->upload->data("file_name");
      $this->mdl->update_dataPenetapan($nama_file);
      redirect("admin/penetapan");
		}
      
  }

  public function delete_dataPenetapan(){
      $this->mdl->delete_dataPenetapan();
  }

  public function downloadPenetapan($id){
		$data = $this->db->get_where('data_penetapan',['id'=>$id])->row();
		force_download('dokumen/penetapan/'.$data->nama_file,NULL);
	}

}