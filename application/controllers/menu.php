<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Controller {

    
        function  __construct() 
        {
            parent::__construct();
            $this->load->model('m_menu');
            $this->load->library("_global");
        }
  
    
	public function index()
	{
            $data["grupos"]=$this->_global->array_merge_key_values($this->m_menu->Grupos(),array("id","nombre"));
            $this->load->vars($data);
            $this->cargar->menu_system("menu/index","Configuración del Menu");
	}//fin index
        
        
        function operacion() 
        {
            if($this->validacion_form())
            {
                $this->m_menu->add();
            }
        }//fin operation
        
        function validacion_form(){
                $this->load->library('form_validation');
                //seteando las reglas de las validaciones
                 $this->form_validation->set_rules('nombre', 'Nombre', 'required');
                 $this->form_validation->set_rules('url', 'Url', 'required');
                 $this->form_validation->set_rules('grupo', 'Grupo', 'required');
                 
                        if ($this->form_validation->run() == FALSE)
                        {
                            $this->output
                                    ->set_content_type('application/json')
                                    ->set_output(json_encode($this->form_validation->_error_array));
                            return false;
                        }
                        else
                            return true;
            }//fin validacion_form        
        

	  function menu_select()
	  {
	      $this->load->library("_menu");
	      $menu=$this->_menu->CrearMaquetadoMenu($this->input->post("grupoId"));
	      if($menu!="")
		echo $menu;
	      else 
		echo '<li id="notiene"><a href="#" ><span>El grupo "'.$this->input->post("grupoNombre").'"  ->   No tiene menu</span></a></li>';
	      
	  }
}//fin class

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */