<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
   
    public function __construct() {
        parent::__construct();
    }

    public function render($page, $data = [])
    {
        $this->load->view('partials/header');
        $this->load->view($page, $data);
        $this->load->view('partials/footer');
    }

}