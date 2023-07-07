<?php /* Template Name: Sobre */ ?>

<?php get_header('header.php'); ?>
<?php if(is_user_logged_in()) { include_once('menu-login.php'); } else{ include_once('menu-logout.php'); } ?>

<?php include_once('busca.php') ?>

<?php  if(have_posts()): while(have_posts()): the_post(); ?>

<style type="text/css" media="screen">
	footer{
		margin-top: 0px;
	}

    footer .container_logo{
        display: none;
    }

    <?php  $imageH = get_field('imagem_header'); ?>
    <?php  $imageF = get_field('imagem_footer'); ?>

    section.abertura .sobre {
        background-image: url("<?php echo $imageH['url']; ?>");
    }

    section.early .end_section {
        background-image: url("<?php echo $imageF['url']; ?>");
    }

    

</style>
           

        <section class="abertura height175">
  
            <div class="container_image sobre"></div>

        </section>

        <section class="early">        
            <article>
                     <div class="content">
                         <?php the_content(); ?>
                     </div>
                     <?php if($imageF != ''): ?>
                     <div class="end_section"></div>
                 <?php else: ?>
                 <br/><br/><br/><br/>
             <?php endif; ?>
            </article>
        </section>

        <section class="end_danone"><h4><span>Danone Early Life Nutrition</span></h4></section>

        <?php endwhile; endif; ?>
        <?php wp_reset_postdata(); ?>

        <?php get_footer('footer.php'); ?>