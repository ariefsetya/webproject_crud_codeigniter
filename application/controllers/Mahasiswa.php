<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('crud_model');
	}

	public function tambah()
	{
		$this->load->view('header');
		$this->load->view('mahasiswa/tambah');
		$this->load->view('header');
	}
	public function simpan()
	{
		$post = $this->input->post();

		$data['npm'] = $post['npm'];
		$data['nama'] = $post['nama'];
		$data['kelas'] = $post['kelas'];

		$result = $this->crud_model->insert_data('mahasiswa',$data);

		if($result>0){
			redirect(base_url("mahasiswa"));
		}else{
			redirect(base_url("mahasiswa/tambah"));
		}
	}
	public function index()
	{
		$data['mahasiswa'] = $this->crud_model->view_data('mahasiswa',array());
		
		$this->load->view('header');
		$this->load->view('mahasiswa/index',$data);
		$this->load->view('header');
	}

	public function edit($id)
	{
		$data['mahasiswa'] = $this->crud_model->view_data_one('mahasiswa',array('id'=>$id));

		$this->load->view('header');
		$this->load->view('mahasiswa/edit',$data);
		$this->load->view('header');
	}

	public function update()
	{
		$post = $this->input->post();

		$id = $post['id'];

		$data['npm'] = $post['npm'];
		$data['nama'] = $post['nama'];
		$data['kelas'] = $post['kelas'];

		$result = $this->crud_model->update_data('mahasiswa',$data,array('id'=>$id));

		if($result>0){
			redirect(base_url("mahasiswa"));
		}else{
			redirect(base_url("mahasiswa/edit/".$id));
		}
	}


	public function delete($id)
	{
		$result = $this->crud_model->delete_data('mahasiswa',array('id'=>$id));

		redirect(base_url("mahasiswa"));
	}
}
