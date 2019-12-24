<?php

class Mahasiswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Mahasiswa_model');

	}

	public function index()
	{
		$data['mahasiswa'] = $this->db->get('mahasiswa')->result_array();

		$this->load->view('templates/header');
		$this->load->view('mahasiswa', $data);
		$this->load->view('templates/footer');
	}

	//FUNGSI CRUD MODAL TAMBAH

	public function tambah()
	{
			$data = [
				"nama" => $this->input->post('nama'),
				"nrp" => $this->input->post('nrp'),
				"email" => $this->input->post('email'),
				"jurusan" => $this->input->post('jurusan')
			];

			$this->db->insert('mahasiswa', $data);

			$this->session->set_flashdata('flash', 'Data Berhasil Ditambah');

			redirect('mahasiswa');

	}

	// FUNGSI YANG DI KOMENTARI DI BAWAH JIKA KAMU INGIN MENJALANKAN FUNGSI CRUD (TAMBAH) TANPA MENGGUNAKAN MODAL

	// public function tambah()
	// {
	// 	$this->form_validation->set_rules('nama', 'Nama', 'required');
	// 	$this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
	// 	$this->form_validation->set_rules('email', 'Email', 'required');
	// 	$this->form_validation->set_rules('jurusan', 'Jurusan', 'required');

	// 	if ($this->form_validation->run() == false) {
	// 		$this->load->view('templates/header');
	// 		$this->load->view('tmb_mahasiswa');
	// 		$this->load->view('templates/footer');
	// 	} else {

	// 		$data = [
	// 			"nama" => $this->input->post('nama'),
	// 			"nrp" => $this->input->post('nrp'),
	// 			"email" => $this->input->post('email'),
	// 			"jurusan" => $this->input->post('jurusan')
	// 		];

	// 		$this->db->insert('mahasiswa', $data);

	// 		$this->session->set_flashdata('flash', 'Data Berhasil Ditambah');

	// 		redirect('mahasiswa');

	// 	}
	// }

	public function getdata($id)
	{
		$data = $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
		echo json_encode($data);

		// var_dump($data); die(); 
	}


	public function edit()
	{

			$data = [
				"nama" => $this->input->post('nama'),
				"nrp" => $this->input->post('nrp'),
				"email" => $this->input->post('email'),
				"jurusan" => $this->input->post('jurusan')	
			];

			$this->db->where('id', $this->input->post('id'));
			$this->db->update('mahasiswa', $data);

			$this->session->set_flashdata('flash', 'Data Berhasil Diubah');
			redirect('mahasiswa');
		


	}

	// FUNGSI YANG DI KOMENTARI DI BAWAH JIKA KAMU INGIN MENJALANKAN FUNGSI CRUD (EDIT) TANPA MENGGUNAKAN MODAL

	// public function edit($id)
	// {
	// 	$data['mahasiswa'] =  $this->db->get_where('mahasiswa', ['id' => $id])->row_array();

	// 	$this->form_validation->set_rules('nama', 'Nama', 'required');
	// 	$this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
	// 	$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	// 	$this->form_validation->set_rules('jurusan', 'Jurusan', 'required');

	// 	if ($this->form_validation->run() == false) {

	// 		$this->load->view('templates/header');
	// 		$this->load->view('edit_mahasiswa', $data);
	// 		$this->load->view('templates/footer');

	// 	} else {

	// 		$data = [
	// 			"nama" => $this->input->post('nama'),
	// 			"nrp" => $this->input->post('nrp'),
	// 			"email" => $this->input->post('email'),
	// 			"jurusan" => $this->input->post('jurusan')	
	// 		];

	// 		$this->db->where('id', $this->input->post('id'));
	// 		$this->db->update('mahasiswa', $data);

	// 		$this->session->set_flashdata('flash', 'Data Berhasil Diubah');
	// 		redirect('mahasiswa');
	// 	}


	// }

	public function hapus($id)
	{
		$this->db->delete('mahasiswa', ['id' => $id]);
		$this->session->set_flashdata('flash', 'Berhasil di hapus!');
        redirect('mahasiswa');
	}

}