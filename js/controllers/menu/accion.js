$(document).ready(function() {
  $(":radio[name='parent'][value='']").attr("checked","checked")
  //if(!$(":radio[name='parent']:checked").val())
    $("#hijo").hide();


     /// SOBREESCRITURA A LA HORA DE GUARDAR
   jQuery.guardar = function(grid,base_url) {
        var id_row = $(grid).jqGrid('getGridParam','selrow');
        if(validar())
              $.post($("form").attr("action"),$("form").serialize()+"&oper="+oper+"&id="+id_row, function(data){
                    $.msj_success(data,grid);
                   //$.menu(1);
              });
    };//fin guardar
    //
       //cuando decida que sera un hijo o un padre
       $(":radio[name='parent']").click(function(){
	 if($(this).val())
	 {$("#hijo").show();
	   $("#menu_prueba ul").html("");
	    $.menu(1);
	   //var result="";$('#grupo option:selected').each(function(i,item){result += $(this).val() + ",";});
	  // alert(result)
	 }
	 else
	 {
	   $("#hijo").hide();
	  //alert("padre")  
	 }
      });//fin click en un radio

       $("#grupoChoice").change(function(){
	 $.menu(1);
       });

      /* $("#grupo").change(function(){
	 MostrarOpcionesGroup()
       });
       */

    jQuery.menu = function(bandera) 
       {
	 	$.post('/menu/menu_select',{"grupoId":$("#grupoChoice option:selected").val(),"grupoNombre":$("#grupoChoice option:selected").text()}, function(data){
		 $("#menu_prueba ul").html(data)
                 if(bandera)
                     {
		 	 $("#idparent").val('')
			 $("#nombreparent").val('')
			 $("#groupParentDiv").text('')
                      }
		});
       }//fin menu

       function MostrarOpcionesGroup()
       {
           $("#grupoChoice option").hide();
           $('#grupo option:selected').each(function(i,item){$("#grupoChoice option[value="+item.value+"]").show().attr("selected",true); });
       }//fin mostraropcionesgroup
       
       $(".custom_menu").live("click",function(){
	 $("#idparent").val($(this).attr("id"))
	 $("#nombreparent").val($(this).text());
         
         group=$(this).attr("grupo").split(",");
         group.shift();
         group.pop();
         $("input[name=groupParentDiv_hidden]").val(group);
         var result="";$(group).each(function(i,item){result += $("#grupo option[value="+item+"]").text() + " , ";});
	 $("#groupParentDiv").text(result)
      })
      
      function validar()
      {
        bandera=true;
          if($(":radio[name='parent']:checked").val())
              {
              if( $("#idparent").val()=="")
                  {
                    $.achtung({message: 'Seleccione al menos un padre', timeout:5});
                    bandera=false;
                  }
                else
                {
                    group=$("input[name=groupParentDiv_hidden]").val().split(",");
                    group_selected=$('#grupo option:selected');
                    iguales=0;
                    NoMenu=true;
                    $(group).each(function(i,e){ 
                                $(group_selected).each(function(i,a){
                                       if(e==+a.value)
                                           iguales++;
                                       if($("#grupoChoice option:selected").val()==a.value)
                                           NoMenu=false;
                                  });
                              })
                   if(NoMenu)
                   {
                       $.achtung({message: 'Seleccione el grupo del menu <'+$("#grupoChoice option:selected").text()+'>', timeout:5});
                       bandera=false;
                   }                              
                   if(iguales==0)
                   {
                       $.achtung({message: 'Por favor seleccione al menos un grupo del padre', timeout:5});
                       bandera=false;
                   }
                }
              }
              if($(":radio[name='parent']:checked").val() && bandera)
                 $(":radio[name='parent']:checked").val($("#idparent").val());
             
          return bandera;
      }
});


