<?php

class Customer extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_customer');;
    }

    function index()
    {
        $data['customer'] = $this->Model_customer->getCustomer()->result();
        $this->template->load('template/template', 'customer/v_customer', $data);
    }
    function inputcustomer()
    {
        $this->load->view('customer/v_tambah');
    }

    function simpancustomer()
    {
        $kode = $this->input->post('kode');
        $name = $this->input->post('name');
        $telp = $this->input->post('telp');

        $data = array(
            'kode' => $kode,
            'name' => $name,
            'telp' => $telp
        );

        $simpan = $this->Model_customer->insertCustomer($data);
        if ($simpan == 1) {
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
                <!-- SVG icon code with class="mr-1" -->
                Data Berhasil Disimpan!
              </div>');
            redirect('customer');
        } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
                <!-- SVG icon code with class="mr-1" -->
                Data Gagal Disimpan!
              </div>');
            redirect('customer');
        }
    }

    function editcustomer()
    {
        $kode = $this->uri->segment(3);
        $data['customer'] = $this->Model_customer->getDataCustomer($kode)->row_array();
        $this->load->view('customer/v_edit', $data);
        // echo "ini halaman edit";
    }

    function ubahcustomer()
    {
        $kode = $this->input->post('kode');
        $name = $this->input->post('name');
        $telp = $this->input->post('telp');

        $data = array(
            'name' => $name,
            'telp' => $telp
        );

        $simpan = $this->Model_customer->updateCustomer($data, $kode);
        if ($simpan == 1) {
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
                <!-- SVG icon code with class="mr-1" -->
                Data Berhasil Diubah!
              </div>');
            redirect('customer');
        } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
                <!-- SVG icon code with class="mr-1" -->
                Data Gagal Diubah!
              </div>');
            redirect('customer');
        }
    }

    function hapuscustomer()
    {
        $kode = $this->uri->segment(3);
        $hapus = $this->Model_customer->deleteCustomer($kode);
        if ($hapus == 1) {
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
                <!-- SVG icon code with class="mr-1" -->
                Data Berhasil Dihapus!
              </div>');
            redirect('customer');
        } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
                <!-- SVG icon code with class="mr-1" -->
                Data Gagal Dihapus!
              </div>');
            redirect('customer');
        }
    }

    
}
