<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class VerificaExistencia extends CI_Model{
     public function __construct() {
        parent::__construct();
    }

    public function duplicado($tabela, $parametro, $comparador){
    	$this->db->select("d.{$parametro}");
    	$this->db->from("{$tabela} d");
    	$this->db->where("d.{$parametro}", $comparador);
    	$result = $this->db->get();
    	
    	return $result->num_rows();
    }
    

    
}