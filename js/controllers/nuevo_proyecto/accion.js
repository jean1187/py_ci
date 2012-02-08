$(document).ready(function() {
  base_url=$("input[name='ruta_ejecutor']").val();    
  $("#guardar").button({icons: {primary: "ui-icon-disk"}});
        
  $("select[name='areaInversion']").change(function(){
      $("select[name='tipoProyecto']").html(new Option("- Seleccione -",0));
      $.rellenar_combo(base_url+"/operacion", {oper:"combo_categoria","id_area":this.value},"select[name='categoria']");
  });//fin cambio en laS AREAS DE INVERSION
  
  $("select[name='categoria']").change(function(){
      $.rellenar_combo(base_url+"/operacion", {oper:"combo_tipo","id_categoria":this.value},"select[name='tipoProyecto']");
  });//fin cambio en las categorias
  
  $("select[name='municipio']").change(function(){
      $.rellenar_combo(base_url+"/operacion", {oper:"combo_parroquia","id_municipio":this.value},"select[name='parroquia']");
  });//fin cambio en las parroquias
  
  
  $("select[name='directriz']").change(function(){
      $("select[name='politica']").html(new Option("- Seleccione -",0));
      //$("select[name='estrategia']").html(new Option("- Seleccione -",0));
      $.rellenar_combo(base_url+"/operacion", {oper:"combo_objetivo","id_directriz":this.value},"select[name='objetivo']");
      $.rellenar_combo(base_url+"/operacion", {oper:"combo_estrategia","id_directriz":this.value},"select[name='estrategia']");
  });//fin cambio en los objetivos 
  
 /* $("select[name='objetivo']").change(function(){
    $.rellenar_combo(base_url+"/operacion", {oper:"combo_estrategia","id_objetivo":this.value},"select[name='estrategia']");
  });//fin cambio en  estrategias
  */
  $("select[name='estrategia']").change(function(){
      $.rellenar_combo(base_url+"/operacion", {oper:"combo_politica","id_estrategia":this.value},"select[name='politica']");
  });//fin cambio en las politicas

  /*$("select[name='organo']").change(function(){
      $.rellenar_combo(base_url+"/operacion", {oper:"combo_entes","id_organo":this.value},"select[name='ente']");
  });//fin cambio en las entes
  */
  
  
  $("form").submit(function(event){
      $.ajax({
            type: "POST",
            url: base_url+'/operacion',
            data: $("form").serialize()+"&oper=add",
            success: function(data){
               $.mesages_validation(data);
                //    $.msj_success(data,"");
            },//fin success
            error:function(data){
                $.achtung({message: data.responseText,timeout:5});
            }
        }); //fin ajax
     event.preventDefault(); 
  });
});//fin $(document).ready(function() {