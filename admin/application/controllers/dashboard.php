<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
       	    parent::__construct();
            $this->VerificarLogin->verify();
    	}
    	
	public function index()
	{
            $dados['corretor'] = $this->Corretor->getNome();
            
            $this->Theme->header();
            $this->load->view('dashboard', $dados);
            $this->Theme->footer();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */