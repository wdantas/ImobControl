<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of verificarlogin
 *
 * @author PC TRABALHO
 */
class VerificarLogin extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function verify(){
        if(!$this->session->userdata('admin_logged_in') == true):
            redirect(base_url('login'), 'refresh');
        endif;
    }
}
