function formulario(tabla,form,base_url,nombre_programa,width,heigth){
  //  inicializando variables
    w=width;
    h=heigth;
    if(width=="" || width==0 || width==null ||width=="undefined"){w=628;}         
    if(heigth!="" || heigth!=0 || height!=null || height!="undefined"){h=heigth;}       
    
    if (form=="") {form="#formulario";}

    $("#accordion").accordion();

    $("input[id*='agregar']").click(function(){
        reestablecer();
        $(form).dialog("open");
        oper="add";
    });

var date_options={
    changeMonth:true,
    closeText: 'Cerrar',
    prevText: '&#x3c;Ant',
    nextText: 'Sig&#x3e;',
    currentText: 'Hoy',
    monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio',
    'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
    monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun',
    'Jul','Ago','Sep','Oct','Nov','Dic'],
    dayNames: ['Domingo','Lunes','Martes','Mi&eacute;rcoles','Jueves','Viernes','S&aacute;bado'],
    dayNamesShort: ['Dom','Lun','Mar','Mi&eacute;','Juv','Vie','S&aacute;b'],
    dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','S&aacute;'],
    dateFormat: 'dd-mm-yy',
    firstDay: 0,
    changeYear:true,
    yearRange: '1900:2020'
};

    $(form)
    .load(base_url+'/grid_form')
    .dialog
        ({
            autoOpen: false,
            buttons: {
                "Cerrar": function(){$(form).dialog("close");},
                "Reestablecer":function(){reestablecer();},
                "Guardar":function(){guardar("#"+tabla+"_grid",base_url);}
            },
            dialogClass: "ui-state-hover",
            closeOnEscape: true,
            draggable: false,
            modal: true,
            title:nombre_programa,
            position: ["center", 40],
            resizable: false,
            width: w,
            height: h,
            open: function(){
                $('input').each(function(index){
                    if ($(this)[0].id.match(/fecha/i))
                        $("#"+$(this)[0].id).datepicker(date_options);
                });
            }
        });

    $("input[id*='eliminar']").click(function(){
        var id_seleccion_grid = $("#"+tabla+"_grid").jqGrid('getGridParam','selrow');
        if( id_seleccion_grid != null ){
            respuesta=confirm("¿Está seguro(a) que desea eliminar el elemento seleccionado?");
            if (respuesta){
                $.ajax({
                    type: "POST",
                    url: base_url+'/operacion',
                    data: "oper=del&id="+id_seleccion_grid,
                    success: function(data){                        
                        if (data=="\n" || data==""){
                            $.achtung({
                                message: "Registro eliminado exitosamente",
                                timeout:5
                            });                            
                            $("#"+tabla+"_grid").trigger("reloadGrid");
                        }else {
                             $.each(data, function(clave,valor){
                                 $.achtung({
                                    message: valor,
                                    timeout:5
                                });
                              });
                        }
                    }
                });
            }
        }
        else $.achtung({
            message: "¡Seleccione un elemento a eliminar!",
            timeout:5
        });
    });

    $("input[id*='modificar']").click(function(){
        reestablecer();
        var datos="";
        gr = $("#"+tabla+"_grid").jqGrid('getGridParam','selrow');        
            if( gr != null ){
                $.ajax({
                    type: "POST",
                    url: base_url+'/operacion',
                    data: "oper=search_edit&id="+gr,
                    success: function(data){
				      
                    datos=JSON.parse(data);                    
	
                        //recorre el array
                       /*for (i=0;i<datos.length;i++) {
                            //recorre las columnas de la fila del array
                            for (j in datos[i]) {
                                //alert(datos[i][j]);
                                //reemplaza los caracteres especiales en la celda del array
                                if (!isNull(datos[i][j])) {
                                    datos[i][j] = acentos(datos[i][j]);
                                }
                            }
                        }*/

                        $('input').each(function(index){
                            if (!$(this)[0].name.match(/contrasena/i) && $(this)[0].type!='submit' && datos[0][$(this)[0].name]!=undefined) {
                                $(this)[0].value=datos[0][$(this)[0].name];
                            }
                        });
                        $('textarea').each(function(index){
                            if (!$(this)[0].name.match(/contrasena/i) && $(this)[0].type!='submit' && datos[0][$(this)[0].name]!=undefined) {
                                $(this)[0].value=datos[0][$(this)[0].name];
                            }
                        });
                        //actualiza los campos select por el correspondiente en la busqueda del registro
                        $('select').each(function(index){
                            //si de casualidad el select es de tipo multiple
                            if($(this).attr('multiple')){
                                select=$(this).attr("id");
                                $("#"+select).each(function(){
                                     $("#"+select+
                                        " option").removeAttr('selected');
                                });
                                var element = datos[0][$(this)[0].name].split(",");
                                $.each(element,function(index,value){
                                     $("#"+select+
                                         " option[value='"+value+"']").attr('selected', 'selected');
                                });
                            }//fin if
                        else{
                                $("#"+$(this)[0].name+
                                    " option[value='"+datos[0][$(this)[0].name]+"']").attr('selected', 'selected');
                            }//fin else
                        });
                         //me trae todos los datos de un grid
                        $('#formulario table[id*=grid]').each(function(index,value){                            
                            var colnames="";
                            var id_grid=value.id;
                            var fila = $("#"+id_grid).getGridParam("colModel");
                                $.each(fila,function(indice,param){
                                    $.each(param,function(indice1,param1){
                                       if(indice1=="name" && param1!="id"){
                                           colnames+="#"+param1;
                                       }
                                    });
                                });
                                //Lo que viene del form en la tabla ej: <table id="xx" condicion="xx"></table>
                                var condicion_form=$("#"+id_grid).attr("condicion").split("#");
                                condicion=condicion_form[1]+"#"+$("#"+condicion_form[0]).val();                                
                                
                            $.ajax({
                                type: "POST",
                                url: base_url+'/operacion',
                                data: "oper=grid_modal&tabla="+id_grid+"&elementos="+colnames+"&filter="+condicion,
                                success: function(data){
                                    data=JSON.parse(data);
                                    $("#"+id_grid).clearGridData();
                                    var id=0;
                                    $.each(data,function(index,value){
                                          $("#"+id_grid).addRowData(++id,value);//fin  addRowData                                          
                                    });                                    
                                }
                            });
                        });//fin del recorrido de todos los grids
                    },
                    error:function(data){
                        datos=JSON.parse(data);
                       $.achtung({
                            message: datos,
                            timeout:5
                        });
                    }
                });
                $(form).dialog('open');
                oper="edit";
            } else {
                $.achtung({
                    message: "¡Seleccione un elemento a modificar!",
                    timeout:5
                });
            }
    });

}

function reestablecer(){
    $('input').each(function(index){
        if (($(this)[0].type!='submit')&&($(this)[0].type!='button')&&($(this)[0].className!='ui-pg-input')&&($(this)[0].type!='hidden'))
            $(this)[0].value="";
    });
    $('select').each(function(index){
        $(this)[0].value="";
    });
    $('textarea').each(function(index){
        $(this)[0].value="";
    });
    $('#formulario table[id*=grid]').each(function(index,value){        
        $('#'+value.id).clearGridData();
    });
   
}

function guardar(grid,base_url){    
    var datos="";
    var id_row="";
    if (typeof gr!="undefined") {id_row=gr;}

    //me extrae todos los inputs exceptuando los inputs button y los que vienen vacios
    $('input').each(function(index){
        //la funcion substr la uso para buscar en la variable un patron que es comun y no cargarlo en el array
        if ($(this)[0].name!="" && $(this)[0].name.substr(-5)!="_grid") {
            datos=datos+"&"+$(this)[0].name+"="+$(this)[0].value;
        }
    });
    $('textarea').each(function(index){
        //la funcion substr la uso para buscar en la variable un patron que es comun y no cargarlo en el array
        if ($(this)[0].name!="" && $(this)[0].name.substr(-5)!="_grid") {
            datos=datos+"&"+$(this)[0].name+"="+$(this)[0].value;
        }
    });
    //me trae todos los select del formulario
    $('select').each(function(index){
        if($(this).attr('multiple')){
            id=$(this).attr('id')
            selected='';
            $("#"+id+" option:selected").each(function(){
                selected+=$(this).val() + ',';
            });
            datos+="&"+$(this).attr("id")+"="+selected.substr( 0, selected.length - 1 );
        } else {
        datos=datos+"&"+$(this)[0].name+"="+$(this)[0].value;
        }
    });
    //me trae todos los datos de un grid
    $('#formulario table[id*=grid]').each(function(index,value){        
        ids_grid=$("#"+value.id).getDataIDs();
        var datos_grid="";        
        if (ids_grid){
            $(ids_grid).each(function(index,valor){
                //obteniendo los valores de cada fila
                var fila = $("#"+value.id).getRowData(valor);
                $.each(fila,function(indice,param){                    
                    if(indice!="id"){
                        datos_grid+=param+"#";                        
                    }
                });
                datos_grid=datos_grid.substr(0,(datos_grid.length-1));
                datos_grid+="FIN";
            });
        }
        datos_grid=datos_grid.substr(0,(datos_grid.length-3));
        datos+="&"+value.id+"="+datos_grid;
    });    

    $.ajax({
        type: "POST",
        url: base_url+'/operacion',
        data: "oper="+oper+"&id="+id_row+datos,
        success: function(data){
            if (data=="\n" || data==""){
                $.achtung({
                    message: "Dato Guardado",
                    timeout:5
                });
                $("#formulario").dialog("close");
                $(grid).trigger("reloadGrid");
            }else {
                 $.each(data, function(clave,valor){
                     $.achtung({
                        message: valor,
                        timeout:5
                    });
                  });
            }//fin else
        },//fin success
        error:function(data){
            $.achtung({
                message: data.responseText,
                timeout:5
            });
        }
    });
}