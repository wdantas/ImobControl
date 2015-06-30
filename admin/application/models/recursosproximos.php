<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class RecursosProximos extends CI_Model{
     public function __construct() {
        parent::__construct();
    }
    
       
    public function setRecursosProximos($dataRecursos){
	if(!empty($dataRecursos) || 
	!$this->VerificaExistencia->duplicado('recursos_proximos','slug',$dataRecursos['slug'])):
	    $this->db->insert($dataRecursos, 'recursos_proximos');
	else:
	    return 0; 
	endif;
    }
    
    public function getRecursosProximos($idRecurso = null){
    	if($idRecurso == null):
    	    $result = $this->db->get('recursos_proximos');
    	    return $result->result_array();
    	else:
    	    $this->db->where('idrecursos_proximos_proximos', $idRecurso);
    	    $this->db->from('recursos_proximos');
    	    $result = $this->db->get();
    	    return $result->result_array();
    	endif;
    }

    public function updateRecursosProximos($idRecurso, $data){
        $this->db->where('idrecursos_proximos_proximos', $idRecurso);
        $this->db->update('recursos_proximos', $data);
    }    
    

    
}