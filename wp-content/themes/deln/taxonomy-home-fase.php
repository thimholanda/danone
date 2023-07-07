<?php get_header('header.php'); ?>
<?php if(is_user_logged_in()) { include_once('menu-login.php'); } else{ include_once('menu-logout.php'); } ?>
<?php include_once('busca.php') ?>
<?php include_once('select_filhos_inline.php') ?>
<?php  if(is_user_logged_in()) {$logado = true;} else{$logado = false;}?>
<?php 

		# Definição da categoria atual
		$categoria_atual = $wp_query->query_vars['home-fase'];

		# Definição da imagem de abertura
		$imagem_abertura;
		definirImagemAbertura($categoria_atual);

      # Definição do tipo de categorização da categoria selecionada
      if($categoria_atual == 'gravidez' || $categoria_atual == 'recem-nascido')
      {
          $meta_key_sort = 'semana';
          $string_sort = 'SEMANA';
      }
      else if($categoria_atual == 'concepcao')
      {
          $meta_key_sort = '';
          $string_sort = '';
      }
      else
      {
          $meta_key_sort = 'mes';
          $string_sort = 'MÊS';
      }

    $args = array(
        'post_type'   => 'home-fases',
        'posts_per_page'  => 1,
        'tax_query' => array(
            array(
                'taxonomy' => 'home-fase',
                'field'    => 'slug',
                'terms'    => $categoria_atual,
            ),
        ),
    );

      $query = new WP_Query( $args );

      if($query->have_posts()): while($query->have_posts()): $query ->the_post();
?>

  <section class="abertura height175 <?php if(is_user_logged_in()) echo 'margin100 margintop'; ?>">

      <div class="container_image <?php echo $imagem_abertura; ?>"></div>
      <div class="wrap_infos_abertura">
      	<?php $endereco_img = get_template_directory_uri() . "/img/icons/icon-{$categoria_atual}-interna.svg" ?>
            <img src="<?php echo $endereco_img; ?>" class="icon_fase" title="fase">
            <h2>
                  <?php 
                        # Definindo as informações de taxonomia deste post
                        $terms = get_the_terms($post->ID,'home-fase');
                        foreach ( $terms as $term ) {
                            echo $term->name;
                            $term->term_id;
                        };

                        # Definindo a referência do id do termo relacionado com a fase
                        $term_materia = get_term_by('name', $term->name, 'fase');
                        $term_id = $term_materia->term_id;

                    ?>
            </h2>
      </div>
      
  </section>

  <section class="interna materias home_fases min_p">        
      <article>
               <div class="content">
                   <h4><?php the_title(); ?></h4>
                   <?php echo wpautop( get_the_content(), true) ; ?>
                   <?php if($logado): ?>
                   		<?php echo wpautop( get_field('mensagem_login'), true) ; ?>
                   		<?php if($categoria_atual == 'concepcao'): ?>
                        <a class="confira" href="<?php echo get_term_link( 'concepcao', 'fase' ); ?>">CONFIRA</a>
                      	<?php endif; ?>
               		<?php else: ?>
               			<?php echo wpautop( get_field('mensagem_logout'), true) ; ?>
                         <a class="confira" href="<?php echo get_page_link(50) ; ?>">CADASTRE-SE</a>
 
               		<?php endif; ?>
                   </div>
               </div>
      </article>
  </section>

<?php endwhile; else: ?>
<section class="abertura height175 <?php if(is_user_logged_in()) echo 'margin100 margintop'; ?>">

    <div class="container_image <?php echo $imagem_abertura; ?>"></div>
    <div class="wrap_infos_abertura">
        <?php $endereco_img = get_template_directory_uri() . "/img/icons/icon-{$categoria_atual}-interna.svg" ?>
        <img src="<?php echo $endereco_img; ?>" class="icon_fase" title="fase">
        <h2><?php echo get_term_by('slug', $categoria_atual, 'home-fase')->name; ?></h2>
    </div>         

</section>

<section class="interna">     
    <article>


             <div class="content">

                <h4>Ainda não há conteúdo relacionado a esta fase.</h4>
                <p>Este conteúdo será disponibilizado em breve.</p>
                <p></p>

             </div>
    </article>
</section>

<?php endif; ?>
<?php wp_reset_postdata(); ?>

    <?php
        # Fazendo a query para retornar o menu footer
         $resultado = get_menu_footer('fases', $term_id, $meta_key_sort);
    ?>

    <?php if($categoria_atual != 'concepcao'): ?>

    <nav class="stick_footer_semanas_relative">
      <span class="trace"></span>
      <span class="periodo"><?php echo $string_sort; ?></span>
      <button class="next"></button>
      <button class="prev"></button>
      <div class="wrap_buttons">
            <ul>
                  <li class="spacer"><span>#</span></li>

                  <?php

                        if(count($resultado) == 0)
                    {
                          echo 'Não existem registros';
                    }
                    else
                    {
                      $i = 0;

                      foreach ($resultado as $indice)
                      {
                        $i++;

                        $semana_ou_mes = $indice->{"meta_value"};

                        $link = get_permalink($indice->{"MAX(d_p.ID)"});
                        

                        if( $i == 1)
                        {
                              echo "<li link='{$link}' id='active' class='gray'><span>$semana_ou_mes</span></li>";
                        }

                        else
                        {
                              echo "<li link='{$link}'><span>$semana_ou_mes</span></li>";
                        }
                      }
                    }

                  ?>                      

                  <li class="spacer"><span>#</span></li>
            </ul>
      </div>
      <div class="mask left"></div>
      <div class="mask right"></div> 
    </nav>

    <?php endif; ?>

<?php get_footer('footer.php'); ?>

        

