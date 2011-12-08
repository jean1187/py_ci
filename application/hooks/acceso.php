<?php if(!defined('BASEPATH'))         exit('No direct script access allowed');

class acceso{

    private $CI;

    function __construct()
    {
        $this->CI = & get_instance();
    }
    
      function  seguridad(){
          
        $class_sin_verificar_en_menu=array("login","welcome");

          //verificando que exista siempre una sesion

/** 1 */         if($this->CI->router->class!="login" && $this->CI->session->userdata("user")=="" )
                            //redirect("login/restringido");
                            redirect(base_url());
/** 2 */       else if($this->CI->session->userdata("user")!="" and $this->CI->config->item('mantenimiento') && $this->CI->router->method!="mantenimiento" and $this->CI->router->method!="salir")
                                redirect("login/mantenimiento");
/** 3 */          else if($this->CI->session->userdata("user")!="" && $this->CI->router->class=="login" and $this->CI->router->method!="salir" && !$this->CI->config->item('mantenimiento'))
                            redirect("welcome");
/** 4 */            else if($this->CI->session->userdata("user")!="" && !in_array($this->CI->router->class ,$class_sin_verificar_en_menu) &&  !$this->CI->config->item('mantenimiento'))
                        { 
                            $session=$this->CI->session->userdata("userLogin");
                              if(!strpos($session["menu"],$this->CI->router->class))
                                redirect("welcome");
                        }//fin de la verficacion si existe la clase en el menu que tengo activo

      }//fin verificar_sesion







}//fin hooks acceso


/* End of file hooks.php */
/* Location: ./system/application/hooks/acceso.php */