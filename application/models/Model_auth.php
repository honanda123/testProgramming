<?php 

    class Model_auth extends CI_Model{

      function getLogin($username, $password){
        return $this->db->get_where('user', array('username' => $username, 'password' => $password));

      }

    }