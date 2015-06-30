<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RecursosProximos extends CI_Controller {
    //put your code here
    public function __construct() { 
        parent::__construct();
        $this->VerificarLogin->verify();
    }
    
    public function index($idRecurso = null){
        if($this->input->post()):
            $this->load->model('caracteristicas_imovel/mdlrecursosproximos','RecursosProximos',TRUE);
            $this->RecursosProximos->setRecursosProximos($this->input->post());
        endif;
        
        
        $tabela['registros'] = $this->GetAll->registros('recursos_proximos');
        $tabela['link'] = 'config/recursosproximos/';
        $tabela['idRegistro'] = 'idrecursos_proximos_proximos';
        $tabela['headers'] = array('ID', 'Recurso', 'Slug', 'Filtro');
        
        $this->Theme->header();
        $this->load->view('config/recursosProximos');
        $this->load->view('listaRegistrosTabela', $tabela);
        $this->Theme->footer();   
    }
}
