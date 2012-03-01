<script type="text/javascript" src="/js/controllers/<?=$class?>/accion.js"></script>
<form action="planinvenvio.php" method="post">
<?php echo $hidden;?>
<table width="100%" border="1">
 <tr>
 	<td colspan="3">
		<div  class="ui-state-highlight ui-corner-all" style="margin-top: 20px;margin-bottom: 20px;" >
                <span style="float: left; margin-right: .3em;" class="ui-icon ui-icon-info"></span><strong>Hey!</strong> los Campos Marcados con <req>*</req> son <strong>REQUERIDOS</strong>
            </div>
	</td>
 </tr>
  <tr class="fondogris">
    <td colspan="2"><div align="center" class="fonplan12b">FORMATO DE PLAN DE INVERSI&Oacute;N </div></td>
  </tr>
  <tr class="fondogris">
    <td colspan="2"><div align="center" class="fonplan12b">I.-  DATOS B&Aacute;SICOS DEL PLAN DE INVERSI&Oacute;N</div></td>
  </tr>
  <tr class="tabla">
    <td colspan="2"><div align="center" >
      <p>1.1. IDENTIFICACI&Oacute;N DE LA ORGANIZACI&Oacute;N, PODER POPULAR, DISTRITO MOTOR DE DESARROLLO /  ENTIDADES TERRITORIALES:</p>
      </div></td>
  </tr>
  <tr>
    <td colspan="2"><req>*</req>Organo / Ente <br />
	<?php echo form_dropdown('organo_ente', $organo_ente,null,"style='max-width:950px;min-width:60px' id='organo_ente' ")?>
    </td>
  </tr>
  <tr class="tabla">
    <td colspan="2" ><req>*</req>1.2.- JUSTIFICACI&Oacute;N DE FORMULACI&Oacute;N DEL PLAN DE INVERSI&Oacute;N: </td>
  </tr>
  <tr>
    <td colspan="2" align="left">
      <textarea name="justif" rows="3" cols="90"></textarea>
</td>
  </tr>
  <tr class="tabla">
    <td width="42%" height="41"><req>*</req>1.2.1- NECESIDADES:</td>
    <td width="58%"><req>*</req>1.2.2- POTENCIALIDADES:</td>
  </tr>
  <tr>
    <td><textarea name="necesi" rows="6" cols="50"></textarea></td>
    <td><div align="center">
      <textarea name="potencia" rows="6" cols="50"></textarea>
    </div></td>
  </tr>
</table>
<table width="100%" border="1">
  <tr class="fondogris">
    <td><div align="center" class="fonplan12b">II.-  VINCULACI&Oacute;N CON EL PLAN DE DESARROLLO ECON&Oacute;MICO Y SOCIAL ( PNSB )</div></td>
  </tr>
  <tr class="tabla">
    <td ><req>*</req>2.1.- DIRECTRICES</td>
  </tr>
  <tr>
    <td><?php echo form_dropdown('directriz', $directriz,null,"style='max-width:870px';min-width:60px id ='directriz' ");?></td>
  </tr>
  <tr class="tabla">
    <td><req>*</req>2.2.- OBJETIVOS</td>
  </tr>
  <tr>
    <td><?php echo form_dropdown('objetivo', $objetivo,null,"style='max-width:870px;min-width:60px' id='objetivo' ");?> </td>
  </tr>
  <tr class="tabla">
    <td><req>*</req>2.3.-ESTRATEGIAS</td>
  </tr>
  <tr>
    <td><?php echo form_dropdown('estrategia', $estrategia,null,"style='max-width:870px;min-width:60px' id='estrategia'  ");?></td>
  </tr>
</table>
<table width="100%" border="1">
  <tr class="fondogris">
    <td colspan="3"><div align="center" class="fonplan12b">III.- VINCULACI&Oacute;N CON EL  PLAN GENERAL DE LA ENTIDAD </div></td>
  </tr>
  <tr class="tabla">
    <td colspan="3">3.1.-ARTICULACI&Oacute;N CON EL PLAN DE DESARROLLO ESTADAL (LINEAMIENTOS):</td>
  </tr>
  <tr class="tabla">
    <td width="36%"><req>*</req>&iquest;TIENE PLAN DE DESARROLLO LA ENTIDAD?&nbsp;&nbsp;<br/>
   SI&nbsp;&nbsp; <input name="planestad" type="radio" value="1"/>&nbsp;&nbsp;NO<input name="planestad" type="radio" value="2" checked="checked" /></td>
    <td><req>*</req>EN CASO AFIRMATIVO, &iquest;EN QUE FECHA SE APROB&Oacute; EL PLAN DE DESARROLLO POR EL ENTE COMPETENTE? (dd/mm/aaaa)
</td>
    <td><input name="fechaest" id="fechaest" type="text" size="12" title="dd/mm/aaaa" readonly="readonly"/></td>
    </tr>
  <tr class="tabla">
    <td colspan="3">EXPLIQUE QU&Eacute; &Aacute;REA DEL PLAN DE DESARROLLO SE APALANCAR&Aacute; CON ESTE PLAN DE INVERSI&Oacute;N 
     </td>
    </tr>
  <tr>
    <td colspan="3">
	<?php echo form_dropdown('lineaEstrategica', $lineasEstrategicas,null,"style='max-width:940px;min-width:60px;' id='lineaEstrategica' ");?>
	</td>
  </tr>
  <tr class="tabla"> 
    <td colspan="3">3.2.- ARTICULACI&Oacute;N CON EL PLAN DE DESARROLLO MUNICIPAL (LINEAMIENTOS):		
</td>
  </tr>
  <tr  class="tabla">
    <td width="36%"><req>*</req>&iquest;TIENE PLAN DE DESARROLLO LA ENTIDAD?&nbsp;&nbsp;<br/>
   SI&nbsp;&nbsp; <input name="planmuni" type="radio" value="1"/>&nbsp;&nbsp;NO<input name="planmuni" type="radio" value="2" checked="checked" /></td>
    <td width="49%"><req>*</req>EN CASO AFIRMATIVO, &iquest;EN QUE FECHA SE APROB&Oacute; EL PLAN DE DESARROLLO POR EL ENTE COMPETENTE? (dd/mm/aaaa)
</td>
    <td width="15%"><input name="fechamuni"  id="fechamuni" type="text" size="12" title="dd/mm/aaaa" readonly="readonly" /></td>
  </tr>
  <tr class="tabla">
    <td colspan="3"><req>*</req>EXPLIQUE QU&Eacute; &Aacute;REA DEL PLAN DE DESARROLLO SE APALANCAR&Aacute; CON ESTE PLAN DE INVERSI&Oacute;N 
      </td>
    </tr>
  <tr>
    <td colspan="3">
    <input type="text" name="invermuni" size="100" maxlength="150" />
    </td>
  </tr>
  </table>
<table width="100%" border="1">
  <tr class="tabla">
    <td colspan="3"><req>*</req>3.3.-ARTICULACI&Oacute;N CON EL PLAN DE  DESARROLLO COMUNAL (LINEAMIENTOS): 
</td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">
      <textarea name="formula" rows="3" cols="90"></textarea>
    </div></td>
  </tr>
  <tr class="tabla">
    <td colspan="3"><req>*</req>3.4.- INTEGRACI&Oacute;N CON EL DISTRITO MOTOR DE DESARROLLO (LINEAMIENTOS):		
</td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">
      <textarea name="integraci" rows="3" cols="90"></textarea>
    </div></td>
  </tr>
</table>
<table width="100%" border="1">
  <tr class="tabla">
    <td><req>*</req>4.13.- COMPETENCIAS A TRANSFERIR AL PODER POPULAR</td>
    <td><req>*</req>4.14.- VALORACI&Oacute;N PORCENTUAL DEL PLAN DE INVERSI&Oacute;N CON RESPECTO AL MONTO TOTAL DE LA ENTIDAD:
</td>
  </tr>
  <tr>
    <td><div align="center">CONTRALORIA SOCIAL
      
    </div></td>
    <td><div align="center">
      <input name="valorporc" type="text" size="10" placeholder="100.00" />
    </div></td>
  </tr>
  <tr>
    <td colspan="2" class="tabla"><div align="center"><req>*</req>OBSERVACI&Oacute;N</div></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <textarea name="observa"  cols="70" rows="5"></textarea>
    </div></td>
    </tr>
  <TR >
    <TD colspan="2" align="center">
     <button id="guardar">Guardar Plan de Inversion!</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
  </TR>
    <TR >
    <TD colspan="2" >
	<divErrors></divErrors>
  </TR>
</table>
</form>
 