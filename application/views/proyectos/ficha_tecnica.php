    <div class="grid_11 omega" style="border: 1px red solid">
        <?php echo form_label('<b>Nombre del proyecto :</b>', 'nombre_py').form_textarea(array('name'=> 'nombre','id'=> 'nombre','value'=>'','rows'=>'2',"cols"=>55));?>
    </div>    

    <div class="grid_13 alpha" style="border: 1px red solid">
        <?php 
        $options = array(
                  'small'  => 'Small Shirt',
                  'med'    => 'Medium Shirt',
                  'large'   => 'Large Shirt',
                  'xlarge' => 'Extra Large Shirt',
                );

$shirts_on_sale = array('small', 'large');


        echo form_label('<b>¿ Qué Área del Plan de Desarrollo se Apalancará con este Plan de Inversión ? :</b>', 'nombre_py').form_dropdown('shirts', $options, 'large');?>
    </div> 
   
<div class="clear"></div>

    <div class="grid_11 omega" style="border: 1px red solid">
        <?php 
         
        echo form_label('<b>Descripción del proyecto :</b>', 'nombre_py').form_textarea(array('name'=> 'nombre','id'=> 'nombre','value'=>'','rows'=>'2',"cols"=>55));?>
        
    </div>    

    <div class="grid_13 alpha" style="border: 1px red solid">
        <?php 
        echo form_label('<b>Objetivos del Milenio (ODM) :</b>', 'nombre_py').br(1).form_dropdown('shirts', $options, 'large');?> 
    </div> 
<div class="clear"></div>

    <div class="grid_11 omega" style="border: 1px red solid">
        <?php 
         
        echo form_label('<b>Organismo Responsable :</b>', 'nombre_py').br(1).form_dropdown('shirts', $options, 'large');?> 
        
    </div>  
    <div class="grid_11 omega" style="border: 1px red solid">
        <?php 
         
        echo form_label('<b>Ente  Ejecutor:</b>', 'nombre_py').br(1).form_dropdown('shirts', $options, 'large');?> 
        
    </div>  