$(document).ready(function() 
{    
    var colNames=new Array('id','Nombre','Apellido','Organo','Entidad','Cargo');
    var colModel=[
                    {name:'id',index:'id',width:15,sorttype:"int",hidden:true},
                    {name:'nombre',index:'nombre', width:55, align:"left"},
                    {name:'apellido',index:'apellido', width:55, align:"left"},
                    {name:'organo',index:'organo', width:55, align:"left"},
                    {name:'entidad',index:'entidad', width:55, align:"left"},
                    {name:'cargo',index:'cargo', width:55, align:"left"},
                ];
    var rowList=new Array(15,30,60);
    var clase=$("input[name=clase]").val();
    
    $.init_jqgrid(clase,colNames,colModel,15,rowList,950,$(window).height()/2);

    $("#"+clase+"_grid").jqGrid('navGrid',"#"+clase+"_pager",{edit:false,add:false,del:false},{}, {},{}, {multipleSearch:true});
    
    formulario(clase,"",base_url,nombre_programa,980,300,40);


    jQuery.hacer_antes = function() {
        $("#entidades option[value=0]").attr('selected', 'selected');
        $("#entidades option[value!=0]").hide();
    };//fin hacer_antes
    
    jQuery.rell_campos_especificos = function(datos) {
        $.hacer_antes();
        if(datos[0]['entidades'])
                $.buscandoEntidades(datos[0]["organos"],datos[0]['entidades']);
            
    };//fin rellenar campos especificos

});//fin $(document).ready(function() 