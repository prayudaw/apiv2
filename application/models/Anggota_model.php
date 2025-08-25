<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota_Model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_data_anggota($nim)
    {
        $this->db->where('no_mhs', $nim);
        $query = $this->db->get('anggota'); // Get data anggota
        return $query->row();
    }
}
