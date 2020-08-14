<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller 
{
    public function index(){

        $data['tb_karyawan'] = $this->db->get_where('tb_karyawan', ['email' => 
        $this->session->userdata('email')]) -> row_array();
        $data['title'] = 'Dashboard';
        $this->load->view('templates/main_header', $data);
        $this->load->view('main/main');
        $this->load->view('templates/main_footer', $data);
    }
    public function charts(){
        $data['tb_karyawan'] = $this->db->get_where('tb_karyawan', ['email' => 
        $this->session->userdata('email')]) -> row_array();
        $data['title'] = 'Charts';
        $this->load->view('templates/main_header', $data);
        $this->load->view('main/charts');
        $this->load->view('templates/main_footer', $data);
    }

    public function tables(){
        $data['tb_karyawan'] = $this->db->get_where('tb_karyawan', ['email' => 
        $this->session->userdata('email')]) -> row_array();
        $data['title'] = 'Tables';
        $this->load->view('templates/main_header', $data);
        $this->load->view('main/tables');
        $this->load->view('templates/main_footer', $data);
    }

    public function profile(){
        $data['tb_karyawan'] = $this->db->get_where('tb_karyawan', ['email' => 
        $this->session->userdata('email')]) -> row_array();
        $data['title'] = 'Profile';
        $this->load->view('templates/main_header', $data);
        $this->load->view('main/profile');
        $this->load->view('templates/main_footer', $data);
    }
}