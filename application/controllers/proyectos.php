<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Proyectos extends CI_Controller {

    
        function  __construct() 
        {
            parent::__construct();
            $this->load->model('m_'.$this->router->class,"modelo");
            $this->load->library("_global");
        }
  
    
	public function index()
	{
                $this->cargar->menu_system($this->router->class."/index","Gestión de Proyecots");
	}//fin index
        
        
}//fin class

/* End of file cargos.php */
/* Location: ./application/controllers/cargos.php */