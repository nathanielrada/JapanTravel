<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require 'vendor/autoload.php';

class About_us extends CI_Controller
{

    public function __construct()
    {
            parent::__construct();
            $this->load->helper('template_helper');
    }

    public function index()
    {
        $this->load->view('about_us');
    }

}
