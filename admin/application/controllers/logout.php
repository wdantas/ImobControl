<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of logout
 *
 * @author PC TRABALHO
 */
class Logout extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->session->sess_destroy();
        redirect(base_url('login'), 'refresh');
    }
    
}
