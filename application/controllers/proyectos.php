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
            $config['controls'] = array("GLargeMapControl","GMapTypeControl");
            $this->googlemaps->initialize($config);
                $marker = array();
                $marker['position'] = '10.254103525868485,-67.59247183799744';
                $marker['draggable'] = TRUE;
                $marker['ondragend'] = 'var point = marker_0.getPosition();$("#latitude").val(point.lat());$("#longitude").val(point.lng());';
                $this->googlemaps->add_marker($marker);
            /* fin funciones para google maps*/
              $lineasEstrategicas=$this->_global->array_merge_key_values($this->modelo->lineasEstrategicas(),array("id","nombre")); $this->_global->array_unshift_assoc($lineasEstrategicas,"0","- Seleccione -");     
              $odm=$this->_global->array_merge_key_values($this->modelo->odm(),array("id","nombre")); $this->_global->array_unshift_assoc($odm,"0","- Seleccione -");     
                
                
            $data['map'] = $this->googlemaps->create_map();
            $data['lineasEstrategicas']=$lineasEstrategicas;
            $data['odm']=$odm;
            
            $this->load->vars($data);
                $this->cargar->menu_system($this->router->class."/ficha_tecnica","Nuevo Proyecto");
	}//fin index
}//fin class

/* End of file cargos.php */
/* Location: ./application/controllers/cargos.php */