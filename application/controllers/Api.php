<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Api extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Memuat model jika diperlukan, misalnya untuk data pengguna
        $this->load->model('anggota_model');
    }

    public function index()
    {
        //  conoth endpoint
        $response = [
            'status' => 'success',
            'message' => 'Selamat datang'
        ];
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

    public function getUser($nim)
    {
        // Contoh endpoint untuk mendapatkan data pengguna
        $data_anggota = $this->anggota_model->get_data_anggota($id);

        if ($user) {
            $response = [
                'status' => 'success',
                'data' => $data_anggota
            ];
        } else {
            $response = [
                'status' => 'error',
                'message' => 'Pengguna tidak ditemukan.'
            ];
        }

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }
}
