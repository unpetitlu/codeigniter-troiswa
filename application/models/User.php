<?php
 
class User extends CI_Model
{
        
        public function userLogin($email,$mdp)
        {
            $query = $this->db->get_where('user', array('login' => $email, 'password' => hash('sha1', $mdp)), 1);
            return $query->row();
        }

        public function userLoginVerify($email,$mdp)
        {
            $query = $this->db->get_where('user', array('login' => $email, 'password' => $mdp), 1);
            return $query->row();
        }
        
}