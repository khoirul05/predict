<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->library('form_validation'); 
    }
        public function index()
        {   
            

            $data['title'] = 'Home Page';
            $this->load->view('templates/main_header', $data);
            $this->load->view('auth/home');
          
        }
        public function login(){

            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]', 
            [
                'min_length' => 'Password too short'
            ]); 

            if($this->form_validation->run() == false){

                $data['title'] = 'Sign In';
                $this->load->view('templates/main_header', $data);
                $this->load->view('auth/login');
            }
            else {
               $this->_login();
            }
        }

        private function _login()
        {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
    
            $tb_karyawan= $this->db->get_where('tb_karyawan', ['email'=> $email])->row_array();

           // user ada

            if($tb_karyawan != null) {

                if($tb_karyawan ['is_active'] == 1){

                    if(password_verify($password, $tb_karyawan['password'])){
                         $data = ['email' => $tb_karyawan['email'],
                        ];

                         $this->session->set_userdata($data);
                        redirect('main');

                    } else {
                         $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                       Password salah!</div>');
                           redirect('auth/login');
                }
              } else {
               $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                 Pengguna tidak aktif </div>');
                  redirect('auth/login');
               }
    
            } else {
                  $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                   Pengguna belum terdaftar </div>');
                  redirect('auth/login');
               }
        }

        public function register(){

        $this->form_validation->set_rules('name', 'Name', 'required'); 
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tb_karyawan.email]', 
        ['is_unique' => 'Email has been registered']);
        $this->form_validation->set_rules('password', 'Password', 
        'required|min_length[6]|matches[password1]', [
            'matches' => 'Password doesnt matches',
            'min_length' => 'Password too short']); 
        $this->form_validation->set_rules('password1', 'Password', 
        'required|matches[password]'); 
    
        if ($this->form_validation->run() == false){
            $data['title'] = 'Registrasi';
            $this->load->view('templates/main_header', $data);
            $this->load->view('auth/register');
            
        } else {
          $data = [
              'name' => htmlspecialchars($this ->input->post('name', true)),
              'email' => htmlspecialchars($this ->input->post('email', true)),
              //'password' => htmlspecialchars($this ->input->post('password', true)),
              'password' => password_hash($this ->input->post('password'), PASSWORD_DEFAULT),
              'profile_image' => 'default.jpg',
               'is_active' => 1,
               'date' => time()
            ];
          $this->db->insert('tb_karyawan', $data);
          $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
           Akun anda berhasil didaftarkan!</div>');
          redirect('auth/login');
        }
     }
}
