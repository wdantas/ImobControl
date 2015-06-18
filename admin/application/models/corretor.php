<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Corretor extends CI_Model{
     public function __construct() {
        parent::__construct();
    }
       
    public function getDadosCompletos(){
        $this->db->where('idcorretor', $this->idCorretor());
        $this->db->from('corretor');
        $result = $this->db->get();
        
        return $result->result();
    }
    
    public function getNome(){
        $this->db->select('c.nome');
        $this->db->where('idcorretor', $this->idCorretor());
        $this->db->from('corretor c');
        $result = $this->db->get();
        $nome = $result->result();
        
        return $nome[0];
    }
    
    private function idCorretor(){
        return $this->session->userdata('idcorretor');
    }
    
}
