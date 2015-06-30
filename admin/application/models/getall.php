<?php  if ( ! defined('BASEPATH')) exit ('No direct script access allowed');
/**
 * Projeto Gerenciador de Imóveis
 * 
 * Model getall
 *
 * @author Wellington Dantas
 * Facebook: http://fb.com/wdantas1
 * 
 * @author Rogério Santos
 */
class GetAll extends CI_Model{
    public function __construct() {
        parent::__construct();
    }

    public function registros($tabela) {
        $this->db->from("{$tabela}");
        $result = $this->db->get();
        
        return $result->result_array();
    }
}
