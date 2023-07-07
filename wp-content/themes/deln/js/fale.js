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

		if(response == 1)
		{
			$j('.title').html('As informações foram enviadas com sucesso!');
			$j('.retorno').fadeIn('slow');
			$j('.retorno').html('Seu contato é muito importante para nós.');			

			window.setTimeout(function(){
				resetAll();
						},2000);
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

	$j('input[name=user_telefone]').mask('(99) 99999-999?9');

	$j("form.fale_conosco_form").validate({
	   rules: {
	     user_nome: "required",
	     user_email: {
	     	required : true,
	     	email 	 : true
 	     },
 	     user_telefone : {
 	     	required : true
 	     },
 	     mensagem : {
 	     	required : true
 	     }
	   },
	   submitHandler: function(form)
	   {
	   		var data = $j("form.fale_conosco_form").serializeArray();

	   		if($j('input[name=aceite_termos]').is(':checked'))
	   		{
	   			$j.ajax({
	   				url : obj.ajax_url,
	   				type : 'post',
	   				data : {
	   					action : 'executa_fale',
	   					data : JSON.stringify(data)
	   				},
	   				beforeSend: function()
	   				{
	   					exibeModal();
	   				},
	   				success : function(response)
	   				{	
	   					console.log(response);
	   					exibeRetorno(response);
	   				}
	   			});
	   		}

	   		else
	   		{
	   			alert('Você deve concordar com a política de Privacidade.');
	   		}

   			
	   }
	 });	
});