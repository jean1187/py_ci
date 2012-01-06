
$(document).ready(function() {
    
    
    var colNames=new Array('id','Nombre','url','parent','grupo');
    var colModel=[
                    {name:'id',index:'id',width:15,sorttype:"int",hidden:true},
                    {name:'nombre',index:'nombre', width:55, align:"left"},
                    {name:'url',index:'url', width:55, align:"left"},
                    {name:'parent',index:'parent', width:55, align:"left"},
                    {name:'grupo',index:'grupo', width:55, align:"left"},
                ];
    var rowList=new Array(15,30,60);
    var clase=$("input[name=clase]").val();
    
    $.init_jqgrid(clase,colNames,colModel,15,rowList,950,$(window).height()/2);

    $("#"+clase+"_grid").jqGrid('navGrid',"#"+clase+"_pager",{edit:false,add:false,del:false},{}, {},{}, {multipleSearch:true});
    $("#"+clase+"_grid").jqGrid('navButtonAdd',"#"+clase+"_pager",{
        caption: "Columnas",
        title: "Mostrar/Ocultar Columnas",
        onClickButton : function (){
            jQuery("#"+clase+"_grid").jqGrid('setColumns');
        }
    });
    

    formulario(clase,"",base_url,nombre_programa,960,400,40);


        //SobreEscritura a la hora de buscar
         jQuery.peticion_ajax_edit = function(grid,base_url,form) {
             gr = $(grid).jqGrid('getGridParam','selrow');
             case_server=($(grid).jqGrid('getRowData',gr).parent!="")?"":"search_edit_parent";
             ///////////////////////////////////////////////
                 jQuery.rell_campos_especificos = function(datos) {
                        if(case_server=="")
                            {//en caso de ser hijo
                                $(":radio[name='parent'][value!='']").attr("checked","checked");
                                $("#hijo").show();
                                //Rellenando los DIVS
                                grupos_db=datos[0]["groupParentDiv"].split(",");
                                $("input[name=groupParentDiv_hidden]").val(datos[0]["groupParentDiv"]);
                                var result="";$(grupos_db).each(function(i,item){result += (item!="")?$("#grupo option[value="+item+"]").text()+" , ":"";});
                                $("#groupParentDiv").text(result)
                                //$("#groupParentDiv").text(datos[0]["groupParentDiv"]);
                            }//fin if
                        else {$(":radio[name='parent'][value='']").attr("checked","checked");$("#hijo").hide();}
                 };//fin rellenar campos especificos
             ///////////////////////////////////////////////
                $.busqueda (grid,base_url,form,case_server);
           $.menu(0);
        };//fin peticion ajax edit 


    jQuery.hacer_antes_De_Abrir = function() {
        $("input[type='text']").val("");
        $(":radio[name='parent'][value='']").attr("checked","checked");$("#hijo").hide();
    };//fin hacer antes De Abrir
    
});//fin $(document).ready(function() {

