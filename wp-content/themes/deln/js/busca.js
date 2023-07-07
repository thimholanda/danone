var $j = jQuery.noConflict();

var cat;

$j(document).on( 'keypress', 'input[name=s]', function(e) {
	if(typeof intervalo !== 'undefined')
	{
		clearTimeout(intervalo);
	}

	intervalo = setTimeout(function(){ 

		$j.ajax({
			url : site_url + '/?s=' + $j('input[name=s]').val() + '&post_type=fases&fase',
			type : 'get',
			data : {},
			beforeSend: function()
			{
				$j('.retorno_busca ul li').fadeOut('fast');
			},
			success : function(response)
			{	
				if(response != null)
				{
					$j('.retorno_busca').fadeIn();

					$j('.retorno_busca ul li').remove();

					for (var i = 1; i < response.length; i++) {

						// console.log(response[i]);

						var element = '<li>' +
							   ' <a href="'+ response[i].link +'" title="' + response[i].titulo + '">' +
							        '<span class="title">' +
							            response[i].titulo +
							        '</span>' +
							        '<p>' +
							            response[i].resumo +
							        '</p>' +
							    '</a>' +
							'</li>';

						$j(element).insertAfter('.anchor');
					};
					// console.log(response.length);
				}

				else
				{
					var element = '<li>' +
						        '<p>' +
						            'Nenhum resultado encontrado.'+
						        '</p>' +
						'</li>';

					$j(element).insertAfter('.anchor');
				}
				
				// var json = JSON.parse(response);
				// console.log(json);
			}
		});




	}, 200);

	
	
})

$j(window).load(function() {
	$j('body').on('click', '.slider_categorias ul li', function(event) {
		event.preventDefault();

		cat = $j(this).attr('data');
		
		$j('.slider_categorias ul li').removeClass('active');
		$j(this).addClass('active');
	});
});