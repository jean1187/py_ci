<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Proyectos extends CI_Controller {

     private $user;
        function  __construct() 
        {
            parent::__construct();
            $this->load->model('m_'.$this->router->class,"modelo");
            $this->load->library("_global");
            $this->user=$this->session->userdata("userLogin");
             $this->load->helper("romano");
        }
  
    
	public function index()
	{
           
            /*funciones para google maps*/
                $this->load->library('googlemaps');
                $config['center'] = '10.254103525868485,-67.59247183799744';
                $config['zoom'] = 10;
                $config['trafficOverlay'] = TRUE;
                $config['map_type'] = 'HYBRID';
                $this->googlemaps->initialize($config);
                $i=0;
                
                  foreach($this->modelo->proyectos_mapa($this->user["cod"]) as $valor)
                  {
                      //echo $this->db->last_query();exit;
                      /*if($valor["id"]==196)
                      {*/
                        $marker = array();
                        $marker['position'] = $valor["norte"].','.$valor["este"];
                        $marker['draggable'] = false;
                        $marker['infowindow_content'] = "<img src='".base_url()."/imagenes/logo_gober_30X30.png'  /> ".str_replace('"','\"',cambia_char($valor["nopro"]))." <br>Cod de Proyecto:&nbsp; ".$valor["id"]."<br> <a href='#' nom_py='".str_replace('"','\"',cambia_char($valor["nopro"]))."' pquia='".str_replace('"','\"',cambia_char($valor["pquia"]))."' muni='".str_replace('"','\"',cambia_char($valor["muni"]))."'  descr_py='".str_replace('"','\"',cambia_char($valor["descr"]))."'  monto_py='".number_format($valor["monto"])."'   class='resumen_ficha_map' rel=".$valor["id"].">Resumen de la Ficha T&eacute;cnica</a>";
                        $marker['animation']='DROP';
                        $this->googlemaps->add_marker($marker);
                        /*if($i==4)
                            break;
                        $i++;*/
                      //}
                  }//fin markas para el mapa
            /* fin funciones para google maps*/      
            
            
                
                $data["total"]=$this->modelo->TotalProyectos($this->user["cod"]);
                $data["PlandeInversion_FCI"]=$this->modelo->PlandeInversion_FCI($this->user["cod"]);
                $data["ListaPlandeInversion_Situado"]=$this->modelo->ListaPlandeInversion_Situado($this->user["cod"]);
                $data["ListaPlandeInversion_OtraFuente"]=$this->modelo->ListaPlandeInversion_OtraFuente($this->user["cod"]);
                $data["ListaPlandeInversion_FCI"]=$this->modelo->ListaPlandeInversion_FCI($this->user["cod"]);
                $data["ListaPlandeInversion_SinPropuesta"]=$this->modelo->ListaPlandeInversion_SinPropuesta($this->user["cod"]);
                $data['map'] = $this->googlemaps->create_map();
                $data['cod']=$this->user["cod"];
                $data['m_situado']=$this->modelo->Monto_situado($this->user["cod"]);
                $data['otra_fuente']=$this->modelo->OtraFuente($this->user["cod"]);
                $data['SinPropuesta']=$this->modelo->SinPropuesta($this->user["cod"]);
                $data['nombre_completo']=$this->user["nombre"]." ".$this->user["apellido"];
                
                
                
                
                
                $this->load->vars($data);
                $this->cargar->menu_system($this->router->class."/index","Gestión de Proyectos");
	}//fin index
        
        function cambio_estados()
        {
            $this->modelo->cambio_estrados();
              echo "asasas";
           
        }
        public function cargar_vista_proyectos()
        {
            $this->load->view("nuevo_proyecto/ficha_tecnica");
        }//fin cargar_vista_proyectos
        
        public function search_py_modif()
        {
            $result=array();
            foreach($this->modelo->buscando_py_Modif($this->input->post("id_py")) as $key=>$value)
                    $result[$key]=cambia_char($value);
            $this->output
                                    ->set_content_type('application/json')
                                    ->set_output(json_encode($result));
        }
                
}//fin class

/* End of file cargos.php */
/* Location: ./application/controllers/cargos.php */