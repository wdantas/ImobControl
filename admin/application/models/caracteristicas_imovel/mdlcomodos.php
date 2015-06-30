<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class MdlComodos extends CI_Model{
     public function __construct() {
        parent::__construct();
    }
    
       
    public function setComodos($data){
	if(!empty($data) || !$this->verificaExistencia->duplicado('comodos','slug',$data['slug'])):
	    $this->db->insert('comodos',$data);
	else:
	    return 0; 
	endif;
    }

 
    
}