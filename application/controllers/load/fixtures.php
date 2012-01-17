<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fixtures extends CI_Controller {
   
    
    function  __construct() 
    {
        parent::__construct();
        $this->load->model("load/m_fixtures","modelo");
    }

    public function index()
    {

        $data["sql"]=$this->modelo->cargar_datos_basicos_logueo();

        $this->load->vars($data);

        $this->load->view("load/fixtures/index","Cargando Fixtures");


    }//fin index
    
}//fin class

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */