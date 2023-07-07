var $j = jQuery.noConflict();

$j(document).ready(function($) {

	var id_filho_ativo;
	var data;
	
	$j(document).on('click', '.button_filho_ativo', function(event) {
		event.preventDefault();
		
		id_filho_ativo = $(this).attr('id-filho-ativo')
	});

	$j(document).on('click', '.btn_filho_inativo', function(event) {
		event.preventDefault();
		
		var id_filho_inativo = $(this).attr('id-filho-inativo');
		var destino = site_url + '/fases?ativar_filho='+id_filho_inativo
		window.location = destino;

	});
});

