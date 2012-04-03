$(document).ready(function() {
  $("#modal_archivo").load("/nuevo_proyecto/view_file").dialog({
	        autoOpen: false,
			height: 'auto',
			width:  'auto',
			modal: true,
                        position: ["center", 10],
			resizable: false,
                        close: function(event, ui) {
                            $.get("/nuevo_proyecto/do_upload",{campo:campo,id:$("input[name=id_py]").val()},function(data){
                             zona_file.html("<a href='"+data["ruta"]+"' target='_blank'>"+data["text"]+"</a>");    
                             zona_file.siblings("lista_title").html("<br/><strong>Lista de Archivos : <br/></strong>");
                            })
                            
                        }//fin close
        });  
    
  $( ".button" ).button({
            icons: {
                primary: "ui-icon-plusthick"
            }
        });//fin botonoes añadir
     

  $( ".button" ).click(function(){
      //limpiando la lista de archivos
      campo=$(this).attr("campo");
     //alert($("#campo").val())
     zona_file=$(this).siblings("archivos");    
     $(".template-download").remove();
     $("#modal_archivo").dialog('open').dialog({title: "Subir Archivos "+$(this).attr("tittle")});
     $('#fileupload').each(function () {
            var that = this;
            $.getJSON(this.action,{"id":$("input[name=id_py]").val()}, function (result) {
                if (result && result.length) {
                    $(that).fileupload('option', 'done')
                        .call(that, null, {result: result});
                }
            });
               $('#fileupload').fileupload('option', {
                singleFileUploads:false,
                //maxNumberOfFiles:1,
                maxFileSize:8500000,
                acceptFileTypes: /(\.|\/)(pdf|PDF)$/i,
                formData:{"campo":campo,"id":$("input[name=id_py]").val()}
                });
        });
  });
  
  $(".help:first").button({
            icons: {
                primary: "ui-icon-arrowreturnthick-1-w"
            },text:false
  }).next().button({
            icons: {
                primary: "ui-icon-refresh"
            },text:false
  });//fin botonoes de recarga y atras
      
  $(".help").click(function(){
        window.location.href=$(this).attr("href");
    });
      
  $("#guardar").click(function(){
     $( ".help" ).show();
  });
  
});//fin $(document).ready(function() {