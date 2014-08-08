
$('#magistral').on('click', soloMagistral);
$('#especializada').on('click', soloEspecializada);
$('#todo').on('click', soloTodo);   // evento
$('#taller').on('click',soloTaller);

function quitarClase(){
	$('.titulofooter').removeClass('btn-cro');
}

function soloTaller(){
	quitarClase();
	$('#taller').addClass('btn-cro');
	$('.timeline-entry').each(function() {
		var elementoEtiquetado = $(this).data('target');
		if(elementoEtiquetado=='especializada' || elementoEtiquetado=='evento' || elementoEtiquetado=='magistral'){
			$(this).hide();
		}
		else{
			$(this).show();
		}
	});

	$('.timeline-entry-child').each(function(){
		var elementoEtiquetado = $(this).data('target');
		if(elementoEtiquetado=='especializada' || elementoEtiquetado=='magistral'){
			$(this).toggle();
		}
		else{
			$(this).show();
		}
	});

}

function soloMagistral(){
	quitarClase();
	$('#magistral').addClass('btn-cro');
	$('.timeline-entry').each(function() {
		var elementoEtiquetado = $(this).data('target');
		if(elementoEtiquetado=='especializada' || elementoEtiquetado=='evento'){
			$(this).hide();
		}
		else{
			$(this).show();
		}
	});

	$('.timeline-entry-child').each(function(){
		var elementoEtiquetado = $(this).data('target');
		if(elementoEtiquetado=='especializada'){
			$(this).toggle();
		}
		else{
			$(this).show();
		}
	});

}

function soloEspecializada(){
	quitarClase();
	$('#especializada').addClass('btn-cro');
	$('.timeline-entry').each(function(){
		var elementoEtiquetado = $(this).data('target');
		if(elementoEtiquetado=='magistral' || elementoEtiquetado=='evento'){
			$(this).hide();
		}
		else{
			$(this).show();
		}
	});

	$('.timeline-entry-child').each(function(){
		var elementoEtiquetado = $(this).data('target');
		if(elementoEtiquetado=='magistral'){
			$(this).hide();
		}
		else{
			$(this).show();
		}
	});
}

function soloTodo(){
	quitarClase();
	$('#todo').addClass('btn-cro');
	$('.timeline-entry').each(function(){
		var elementoEtiquetado = $(this).data('target');
		if(elementoEtiquetado=='magistral' || elementoEtiquetado=='evento' || elementoEtiquetado=='especializada'){
			$(this).show();
		}
	});

	$('.timeline-entry-child').each(function(){
		var elementoEtiquetado = $(this).data('target');
		if(elementoEtiquetado=='magistral' || elementoEtiquetado=='especializada'){
			$(this).show();
		}
	});
}