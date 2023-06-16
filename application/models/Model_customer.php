<?php

class Model_customer extends CI_Model
{

    function getCustomer()
    {
        return $this->db->get('m_customer');
    }

    function insertCustomer($data)
    {
        $simpan = $this->db->insert('m_customer', $data);
        if ($simpan) {
            return 1;
        } else {
            return 0;
        }
    }

    function getDataCustomer($kode)
    {
        return $this->db->get_where('m_customer', array('kode' => $kode));
    }

    function updateCustomer($data, $kode)
    {
        $simpan = $this->db->update('m_customer', $data, array('kode' => $kode));
        if ($simpan) {
            return 1;
        } else {
            return 0;
        }
    }

    function deleteCustomer($kode)
    {
        $hapus = $this->db->delete('m_customer', array('kode' => $kode));
        if ($hapus) {
            return 1;
        } else {
            return 0;
        }
    }

    

}
