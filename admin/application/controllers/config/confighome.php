<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ConfigHome extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->VerificarLogin->verify();
    }
    
    public function index(){
        $this->Theme->header();
        $this->load->view('config/index');
        $this->Theme->footer();
    } 
}
