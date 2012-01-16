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
            $this->load->library('googlemaps');
            $config['center'] = '10.254103525868485,-67.59247183799744';
            $config['zoom'] = 17;
            //$config['map_type'] = "HYBRID";
            //para que aparezcan las felchas del trafico
            $config['trafficOverlay'] = TRUE;
            $config['controls'] = array("GLargeMapControl","GMapTypeControl");
           // $config['onclick'] = "createMarker({position: event.latLng, map:map});";
            
             

            $this->googlemaps->initialize($config);
            //$this->googlemaps->setMapType('hybrid');
            $marker = array();
            $marker['position'] = '10.254103525868485,-67.59247183799744';
            $marker['draggable'] = TRUE;
            $marker['ondragend'] = 'var point = marker_0.getPosition();$("#latitude").val(point.lat());$("#longitude").val(point.lng());';
            $this->googlemaps->add_marker($marker);
            $data['map'] = $this->googlemaps->create_map();
            $this->load->vars($data);
                $this->cargar->menu_system($this->router->class."/ficha_tecnica","Nuevo Proyecto");
	}//fin index
}//fin class

/* End of file cargos.php */
/* Location: ./application/controllers/cargos.php */