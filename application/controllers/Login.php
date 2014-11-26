<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller
{
    
    public function index()
    {
        $this->load->library('form_validation');
        $this->load->driver('session');
        
        $this->form_validation->set_rules('email', '"Identifiant"', 'trim|required');
        $this->form_validation->set_rules('mdp', '"Mot de passe"', 'trim|required');
        
        if($this->form_validation->run() == true)
        {
            //Récupérer les données saisies envoyées en POST
            $email = $this->input->post('email');
            $mdp = $this->input->post('mdp');
            $this->load->model('User');
            $user = $this->User->userLogin($email,$mdp);
            if (!$user)
            {
                $this->session->set_flashdata('noconnect', 'Aucun compte ne correspond à vos identifiants ');
                redirect('/login');
            }
            else
            {
                $this->session->set_userdata('user', ['email' => $email, 'mdp' => hash('sha1', $mdp)]);
                redirect('/');
            }
            die();
            $this->load->view('admin');
        }

        $this->load->helper('form');
        $this->render('Login/index');
    }
        
}