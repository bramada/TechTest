<?php

class Ins_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_all_data()
	{
		$query = $this->db->get('instansi');
		return $query->result();
	}

	public function tambah_data()
	{
		$data = [
					'nama' => $this->input->post('nama'),
					'deskripsi' => $this->input->post('deskripsi')
				];

		$this->db->insert('instansi', $data);
	}

	public function edit_data($id)
	{
		$query = $this->db->get_where('instansi', ['ID' => $id]);
		return $query->row();
	}

	public function update_data()
	{
		$kondisi = ['ID' => $this->input->post('id')];
		
		$data = [
					'nama' => $this->input->post('nama'),
					'deskripsi' => $this->input->post('deskripsi')
				];

		$this->db->update('instansi', $data, $kondisi);
	}

	public function hapus_data($id)
	{
		$this->db->delete('instansi', ['ID' => $id]);
	}
}

?>