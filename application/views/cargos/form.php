<div class="grid_24 ">
        <?php  echo form_open($clase.'/operacion',array("autocomplete"=>"off"))?>
                        <!-- Nombre del item -->
                    <div class="grid_12 suffix_1" >
                        <?php echo form_label('<b>Nombre del Cargo :</b>', 'nombre').form_input(array('name'=> 'nombre','id'=> 'nombre','value'=>'','maxlength'=>'45',"class"=>"reset"));?>
                    </div>
        <?php echo form_close();?>
</div>