<?php
/**
 * Library
 *
 * Library que genera el menu general, y el menu para cada sistema
 *
 * @package             GBA
 * @author              Gobierno Bolivariano de Aragua
 * @copyright   Copyright (c) 2009 - 2010, Gobierno Bolivariano de Aragua.
 * @link                http://www.aragua.gob.ve
 * @filesource		./application/libraries/cargar.php
 */
// ------------------------------------------------------------------------

/**
 * Clase carga
 * 
 * Generacion del menu
 * 
 * @package		GBA
  * @category    principal
 * @author	Jean Mendoza
 * @fecha	25-11-2010
 */
class Cargar{

    private $CI;
    private $title;

    function  __construct() {
       
        //parent::CI_Loader();    
        $this->CI=& get_instance();
        $this->title="Direccion de Proyectos";
    }
  
      public function menu_system($medio=null,$title=null){
                          $this->encabezado($title);
                          if(!is_null($medio))
                            $this->CI->load->view($medio);
                          $this->CI->load->view('pie');                    
      }//fin menu_system

      public function encabezado($title=null){
                        $data['title'] = ($title)?$title:'Direccion de Proyectos';
                        $data['user'] = $this->CI->session->userdata('userLogin');
                        $data['user']["menu"] = $this->CI->session->userdata('menu');
                        $this->CI->load->vars($data);
                        $this->CI->load->view("encabezado_menu");
      }
      public function vista($vista=null){
                  $this->CI->load->view($this->CI->uri->slash_segment(2)."".$this->CI->router->class."/".$vista);
      }//fin  vista
      
      public function vista_menu($vista=null,$title=null){
                      $this->encabezado($title);
                          if(!is_null($vista))
                            $this->vista($vista);
                          $this->CI->load->view('pie');
                          
      }//fin  load_view_menu


//*********************
//fin library
//*********************
}
/** End of file _menu_body.php */
/** Location: ./application/libraries/cargar.php */
?>