$(document).ready(function() 
{    
    var colNames=new Array('id','Nombre');
    var colModel=[
                    {name:'id',index:'id',width:15,sorttype:"int",hidden:true},
                    {name:'nombre',index:'nombre', width:55, align:"left"},
                ];
    var rowList=new Array(15,30,60);
    var clase=$("input[name=clase]").val();
    
    $.init_jqgrid(clase,colNames,colModel,15,rowList,950,$(window).height()/2);

    $("#"+clase+"_grid").jqGrid('navGrid',"#"+clase+"_pager",{edit:false,add:false,del:false},{}, {},{}, {multipleSearch:true});
    
    formulario(clase,"",base_url,nombre_programa,400,150);

});//fin $(document).ready(function() 