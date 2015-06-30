<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Imovel extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->VerificarLogin->verify();
    }
    
    public function index() {
        $this->Theme->header('Imóveis');
        $this->load->view('imovel/index');
        $this->Theme->footer();
        
    }
    public function editar() {
        $this->Theme->header('Editar Imóvel');
        $this->load->view('imovel/editar');
        $this->Theme->footer();
    }
    public function inserir($idImovel = null) {
        $this->Theme->header('Inserir Imóvel');
        $this->load->view('imovel/inserir');
        $this->Theme->footer();
    }
    public function buscar() {
        $this->Theme->header('Buscar Imóveis');
        $this->load->view('imovel/buscar');
        $this->Theme->footer();

    }
    

    
}
