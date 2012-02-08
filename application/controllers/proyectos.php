<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Proyectos extends CI_Controller {

     private $user;
        function  __construct() 
        {
            parent::__construct();
            $this->load->model('m_'.$this->router->class,"modelo");
            $this->load->library("_global");
            $this->user=$this->session->userdata("userLogin");
        }
  
    
	public function index()
	{
            $this->load->helper("romano");
            /*funciones para google maps*/
                $this->load->library('googlemaps');
                $config['center'] = '10.254103525868485,-67.59247183799744';
                $config['zoom'] = 10;
                $config['trafficOverlay'] = TRUE;
                $config['map_type'] = 'HYBRID';
                $this->googlemaps->initialize($config);
                  foreach($this->modelo->proyectos_mapa($this->user["cod"]) as $valor)
                  {
                      //echo $this->db->last_query();exit;
                      /*if($valor["id"]==196)
                      {*/
                        $marker = array();
                        $marker['position'] = $valor["norte"].','.$valor["este"];
                        $marker['draggable'] = false;
                        $marker['infowindow_content'] = "<img src='/imagenes/logo_gober_30X30.png'  /> ".$valor["id"]." <br>Cod de Proyecto:&nbsp; ".$valor["id"]."  <br><a href='#' rel=".$valor["id"]."'>Resumen de la Ficha T&eacute;cnica</a>";
                        $this->googlemaps->add_marker($marker);
                      //}
                  }//fin markas para el mapa
            /* fin funciones para google maps*/      
            
            
                
                $data["total"]=$this->modelo->TotalProyectos($this->user["cod"]);
                $data["PlandeInversion_FCI"]=$this->modelo->PlandeInversion_FCI($this->user["cod"]);
                $data["ListaPlandeInversion_FCI"]=$this->modelo->ListaPlandeInversion_FCI($this->user["cod"]);
                $data['map'] = $this->googlemaps->create_map();
                
                
                $this->load->vars($data);
                $this->cargar->menu_system($this->router->class."/index","Gestión de Proyectos");
	}//fin index
        
        function cambio_estados()
        {
            $this->modelo->cambio_estrados();
              echo "asasas";
           
        }
}//fin class

/* End of file cargos.php */
/* Location: ./application/controllers/cargos.php */