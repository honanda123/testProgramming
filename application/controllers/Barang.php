<?php

class Barang extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_barang');;
    }

    function index()
    {
        $data['barang'] = $this->Model_barang->getBarang()->result();
        $this->template->load('template/template', 'barang/v_barang', $data);
    }

    function inputbarang(){
        $this->load->view('Barang/v_tambah');
    }

    function simpanbarang()
    {
        $kode = $this->input->post('kode');
        $nama = $this->input->post('nama');
        $harga = $this->input->post('harga');

        $data = array(
          'kode' => $kode,
          'nama' => $nama,
          'harga' => $harga
        );

        $simpan = $this->Model_barang->insertBarang($data);
        if($simpan == 1){
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
                <!-- SVG icon code with class="mr-1" -->
                Data Berhasil Disimpan!
              </div>');
            redirect('barang');
        }else{
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
                <!-- SVG icon code with class="mr-1" -->
                Data Gagal Disimpan!
              </div>');
            redirect('barang');

        }


    }

    function editbarang()
    {
        $kode = $this->uri->segment(3);
        $data['barang'] = $this->Model_barang->getDataBarang($kode)->row_array();
        $this->load->view('barang/v_edit', $data);
        // echo "ini halaman edit". $kode;
    }

    function ubahbarang()
    {
        $kode = $this->input->post('kode');
        $nama = $this->input->post('nama');
        $harga = $this->input->post('harga');

        $data = array(
            'nama' => $nama,
            'harga' => $harga
        );

        $simpan = $this->Model_barang->updatebarang($data, $kode);
        if ($simpan == 1) {
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
                <!-- SVG icon code with class="mr-1" -->
                Data Berhasil Diubah!
              </div>');
            redirect('barang');
        } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
                <!-- SVG icon code with class="mr-1" -->
                Data Gagal Diubah!
              </div>');
            redirect('barang');
        }
    }

    function hapusbarang()
    {
        $kode = $this->uri->segment(3);
        $hapus = $this->Model_barang->deleteBarang($kode);
        if ($hapus == 1) {
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
                <!-- SVG icon code with class="mr-1" -->
                Data Berhasil Dihapus!
              </div>');
            redirect('barang');
        } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
                <!-- SVG icon code with class="mr-1" -->
                Data Gagal Dihapus!
              </div>');
            redirect('barang');
        }
    }
    


    
}
