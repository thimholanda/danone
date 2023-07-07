var $j = jQuery.noConflict();

$j(document).ready(function() {
	
	var picker = $j('.calendario').pickadate({ onOpen: function() { $j('.calendario').blur(); } });

	$j( document ).on( 'click', '#vamos_comecar', function(e) {

		e.preventDefault();	

		var data1 = $j("form#form_pais").serializeArray();
		var data2 = $j("form#form_filhos").serializeArray();

		for(var i = 0; i < data2.length; i++)
		{
			data1.push(data2[i]);
		}

		$j.ajax({
			url : obj.ajax_url,
			type : 'post',
			data : {
				action : 'executa_cadastro_complementar',
				data : JSON.stringify(data1)
			},
			beforeSend: function()
			{
				exibeModal();
			},
			success : function(response)
			{	
				exibeRetorno(response);
			}
		});
	})

	function exibeModal()
	{
		$j('.pano_full_z101_no_touch').fadeIn('fast', function(){
			$j('.modal .loader').fadeIn('fast');
			$j('.modal').fadeIn('slow');
		})
	}

	function exibeRetorno(response)
	{	
		$j('.modal .loader').fadeOut('fast',function(){

			if(response == '1')
			{
				$j('.title').html('As informações foram salvas com sucesso!');
				$j('.retorno').fadeIn('slow');
				$j('.retorno').html('Você será redirecionado.');

				window.setTimeout(function(){window.location = site_url + '/fases';},200);
			}

			else
			{
				$j('.title').html('Ocorreu algum erro.');
				$j('.retorno').fadeIn('slow');
				$j('.retorno').html('Você será redirecionado.');
				window.setTimeout(function(){window.location = site_url + '/fases';},200);
			}	
		})
	}

	$j('input[name=filho_tipo]').click(function(event) {

		if($j(this).val() != '')
		{
			if($j(this).val() == '1')
			{
				$j('.data_filho_txt').html('Qual é a data de nascimento?');
			}
			else
			{
				$j('.data_filho_txt').html('Qual é a previsão de nascimento?');
			}
			$j('.spacer_btn').fadeOut('fast');
			$j('.parabens').fadeIn('slow');
			$j('.data_filho').fadeIn('slow');
		}
		else
		{
			$j('.spacer_btn').fadeIn('fast');
			$j('.parabens').fadeOut('slow');
			$j('.data_filho').fadeOut('slow');
			$j('.data_filho input').val('');
		}
	});

	$j(document).on('click', '.pular1', function(event) {
		event.preventDefault();
		$j('html,body').animate({scrollTop: $j('#passo2').offset().top - 60},'slow');
	});

	$j(document).on('click', '.pular2', function(event) {
		event.preventDefault();
		$j('html,body').animate({scrollTop: $j('#vamos_comecar').offset().top - 60},'slow');
	});
	
});

