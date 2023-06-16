<?php

class Model_penjualan extends CI_Model
{

    function getLastKode()
    {
        $this->db->select('kode');
        $this->db->from('t_sales');
        

    }
}
