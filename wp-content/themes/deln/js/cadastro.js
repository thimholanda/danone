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

		if(response == '2' || response == '3')
		{
			$j('.title').html('Seu cadastro foi realizado com sucesso!');
			$j('.retorno').fadeIn('slow');
			$j('.retorno').html('Você será redirecionado.');			

			window.setTimeout(function(){window.location = site_url + '/cadastro-complementar';},200);
		}

		else if(response == '1')
		{
			$j('.title').html('Este e-mail já está cadastrado');
			window.setTimeout('resetAll()', 2000);
		}

		else
		{
			$j('.title').html('Ocorreu algum erro.');
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

$j(document).ready(function() {
	$j("#formulario_cadastro").validate({
	   rules: {
	     nome: "required",
	     email: {
	     	required : true,
	     	email 	 : true
 	     },
 	     senha : {
 	     	required : true,
 	     	minlength : 6
 	     },
 	     confirmacao_senha : {
 	     	required : true,
 	     	equalTo : "#password"
 	     }
	   },
	   submitHandler: function(form)
	   {
	   		var data = $j("form#formulario_cadastro").serializeArray();

	   		if($j('input[name=aceite_termos]').is(':checked'))
	   		{
	   			$j.ajax({
	   				url : obj.ajax_url,
	   				type : 'post',
	   				data : {
	   					action : 'executa_cadastro',
	   					data : JSON.stringify(data)
	   				},
	   				beforeSend: function()
	   				{
	   					exibeModal();
	   				},
	   				success : function(response)
	   				{	
	   					var json = JSON.parse(response);
	   					if(json.error_login)
	   					{
	   						window.location = site_url;
	   					}
	   					exibeRetorno(json.response);
	   				}
	   			});
	   		}

	   		else
	   		{
	   			alert('Você deve aceitar os termos.');
	   		}

   			
	   }
	 });	
});

function cadastroFace(email,nome,img){

	if(email != '' && nome != '' && img != '')
	{	
		var data = [
			{
				name : "nome",
				value: nome
			},
			{
				name : "email",
				value: email
			},
			{
				name : "img_user",
				value: img
			},
		];

		$j.ajax({
			url : obj.ajax_url,
			type : 'post',
			data : {
				action : 'executa_cadastro',
				data : JSON.stringify(data)
			},
			beforeSend: function()
			{
				exibeModal();
			},
			success : function(response)
			{	
				var json = JSON.parse(response);
				if(json.error_login)
				{
					window.location = site_url;
				}
				exibeRetorno(json.response);
			}
		});
	}
	
}