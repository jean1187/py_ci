<?php echo  $map['js']; ?>
<script lang="javascript">
    $(document).ready(function(){
        //$( "#dialog:ui-dialog" ).dialog( "destroy" );
        $( "#dialog-modal,#dialog-modif" ).dialog({
	        autoOpen: false,
			height: 'auto',
			width:  'auto',
			modal: true,
			resizable: false
        });
                
        $(".resumen_ficha_map").live("click", function(event){
               $("#nombre_py").text($(this).attr("nom_py"));
			   $("#descr_py").text($(this).attr("descr_py"));
			   $("#monto_py").text($(this).attr("monto_py"));
			   $("#municipio_py").text($(this).attr("muni"));
			   $("#parroquia_py").text($(this).attr("pquia"));			   
			   $( "#dialog-modal" ).dialog("open");	
              event.preventDefault();
            });
			
			//$("#tabs-1").load("nuevo_proyecto/index/true",function(){$("#guardar").hide();$("#articulacionConOtrosEntes,#competencias,#nombre,#descripcion").attr("cols",115);$(".pink").css("width","960px");});		
			
		/*$( "#tabs" ).tabs();	
		$( "#dialog-modif" ).dialog({ width : 1050,position: ["center", 40],buttons: {"Cerrar": function() { $(this).dialog("close"); }, "Guardar": function() { 
                        
                    alert($("form").serialize())
                        }//fin guardar
                        } });*/
		/*$(".modal").click(function(event){
		    
			$( "#tabs" ).tabs("select",0);	
			$.post("proyectos/search_py_modif",{"id_py":this.rel},function(data){
							console.log(data)
			   $.each(data[0],function(id,valor){
			   //alert(id+"-"+valor);
			  elem=document.getElementById(id);
			//alert(elem.type+"-"+elem.tagName)
					//switch(elem.tagName)
                                        switch(elem.type)
					{
                                                case "hidden":
                                                case "text":
						case "textarea":
						  elem.value=valor;
						break;
						case "select-one":
                                                  $("#"+id+" option[value='"+valor+"']").attr("selected","selected");
						  //elem.options[valor].selected=true;
						break;
                                                case "checkbox":
                                                    (valor=="1")?$("#"+id).attr("checked","checked"):$("#"+id).removeAttr("checked");
                                                break;
					}//fin switch
			   });//fin each

			});//fin post
				obj=$(this).parents("tr").children("td");
				console.log($(this).parents("tr").children("td"))
		         
                         $( "#dialog-modif" ).dialog("open");
$("iframe").html("aosakso");
		//	alert($(this).parent());
			event.preventDefault();
		});//fin modal
                */
    });//fin document ready
    
</script>
<style type="text/css">
textarea {
	resize: none;
}
    a{
        text-decoration:none;
    }
.resumen_ficha_map{
    color: #000;
    text-decoration:underline;
}

BODY{font-size:12px; font-family:arial; color:#000;} 
.tabla{border-color:#666 ; background-color: #E3E3E6; font-family: arial; color:#000;} 
.titulo{font-size: 18px; border-width: 0px;border-color: ;  font-family:	Arial, Helvetica, sans-serif, Gadget, sans-serif; color:#000;}
.titulogris{border-color: #000; font-size: 15px; border-width: 1px; background-color: #999 ; font-family: arial; color:#000;}
.etiqueta{ background-color:#CCC; font: Arial Black;}


</style>
<div id="dialog-modif" title="MODIFICACION DEL PROYECTO" style="display:none">
		<div id="tabs">
			<ul>
				<li><a href="#tabs-1">FICHA TECNICA</a></li>
				<li><a href="#tabs-2">CONSEJO FEDEEAL DE GOBIERNO</a></li>
			</ul>
			<div id="tabs-1"></div>
			<div id="tabs-2"></div>
		</div>	
</div>
<div id="dialog-modal" title="DETALLE DEL PROYECTO" style="display:none">
	<center>
	<table width="700" border="0">
      <tr>
        <td ><div align="left"><strong>Nombre del Proyecto</strong></div><div id="nombre_py" align="justify"></div></td>    
      </tr>
     <tr>
       <td ><div align="left"><strong>Descripci&oacute;n del Proyecto</strong></div><div id="descr_py"></div></td>
     </tr>
     <tr>
  
      <td >
      <div align="left"><strong>Municipio</strong></div><div id="municipio_py"></div></td>
      
    </tr>
     <tr>
 
      <td ><div align="left"><strong>Parroquia</strong></div><div id="parroquia_py"></div></td>
      
    </tr>
    
     <tr>
   
      <td ><div align="left"><strong>Monto</strong></div><div id="monto_py"></div></td>
      
    
      
    </tr>
  </table></center>
	
</div>
    
<h1 align="center">Bienvenido(a)  <?php echo $nombre_completo?></h1>
<br />
<p>NOTA: Debido a cambio en la &aacute;rea de inversi&oacute;n del Consejo Federal  de Gobierno &nbsp;deben &nbsp;de volver a seleccionar los campos <br />
  Gracias&hellip;
<table width="200" border="0">
  <tr>
    <td valign="top"> <table width="385" border="1">
  <tr>
    <td width="216" style="background-color:#E3E3E6"><div align="center"></div></td>
    <td width="55" style="background-color:#E3E3E6"><div align="center">N&deg;</div></td>
    <td width="100" style="background-color:#E3E3E6"><div align="center">Bs</div></td>
  </tr>
  <tr>
    <td style="background-color:#F2F2F2"><div align="left"><strong>Total de proyectos </strong></div></td>
    <td><?php echo $total["total_py"]?></td>
    <td><?php echo $total["monto_total"]?></td>
  </tr>
  </table><table width="100%" border="1">
  <tr>
    <td >
      <div align="left"><a href="<?php echo site_url("nuevo_proyecto")?>" ><span style="color:#000"><div align="center"><strong>Nueva Ficha T&eacute;cnica de Proyectos</strong></div>
        
      </span>
      <span style="color:#000">Nota:  Verifique si la ficha a ingresar no se encuentre en la sabana. Al llenar las Fichas para que salga en la sabana debe actualizar esta p&aacute;gina.
</span><span style="color:#F00">haga clic</span></a></div></td>
    </tr>
</table>
<table width="100%" border="1">
  <tr>
    <td>
      <div align="left"><span style="color:#000"><div align="center"><strong>Modificar la Ficha T&eacute;cnica de Proyectos</strong></div></span>Nota: Para modificar la ficha, haga clic en el campo (N&deg; de Proyecto) en la fila a seleccionar de la sabana.
Ir&aacute; al formulario de modificaci&oacute;n donde cambiara los datos por cada campo deseado.
</div></td>
  </tr>
</table>
<!--
<table width="100%" border="1">
  <tr>
    <td>
      <div align="left"><a href="../newproyectos/lista.php" target="_new"><span style="color:#000"><div align="center"><strong>Impresi&oacute;n de la Ficha T&eacute;cnica de Proyectos</strong></div>
      </span> <span style="color:#000">Nota: Para Imprimir la Ficha T&eacute;cnica de Proyecto, se mostrara la sabana con los datos debe hacer clic en el campo del Numero, en la fila a seleccionar de la sabana.. </span><span style="color:#F00">haga clic</span></a></div>
    </td>
  </tr>
</table>
-->
<table width="100%" border="1">
  <tr>
    <td><a href="planinversion/planinv.php"><span style="color:#000"><div align="center"><strong>Plan de Inversi&oacute;n</strong></div></span> <span style="color:#000">Nota: El Plan de Inversi&oacute;n deben ser registrado por est&eacute; formato una sola vez.  </span><span style="color:#F00">haga clic</span></a>
    <br />
    <a href="planinversion/planinmod.php"><span style="color:#000">Para modificar el plan de inversi&oacute;n. </span><span style="color:#F00">haga clic</span></a>
    <!--<br />
    <a href="planinversion/planinvista.php"  target="_new"><span style="color:#000">Si desea visualizar el plan de inversi&oacute;n. </span><span style="color:#F00">haga clic</span></a>
	-->
	</td>
  </tr>
</table>
<table width="100%" border="2">
  <tr>
      <td><div align="center"><?php echo $map["html"]?></div></td>
  </tr>
  
</table>

</td>
    <td valign="top">
    ------------------------------------------------------------------------------
    <strong>LISTA DE PROYECTOS PROPUESTA AL FCI PARA 2012</strong>
    <table width="385" border="1">
  <tr>
    <td colspan="3" style="background-color:#E3E3E6"><div align="center"><strong>Resumen del Plan de Inversi&oacute;n 2012 por FCI</strong> </div></td>
    </tr>
  <tr>
    <td width="216" style="background-color:#E3E3E6"><div align="center">Descripci&oacute;n</div></td>
    <td width="55" style="background-color:#E3E3E6"><div align="center">N&deg;</div></td>
    <td width="100" style="background-color:#E3E3E6"><div align="center">Bs</div></td>
  </tr>
  	<?php 
	    $total_py_fci=0;$monto_total_fci=0;
	        foreach ($PlandeInversion_FCI as $key=>$valor){ ?>
						  <tr>
							<td style="background-color:#F2F2F2"><div align="left"><?php echo  cambia_char($key)?></div></td>
							<td><div align="center">
							   <?php $total_py_fci+=$valor["total_py"]; echo $valor["total_py"]?>
							</div></td>
							<td><div align="right">
								<?php $monto_total_fci+=$valor["monto_total"];  echo $valor["monto_total"]?>
							</div></td>
						  </tr>
	<?php }?>
  
  <tr>
    <td style="background-color:#E3E3E6"><hR />
      <div align="left">Total</div></td>
    <td ><hR /><div align="center">
        <?php echo $total_py_fci?>     
    </div></td>
    <td><hR align="right" />
      <div align="right">
        <?php echo $monto_total_fci?>
      </div></td>
  </tr>
</table>

<TABLE width="2053" border="">
<TR class="tabla">
                <td width="50"><div align="center">N&deg; de Proyecto</div></td>
                <td width="122"><div align="center"><span style="color:#F00">Observaci&oacute;n de la Direcci&oacute;n de Proyectos</span></div></td>
                <td width="126"><div align="center">Nombre del Proyecto</div></td>
                <td width="120"><div align="center">&iquest; Qu&eacute; &Aacute;rea del Plan de Desarrollo se Apalancar&aacute; con este Plan de Inversi&oacute;n ?</div></td>
                <td width="152"><div align="center"> Responsable</div></td>
                <td width="111"><div align="center">Descripci&oacute;n del Proyecto</div></td>
                <td width="77"><div align="center">Etapa del Proyecto</div></td>
                <td width="109"><div align="center">Area de Inversi&oacute;n</div></td>
                <td width="122"><div align="center"> Responsable</div></td>
                <td width="100"><div align="center">Contactos</div></td>
                <td width="125"><div align="center">Localizaci&oacute;n</div></td>
                <td width="453"><div align="center">Estrategias</div></td>
                <td width="66"><div align="center">Impacto Social</div></td>
                <td width="75"><div align="center">Avance </div></td>
                <td width="126"><div align="center">Articulaci&oacute;n con otros Entes</div></td>
        </TR>
      
          

        <?php  
				   
				   foreach ($ListaPlandeInversion_FCI as $key=>$valor) { ?> 
					 <TR valign="top">
								<td height="99" colspan='1' ><div class="scrollv1">
									  <div align="center"><a href="<?php echo site_url("modificarProyecto/".$valor["id"])?>" rel="<?php echo $valor["id"]?>" class="modal" title="hacer clip"><span style="color:#F00"><?php echo $valor["id"]?></span></a></div>
									</div></td>
								<td colspan='1' ><div class="scrollv1"><?php echo cambia_char($valor["nota"]) ?></div></td>
								<td colspan='1' ><div class="etiqueta">Nombre:</div>  <div class="scrollv"><?php echo cambia_char($valor["nopro"] )?></div><hr /><div class="etiqueta">Monto:</div>
								  <div class="scrollv1">
								<?php echo number_format($valor["monto"], 2, ',', '.'); ?>
								  </div><hr />
								  <div class="etiqueta">Tiempo de<br />Ejecuci&oacute;n:</div>
								  <div class="scrollv"><?php echo $valor["tiempo"]?> meses</div><hr />
								  <div class="etiqueta">Poblaci&oacute;n<br /> Beneficiada</div>
								  <div class="scrollv"><?php echo $valor["pobl"]?></div></td>
								<td colspan='1' ><div class="scrollv"><?php echo $valor["lineaestada"]?></div></td>
								<td colspan='1' ><div class="etiqueta">Organismo:</div>
								  <div class="scrollv"><?php echo cambia_char($valor["organ"]) ?></div><hr />
								<div class="etiqueta">Ente Ejecutor:</div><div class="scrollv"><?php echo cambia_char($valor["ejecu"]) ?></div></td>
								<td colspan='1' ><div class="scrollv"><?php echo cambia_char($valor["descr"]) ?></div></td> 
								<td colspan='1' ><div class="etiqueta">Etapa:</div>
								  <div class="scrollv">
								  <?php if($valor["etapa1"]) echo "Preinversi&oacute;n<br>";if($valor["etapa2"]) echo "Proyecto Nuevo<br>";if($valor["etapa3"]) echo "Ampliaci&oacute;n o Modificaci&oacute;n<br>";if($valor["etapa4"]) echo "Culminaci&oacute;n<br>"; ?></div>
								  <hr /><div class="etiqueta">Fase:</div><div class="scrollv">
									<?php echo arabigo2romano($valor["fase"])?></div></td> 
								<td colspan='1' ><div class="etiqueta">Area:</div>
								  <div class="scrollv"><?php echo $valor["area"]?></div><hr />
								  <div class="etiqueta">Categoria:</div>
								  <div class="scrollv"><?php echo $valor["categoria"]?></div><hr />
								  <div class="etiqueta">Tipo:</div>
								  <div class="scrollv"><?php echo $valor["tipo_py"]?></div></td>
								<td colspan='1' ><div class="etiqueta">Nombre:</div>
								  <div class="scrollv"><?php echo cambia_char($valor["norespro"])?></div><hr />
								  <div class="etiqueta">Unidad:</div>
								  <div class="scrollv"><?php echo cambia_char($valor["unidad"])?></div><hr />
								  <div class="etiqueta">Cargo:</div>
								  <div class="scrollv"><?php echo $valor["cargo"]?></div></td>
								<td colspan='1' ><div class="etiqueta">Correo:</div>
								  <div class="scrollv"><?php echo $valor["correo"]?></div><hr />
								  <div class="etiqueta">Tel&eacute;fono:</div>
								  <div class="scrollv"><?php echo $valor["telf"]?></div><hr />
								  <div class="etiqueta">Fax:</div>
								  <div class="scrollv"><?php echo $valor["fax"]?></div></td>
								<td colspan='1' ><div class="etiqueta">Municipio:</div>
								  <div class="scrollv"><?php echo $valor["municipio"]?></div><hr />
								  <div class="etiqueta">Parroquia:</div>
								  <div class="scrollv"><?php echo $valor["parroquia"]?></div><hr />
								  <div class="etiqueta">Comunidad:</div>
								  <div class="scrollv"><?php echo cambia_char($valor["cocomu"])?></div></td>
								<td colspan='1' ><div class="etiqueta">Directriz</div>
								  <div class="scrollv"><?php echo $valor["lineas"]?></div><hr />
								  <div class="etiqueta">Objetivo:</div>
								  <div class="scrollv"><?php echo $valor["objedos"]?></div><hr />
								  <div class="etiqueta">Estrategia:</div>
								  <div class="scrollv"><?php echo $valor["estrados"]?></div><hr />
								  <div class="etiqueta">Pol&iacute;tica</div>
								  <div class="scrollv"><?php echo $valor["polidos"]?></div></td>
								<td colspan='1' ><div class="etiqueta">Impacto</div>
								<div class="scrollv"><?php echo $valor["impsoc"]?></div><hr />
								<div class="etiqueta">Empleos<br />Directos</div>
								<div class="scrollv"><?php echo $valor["empdirec"]?></div>
								<hr />
								<div class="etiqueta">Empleos<br />Indirectos</div>
								<div class="scrollv"><?php echo $valor["empindi"]?></div></td>
								<td colspan='1' ><div class="etiqueta">F&iacute;sico</div>
								  <div class="scrollv"><?php echo $valor["avafisico"]?></div><hr />
								  <div class="etiqueta">Financiero:</div>
								  <div class="scrollv"><?php echo $valor["avafinanc"]?></div></td>
								<td colspan='1' ><div class="etiqueta">Articulaci&oacute;n:</div>
								  <div class="scrollv"><?php echo $valor["articu"]?></div><hr />
								  <div class="etiqueta">Competencias a<br />Transferir</div>
								  <div class="scrollv1"><?php echo cambia_char($valor["compone"])?></div></td>
					</TR>
           <?php }    ?> 
                    
</TABLE>
------------------------------------------------------------------------------
<strong>LISTA DE PROYECTOS PROPUESTA PARA EL SITUADO  PARA 2012</strong>
<table width="385" border="0">
  <tr>
    <td colspan="3" style="background-color:#E3E3E6"><div align="center"><strong>Resumen del Plan de Inversi&oacute;n 2012 por Situado</strong>  </div></td>
    </tr>
  <tr>
    <td width="216" style="background-color:#E3E3E6"><div align="center">Descripci&oacute;n</div></td>
    <td width="55" style="background-color:#E3E3E6"><div align="center">N&deg;</div></td>
    <td width="100" style="background-color:#E3E3E6"><div align="center">Bs</div></td>
  </tr>

  <tr>
    <td style="background-color:#F2F2F2"><div align="left">Total de Proyectos </div></td>
    <td><div align="center">
      <?php echo  number_format($m_situado["total"], 2, ',', '.')?> 
      </div></td>
    <td><div align="right">
      <?php echo number_format($m_situado["monto"], 2, ',', '.')?>
      </div></td>
  </tr>
  <?php if($m_situado["total"]!=0){?>
</table>
      <TABLE border="">
<TR class="tabla">
                <td width="50"><div align="center">N&deg; de Proyecto</div></td>
                <td width="122"><div align="center"><span style="color:#F00">Observaci&oacute;n de la Direcci&oacute;n de Proyectos</span></div></td>
                <td width="126"><div align="center">Nombre del Proyecto</div></td>
                <td width="120"><div align="center">&iquest; Qu&eacute; &Aacute;rea del Plan de Desarrollo se Apalancar&aacute; con este Plan de Inversi&oacute;n ?</div></td>
                <td width="152"><div align="center"> Responsable</div></td>
                <td width="111"><div align="center">Descripci&oacute;n del Proyecto</div></td>
                <td width="77"><div align="center">Etapa del Proyecto</div></td>
                <td width="109"><div align="center">Area de Inversi&oacute;n</div></td>
                <td width="122"><div align="center"> Responsable</div></td>
                <td width="100"><div align="center">Contactos</div></td>
                <td width="125"><div align="center">Localizaci&oacute;n</div></td>
                <td width="453"><div align="center">Estrategias</div></td>
                <td width="66"><div align="center">Impacto Social</div></td>
                <td width="75"><div align="center">Avance </div></td>
                <td width="126"><div align="center">Articulaci&oacute;n con otros Entes</div></td>
        </TR>
		                   <?php  
				   
				   foreach ($ListaPlandeInversion_Situado as $key=>$valor) { ?> 
					 <TR valign="top">
								<td height="99" colspan='1' ><div class="scrollv1">
									  <div align="center"><a href="<?php echo site_url("modificarProyecto/".$valor["id"])?>" rel="<?php echo $valor["id"]?>" class="modal" title="hacer clip"><span style="color:#F00"><?php echo $valor["id"]?></span></a></div>
									</div></td>
								<td colspan='1' ><div class="scrollv1"><?php echo cambia_char($valor["nota"]) ?></div></td>
								<td colspan='1' ><div class="etiqueta">Nombre:</div>  <div class="scrollv"><?php echo cambia_char($valor["nopro"] )?></div><hr /><div class="etiqueta">Monto:</div>
								  <div class="scrollv1">
								<?php echo number_format($valor["monto"], 2, ',', '.'); ?>
								  </div><hr />
								  <div class="etiqueta">Tiempo de<br />Ejecuci&oacute;n:</div>
								  <div class="scrollv"><?php echo $valor["tiempo"]?> meses</div><hr />
								  <div class="etiqueta">Poblaci&oacute;n<br /> Beneficiada</div>
								  <div class="scrollv"><?php echo $valor["pobl"]?></div></td>
								<td colspan='1' ><div class="scrollv"><?php echo $valor["lineaestada"]?></div></td>
								<td colspan='1' ><div class="etiqueta">Organismo:</div>
								  <div class="scrollv"><?php echo cambia_char($valor["organ"]) ?></div><hr />
								<div class="etiqueta">Ente Ejecutor:</div><div class="scrollv"><?php echo cambia_char($valor["ejecu"]) ?></div></td>
								<td colspan='1' ><div class="scrollv"><?php echo cambia_char($valor["descr"]) ?></div></td> 
								<td colspan='1' ><div class="etiqueta">Etapa:</div>
								  <div class="scrollv">
								  <?php if($valor["etapa1"]) echo "Preinversi&oacute;n<br>";if($valor["etapa2"]) echo "Proyecto Nuevo<br>";if($valor["etapa3"]) echo "Ampliaci&oacute;n o Modificaci&oacute;n<br>";if($valor["etapa4"]) echo "Culminaci&oacute;n<br>"; ?></div>
								  <hr /><div class="etiqueta">Fase:</div><div class="scrollv">
									<?php echo arabigo2romano($valor["fase"])?></div></td> 
								<td colspan='1' ><div class="etiqueta">Area:</div>
								  <div class="scrollv"><?php echo $valor["area"]?></div><hr />
								  <div class="etiqueta">Categoria:</div>
								  <div class="scrollv"><?php echo $valor["categoria"]?></div><hr />
								  <div class="etiqueta">Tipo:</div>
								  <div class="scrollv"><?php echo $valor["tipo_py"]?></div></td>
								<td colspan='1' ><div class="etiqueta">Nombre:</div>
								  <div class="scrollv"><?php echo cambia_char($valor["norespro"])?></div><hr />
								  <div class="etiqueta">Unidad:</div>
								  <div class="scrollv"><?php echo cambia_char($valor["unidad"])?></div><hr />
								  <div class="etiqueta">Cargo:</div>
								  <div class="scrollv"><?php echo $valor["cargo"]?></div></td>
								<td colspan='1' ><div class="etiqueta">Correo:</div>
								  <div class="scrollv"><?php echo $valor["correo"]?></div><hr />
								  <div class="etiqueta">Tel&eacute;fono:</div>
								  <div class="scrollv"><?php echo $valor["telf"]?></div><hr />
								  <div class="etiqueta">Fax:</div>
								  <div class="scrollv"><?php echo $valor["fax"]?></div></td>
								<td colspan='1' ><div class="etiqueta">Municipio:</div>
								  <div class="scrollv"><?php echo $valor["municipio"]?></div><hr />
								  <div class="etiqueta">Parroquia:</div>
								  <div class="scrollv"><?php echo $valor["parroquia"]?></div><hr />
								  <div class="etiqueta">Comunidad:</div>
								  <div class="scrollv"><?php echo cambia_char($valor["cocomu"])?></div></td>
								<td colspan='1' ><div class="etiqueta">Directriz</div>
								  <div class="scrollv"><?php echo $valor["lineas"]?></div><hr />
								  <div class="etiqueta">Objetivo:</div>
								  <div class="scrollv"><?php echo $valor["objedos"]?></div><hr />
								  <div class="etiqueta">Estrategia:</div>
								  <div class="scrollv"><?php echo $valor["estrados"]?></div><hr />
								  <div class="etiqueta">Pol&iacute;tica</div>
								  <div class="scrollv"><?php echo $valor["polidos"]?></div></td>
								<td colspan='1' ><div class="etiqueta">Impacto</div>
								<div class="scrollv"><?php echo $valor["impsoc"]?></div><hr />
								<div class="etiqueta">Empleos<br />Directos</div>
								<div class="scrollv"><?php echo $valor["empdirec"]?></div>
								<hr />
								<div class="etiqueta">Empleos<br />Indirectos</div>
								<div class="scrollv"><?php echo $valor["empindi"]?></div></td>
								<td colspan='1' ><div class="etiqueta">F&iacute;sico</div>
								  <div class="scrollv"><?php echo $valor["avafisico"]?></div><hr />
								  <div class="etiqueta">Financiero:</div>
								  <div class="scrollv"><?php echo $valor["avafinanc"]?></div></td>
								<td colspan='1' ><div class="etiqueta">Articulaci&oacute;n:</div>
								  <div class="scrollv"><?php echo $valor["articu"]?></div><hr />
								  <div class="etiqueta">Competencias a<br />Transferir</div>
								  <div class="scrollv1"><?php echo cambia_char($valor["compone"])?></div></td>
					</TR>
           <?php }    ?> 
</TABLE>
<?php } //fin if   ?> 
------------------------------------------------------------------------------
<strong>LISTA DE PROYECTOS PROPUESTA PARA OTRA FUENTE  PARA 2012</strong>
<table width="385" border="0">
  <tr>
    <td colspan="3" style="background-color:#E3E3E6"><div align="center"><strong>Resumen del Plan de Inversi&oacute;n 2012 por otra Fuente</strong>  </div></td>
    </tr>
  <tr>
    <td width="216" style="background-color:#E3E3E6"><div align="center">Descripci&oacute;n</div></td>
    <td width="55" style="background-color:#E3E3E6"><div align="center">N&deg;</div></td>
    <td width="100" style="background-color:#E3E3E6"><div align="center">Bs</div></td>
  </tr>

  <tr>
    <td style="background-color:#F2F2F2"><div align="left">Total de Proyectos </div></td>
    <td><div align="center">
      <?php echo  number_format($otra_fuente["total"], 2, ',', '.')?>
      </div></td>
    <td><div align="right">
      <?php echo  number_format($otra_fuente["monto"], 2, ',', '.')?>
      </div></td>
  </tr>
  
<?php if($otra_fuente["total"]!=0){?>
</table>
      <TABLE border="">
<TR class="tabla">
                <td width="50"><div align="center">N&deg; de Proyecto</div></td>
                <td width="122"><div align="center"><span style="color:#F00">Observaci&oacute;n de la Direcci&oacute;n de Proyectos</span></div></td>
                <td width="126"><div align="center">Nombre del Proyecto</div></td>
                <td width="120"><div align="center">&iquest; Qu&eacute; &Aacute;rea del Plan de Desarrollo se Apalancar&aacute; con este Plan de Inversi&oacute;n ?</div></td>
                <td width="152"><div align="center"> Responsable</div></td>
                <td width="111"><div align="center">Descripci&oacute;n del Proyecto</div></td>
                <td width="77"><div align="center">Etapa del Proyecto</div></td>
                <td width="109"><div align="center">Area de Inversi&oacute;n</div></td>
                <td width="122"><div align="center"> Responsable</div></td>
                <td width="100"><div align="center">Contactos</div></td>
                <td width="125"><div align="center">Localizaci&oacute;n</div></td>
                <td width="453"><div align="center">Estrategias</div></td>
                <td width="66"><div align="center">Impacto Social</div></td>
                <td width="75"><div align="center">Avance </div></td>
                <td width="126"><div align="center">Articulaci&oacute;n con otros Entes</div></td>
        </TR>
       <?php  
				   
				   foreach ($ListaPlandeInversion_OtraFuente as $key=>$valor) { ?> 
					 <TR valign="top">
								<td height="99" colspan='1' ><div class="scrollv1">
									  <div align="center"><a href="<?php echo site_url("modificarProyecto/".$valor["id"])?>" rel="<?php echo $valor["id"]?>" class="modal" title="hacer clip"><span style="color:#F00"><?php echo $valor["id"]?></span></a></div>
									</div></td>
								<td colspan='1' ><div class="scrollv1"><?php echo cambia_char($valor["nota"]) ?></div></td>
								<td colspan='1' ><div class="etiqueta">Nombre:</div>  <div class="scrollv"><?php echo cambia_char($valor["nopro"] )?></div><hr /><div class="etiqueta">Monto:</div>
								  <div class="scrollv1">
								<?php echo number_format($valor["monto"], 2, ',', '.'); ?>
								  </div><hr />
								  <div class="etiqueta">Tiempo de<br />Ejecuci&oacute;n:</div>
								  <div class="scrollv"><?php echo $valor["tiempo"]?> meses</div><hr />
								  <div class="etiqueta">Poblaci&oacute;n<br /> Beneficiada</div>
								  <div class="scrollv"><?php echo $valor["pobl"]?></div></td>
								<td colspan='1' ><div class="scrollv"><?php echo $valor["lineaestada"]?></div></td>
								<td colspan='1' ><div class="etiqueta">Organismo:</div>
								  <div class="scrollv"><?php echo cambia_char($valor["organ"]) ?></div><hr />
								<div class="etiqueta">Ente Ejecutor:</div><div class="scrollv"><?php echo cambia_char($valor["ejecu"]) ?></div></td>
								<td colspan='1' ><div class="scrollv"><?php echo cambia_char($valor["descr"]) ?></div></td> 
								<td colspan='1' ><div class="etiqueta">Etapa:</div>
								  <div class="scrollv">
								  <?php if($valor["etapa1"]) echo "Preinversi&oacute;n<br>";if($valor["etapa2"]) echo "Proyecto Nuevo<br>";if($valor["etapa3"]) echo "Ampliaci&oacute;n o Modificaci&oacute;n<br>";if($valor["etapa4"]) echo "Culminaci&oacute;n<br>"; ?></div>
								  <hr /><div class="etiqueta">Fase:</div><div class="scrollv">
									<?php echo arabigo2romano($valor["fase"])?></div></td> 
								<td colspan='1' ><div class="etiqueta">Area:</div>
								  <div class="scrollv"><?php echo $valor["area"]?></div><hr />
								  <div class="etiqueta">Categoria:</div>
								  <div class="scrollv"><?php echo $valor["categoria"]?></div><hr />
								  <div class="etiqueta">Tipo:</div>
								  <div class="scrollv"><?php echo $valor["tipo_py"]?></div></td>
								<td colspan='1' ><div class="etiqueta">Nombre:</div>
								  <div class="scrollv"><?php echo cambia_char($valor["norespro"])?></div><hr />
								  <div class="etiqueta">Unidad:</div>
								  <div class="scrollv"><?php echo cambia_char($valor["unidad"])?></div><hr />
								  <div class="etiqueta">Cargo:</div>
								  <div class="scrollv"><?php echo $valor["cargo"]?></div></td>
								<td colspan='1' ><div class="etiqueta">Correo:</div>
								  <div class="scrollv"><?php echo $valor["correo"]?></div><hr />
								  <div class="etiqueta">Tel&eacute;fono:</div>
								  <div class="scrollv"><?php echo $valor["telf"]?></div><hr />
								  <div class="etiqueta">Fax:</div>
								  <div class="scrollv"><?php echo $valor["fax"]?></div></td>
								<td colspan='1' ><div class="etiqueta">Municipio:</div>
								  <div class="scrollv"><?php echo $valor["municipio"]?></div><hr />
								  <div class="etiqueta">Parroquia:</div>
								  <div class="scrollv"><?php echo $valor["parroquia"]?></div><hr />
								  <div class="etiqueta">Comunidad:</div>
								  <div class="scrollv"><?php echo cambia_char($valor["cocomu"])?></div></td>
								<td colspan='1' ><div class="etiqueta">Directriz</div>
								  <div class="scrollv"><?php echo $valor["lineas"]?></div><hr />
								  <div class="etiqueta">Objetivo:</div>
								  <div class="scrollv"><?php echo $valor["objedos"]?></div><hr />
								  <div class="etiqueta">Estrategia:</div>
								  <div class="scrollv"><?php echo $valor["estrados"]?></div><hr />
								  <div class="etiqueta">Pol&iacute;tica</div>
								  <div class="scrollv"><?php echo $valor["polidos"]?></div></td>
								<td colspan='1' ><div class="etiqueta">Impacto</div>
								<div class="scrollv"><?php echo $valor["impsoc"]?></div><hr />
								<div class="etiqueta">Empleos<br />Directos</div>
								<div class="scrollv"><?php echo $valor["empdirec"]?></div>
								<hr />
								<div class="etiqueta">Empleos<br />Indirectos</div>
								<div class="scrollv"><?php echo $valor["empindi"]?></div></td>
								<td colspan='1' ><div class="etiqueta">F&iacute;sico</div>
								  <div class="scrollv"><?php echo $valor["avafisico"]?></div><hr />
								  <div class="etiqueta">Financiero:</div>
								  <div class="scrollv"><?php echo $valor["avafinanc"]?></div></td>
								<td colspan='1' ><div class="etiqueta">Articulaci&oacute;n:</div>
								  <div class="scrollv"><?php echo $valor["articu"]?></div><hr />
								  <div class="etiqueta">Competencias a<br />Transferir</div>
								  <div class="scrollv1"><?php echo cambia_char($valor["compone"])?></div></td>
					</TR>
           <?php }    ?> 
           
                    
</TABLE>

<?php  }   //fin if ?> 
------------------------------------------------------------------------------
<strong>LISTA DE PROYECTOS  SIN PROPUESTA</strong>
<table width="385" border="0">
  <tr>
    <td colspan="3" style="background-color:#E3E3E6"><div align="center"><strong>Resumen del Plan de Inversi&oacute;n sin Propuesta</strong>  </div></td>
    </tr>
  <tr>
    <td width="216" style="background-color:#E3E3E6"><div align="center">Descripci&oacute;n</div></td>
    <td width="55" style="background-color:#E3E3E6"><div align="center">N&deg;</div></td>
    <td width="100" style="background-color:#E3E3E6"><div align="center">Bs</div></td>
  </tr>

  <tr>
    <td style="background-color:#F2F2F2"><div align="left">Total de Proyectos </div></td>
    <td><div align="center">
      <?php echo  number_format($SinPropuesta["total"], 2, ',', '.')?>
      </div></td>
    <td><div align="right">
     <?php echo  number_format($SinPropuesta["monto"], 2, ',', '.')?>
      </div></td>
  </tr>
  
</table>
      <TABLE border="">
<TR class="tabla">
                <td width="50"><div align="center">N&deg; de Proyecto</div></td>
                <td width="122"><div align="center"><span style="color:#F00">Observaci&oacute;n de la Direcci&oacute;n de Proyectos</span></div></td>
                <td width="126"><div align="center">Nombre del Proyecto</div></td>
                <td width="120"><div align="center">&iquest; Qu&eacute; &Aacute;rea del Plan de Desarrollo se Apalancar&aacute; con este Plan de Inversi&oacute;n ?</div></td>
                <td width="152"><div align="center"> Responsable</div></td>
                <td width="111"><div align="center">Descripci&oacute;n del Proyecto</div></td>
                <td width="77"><div align="center">Etapa del Proyecto</div></td>
                <td width="109"><div align="center">Area de Inversi&oacute;n</div></td>
                <td width="122"><div align="center"> Responsable</div></td>
                <td width="100"><div align="center">Contactos</div></td>
                <td width="125"><div align="center">Localizaci&oacute;n</div></td>
                <td width="453"><div align="center">Estrategias</div></td>
                <td width="66"><div align="center">Impacto Social</div></td>
                <td width="75"><div align="center">Avance </div></td>
                <td width="126"><div align="center">Articulaci&oacute;n con otros Entes</div></td>
        </TR>
        <?php  
				   
		foreach ($ListaPlandeInversion_SinPropuesta as $key=>$valor) { ?> 
					 <TR valign="top">
								<td height="99" colspan='1' ><div class="scrollv1">
									  <div align="center"><a href="<?php echo site_url("modificarProyecto/".$valor["id"])?>" rel="<?php echo $valor["id"]?>" class="modal" title="hacer clip"><span style="color:#F00"><?php echo $valor["id"]?></span></a></div>
									</div></td>
								<td colspan='1' ><div class="scrollv1"><?php echo cambia_char($valor["nota"]) ?></div></td>
								<td colspan='1' ><div class="etiqueta">Nombre:</div>  <div class="scrollv"><?php echo cambia_char($valor["nopro"] )?></div><hr /><div class="etiqueta">Monto:</div>
								  <div class="scrollv1">
								<?php echo number_format($valor["monto"], 2, ',', '.'); ?>
								  </div><hr />
								  <div class="etiqueta">Tiempo de<br />Ejecuci&oacute;n:</div>
								  <div class="scrollv"><?php echo $valor["tiempo"]?> meses</div><hr />
								  <div class="etiqueta">Poblaci&oacute;n<br /> Beneficiada</div>
								  <div class="scrollv"><?php echo $valor["pobl"]?></div></td>
								<td colspan='1' ><div class="scrollv"><?php echo $valor["lineaestada"]?></div></td>
								<td colspan='1' ><div class="etiqueta">Organismo:</div>
								  <div class="scrollv"><?php echo cambia_char($valor["organ"]) ?></div><hr />
								<div class="etiqueta">Ente Ejecutor:</div><div class="scrollv"><?php echo cambia_char($valor["ejecu"]) ?></div></td>
								<td colspan='1' ><div class="scrollv"><?php echo cambia_char($valor["descr"]) ?></div></td> 
								<td colspan='1' ><div class="etiqueta">Etapa:</div>
								  <div class="scrollv">
								  <?php if($valor["etapa1"]) echo "Preinversi&oacute;n<br>";if($valor["etapa2"]) echo "Proyecto Nuevo<br>";if($valor["etapa3"]) echo "Ampliaci&oacute;n o Modificaci&oacute;n<br>";if($valor["etapa4"]) echo "Culminaci&oacute;n<br>"; ?></div>
								  <hr /><div class="etiqueta">Fase:</div><div class="scrollv">
									<?php echo arabigo2romano($valor["fase"])?></div></td> 
								<td colspan='1' ><div class="etiqueta">Area:</div>
								  <div class="scrollv"><?php echo $valor["area"]?></div><hr />
								  <div class="etiqueta">Categoria:</div>
								  <div class="scrollv"><?php echo $valor["categoria"]?></div><hr />
								  <div class="etiqueta">Tipo:</div>
								  <div class="scrollv"><?php echo $valor["tipo_py"]?></div></td>
								<td colspan='1' ><div class="etiqueta">Nombre:</div>
								  <div class="scrollv"><?php echo cambia_char($valor["norespro"])?></div><hr />
								  <div class="etiqueta">Unidad:</div>
								  <div class="scrollv"><?php echo cambia_char($valor["unidad"])?></div><hr />
								  <div class="etiqueta">Cargo:</div>
								  <div class="scrollv"><?php echo $valor["cargo"]?></div></td>
								<td colspan='1' ><div class="etiqueta">Correo:</div>
								  <div class="scrollv"><?php echo $valor["correo"]?></div><hr />
								  <div class="etiqueta">Tel&eacute;fono:</div>
								  <div class="scrollv"><?php echo $valor["telf"]?></div><hr />
								  <div class="etiqueta">Fax:</div>
								  <div class="scrollv"><?php echo $valor["fax"]?></div></td>
								<td colspan='1' ><div class="etiqueta">Municipio:</div>
								  <div class="scrollv"><?php echo $valor["municipio"]?></div><hr />
								  <div class="etiqueta">Parroquia:</div>
								  <div class="scrollv"><?php echo $valor["parroquia"]?></div><hr />
								  <div class="etiqueta">Comunidad:</div>
								  <div class="scrollv"><?php echo cambia_char($valor["cocomu"])?></div></td>
								<td colspan='1' ><div class="etiqueta">Directriz</div>
								  <div class="scrollv"><?php echo $valor["lineas"]?></div><hr />
								  <div class="etiqueta">Objetivo:</div>
								  <div class="scrollv"><?php echo $valor["objedos"]?></div><hr />
								  <div class="etiqueta">Estrategia:</div>
								  <div class="scrollv"><?php echo $valor["estrados"]?></div><hr />
								  <div class="etiqueta">Pol&iacute;tica</div>
								  <div class="scrollv"><?php echo $valor["polidos"]?></div></td>
								<td colspan='1' ><div class="etiqueta">Impacto</div>
								<div class="scrollv"><?php echo $valor["impsoc"]?></div><hr />
								<div class="etiqueta">Empleos<br />Directos</div>
								<div class="scrollv"><?php echo $valor["empdirec"]?></div>
								<hr />
								<div class="etiqueta">Empleos<br />Indirectos</div>
								<div class="scrollv"><?php echo $valor["empindi"]?></div></td>
								<td colspan='1' ><div class="etiqueta">F&iacute;sico</div>
								  <div class="scrollv"><?php echo $valor["avafisico"]?></div><hr />
								  <div class="etiqueta">Financiero:</div>
								  <div class="scrollv"><?php echo $valor["avafinanc"]?></div></td>
								<td colspan='1' ><div class="etiqueta">Articulaci&oacute;n:</div>
								  <div class="scrollv"><?php echo $valor["articu"]?></div><hr />
								  <div class="etiqueta">Competencias a<br />Transferir</div>
								  <div class="scrollv1"><?php echo cambia_char($valor["compone"])?></div></td>
					</TR>

           <?php }    ?> 
           
                    
</TABLE>

</td>
  </tr>
</table>

</p>
