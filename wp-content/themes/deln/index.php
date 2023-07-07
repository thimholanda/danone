<?php /* Template Name: Home */ ?>

<?php get_header('header.php'); ?>
<?php if (is_user_logged_in()) {
    include_once('menu-login.php');
} else {
    include_once('menu-logout.php');
} ?>
<?php include_once('busca.php') ?>


<section class="abertura">
    <!-- <div class="container_images base"></div>  -->
    <div class="container_images"></div>
    <div class="container_images"></div>
    <div class="container_images"></div>

</section>

<section class="nutrindo">
    <article>
        <div class="content">
            <h2>NUTRINDO HOJE <br />O AMANHÃ.</h2>
            <p style="margin-bottom:20px !important;">
                A criação de um filho é sempre cheia de dúvidas, mas uma coisa é certa: uma alimentação adequada pode transformar o futuro dele... para melhor! <?php if (!is_user_logged_in()) : ?>Cadastre-se agora e descubra junto com a gente como ajudar a construir um futuro mais saudável para seu filho.<?php endif; ?>

            </p>
            <a class="btn play" style="display:none;" href="#" title="SAIBA MAIS">SAIBA MAIS</a>
        </div>
    </article>
</section>

<section class="mamae_bebe">
    <article>
        <div class="content">
            <img class="imagem_mamae_bebe" title="Mamãe e bebê" alt="Mamãe e bebê" src="<?php echo get_template_directory_uri(); ?>/img/home/mamae-e-bebe.jpg">

            <div class="slider_infos">
                <ul>
                    <li class="do_slider">
                        <div class="container_slick">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/home/icone-ciencia.svg" alt="">
                            <p>
                                Tenha acesso a conteúdo exclusivo e confiável, baseado nos mais recentes avanços científicos em nutrição e desenvolvimento infantil.
                            </p>
                        </div>
                        <div class="container_slick">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/home/icone-desenvolvimento.svg" alt="">
                            <p>
                                Acompanhe o desenvolvimento do seu filho, desde a gravidez até os primeiros anos de vida, com dicas personalizadas de acordo com a fase de vida do seu bebê.
                            </p>
                        </div>
                        <div class="container_slick">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/home/icone-familia.svg" alt="">
                            <p>
                                Troque experiências, conheça histórias e ajude outros pais que estão passando pelas mesmas questões e dúvidas que você.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </article>
</section>

<section class="estudos_cientificos nutrindo">
    <article>
        <div class="container_image"></div>
        <div class="content">
            <p>
                <!-- <span></span> -->
            <h2>SEGURANÇA EM TODAS AS FASES, DA GESTAÇÃO AOS PRIMEIROS ANOS DE VIDA. VAMOS APRENDER JUNTOS?</h2><br /><br />
            <p style="margin-bottom: 30px;">
                Estudos científicos já comprovaram que a nutrição durante os primeiros 1000 dias da vida de um bebê, da gravidez aos 2 anos de idade, pode ter impacto na sua saúde para o resto da vida. Mas, quando o assunto é alimentação infantil, nem sempre é fácil saber quais decisões tomar ou em quem confiar.
            </p>
            <p style="margin-bottom: 30px;">
                Pensando nisso, criamos esse espaço. Queremos compartilhar com você nossos aprendizados de mais de 100 anos de pesquisas em nutrição e desenvolvimento infantil ao redor do mundo e, também, ouvir as suas experiências, dúvidas e angústias, independente da fase em que você esteja.
            </p>



            </p>
        </div>
    </article>
</section>

<section class="menu_inline">
    <article>
        <div class="content">
            <nav class="menu_inline">
                <ul>
                    <li>
                        <span class="container_button">
                            <a href="<?php echo get_term_link('concepcao', 'home-fase'); ?>" title="CONCEPÇÃO">CONCEPÇÃO</a>
                        </span>
                    </li>

                    <li>
                        <span class="container_button">
                            <a href="<?php echo get_term_link('gravidez', 'home-fase'); ?>" title="GRAVIDEZ">GRAVIDEZ</a>
                        </span>
                    </li>

                    <li>
                        <span class="container_button">
                            <a href="<?php echo get_term_link('recem-nascido', 'home-fase'); ?>" title="RECÉM-NASCIDO">RECÉM-NASCIDO</a>
                        </span>
                    </li>
                    <li>
                        <span class="container_button">
                            <a href="<?php echo get_term_link('1-a-6-meses', 'home-fase'); ?>" title="1 A 6 MESES">1 A 6 MESES</a>
                        </span>
                    </li>

                    <li>
                        <span class="container_button">
                            <a href="<?php echo get_term_link('6-a-12-meses', 'home-fase'); ?>" title="6 A 12 MESES">6 A 12 MESES</a>
                        </span>
                    </li>

                    <li>
                        <span class="container_button">
                            <a href="<?php echo get_term_link('1-a-2-anos', 'home-fase'); ?>" title="1 A 2 ANOS">1 A 2 ANOS</a>
                        </span>
                    </li>
                </ul>
            </nav>
        </div>
    </article>
</section>

<section class="nossos_produtos" style="margin-top: 30px;">
    <article>
        <div class="content">
            <!-- <span class="trace"></span> -->
            <a href="<?php echo get_page_link(67); ?>" class="button_nossos_produtos"><span class="icon"></span><span class="text">NOSSOS PRODUTOS</span></a>
            <p>Você se preocupa com a alimentação do seu filho. Nós também! Conheça nossos produtos.</p>
            <!-- <span class="trace"></span> -->
        </div>
    </article>
</section>

<section class="compartilhe" style="display: none;">
    <article>
        <div class="content">
            <a href="#" title="Compartilhe" class="compartilhe">Compartilhe</a>
        </div>
    </article>
</section>

<?php if (!is_user_logged_in()) : ?>

    <a href="<?php echo get_page_link(50); ?>" title="CADASTRE-SE" class="btn_stick_cadastrese">CADASTRE-SE</a>

<?php endif; ?>

<?php get_footer('footer.php'); ?>
