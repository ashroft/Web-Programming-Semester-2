<?php

class model_daftar extends CI_Model{
    public function getAlldaftar(){
        $this->db->select('*');
        $this->db->from('siswa');
        $query = $this->db->get();
        return $query->result();
    }
}