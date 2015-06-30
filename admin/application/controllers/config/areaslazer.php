<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AreasLazer extends CI_Controller {
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->VerificarLogin->verify();
    }
    
    public function index($idRecurso = null){
        if($this->input->post()):
            $this->load->model('caracteristicas_imovel/mdlareaslazer','AreasLazer',TRUE);
            $this->AreasLazer->setAreasLazer($this->input->post());
        endif;
        
        
        $tabela['registros'] = $this->GetAll->registros('areas_comuns');
        $tabela['link'] = 'config/areaslazer/';
        $tabela['idRegistro'] = 'idareas_comuns';
        $tabela['headers'] = array('ID', 'Área', 'Slug', 'Filtro');
        
        $this->Theme->header();
        $this->load->view('config/areasLazer');
        $this->load->view('listaRegistrosTabela', $tabela);
        $this->Theme->footer();   
    }
}
