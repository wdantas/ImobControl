<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class MdlAreasLazer extends CI_Model{
     public function __construct() {
        parent::__construct();
    }
    
       
    public function setAreasLazer($data){
	if(!empty($data) || !$this->verificaExistencia->duplicado('areas_comuns','slug',$data['slug'])):
	    $this->db->insert('areas_comuns',$data);
	else:
	    return 0; 
	endif;
    }

 
    
}