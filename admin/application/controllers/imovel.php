<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Imovel extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->VerificarLogin->verify();
    }
    
    public function index() {
        $this->load->view('header');
        $this->load->view('header_menu');
        $this->load->view('imovel/index');
        $this->load->view('footer');
    }
    public function editar() {
        $this->load->view('header');
        $this->load->view('header_menu');
        $this->load->view('imovel/editar');
        $this->load->view('footer');
    }
    public function inserir($idImovel = null) {
        $this->load->view('header');
        $this->load->view('header_menu');
        $this->load->view('imovel/inserir');
        $this->load->view('footer');
    }
    public function buscar() {
        $this->load->view('header');
        $this->load->view('header_menu');
        $this->load->view('imovel/buscar');
        $this->load->view('footer');
    }
    
}
