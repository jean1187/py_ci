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




/* End of file url_helper.php */
/* Location: ./system/helpers/romano2arabigo_helper.php */