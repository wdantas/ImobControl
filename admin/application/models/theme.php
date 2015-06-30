<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Theme extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function header($titulo = null){
        $data['titulo'] = ($titulo == null)? 'Gerenciador Imobiliario' : $titulo.' - Gerenciador Imobiliario';
        $this->load->view('header', $data);
        $this->load->view('header_menu');
    }
    public function footer(){
        $this->load->view('footer_content');
        $this->load->view('footer');
    }
}
