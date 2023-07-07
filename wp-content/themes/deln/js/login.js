var $j = jQuery.noConflict();

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

		if(response == '0')
		{
			$j('.title').html('Seu login foi realizado com sucesso!');
			$j('.retorno').fadeIn('slow');
			$j('.retorno').html('Você será redirecionado.');			

			window.setTimeout(function(){window.location = site_url + '/fases';},200);
		} else if(response == '2')
		{
			$j('.title').html('Usuário não encontrado. Cadastre-se.');
			window.setTimeout('resetAll()', 2000);
		}

		else
		{
			$j('.title').html('O usuário ou senha estão incorretos');
			window.setTimeout('resetAll()', 2000);
		}
	})
}

function resetAll()
{
	$j('.modal').fadeOut('fast', function() {
		$j('.pano_full_z101_no_touch').fadeOut('slow');
		$j('.retorno').fadeOut('fast');
		$j('.retorno').html('');
		$j('.title').html('');
	});
}


$j( document ).on( 'click', '#btn_entrar', function(e) {

	e.preventDefault();

	var data = $j("form#formulario_cadastro").serializeArray();

	$j.ajax({
		url : obj.ajax_url,
		type : 'post',
		data : {
			action : 'executa_login',
			data : JSON.stringify(data)
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


function cadastroFace(email){

	if(email != '')
	{	
		var data = email;

		$j.ajax({
			url : obj.ajax_url,
			type : 'post',
			data : {
				action : 'executa_login_facebook',
				data : data
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
	}
	
}