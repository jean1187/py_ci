(function(a){a.jgrid={defaults:{recordtext:"Mostrando {0} - {1} de {2}",emptyrecords:"Sin registros que mostrar",loadtext:"Cargando...",pgtext:"P&aacute;gina {0} de {1}"},search:{caption:"B&uacute;squeda...",Find:"Buscar",Reset:"Limpiar",odata:["igual ","no igual a","menor que","menor o igual que","mayor que","mayor o igual a","empiece por","no empiece por","est&aacute; en","no est&aacute; en","termina por","no termina por","contiene","no contiene"],groupOps:[{op:"AND",text:"todo"},{op:"OR",text:"cualquier"}],matchText:" match",rulesText:" reglas"},edit:{addCaption:"Agregar registro",editCaption:"Modificar registro",bSubmit:"Guardar",bCancel:"Cancelar",bClose:"Cerrar",saveData:"Se han modificado los datos, ¿guardar cambios?",bYes:"Si",bNo:"No",bExit:"Cancelar",msg:{required:"Campo obligatorio",number:"Introduzca un n&uacute;mero",minValue:"El valor debe ser mayor o igual a ",maxValue:"El valor debe ser menor o igual a ",email:"no es una direcci&oacute;n de correo v&aacute;lida",integer:"Introduzca un valor entero",date:"Introduza una fecha correcta ",url:"no es una URL v&aacute;lida. Prefijo requerido ('http://' or 'https://')",nodefined:" no est&aacute; definido.",novalue:" valor de retorno es requerido.",customarray:"La funci&oacute;n personalizada debe devolver un array.",customfcheck:"La funci&oacute;n personalizada debe estar presente en el caso de validaci&oacute;n personalizada."}},view:{caption:"Consultar registro",bClose:"Cerrar"},del:{caption:"Eliminar",msg:"¿Desea eliminar los registros seleccionados?",bSubmit:"Eliminar",bCancel:"Cancelar"},nav:{edittext:" ",edittitle:"Modificar fila seleccionada",addtext:" ",addtitle:"Agregar nueva fila",deltext:" ",deltitle:"Eliminar fila seleccionada",searchtext:" ",searchtitle:"Buscar informacion",refreshtext:"",refreshtitle:"Recargar datos",alertcap:"Aviso",alerttext:"Seleccione una fila",viewtext:"",viewtitle:"Ver fila seleccionada"},col:{caption:"Mostrar/ocultar columnas",bSubmit:"Enviar",bCancel:"Cancelar"},errors:{errcap:"Error",nourl:"No se ha especificado una URL",norecords:"No hay datos para procesar",model:"Las columnas de nombres son diferentes de las columnas de modelo"},formatter:{integer:{thousandsSeparator:".",defaultValue:"0"},number:{decimalSeparator:",",thousandsSeparator:".",decimalPlaces:2,defaultValue:"0,00"},currency:{decimalSeparator:",",thousandsSeparator:".",decimalPlaces:2,prefix:"",suffix:"",defaultValue:"0,00"},date:{dayNames:["Do","Lu","Ma","Mi","Ju","Vi","Sa","Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado"],monthNames:["Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic","Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"],AmPm:["am","pm","AM","PM"],S:function(b){return b<11||b>13?["st","nd","rd","th"][Math.min((b-1)%10,3)]:"th"},srcformat:"Y-m-d",newformat:"d-m-Y",masks:{ISO8601Long:"Y-m-d H:i:s",ISO8601Short:"Y-m-d",ShortDate:"n/j/Y",LongDate:"l, F d, Y",FullDateTime:"l, F d, Y g:i:s A",MonthDay:"F d",ShortTime:"g:i A",LongTime:"g:i:s A",SortableDateTime:"Y-m-d\\TH:i:s",UniversalSortableDateTime:"Y-m-d H:i:sO",YearMonth:"F, Y"},reformatAfterEdit:false},baseLinkUrl:"",showAction:"",target:"",checkbox:{disabled:true},idName:"id"}}})(jQuery);