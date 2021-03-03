<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Ins_model');
		$this->load->helper(['url_helper', 'form']);
    	$this->load->library(['form_validation']);
		if($this->session->userdata('status') != "Admin"){
			redirect(base_url("Admin"));
		}
	}

	public function lihatdata()
	{
		$data['database'] = $this->Ins_model->get_all_data();

		$data['title'] = "Data Instansi";

		$this->load->view('templates/header', $data);
		$this->load->view('tampildata', $data);
		$this->load->view('templates/footer');
	}

	public function search()
	{
		$keyword = $this->input->post('keyword');
		$this->db->like('nama',$keyword);
		$data['instansi'] = $this->db->get('instansi')->result();

		$data['title'] = "Data Instansi";

		$this->load->view('templates/header', $data);
		$this->load->view('tampilsearch', $data);
		$this->load->view('templates/footer');
	}

	public function formtambah()
	{
		$data['title'] = "Tambah Data";

		$this->load->view('templates/header', $data);
		$this->load->view('formtambah');
		$this->load->view('templates/footer');
	}

	public function tambahdata()
	{
		$this->form_validation->set_rules('nama', 'Nama Instansi', ['required']);

		$this->validasi();

		if($this->form_validation->run() === FALSE)
		{
			$this->formtambah();
		}
		else
		{
			$this->Ins_model->tambah_data();
			$this->session->set_flashdata('input_sukses','Data instansi berhasil di input');
			redirect(current_url());
		}
	}

	public function hapusdata($id)
	{
		$this->Ins_model->hapus_data($id);
		$this->session->set_flashdata('hapus_sukses','Data instansi berhasil di hapus');
		redirect('/home/lihatdata');
	}

	public function formedit($id)
	{
		$data['title'] = 'Edit Data';

		$data['db'] = $this->Ins_model->edit_data($id);

		$this->load->view('templates/header', $data);
		$this->load->view('formedit', $data);
		$this->load->view('templates/footer');
	}

	public function updatedata($id)
	{
		$this->validasi();

		if($this->form_validation->run() === FALSE)
		{
			$this->formedit($id);
		}
		else
		{
			$this->Ins_model->update_data();
			$this->session->set_flashdata('update_sukses', 'Data instansi berhasil diperbaharui');
			redirect('/home/lihatdata');
		}
	}

	public function validasi()
	{
		$this->form_validation->set_message('required', '{field} tidak boleh kosong');

		$config = [[
					'field' => 'nama',
					'label' => 'Nama',
					'rules' => 'required'
				],
				[
					'field' => 'deskripsi',
					'label' => 'Deskripsi',
					'rules' => 'required'
				]];

		$this->form_validation->set_rules($config);
	}
}
?>