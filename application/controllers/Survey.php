<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Survey extends CI_Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    //     is_log_in();
    // }


    public function hukum()
    {
        $data['title'] = 'Layanan Bidang Hukum dan Kerjasama';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['jawaban'] = $this->db->get('t_survei')->result_array();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('survey/hukum', $data);
        $this->load->view('templates/user_footer');
    }
}
