<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Controller {

    
        function  __construct() 
        {
            parent::__construct();
            $this->load->model('m_menu','modelo');
            $this->load->library("_global");
            $this->load->library("jqgrid");
        }
  
    
	public function index()
	{
            $data['grid_index'] = $this->jqgrid->grid_index('#'.$this->router->class.'_grid', base_url(). 'js/controllers/'.$this->router->class.'/index.js');
            $data['hidden'] =form_hidden("ruta_ejecutor",current_url()).form_hidden("nombre_programa","Gestión de Cargos").form_hidden("clase",$this->router->class);
            $data['clase'] =$this->router->class;
                $this->load->vars($data);
                $this->cargar->menu_system("menu/index","Configuración del Menu");
	}//fin index
        
        
        function operacion() 
        {
        
            switch ($this->input->post('oper')) 
             {
                case 'json':
                      //echo $this->jqgrid->armado_inicial(array("id","nombre","url","parent","grupo"),"menu","","","",true);
                    echo $this->jqgrid->armado_inicial(array("id","nombre","url","parent","grupo"),"menu","","SELECT * FROM menu where menu.id in (SELECT id FROM menu where menu.delete<>1)","",true);
                break;
                case 'add':
                   if($this->validacion_form())
                    $this->modelo->add();
                break;
                case 'edit':
                    if($this->validacion_form())
                    $this->modelo->editar();
                break;
                case 'del':
                     $this->modelo->delete();
                break;
                case 'search_edit':
                    echo json_encode($this->jqgrid->buscar_para_editar("id,nombre,url,grupo","", "","SELECT parent.id as idparent,parent.nombre as nombreparent,parent.grupo as groupParentDiv,child.nombre,child.url,child.grupo FROM menu as parent,menu child
                                                                                                        where parent.id = child.parent AND parent.nombre <> child.nombre and child.id=".$this->input->post("id")));
                break;                
                case 'search_edit_parent':
                    echo json_encode($this->jqgrid->buscar_para_editar("id,nombre,url,grupo",$this->input->post("id"), "menu"));
                break;
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
   
            function grid_form() 
            {
                     $data["grupos"]=$this->_global->array_merge_key_values($this->modelo->Grupos(),array("id","nombre"),false);
                     $this->load->vars($data);
                     //$this->cargar->menu_system("menu/form","Configuración del Menu");
                     $this->load->view("menu/form");
            }//function grid_form() 

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

/* End of file menu.php */
/* Location: ./application/controllers/menu.php */