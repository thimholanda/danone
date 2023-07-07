<?php /* Template Name: Produtos */ ?>

<?php get_header('header.php'); ?>
<?php if(is_user_logged_in()) { include_once('menu-login.php'); } else{ include_once('menu-logout.php'); } ?>

<?php include_once('busca.php') ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<section class="produtos">

	<article>
		<div class="content no_border">

			<h2><?php the_title(); ?></h2>
			 <?php echo wpautop( get_the_content(), true) ; ?>
			<nav>
				<ul>
					<li><a href="#formulas-infantis" title="Fórmulas infantis">Fórmulas infantis</a></li>
					<li><a href="#cereal-infantil" title="CEREAL INFANTIL">CEREAL INFANTIL</a></li>
					<li><a href="#leite-adaptado" title="LEITE ADAPTADO">LEITE ADAPTADO</a></li>
					<li><a href="#complemento-alimentar" title="COMPLEMENTO ALIMENTAR">COMPLEMENTO ALIMENTAR</a></li>
				</ul>
			</nav>
		</div>
	</article>

</section>

<section class="produtos" id="formulas-infantis">

	<article>
		<div class="content">

			<h3>fórmulas infantis</h3>
			
			<?php echo wpautop( get_field('texto_formulas_infantis'), true) ; ?>

			<a  href="<?php echo get_site_url(); ?>/formulas-infantis" class="saiba_mais"><span>Saiba mais</span></a>
			<span class="trace"></span>
		</div>
	</article>

</section>

<section class="produtos" id="cereal-infantil">

	<article>
		<div class="content">

			<div class="container_slider">

				<?php #Início do slider loop ?>

				<?php if( have_rows('slider_cereal_infantil') ): while ( have_rows('slider_cereal_infantil') ) : the_row(); ?>

				<div class="slider">

					<h3><?php the_sub_field('titulo_do_produto'); ?></h3>
					<h4>Cereal Infantil</h4>

					<?php echo wpautop( get_sub_field('descricao'), true) ; ?>

					<?php $imagem = get_sub_field('imagem'); ?>

					<?php if(!empty($imagem)): ?>

					<div class="wrap_image"><img src="<?php echo $imagem['url'] ?>" title="<?php echo $imagem['title'] ?>"></div>

					<?php endif; ?>

					<a href="<?php echo the_sub_field('link'); ?>" target="_blank" class="saiba_mais"><span>Saiba mais</span></a>

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

<section class="produtos" id="leite-adaptado">

	<article>
		<div class="content">

			<div class="container_slider">

				<?php #Início do slider loop ?>

				<?php if( have_rows('slider_leite_adaptado') ): while ( have_rows('slider_leite_adaptado') ) : the_row(); ?>

				<div class="slider">

					<h3><?php the_sub_field('titulo_do_produto'); ?></h3>
					<h4>Leite adaptado</h4>

					<?php echo wpautop( get_sub_field('descricao'), true) ; ?>

					<?php $imagem = get_sub_field('imagem'); ?>

					<?php if(!empty($imagem)): ?>

					<div class="wrap_image"><img src="<?php echo $imagem['url'] ?>" title="<?php echo $imagem['title'] ?>"></div>

					<?php endif; ?>

					<a href="<?php echo the_sub_field('link'); ?>" target="_blank" class="saiba_mais"><span>Saiba mais</span></a>

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

<section class="produtos" id="complemento-alimentar">

	<article>
		<div class="content">

			<div class="container_slider">

				<?php #Início do slider loop ?>

				<?php if( have_rows('slider_complemento_alimentar') ): while ( have_rows('slider_complemento_alimentar') ) : the_row(); ?>

				<div class="slider">

					<h3><?php the_sub_field('titulo_do_produto'); ?></h3>
					<h4>Complemento Alimentar</h4>

					<?php echo wpautop( get_sub_field('descricao'), true) ; ?>

					<?php $imagem = get_sub_field('imagem'); ?>

					<?php if(!empty($imagem)): ?>

					<div class="wrap_image"><img src="<?php echo $imagem['url'] ?>" title="<?php echo $imagem['title'] ?>"></div>

					<?php endif; ?>

					<a href="<?php echo the_sub_field('link'); ?>" target="_blank" class="saiba_mais"><span>Saiba mais</span></a>

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



 

<section class="produtos onde_comprar">

	<article>

		<div class="content">

			<h2>ONDE COMPRAR</h2>

			<div class="container_slider">

				<?php #Início do slider loop ?>

				<?php if( have_rows('slider_onde_comprar') ): while ( have_rows('slider_onde_comprar') ) : the_row(); ?>

				<?php $imagem = get_sub_field('imagem'); ?>

				<div class="slide">
					<a href="<?php echo the_sub_field('link'); ?>" title="Drograia São Paulo"><img src="<?php echo $imagem['url'] ?>" title="<?php echo $imagem['title'] ?>"></a>
				</div>

				<?php endwhile; else : ?>

				    <p>Nenhum produto foi cadastrado ainda</p>

				<?php endif; ?>

			</div>	

		</div>

	</article>

</section>

<?php endwhile; endif; ?>
<?php wp_reset_postdata(); ?>


<?php get_footer('footer.php'); ?>