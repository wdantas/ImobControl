<?php

class LoginAdmin extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function setLogin($login, $senha){
        if($this->verificaLogin($login, $senha)->num_rows() == 1):
            $sessionUser = array(
                'email' => $login,
                'admin_logged_in' => true 
            );
            $this->session->set_userdata($sessionUser);
            redirect(base_url('dashboard'), 'refresh');
        else:
            return false;
            //$this->session->sess_destroy();
        endif;
        
    }
    
    private function verificaLogin($login, $senha){
        $this->db->where('email', $login);
        $this->db->where('senha', md5($senha));
        $this->db->from('corretor_login');
        $resultado = $this->db->get();
        
        return $resultado;
    }
      
}
