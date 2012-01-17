function formulario(clase,form,base_url,nombre_programa,width,heigth,position){
  //  inicializando variables
    w=width;
    h=heigth;
    if(width=="" || width==0 || width==null ||width=="undefined"){w=628;}         
    if(heigth!="" || heigth!=0 || height!=null || height!="undefined"){h=heigth;}       

    if (form=="") {form="#formulario";}

    $("#accordion").accordion();

    $("input[id*='agregar']").click(function(){
        $(".reset").resetear();
        
        $.hacer_antes();
        
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
    yearRange: '1900:2020',
};

var buttons={
                "Cerrar": function(){$(form).dialog("close");},
                "Reestablecer":function(){$(".reset").resetear();},
                "Guardar":function(){$.guardar("#"+clase+"_grid",base_url);}
            };
            
    $(form)
    .load(base_url+'/grid_form')
    .dialog
        ({
            autoOpen: false,
            buttons: buttons,
            dialogClass: "ui-state-hover",
            closeOnEscape: true,
            draggable: false,
            modal: true,
            title:nombre_programa,
            position: ["center", position],
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
        $.peticion_delete("#"+clase+"_grid",base_url,"");
    });

    jQuery.peticion_delete = function(grid,base_url,datos) {
            var gr = $(grid).jqGrid('getGridParam','selrow');
            if( gr != null ){
                if (confirm("¿Está seguro(a) que desea eliminar el elemento seleccionado?")){
                    datos=(datos=="")?"oper=del&id="+gr:datos;
                    $.ajax({
                        type: "POST",
                        url: base_url+'/operacion',
                        data: datos,
                        success: function(data){
                             if (data=="1" || data=="" || data=="\n")
                               {
                                    $.achtung({message: "Registro eliminado exitosamente",timeout:5});
                                    $(grid).trigger("reloadGrid");
                                }
                           else
                               {
                                   $.achtung({message: data,timeout:5});
                               }
                        },
                        error:function(data){
                            $.achtung({message: data.responseText,timeout:5});
                        }
                    });
                }
            }
            else $.achtung({
                message: "¡Seleccione un elemento a eliminar!",
                timeout:5
            });    
    }//peticion_delete
    
    $("input[id*='modificar']").click(function(){
        $.peticion_ajax_edit("#"+clase+"_grid",base_url,form);
        /*var datos="";
        gr = $("#"+clase+"_grid").jqGrid('getGridParam','selrow');        
            if( gr != null ){
                $.ajax({
                    type: "POST",
                    url: base_url+'/operacion',
                    data: "oper=search_edit&id="+gr,
                    success: function(data){
                    datos=JSON.parse(data);                    

                        //recorre el array
                        for (i=0;i<datos.length;i++) {
                            //recorre las columnas de la fila del array
                            for (j in datos[i]) {
                                //alert(datos[i][j]);
                                //reemplaza los caracteres especiales en la celda del array
                                if (!isNull(datos[i][j])) {
                                    datos[i][j] = acentos(datos[i][j]);
                                }
                            }
                        }

                        $('input').each(function(index){
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
                    },
                    error:function(data){
                        $.mesages_validation(data);
                    }
                });
                $(form).dialog('open');
                oper="edit";
            } else {
                $.achtung({
                    message: "¡Seleccione un elemento a modificar!",
                    timeout:5
                });
            }*/
    });

}


    jQuery.guardar = function(grid,base_url) {
            $.peticion_ajax(grid,base_url);        
    };//fin guardar

    jQuery.peticion_ajax = function(grid,base_url) {

        var id_row="";
        if (typeof gr!="undefined") {id_row=gr;}

          $.ajax({
            type: "POST",
            url: base_url+'/operacion',
            data: $("form").serialize()+"&oper="+oper+"&id="+id_row,
            success: function(data){
                    $.msj_success(data,grid);
            },//fin success
            error:function(data){
                $.achtung({message: data.responseText,timeout:5});
            }
        }); 

    };//fin peticion ajax
    
     jQuery.msj_success= function(data,grid) {
        if (data=="\n" || data==""){
                    $("#formulario").dialog("close");
                    $(grid).trigger("reloadGrid");
                }
           $.mesages_validation(data);
     };

     jQuery.peticion_ajax_edit = function(grid,base_url,form) {

        $.busqueda (grid,base_url,form,"");

    };//fin peticion ajax edit  
 
     jQuery.busqueda = function(grid,base_url,form,case_server) {

        var datos="";
        case_server=(case_server=="")?"search_edit":case_server;
        gr = $(grid).jqGrid('getGridParam','selrow');        
            if( gr != null ){
                $.ajax({
                    type: "POST",
                    url: base_url+'/operacion',
                    data: "oper="+case_server+"&id="+gr,
                    success: function(data){
                    datos=JSON.parse(data);                    
                        $.rell_campos_global(datos);
                        $.rell_campos_especificos(datos);
                    },
                    error:function(data){
                        $.mesages_validation(data);
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

    };//fin busqueda

    jQuery.rell_campos_global = function(datos) {
        $("input").each(function(i,valor){
             if (datos[0][valor.name]!=undefined && !valor.name.match(/contrasena/i) && valor.type!='submit') {
                         valor.value=datos[0][valor.name];
                      }
        });
        $('select').each(function(index,valor){
                            //si de casualidad el select es de tipo multiple
                            if(valor.multiple){
                                    $("#"+valor.id).each(function(){
                                         $("#"+valor.id+" option").removeAttr('selected');
                                    });
                                    var element = datos[0][valor.id].split(",");
                                    $.each(element,function(index,value){
                                       $("#"+valor.id+" option[value='"+value+"']").attr('selected', 'selected');
                                     });
                            }//fin if
                            
                        else{
                                $("select[name='"+valor.name+"'] option[value='"+datos[0][valor.name]+"']").attr('selected', 'selected');
                            }//fin else
                            
        });//fin each select
        
    };//fin rellenar campos global

    jQuery.rell_campos_especificos = function(datos) {

    };//fin rellenar campos especificos
    

    jQuery.hacer_antes = function() {

    };//fin hacer_antes


    jQuery.fn.resetear = function(){
        this.each( function(){
            switch(this.tagName)
             {
                    case 'INPUT':
                        switch(this.type)
                            {
                                case 'text':
                                    this.value="";
                                break;
                            }
                    break;
                    case 'TEXTAREA':
                        this.value="";
                    break;
                    case 'SELECT':
                        this.options[0].selected=true;
                    break;
             }
        });
    }//reset
    
    
    jQuery.init_jqgrid = function(clase,colNames,colModel,rowNum,rowList,width,height) {
        
        base_url=$("input[name=ruta_ejecutor]").val();
        
        nombre_programa=$("input[name=nombre_programa]").val();
        
        rowList=(rowList=="")?new Array(5,10,15):new Array(15,30,60);
        
        rowNum=(rowNum=="")?5:15;
        
        colNames=(colNames=="")?new Array("id","Nombre"):colNames;
        
        colModel=(colModel=="")?[{name:'id',index:'id',width:15,sorttype:"int",hidden:true},{name:'nombre',index:'nombre', width:55, align:"left"}]:colModel;
        
                $("#"+clase+"_grid").jqGrid({
                    url: base_url+'/operacion',
                    mtype : "post",
                    datatype: "json",
                    //nombre    que aparecera en jqgrid
                    colNames:colNames,
                    colModel:colModel,
                    rowNum:rowNum,
                    postData:{
                        oper:'json'
                    },
                    width: width,
                    height:height,       
                    rowList:rowList,
                    pager: "#"+clase+"_pager",
                    sortname: 'id',
                    hidegrid: false,
                    viewrecords: true,
                    editurl:base_url+'/operacion',
                    caption:nombre_programa
            });
    };//instanciar jqgrid