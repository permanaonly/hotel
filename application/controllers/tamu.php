<?php
defined('BASEPATH') or exit('No direct script access allowed');

class tamu extends CI_Controller
{
    public function index()
    {
        $this->load->view('tamu/home');
    }
}
