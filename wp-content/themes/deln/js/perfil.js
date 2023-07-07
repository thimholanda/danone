var $j = jQuery.noConflict();

var arrayUpdate = new Array();
var objUpdate;
var arrayInsert = new Array();
var objInsert;
var arrayDelete = new Array();

$j(document).ready(function() {

	

	$j('input[name=user_telefone]').mask('(99) 99999-999?9');
	$j('input[name=user_cep]').mask('99999-999');

	$j('.section_perfil, .section_perfil article, .section_perfil .content, .section_perfil form').css('overflow', 'visible');

	$j('body').css('background', '#0055a5');

	var picker = $j('.calendario').pickadate({ 
		onOpen: function() { $j('.calendario').blur(); },
		selectMonths: true,
		selectYears: 60,
	});

	$j(document).on('click', '.btn_dados', function(event) {
		event.preventDefault();

		if($j(".content_pais").is(":hidden"))
		{
		    TweenLite.to($j('.btn_dados .icon_seta'), .5, {rotation:180});
		}

		else
		{
			TweenLite.to($j('.btn_dados .icon_seta'), .5, {rotation:0});
		}
		
		$j('.content_pais').slideToggle('slow');

	});

	$j(document).on('click', '.excluir_filho', function(event) {
		event.preventDefault();
		
		$j(this).parent().fadeOut('slow', function() {

			var id = $j(this).attr('filho-id');
			if(id)
			{
				arrayDelete.push(id);
			}		

			$j(this).remove();
		});
	});

	$j(document).on('click', '.btn_filhos', function(event) {
		event.preventDefault();

		if($j(".content_filhos").is(":hidden"))
		{
		    TweenLite.to($j('.btn_filhos .icon_seta'), .5, {rotation:180});
		}

		else
		{
			TweenLite.to($j('.btn_filhos .icon_seta'), .5, {rotation:0});
		}
		
		$j('.content_filhos').slideToggle('slow');

	});

	var i = 0;

	$j(document).on('click', '.adicionar', function(event) {
		event.preventDefault();

		i++;

			var single_filho = '<div class="single_filho single_filho_insert insert">' +

				            	'<button class="excluir_filho" type="button"><span>-</span></button>' +

		    		            '<h2>Nome do filho</h2>' +

		    	            	'<div class="wrap">' +
		    	            	    '<input type="text" id="nome_bebe" name="filho_nome" value="" placeholder="Digite o nome">' +
		    	            	'</div>' +

		    	            	'<h2>Sexo</h2>' +

		    	            	'<div class="wrap filho_sexo_wrap">' +

		    	            		'<div class="wrap_filho_sexo_in">' +
		    	            			'<input type="radio" id="filho_sexo_feminino'+i+'" name="filho_sexo'+i+'" value="0"><label for="filho_sexo_feminino'+i+'"></label><span class="filho_sexo_texto">Feminino</span>' +
		    	            		'</div>' +
		    	            		'<div class="spacer_column"></div>' +
		    	            		'<div class="wrap_filho_sexo_in">' +
		    	            			'<span class="filho_sexo_texto">Masculino</span><input type="radio" id="filho_sexo_masculino'+i+'" name="filho_sexo'+i+'" value="1"><label for="filho_sexo_masculino'+i+'"></label>' +
		    	            		'</div>' +
		    	            	    
		    	            	    
		    	            	'</div>' +

		    	            	'<h2>Tipo</h2>' +

		    	            	'<div class="wrap filho_sexo_wrap">' +

		    	            		'<div class="wrap_filho_sexo_in">' +
		    	            			'<input type="radio" id="filho_tipo_nascido'+i+'" name="filho_tipo'+i+'" value="1"><label for="filho_tipo_nascido'+i+'"></label><span class="filho_sexo_texto">Nascido</span>' +
		    	            		'</div>' +
		    	            		'<div class="spacer_column"></div>' +
		    	            		'<div class="wrap_filho_sexo_in">' +
		    	            			'<span class="filho_sexo_texto">Gravidez</span><input type="radio" id="filho_tipo_gravidez'+i+'" name="filho_tipo'+i+'" value="0"><label for="filho_tipo_gravidez'+i+'"></label>' +
		    	            		'</div>' +	            	    
		    	            	 
		    	            	'</div>' +

		    	            	'<h2>Nascimento ou previsão</h2>' +

		    	            	'<div class="wrap">' +
		    	            	   '<input class="calendario" type="text" id="previsao" name="filho_data_nascimento" value="" placeholder="Insira a data"><label for="previsao"></label>' +
		    	            	'</div>' +

				            '</div>';

		var $jelement = $j(single_filho);

		var dinamicPicker =  $jelement.find('.calendario').pickadate({ 
			onOpen: function() { $j('.calendario').blur(); },
			selectMonths: true,
			selectYears: 60,
		});

		$jelement.hide();

		if($j('.single_filho').length == 0)
		{
			$jelement.insertAfter('.anchor');
		}

		else
		{
			$jelement.insertAfter('.single_filho:last');
		}

		$jelement.fadeIn('slow');

	});

	
	
});

var json;
$j( document ).on( 'click', '#salvar_pai', function(e) {

	e.preventDefault();

	var data = $j("form#form_pais").serializeArray();

	$j.ajax({
		url : obj.ajax_url,
		type : 'post',
		data : {
			action : 'atualizar_pai',
			data : JSON.stringify(data)
		},
		beforeSend: function()
		{
			exibeModal();
		},
		success : function(response)
		{	
			json = JSON.parse(response);
			exibeRetorno(json);
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

		if(json.response_error == '0')
		{
			if(json.email_igual)
			{
				$j('.retorno').html('E-mail já cadastrado.<br/> A página será atualizada.');
			}
			else
			{
				$j('.retorno').html('A página será atualizada.');
			}
			$j('.title').html('As informações foram atualizadas com sucesso!');
			$j('.retorno').fadeIn('slow');
						

			window.setTimeout(function(){window.location = site_url + '/perfil';},200);
		}

		else
		{
			$j('.title').html('Ocorreu algum erro.');
			window.setTimeout('resetAll()', 2000);
		}	
	})
}

function exibeRetorno2(response)
{	
	$j('.modal .loader').fadeOut('fast',function(){

		if(response == '1')
		{
			$j('.retorno').html('A página será atualizada.');
			$j('.title').html('As informações foram atualizadas com sucesso!');
			$j('.retorno').fadeIn('slow');
			
			window.setTimeout(function(){window.location = site_url + '/perfil';},200);
		}

		else
		{
			$j('.title').html('Ocorreu algum erro.');
			window.setTimeout('resetAll()', 2000);
		}	
	})
}

$j(document).on('click', '#salvar_filho', function(event) 
{
	event.preventDefault();
	
	$j('.single_filho_update').each(function(index) {

		if( $j(this).hasClass('update'))
		{
			var mIndex = index + 1;

			var id = $j(this).attr('filho-id');
			var nome = $j(this).find('input[name=filho_nome]').val();
			var sexo = $j(this).find('input[name=filho_sexou'+mIndex+']:checked').val();
			var tipo = $j(this).find('input[name=filho_tipou'+mIndex+']:checked').val();
			var nascimento = $j(this).find('input[name=filho_data_nascimento]').val();
			var nascimento_submit = $j(this).find('input[name=filho_data_nascimento_submit]').val();

			objUpdate = {
				filho_id 				: id,
				filho_nome 				: nome,
				filho_sexo 				: sexo,
				filho_tipo 				: tipo,
				filho_data_nascimento	: nascimento,
				filho_data_submit		: nascimento_submit
			};

			arrayUpdate.push(objUpdate);
		}
		
		
	});

	$j('.single_filho_insert').each(function(index) {

		if( $j(this).hasClass('insert'))
		{
			var mIndex = index + 1;

			var nome = $j(this).find('input[name=filho_nome]').val();
			var sexo = $j(this).find('input[name=filho_sexo'+mIndex+']:checked').val();
			var tipo = $j(this).find('input[name=filho_tipo'+mIndex+']:checked').val();
			var nascimento = $j(this).find('input[name=filho_data_nascimento]').val();
			var nascimento_submit = $j(this).find('input[name=filho_data_nascimento_submit]').val();

			objInsert = {
				filho_nome 				: nome,
				filho_sexo 				: sexo,
				filho_tipo 				: tipo,
				filho_data_nascimento	: nascimento,
				filho_data_submit		: nascimento_submit
			};

			arrayInsert.push(objInsert);
		}		
	});

	data = {
		update : arrayUpdate,
		insert : arrayInsert,
		delete : arrayDelete
	};

	$j.ajax({
		url : obj.ajax_url,
		type : 'post',
		data : {
			action : 'atualizar_filhos',
			data : JSON.stringify(data)
		},
		beforeSend: function()
		{
			exibeModal();
		},
		success : function(response)
		{	
			exibeRetorno2(response);
		}
	});






});