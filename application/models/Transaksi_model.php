<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi_Model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
}
