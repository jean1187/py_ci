$(document).ready(function() {
  base_url=$("input[name='ruta_ejecutor']").val();    
  $("#guardar").button({icons: {primary: "ui-icon-disk"}});
  if($("input[name='id_plan']").val()!=0){$("oper").text("Modificar")}   
  $("select[name='directriz']").change(function(){
      $.rellenar_combo(base_url+"/operacion", {oper:"combo_objetivo","id_directriz":this.value},"select[name='objetivo']");
      $.rellenar_combo(base_url+"/operacion", {oper:"combo_estrategia","id_directriz":this.value},"select[name='estrategia']");
  });//fin cambio en los objetivos 

$.fecha();

$(".help:first").button({
            icons: {
                primary: "ui-icon-check"
            },text:false
  });//fin botonoes de recarga y atras
      
  $(".help").click(function(){
        window.location.href=$(this).attr("href");
    });
 		  $("form").submit(function(event){
                      oper=($("input[name='id_plan']").val()==0)?"add":"edit";
			  $msj=(oper=="edit")?"Modificado":"Guardado";
			  $.ajax({
					type: "POST",
					url: base_url+'/operacion',
					data: $("form").serialize()+"&oper="+oper,
					success: function(data){
					   $.mesages_validation(data,"Su Plan de Inversión ha sido "+$msj,"divErrors",false);
                                           $( ".help" ).show();
						//    $.msj_success(data,"");
					},//fin success
					error:function(data){
						$.achtung({message: data.responseText,timeout:5});
					}
				}); //fin ajax
			 event.preventDefault(); 
		  });//fin form submit
});//fin $(document).ready(function() {