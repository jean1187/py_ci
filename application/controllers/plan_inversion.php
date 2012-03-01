<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Plan_inversion extends CI_Controller {

    
        function  __construct() 
        {
            parent::__construct();
            $this->load->model('m_plan_inversion',"modelo");
            $this->load->model('m_nuevo_proyecto');
            $this->load->library("_global");
            $this->load->helper("romano");
            $this->seleccione=array(""=>"- Seleccione -");
        }
  
    
        public function index()
        {
           echo "index" ;
        }//fin index
        
	public function add()
	{
            
            $organo=$this->_global->array_merge_key_values($this->m_nuevo_proyecto->resultTable_Where("organoente",array("opcion <>"=>"","tipo"=>"o"),"id, opcion"),array("id","opcion"));
            $ente=$this->_global->array_merge_key_values($this->m_nuevo_proyecto->resultTable_Where("organoente",array("opcion <>"=>"","id <>"=>0,"tipo"=>"e"),"id, opcion"),array("id","opcion"));
            $directriz=$this->_global->array_merge_key_values($this->m_nuevo_proyecto->resultTable("lineas"),array("id","opcion")); $this->_global->array_unshift_assoc($directriz,"","- Seleccione -");
            $lineasEstrategicas=$this->_global->array_merge_key_values($this->m_nuevo_proyecto->resultTable("lineaestada"),array("id","opcion")); $this->_global->array_unshift_assoc($lineasEstrategicas,"","- Seleccione -");
                $data["class"]=$this->router->class;
                $data['organo_ente']=array("ORGANOS"=>$organo,"ENTES"=>$ente);
                $data['directriz']=$directriz;
                $data['objetivo']=$this->seleccione;
                $data['estrategia']=$this->seleccione;
                $data['lineasEstrategicas']=$lineasEstrategicas;
                $data['hidden'] =form_hidden("ruta_ejecutor",base_url().$this->router->class);//.form_hidden("id_plan",26);
                $this->load->vars($data);
                $this->cargar->menu_system($this->router->class."/add","Agregar Plan Inversion");
	}//fin add

        function operacion()
        {
            switch ($this->input->post("oper"))
            {
                case "add":
                   if($this->validacion_form())
                    {
                            echo "hola";
                    }
                break;
                case "combo_objetivo":
                    $this->echoSelectJson($this->m_nuevo_proyecto->resultTable_Where("objedos",array("relacion"=>$this->input->post("id_directriz"))));
                break;
                case "combo_estrategia":
                    $this->echoSelectJson($this->m_nuevo_proyecto->resultTable_Where("estrados",array("relacion"=>$this->input->post("id_directriz"))));
                break;
            }//fin switch
        }//fin operacion
        
        function echoSelectJson($array_result,$datos=array("id","opcion"))
        {                                   
            $result=$this->_global->array_merge_key_values($array_result,$datos); $this->_global->array_unshift_assoc($result,"",$this->seleccione[""]);
             $this->output->set_content_type('application/json')->set_output(json_encode($result));                    
        }//fin echoSelectJson 
        
        
function validacion_form()
        {
            
                $this->load->library('form_validation');
                //seteando las reglas de las validaciones
                $this->form_validation->set_rules('organo_ente', 'Organo / Ente', 'required'); 
                $this->form_validation->set_rules('justif', 'Justificación', 'required');
                $this->form_validation->set_rules('necesi', 'Necesidades', 'required');
                $this->form_validation->set_rules('potencia', 'Potencialidades', 'required');
                $this->form_validation->set_rules('directriz', 'Directrices', 'required');
                $this->form_validation->set_rules('objetivo', 'Objetivos', 'required');
                $this->form_validation->set_rules('estrategia', 'estrategias', 'required');
                $this->form_validation->set_rules('planestad', 'Plan estadal', 'required');
                $this->form_validation->set_rules('fechaest', 'Fecha del plan de desarrollo estadal', 'required');
                $this->form_validation->set_rules('lineaEstrategica', 'Área plan de desarrollo', 'required');
                $this->form_validation->set_rules('planmuni', 'Plan de desarrollo de la municipal', 'required'); 
                $this->form_validation->set_rules('fechamuni', 'Fecha del plan de desarrollo municipal', 'required'); 
                $this->form_validation->set_rules('invermuni', 'Área del plan de desarrollo', 'required'); 
                $this->form_validation->set_rules('formula', 'Formulacion', 'required'); 
                $this->form_validation->set_rules('integraci', 'Integración', 'required'); 
                $this->form_validation->set_rules('valorporc', 'Valor porcentual', 'required|greater_than[0]|less_than[101]');
                $this->form_validation->set_rules('observa', 'Observación', 'required');
                 

                 if ($this->form_validation->run() == FALSE)
                        {
                            $this->output
                                    ->set_content_type('application/json')
                                    ->set_output(json_encode($this->form_validation->_error_array));
                            return false;
                        }
                        else
                            return true;
        }//fin validation
        
}//fin class

/* End of file cargos.php */
/* Location: ./application/controllers/cargos.php */