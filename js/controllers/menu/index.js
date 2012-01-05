/************No modificar estas lineas!!!************/
base_url=$("input[name=ruta_ejecutor]").val();
nombre_programa=$("input[name=nombre_programa]").val();
/****************************************************/
$(document).ready(function() {
    $("#cargos_grid").jqGrid({
        url: base_url+'/operacion',
        mtype : "post",
        datatype: "json",
        //nombre    que aparecera en jqgrid
        colNames:['id','Nombre','url','parent','grupo'],
        colModel:[
            {name:'id',index:'id',width:15,sorttype:"int",hidden:true},
            {name:'nombre',index:'nombre', width:55, align:"left"},
            {name:'url',index:'url', width:55, align:"left"},
            {name:'parent',index:'parent', width:55, align:"left"},
            {name:'grupo',index:'grupo', width:55, align:"left"},
            
        ],
        rowNum:15,
        postData:{
            oper:'json'
        },
        width: 950,
        height:$(window).height()/2,       
        rowList:[15,30,60],
        pager: '#cargos_pager',
        sortname: 'id',
        hidegrid: false,
        viewrecords: true,
        editurl:base_url+'/operacion',
        caption:nombre_programa
    });
    $("#cargos_grid").jqGrid('navGrid','#cargos_pager',{edit:false,add:false,del:false},{}, {},{}, {multipleSearch:true});
    $("#cargos_grid").jqGrid('navButtonAdd','#cargos_pager',{
        caption: "Columnas",
        title: "Mostrar/Ocultar Columnas",
        onClickButton : function (){
            jQuery("#cargos_grid").jqGrid('setColumns');
        }
    });
    

       formulario("cargos","",base_url,nombre_programa,960,400);


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
                        else {$(":radio[name='parent'][value='']").attr("checked","checked"); $("#hijo").hide();}
                 };//fin rellenar campos especificos
             ///////////////////////////////////////////////
                $.busqueda (grid,base_url,form,case_server);
           $.menu(0);
        };//fin peticion ajax edit 





});//fin $(document).ready(function() {

