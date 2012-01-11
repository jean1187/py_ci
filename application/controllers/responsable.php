<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Responsable extends CI_Controller {

    
        function  __construct() 
        {
            parent::__construct();
            $this->load->model('m_responsable',"modelo");
            $this->load->library("_global");
            $this->load->library("jqgrid");
        }
  
    
	public function index()
	{
            $data['grid_index'] = $this->jqgrid->grid_index('#'.$this->router->class.'_grid', base_url(). 'js/controllers/'.$this->router->class.'/index.js');
            $data['hidden'] =form_hidden("ruta_ejecutor",current_url()).form_hidden("nombre_programa","Gestión de los Responsables de Proyectos").form_hidden("clase",$this->router->class);
            $data['clase'] =$this->router->class;
                $this->load->vars($data);
                $this->cargar->menu_system($this->router->class."/index","Gestión de Responsables");
	}//fin index
        
         function operacion() 
        {
          $query="SELECT r.id,r.nombre,r.apellido,o.nombre as organo,e.nombre as entidad,c.nombre as cargo,email,o.id as organos,c.id as cargos,e.id as entidades  FROM responsable r 
                                                                    left JOIN organo o on o.id=r.organo_id
                                                                    left JOIN cargos c on c.id=r.cargos_id
                                                                    left JOIN entidad e on e.id=r.entidad_id
                                                                    where r.delete = 0";
            switch ($this->input->post('oper')) 
             {
                case 'json':
                    echo $this->jqgrid->armado_inicial(array("id","nombre","apellido","organo","entidad","cargo"),"","",$query);
                break;
                case 'add':
                   if($this->validacion_form("is_unique[responsable.email]"))
                    $this->modelo->add();
                break;
                case 'edit':
                    if($this->validacion_form("callback_valid_email_modif"))
                    $this->modelo->editar();
                break;
                case 'del':
                     $this->modelo->delete();
                break;
                case 'search_edit':
                    echo json_encode($this->jqgrid->buscar_para_editar("","", "",$query." and r.id=".$this->input->post("id")));
                break;  
                case 'search_entidades':
                    $entidades=$this->_global->array_merge_key_values($this->modelo->Entidades($this->input->post("id")),array("id","nombre")); $this->_global->array_unshift_assoc($entidades,"0","- Seleccione -");   
                    $this->output->set_content_type('application/json')->set_output(json_encode($entidades));
                break;
             }

        }//fin operation
               
        
            function grid_form() 
            {
                     $organos=$this->_global->array_merge_key_values($this->modelo->Organos(),array("id","nombre")); $this->_global->array_unshift_assoc($organos,"0","- Seleccione -");   
                     $cargos=$this->_global->array_merge_key_values($this->modelo->Cargos(),array("id","nombre")); $this->_global->array_unshift_assoc($cargos,"0","- Seleccione -");   
                     
                     $data["organos"]=$organos;
                     $data["cargos"]=$cargos;
                     $data["entidades"]=array("- Seleccione -");
                     $data['clase'] =$this->router->class;
                     $this->load->vars($data); 
                        $this->load->view($this->router->class."/form");
            }//function grid_form() 

        function validacion_form($valid_email){
                $this->load->library('form_validation');
                //seteando las reglas de las validaciones
                 $this->form_validation->set_rules('nombre', 'Nombre', 'required|alpha_space');
                 $this->form_validation->set_rules('apellido', 'Apellido', 'required|alpha_space');
                 $this->form_validation->set_rules('email', 'E-mail', 'valid_email|'.$valid_email);
                 $this->form_validation->set_rules('tlf_celular', 'tlf celular', 'numeric|exact_length[11]');
                 $this->form_validation->set_rules('fax', 'Fax', 'numeric|exact_length[11]');
                 $this->form_validation->set_rules('organos', 'Organo', 'is_natural_no_zero');
                 $this->form_validation->set_rules('cargos', 'Cargo', 'is_natural_no_zero');
                 
                 $this->form_validation->set_message("is_natural_no_zero","Seleccione un %s Válido");
                 $this->form_validation->set_message("is_unique","Este ".$this->input->post("email")." ya se encuentra asignado");

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
            
     function valid_email_modif()
      {
        $result=$this->modelo->valid_email_modif();

        if(count($result)) {
             $this->form_validation->set_message('valid_email_modif', "Este ".$result["email"]." ya se encuentra asignado a  \"".$result["nombre"]." ".$result["apellido"]."\" ");
            return FALSE;
        } else {
            return TRUE;
        }
      }//fin valid_email_modif
               
}//fin class

/* End of file cargos.php */
/* Location: ./application/controllers/cargos.php */