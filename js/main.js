
$('#magistral').on('click', soloMagistral);
$('#especializada').on('click', soloEspecializada);
$('#todo').on('click', soloTodo);

function soloMagistral(){

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