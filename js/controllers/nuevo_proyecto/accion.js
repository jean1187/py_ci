$(document).ready(function() {
   base_url=$("input[name='ruta_ejecutor']").val();
    
  $("select[name='areaInversion']").change(function(){
      $("select[name='tipoProyecto']").html(new Option("- Seleccione -",0));
      $.rellenar_combo(base_url+"/operacion", {oper:"combo_categoria","id_area":this.value},"select[name='categoria']");
  });//fin cambio en laS AREAS DE INVERSION
  
  $("select[name='categoria']").change(function(){
      $.rellenar_combo(base_url+"/operacion", {oper:"combo_tipo","id_categoria":this.value},"select[name='tipoProyecto']");
  });//fin cambio en laS AREAS DE INVERSION
  
  
});//fin $(document).ready(function() {