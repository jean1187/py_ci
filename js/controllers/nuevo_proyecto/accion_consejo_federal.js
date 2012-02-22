$(document).ready(function() {
  $("#modal_archivo").dialog({
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
     $("#modal_archivo").dialog('open');
  });
});//fin $(document).ready(function() {