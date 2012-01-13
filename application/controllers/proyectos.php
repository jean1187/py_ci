<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Proyectos extends CI_Controller {

    
        function  __construct() 
        {
            parent::__construct();
        }
  
    
	public function index()
	{
                $this->cargar->menu_system($this->router->class."/index","Gestión de Proyecots");
	}//fin index
        
        public function nuevo()
	{
                $this->cargar->menu_system($this->router->class."/ficha_tecnica","Nuevo Proyecto");
	}//fin index
}//fin class

/* End of file cargos.php */
/* Location: ./application/controllers/cargos.php */