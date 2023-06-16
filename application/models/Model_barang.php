<?php

class Model_barang extends CI_Model
{

    function getBarang()
    {
        return $this->db->get('m_barang');
    }

    function insertBarang($data){
        $simpan = $this->db->insert('m_barang', $data);
        if ($simpan) {
            return 1;
        }else{
            return 0;
        }
    }

    function getDataBarang($kode)
    {
        return $this->db->get_where('m_barang', array('kode' => $kode));
    }

    function updatebarang($data, $kode)
    {
        $simpan = $this->db->update('m_barang', $data, array('kode' => $kode));
        if ($simpan) {
            return 1;
        } else {
            return 0;
        }
    }

    function deleteBarang($kode)
    {
        $hapus = $this->db->delete('m_barang', array('kode' => $kode));
        if ($hapus) {
            return 1;
        } else {
            return 0;
        }
    }
    
}
