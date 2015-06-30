<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class MdlRecursosProximos extends CI_Model{
     public function __construct() {
        parent::__construct();
    }
    
       
    public function setRecursosProximos($dataRecursos){
	if(!empty($dataRecursos) || !$this->verificaExistencia->duplicado('recursos_proximos','slug',$dataRecursos['slug'])):
	    $this->db->insert('recursos_proximos',$dataRecursos);
	else:
	    return 0; 
	endif;
    }


    
}