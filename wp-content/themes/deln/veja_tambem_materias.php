<section class="veja_tambem">
    <article>
        <div class="content">
            <h5>VEJA TAMBÉM:</h5>

            <div class="wrap_responsive_accordions">

                <div class="accordion_interna nutricao">
                    <div class="wrap_accordion">
                        <h6><span>Nutrição</span></h6>
                        <div class="sliders1">
                            <?php

                            # Início da Query 1

                            # Condição para diferenciar concepcao
                            if ($categoria_atual != 'concepcao') :

                                $args = array(
                                    'post__not_in' => array($post_id),
                                    'post_type'   => 'materias',
                                    'posts_per_page'  => -1,
                                    'tag'    => 'nutricao',
                                    'meta_query' => array(
                                        array(
                                            'key'     => $meta_key_sort,
                                            'value'   => $global_sort,
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

                            else :

                                $args = array(
                                    'post__not_in' => array($post_id),
                                    'post_type'   => 'materias',
                                    'posts_per_page'  => -1,
                                    'tag'    => 'nutricao',
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'materia',
                                            'field'    => 'slug',
                                            'terms'    => $categoria_atual,
                                        ),
                                    ),
                                );

                            endif;

                            $query = new WP_Query($args);

                            if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                            ?>

                                    <div class="slide_in">
                                        <div class="title"><?php the_title(); ?></div>
                                        <a href="<?php echo get_permalink(); ?>" class="wrap_resumo">
                                            <?php
                                            $image = get_field('thumbnail_ver_mais');
                                            if (!empty($image)) :
                                            ?>
                                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                            <?php endif; ?>
                                            <?php the_excerpt(); ?>
                                        </a>
                                    </div>

                                <?php endwhile;
                            else : ?>

                                <div class="slide_in">

                                    <p class="aviso">Não existe conteúdo relacionado ainda.</p>

                                </div>

                            <?php endif; ?>
                            <?php wp_reset_postdata(); ?>

                        </div>
                    </div>
                </div>

                <div class="accordion_interna bemestar">
                    <div class="wrap_accordion">
                        <h6><span>Bem-estar</span></h6>
                        <div class="sliders2">

                            <?php

                            # Início da Query 2

                            # Condição para diferenciar concepcao
                            if ($categoria_atual != 'concepcao') :

                                $args = array(
                                    'post__not_in' => array($post_id),
                                    'post_type'   => 'materias',
                                    'posts_per_page'  => -1,
                                    'tag'    => 'bem-estar',
                                    'meta_query' => array(
                                        array(
                                            'key'     => $meta_key_sort,
                                            'value'   => $global_sort,
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

                            else :

                                $args = array(
                                    'post__not_in' => array($post_id),
                                    'post_type'   => 'materias',
                                    'posts_per_page'  => -1,
                                    'tag'    => 'bem-estar',
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'materia',
                                            'field'    => 'slug',
                                            'terms'    => $categoria_atual,
                                        ),
                                    ),
                                );

                            endif;

                            $query = new WP_Query($args);

                            if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                            ?>

                                    <div class="slide_in">
                                        <div class="title"><?php the_title(); ?></div>
                                        <a href="<?php echo get_permalink(); ?>" class="wrap_resumo">
                                            <?php
                                            $image = get_field('thumbnail_ver_mais');
                                            if (!empty($image)) :
                                            ?>
                                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                            <?php endif; ?>
                                            <?php the_excerpt(); ?>
                                        </a>
                                    </div>

                                <?php endwhile;
                            else : ?>

                                <div class="slide_in">

                                    <p class="aviso">Não existe conteúdo relacionado ainda.</p>

                                </div>

                            <?php endif; ?>
                            <?php wp_reset_postdata(); ?>

                        </div>
                    </div>
                </div>

                <div class="accordion_interna crescimento">
                    <div class="wrap_accordion">
                        <h6><span>Crescimento</span></h6>
                        <div class="sliders3">

                            <?php

                            # Início da Query 3

                            # Condição para diferenciar concepcao
                            if ($categoria_atual != 'concepcao') :

                                $args = array(
                                    'post__not_in' => array($post_id),
                                    'post_type'   => 'materias',
                                    'posts_per_page'  => -1,
                                    'tag'    => 'crescimento',
                                    'meta_query' => array(
                                        array(
                                            'key'     => $meta_key_sort,
                                            'value'   => $global_sort,
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

                            else :

                                $args = array(
                                    'post__not_in' => array($post_id),
                                    'post_type'   => 'materias',
                                    'posts_per_page'  => -1,
                                    'tag'    => 'crescimento',
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'materia',
                                            'field'    => 'slug',
                                            'terms'    => $categoria_atual,
                                        ),
                                    ),
                                );

                            endif;

                            $query = new WP_Query($args);

                            if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                            ?>

                                    <div class="slide_in">
                                        <div class="title"><?php the_title(); ?></div>
                                        <a href="<?php echo get_permalink(); ?>" class="wrap_resumo">
                                            <?php
                                            $image = get_field('thumbnail_ver_mais');
                                            if (!empty($image)) :
                                            ?>
                                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                            <?php endif; ?>
                                            <?php the_excerpt(); ?>
                                        </a>
                                    </div>

                                <?php endwhile;
                            else : ?>

                                <div class="slide_in">

                                    <p class="aviso">Não existe conteúdo relacionado ainda.</p>

                                </div>

                            <?php endif; ?>
                            <?php wp_reset_postdata(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>
