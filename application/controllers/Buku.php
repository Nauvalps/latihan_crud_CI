<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('model_buku');
	}
	public function index() {	
		$sql = $this->model_buku->get();
		$data = $sql->result();
		$data['header'] = 'Tampil Data Buku';
		$data['buku'] = $sql->result();
		$this->load->view('_header', $data);
		$this->load->view('tampil_buku', $data);
		$this->load->view('_footer');
	}
	public function add() {
		$data['header'] = 'Tambah Data Buku';
		$this->load->view('_header', $data);
		$this->load->view('tambah_buku', $data);
		$this->load->view('_footer');
	}

	public function edit($id = null) {
		$query = $this->model_buku->get($id);
		$data['header'] = 'Edit Data Buku';
		$data['buku'] = $query->row();
		$this->load->view('_header', $data);
		$this->load->view('edit_buku', $data);
		$this->load->view('_footer');	
	}

	public function proses() {
		if (isset($_POST['add'])) {
			$inputan = $this->input->post(null, TRUE);
			$this->model_buku->add( $inputan);
		}else if (isset($_POST['edit'])) {
			$inputan = $this->input->post(null, TRUE);
			$this->model_buku->edit($inputan);
		}
		redirect('buku');
	}

	public function del($id = null) {
		$this->model_buku->del($id);
		redirect('buku');
	}
}
