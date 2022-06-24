<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Frontpage extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Kementerian Komunikasi dan Informatika';
        $this->load->view('frontpage', $data);
    }
}
