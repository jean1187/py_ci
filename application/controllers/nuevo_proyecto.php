<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nuevo_proyecto extends CI_Controller {
    
    
        function __construct()
        {
            parent::__construct();
            $this->load->model('m_'.$this->router->class,"modelo");
            $this->load->library("_global");
            $this->seleccione=array(""=>"- Seleccione -");
            $this->load->helper("romano");
            $this->user=$this->session->userdata("userLogin");
        }
  
        public function index($solo=false)
        { 
            $data["datos"]=$this->search_py_modif($solo);
            /*funciones para google maps*/
                $this->load->library('googlemaps');
                $config['center'] = ($solo)?$data["datos"]["latitude"].','.$data["datos"]["longitude"]:'10.254103525868485,-67.59247183799744';
                $config['zoom'] = 17;
                $config['trafficOverlay'] = TRUE;
                $config['map_type'] = 'HYBRID';

                $this->googlemaps->initialize($config);
                    $marker = array();
                    $marker['position'] =  ($solo)?$data["datos"]["latitude"].','.$data["datos"]["longitude"]:'10.254103525868485,-67.59247183799744';
                    $marker['draggable'] = TRUE;
                    $marker['ondragend'] = 'var point = marker_0.getPosition();$("#latitude").val(point.lat());$("#longitude").val(point.lng());';
                    $this->googlemaps->add_marker($marker);
            /* fin funciones para google maps*/
               
              $lineasEstrategicas=$this->_global->array_merge_key_values($this->modelo->resultTable("lineaestada"),array("id","opcion")); $this->_global->array_unshift_assoc($lineasEstrategicas,"","- Seleccione -");
              $odm=$this->_global->array_merge_key_values($this->modelo->resultTable("odm"),array("id","opcion")); $this->_global->array_unshift_assoc($odm,"","- Seleccione -");
              $organo=$this->_global->array_merge_key_values($this->modelo->resultTable_Where("organoente",array("opcion <>"=>"","tipo"=>"o"),"id, opcion"),array("id","opcion"));
              $ente=$this->_global->array_merge_key_values($this->modelo->resultTable_Where("organoente",array("opcion <>"=>"","id <>"=>0,"tipo"=>"e"),"id, opcion"),array("id","opcion"));
              $areaInversion=$this->_global->array_merge_key_values($this->modelo->resultTable("area"),array("id","opcion")); $this->_global->array_unshift_assoc($areaInversion,"","- Seleccione -");
              //$politica=$this->_global->array_merge_key_values($this->modelo->resultTable("polidos"),array("id","opcion")); $this->_global->array_unshift_assoc($politica,"","- Seleccione -");
              $municipio=$this->_global->array_merge_key_values($this->modelo->resultTable("municipio"),array("id","opcion")); $this->_global->array_unshift_assoc($municipio,"","- Seleccione -");
              $directriz=$this->_global->array_merge_key_values($this->modelo->resultTable("lineas"),array("id","opcion")); $this->_global->array_unshift_assoc($directriz,"","- Seleccione -");
              $fases=$this->selectMesesPorcentaje(null,7,true);
                
            $data['map'] =$this->googlemaps->create_map();//($solo)?array("js"=>"","html"=>'<iframe width="900" height="500"  src="iframe/'.$this->router->class.'/map.php?lat=10,254151034510837&lon=-67,59229481220348"></iframe>'):$this->googlemaps->create_map();
            $data['lineasEstrategicas']=$lineasEstrategicas;
            $data['odm']=$odm;
            $data['organo']=array("ORGANOS"=>$organo,"ENTES"=>$ente);
            $data['ente']=array("ORGANOS"=>$organo,"ENTES"=>$ente);
            $data['areaInversion']=$areaInversion;
            $data['categoria']=($solo)?$this->_global->array_merge_key_values($this->modelo->resultTable_Where("catego",array("opcion <>"=>"","relacion"=>$data["datos"]["areaInversion"]),"id, opcion"),array("id","opcion")):$this->seleccione;
            $data['tipoProyecto']=($solo)?$this->_global->array_merge_key_values($this->modelo->resultTable_Where("tipoin",array("opcion <>"=>"","relacion"=>$data["datos"]["categoria"]),"id, opcion"),array("id","opcion")):$this->seleccione;
            $data['municipio']=$municipio;
            $data['parroquia']=($solo)?$this->_global->array_merge_key_values($this->modelo->resultTable_Where("parroquia",array("opcion <>"=>"","relacion"=>$data["datos"]["municipio"]),"id, opcion"),array("id","opcion")):$this->seleccione;
            $data['directriz']=$directriz;
            $data['objetivo']=($solo)?$this->_global->array_merge_key_values($this->modelo->resultTable_Where("objedos",array("opcion <>"=>"","relacion"=>$data["datos"]["directriz"]),"id, opcion"),array("id","opcion")):$this->seleccione;
            $data['estrategia']=($solo)?$this->_global->array_merge_key_values($this->modelo->resultTable_Where("estrados",array("opcion <>"=>"","relacion"=>$data["datos"]["directriz"]),"id, opcion"),array("id","opcion")):$this->seleccione;
            $data['politica']=($solo)?$this->_global->array_merge_key_values($this->modelo->resultTable_Where("polidos",array("opcion <>"=>"","relacion"=>$data["datos"]["estrategia"]),"id, opcion"),array("id","opcion")):$this->seleccione;
            $data['tiempoEstimado']=$this->selectMesesPorcentaje(true,24);
            $data['fases']=$fases;
            $data['class']=$this->router->class;
            $data['hidden'] =form_hidden("ruta_ejecutor",($solo)?base_url().$this->router->class:base_url().$this->router->class);//current_url());
            $data['hidden'].=($solo)?form_hidden("id_py",$solo):"";
            
            $this->load->vars($data);
            
            if(empty ($data["datos"]))
                $this->cargar->menu_system($this->router->class."/ficha_tecnica","Nuevo Proyecto");
            else 
            {
                $this->cargar->encabezado("Nuevo Proyecto");
                $this->load->view($this->router->class."/ficha_tecnica");
                $this->load->view($this->router->class."/consejo_federal");
                $this->load->view('pie');
            }
            /*
                 
            if(!$solo)
                $this->cargar->menu_system($this->router->class."/ficha_tecnica","Nuevo Proyecto");
            else $this->load->view($this->router->class."/ficha_tecnica");*/
}//fin index
        
         public function search_py_modif($id)
        {
            $result=array();
            foreach($this->modelo->buscando_py_Modif(array("resumen.id"=>$id,"cod"=>$this->user["cod"])) as $key=>$value)
                    $result[$key]=cambia_char($value);
            return $result;
        }
        
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
                
                case "edit":
                    if($this->validacion_form())
                    {
                      $this->modelo->edit();
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
        
        
        function echoSelect()
        {
            $this->echoSelectJson($this->modelo->resultTable_Where($this->input->post("t"),array("relacion"=>$this->input->post("dato"))));
        }
        
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
        
        
        
        public function view_file()
	{
                $this->load->view($this->router->class."/subir_archivos");
	}
        public function do_upload()
	{
           
            $id=(isset($_POST["id"]))?$this->input->post("id"):$this->input->get("id");
            $campo=(isset($_POST["campo"]))?$this->input->post("campo"):$this->input->get("campo");
           if($campo!="")
           {
               
               switch($campo)
               {
                   case "presupuesto":
                       $campo="presupuesto121";
                        //presupuesto121  //cronograma  // 	memoria122 //  perspectiva122 // fotografias122 	 // croquis122  //permisos129
                   break;
                   case "crono":
                       $campo="cronograma";
                   break;
                   case "mem_des":
                       $campo="memoria122";
                   break;
                   case "form":
                       $campo="perspectiva122";
                   break;
                   case "met":
                       $campo="calculos122";
                   break;
                   case "fot":
                       $campo="fotografias122";
                   break;
                   case "plam":
                       $campo="plano122";
                   break;
                   case "cro":
                       $campo="croquis122";
                   break;
                   case "cro_ej":
                       $campo="cronograma128";
                   break;
                   case "per":
                       $campo="permisos129";
                   break;
               
               
               
               
               
               
               	
               }//fin switch
               if((isset($_GET["campo"])))
               {
                   $resultado=$this->modelo->resultTable_Where("resumen",array("id"=>$id),$campo);
                    header('Content-type: application/json');
                    echo json_encode(array("text"=>$resultado[0][$campo],"ruta"=>base_url().'uploads/files_proyectos/'.$id."/".rawurlencode($resultado[0][$campo])));
                   exit;
               }
           }
//$upload_path_url = base_url().'uploads/';
	//echo dirname($_SERVER['SCRIPT_FILENAME']).'/uploads/files_proyectos/';
		
                //$config['max_number_of_files'] = 2;
                $config['upload_path'] = FCPATH.'uploads/';
		//$config['accept_file_types'] = '/(\.|\/)(pdf|PDF)$/i';
		$config['max_size'] = '30000';
                $config['script_url'] = current_url()."?id=".$id;
                $config['upload_dir'] = dirname($_SERVER['SCRIPT_FILENAME']).'/uploads/files_proyectos/'.$id."/";
                $config['upload_url'] = base_url().'/uploads/files_proyectos/'.$id."/";
		
	  	$this->load->library('uploads', $config);
                //echo $_REQUEST['_method']." - ".$_SERVER['REQUEST_METHOD'];
            switch ($_SERVER['REQUEST_METHOD']) {
                case 'OPTIONS':
                    break;
                case 'HEAD':
                case 'GET':
                    $this->uploads->get();
                    break;
                case 'POST':
                    $return=$this->uploads->post(true,array("id"=>$id));
                    $this->modelo-> add_files($campo,$return[0]->name,$id);
                    echo json_encode($return);
                break;
                default:
                    header('HTTP/1.1 405 Method Not Allowed');
            }

        }

        
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