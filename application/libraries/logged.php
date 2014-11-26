<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Logged {

    public function verify($user)
    {
        if ($user)
        {
            $CI =& get_instance();
            $CI->load->model('User');
            if ($CI->User->userLoginVerify($user['email'], $user['mdp']))
            {
                return true;
            }
        }

        return false;
    }
}