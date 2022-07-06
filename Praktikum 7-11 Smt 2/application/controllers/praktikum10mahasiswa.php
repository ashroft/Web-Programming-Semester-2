<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Praktikum10Mahasiswa extends CI_Controller {
	public function index()
	{
		$this->load->model('praktikum10mahasiswa_model', 'mahasiswa');
        $list_mahasiswa = $this->mahasiswa->getAll();

        $data['list_mahasiswa'] = $list_mahasiswa;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('praktikum10/mahasiswa',$data);
        $this->load->view('layout/footer');
	}

    public function view(){
        $_nim = $this->input->get('id');
        $this->load->model('praktikum10mahasiswa_model', 'mahasiswa');
        $data['mhs'] = $this->mahasiswa->findById($_nim);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('praktikum10/view_mahasiswa',$data);
        $this->load->view('layout/footer');
    }
}