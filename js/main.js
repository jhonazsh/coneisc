$('#magistral').on('click', soloMagistral);
$('#especializada').on('click', soloEspecializada);
$('#todo').on('click', soloTodo);   // evento
$('#taller').on('click',soloTaller);

function quitarClase(){
	$('.titulofooter').removeClass('btn-cro');
}

function soloTaller(){
	quitarClase();
	$(this).addClass('btn-cro');
	$('article').each(function() {
		var elementoEtiquetado = $(this).data('target');
		if(elementoEtiquetado=='magistral'|| elementoEtiquetado=='evento' || elementoEtiquetado=='especializada'){
			$(this).hide();
		}
		else{
			$(this).show();
		}
	});

	$('div').each(function(){
		var elementoEtiquetado = $(this).data('target');
		if(elementoEtiquetado=='magistral'|| elementoEtiquetado=='evento' || elementoEtiquetado=='especializada'){
			$(this).toggle();
		}
		else{
			$(this).show();
		}
	});

	$('.salto').each(function(){
		var elementoEtiquetado = $(this).data('target');
		if(elementoEtiquetado=='magistral'|| elementoEtiquetado=='evento' || elementoEtiquetado=='especializada'){
			$(this).hide();
		}
		else{
			$(this).show();
		}
	});
	$('#desaparece3').hide();

}

function soloMagistral(){
	quitarClase();
	$(this).addClass('btn-cro');
	$('.timeline-entry').each(function() {
		var elementoEtiquetado = $(this).data('target');
		
		if(elementoEtiquetado=='especializada' || elementoEtiquetado=='evento' || elementoEtiquetado=='taller'){
			$(this).hide();
		}
		else{
			$(this).show();
		}
	});

	$('.timeline-entry-child').each(function(){
		var elementoEtiquetado = $(this).data('target');
		if(elementoEtiquetado=='especializada' || elementoEtiquetado=='evento' || elementoEtiquetado=='taller'){
			$(this).toggle();
		}
		else{
			$(this).show();
		}
	});

	$('.salto').each(function(){
		var elementoEtiquetado = $(this).data('target');
		if(elementoEtiquetado=='especializada' || elementoEtiquetado=='evento' || elementoEtiquetado=='taller'){
			$(this).toggle();
		}
		else{
			$(this).show();
		}
	});
	$('#desaparece').hide();

}

function soloEspecializada(){
	quitarClase();
	$(this).addClass('btn-cro');
	$('.timeline-entry').each(function(){
		var elementoEtiquetado = $(this).data('target');
		if(elementoEtiquetado=='taller' || elementoEtiquetado=='evento' || elementoEtiquetado=='magistral'){
			$(this).hide();
		}
		else{
			$(this).show();
		}
	});

	$('.timeline-entry-child').each(function(){
		var elementoEtiquetado = $(this).data('target');
		if(elementoEtiquetado=='taller' || elementoEtiquetado=='evento' || elementoEtiquetado=='magistral'){
			$(this).hide();
		}
		else{
			$(this).show();
		}
	});


	$('.salto').each(function(){
		var elementoEtiquetado = $(this).data('target');
		if(elementoEtiquetado=='taller' || elementoEtiquetado=='evento' || elementoEtiquetado=='magistral'){
			$(this).hide();
		}
		else{
			$(this).show();
		}
	});
	$('#desaparece2').hide();
}

function soloTodo(){
	quitarClase();
	$(this).addClass('btn-cro');
	$('.timeline-entry').each(function(){
		var elementoEtiquetado = $(this).data('target');
		$(this).show();
	});

	$('.timeline-entry-child').each(function(){
		var elementoEtiquetado = $(this).data('target');
		$(this).show();
	});

	$('.salto').each(function(){
		var elementoEtiquetado = $(this).data('target');
		$(this).show();
	});
}

$(document).load($(window).bind("resize", checkPosition));

function checkPosition()
{
    if($(window).width() < 769)
    {
        $('.left-aligned').addClass('cambia1').removeClass('left-aligned');
    } 
    else 
    {
        $('.cambia1').addClass('left-aligned').removeClass('cambia1');
    }
}