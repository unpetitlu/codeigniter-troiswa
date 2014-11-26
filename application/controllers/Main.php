<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Main extends MY_Controller {

    public function index()
    {
        $this->render('Main/index');
    }

    public function view($page = 'home')
    {
        if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['title'] = ucfirst($page);

        $this->load->view('templates/header');
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer');
    }

    public function hello($firstname)
    {
        // chargement depuis un controller ou chargement global dans autoload
        $this->load->helper('url');

        $this->load->model('Article');
        $articles = $this->Article->findAll();

        
        $this->load->view('Main/test', compact('firstname', 'articles'));
        
    }

}