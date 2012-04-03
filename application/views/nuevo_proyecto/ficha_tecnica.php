<?php
$attributes["oper"]=(empty($datos))?'add':'edit';
echo form_open('operacion',$attributes);?>

        <?php 
        echo $hidden;
        
        //print_r($datos);
        ?>

        <script type="text/javascript" src="<?php echo base_url()?>js/controllers/<?=$class?>/accion.js"></script>
        
        <?php echo $map['js']; ?>   
    
            <div class="grid_16 prefix_8 fondo_gris_oscuro borde omega alpha" >
                <?php echo heading(' Ficha Técnica del Proyecto!',3, 'class="pink"');?>    
            </div>
        <div class="clear"></div>
           <div  class="grid_24 omega alpha ui-state-highlight ui-corner-all pink" style="margin-top: 20px;margin-bottom: 20px;" >
                <span style="float: left; margin-right: .3em;" class="ui-icon ui-icon-info"></span><strong>Hey!</strong> los Campos Marcados con <req>*</req> son <strong>REQUERIDOS</strong>
            </div>
        <div class="clear"></div>
            <div class="grid_11 omega" >
                <req>*</req><?php echo form_label('<b>Nombre del proyecto :</b>').form_textarea(array('name'=> 'nombre','id'=> 'nombre','value'=>(isset($datos["nombre"]))?$datos["nombre"]:"",'rows'=>'2',"cols"=>55));?>
            </div>    
            <div class="grid_13 alpha" >
                <req>*</req><?php echo form_label('<b>Descripción del proyecto :</b>').form_textarea(array('name'=> 'descripcion','id'=> 'descripcion','value'=>(isset($datos["descripcion"]))?$datos["descripcion"]:"",'rows'=>'2',"cols"=>55));?>
            </div> 

        <div class="clear"></div>
            <div class="grid_24 omega fondo_gris_oscuro espacio-arriba " >
                <req>*</req><?php echo form_label('<b>¿ Qué Área del Plan de Desarrollo se Apalancará con este Plan de Inversión ? :</b>').br(1).form_dropdown('lineaEstrategica', $lineasEstrategicas,null,"style='max-width:940px;min-width:60px' id='lineaEstrategica' rel=".(isset($datos["lineaEstrategica"])?$datos["lineaEstrategica"]:""));?>
            </div>   
        <div class="clear"></div>
            <div class="grid_24 omega fondo_gris_oscuro" >
                <req>*</req><?php echo form_label('<b>Objetivos del Milenio (ODM) :</b>').br(1).form_dropdown('objetivosDelMileniun', $odm,null,"id='objetivosDelMileniun' rel=".(isset($datos["objetivosDelMileniun"])?$datos["objetivosDelMileniun"]:""));?>
            </div> 
        <div class="clear"></div>

            <div class="grid_24  fondo_gris_oscuro espacio-arriba" >
                <?php echo form_label('<b>Organismo Responsable :</b>').br(1).form_dropdown('organo', $organo, (isset($datos["organo"]))?array($datos["organo"]):null,"style='max-width:950px;min-width:60px' id='organo' rel=".(isset($datos["organo"])?$datos["organo"]:""));?>
            </div>  
        <div class="clear"></div>
            <div class="grid_24  fondo_gris_oscuro" >
                <?php echo form_label('<b>Ente  Ejecutor:</b>').br(1).form_dropdown('ente', $ente, null,"style='max-width:950px;min-width:60px' id='ente' rel=".(isset($datos["ente"])?$datos["ente"]:""));?>
            </div> 
        <div class="clear "></div>
            <div class="grid_14 omega espacio-arriba" >
                <?php 
                 $preinversion = array('name'=>'preinversion','id'=>'preinversion','value'=>'1','checked'=> (isset($datos["preinversion"]) && $datos["preinversion"]==1)?true:false,'style'=>'margin:10px',);
                 $py_new = array('name'=>'py_new','id'=>'py_new','value'=>'1','checked'=>(isset($datos["py_new"]) && $datos["py_new"]==1)?true:false,'style'=>'margin:10px',);
                 $ampl_modif = array('name'=>'ampl_modif','id'=>'ampl_modif','value'=>'1','checked'=> (isset($datos["ampl_modif"])  && $datos["ampl_modif"]==1)?true:false,'style'=>'margin:10px',);
                 $culminacion = array('name'=>'cumlinacion','id'=>'cumlinacion','value'=>'1','checked'=> (isset($datos["cumlinacion"])  && $datos["cumlinacion"]==1)?true:false,'style'=>'margin:10px',);
                echo form_label('<b>Etapa:</b>').br(1).form_label('Preinversión').form_checkbox($preinversion).form_label('Proyecto Nuevo').form_checkbox($py_new).form_label('Ampliacion o modificacion').form_checkbox($ampl_modif).form_label('Culminacion').form_checkbox($culminacion);?> 

            </div>  
            <div class="grid_10 alpha espacio-arriba" >
                <?php echo form_label('<b>Fase del Proyecto:</b>').br(1).form_dropdown('fases', $fases,null,"id='fases' rel=".(isset($datos["fases"])?$datos["fases"]:"")).br(1);?>         
            </div>
        <div class="clear"></div>
            <div class="grid_16 prefix_8 fondo_gris_oscuro borde espacio-arriba pink" >
                <?php echo form_label('<b> Área de Inversión de los Recursos  </b> ');?>    
            </div>
        <div class="clear"></div>
            <div class="grid_12 omega espacio-arriba " >
                <req>*</req><?php echo form_label('<b>Area de Inversión :</b>').br(1).form_dropdown('areaInversion', $areaInversion,null,"id='areaInversion' rel=".(isset($datos["areaInversion"])?$datos["areaInversion"]:""));?> 
            </div>  
            <div class="grid_12 espacio-arriba" >
                 <req>*</req><?php echo form_label('<b>Categoría:</b>').br(1).form_dropdown('categoria',$categoria,null,"id='categoria' rel=".(isset($datos["categoria"])?$datos["categoria"]:""));?>
            </div> 
        <div class="clear"></div>
            <div class="grid_24 " >
                <req>*</req><?php echo form_label('<b>Tipo de Proyecto:</b>').br(1).form_dropdown('tipoProyecto',$tipoProyecto,null,"style='max-width:950px;min-width:60px' id='tipoProyecto' rel=".(isset($datos["tipoProyecto"])?$datos["tipoProyecto"]:""));?>
            </div> 
        <div class="clear"></div>

            <div class="grid_16 prefix_8 fondo_gris_oscuro borde espacio-arriba pink" >
                <?php echo form_label('<b> II. Responsable del Proyecto : </b>');?> 
            </div>
        <div class="clear"></div>

            <div class="grid_12 omega espacio-arriba" >
                <?php echo form_label('<b> Nombre del Responsable : </b>').br(1).form_input(array('name'=>'nombre_responsable','id'=>'nombre_responsable','value'=>(isset($datos["nombre_responsable"]))?$datos["nombre_responsable"]:"",'size'=>'45'));?> 
            </div>  
            <div class="grid_12 espacio-arriba" >
                <?php echo form_label('<b>Unidad de Adscripción:</b>').br(1).form_input(array('name'=>'unidad_abscripcion_resp','id'=>'unidad_abscripcion_resp','value'=>(isset($datos["unidad_abscripcion_resp"]))?$datos["unidad_abscripcion_resp"]:"",'size'=>'47'));?> 
            </div> 
        <div class="clear"></div>
            <div class="grid_12 omega" >
                <?php echo form_label('<b> Cargo : </b>').br(1).form_input(array('name'=>'cargo_responsable','id'=>'cargo_responsable','value'=>(isset($datos["cargo_responsable"]))?$datos["cargo_responsable"]:"",'size'=>'45'));?> 
            </div>  
            <div class="grid_12" >
                <?php echo form_label('<b>Correo Eléctronico:</b>').br(1).form_input(array('name'=>'email_resp','id'=>'email_resp','value'=>(isset($datos["email_resp"]))?$datos["email_resp"]:"",'size'=>'47'));?> 
            </div> 
        <div class="clear"></div>
            <div class="grid_12 omega" >
                <?php echo form_label('<b> Telefono(s) : </b>').br(1).form_input(array('name'=>'telefonos_responsable','id'=>'telefonos_responsable','value'=>(isset($datos["telefonos_responsable"]))?$datos["telefonos_responsable"]:"",'size'=>'45'));?> 
            </div>  
            <div class="grid_12" >
                <?php echo form_label('<b>Fax:</b>').br(1).form_input(array('name'=>'fax_resp','id'=>'fax_resp','value'=>(isset($datos["fax_resp"]))?$datos["fax_resp"]:"",'size'=>'47'));?> 
            </div> 

        <div class="clear"></div>
            <div class="grid_28 fondo_gris_oscuro borde omega alpha espacio-arriba" >
                <?php echo nbs(80).form_label('<b> III. Ubicación : </b><br>(Nota: en caso de seleccionar varios municipios y varias parroquias debe especificar en el campo Sector o Consejo Comunal los municipios y parroquias involucradas en la ficha)');?> 
            </div>
        <div class="clear"></div>
            <div class="grid_6 omega espacio-arriba" >
                <req>*</req><?php echo form_label('<b> Municipio : </b>').br(1).form_dropdown('municipio', $municipio,null,"id='municipio' rel=".(isset($datos["municipio"])?$datos["municipio"]:""));?>
            </div>  
            <div class="grid_9 espacio-arriba" >
                <req>*</req><?php echo form_label('<b>Parroquia:</b>').br(1).form_dropdown('parroquia', $parroquia,null,"id='parroquia' rel=".(isset($datos["parroquia"])?$datos["parroquia"]:""));?>
            </div> 
            <div class="grid_9 alpha omega espacio-arriba" >
                <?php echo form_label('<b>Sector Comunal:</b>').br(1).form_textarea(array('name'=> 'sector_comunal','id'=> 'sector_comunal','value'=>(isset($datos["sector_comunal"]))?$datos["sector_comunal"]:"",'rows'=>'1',"cols"=>45));?>
            </div> 
        <div class="clear"></div>
            <div class="grid_16 prefix_8" >
                <?php echo form_label('<b>Coordenadas</b>');?>   
            </div>
        <?php if(strpos($map['html'],"iframe") === false) {?>
        <div class="clear"></div>
            <div class="grid_12" >
                <?php echo form_label('<b> Latitud</b>').form_input(array('name'=>'latitude','id'=>'latitude','value'=>(isset($datos["latitude"]))?$datos["latitude"]:'10.254103525868485','size'=>'40','readonly'=>null));?>
            </div>
            <div class="grid_12 omega alpha" >
                <?php echo form_label('<b> Longitud</b>').form_input(array('name'=>'longitude','id'=>'longitude','value'=>(isset($datos["longitude"]))?$datos["longitude"]:'-67.59247183799744','size'=>'40','readonly'=>null));?> 
            </div>
        <?php }?>
        <div class="clear"></div>

            <div class="grid_17 espacio-arriba" >
                <?php echo $map['html']; ?>        
            </div>
            <div class="grid_7 omega alpha espacio-arriba" align="justify" >
                 <u><b>Instrucci&oacute;n:</b></u>
                  <ol>
                    <li>En el mapa, saldrá un punto de referencia dando  la Latitud y Longitud en los campos de arriba del mapa.</li>
                    <li>Debe localizar en el mapa la referencia del  Proyecto, moviendo el punto con el botón izquierdo del ratón (mouse) presionado  y cuando esté en el punto de referencia soltar el botón izquierdo del ratón (mouse).</li>
                    <li>Automáticamente obtendrá las coordenadas en los  campos de Latitud y Longitud. </li>
                    <li>Al seleccionar varios Municipios y  varias Parroquias debe especificar en el mapa el punto de referencia donde est&aacute;  ubicado el Organismo o Ente y debe dirigirse a la Direcci&oacute;n de Proyectos para  hacer referencia de los Municipios y Parroquias involucrada.</li>
                  </ol>

            </div>

        <div class="clear"></div>

        <div class="grid_16 prefix_8 fondo_gris_oscuro borde espacio-arriba pink" >
                <?php echo form_label('<b> Área Estrategica Plan Simón Bolivar </b>');?> 
            </div>
        <div class="clear"></div>

            <div class="grid_24 espacio-arriba" >
                <req>*</req><?php echo form_label('<b> Directriz :</b>').nbs(1).form_dropdown('directriz', $directriz,null,"style='max-width:870px';min-width:60px id ='directriz' rel=".(isset($datos["directriz"])?$datos["directriz"]:""));?>
            </div>  
        <div class="clear"></div>
            <div class="grid_24" >
                <req>*</req><?php echo form_label('<b>Objetivo:</b>').nbs(3).form_dropdown('objetivo', $objetivo,null,"style='max-width:870px;min-width:60px' id='objetivo' rel=".(isset($datos["objetivo"])?$datos["objetivo"]:""));?> 
            </div> 
        <div class="clear"></div>
            <div class="grid_24 " >
                <req>*</req><?php echo form_label('<b>Estrategia:</b>').form_dropdown('estrategia', $estrategia,null,"style='max-width:870px;min-width:60px' id='estrategia' rel=".(isset($datos["estrategia"])?$datos["estrategia"]:""));?>
            </div> 
        <div class="clear"></div>
            <div class="grid_24" >
                <req>*</req><?php echo form_label('<b>Politica:</b>').nbs(4).form_dropdown('politica', $politica,null,"style='max-width:870px;min-width:60px' id='politica' rel=".(isset($datos["politica"])?$datos["politica"]:""));?>
            </div> 
        <div class="clear"></div>

        <div class="grid_16 prefix_8 fondo_gris_oscuro borde espacio-arriba pink" >
                <?php  echo form_label('<b> V. Información Financiera</b>');?> 
            </div>
        <div class="clear"></div>

            <div class="grid_8 omega espacio-arriba" >
                <?php echo form_label('<b> Tiempo estimado de ejecución : </b>').br(1).form_dropdown('tiempoEstimado', $tiempoEstimado,null,"id='tiempoEstimado'  rel=".(isset($datos["tiempoEstimado"])?$datos["tiempoEstimado"]:""));?>
            </div>  
            <div class="grid_8 espacio-arriba" >
                <?php echo form_label('<b>Monto total del Proyecto en (Bs.F):</b>').br(1).form_input(array('name'=>'monto','id'=>'monto','value'=> (isset($datos["monto"]))?$datos["monto"]:"",'maxlength'=> '100','size'=>'25'));?> 
            </div> 
            <div class="grid_8 alpha omega espacio-arriba" >
                <?php echo form_label('<b>Otras Fuentes de financiamiento:</b>').br(1).form_input(array('name'=>'otraFuente','id'=>'otraFuente','value'=>(isset($datos["otraFuente"]))?$datos["otraFuente"]:"",'maxlength'=> '100','size'=>'25'));?> 
            </div> 
        <div class="clear"></div>

        <div class="grid_16 prefix_8 fondo_gris_oscuro borde espacio-arriba pink" >
                <?php echo form_label('<b> VI.Indicadores de Impacto</b>');?> 
            </div>
        <div class="clear"></div>

            <div class="grid_6 fondo_gris_oscuro espacio-arriba" >
                <?php echo form_label('<b>Impacto Social :</b>').br(1).form_textarea(array('name'=> 'impsoc','id'=> 'impsoc','value'=>(isset($datos["impsoc"]))?$datos["impsoc"]:"",'rows'=>'1',"cols"=>30));?>
            </div>    
            <div class="grid_6 fondo_gris_oscuro espacio-arriba" >
                <?php echo form_label('<b>Poblacion Beneficiada :</b>').br(1).form_input(array('name'=>'poblacionBeneficiada','id'=>'poblacionBeneficiada','value'=> (isset($datos["poblacionBeneficiada"]))?$datos["poblacionBeneficiada"]:"",'maxlength'=> '10','size'=>'19'));?> 
            </div>  
            <div class="grid_6   fondo_gris_oscuro espacio-arriba" >
                <?php echo form_label('<b>Avance Fisico :</b>').br(1).form_input(array('name'=>'porcentajeAvanceF','id'=>'porcentajeAvanceF','value'=>(isset($datos["porcentajeAvanceF"]))?$datos["porcentajeAvanceF"]:"",'maxlength'=> '5','size'=>'10'));?>%
            </div> 
            <div class="grid_6   fondo_gris_oscuro espacio-arriba" >
                <?php echo form_label('<b>Avance Financiero :</b>').br(1).form_input(array('name'=>'porcentajeAvanceFinan','id'=>'porcentajeAvanceFinan','value'=> (isset($datos["porcentajeAvanceFinan"]))?$datos["porcentajeAvanceFinan"]:"",'maxlength'=> '5','size'=>'10'))?>%
            </div> 
        <div class="clear"></div>
            <div class="grid_12  fondo_gris_oscuro" >
                <?php echo form_label('<b>Indicador :</b>').br(1).form_label('Formulacion ').form_textarea(array('name'=> 'formulacion','id'=> 'formulacion','value'=>(isset($datos["formulacion"]))?$datos["formulacion"]:"",'rows'=>'1',"cols"=>52)).br(1).form_label('Metas ').form_textarea(array('name'=> 'metas','id'=> 'metas','value'=>'','rows'=>'1',"cols"=>57));?>
            </div>    
            <div class="grid_12   fondo_gris_oscuro" >
                <?php echo form_label('<b>Nº de Empleos Generados :</b>').br(1).form_label('Directos').form_input(array('name'=>'empleosDirectos','id'=>'empleosDirectos','value'=> (isset($datos["empleosDirectos"]))?$datos["empleosDirectos"]:"",'maxlength'=> '100','size'=>'26')).br(1).form_label('Indirectos').form_input(array('name'=>'empleosIndirectos','id'=>'empleosIndirectos','value'=> '','maxlength'=> '100','size'=>'25'));?> 
            </div>  
        <div class="clear"></div>
            <div class="grid_16 prefix_8 fondo_gris_oscuro borde espacio-arriba pink" >
                <?php echo form_label('<b> VII. Articulación con otros Entes competentes</b>');?> 
            </div>
        <div class="clear"></div>
            <div class="grid_24" >
                <?php echo br(1).form_textarea(array('name'=> 'articulacionConOtrosEntes','id'=> 'articulacionConOtrosEntes','value'=>(isset($datos["articulacionConOtrosEntes"]))?$datos["articulacionConOtrosEntes"]:"",'rows'=>'2',"cols"=>132));?> 
            </div>
        <div class="clear"></div>

            <div class="grid_24 fondo_gris_oscuro borde espacio-arriba" >
                <?php echo nbs(80).form_label('<b>VIII. Competencias a transferir al Poder Popular</b><br>(Se transferirá la Administración, la producción de bienes, la Supervisión y contraloría social por parte de las comunas, consejos comunales y/o comunidades)');?> 
            </div>
        <div class="clear"></div>
          <div class="grid_24" >
                <?php echo br(1).form_textarea(array('name'=> 'competencias','id'=> 'competencias','value'=>(isset($datos["competencias"]))?$datos["competencias"]:"",'rows'=>'2',"cols"=>132));?> 
            </div>
        <div class="clear"></div>
    <?php if(empty ($datos)) {?>
      <div class="grid_12 prefix_9 espacio-arriba" >
          <button id="guardar">Guardar Proyecto!</button>
      </div>
        
<?php echo form_close();?>
    <?php }?>

        