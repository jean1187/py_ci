<?php if(!defined('BASEPATH'))         exit('No direct script access allowed');

class acceso{

    private $CI;
    private $session;

    function __construct()
    {
        $this->CI = & get_instance();
        $this->session=$this->CI->session->userdata("userLogin");
        $this->session["menu"]=$this->CI->session->userdata("menu");
    }
    
      function  seguridad(){
          
                  
        $class_sin_verificar_en_menu=array("login","welcome","mantenimiento");

          //verificando que exista siempre una sesion
if($this->CI->router->class!="fixtures")
/** 1 */         if($this->CI->router->class!="login" && $this->CI->session->userdata("user")=="" )
                            //redirect("login/restringido");
                            redirect(base_url());
/** 2 */       else if($this->CI->config->item('mantenimiento')  and $this->CI->session->userdata("user")!=""  and !in_array($this->CI->router->class ,array("mantenimiento","login")) && $this->session["grupo_id"]!=1  )
                                redirect("mantenimiento");
/** 3 */          else if($this->CI->session->userdata("user")!="" && in_array($this->CI->router->class ,array("mantenimiento","login")) and $this->CI->router->method!="salir" && !$this->CI->config->item('mantenimiento'))
                            redirect("welcome");
/** 4 */            else if($this->CI->session->userdata("user")!="" && !in_array($this->CI->router->class ,$class_sin_verificar_en_menu) &&  !$this->CI->config->item('mantenimiento'))
                        { 
                              if(!strpos($this->session["menu"],$this->CI->router->class) && !strpos($this->session["url_speciales"], '"'.$this->CI->router->class.'"') && $this->session["grupo_id"]!=1 )
                                redirect("welcome");
                        }//fin de la verficacion si existe la clase en el menu que tengo activo

      }//fin verificar_sesion







}//fin hooks acceso


/* End of file hooks.php */
/* Location: ./system/application/hooks/acceso.php */