<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Humas extends CI_Controller {

	public function __construct(){
	  parent::__construct();
	  
	  $this->load->model('SiswaModel'); // Load SiswaModel ke controller ini
	  $this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('user_km', ['email' =>
		$this->session->userdata('email')])->row_array();
		$data['siswa'] = $this->SiswaModel->view();

		$this->load->view('templates/header', $data);
		$this->load->view('xiirpl2/humas', $data);
		$this->load->view('templates/footer');
	}

	public function tambah(){
	  if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
	    if($this->SiswaModel->validation("savehumas")){ // Jika validasi sukses atau hasil validasi adalah TRUE
	      $this->SiswaModel->savehumas(); // Panggil fungsi save() yang ada di SiswaModel.php
	      redirect('humas');
	    }
	  }
	  
	  $this->load->view('siswa/form_tambah');
	}
	
	public function ubah($nis){
	  if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
	    if($this->SiswaModel->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
	      $this->SiswaModel->edit($nis); // Panggil fungsi edit() yang ada di SiswaModel.php
	      redirect('siswa');
	    }
	  }
	  
	  $data['user'] = $this->db->get_where('user_km', ['email' =>
	  $this->session->userdata('email')])->row_array();
	  $data['siswa'] = $this->SiswaModel->view_by($nis);
	  $this->load->view('templates/header', $data);
	  $this->load->view('siswa/ubah_humas', $data);
	  $this->load->view('templates/footer');
	}
	
	public function hapus($nis){
	  $this->SiswaModel->delete($nis); // Panggil fungsi delete() yang ada di SiswaModel.php
	  redirect('siswa');
	}

	public function aksi_upload(){
	  $config['upload_path']          = './gambar/';
	  $config['allowed_types']        = 'gif|jpg|png';
	  $config['max_size']             = 100;
	  $config['max_width']            = 1024;
	  $config['max_height']           = 768;

	  $this->load->library('upload', $config);

	  if ( ! $this->upload->do_upload('berkas')) {
	    $error = array('error' => $this->upload->display_errors());
	    $this->load->view('v_upload', $error);
	  } else {
	    $data = array('upload_data' => $this->upload->data());
	    $this->load->view('siswa/form_ubah.php', $data);
	  }
	}

}

/* End of file Humas.php */
/* Location: ./application/controllers/Humas.php */