<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Praktikum10Dosen extends CI_Controller {
	public function index()
	{
		$this->load->model('praktikum10dosen_model', 'dosen');
        $list_dosen = $this->dosen->getAll();

        $data['list_dosen'] = $list_dosen;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('praktikum10/dosen',$data);
        $this->load->view('layout/footer');
	}

    public function view(){
        $_nidn = $this->input->get('id');
        $this->load->model('praktikum10dosen_model', 'dosen');
        $data['dsn'] = $this->dosen->findById($_nidn);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('praktikum10/view_dosen',$data);
        $this->load->view('layout/footer');
    }
}