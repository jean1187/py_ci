$(document).ready(function() {
  
  $("#organos").change(function(){
      $("#entidades option[value!=-1]").hide();
      if(this.value!=-1)
         $.buscandoEntidades(this.value);
  });//fin cambio de organo
  
    jQuery.buscandoEntidades = function(id,indexSelect) {
        $.post(base_url+'/operacion', {oper:"search_entidades","id":id}, function(data){
             data=JSON.parse(data);  
             $('#entidades').html("");
                    $.each(data,function(key,value){
                        $('#entidades').append(new Option(value,key));
                    });
              $("#entidades option[value='"+indexSelect+"']").attr('selected', 'selected');
         });//fin post
    };//fin hacer_antes
  
  
  
});//fin document ready


