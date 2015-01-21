<?php

class Article extends CI_Model {

    
    public function findAll()
    {
        /*
        $query= $this->db->query("SELECT * FROM article");

        return $query->result();
        */
        $query = $this->db->get('article');
        return $query->result(get_class($this));
    }

    public function findById($id)
    {
        $query = $this->db->get_where('article', array('id' => (int)$id));
        return $query->row();
    }

    public function ajouter($data)
    {
        $this->db->insert("article", $data);
    }


    public function otherFunction()
    {
        return "other function";
    }

}