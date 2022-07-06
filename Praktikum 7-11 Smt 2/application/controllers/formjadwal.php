<?php
defined('BASEPATH') or exit('No direct script access allowed');
class FormJadwal extends CI_Controller {

    public function index()
    {
        $this->load->model('matakuliah_model', 'mk1');
        $this->mk1->kode = '1131';
        $this->mk1->nama = 'Pemrograman Website';
        $this->mk1->semester = '3';
        $this->mk1->matkul = 'PEMWEB';
        $this->mk1->sks = '3';
        $this->mk1->dosen = 'Ashrof';
        $this->mk1->hari = 'Rabu';
        $this->mk1->ruangan = '02';


        $this->load->model('matakuliah_model', 'mk2');
        $this->mk2->kode = '1231';
        $this->mk2->nama = 'Matematika Komputer';
        $this->mk2->semester = '4';
        $this->mk2->matkul = 'MATKOM';
        $this->mk2->sks = '3';
        $this->mk2->dosen = 'Dewi';
        $this->mk2->hari = 'Selasa';
        $this->mk2->ruangan = '08';


        $this->load->model('matakuliah_model', 'mk3');
        $this->mk3->kode = '1331';
        $this->mk3->nama = 'Basis Data';
        $this->mk3->semester = '5';
        $this->mk3->matkul = 'BASDAT';
        $this->mk3->sks = '4';
        $this->mk3->dosen = 'Ahmad';
        $this->mk3->hari = 'Senin';
        $this->mk3->ruangan = '04';

        $list_mk = [$this->mk1, $this->mk2, $this->mk3];
        $data['list_mk'] = $list_mk;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('praktikum7/formjadwal', $data);
        $this->load->view('layout/footer');
    }
}