<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dosen extends CI_Controller {
    
    public function index() {
        $this->load->model('dosen_model', 'dsn1');
        $this->dsn1->nidn = '0110121119';
        $this->dsn1->nama = 'Ashrof';
        $this->dsn1->gender = 'L';
        $this->dsn1->tmp_lahir = 'Jakarta';
        $this->dsn1->tgl_lahir = '08-02-2003';
        $this->dsn1->matkul = 'Pemrograman Web';
        $this->dsn1->pendidikan = 'S3';
        $this->dsn1->semester = '2';
        $this->dsn1->hari = 'Rabu';
        $this->dsn1->ruangan = '02';


        $this->load->model('dosen_model', 'dsn2');
        $this->dsn2->nidn = '0110121212';
        $this->dsn2->nama = 'Ahmad';
        $this->dsn2->gender = 'L';
        $this->dsn2->tmp_lahir = 'Depok';
        $this->dsn2->tgl_lahir = '02-02-2002';
        $this->dsn2->matkul = 'Basis Data';
        $this->dsn2->pendidikan = 'S2';
        $this->dsn2->semester = '5';
        $this->dsn2->hari = 'Senin';
        $this->dsn2->ruangan = '04';


        $this->load->model('dosen_model', 'dsn3');
        $this->dsn3->nidn = '0110121111';
        $this->dsn3->nama = 'Dewi';
        $this->dsn3->gender = 'P';
        $this->dsn3->tmp_lahir = 'Bogor';
        $this->dsn3->tgl_lahir = '02-02-2001';
        $this->dsn3->matkul = 'Matematika Komputer';
        $this->dsn3->pendidikan = 'S3';
        $this->dsn3->semester = '4';
        $this->dsn3->hari = 'Selasa';
        $this->dsn3->ruangan = '08';

        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
        $data['list_dsn'] = $list_dsn;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/index', $data);
        $this->load->view('layout/footer');
    }
}