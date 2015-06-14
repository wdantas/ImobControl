<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {
    
    public function index(){
        $this->load->view('header');
        $this->load->view('login');
        $this->load->view('footer');
    }
    
}
