

<div class="grid_24 ">
        <?php  echo form_open('menu/operacion',array("autocomplete"=>"off")).br(1)?>
                        <!-- Nombre del item -->
                    <div class="grid_6 suffix_1" >
                        <?php echo form_label('<b>Nombre del Item :</b>', 'nombre').form_input(array('name'=> 'nombre','id'=> 'nombre','value'=>'','maxlength'=>'60'));?>
                    </div>
                        <!-- url del item -->
                    <div class="grid_6 suffix_1" >
                        <?php echo form_label('<b>Url del Item :</b>', 'url').form_input(array('name'=> 'url','id'=> 'url','value'=>'','maxlength'=>'50'));?>
                    </div>
                        <!-- Grupos del item -->
                    <div class="grid_2" >
                        <?php echo form_label('<b>Grupo :</b>', 'grupo')."</div>";
                                $attr = 'id="grupo" size="5" style="width:200px;"';
                                echo '<div class="grid_6" >'.form_dropdown('grupo[]',$grupos, array(0,1),$attr);
                         ?>
                    </div>
                    <div class="clear"></div>
                        <!-- padre o hijo? -->
                    <div class="grid_6 suffix_1" >
                        <?php
			    $parent = array('name'=>'parent','value'=>NULL,'checked'=>TRUE);
			    $hijo= array('name'=>'parent','value'=>'1');
			    echo form_label('<b> Padre ? :</b>', 'parent').form_label('Si', 'parentSI').form_radio($parent).form_label('No', 'parentNO').form_radio($hijo);
			?>
                    </div>

                    <div class="clear"></div>

		    <!-- Hijo-->
		    <div id="hijo" class="grid_24 omega alpha">
			  <div class="grid_24" >
			      <?php echo form_label('<b>Escoja un Grupo :</b>', 'grupoChoice');
				      $attr = 'id="grupoChoice"';
				      echo form_dropdown('grupoChoice',$grupos, '',$attr);
			      ?>
			  </div>
                        <div class="clear"></div>
			    <div  id="menu_prueba" class="container_menu grid_24">
                                <ul class="menu">
                                </ul>
                            </div>
                        <div class="clear"></div>
			<!-- id del padre-->
			<div class="grid_6" >
			  <?php echo form_label('<b>Id del padre :</b>', 'idparent').form_input(array('name'=> 'idparent','id'=> 'idparent','value'=>'','maxlength'=>'60',"readonly"=>true));?>
			</div>
			<!-- nombre del padre-->
			<div class="grid_6" >
			  <?php echo form_label('<b>Nombre del padre :</b>', 'nomparent').form_input(array('name'=> 'nombreparent','id'=> 'nombreparent','value'=>'','maxlength'=>'60',"readonly"=>true));?>
			</div>
			<!-- grupo del padre-->
			<div class="grid_10" >
			  <?php echo form_label('<b>Grupo del padre :</b>', 'groupParent').'<i><div  id="groupParentDiv"></div></i>'?>
			</div>
		    </div>
                    <div class="clear"></div>
                      <!-- Submit (Enviar Form) -->
                    <div class="grid_3 prefix_10" >
                        <?php // echo br(7).form_submit(array("name"=>"guardar","value"=>"Guardar !","id"=>"guardar"));?>
                    </div>
        <?php echo form_hidden('groupParentDiv_hidden', 'nada').form_close();?>
</div>
<script type="text/javascript" src="/js/controllers/menu/accion.js"></script>