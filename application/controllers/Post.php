<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');


class Post extends MY_Controller {

    public function show($id)
    {
        $this->load->model('Article');
        $article = $this->Article->findById($id);

        if (!$article)
        {
            show_404();
        }

        $this->render('Post/index', compact('article'));
    }

    public function add()
    {
        $this->load->library('logged');
        $this->load->driver('session');
        $user = $this->session->userdata('user');
        if (!$this->logged->verify($user))
        {
            redirect('/login');
        }


        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2000';
        $config['max_width'] = '100';
        $config['max_height'] = '4000';

        $this->load->library('upload', $config);

        // Alternately you can set preferences by calling the initialize function. Useful if you auto-load the class:
       //  $this->upload->initialize($config);

        $this->load->library('form_validation');
        $this->load->driver('session');
        //$this->form_validation->set_message('min_length', 'Le champ %s doit contenir au moins %s caract&egrave;res.');

        $this->form_validation->set_rules('titre', 'Titre', 'required|min_length[5]');
        $this->form_validation->set_rules('description', 'Contenu', 'required');

        if ($this->form_validation->run() == TRUE)
        {
            //if ($this->upload->do_upload('image'))
            //{
                
                $data= [
                    'titre' =>  $this->input->post("titre"),
                    'description' =>  $this->input->post("description"),
                ];


                $message_insert = '<div class="alert alert-info" role="alert">Votre article a bien été créé !</div>';
                $this->session->set_flashdata ('success_insert_article', $message_insert);

                $this->Article->ajouter($data);
                redirect('/post/add');
            //}
        }

        $this->load->helper('form');
        $this->render('Post/add');
    }
}