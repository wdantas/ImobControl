<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function index(){
        $this->load->view('header');
        $this->load->view('login');
        $this->load->view('footer');
    }
    
    public function autenticar() {
        $login = filter_input_array(INPUT_POST);
        $this->load->model('LoginAdmin', '', TRUE);
        $this->LoginAdmin->setLogin($login['email'], $login['senha']);
    }
    
}
