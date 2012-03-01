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
class _global{

    //private $CI;

    function  __construct() {
       
        
    }
  
    function array_merge_key_values($array,$campos,$cambia_char=true)
    {
            $retorno=array();
            foreach ($array as $valor)
                $retorno[$valor[$campos[0]]]=($cambia_char)?cambia_char($valor[$campos[1]]):$valor[$campos[1]];
            return $retorno;
    }//fin array_merge_key_values

    function array_unshift_assoc(&$arr, $key, $val)
    {
        $arr = array_reverse($arr, true);
        $arr[$key] = $val;
        $arr = array_reverse($arr, true);
        return count($arr);
    } 
    
    function cambia_char($str)
    {
        return str_replace(array("Ã‰","Ã‘","Ãš","Ã“","Ã‘","Ã","Ãœ","Ã¡","Ã³","Ã","Ã©","Ãº"), array("É","Í","Ú","Ó","Ñ","Á","Ü","á","ó","í","é","ú"), $str);
    }
    
//*********************
//fin library
//*********************
}
/** End of file _global.php */
/** Location: ./application/libraries/_global.php */
?>