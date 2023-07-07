<?php /* Template Name: Formulas Infantis */ ?>

<?php get_header('header.php'); ?>
<?php if(is_user_logged_in()) { include_once('menu-login.php'); } else{ include_once('menu-logout.php'); } ?>
<?php include_once('busca.php') ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<style type="text/css" media="screen">

	.modal{
		display: block;
	}

	#modal_depoimento .ok, #modal_depoimento .retorno{
		display: block;
	}

	#modal_depoimento .fechar{
		display: none;
	}

	#modal_depoimento{
		overflow: auto;
		max-height: 80%;
		-webkit-overflow-scrolling: touch;
	}

</style>

<section class="produtos">

	<article>
		<div class="content">
			<h2>FÓRMULAS INFANTIS</h2>
			<span class="trace margin_15 width_80"></span>
		</div>
	</article>

</section>

<section class="produtos">

	<article>
		<div class="content">

			<div class="container_slider">

				<?php #Início do slider loop ?>

					<?php if( have_rows('slider_1_formulas_infantis') ): while ( have_rows('slider_1_formulas_infantis') ) : the_row(); ?>


				<div class="slider">					

					<h3><?php the_sub_field('titulo_do_produto'); ?></h3>

					<?php $imagem = get_sub_field('imagem'); ?>

					<?php if(!empty($imagem)): ?>

					<div class="wrap_image"><img src="<?php echo $imagem['url'] ?>" title="<?php echo $imagem['title'] ?>"></div>

					<?php endif; ?>

					<span class="gramas"><?php the_sub_field('peso'); ?></span>

					<div class="wrap_saiba_mais">
						<a href="#" class="saiba_mais infos"><span>Informações do rótulo</span></a>
						<div style="display:none;" class="hidden_content"><?php echo wpautop( get_sub_field('informacoes_rotulo'), true) ; ?></div>
					</div>

					<div class="wrap_saiba_mais">
						<a href="#" class="saiba_mais infos menor_espaco"><span>Modo de preparo</span></a>
						<div style="display:none;" class="hidden_content"><?php echo wpautop( get_sub_field('modo_preparo'), true) ; ?></div>
					</div>
					
				</div>

				<?php endwhile; else : ?>

				    <p>Nenhum produto foi cadastrado ainda</p>

				<?php endif; ?>	

			</div>

			<span class="trace"></span>		
			
		</div>
	</article>

</section>

<section class="produtos">

	<article>
		<div class="content">

			<div class="container_slider">

				<?php #Início do slider loop ?>

				<?php if( have_rows('slider_2_formulas_infantis') ): while ( have_rows('slider_2_formulas_infantis') ) : the_row(); ?>


				<div class="slider">

					

					<h3><?php the_sub_field('titulo_do_produto'); ?></h3>

					<?php $imagem = get_sub_field('imagem'); ?>

					<?php if(!empty($imagem)): ?>

					<div class="wrap_image"><img src="<?php echo $imagem['url'] ?>" title="<?php echo $imagem['title'] ?>"></div>

					<?php endif; ?>

					<span class="gramas"><?php the_sub_field('peso'); ?></span>

					<div class="wrap_saiba_mais">
						<a href="#" class="saiba_mais infos"><span>Informações do rótulo</span></a>
						<div style="display:none;" class="hidden_content"><?php echo wpautop( get_sub_field('informacoes_rotulo'), true) ; ?></div>
					</div>

					<div class="wrap_saiba_mais">
						<a href="#" class="saiba_mais infos menor_espaco"><span>Modo de preparo</span></a>
						<div style="display:none;" class="hidden_content"><?php echo wpautop( get_sub_field('modo_preparo'), true) ; ?></div>
					</div>

					
					
				</div>

				<?php endwhile; else : ?>

				    <p>Nenhum produto foi cadastrado ainda</p>

				<?php endif; ?>

				<?php #final do slider loop ?>		

			</div>

			<span class="trace"></span>		
			
		</div>
	</article>

</section>

<section class="produtos">

	<article>
		<div class="content">

			<div class="container_slider">

				<?php #Início do slider loop ?>

				<?php if( have_rows('slider_3_formulas_infantis') ): while ( have_rows('slider_3_formulas_infantis') ) : the_row(); ?>


				<div class="slider">

					

					<h3><?php the_sub_field('titulo_do_produto'); ?></h3>

					<?php $imagem = get_sub_field('imagem'); ?>

					<?php if(!empty($imagem)): ?>

					<div class="wrap_image"><img src="<?php echo $imagem['url'] ?>" title="<?php echo $imagem['title'] ?>"></div>

					<?php endif; ?>

					<span class="gramas"><?php the_sub_field('peso'); ?></span>

					<div class="wrap_saiba_mais">
						<a href="#" class="saiba_mais infos"><span>Informações do rótulo</span></a>
						<div style="display:none;" class="hidden_content"><?php echo wpautop( get_sub_field('informacoes_rotulo'), true) ; ?></div>
					</div>

					<div class="wrap_saiba_mais">
						<a href="#" class="saiba_mais infos menor_espaco"><span>Modo de preparo</span></a>
						<div style="display:none;" class="hidden_content"><?php echo wpautop( get_sub_field('modo_preparo'), true) ; ?></div>
					</div>

					
					
				</div>

				<?php endwhile; else : ?>

				    <p>Nenhum produto foi cadastrado ainda</p>

				<?php endif; ?>

				<?php #final do slider loop ?>		

			</div>

			<span class="trace"></span>		
			
		</div>
	</article>

</section>

<section class="produtos">

	<article>
		<div class="content">
			<h2>FÓRMULAS INFANTIS ESPECIALIDADES</h2>
			<span class="trace margin_15"></span>
		</div>
	</article>

</section>

<section class="produtos">

	<article>
		<div class="content">

			<div class="container_slider">

				<?php #Início do slider loop ?>

				<?php if( have_rows('slider_1_especialidades') ): while ( have_rows('slider_1_especialidades') ) : the_row(); ?>


				<div class="slider">					

					<h3><?php the_sub_field('titulo_do_produto'); ?></h3>

					<?php $imagem = get_sub_field('imagem'); ?>

					<?php if(!empty($imagem)): ?>

					<div class="wrap_image"><img src="<?php echo $imagem['url'] ?>" title="<?php echo $imagem['title'] ?>"></div>

					<?php endif; ?>

					<span class="gramas"><?php the_sub_field('peso'); ?></span>

					<div class="wrap_saiba_mais">
						<a href="#" class="saiba_mais infos"><span>Informações do rótulo</span></a>
						<div style="display:none;" class="hidden_content"><?php echo wpautop( get_sub_field('informacoes_rotulo'), true) ; ?></div>
					</div>

					<div class="wrap_saiba_mais">
						<a href="#" class="saiba_mais infos menor_espaco"><span>Modo de preparo</span></a>
						<div style="display:none;" class="hidden_content"><?php echo wpautop( get_sub_field('modo_preparo'), true) ; ?></div>
					</div>

					
					
				</div>

				<?php endwhile; else : ?>

				    <p>Nenhum produto foi cadastrado ainda</p>

				<?php endif; ?>

				<?php #final do slider loop ?>		

			</div>

			<span class="trace"></span>		
			
		</div>
	</article>

</section>

<section class="produtos">

	<article>
		<div class="content">

			<div class="container_slider">

				<?php #Início do slider loop ?>

				<?php if( have_rows('slider_2_especialidades') ): while ( have_rows('slider_2_especialidades') ) : the_row(); ?>


				<div class="slider">					

					<h3><?php the_sub_field('titulo_do_produto'); ?></h3>

					<?php $imagem = get_sub_field('imagem'); ?>

					<?php if(!empty($imagem)): ?>

					<div class="wrap_image"><img src="<?php echo $imagem['url'] ?>" title="<?php echo $imagem['title'] ?>"></div>

					<?php endif; ?>

					<span class="gramas"><?php the_sub_field('peso'); ?></span>

					<div class="wrap_saiba_mais">
						<a href="#" class="saiba_mais infos"><span>Informações do rótulo</span></a>
						<div style="display:none;" class="hidden_content"><?php echo wpautop( get_sub_field('informacoes_rotulo'), true) ; ?></div>
					</div>

					<div class="wrap_saiba_mais">
						<a href="#" class="saiba_mais infos menor_espaco"><span>Modo de preparo</span></a>
						<div style="display:none;" class="hidden_content"><?php echo wpautop( get_sub_field('modo_preparo'), true) ; ?></div>
					</div>
					
					
				</div>

				<?php endwhile; else : ?>

				    <p>Nenhum produto foi cadastrado ainda</p>

				<?php endif; ?>

				<?php #final do slider loop ?>		

			</div>

			<span class="trace"></span>		
			
		</div>
	</article>

</section>

<div class="modal" id="modal_depoimento"><!-- MODAL INPUT DEPOIMENTOS -->

	 <button class="fechar">X</button>

    <span class="title">AVISO:</span>

    <p class="retorno">
        A Organização Mundial da Saúde (OMS) recomenda a amamentação exclusiva até os 06 (seis) primeiros meses de idade. A Danone apoia a amamentação exclusiva durante os 06 (seis) primeiros meses de vida, com a extensão até os 02 (dois) anos de idade ou mais, em conformidade com as recomendações da OMS, do Ministério da Saúde e demais órgãos e sociedades competentes. Informe-se sempre com seu profissional de saúde sobre a melhor forma de alimentar seu filho.
    </p>
    <span class="wrap_button"><button class="btn quero_continuar">Quero continuar</button></span>
	<span class="wrap_button"><button class="btn nao_quero_continuar">Não quero continuar</button></span>
</div><!-- FIM MODAL INPUT DEPOIMENTOS -->

<div class="pano_full_z101_no_touch"></div>

<?php endwhile; endif; ?>
<?php wp_reset_postdata(); ?>


<?php get_footer('footer.php'); ?>