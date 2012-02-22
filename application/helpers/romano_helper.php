<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('romano2arabigo'))
{
	function romano2arabigo($valor)
	{
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
}


if ( ! function_exists('arabigo2romano'))
{
	function arabigo2romano($valor){
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
}

if ( ! function_exists('cambia_char'))
{

function cambia_char($str)
    {
    return str_replace(array("Ã’","Ã‰","Ã","Ãš","Ã“","Ã‘","Ã","Ãœ","Ã¡","Ã³","Ã©","Ã¨","Ãº","Ã±","Ã¼","Ã","â€",'“',"\n","\r\n","\r","&aacute;","&eacute;","&iacute;","&oacute;","&uacute;"), array("Ó","É","Í","Ú","Ó","Ñ","Á","Ü","á","ó","é","é","ú","ñ","ü","í","-",'-',"","","","á","é","í","ó","ú"), $str);
     /*$str = strtolower($str);
     $buscar = array('á', 'é', 'í', 'ó', 'ú', 'ñ', 'Ã¡', 'Ã©', 'Ã­', 'Ã³', 'Ãº', 'ä', 'ë', 'ï', 'ö', 'ü', 'Ã¤', 'Ã«', 'Ã¯', 'Ã¶', 'Ã¼', 'Ã', 'Ã‰', 'Ã', 'Ã“', 'Ãš', 'Ã„', 'Ã‹', 'Ã', 'Ã–', 'Ãœ', 'Ã±');
   $repl = array('a', 'e', 'i', 'o', 'u', 'n', 'a',  'e',  'i',  'o',  'u',  'a', 'e', 'i', 'o', 'u', 'a',  'e',  'i',  'o',  'u',  'a',  'e',  'i',  'o',  'u',  'a',  'e',  'i',  'o',  'u',  'n');
   $str = str_replace($buscar, $repl, $str);
   // Añadimos los guiones
   $buscar = array(' ', '&', '\r\n', '\n', '+', '_');
   $str = str_replace($buscar, '-', $str);
   
   
   $buscar = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');
   $repl = array('a', '-', '.');
   $str = preg_replace ($buscar, $repl, $str);
   
        return str_replace(array("Ã’","Ã‰","Ã","Ãš","Ã“","Ã‘","Ã","Ãœ","Ã¡","Ã³","Ã©","Ã¨","Ãº","Ã±","Ã¼","Ã","â€",'“'), array("Ó","É","Í","Ú","Ó","Ñ","Á","Ü","á","ó","é","é","ú","ñ","ü","í","-",'-'), $str);*/
    }

}

/* End of file url_helper.php */
/* Location: ./system/helpers/romano2arabigo_helper.php */