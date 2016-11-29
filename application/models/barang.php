<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Model {

	public function display_all(){
		return $this->db->get('tbl_barang');
	}

	public function input_barang(){
		$data = array(
			'nama_barang' => $this->session->userdata('nama_barang'),
			'harga' => $this->session->userdata('harga'),
			'keterangan' => $this->session->userdata('keterangan')
			);
		$this->db->insert('tbl_barang',$data);
	}

	public function update_barang($id){
		$data = array(
			'nama_barang' =>$this->session->userdata('nama_barang'),
			'harga' => $this->session->userdata('harga'),
			'keterangan' => $this->session->userdata('keterangan')
			);
		$this->db->where('id_barang',$id);
		$this->db->update('tbl_barang',$data);
	}

	public function delete_barang($id){
		$this->db->where('id_barang',$id);
		$this->db->delete('tbl_barang');
	}

	public function for_image($id,$link){
		$this->db->where('id_barang',$id);
		$this->db->update('tbl_barang',$link);
	}



}

/* End of file barang.php */
/* Location: ./application/models/barang.php */