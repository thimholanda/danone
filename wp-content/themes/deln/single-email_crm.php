<?php header('Content-Type: text/html; charset=utf-8'); ?>

<?php wp_head(); ?>

<?php  if(have_posts()): while(have_posts()): the_post(); ?>

	<?php the_field("email_conteudo"); ?>

<?php endwhile; endif; ?>

<?php wp_footer(); ?>