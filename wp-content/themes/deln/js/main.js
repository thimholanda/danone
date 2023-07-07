var $j = jQuery.noConflict();

$j(document).ready(function() {

	$j('.stick_footer_semanas ul .spacer').width($j(window).width() - 100)
	$j('.stick_footer_semanas_relative ul .spacer').width($j(window).width() - 100)

	if( navigator.userAgent.toLowerCase().indexOf('firefox') > -1 ){
		$j('nav.busca').addClass('add_translate');
	}

	if( navigator.userAgent.toLowerCase().indexOf('chrome') > -1 ){
}

	$j('nav.busca').css({'left': -$j(window).width() - 100 });

	var height = $j(window).height() - 60;

	$j('nav.menu').css('height', height);

	$j( window ).resize(function() {
	  $j('nav.menu').css('height', height);
	  if(!openBusca)
	  {
	  	$j('nav.busca').css({'left': -$j(window).width() });
	  }
	});

	 var open = false;
	 var openBusca = false;

	$j('button.menu').click(function(event) {

		if(open)
		{
			open = false;
			$j('header button.menu').removeClass('menu_active');
			$j('nav.menu').animate({'right': '-500px', 'opacity':'0'}, 500);
			$j('.pano_full').fadeOut('slow');
		}

		else
		{
			open = true;
			$j('header button.menu').addClass('menu_active');
			$j('nav.menu').animate({'right': '0px', 'opacity':'1'}, 500);
			$j('.pano_full').fadeIn('slow');
		}

	});

	$j('button.lupa, .regular1').click(function(event) {

		if(open)
		{
			open = false;
			$j('header button.menu').removeClass('menu_active');
			$j('nav.menu').animate({'right': '-500px', 'opacity':'0'}, 500);
			$j('.pano_full').fadeOut('slow');
		}

		if(openBusca)
		{
			openBusca = false;
			$j('header button.lupa').removeClass('lupa_active');
			TweenMax.to($j('nav.busca'), .2, {left:-$j(window).width()});
		}

		else
		{
			openBusca = true;
			$j('header button.lupa').addClass('lupa_active');
			TweenMax.to($j('nav.busca'), .2, {left:0});
		}

	});

	$j('.pano_full').click(function(event) {
		open = false;
		$j('header button.menu').removeClass('menu_active');
		$j('nav.menu').animate({'right': '-500px', 'opacity':'0'}, 500);
		$j('.pano_full').fadeOut('slow');
	});

	$j('.pano_full_z101').click(function(event) {
		$j('.pano_full_z101').fadeOut('slow');
		$j('.modal').fadeOut('slow');
	});

	$j('.regular3 .regular_itens').on('click', function(event) {
		event.preventDefault();



		if($j("nav.fases").is(":hidden"))
		{
		    TweenLite.to($j('nav .regular3 span.arrow_menu span'), .5, {rotation:180});
		}

		else
		{
			TweenLite.to($j('nav .regular3 span.arrow_menu span'), .5, {rotation:0});
		}

		$j('nav.fases').slideToggle('slow');

	});

	$j('nav .arrow_account').on('click', function(event) {
		event.preventDefault();

		if($j("nav .select_filhos").is(":hidden"))
		{
		    TweenLite.to($j('nav .arrow_account'), .5, {rotation:180});
		}

		else
		{
			TweenLite.to($j('nav .arrow_account'), .5, {rotation:0});
		}

		$j('nav .select_filhos').slideToggle('slow');

	});

	 $j('.do_slider').slick({
	 	 infinite: false,
	 	 dots: true
	 });

	 $j('.sliders1').slick({
	 	 infinite: false,
	 	 dots: true,
	 	 arrows: false
	 });

	 $j('.sliders2').slick({
	 	 infinite: false,
	 	 dots: true,
	 	 arrows: false
	 });

	 $j('.sliders3').slick({
	 	 infinite: false,
	 	 dots: true,
	 	 arrows: false
	 });

	 $j('.depoimentos_slider').slick({
	 	 infinite: false,
	 	 dots: true,
	 	 arrows: false
	 });

	 $j('.produtos .container_slider').slick({
	 	 infinite: false,
	 	 dots: true,
	 	 arrows: true
	 });

	$j(window).scroll(function(event) {

		escondeStick(event,'.btn_stick_cadastrese','show_stick_footer','hide_stick_footer','footer');
		escondeStick(event,'.stick_footer_semanas','show_stick_footer_semana','hide_stick_footer_semana','section.limit_footer');

		if($j("nav.select_filhos_inline .filhos_inline").is(":visible"))
		{
		    TweenLite.to($j('nav.select_filhos_inline span.icon_seta'), .5, {rotation:0});
		    $j('nav.select_filhos_inline .filhos_inline').slideUp('slow');
		}

	});

	function escondeStick(event ,elem, show_class, hide_class,elemcheck)
	{
		if($j(window).scrollTop() > 60){

			if(isScrolledIntoView($j(elemcheck))){
				$j(elem).removeClass(show_class);
				$j(elem).addClass(hide_class);
			}
			else
			{
				$j(elem).removeClass(hide_class);
				$j(elem).addClass(show_class);
			}
		}
		else
		{
			$j(elem).removeClass(show_class);
			$j(elem).addClass(hide_class);
		}
	}

	function isScrolledIntoView(elem)
	{
	    var docViewTop = $j(window).scrollTop();
	    var docViewBottom = docViewTop + $j(window).height();

	    if(elem.length)
	    {
	    	var elemTop = $j(elem).offset().top;
	    	var elemBottom = elemTop + $j(elem).height();

	    	return (docViewBottom - 60 >= elemTop);
	    }
	}

	$j('section.bibliografia_fontes span').attr('data-content', '+');
	$j('.veja_tambem .accordion_interna h6').attr('data-content', '+');

	$j('section.bibliografia_fontes span').click(function(event) {


		if($j("section.bibliografia_fontes ul").is(":hidden"))
		{
		    $j('section.bibliografia_fontes span').attr('data-content', '-');
		}

		else
		{
			$j('section.bibliografia_fontes span').attr('data-content', '+');
		}

		$j('section.bibliografia_fontes ul').slideToggle('fast');
	});

	$j('.veja_tambem .accordion_interna h6').click(function(event) {

		if ($j(this).parent().height() == 240){

			$j(this).parent().stop();

			$j(this).parent().find('h6').attr('data-content', '+');

			$j(this).parent().animate({height: 48}, 500);
		}

		else{

			$j(this).parent().stop();

			$j(this).parent().find('h6').attr('data-content', '-');

			$j(this).parent().animate({height: 240}, 500);
		}
	});

	$j('.focus_expand').focusin(function(event) {
		$j(this).animate({height: 150}, 500)
	});

	$j('.focus_expand').focusout(function(event) {
		$j(this).animate({height: 40}, 500)
	});

	$j('.focus_expand,.placeholder_custom').addClass('comentario');

	$j('nav.select_filhos_inline > ul li.button').click(function(event)
	{

		hideShowMenuInline(event);

	});

	function hideShowMenuInline(event)
	{
		event.preventDefault();

		if($j("nav.select_filhos_inline .filhos_inline").is(":hidden"))
		{
		    TweenLite.to($j('nav.select_filhos_inline span.icon_seta'), .5, {rotation:180});
		}

		else
		{
			TweenLite.to($j('nav.select_filhos_inline span.icon_seta'), .5, {rotation:0});
		}

		$j('nav.select_filhos_inline .filhos_inline').slideToggle('slow');
	}


	$j('button.btn_comentarios_level1').click(function(event) {
		var target = $j(this).parent().parent().parent().find('.comentarios_nivel1');
		target.slideToggle('slow');
	});

	$j('button.btn_comentarios_level2').click(function(event) {
		var target = $j(this).parent().parent().parent().find('.comentarios_nivel2');
		target.slideToggle('slow');
	});

	$j('.modal .ok, .modal .fechar').click(function(event) {
		hideModal();
	});


	$j('.accordion_fases h5').click(function(event) {
		event.preventDefault();

		if($j(this).next().is(":hidden"))
		{
		    TweenLite.to($j(this).find('.icon_accordion_fases'), .5, {rotation:180});
		    $j(this).addClass('change_color');
		}

		else
		{
			TweenLite.to($j(this).find('.icon_accordion_fases'), .5, {rotation:0});
			$j(this).removeClass('change_color');
		}

		$j(this).next().slideToggle('slow');

	});

	function hideModal(){
		$j('.pano_full_z101').fadeOut('slow');
		$j('.pano_full_z101_no_touch').fadeOut('slow');
		$j('.modal').fadeOut('slow');
	}


	$j('.busca form').focusin(function(event) {
		$j('header').css('top','-60px');
		$j('.content_fixed').css('padding-top','0px');
		$j('nav.busca').css('padding-top','90px');
	});

	$j('.busca form').focusout(function(event) {
		$j('header').css('top','0px');
		$j('.content_fixed').css('padding-top','60px');
		$j('nav.busca').css('padding-top','150px');
	});

	$j('nav.busca .limpar_campo').click(function(event) {
		$j('header').css('top','0px');
		$j('.content_fixed').css('padding-top','60px');
		$j('nav.busca').css('padding-top','150px');
	});

	var lastScrollTop = 0;
	var cima = false;
	var baixo = false;

	$j('nav.busca .wrap_busca').scroll(function(event) {

		var st = $j(this).scrollTop();

		if (st < lastScrollTop){

			if(!cima)
			{
				if($j(this).scrollTop() + $j(this).innerHeight()>=$j(this)[0].scrollHeight - 50)
		        {
		          // chegou ao fim!
		        }

				else
				{
					cima = true;
					baixo = false;

					$j('header').css('top','0px');
					$j('.content_fixed').css('padding-top','60px');
					$j('nav.busca').css('padding-top','150px');
				}
			}
		}

		else
		{
			if(!baixo)
			{

				if($j('nav.busca .wrap_busca').scrollTop() >  50)
				{

					cima = false;
					baixo = true;

					$j('header').css('top','-60px');
					$j('.content_fixed').css('padding-top','0px');
					$j('nav.busca').css('padding-top','90px');
				}
			}
		}

	   	lastScrollTop = st;
	});


	$j('.quero_continuar').click(function(event) {
		$j('#modal_depoimento').fadeOut('slow');
		$j('.pano_full_z101_no_touch').fadeOut('slow');
	});

	$j('.nao_quero_continuar').click(function(event) {
		window.history.back();
	});

	$j(function() {
	  $j('a[href*="#"]:not([href="#"])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $j(this.hash);
	      target = target.length ? target : $j('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $j('html, body').animate({
	          scrollTop: target.offset().top - 80
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});


		var drag = Draggable.create(".stick_footer_semanas ul", {
		    type:"scrollLeft",
	 		edgeResistance:0.5,
		 	throwProps:true,
		 });

		 var drag = Draggable.create(".stick_footer_semanas_relative ul", {
		    type:"scrollLeft",
	 		edgeResistance:0.5,
		 	throwProps:true,
		 });

		 var drag_categorias = Draggable.create(".slider_categorias ul", {
		    type:"scrollLeft",
	 		edgeResistance:0.5,
		 	throwProps:true,
		 });

		var $jelement = $j(".stick_footer_semanas ul");
		var $jelement_relative = $j(".stick_footer_semanas_relative ul");

		$j('.stick_footer_semanas .prev').click(function(event) {
			TweenLite.to($jelement, .7, {scrollTo:{x:$jelement.scrollLeft() - $j(window).width() + 150}, ease:Power2.easeOut});
		});

		$j('.stick_footer_semanas .next').click(function(event) {
			TweenLite.to($jelement, .7, {scrollTo:{x:$jelement.scrollLeft() + $j(window).width() - 150}, ease:Power2.easeOut});
		});

		$j('.stick_footer_semanas_relative .prev').click(function(event) {
			TweenLite.to($jelement_relative, .7, {scrollTo:{x:$jelement.scrollLeft() - $j(window).width() + 150}, ease:Power2.easeOut});
		});

		$j('.stick_footer_semanas_relative .next').click(function(event) {
			TweenLite.to($jelement_relative, .7, {scrollTo:{x:$jelement.scrollLeft() + $j(window).width() - 150}, ease:Power2.easeOut});
		});

		if($j('#active').length)

		{
			TweenLite.to($jelement, .7, {scrollTo:{x:"#active", offsetX:$j(window).width()/2  - 20}, ease:Power2.easeOut});
			TweenLite.to($jelement_relative, .7, {scrollTo:{x:"#active", offsetX:$j(window).width()/2  - 20}, ease:Power2.easeOut});
		}

		$j(document).on('click', 'h1', function(event) {
			event.preventDefault();
			window.location.href = site_url_general;
			
		});

		$j(document).on('click', '.btn_produtos_fale', function(event) 
		{

			if($j('input[name=utilizou_produto]:checked').val() == 'Não')
			{
				$j('.wrap_produtos').slideUp('fast');
			}

			else
			{
				$j('.wrap_produtos').slideDown('fast');
			}

		});

});

$j(window).load(function() {

	$j('.slick-prev,.slick-next').html("<span class='slick_icon'></span>");

	$j('.slick-dots button').html('');

});

$j('body').on('click', '.stick_footer_semanas ul li', function(event) {
	event.preventDefault();
	window.location.href = $j(this).attr('link');
});

$j('body').on('click', '.stick_footer_semanas_relative ul li', function(event) {
	event.preventDefault();
	window.location.href = $j(this).attr('link');
});

function exibeModal(id){
	$j('.pano_full_z101').fadeIn('fast', function() {
		$j(id).fadeIn('slow');
	});
}

$j('body').on('click', '.infos', function(event) {
	event.preventDefault();

	var conteudo = $j(this).parent().find('.hidden_content').html();

	$j('.pano_full_z101_no_touch').fadeIn('fast');
	$j('#modal_depoimento button').hide();
	$j('#modal_depoimento .fechar').fadeIn();
	$j('#modal_depoimento .title').hide();
	$j('#modal_depoimento .retorno').html(conteudo);
	$j('#modal_depoimento').fadeIn('slow');
	$j('#modal_depoimento').scrollTop(0);

});

$j(document).on('click', '.btn_filho_ativo', function(event) {
	event.preventDefault();
	var destino = site_url + '/fases';
	window.location = destino;
});

$j(document).on('click', '.account', function(event) {
	event.preventDefault();
	var destino = site_url + '/perfil';
	window.location = destino;
});



