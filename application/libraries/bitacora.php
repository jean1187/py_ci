<?php
/**
 * Library
 *
 * Library inserta en la bd las operaciones sobre la bd
 *
 * @package             GBA
 * @author              Gobierno Bolivariano de Aragua
 * @copyright   Copyright (c) 2009 - 2010, Gobierno Bolivariano de Aragua.
 * @link                http://www.aragua.gob.ve
 * @filesource		./application/libraries/cargar.php
 */
// ------------------------------------------------------------------------

/**
 * Clase Bitacora
 * 
 * creacion de bitacora de sucessos
 * 
 * @package		GBA
 * @category    principal
 * @author	Jean Mendoza
 * @fecha	12-12-2011
 */
class Bitacora{

    private $CI;
    private $table;

    function  __construct() {
        $this->CI=& get_instance();
        $this->table="bitacora";
    }
	/**
	 * Crear Registro en Bitacora de Sucesos
	 *
	 * Se guardara el responsable de la consulta en base de datos
	 *
	 * @access	public llamado por crear()
	 * @param	nada
	 * @return	nada
	 */  
      public function crear(){
          $session=$this->CI->session->userdata("userLogin");
              if(isset($session["id"]))
                  $this->CI->db->insert($this->table,array("fecha"=>date('Y-m-d H:m:i'),"sql"=>$this->CI->db->last_query(),"users_id_responsable"=>$session["id"]));
      }//fin crear



//*********************
//fin library
//*********************
}
/** End of file bitacora.php */
/** Location: ./application/libraries/bitacora.php */
?>