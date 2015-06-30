<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comodos extends CI_Controller {
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->VerificarLogin->verify();
    }
    
    public function index($idRecurso = null){
        if($this->input->post()):
            $this->load->model('caracteristicas_imovel/mdlcomodos','Comodos',TRUE);
            $this->Comodos->setComodos($this->input->post());
        endif;
        
        
        $tabela['registros'] = $this->GetAll->registros('comodos');
        $tabela['link'] = 'config/comodos/';
        $tabela['idRegistro'] = 'idcomodos';
        $tabela['headers'] = array('ID', 'Cômodo', 'Slug', 'Filtro');
        
        $this->Theme->header();
        $this->load->view('config/comodos');
        $this->load->view('listaRegistrosTabela', $tabela);
        $this->Theme->footer();   
    }
}
