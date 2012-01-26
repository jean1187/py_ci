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
  
    function array_merge_key_values($array,$campos)
    {
            $retorno=array();
            foreach ($array as $valor)
                $retorno[$valor[$campos[0]]]=utf8_decode ($valor[$campos[1]]);
            return $retorno;
    }//fin array_merge_key_values

    function array_unshift_assoc(&$arr, $key, $val)
    {
        $arr = array_reverse($arr, true);
        $arr[$key] = $val;
        $arr = array_reverse($arr, true);
        return count($arr);
    } 
    
    
			
	/*
	 * Convierte de Romano a Arabigo, retorna un entero.
	 */
	public function romano2arabigo($valor){
		$valromano=array('I'=>1, 'V'=>5,'X'=>10,'L'=>50,'C'=>100,'D'=>500,'M'=>1000);
		$resultado=0;
		if(!empty($valor)){
			for($i=0; $i<strlen($valor)-1; $i++){
				$letra1=substr($valor,$i,1);
				$letra2=substr($valor,$i+1,1);
				if($valromano[$letra1] >= $valromano[$letra2] )
					$resultado+=$valromano[$letra1];
				else
					$resultado-=$valromano[$letra1];
			}
			$letra1=substr($valor,strlen($valor)-1,1);
			$resultado+=$valromano[$letra1];
		}
		return $resultado;
	}
			
	/*
	 * Convierte de Arabigo a Romano, retorna una cadena.
	 */
	public function arabigo2romano($valor){
		$romanos = array('M','CM','D','CD','C','XC','L','XL','X','IX','V','IV','I');
		$valores = array(1000,900,500,400,100,90,50,40,10,9,5,4,1);
		$resultado='';
		for($i=0;$i<count($romanos);$i++){
			while($valor>=$valores[$i]){
				$resultado.=$romanos[$i];
				$valor-=$valores[$i];
			}
		}
		return $resultado;
	}
	
    
//*********************
//fin library
//*********************
}
/** End of file _global.php */
/** Location: ./application/libraries/_global.php */
?>