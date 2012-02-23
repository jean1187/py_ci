<?php echo br(2)?>

<script type="text/javascript" src="/js/controllers/<?=$class?>/accion_consejo_federal.js"></script>

<table width="100%" border="0">
  <tr>
    <td><img src="<?php echo base_url()?>/imagenes/bicentenario.png" width="100%" height="68" /></td>
  </tr>
</table>
<br />

<table width="100%" border="0">
  <tr>
    <td width="102%" class=" titulo"><div align="center"><strong>1. IDENTIFICACI&Oacute;N DEL PROPONENTE</strong></div></td>
  </tr>
  <tr>
    <td><strong>1.1 Identificaci&oacute;n  de la Entidad Pol&iacute;tico Territorial proponente del proyecto: </strong>
      &nbsp;Gobernaci&oacute;n Bolivariana del  Estado Aragua.
      <hr width="100%">  
     
      <strong>1.2 Domicilio: </strong>Av. Agust&iacute;n &Aacute;lvarez Zerpa cruce con Av. Las Delicias  Edificio Centro Empresarial SAFAV (antigua sede de Corpoindustria) piso 2. Urb.  Las Delicias. Zona Postal 2102. <hr width="100%">
      
        <div align="left"><strong>1.3 Persona Responsable del Proyecto: </strong>
        &nbsp;&nbsp;&nbsp;
        <?php echo (isset($datos["nombre_responsable"]))?$datos["nombre_responsable"]:"" ?>
       
        </div> 
        <br />
        <br /> 
        <strong>1.4 Organismo: </strong>
			 <?php echo (isset($datos["unidad_abscripcion_resp"]))?$datos["unidad_abscripcion_resp"]:"" ?>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Cargo: </strong>
        
		 <?php echo (isset($datos["cargo_responsable"]))?$datos["cargo_responsable"]:"" ?>
        <br /><br />
        <strong>Tel&eacute;fono: </strong>
        
        <?php echo (isset($datos["telefonos_responsable"]))?$datos["telefonos_responsable"]:"" ?>
      &nbsp;&nbsp;&nbsp;&nbsp;<strong>Fax</strong>
       
        <?php echo (isset($datos["fax_resp"]))?$datos["fax_resp"]:"" ?>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <strong>Correo Electr&oacute;nico: </strong>
        
       <?php echo (isset($datos["email_resp"]))?$datos["email_resp"]:"" ?>
       
      
<p>(Indicar el nombre de la persona responsable por la ejecuci&oacute;n del proyecto, organismo de adscripci&oacute;n, cargo que desempe&ntilde;a, tel&eacute;fono y correo electr&oacute;nico)</p>
      <hr width="100%" />
    </td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td colspan="2" class="titulo"><div align="center"><strong>2.  DATOS DEL PROYECTO</strong></div></td>
  </tr>
  
    <td colspan="2"><p><strong>2.1 Nombre del Proyecto: </strong >&nbsp;&nbsp;
      
     <span class="scrolll">
        <?php  echo (isset($datos["nombre"]))?$datos["nombre"]:"" ?>
        </span>
      
    </p>
      <p>(Colocar el nombre del proyecto, como se indic&oacute; en el Plan de Inversi&oacute;n aprobado  por la Secretar&iacute;a del CFG)</p>
      <hr width="100%" />
        <p align="center"><strong>2.2 Ubicaci&oacute;n del Proyecto:</strong></p>
       <p><strong> Municipio</strong>
          <span class="scrolll">
        <?php   echo  (isset($datos["cf_municipio"]))?$datos["cf_municipio"]:"" ?>
        </span>
         &nbsp;&nbsp;
         <strong>Parroquia</strong>&nbsp;&nbsp; <span class="scrolll">
        <?php   echo  (isset($datos["cf_parroquia"]))?$datos["cf_parroquia"]:"" ?>
        </span>&nbsp;&nbsp;
         <strong>Sector o Consejo Comunal</strong>&nbsp;&nbsp; <span class="scrolll">
       <?php   echo  (isset($datos["sector_comunal"]))?$datos["sector_comunal"]:"" ?>
        </span>
         <br /><br />
      <div align="left"><strong>Explique Ubicaci&oacute;n del Proyecto:</strong>&nbsp;&nbsp;<textarea name="explique2"  cols="130" rows="2"  ><?php   echo  (isset($datos["cf_ubicacion"]))?$datos["cf_ubicacion"]:"" ?></textarea></div><br />
        <p>(Identificar la direcci&oacute;n detallada del proyecto.)</p>
        <div align="center"><strong>Coordenada:</strong>&nbsp;&nbsp;&nbsp;&nbsp; <strong>Latitud</strong>
        <span class="scrolll">
        <?php  echo   (isset($datos["latitude"]))?$datos["latitude"]:"" ?>
        </span>&nbsp;&nbsp;
        <strong>Longitud</strong>
        <span class="scrolll">
        <?php echo (isset($datos["longitude"]))?$datos["longitude"]:""?>
        </span></div>
        <hr width="100%" />
       <div align="left"><strong>&Aacute;reas de Inversi&oacute;n</strong>&nbsp;&nbsp;
          <span class="scrolll">
        <?php   echo  (isset($datos["cf_area"]))?$datos["cf_area"]:"" ?>
        </span>
      </div></td>
  </tr>
        <tr>
        <td width="50%"><strong>2.3 Costo del Proyecto: </strong>&nbsp;&nbsp;
          <span class="scrolll">
		  <?php   echo  (isset($datos["monto"]))?number_format($datos["monto"],2,',','.'):"" ?>
        </span>
        </td>
        <td width="50%"><strong>2.4. Duraci&oacute;n del Proyecto:</strong>&nbsp;&nbsp; 
          <span class="scrolll">
        <?php echo (isset($datos["tiempoEstimado"]))?$datos["tiempoEstimado"]:""?>
        </span>&nbsp;&nbsp;Meses.
        </td></tr>
</table>
  <hr width="100%" />
  
<br class="saltopagina" />

  <table width="100%" border="0">
  <tr>
    <td><div align="center" class="titulo"><strong>3.  IDENTIFICACI&Oacute;N DEL PROBLEMA Y JUSTIFICACI&Oacute;N</strong></div></td>
  </tr>
  <tr>
    <td>
	<strong>3.1 Descripci&oacute;n del problema: </strong><br />
   <textarea name="descripcion"  cols="130" rows="4"  ><?php echo (isset($datos["cf_descripcion"]))?$datos["cf_descripcion"]:""?></textarea>
   <p>(Describir detalladamente el problema que presenta la poblaci&oacute;n y que se lograr&iacute;a atender con la ejecuci&oacute;n del proyecto.)</p>
      <hr width="100%">
   <strong> 3.2 Objetivo General: </strong><br />
   <textarea name="objetivogene"  cols="130" rows="4" ><?php echo (isset($datos["cf_objetivogene"]))?$datos["cf_objetivogene"]:""?></textarea>
   <p>(Describir el objetivo general del proyecto.)</p>
    <hr width="100%"> 
    <strong>3.3 Objetivos Espec&iacute;ficos:</strong><br />
    <textarea name="objetivoespe"  cols="130" rows="4"><?php echo (isset($datos["cf_objetivoespe"]))?$datos["cf_objetivoespe"]:""?></textarea>
    <p>(Describir las estrategias y actividades a realizar para lograr el objetivo general.)</p>
    <hr width="100%"> 
    <strong>3.4 Importancia e impacto del proyecto: </strong><br />
    <textarea name="importancia"  cols="130" rows="4" > <?php echo (isset($datos["cf_importancia"]))?$datos["cf_importancia"]:""?></textarea>
    <p>(Explique c&oacute;mo el proyecto contribuir&aacute; a transformar la situaci&oacute;n que confronta la comunidad.)</p>
    <hr width="100%"> 
    <strong>3.5 Poblaci&oacute;n beneficiada por la ejecuci&oacute;n del proyecto: </strong><br />
    <textarea name="poblacionbe"  cols="130" rows="1" ><?php echo (isset($datos["cf_poblacionbe"]))?$datos["cf_poblacionbe"]:""?></textarea>
    <p>(Describir y cuantificar la poblaci&oacute;n beneficiada con el desarrollo del proyecto.)</p>
    <hr width="100%">
    <strong>3.6. Dificultades y Limitaciones del proyecto: </strong><br />
    <textarea name="difilculta"  cols="130" rows="2" ><?php echo (isset($datos["cf_difilculta"]))?$datos["cf_difilculta"]:""?></textarea>
    <p>(Describa las posibles dificultades y limitaciones que se puedan presentar durante la ejecuci&oacute;n del proyecto.)</p>
    </td>
  </tr>
</table>

<hr width="100%" />

<br class="saltopagina" />

<table width="100%" border="0">
  <tr>
    <td><div align="center" class="titulo"><strong>4. IDENTIFICACI&Oacute;N DE LA ETAPA DEL PROYECTO</strong></div></td>
  </tr>
</table>
<table width="100%" border="1" class=" tabla">
  <tr class=" menucontrol">
       <td width="22%"> <div align="center"><strong>ETAPA</strong></div></td>
       <td width="70%"><div align="center"><strong>DEFINICI&Oacute;N</strong></div></td>
    <td width="8%"><div align="center"><strong>SELECCI&Oacute;N</strong></div></td>
  </tr>
  <tr>
  <td><div align='left'><strong>4.1 Preinversi&oacute;n</strong></div></td>
    <td><div align='left'>Se refiere a la fase preliminar para la ejecuci&oacute;n  de un proyecto, que en ocasiones requiere del apoyo econ&oacute;mico previo a su  desarrollo</div></td>

  <td><div align='center'> <strong><?php echo (isset($datos["preinversion"]) && $datos["preinversion"]==1)?"X":""?></strong> </div></td>
   </tr>
  <tr>
  <td><div align='left'><strong>4.2 Proyecto Nuevo</strong></div></td>
    <td><div align='left'>Se refiere a la presentaci&oacute;n de una propuesta de inversi&oacute;n que no ha tenido financiamiento alguno</div></td>

  <td><div align='center'><strong><?php echo (isset($datos["py_new"]) && $datos["py_new"]==1)?"X":""?></strong></div></td>
     </tr>
  <tr>
  <td><div align='left'><strong>4.3 Ampliaci&oacute;n o modificaci&oacute;n</strong></div></td>
    <td><div align='left'>Hace alusi&oacute;n al proyecto que ha sido ejecutado y  posteriormente requiere recursos para su ampliaci&oacute;n o modificaci&oacute;n</div></td>

  <td><div align='center'><strong><?php echo (isset($datos["ampl_modif"]) && $datos["ampl_modif"]==1)?"X":""?></strong></div></td>
  </tr>
  <tr>
  <td><div align='left'><strong>4.4 Culminaci&oacute;n</strong></div></td>
    <td><div align='left'>Es el proyecto que no ha sido ejecutado f&iacute;sicamente  en su totalidad y requiere de recursos para su culminaci&oacute;n</div></td>

  <td><div align='center'><strong><?php echo (isset($datos["cumlinacion"]) && $datos["cumlinacion"]==1)?"X":""?></strong></div></td>
    </tr>
</table>
  <table width="100%" border="0">
  <tr>
    <td><strong>Explique:</strong><br /><textarea name="explique4"  cols="130" rows="4" ><?php echo (isset($datos["cf_explique4"]))?$datos["cf_explique4"]:""?></textarea>
    </td>
  </tr>
</table>
<hr width="100%" />
<br class="saltopagina" />
<table width="100%" border="0">
  <tr>
    <td class="titulo"><div align="center"><strong>5. ELEMENTOS RELACIONADOS CON EL DESARROLLO END&Oacute;GENO Y SOSTENIBLE</strong></div></td>
  </tr>
  <tr>
    <td><p><strong>5.1 Factores de Producci&oacute;n Local</strong></p><br />
      <strong>5.1.1 Fuerza de Trabajo: </strong><br /><textarea name="fuerza"  cols="130" rows="4"><?php echo (isset($datos["cf_fuerza"]))?$datos["cf_fuerza"]:""?></textarea>
      <p>(Fundamentar la presencia de mano de obra calificada, o talento humano para el manejo de la tecnolog&iacute;a, equipos, herramientas y maquinarias en la  zona del desarrollo del proyecto)</p>
    <hr width="100%" />
   <strong> 5.1.2 Adquisici&oacute;n de materia prima en la localidad: </strong><br /><textarea name="admateria"  cols="130" rows="4"  ><?php echo (isset($datos["cf_admateria"]))?$datos["cf_admateria"]:""?></textarea>
   <p>(Se refiere a la obtenci&oacute;n de la materia prima, durante la vida &uacute;til del proyecto, proveniente de la comunidad o comunidades cercanas al espacio de desarrollo del mismo)</p>
    <hr width="100%" />
   <strong> 5.1.3 Adquisici&oacute;n de insumos:</strong><br /><textarea name="adinsumo"  cols="130" rows="4" ><?php echo (isset($datos["cf_adinsumo"]))?$datos["cf_adinsumo"]:""?></textarea>
    <p>(Esta relacionado a la disposici&oacute;n permanente de insumos en el tiempo y cercano a la ubicaci&oacute;n del proyecto)</p>
    <hr width="100%" />
  <strong>  5.1.4 Transferencia de Tecnolog&iacute;a: </strong><br /><textarea name="transtecnologia"  cols="80" rows="4" ><?php echo (isset($datos["cf_transtecnologia"]))?$datos["cf_transtecnologia"]:""?></textarea>
  <p>(Se refiere a indicar en qu&eacute; forma se har&aacute; la transferencia tecnol&oacute;gica con fines de garantizar la operatividad de la empresa y la adecuada aplicaci&oacute;n de &eacute;sta por parte de los ejecutores del proyecto)</p>
    <hr width="100%" />
   <strong> 5.2 Armonizaci&oacute;n con el Ambiente: </strong><br /><textarea name="armonizacion"  cols="130" rows="4" ><?php echo (isset($datos["cf_armonizacion"]))?$datos["cf_armonizacion"]:""?></textarea>
   <p>(Explicar el efecto sobre el ambiente debido a la ejecuci&oacute;n del proyecto (Contaminaci&oacute;n, degradaci&oacute;n del ambiente, utilizaci&oacute;n de los recursos naturales, entre otros) y las medidas para mitigar, prevenir y corregir los posibles impactos)</p> 
    <hr width="100%" />
   <strong> 5.3 Eficiencia en el uso de los recursos: </strong><br /><textarea name="eficiencia"  cols="130" rows="4" ><?php echo (isset($datos["cf_eficiencia"]))?$datos["cf_eficiencia"]:""?></textarea>
    <p>(Uso racional  de los recursos (Financieros, materias primas, costos de producci&oacute;n), en calidad y tiempo)</p>
    <hr width="100%" />
   <strong> 5.4 Redistribuci&oacute;n Social (comunidades del entorno): </strong><br /><textarea name="redistribu"  cols="130" rows="4" ><?php echo (isset($datos["cf_redistribu"]))?$datos["cf_redistribu"]:""?></textarea>
   <p>(A trav&eacute;s de un acta, se debe especificar c&oacute;mo se realizar&aacute; la retribuci&oacute;n a los Consejos Comunales o Comunas u otras organizaciones de base del Poder Popular que habitan en el &aacute;rea de influencia del proyecto)</p>
        <hr width="100%" />
    
    </td>
  </tr>
</table>
<br class="saltopagina" />
<table width="100%" border="0">
  <tr>
    <td class="titulo"><div align="center"><strong>6. INTEGRACI&Oacute;N Y RELACI&Oacute;N CON LOS PLANES DE DESARROLLO</strong></div></td>
  </tr>
</table>
<table width="100%" border="1" class="tabla">
  <tr class=" menucontrol">
    <td width="25%" ><div align="center"><strong>Articulaci&oacute;n con:</strong></div></td>
    <td width="75%"><div align="center"><strong>Especifique la vinculaci&oacute;n del objeto del proyecto  con los Planes de Desarrollo y Distritos Motores de Desarrollo</strong></div></td>
  </tr>
  <tr>
    <td><div align="left"><strong>6.1 Plan Nacional Sim&oacute;n Bol&iacute;var</strong></div></td>
    <td><div align="left">&nbsp;
      <textarea name="plasimon"  cols="100" rows="4" ><?php echo (isset($datos["cf_plasimon"]))?$datos["cf_plasimon"]:""?></textarea></div></td>
  </tr>
  <tr>
    <td><div align="left"><strong>6.2 Plan de Desarrollo Comunal</strong></div></td>
    <td><div align="left">&nbsp;
     <textarea name="plancomunal"  cols="100" rows="4" ><?php echo (isset($datos["cf_plancomunal"]))?$datos["cf_plancomunal"]:""?></textarea>
    </div></td>
  </tr>
  <tr>
    <td><div align="left"><strong>6.3 Plan Municipal de Desarrollo</strong> </div></td>
    <td><div align="left">&nbsp;
     <textarea name="planmunicipal"  cols="100" rows="4" ><?php echo (isset($datos["cf_planmunicipal"]))?$datos["cf_planmunicipal"]:""?></textarea>
    </div></td>
  </tr>
  <tr>
    <td><div align="left"><strong>6.4 Plan Estadal de Desarrollo</strong></div></td>
    <td><div align="left">&nbsp;      
     <textarea name="planestadal"  cols="100" rows="4" ><?php echo (isset($datos["cf_planestadal"]))?$datos["cf_planestadal"]:""?></textarea>    
    </div></td>
  </tr>
  <tr>
    <td><div align="left"><strong>6.5 Integraci&oacute;n con el Distrito Motor de Desarrollo</strong></div></td>
    <td><div align="left">&nbsp;
     <textarea name="integracion"  cols="100" rows="4" ><?php echo (isset($datos["cf_integracion"]))?$datos["cf_integracion"]:""?></textarea>
    </div></td>
  </tr>
</table>
<hr width="100%" />
<table width="100%" border="0">
  <tr>
    <td class="titulo"><div align="center"><strong>7.  EQUILIBRIO TERRITORIAL</strong></div></td>
  </tr>
</table>
<table width="100%" border="1" class="tabla">
  <tr class="menucontrol">
  
    <td width="25%"><div align="center"><strong>7.1 Ubicaci&oacute;n en zonas de mayor &iacute;ndice de pobreza.</strong></div></td>
    <td width="56%"><div align="center"><strong>DEFINICI&Oacute;N</strong></div></td>
    <td width="19%"><div align="center"><strong>SELECCI&Oacute;N</strong></div></td>
  </tr>
   <tr>
    <td><div align="left"><strong>a) Zona Rural Diseminada.</strong></div></td>
    <td><div align="left">Tiene que ver con el desarrollo del proyecto donde  exista menor cantidad de familias en mayor extensi&oacute;n de tierra, tal como lo  establece la Constituci&oacute;n de la Rep&uacute;blica Bolivariana de Venezuela Art. 306</div></td>
	<?php 
	
				$cf_ubica711 = array('name'=>'ubica71','value'=>'1','style'=>'margin:10px','checked'=>(isset($datos["cf_ubica71"]) && $datos["cf_ubica71"]==1)?true:false,);
                 $cf_ubica712 = array('name'=>'ubica71','value'=>'2','checked'=>(isset($datos["cf_ubica71"]) && $datos["cf_ubica71"]==2)?true:false,'style'=>'margin:10px');
                 $cf_ubica713 = array('name'=>'ubica71','value'=>'3','checked'=> (isset($datos["cf_ubica71"])  && $datos["cf_ubica71"]==3)?true:false,'style'=>'margin:10px');
                 $cf_ubica714 = array('name'=>'ubica71','value'=>'4','checked'=> (isset($datos["cf_ubica71"])  && $datos["cf_ubica71"]==4)?true:false,'style'=>'margin:10px');
	?>
    <td><div align="center">
        <?php echo form_radio($cf_ubica711);?>
    </div></td>
  </tr>
  <tr>
    <td><div align="left"><strong>b) Barrios Nuevos.</strong></div></td>
    <td><div align="left">Se refiere al desarrollo del proyecto en  comunidades reci&eacute;n conformadas</div></td>
    <td><div align="center">
        <?php echo form_radio($cf_ubica712);?>
    </div></td>
  </tr>
  <tr>
    <td><div align="left"><strong>c) Barrios Consolidados</strong>.</div></td>
    <td><div align="left">Se refiere al desarrollo del proyecto en  comunidades establecidas que cuentan con algunos servicios b&aacute;sicos</div></td>
    <td><div align="center">
        <?php echo form_radio($cf_ubica713);?>
    </div></td>
  </tr>
  <tr>
    <td><div align="left"><strong>d) Urbanizaciones Consolidadas.</strong></div></td>
    <td><div align="left">Se refiere al desarrollo del proyecto en  urbanizaciones consolidadas que cuenta con los servicios b&aacute;sicos</div></td>
    <td><div align="center">
        <?php echo form_radio($cf_ubica714);?>
    </div></td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td><strong>Explique:</strong><br /><textarea name="explique7"    cols="130" rows="4"><?php echo (isset($datos["cf_explique7"]))?$datos["cf_explique7"]:""?> </textarea></td>
  </tr>
</table>
<hr width="100%" />

<br class="saltopagina" />
<table width="100%" border="1" class="tabla">
  <tr class="menucontrol">
    <td width="18%"><div align="center"><strong>7.2 Densidad Poblacional.</strong></div></td>
    <td width="72%"><div align="center"><strong>DEFINICI&Oacute;N</strong></div></td>
    <td width="10%"><div align="center"><strong>SELECCI&Oacute;N</strong></div></td>
</tr>
	<?php 
				$poblacion72 = array('name'=>'poblacion72','value'=>'1','style'=>'margin:10px','checked'=>(isset($datos["cf_poblacion72"]) && $datos["cf_poblacion72"]==1)?true:false,);
                 $poblacion721 = array('name'=>'poblacion72','value'=>'2','checked'=>(isset($datos["cf_poblacion72"]) && $datos["cf_poblacion72"]==2)?true:false,'style'=>'margin:10px');
	?>
  <tr>
    <td><strong>a) Menor Densidad Poblacional</strong></td>
    <td>Se refiere a la menor concentraci&oacute;n poblacional en  mayor extensi&oacute;n de tierra, tal como lo establece la Constituci&oacute;n de la  Rep&uacute;blica Bolivariana de Venezuela Art. 306</td>
    <td><div align="center">
   <?php echo form_radio($poblacion72);?>
    </div></td>
  </tr>
  <tr>
    <td><strong>b) Mayor Densidad Poblacional</strong></td>
    <td>Se refiere a la mayor concentraci&oacute;n poblacional en  menor extensi&oacute;n de tierra</td>
    <td><div align="center">
   <?php echo form_radio($poblacion721);?>
    </div></td>
  </tr>

</table><table width="100%" border="0">
  <tr>
    <td><strong>Explique:</strong><br /><textarea name="explique72"   id="explique72"  cols="130" rows="4"><?php echo (isset($datos["cf_explique72"]))?$datos["cf_explique72"]:""?> </textarea></td>
  </tr>
</table>

<hr width="100%" />
<table width="100%" border="1" class="tabla">
  <tr class="menucontrol">
    <td width="18%"><div align="center"><strong>7.3 Presencia de poblaci&oacute;n Ind&iacute;gena en la Zona.</strong></div></td>
    <td width="72%"><div align="center"><strong>DEFINICI&Oacute;N</strong></div></td>
    <td width="10%"><div align="center"><strong>SELECCI&Oacute;N</strong></div></td>
  </tr> 
  	<?php 
				$indigena73 = array('name'=>'indigena73','value'=>'1','style'=>'margin:10px','checked'=>(isset($datos["cf_indigena73"]) && $datos["cf_indigena73"]==1)?true:false,);
                 $indigena731 = array('name'=>'indigena73','value'=>'2','checked'=>(isset($datos["cf_indigena73"]) && $datos["cf_indigena73"]==2)?true:false,'style'=>'margin:10px');
	?>
  <tr>
    <td><div align='left'><strong>a) Incorporaci&oacute;n de la poblaci&oacute;n ind&iacute;gena al  proyecto (Formulaci&oacute;n)</strong></div></td>
    <td><div align='left'>Fomenta la participaci&oacute;n protag&oacute;nica de las  poblaciones ind&iacute;genas en la formulaci&oacute;n de los proyectos presentados, conjuntamente con el apoyo del Ejecutivo Nacional, tal como lo establece la  Constituci&oacute;n de la Rep&uacute;blica Bolivariana de Venezuela Art. 123</div></td>
    <td><div align="center">
<?php echo form_radio($indigena73);?>
    </div></td>
  </tr>
  <tr>
    <td><div 'align=left'><strong>b) Impacto socioecon&oacute;mico en la calidad de vida de  la poblaci&oacute;n ind&iacute;gena (Ejecuci&oacute;n y seguimiento)</strong></div></td>
    <td><div align='left'>Fomenta el fortalecimiento de las poblaciones  ind&iacute;genas en la Ejecuci&oacute;n y Seguimiento de los proyectos, tal como lo establece  la Constituci&oacute;n de la Rep&uacute;blica Bolivariana de Venezuela Art. 123</div></td>
    <td><div align="center">
<?php echo form_radio($indigena731);?>
    </div></td>
  </tr>
</table>
</table><table width="100%" border="0">
  <tr>
    <td><strong>Explique:</strong><br /><textarea name="explique73"   id="explique73"  cols="130" rows="4"> <?php echo (isset($datos["cf_explique73"]))?$datos["cf_explique73"]:""?></textarea></td>
  </tr>
  

<hr width="100%" />
<table width="100%" border="1" class="tabla">
  <tr class="menucontrol">
    <td width="19%" ><div align="left"><strong>7.4 Desarrollo de Infraestructura y Servicios  B&aacute;sicos.</strong></div></td>
    <td width="71%"><div align="center"><strong>DEFINICI&Oacute;N</strong></div></td>
    <td width="10%"><div align="center"><strong>SELECCI&Oacute;N</strong></div></td>
  </tr>
    	<?php 
				$servicios74 = array('name'=>'servicios74','value'=>'1','style'=>'margin:10px','checked'=>(isset($datos["cf_servicios74"]) && $datos["cf_servicios74"]==1)?true:false,);
                 $servicios741 = array('name'=>'servicios74','value'=>'2','checked'=>(isset($datos["cf_servicios74"]) && $datos["cf_servicios74"]==2)?true:false,'style'=>'margin:10px');
	?>
  <tr>
    <td><div align='left'><strong>a) Existencia de Servicios B&aacute;sicos.</strong></div></td>
    <td><div align='left'>Se refiere al desarrollo de proyectos en &aacute;reas que  cuentan con: Aguas Blancas, Aguas Servidas, Electricidad, Gas, Aseo, Tecnolog&iacute;a  y Comunicaciones y Correo, tal como lo establece la Constituci&oacute;n de la Rep&uacute;blica  Bolivariana de Venezuela Art. 82 - 83</div></td>
    <td><div align="center">
<?php echo form_radio($servicios74);?>
    </div></td>
  </tr>
  <tr>
    <td><div align='left'><strong>b) Inexistencia de Servicios B&aacute;sicos.</strong></div></td>
    <td><div align='left'>Se refiere al desarrollo de servicios b&aacute;sicos en  &aacute;reas que no cuentan con: Aguas Blancas, Aguas Servidas, Electricidad, Gas,  Aseo, Tecnolog&iacute;a y Comunicaciones y Correo, tal como lo establece la  Constituci&oacute;n de la Rep&uacute;blica Bolivariana de Venezuela Art. 82 - 83</div></td>
    <td><div align="center">
<?php echo form_radio($servicios741);?>
    </div></td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td><strong>Explique:</strong><br /><textarea name="explique74"  cols="130" rows="4"><?php echo (isset($datos["cf_explique74"]))?$datos["cf_explique74"]:""?></textarea></td>
  </tr>
</table>


<br class="saltopagina" />
<table width="100%" border="0">
  <tr>
    <td><strong>7.5 Integraci&oacute;n de  proyectos entre la Entidad Pol&iacute;tico Territorial y las Organizaciones de Base  del Poder Popular y Distritos Motores de Desarrollo:</strong><br /><textarea name="integar75"  cols="130" rows="4" ><?php echo (isset($datos["cf_integar75"]))?$datos["cf_integar75"]:""?></textarea>
    <p>(Se refiere a la articulaci&oacute;n que debe existir durante la formulaci&oacute;n, ejecuci&oacute;n y seguimiento de los proyectos entre la Entidad Pol&iacute;tico Territorial y las Organizaciones de Base del Poder Popular Sociedad Organizada y Distritos Motores de Desarrollo, seg&uacute;n lo establecido en la Ley Org&aacute;nica del Consejo Federal de Gobierno y su Reglamento)</p></td>
  </tr>
</table>
<hr width="100%" />
    	<?php 
				$productiva81 = array('name'=>'productiva81','value'=>'1','style'=>'margin:10px','checked'=>(isset($datos["cf_productiva81"]) && $datos["cf_productiva81"]==1)?true:false,);
                $productiva812 = array('name'=>'productiva81','value'=>'2','checked'=>(isset($datos["cf_productiva81"]) && $datos["cf_productiva81"]==2)?true:false,'style'=>'margin:10px');
                $productiva813 = array('name'=>'productiva81','value'=>'3','checked'=>(isset($datos["cf_productiva81"]) && $datos["cf_productiva81"]==3)?true:false,'style'=>'margin:10px');
	?>
<table width="100%" border="0">
  <tr>
    <td class="titulo"><div align="center"><strong>8. REDES Y CADENAS PRODUCTIVAS</strong></div></td>
  </tr>
</table>
<table width="100%" border="1" class="tabla">
  <tr class="menucontrol">
    <td width="20%"><div align="left"><strong>8.1 Articulaci&oacute;n con toda la cadena productiva.</strong></div></td>
    <td width="70%"><div align="center"><strong>DEFINICI&Oacute;N</strong></div></td>
    <td width="10%"><div align="center"><strong>SELECCI&Oacute;N</strong></div></td>
  </tr>
  <tr>
    <td><div align="left"><strong>a) Producci&oacute;n primaria.</strong></div></td>
    <td><div align="left">Se refiere a la materia prima necesaria para el  desarrollo del proyecto</div></td>
    <td><div align="center">
<?php echo form_radio($productiva81);?>
    </div></td>
  </tr>
  <tr>
    <td><div align="left"><strong>b) Transformaci&oacute;n.</strong></div></td>
    <td><div align="left">Se refiere a la transformaci&Oacute;n de la materia prima  en productos terminados</div></td>
    <td><div align="center">
<?php echo form_radio($productiva812);?>
    </div></td>
  </tr>
  <tr>
    <td><div align="left"><strong>c) Distribuci&oacute;n y Colocaci&oacute;n.</strong></div></td>
    <td><div align="left">Hace alusi&oacute;n a la colocaci&oacute;n del producto final en  las redes de distribuci&oacute;n del Estado</div></td>
    <td><div align="center">
<?php echo form_radio($productiva813);?>
    </div></td>
  </tr>
 
</table>
<table width="100%" border="0">
  <tr>
    <td><strong>Explique:</strong><br /><textarea name="explique8"  cols="130" rows="4" ><?php echo (isset($datos["cf_explique8"]))?$datos["cf_explique8"]:""?></textarea></td>
  </tr>
</table>
<hr width="100%" />


<table width="100%" border="0">
  <tr>
    <td><strong>8.2 Impulso a la sustituci&oacute;n de importaciones:</strong><br />
      <textarea name="impulso82"  cols="130" rows="4"  ><?php echo (isset($datos["cf_impulso82"]))?$datos["cf_impulso82"]:""?></textarea>
    <p>(Tiene como objetivo fomentar la producci&oacute;n interna venezolana con el fin de lograr la mayor independencia econ&oacute;mica)</p>
<hr width="100%" />

    <strong>8.3 Impulso a las exportaciones: <br />
      <textarea name="impulso83"  cols="130" rows="4"  ><?php echo (isset($datos["cf_impulso83"]))?$datos["cf_impulso83"]:""?></textarea>
    </strong>
    <p>(Se refiere a promover la exportaci&oacute;n de nuestros productos en aras de contribuir con el desarrollo de otros pa&iacute;ses, as&iacute; como diversificar los ingresos de nuestro pa&iacute;s)</p></td>
  </tr>
</table>
<hr width="100%" />

<br class="saltopagina" />

<table width="100%" border="0">
  <tr>
    <td class="titulo"><div align="center"><strong>9. ENFOQUE DE G&Eacute;NERO</strong></div></td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td><strong>9.1 Participaci&oacute;n laboral de la mujer en el proyecto:  </strong><br />
      <textarea name="parlaboral91"  cols="130" rows="4"  ><?php echo (isset($datos["cf_parlaboral91"]))?$datos["cf_parlaboral91"]:""?></textarea>
   <p>(Iincentivar la participaci&oacute;n de la mujer en el desarrollo de los proyectos, seg&uacute;n lo establecido en la Constituci&oacute;n de la Rep&uacute;blica Bolivariana de Venezuela Art. 88 y la Ley Aprobatoria de la Convenci&oacute;n para la eliminaci&oacute;n de todas las formas de discriminaci&oacute;n contra la Mujer)</p>
 
<hr width="100%" />
<strong>9.2 Participaci&oacute;n de la mujer en la direcci&oacute;n y  toma de decisiones:</strong><br />
      <textarea name="pardireccion92"  cols="130" rows="4"><?php echo (isset($datos["cf_pardireccion92"]))?$datos["cf_pardireccion92"]:""?></textarea>
      <p>(Incentivar la inclusi&oacute;n de la mujer en cargos Socialistas ya sean de direcci&oacute;n y/o gerencia en  todas las fases de ejecuci&oacute;n del proyecto, seg&uacute;n lo establecido en la Constituci&oacute;n de la Rep&uacute;blica Bolivariana de Venezuela Art. 88 y la Ley Aprobatoria de la Convenci&oacute;n para la eliminaci&oacute;n de todas las formas de discriminaci&oacute;n contra la Mujer)</p>
    </td>
  </tr>
</table>
<hr width="100%" />



<table width="100%" border="0">
  <tr>
    <td class="titulo"><div align="center"><strong>10. PODER POPULAR</strong></div></td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td><strong>10.1 Transferencias de Competencias al Poder Popular:</strong><br />
      <textarea name="transferencia101"  cols="130" rows="4"><?php echo (isset($datos["cf_transferencia101"]))?$datos["cf_transferencia101"]:""?></textarea>
      <p>(Se refiere al fortalecimiento del Poder Popular a través de la transferencia de competencias, según lo establecido en la Constitución de la República Bolivariana de Venezuela Art. 70 – 184, la Ley Orgánica del Consejo Federal de Gobierno Art. 7 y su Reglamento Art. 3)</p>
  </tr>
</table>
<hr width="100%" />
<table width="100%" border="1" class="tabla">
 <tr class="menucontrol">
    <td width="20%"><div align="left"><strong>10.2 Articulaci&oacute;n y validaci&oacute;n con los Consejos Comunales.</strong></div></td>
    <td width="70%"><div align="center"><strong>DEFINICI&Oacute;N</strong></div></td>
    <td width="10%"><div align="center"><strong>SELECCI&Oacute;N</strong></div></td>
  </tr>

    	<?php 
				$validaconsejo = array('name'=>'validaconsejo','value'=>'1','style'=>'margin:10px','checked'=>(isset($datos["cf_validaconsejo"]) && $datos["cf_validaconsejo"]==1)?true:false,);
                $validaconsejo1 = array('name'=>'validaconsejo','value'=>'2','checked'=>(isset($datos["cf_validaconsejo"]) && $datos["cf_validaconsejo"]==2)?true:false,'style'=>'margin:10px');
	?>
<tr>
     <td><div align='left'>a) Diagn&oacute;stico Participativo.</div></td>
    <td><div align='left'>Tiene que ver con priorizar las necesidades de la  comunidad con la participaci&oacute;n de sus integrantes, tal como lo establece la Ley  Org&aacute;nica de los Consejos Comunales, Ciclo Comunal Art. 44</div></td>
    <td><div align="center">
<?php echo form_radio($validaconsejo);?>
    </div></td>
  </tr>
  <tr>
    <td><div align='left'>b) Equipos de la Comunidad en la Formulaci&oacute;n,  Ejecuci&oacute;n y Seguimiento del Proyecto.</div></td>
    <td><div align='left'>Se refiere a la incorporaci&oacute;n y compromiso de la  comunidad en la Formulaci&oacute;n, Ejecuci&oacute;n y Seguimiento del Proyecto hasta su  culminaci&oacute;n, tal como lo establece la Ley Org&aacute;nica de los Consejos Comunales  art&iacute;culo 16 - 17</div></td>
    <td><div align="center">
<?php echo form_radio($validaconsejo1);?>
    </div></td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td><strong>Explique:</strong><br /><textarea name="explique10"  cols="130" rows="4" ><?php echo (isset($datos["cf_explique10"]))?$datos["cf_explique10"]:""?></textarea></td>
  </tr>
</table>
<hr width="100%" />

<table width="100%" border="0">
  <tr>
    <td><strong>10.3 Orientaci&oacute;n hacia la conformaci&oacute;n y consolidaci&oacute;n de las comunas: </strong><br />
      <textarea name="consolidacion103"  cols="130" rows="4"  ><?php echo (isset($datos["cf_consolidacion103"]))?$datos["cf_consolidacion103"]:""?></textarea>
      <p>(Se refiere a los proyectos presentados para fomentar la conformaci&oacute;n y consolidaci&oacute;n de las Comunas, seg&uacute;n lo establecido en la Ley Org&aacute;nica de los Consejos Comunales)</p>
  </tr>
</table>
<hr width="100%" />

<br class="saltopagina" />

<table width="100%" border="0">
  <tr>
    <td class="titulo"><div align="center"><strong>11. MODELO DE GESTI&Oacute;N</strong></div></td>
  </tr>
</table>

<table width="100%" border="1" class="tabla">
  <tr class="menucontrol">
    <td width="20%"><div align="left"><strong>11.1 Modela de Gesti&oacute;n Socialista para los proyectos de infraestructura y vivienda.</strong></div></td>
    <td width="70%"><div align="center"><strong>DEFINICI&Oacute;N</strong></div></td>
    <td width="10%"><div align="center"><strong>SELECCI&Oacute;N</strong></div></td>
  </tr>
 <tr>
<?php 
				$insfraestructura = array('name'=>'insfraestructura','value'=>'1','style'=>'margin:10px','checked'=>(isset($datos["cf_insfraestructura"]) && $datos["cf_insfraestructura"]==1)?true:false,);
                $insfraestructura1 = array('name'=>'insfraestructura','value'=>'2','checked'=>(isset($datos["cf_insfraestructura"]) && $datos["cf_insfraestructura"]==2)?true:false,'style'=>'margin:10px');
                $insfraestructura2 = array('name'=>'insfraestructura','value'=>'3','checked'=>(isset($datos["cf_insfraestructura"]) && $datos["cf_insfraestructura"]==3)?true:false,'style'=>'margin:10px');
                $insfraestructura3 = array('name'=>'insfraestructura','value'=>'4','checked'=>(isset($datos["cf_insfraestructura"]) && $datos["cf_insfraestructura"]==4)?true:false,'style'=>'margin:10px');
?>
    <td><div align="left"><strong>a) Incorporaci&oacute;n de la comunidad en el desarrollo del proyecto.</strong></div></td>
    <td><div align="left">Se refiere a la participaci&oacute;n de los ciudadanos y ciudadanas de la comunidad en la ejecuci&oacute;n del proyecto tal como lo establece  la Constituci&oacute;n de la Rep&uacute;blica Bolivariana de Venezuela Art. 308</div></td>
    <td><div align="center">
<?php echo form_radio($insfraestructura);?>
    </div></td>
  </tr>
  <tr>
    <td><div align="left"><strong>b) Incorporaci&oacute;n de la comunidad en la contralor&iacute;a social.</strong></div></td>
    <td><div align="left">Se refiere a la participaci&oacute;n de los ciudadanos y  ciudadanas en el seguimiento y control del proyecto, seg&uacute;n lo establecido en la  Ley Org&aacute;nica de los Consejos Comunales Art. 33 - 34</div></td>
    <td><div align="center">
<?php echo form_radio($insfraestructura1);?>
    </div></td>
  </tr>
  <tr>
    <td><div align="left"><strong>c) Adquisici&oacute;n de materiales en las empresas de propiedad social recuperadas por el Estado Venezolano.</strong></div></td>
    <td><div align="left">Se refiere a la compra de los diversos materiales  de construcci&oacute;n en las empresas de Propiedad Social recuperadas por el estado,  tal como lo establece la Constituci&oacute;n de la Rep&uacute;blica Bolivariana de Venezuela Art. 308</div></td>
    <td><div align="center">
<?php echo form_radio($insfraestructura2);?>
    </div></td>
  </tr>
    <tr>
    <td><div align="left"><strong>d) Todas las anteriores.</strong></div></td>
    <td></td>
    <td><div align="center">
<?php echo form_radio($insfraestructura3);?>
    </div></td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td><strong>Explique:</strong><br /><textarea name="explique111"  cols="130" rows="4"><?php echo (isset($datos["cf_explique111"]))?$datos["cf_explique111"]:""?></textarea></td>
  </tr>
</table>
<hr width="100%" />
<br class="saltopagina" />
<table width="100%" border="1" class="tabla">
  <tr class="menucontrol">
    <td width="20%"><div align="left"><strong>11.2 Modelo de Gesti&oacute;n Socialista para proyectos de  Organizaciones Socio productivas.</strong></div></td>
    <td width="70%"><div align="center"><strong>DEFINICI&Oacute;N</strong></div></td>
    <td width="10%"><div align="center"><strong>SELECCI&Oacute;N</strong></div></td>
  </tr>
  <?php 
				$productiva112 = array('name'=>'productiva112','value'=>'1','style'=>'margin:10px','checked'=>(isset($datos["cf_productiva112"]) && $datos["cf_productiva112"]==1)?true:false,);
                $productiva1121 = array('name'=>'productiva112','value'=>'2','checked'=>(isset($datos["cf_productiva112"]) && $datos["cf_productiva112"]==2)?true:false,'style'=>'margin:10px');
                $productiva1122 = array('name'=>'productiva112','value'=>'3','checked'=>(isset($datos["cf_productiva112"]) && $datos["cf_productiva112"]==3)?true:false,'style'=>'margin:10px');
                $productiva1123 = array('name'=>'productiva112','value'=>'4','checked'=>(isset($datos["cf_productiva112"]) && $datos["cf_productiva112"]==4)?true:false,'style'=>'margin:10px');
?>
   <tr>
    <td><div align="left"><strong>a) Empresas de propiedad social directa.</strong></div></td>
    <td><div align="left">Se define como la Unidad productiva ejercida en un &aacute;mbito territorial demarcado en una o varias comunidades, en una o varias comunas que beneficie al colectivo donde los medios de producci&oacute;n son de propiedad de la colectividad, seg&uacute;n lo establecido en la Ley para el Fomento y  Desarrollo de la Econom&iacute;a Popular Art. 9 Num. 1</div></td>
    <td><div align="center">
<?php echo form_radio($productiva112);?>
    </div></td>
  </tr>
  <tr>
    <td><div align="left"><strong>b) Empresas de propiedad social indirecta.</strong></div></td>
    <td><div align="left">Se define como la Unidad productiva, cuya propiedad  es ejercida por el Estado a nombre de la comunidad. El Estado progresivamente  podr&aacute; transferir la propiedad a una o varias comunidades, a una o varias  comunas, en beneficio del colectivo, seg&uacute;n lo establecido en la Ley para el  Fomento y Desarrollo de la Econom&iacute;a Popular Art. 9 Num. 2</div></td>
    <td><div align="center">
<?php echo form_radio($productiva1121);?>
    </div></td>
  </tr>
  <tr>
    <td><div align="left"><strong>c) Mecanismos de redistribuci&oacute;n de excedentes y participaci&oacute;n en el entorno comunitario.</strong></div></td>
    <td><div align="left">Distribuci&oacute;n colectiva de los excedentes despu&eacute;s de  cada per&iacute;odo operacional anual o per&iacute;odo fiscal, en la comunidad donde se desarrolla el proyecto socio productivo, seg&uacute;n lo establecido en la Ley  Org&aacute;nica de los Consejos Comunales Art. 51</div></td>
    <td><div align="center">
<?php echo form_radio($productiva1122);?>
    </div></td>
  </tr>
  </tr>
  <tr>
    <td><div align="left"><strong>d) Fondos Externos para el Poder Comunal.</strong></div></td>
    <td><div align="left">Son los recursos econ&oacute;micos del excedente de la  empresa, que est&aacute;n orientados hacia la comunidad en su &aacute;rea geogr&aacute;fica del  Consejo Comunal, Comuna, Eje Comunal o Distrito Motor de Desarrollo</div></td>
    <td><div align="center">
<?php echo form_radio($productiva1123);?>
    </div></td>
  </tr>
 
</table>
<table width="100%" border="0">
  <tr>
    <td><strong>Explique:</strong><br /><textarea name="explique112"  cols="130" rows="4" ><?php echo (isset($datos["cf_explique112"]))?$datos["cf_explique112"]:""?></textarea></td>
  </tr>
</table>
<hr width="100%" />
<br class="saltopagina" />

<table width="100%" border="0">
  <tr>
    <td class="titulo"><div align="center"><strong>12. ASPECTOS FINANCIEROS Y T&Eacute;CNICOS</strong></div></td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td ><div align="left"><strong>12.1 ASPECTOS FINANCIEROS </strong></div></td>
  </tr>
</table>
<hr width="100%" />
<table width="100%" border="0">
  <tr>
    <td><strong>12.1.1 Presupuesto: </strong><br />
   Anexo ( La carga maxima del servidor es 2 MB en formato PDF ) <br /> <div align="left"> <spam class="button">Añadir Archivo</spam> <a href=<?php /* echo "../uploads/".$sum."/".$row['73'];*/ ?> >---------</a></div>
      <p>(Consiste en establecer el costo total necesario para cumplir con los objetivos fijados, mediante la cuantificaci&oacute;n y caracter&iacute;sticas t&eacute;cnicas de las compras a realizar, asociados a un costo unitario y codificado por las normas COVENIN para obras, seg&uacute;n lo establecido en la Ley de Contrataciones P&uacute;blicas y su Reglamento Art. 150). Se requiere incluir en el presupuesto la imputaci&oacute;n a las partidas presupuestarias.</p>
  </tr>
</table>


<hr width="100%" />
<table width="100%" border="0">
  <tr>
    <td><strong>12.1.2 Descripci&oacute;n del  costo de Inversi&oacute;n:</strong><br />
      <textarea name="descripcion122"  cols="110" rows="4"  ><?php echo (isset($datos["cf_descripcion122"]))?$datos["cf_descripcion122"]:""?></textarea>
      <P>(Cuantificaci&oacute;n de todos los presupuestos descritos, para arrojar el monto total de la inversi&oacute;n a requerir, seg&uacute;n lo establecido en la Ley de Contrataciones P&uacute;blicas Art. 111)</P>
  </tr>
</table>

<hr width="100%" />
<!--
<table width="100%" border="0">
  <tr>
    <td><strong>12.1.3 Cronograma de desembolsos: </strong><br />
    Anexo ( La carga maxima del servidor es 2 MB en formato PDF )  <br /> <a href=<?php /* echo "../uploads/".$sum."/".$row['75'];*/ ?> ><?=""/*$row['75']*/ ?></a>
      <P>(Se refiere a la cuantificaci&oacute;n de los recursos financieros que en la ejecuci&oacute;n del proyecto se tienen que desembolsar a fin de alcanzar los objetivos planteados, establecidos en un lapso de tiempo determinado, seg&uacute;n lo se&ntilde;alado en la Ley de Contrataciones P&uacute;blicas Art. 93)</P>
  </tr>
</table>
<hr width="100%" />
<table width="100%" border="0">
  <tr>
    <td><div align="left">
     <strong>12.2  ASPECTOS T&Eacute;CNICOS</strong>
    </div></td>
  </tr>
</table>
<hr width="100%" />
<table width="100%" border="0">
  <tr>
    <td><strong>12.2.1 Memoria Descriptiva Detallada:</strong><br />
       Anexo ( La carga maxima del servidor es 2 MB en formato PDF )   <br /> <a href=<?php /* echo "../uploads/".$sum."/".$row['76'];*/ ?> ><?=""/*$row['76']*/ ?></a>
      <P>(Se refiere a la memoria t&eacute;cnica de las diferentes disciplinas de la ingenier&iacute;a y arquitectura que describen los procesos de dise&ntilde;o, variables,&iacute;ndices, entre otros, utilizados para el desarrollo de la soluci&oacute;n adoptada, seg&uacute;n lo establecido en la Ley de Contrataciones P&uacute;blicas)</P>
  </tr>
</table>
<hr width="100%" />
<table width="100%" border="0">
  <tr>
    <td><strong>12.2.2 Formulaci&oacute;n del proyecto desde una perspectiva integral: </strong><br />
     Anexo ( La carga maxima del servidor es 2 MB en formato PDF ) <br /> <a href=<?php /* echo "../uploads/".$sum."/".$row['77'];*/ ?> ><?=""/*$row['77']*/ ?></a>
      <P>(Se refiere a la formulaci&oacute;n de proyectos, desde una perspectiva integral, que permita visualizar claramente la situaci&oacute;n a resolver, las actividades que ello implica y los beneficios a lograr)</P>
  </tr>
</table>
<hr width="100%" />
<div align="right"><a href="../planillam/planilla1223.php?id=<?php /* echo $sum*/ ?>">Actualizar</a></div>
<table width="100%" border="0">
  <tr>
    <td><strong>12.2.3 Memoria de dise&ntilde;o y c&aacute;lculos de los c&oacute;mputos m&eacute;tricos:</strong><br />
      Anexo ( La carga maxima del servidor es 2 MB en formato PDF ) <br /> <a href=<?php /* echo "../uploads/".$sum."/".$row['78'];*/ ?> ><?=""/*$row['78']*/ ?></a>
      <p>(Se refiere al c&aacute;lculo de cantidades de cada actividad, necesarias para la construcci&oacute;n, tomando en cuenta su unidad de medida (m, m2, m3, lt, Km, entre otros), seg&uacute;n lo se&ntilde;alado en la Ley de Contrataciones P&uacute;blicas)</p>
  </tr>
</table>
<hr width="100%" />
<div align="right"><a href="../planillam/planilla1224.php?id=<?php /* echo $sum*/ ?>">Actualizar</a></div>
<table width="100%" border="0">
  <tr>
    <td><strong>12.2.4 Memoria fotogr&aacute;fica con su respectiva leyenda: </strong><br />
      Anexo ( La carga maxima del servidor es 2 MB en formato PDF )  <br /> <a href=<?php /* echo "../uploads/".$sum."/".$row['79'];*/ ?> ><?=""/*$row['79']*/ ?></a>
       <p>Se requiere detallar los tramos a atender. (Conjunto de fotos que describen la situaci&oacute;n actual del espacio donde se  desarrollar&aacute; el proyecto con su respectiva leyenda, seg&uacute;n lo se&ntilde;alado en la Ley de Contrataciones P&uacute;blicas y su Reglamento)</p>
  </tr>
</table>
<hr width="100%" />

<br class="saltopagina" />
<table width="100%" border="0">
  <tr>
    <td><strong>12.2.5 Planos seg&uacute;n tipolog&iacute;a del proyecto, a escala o acotados, firmados y sellados por profesional responsable: </strong><br />
       Anexo ( La carga maxima del servidor es 2 MB en formato PDF )   <br /> <a href=<?php /* echo "../uploads/".$sum."/".$row['80'];*/ ?> ><?=""/*$row['80']*/ ?></a>
      <p>(Se refiere al apoyo gr&aacute;fico necesario para describir, construir y evaluar correctamente el proyecto que se va a realizar, seg&uacute;n lo establecido en el Reglamento de Contrataciones P&uacute;blicas Art. 150)</p>
  </tr>
</table>
<hr width="100%" />
<table width="100%" border="0">
  <tr>
    <td><strong>12.2.6 Croquis de Ubicaci&oacute;n Geogr&aacute;fica:</strong><br />
       Anexo ( La carga maxima del servidor es 2 MB )  <br /> <a href=<?php /* echo "../uploads/".$sum."/".$row['81'];*/ ?> ><?=""/*$row['81']*/ ?></a>
      <p>(Se refiere a la ubicaci&oacute;n del proyecto dentro del &aacute;mbito geogr&aacute;fico de la comunidad proponente)</p>
  </tr>
</table>
<hr width="100%" />
<table width="100%" border="0">
  <tr>
    <td><strong>12.2.7 Titularidad del Terreno: </strong><br />
      <textarea name="titularidad127"  cols="80" rows="4" readonly="readonly"><?php /* echo $row['82'];*/ ?></textarea>
      <p> (Se refiere a los documentos que respalden la propiedad del terreno)</p>
  </tr>
</table><hr width="100%" />
<table width="100%" border="0">
  <tr>
    <td><strong>12.2.8 Cronograma de Ejecuci&oacute;n:</strong><br />
    Anexo ( La carga maxima del servidor es 2 MB )  <br /> <a href=<?php /* echo "../uploads/".$sum."/".$row['83'];*/ ?> ><?=""/*$row['83']*/ ?></a>
      <p>(Se refiere a las actividades que se tienen que desarrollar en la ejecuci&oacute;n del proyecto, a fin de alcanzar los objetivos planteados, establecidos en un lapso de tiempo y montos determinados, seg&uacute;n lo se&ntilde;alado en la Ley de Contrataciones P&uacute;blicas y su Reglamento)</p>
  </tr>
</table>
<hr width="100%" />
<table width="100%" border="0">
  <tr>
    <td><strong>12.2.9 Permisos establecidos en la CRBV, las leyes, reglamentos y ordenanzas: </strong><br />
      Anexo ( La carga maxima del servidor es 2 MB )  <br /> <a href=<?php /* echo "../uploads/".$sum."/".$row['84'];*/ ?> ><?=""/*$row['84']*/ ?></a>
      <p>(Consiste en consignar los permisos requeridos por el proyecto para su viabilidad, (en caso de poseerlos), de lo contrario debe consignar Acta Compromiso y su incumplimiento, generar&aacute; sanciones penales)</p></td>
  </tr>
</table>  

-->
<div id="modal_archivo"></div>
        <div class="clear"></div>
      <div class="grid_12 prefix_9 espacio-arriba" >
          <button id="guardar">Modificar Proyecto!</button>
      </div>
        
<?php echo form_close();?>
   
