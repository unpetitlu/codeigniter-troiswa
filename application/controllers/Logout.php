<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends MY_Controller
{
    
    public function index()
    {
        $this->load->driver('session');
        $this->session->sess_destroy();
        redirect('/');
    }
        
}