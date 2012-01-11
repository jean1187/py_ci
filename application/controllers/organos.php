<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Organos extends CI_Controller {

    
        function  __construct() 
        {
            parent::__construct();
            $this->load->model('m_organos','modelo');
            $this->load->library("jqgrid");
        }
  
    
	public function index()
	{
            $data['grid_index'] = $this->jqgrid->grid_index('#'.$this->router->class.'_grid', base_url(). 'js/controllers/'.$this->router->class.'/index.js');
            $data['hidden'] =form_hidden("ruta_ejecutor",current_url()).form_hidden("nombre_programa","Gestión de Organos").form_hidden("clase",$this->router->class);
            $data['clase'] =$this->router->class;
                $this->load->vars($data);
                $this->cargar->menu_system($this->router->class."/index","Gestión de Organos");
	}//fin index
        
         function operacion() 
        {
        
            switch ($this->input->post('oper')) 
             {
                case 'json':
                    echo $this->jqgrid->armado_inicial(array("id","nombre"),"organo","","SELECT * FROM organo where organo.delete<>1");
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
                    echo json_encode($this->jqgrid->buscar_para_editar("","", "","SELECT * FROM organo where organo.id=".$this->input->post("id")));
                break;                
             }

        }//fin operation
               
        
            function grid_form() 
            {
                    $data['clase'] =$this->router->class;
                    $this->load->vars($data);                
                        $this->load->view($this->router->class."/form");
            }//function grid_form() 

        function validacion_form(){
                $this->load->library('form_validation');
                //seteando las reglas de las validaciones
                 $this->form_validation->set_rules('nombre', 'Nombre', 'required');

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
               
}//fin class

/* End of file organos.php */
/* Location: ./application/controllers/organos.php */