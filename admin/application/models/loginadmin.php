<?php

class LoginAdmin extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function setLogin($login, $senha){
        $loginResult = $this->verificaLogin($login, $senha);
        $dataLogin = $loginResult->result_array();
        if($loginResult->num_rows() == 1):
            $sessionUser = array(
                'email' => $login,
                'nivel_acesso' => $dataLogin[0]['config_niveis_acesso_nivel_acesso'],
                'idcorretor' => $dataLogin[0]['corretor_idcorretor'],
                'admin_logged_in' => true 
            );
            $this->session->set_userdata($sessionUser);
            redirect(base_url('dashboard'), 'refresh');
        else:
            $this->session->sess_destroy();
            redirect(base_url('login'), 'refresh');
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
