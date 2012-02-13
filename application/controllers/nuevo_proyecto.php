<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nuevo_proyecto extends CI_Controller {
    
    
        function __construct()
        {
            parent::__construct();
            $this->load->model('m_'.$this->router->class,"modelo");
            $this->load->library("_global");
            $this->seleccione=array(""=>"- Seleccione -");
        }
  
       
        public function index()
{ 
            /*funciones para google maps*/
                $this->load->library('googlemaps');
                $config['center'] = '10.254103525868485,-67.59247183799744';
                $config['zoom'] = 17;
                $config['trafficOverlay'] = TRUE;
                $config['map_type'] = 'HYBRID';
                $this->googlemaps->initialize($config);
                    $marker = array();
                    $marker['position'] = '10.254103525868485,-67.59247183799744';
                    $marker['draggable'] = TRUE;
                    $marker['ondragend'] = 'var point = marker_0.getPosition();$("#latitude").val(point.lat());$("#longitude").val(point.lng());';
                    $this->googlemaps->add_marker($marker);
            /* fin funciones para google maps*/
               
              $lineasEstrategicas=$this->_global->array_merge_key_values($this->modelo->resultTable("lineaestada"),array("id","opcion")); $this->_global->array_unshift_assoc($lineasEstrategicas,"","- Seleccione -");
              $odm=$this->_global->array_merge_key_values($this->modelo->resultTable("odm"),array("id","opcion")); $this->_global->array_unshift_assoc($odm,"","- Seleccione -");
              $organo=$this->_global->array_merge_key_values($this->modelo->resultTable_Where("organo",array("opcion <>"=>""),"concat( 'o_', id ) AS id, opcion"),array("id","opcion"));
              $ente=$this->_global->array_merge_key_values($this->modelo->resultTable_Where("ente",array("opcion <>"=>"","id <>"=>0),"concat( 'e_', id ) AS id, opcion"),array("id","opcion"));
              $areaInversion=$this->_global->array_merge_key_values($this->modelo->resultTable("area"),array("id","opcion")); $this->_global->array_unshift_assoc($areaInversion,"","- Seleccione -");
              //$politica=$this->_global->array_merge_key_values($this->modelo->resultTable("polidos"),array("id","opcion")); $this->_global->array_unshift_assoc($politica,"","- Seleccione -");
              $municipio=$this->_global->array_merge_key_values($this->modelo->resultTable("municipio"),array("id","opcion")); $this->_global->array_unshift_assoc($municipio,"","- Seleccione -");
              $directriz=$this->_global->array_merge_key_values($this->modelo->resultTable("lineas"),array("id","opcion")); $this->_global->array_unshift_assoc($directriz,"","- Seleccione -");
              $fases=$this->selectMesesPorcentaje(null,7,true);
                
            $data['map'] = $this->googlemaps->create_map();
            $data['lineasEstrategicas']=$lineasEstrategicas;
            $data['odm']=$odm;
            $data['organo']=array("ORGANOS"=>$organo,"ENTES"=>$ente);
            $data['ente']=array("ORGANOS"=>$organo,"ENTES"=>$ente);
            $data['areaInversion']=$areaInversion;
            $data['categoria']=$this->seleccione;
            $data['tipoProyecto']=$this->seleccione;
            $data['municipio']=$municipio;
            $data['parroquia']=$this->seleccione;
            $data['directriz']=$directriz;
            $data['objetivo']=$this->seleccione;
            $data['estrategia']=$this->seleccione;
            $data['politica']=$this->seleccione;
            $data['tiempoEstimado']=$this->selectMesesPorcentaje(true,24);
            $data['fases']=$fases;
            $data['class']=$this->router->class;
            $data['hidden'] =form_hidden("ruta_ejecutor",current_url());
            
            $this->load->vars($data);
                $this->cargar->menu_system($this->router->class."/ficha_tecnica","Nuevo Proyecto");
}//fin index
        
        
        
        function operacion()
        {
            switch ($this->input->post("oper"))
            {
                case "add":
                    if($this->validacion_form())
                    {
                      $this->modelo->add();
                    }
                break;
                
                
                case "combo_categoria":
                    $this->echoSelectJson($this->modelo->resultTable_Where("catego",array("relacion"=>$this->input->post("id_area"))));
                break;
                case "combo_tipo":
                    $this->echoSelectJson($this->modelo->resultTable_Where("tipoin",array("relacion"=>$this->input->post("id_categoria"))));
                break;
                case "combo_parroquia":
                    $this->echoSelectJson($this->modelo->resultTable_Where("parroquia",array("relacion"=>$this->input->post("id_municipio"))));
                break;
                case "combo_objetivo":
                    $this->echoSelectJson($this->modelo->resultTable_Where("objedos",array("relacion"=>$this->input->post("id_directriz"))));
                break;
                case "combo_estrategia":
                    $this->echoSelectJson($this->modelo->resultTable_Where("estrados",array("relacion"=>$this->input->post("id_directriz"))));
                break;
                case "combo_politica":
                    $this->echoSelectJson($this->modelo->resultTable_Where("polidos",array("relacion"=>$this->input->post("id_estrategia"))));
                break;
                /*case "combo_entes":
$this->echoSelectJson($this->modelo->resultTable_Where("ente",array("relacion"=>$this->input->post("id_organo"))));
break;*/
            }//fin switch
        }//fin operacion
        
        
        function echoSelectJson($array_result,$datos=array("id","opcion"))
        {
                        
            
            $result=$this->_global->array_merge_key_values($array_result,$datos); $this->_global->array_unshift_assoc($result,"",$this->seleccione[""]);
             $this->output->set_content_type('application/json')->set_output(json_encode($result));
                    
        }//fin echoSelectJson
        
        
        function selectMesesPorcentaje($meses=null,$final=100,$fase=null)
        {
           $this->load->helper("romano");
            
            $result=array();
            for($i=1;$i<=$final;$i++)
            {
                $valor=$i;
                if(!is_null($meses) && is_null($fase))
                {
                  $plural=($i>1)?"es":"";
                  $valor.=nbs(8)."Mes".$plural;
                }
                else if(is_null($meses) && !is_null($fase))
                    $valor=arabigo2romano($i);
              $result[$i]=$valor;
            }
            return $result;
        }//fin selectMesesPorcentaje
        
        
        function validacion_form()
        {
            
                $this->load->library('form_validation');
                //seteando las reglas de las validaciones
                 $this->form_validation->set_rules('nombre', 'Nombre Proyecto', 'required');
                 $this->form_validation->set_rules('descripcion', 'Descripción Proyecto', 'required');
                 $this->form_validation->set_rules('lineaEstrategica', 'Linea Estrategica', 'required');
                 $this->form_validation->set_rules('objetivosDelMileniun', 'Objetivos del Mileniun', 'required');
                 $this->form_validation->set_rules('areaInversion', 'Area de Inversion', 'required');
                 $this->form_validation->set_rules('categoria', 'Categoria', 'required');
                 $this->form_validation->set_rules('tipoProyecto', 'Tipo Proyecto', 'required');
                 $this->form_validation->set_rules('municipio', 'Municipio', 'required');
                 $this->form_validation->set_rules('parroquia', 'Parroquia', 'required');
                 $this->form_validation->set_rules('directriz', 'Directriz', 'required');
                 $this->form_validation->set_rules('objetivo', 'Objetivo', 'required');
                 $this->form_validation->set_rules('estrategia', 'Estrategia', 'required');
                 $this->form_validation->set_rules('politica', 'Politica', 'required');

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

/* End of file nuevo_proyecto.php */
/* Location: ./application/controllers/nuevo_proyecto.php */