<?php get_header('header.php'); ?>
<?php if(is_user_logged_in()) { include_once('menu-login.php'); } else{ include_once('menu-logout.php'); } ?>
<?php include_once('busca.php') ?>
<?php include_once('select_filhos_inline.php') ?>

          <?php

            # Definição da categoria atual
            $categoria_atual = $wp_query->query_vars['materia'];

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

            # Definir a menor semana cadastrada para a categoria atual
            $menor_semana = get_menor_semana($categoria_atual, 'materias', $meta_key_sort);

            # Condição da query para diferenciar a categoria concepção
            if($categoria_atual != 'concepcao'):

                $args = array(
                    'post_type'   => 'materias',
                    'posts_per_page'  => 1,
                    'meta_query' => array(
                        array(
                            'key'     => $meta_key_sort,
                            'value'   => $menor_semana,
                            'compare' => '=',
                        ),
                    ),
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'materia',
                            'field'    => 'slug',
                            'terms'    => $categoria_atual,
                        ),
                    ),
                );

            else:

                $args = array(
                    'post_type'   => 'materias',
                    'posts_per_page'  => 1,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'materia',
                            'field'    => 'slug',
                            'terms'    => $categoria_atual,
                        ),
                    ),
                );

            endif;

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
                        $terms = get_the_terms($post->ID,'materia');
                        foreach ( $terms as $term ) {
                            echo $term->name;
                            $term_id = $term->term_id;
                        };
                    ?>
                </h2>
                <h3><?php echo $string_sort . ' '; ?> <?php the_field($meta_key_sort); ?></h3>

                <?php
                    # Definindo o sort global
                    $global_sort = get_field($meta_key_sort);
                ?>

            </div>

        </section>

        <section class="interna materias">
            <article>
                     <div class="content">
                        <?php
                            $tags = wp_get_post_tags( $post->ID );
                            if(count($tags) > 0):
                        ?>
                        <span class="tags_materia">
                            <?php
                                foreach ($tags as $tag) {
                                    $tags_name[] = $tag->name;
                                }

                                echo 'Categorias: ' .$tags_list = implode(', ',$tags_name) . '.';
                            ?>
                        </span>

                    <?php endif; ?>
                         <h4><?php the_title(); ?></h4>
                         <p class="destaque_inicial">
                         	<?php the_field('texto_de_entrada'); ?>
                         </p>
                         <?php echo wpautop( get_the_content(), true) ; ?>
                     </div>
            </article>
        </section>

        <section class="bibliografia_fontes">
        	<div class="content">
        		<div class="bibliografia_fontes">
        			<div class="bibliografia">
        				<span>Bibliografia/Fonte</span>
        				<?php the_field("bibliografia"); ?>
        			</div>

        		</div>
        	</div>
        </section>

    <?php endwhile; else: ?>

    <section class="abertura height175 <?php if(is_user_logged_in()) echo 'margin100 margintop'; ?>">

        	    <div class="container_image <?php echo $imagem_abertura; ?>"></div>
        	    <div class="wrap_infos_abertura">
	            	<?php $endereco_img = get_template_directory_uri() . "/img/icons/icon-{$categoria_atual}-interna.svg" ?>
	            	<img src="<?php echo $endereco_img; ?>" class="icon_fase" title="fase">
        	    	<h2><?php echo get_term_by('slug', $categoria_atual, 'fase')->name; ?></h2>
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

        <section class="comentarios limit_footer" id="comentario">
        	<article>
        		<!--{comentarios-taxonomy-materia}-->
                <?php include_once('comentarios.php'); ?>
        	</article>
        </section>

       <?php include_once('veja_tambem_materias.php'); ?>

        <?php
            # Fazendo a query para retornar o menu footer
           $resultado = get_menu_footer('materias', $term_id, $meta_key_sort);
        ?>

        <?php if($categoria_atual != 'concepcao'): ?>

        <nav class="stick_footer_semanas">
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
                          foreach ($resultado as $indice)
                          {
                            $semana_ou_mes = $indice->{"meta_value"};

                            $link = get_permalink($indice->{"MAX(d_p.ID)"});


                            if( $semana_ou_mes == $global_sort)
                            {
                                  echo "<li link='{$link}' id='active'><span>$semana_ou_mes</span></li>";
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



