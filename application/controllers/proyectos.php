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
        
        public function nuevo()
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
                
              $lineasEstrategicas=$this->_global->array_merge_key_values($this->modelo->resultTable("lineaEstrategica"),array("id","nombre")); $this->_global->array_unshift_assoc($lineasEstrategicas,"0","- Seleccione -");     
              $odm=$this->_global->array_merge_key_values($this->modelo->resultTable("objetivosDelMilenio"),array("id","nombre")); $this->_global->array_unshift_assoc($odm,"0","- Seleccione -");     
              $organo=$this->_global->array_merge_key_values($this->modelo->resultTable("organo"),array("id","nombre")); $this->_global->array_unshift_assoc($organo,"0","- Seleccione -");
              $areaInversion=$this->_global->array_merge_key_values($this->modelo->resultTable("areaInversion"),array("id","nombre")); $this->_global->array_unshift_assoc($areaInversion,"0","- Seleccione -");
              $categoria=$this->_global->array_merge_key_values($this->modelo->resultTable("categoria"),array("id","nombre")); $this->_global->array_unshift_assoc($categoria,"0","- Seleccione -");
              $tipoProyecto=$this->_global->array_merge_key_values($this->modelo->resultTable("tipoProyecto"),array("id","nombre")); $this->_global->array_unshift_assoc($tipoProyecto,"0","- Seleccione -");
              $municipio=$this->_global->array_merge_key_values($this->modelo->resultTable("municipio"),array("id","nombre")); $this->_global->array_unshift_assoc($municipio,"0","- Seleccione -");
              $parroquia=$this->_global->array_merge_key_values($this->modelo->resultTable("parroquia"),array("id","nombre")); $this->_global->array_unshift_assoc($parroquia,"0","- Seleccione -");
              $directriz=$this->_global->array_merge_key_values($this->modelo->resultTable("directriz"),array("id","nombre")); $this->_global->array_unshift_assoc($directriz,"0","- Seleccione -");
              $objetivo=$this->_global->array_merge_key_values($this->modelo->resultTable("objetivo"),array("id","nombre")); $this->_global->array_unshift_assoc($objetivo,"0","- Seleccione -");
              $estrategia=$this->_global->array_merge_key_values($this->modelo->resultTable("estrategia"),array("id","nombre")); $this->_global->array_unshift_assoc($estrategia,"0","- Seleccione -");
              $politica=$this->_global->array_merge_key_values($this->modelo->resultTable("politica"),array("id","nombre")); $this->_global->array_unshift_assoc($politica,"0","- Seleccione -");
              $porcentaje=$this->selectMesesPorcentaje();
              $fases=$this->selectMesesPorcentaje(null,7,true);
                
                
            $data['map'] = $this->googlemaps->create_map();
            $data['lineasEstrategicas']=$lineasEstrategicas;
            $data['odm']=$odm;
            $data['organo']=$organo;
            $data['ente']=array("- Seleccione -");
            $data['areaInversion']=$areaInversion;
            $data['categoria']=$categoria;
            $data['tipoProyecto']=$tipoProyecto;
            $data['municipio']=$municipio;
            $data['parroquia']=$parroquia;
            $data['directriz']=$directriz;
            $data['objetivo']=$objetivo;
            $data['estrategia']=$estrategia;
            $data['politica']=$politica;
            $data['tiempoEstimado']=$this->selectMesesPorcentaje(true,24);
            $data['porcentajeAvanceF']=$porcentaje;
            $data['porcentajeAvanceFinan']=$porcentaje;
            $data['fases']=$fases;
            
            
            
            $this->load->vars($data);
                $this->cargar->menu_system($this->router->class."/ficha_tecnica","Nuevo Proyecto");
	}//fin index
        
        
        function selectMesesPorcentaje($meses=null,$final=100,$fase=null)
        {
           
            
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
                    $valor=$this->_global->arabigo2romano($i);  
              $result[$i]=$valor;  
            }
            return $result;
        }//fin selectMesesPorcentaje
}//fin class

/* End of file cargos.php */
/* Location: ./application/controllers/cargos.php */