<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Praktikum10Matkul extends CI_Controller {
	public function index()
	{
		$this->load->model('praktikum10matkul_model', 'prodi');
        $list_prodi = $this->prodi->getAll();

        $data['list_prodi'] = $list_prodi;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('praktikum10/matakuliah',$data);
        $this->load->view('layout/footer');
	}
}