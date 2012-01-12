<div class="container_24 ">
        <?php  echo form_open($clase.'/operacion',array("autocomplete"=>"off"))?>
                    <!-- Nombre del item -->
                    <div class="grid_7">
                        <?php echo form_label('<b>Nombre :</b>', 'nombre').form_input(array('name'=> 'nombre','id'=> 'nombre','value'=>'','maxlength'=>'45',"class"=>"reset"));?>
                    </div>
                    <!-- Apellido del item -->
                    <div class="grid_7" >
                        <?php echo form_label('<b>Apellido :</b>', 'apellido').form_input(array('name'=> 'apellido','id'=> 'apellido','value'=>'','maxlength'=>'45',"class"=>"reset"));?>
                    </div>
                    <!-- E-mail del item -->
                    <div class="grid_7" >
                        <?php echo form_label('<b>E-mail :</b>', 'email').form_input(array('name'=> 'email','id'=> 'email','value'=>'','maxlength'=>'45',"class"=>"reset"));?>
                    </div>

                    <div class="clear"></div>
                    <?php echo br(2);?>
                    
                    <!-- tlf_Celular del item -->
                    <div class="grid_7 prefix_3" >
                        <?php echo form_label('<b>Celular  : </b>', 'celular').form_input(array('name'=> 'tlf_celular','id'=> 'tlf_celular','value'=>'','maxlength'=>'11',"class"=>"reset"));?>
                    </div>
                    <div class="grid_7 prefix_3" >
                        <?php echo form_label('<b>Fax  : </b>', 'fax').form_input(array('name'=> 'fax','id'=> 'fax','value'=>'','maxlength'=>'11',"class"=>"reset"));?>
                    </div>

                    <div class="clear"></div>
                    <?php echo br(2);?>
                    
                    <div class="grid_7" >
                        <?php echo form_label('<b>Organos  : </b>', 'organos').form_dropdown('organos', $organos,'','id=organos class=reset');?>
                    </div>
                    
                    <div class="grid_7" >
                        <?php echo form_label('<b>Entidades  : </b>', 'entidades').form_dropdown('entidades', $entidades,'','id=entidades class=reset');?>
                    </div>
                    
                    <div class="grid_7" >
                        <?php echo form_label('<b>Cargos  : </b>', 'cargos').form_dropdown('cargos', $cargos,'','id=cargos class=reset');?>
                    </div>
        <?php echo form_close();?>
</div>

<script type="text/javascript" src="/js/controllers/<?php echo $clase?>/accion.js"></script>
