$(document).ready(function() {
  $("#modal_archivo").load("/nuevo_proyecto/view_file").dialog({
	        autoOpen: false,
			height: 'auto',
			width:  'auto',
			modal: true,
			resizable: false
        });  
    
  $( ".button" ).button({
            icons: {
                primary: "ui-icon-plusthick"
            }
        });//fin botonoes añadir
        
  $( ".button" ).click(function(){
      //limpiando la lista de archivos
     $(".template-download").remove();
     $("#modal_archivo").dialog('open');
     $('#fileupload').each(function () {
            var that = this;
            $.getJSON(this.action,{"asas":"as"}, function (result) {
                if (result && result.length) {
                    $(that).fileupload('option', 'done')
                        .call(that, null, {result: result});
                }
            });
        });
  });
});//fin $(document).ready(function() {