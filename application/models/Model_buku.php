<?php
/**
* 
*/
class Model_buku extends CI_Model
{
	
	public function get($id = null) {
		$this->db->select('*');
		$this->db->from('tb_buku');
		if ($id != null) {
			$this->db->where('kode_buku', $id);
		}
		$query = $this->db->get();
		return $query;
	}
	public function add($data) {
		$param = array(
			'nama_buku' => $data['nama_buku'],
			'pengarang' => $data['pengarang'],
			'tahun_terbit' => $data['tahun'],
		);
		//query insert
		$this->db->insert('tb_buku', $param);
	}
	public function edit($data) {
		$param = array(
			'nama_buku' => $data['nama_buku'],
			'pengarang' => $data['pengarang'],
			'tahun_terbit' => $data['tahun'],
		);
		//query update 
		$this->db->set($param);
		$this->db->where('kode_buku', $data['id']); //id didapatkan dari form hidden edit_buku
		$this->db->update('tb_buku');
	}
	public function del($id) {
		$this->db->where('kode_buku', $id);
		$this->db->delete('tb_buku');
	}
}
?>