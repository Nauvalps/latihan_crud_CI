<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('model_buku');
	}
	public function index()
	{	
		$sql = $this->model_buku->get();
		$data1 = $sql->result();
		$data1['buku'] = $sql->result();
		$data = array(
			'header' => 'Halaman Utama',
			'isi' => "Selamat Datang di halaman utama"
			);
		$this->load->view('_header', $data);
		$this->load->view('home');
		$this->load->view('tampil_buku_client', $data1);
		$this->load->view('_footer');
	}
}
