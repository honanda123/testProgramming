<?php 

    class Auth extends CI_Controller{
        function __construct()
        {
            parent::__construct();
            $this->load->model('Model_Auth');

        }

        function login(){
            checklog();
            $this->load->view('auth/login');

        }

        function ceklogin(){

           $username = $this->input->post('username');
           $password = $this->input->post('password');

            // echo $username . "-" . $password;

            $login = $this->Model_Auth->getLogin($username, $password);
            $ceklogin = $login->num_rows();
            $datalogin = $login->row_array();
            // echo $datalogin['nama_lengkap'];

            $data = array(
                'id_user' => $datalogin['id_user'],
                'nama_lengkap' => $datalogin['nama_lengkap'],
                'no_hp' => $datalogin['no_hp'],
                'username' => $datalogin['username'],
                'password' => $datalogin['password'],
                'level' => $datalogin['level']
            );
            $this->session->set_userdata($data);
            // echo $this->session->userdata('no_hp');

            // die;
            if ($ceklogin == 1) {
                redirect('dashboard');
            }else{
                $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
                <!-- SVG icon code with class="mr-1" -->
                Username / Password Salah!
              </div>');
                
                redirect('auth/login');
            }

            // echo $ceklogin;
            
        }
        function logout(){
            
            // $this->session->sess_destroy();
            session_destroy();
            redirect('auth/login');
        }

    }
