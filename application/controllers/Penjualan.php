<?php

class Penjualan extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('Model_customer');
        $this->load->model('Model_barang');

    }

    function index()
    {
        $this->template->load('template/template', 'penjualan/v_penjualan');
    }

    function inputpenjualan()
    {
        $data['customer'] = $this->Model_customer->getCustomer()->result();
        $data['barang'] = $this->Model_barang->getBarang()->result();


        $this->template->load('template/template', 'penjualan/v_tambah', $data);
    }

    function cekBarang(){

    }
}
