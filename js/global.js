$(document).ready(function() {
    //$.botones();
    
});//fin $(document).ready(function() {

//botones
/*
 jQuery.botones = function() 
 {
     var botones_iconos={ "show_button" : "ui-icon-search", 
			 "add_button" : "ui-icon-plusthick",
			 "del_button":"ui-icon-closethick",
			 "edit_button":"ui-icon-pencil"};
    //
     // Se le agregara un icono a cada boton  de jquery_ui, solo basta que en mi vista tenga la clase adecuada para el boton de acuerdo a los indices que tiene el siguiente array
     //
    $.each(botones_iconos,function(key, valor){
        $("."+key).button({
            text: false,
            icons: {
                    primary: valor
            }
        });
    });//fin each
    //para que no haya tanta separacion en los botones
    $(".toolbar a").css("margin","0 0");
    
 }//fin botones
*/
 
    //inicio mesages_validation
    jQuery.mesages_validation = function(data,msj_satisfactorio) {
       /* if(data.indexOf("login-form")!=-1)
            window.locationf="";
        else*/ if(!data)
            {
            $.achtung({message: (msj_satisfactorio)?msj_satisfactorio:'El dato fue guardado', timeout:5});
            return true;
            }
        
        else
        {
            //data=JSON.parse(data);
            $.each(data,function(key,val){
                $.achtung({message: val, timeout:5});
            });
        }
       //return data.code;
        
    };
    //rellenar combos select
    jQuery.rellenar_combo = function(ruta,var_envio,select_victima,funcion) {
      $.post(ruta,var_envio,function(data){
          //alert(data)
          $(select_victima).html("");
          //data=JSON.parse(data);
          $.each(data,function(key,val){
              $(select_victima).append(new Option(val,key));
            });
            /*if(funcion)
            //$.rellenar_combo.funcion.call(this);
                funcion();*/
         

      }); if(typeof funcion == 'function'){
        funcion.call(this);
       
      }

      
    };//fin rellenar_combo
    
     $.ajaxSetup({
        /*error: function(jqXHR, exception) {
            alert(exception)
            if (jqXHR.status === 0) {
                alert('Not connect.\n Verify Network.');
            } else if (jqXHR.status == 404) {
                alert('Requested page not found. [404]');
            } else if (jqXHR.status == 500) {
                alert('Internal Server Error [500].');
            } else if (exception === 'parsererror') {
                alert('Requested JSON parse failed.');
            } else if (exception === 'timeout') {
                alert('Time out error.');
            } else if (exception === 'abort') {
                alert('Ajax request aborted.');
            } else {
                alert('Uncaught Error.\n' + jqXHR.responseText);
            }
        },
        error:function(e, xhr, settings) {
            alert(xhr.status)
                    if (xhr.status == "401")
                        alert("You are not logged into the remote page!");
                    if (xhr.status == "404")
                        alert("The remote page could not be found: '"+settings.url+"'(status code: "+xhr.status+")");
        },*/
        complete: function(xhr, exito)
        {//alert(xhr.responseText.indexOf('id="bd-login-form"'))
            if(xhr.responseText.indexOf('id="bd-login-form"')==1061)
                {//return false;
                    alert(".    Su sesión ha expirado\nPor favor ingrese de nuevo  .")
                    window.location.href="";
                    //window.location.reload();  
                }
        }//fin complete
    });
  


