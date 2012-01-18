<?php if(!defined('BASEPATH'))         exit('No direct script access allowed');
/**
-----------------------------------------------------------------------------------------------------------------


 * Library
 *
 * Library que genera el menu general, y el menu para cada sistema
 *
 * @package             GBA
 * @author              Gobierno Bolivariano de Aragua
 * @copyright   Copyright (c) 2009 - 2010, Gobierno Bolivariano de Aragua.
 * @link                http://www.aragua.gob.ve
 * @filesource		./application/libraries/_menu.php
 */
// ------------------------------------------------------------------------

/**
 * Clase _menu
 * 
 * Generacion del menu
 * 
 * @package		GBA
  * @category    principal
 * @author	Jean Mendoza
 * @fecha	25-11-2010
 */
class _menu{

    private $CI;
    private $db;
    private $userdata;
    private $itemsMenuString;

    function  __construct() {
        $this->CI=& get_instance();
        $this->db=$this->CI->db;
        $this->userdata=array();

       /* $this->itemsMenuString="<li><a href='perfil' ><span>Perfil</span></a></li>
            
<li><a href='cont' ><span>Perfil</span></a></li>

<li><a href='koko' ><span>Koko </span></a></li>
";*/
        
    }
    
    /**
    //GENERAR EL MENU PARA CUALQUIER SISTEMA
    */
//---------------------------------------------------------------------------------------------------------------------------------

      public  function CrearMaquetadoMenu($condicion_groups=NULL){
	  if(!$condicion_groups)
          $this->userdata=$this->CI->session->userdata('userLogin');
	  else
	    {
	      $this->userdata["grupo_id"]=$condicion_groups;
	      $this->userdata["recibido"]=true;
	    }	
          //variables locales a la funcion
          foreach($this->ObternerItemsPadres() as $valor)
              $this->constructItem($valor);
          return $this->itemsMenuString;
      }//fin obterner_sistemas 

      private function   constructItem($item)
      {
	$attr_span="";
          $url=(isset($this->userdata["recibido"]))?'#':site_url($item["url"]);
	  if($url==="#")
	    $attr_span="id='".$item["id"]."'  grupo='".$item["grupo"]."' class='custom_menu'";
          $hijos=$this->ObternerHijos($item["id"]);
                if(count($hijos))
                {
                  $this->itemsMenuString.="<li><a href='".$url."' class='parent'><span ".$attr_span.">".$item["nombre"]."</span></a>
                                            <div><ul>";
                          foreach($hijos as $valorH)
                                $this->constructItem($valorH);
                    $this->itemsMenuString.="</ul></div></li>";                          
                }
                else
                    $this->itemsMenuString.="<li><a href='".$url."' ><span ".$attr_span." >".$item["nombre"]."</span></a></li>";

      }
      
       private function   ObternerItemsPadres(){
                $this->db->from('menu');
                //if($this->userdata["grupo_id"]!=1)
                $this->db->like('grupo',",".$this->userdata["grupo_id"].","); 
                $this->db->where(array('parent is null'=>null,"delete <>"=>1));
                return  $this->db->get()->result_array();
      }//fin padres      

       private function   ObternerHijos($id_parent){
                $this->db->from('menu');
                $this->db->like('grupo',",".$this->userdata["grupo_id"].","); 
                $this->db->where(array('parent'=>$id_parent,"delete <>"=>1));
                return  $this->db->get()->result_array();
      }//fin hijos
      //            
//*********************
//fin library
//*********************
}

/** End of file _menu_body.php */        /**
          * Menu_System
          *
          * Genera el menu del sistema.
          *
          * @access             public
          * @param              int       el id del sistema
          * @return             string    el maquetado del menu
/** Location: ./application/libraries/_menu.php */
?>
