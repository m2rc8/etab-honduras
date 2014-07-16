
$(document).ready(function() {
    // *****************
    //Con esto se verifica el comportamiento del area de gráfico
    //Si se despliega algún menú dentro del gráfico se modifica un atributo
    //ccs para que se muestre correctamente se regresa a su modo normal cuando el menú se cierra
    //para esto fue necesario reescribir unos métodos de jQuery
	var cookies = document.cookie.split(";");
	for(var i=0; i < cookies.length; i++) {
		var equals = cookies[i].indexOf("=");
		var name = equals > -1 ? cookies[i].substr(0, equals) : cookies[i];		
		document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
	}
						
    (function(){
        var methods = ["addClass", "toggleClass", "removeClass"]; //métodos a sobreescribir
        $.map(methods, function(method){
            var originalMethod = $.fn[ method ];            
            $.fn[ method ] = function(){                
                var result = originalMethod.apply( this, arguments ); // Execute the original method.                
                myfunction(this); // call your function                
                return result; // return the original result
            };
        });
    })();
    
    function myfunction(obj){
        if($(obj).hasClass('sobre_div'))
            if ($(obj).hasClass('open'))
                $('.zona_actual').css('overflow-y','visible');            
            else
                $('.area_grafico').filter(function(){ return $(this).css('overflow-y') === 'visible';}).css('overflow-y','auto');        
    }    
    // *****************
    
    jQuery(document).ajaxStart(function() {
        $('#div_carga').show();
    }).ajaxStop(function() {
        $('#div_carga').hide();
    });
            
    $( "#sala" ).sortable({
        handle: '.titulo',                
    });
    $( "#sala" ).disableSelection();
       
    $('.indicador').click(function() {
		mid=$(this).attr("data-id");
		if($(this).hasClass("active"))
		{
			$("#"+mid).removeClass("active");
			$("#"+mid).removeClass("btn-success");			
			$("#"+mid).html('<i class="glyphicon glyphicon-plus"></i>');
			
			$("#fav-"+mid).removeClass("active");
			$("#fav-"+mid).removeClass("btn-success");			
			$("#fav-"+mid).html('<i class="glyphicon glyphicon-plus"></i>');
			
			id=$("span[data-id='"+$(this).attr('data-id')+"']").parent('div').parent('div').attr('id');
			$(".zona_actual").removeClass("zona_actual");
			$("#"+id).addClass("zona_actual");
			limpiarZona2(id);
			$("#"+id).remove();
		}
		else
		{
			sala_agregar_fila(); 
			
			$("#"+mid).addClass("active btn-success");
			$("#"+mid).html('<i class="glyphicon glyphicon-ok"></i>');
			
			$("#fav-"+mid).addClass("active btn-success");
			$("#fav-"+mid).html('<i class="glyphicon glyphicon-ok"></i>');
			
			dibujarIndicador($(this).attr('data-id'));
		}
    });
	$('.salas-id').click(function() {
		titulo=$(this).attr('sala-nombre');
		sala=$(this).attr('sala-id');
		var id=this.id.split("_");
		id=id[1];
		if($("#a_"+id).hasClass("active")||$("#b_"+id).hasClass("active")||$("#c_"+id).hasClass("active"))
		{  
			$("#a_"+id).removeClass("active");
			$("#b_"+id).removeClass("active");
			$("#c_"+id).removeClass("active");
			
			$("#a_"+id).removeClass("btn-success");	
			$("#b_"+id).removeClass("btn-success");	
			$("#c_"+id).removeClass("btn-success");		
				
			$("#a_"+id).html('<i class="glyphicon glyphicon-plus"></i>');
			$("#b_"+id).html('<i class="glyphicon glyphicon-plus"></i>');
			$("#c_"+id).html('<i class="glyphicon glyphicon-plus"></i>');
			$(".area_grafico").remove();
			$('#nombre_sala2').html('');
		}
		else
		{
			$('.salas-id').removeClass("btn-success");
			$('.salas-id').removeClass("active");
			$('.salas-id').html('<i class="glyphicon glyphicon-plus"></i>');
			
			$("#a_"+id).addClass("active btn-success");
			$("#b_"+id).addClass("active btn-success");
			$("#c_"+id).addClass("active btn-success");
			
			$("#a_"+id).html('<i class="glyphicon glyphicon-ok"></i>');
			$("#b_"+id).html('<i class="glyphicon glyphicon-ok"></i>');
			$("#c_"+id).html('<i class="glyphicon glyphicon-ok"></i>');
			
			$('#nombre_sala').attr('id-sala', sala);
			$('#nombre_sala').val(titulo);
			$('#nombre_sala2').html('<h4>Nombre de sala: ' + titulo + '</h4>');
	
			var graficos = JSON.parse($(this).attr('data'));
			var max_id = 0;
			for (i = 0; i < graficos.length; i++) {
				if (parseInt(graficos[i].posicion) > max_id)
					max_id = graficos[i].posicion;
			}
	
			$('#sala').html('');
			
			var filas = Math.ceil(max_id / 3);
			for (i = 1; i <= max_id; i++) {
				sala_agregar_fila();
			}
			
			for (i = 0; i < graficos.length; i++) 
			{
				$('DIV.zona_actual').removeClass('zona_actual');
				$("#sala .area_grafico:nth-child("+(i+1)+")").addClass('zona_actual');
	
				recuperarDimensiones(graficos[i].idIndicador, graficos[i]);
			}
		}
    });   
    function dibujarIndicador(id_indicador) {
        recuperarDimensiones(id_indicador, null);
    }

    $('#agregar_fila').click(function() {
        sala_agregar_fila();        
    });
	
	$('#quitar_fila').click(function() {
        sala_quitar_fila();        
    });

    $('#quitar_indicador').click(function() {
        limpiarZona2($('DIV.zona_actual').attr('id'));
    });

    function ver_ficha_tecnica(id_indicador) {
        $.get(Routing.generate('get_indicador_ficha', {id: id_indicador}));
    }

    $('DIV.area_grafico').click(function() {
        zona_elegir(this);
    });

    function zona_elegir(zona) {
        $('DIV.zona_actual').removeClass('zona_actual');
        $(zona).addClass('zona_actual');
    }

    function sala_agregar_fila() {
        var cant = 1  +  Math . floor ( Math . random ()  *  999999999 );
        var html =  '<div class="area_grafico zona_actual" data-id="'+parseInt(cant+1)+'" id="grafico_' + parseInt(cant+1) + '" >' +
                        "<DIV class= 'titulo'><span class='titulo_indicador '></span>"+
                            "<span>("+trans.por+" <span class='dimension' ></span>)</span>"+
                        '</DIV>'+
                        '<h6 class="filtros_dimensiones"></h6>' +
                        '<div class="controles btn-toolbar" style="margin-bottom:30px"></div>' +
                        '<div class="info" ></div>' +
                        '<div class="row_grafico" >' +
                            '<div class="grafico" ></div>' +
                        '</div>' +                        
                    '</DIV>';         

        $('#sala').append(html);        
        $('DIV.area_grafico').click(function() {
            zona_elegir(this);
        });
    }
	
	function sala_quitar_fila() {
        var cant = $('DIV.area_grafico').length;
		if(parseInt(cant)>1)
        $('#grafico_' + parseInt(cant)).remove();                
    }

    $('#guardar_sala').click(function() {
        var arreglo_indicadores = [];
        var datos_sala = new Object();

        var nombre_sala = $('#nombre_sala').val();
        if (nombre_sala === '') {
            alert('Ingrese un nombre de sala');
            return;
        }
        var i = 0;
        var posicion = 1;
        $('.area_grafico').each(function() {
            if ($(this).find('.titulo_indicador').html() !== '') {
                var datos = new Object();
                var elementos = [];
                $('#'+ $(this).attr('id') +' .capa_dimension_valores input:checked').each(function() {
                    elementos.push($(this).val());
                }); 
                
                datos.id_indicador = $(this).find('.titulo_indicador').attr('data-id');
                datos.filtros = $(this).find('.filtros_dimensiones').attr('data');
                datos.filtro_desde = $('#'+$(this).attr('id')+' .filtro_desde').val();
                datos.filtro_hasta = $('#'+$(this).attr('id')+' .filtro_hasta').val();
                datos.filtro_elementos = elementos.toString();
                datos.dimension = $('#' + $(this).attr('id') + ' .dimensiones').val();
                datos.tipo_grafico = $('#' + $(this).attr('id') + ' .tipo_grafico_principal').val();
                datos.orden = $(this).attr('orden');
                datos.posicion = posicion;
                arreglo_indicadores[i] = datos;
                i++;
            }
            posicion++;

        });
        datos_sala.nombre = $('#nombre_sala').val();
        datos_sala.id = $('#nombre_sala').attr('id-sala');
        datos_sala.datos_indicadores = arreglo_indicadores;

        $.getJSON(Routing.generate('sala_guardar'), {datos: JSON.stringify(datos_sala)},
        function(resp) {
            if (resp.estado === 'ok') {
                $('#nombre_sala').attr('id-sala', resp.id_sala);
                $('#nombre_sala2').html('<h4>Nombre de sala: ' + $('#nombre_sala').val() + '</h4>');
                $('#myModal').modal('toggle');
            }
            else {
                $('#info_sala').html('_error_guardar_sala_').addClass('error');
            }

        });
    });       
});
