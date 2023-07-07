<?php

header('Content-Type: application/json');

$resultado;
$resultado;

if(have_posts()): while(have_posts()): the_post();

$titulo 	= get_the_title();
$resumo 	= get_the_excerpt();
$link 		= get_the_permalink();
	
$resultado['titulo'] = $titulo;
$resultado['resumo'] = $resumo;
$resultado['link'] = $link;

$resultados[] = $resultado;

endwhile; endif;

$json = json_encode($resultados);

echo $json;

wp_reset_postdata(); ?>



