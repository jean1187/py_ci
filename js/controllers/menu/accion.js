$(document).ready(function() {
  $(":radio[name='parent'][value='']").attr("checked","checked")
  //if(!$(":radio[name='parent']:checked").val())
    $("#hijo").hide();
       $("#guardar").click(function(event){
          $.post($("form").attr("action"),$("form").serialize(), function(data){
               $.mesages_validation(data);
          });
          event.preventDefault(); 
       });

       //cuando decida que sera un hijo o un padre
       $(":radio[name='parent']").click(function(){
	 if($(this).val())
	 { $("#hijo").show();
	   $("#menu_prueba ul").html("");
	    menu();
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
	 menu()
       });
       
       function menu()
       {
	 	$.post('/menu/menu_select',{"grupoId":$("#grupoChoice option:selected").val(),"grupoNombre":$("#grupoChoice option:selected").text()}, function(data){
		 $("#menu_prueba ul").html(data)
		 	 $("#idparent").val('')
			 $("#nombreparent").val('')
			 $("#groupParentDiv").text('')
		});
       }//fin menu
       
       
       $(".custom_menu").live("click",function(){
	 $("#idparent").val($(this).attr("id"))
	 $("#nombreparent").val($(this).text())
	 $("#groupParentDiv").text($(this).attr("grupo"))
      })
});


