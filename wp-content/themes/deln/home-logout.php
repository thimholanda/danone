<?php include_once('header.php'); ?>
<?php if(is_user_logged_in()) { include_once('menu-login.php'); } else{ include_once('menu-logout.php'); } ?>
           

        <section class="abertura">
            <!-- <div class="container_images base"></div>  -->
            <div class="container_images"></div>
            <div class="container_images"></div>
            <div class="container_images"></div>

        </section>

        <section class="nutrindo">        
            <article>
                     <div class="content">
                         <h2>NUTRINDO HOJE <br/>O AMANHÃ.</h2>
                         <p>
                            A criação de um filho é sempre cheia
                            de dúvidas, mas uma coisa é certa:
                            garantir uma alimentação adequada pode transformar o futuro dele... para melhor!
                            Cadastre-se agora e descubra junto com
                            a gente como garantir um futuro mais
                            saudável para seu filho.
                        </p>
                        <a class="btn play" href="#" title="SAIBA MAIS">SAIBA MAIS</a>
                     </div>
            </article>
        </section>

        <section class="mamae_bebe">
            <article>
                <div class="content">
                    <img class="imagem_mamae_bebe" title="Mamãe e bebê" alt="Mamãe e bebê" src="img/home/mamae-e-bebe.jpg">

                    <div class="slider_infos">
                        <ul>
                            <li class="do_slider">
                                <div class="container_slick">
                                    <img src="img/home/icone-ciencia.svg" alt="">
                                    <p>
                                        Tenha acesso a conteúdo exclusivo e confiável, baseado nos mais recentes avanços científicos em nutrição e desenvolvimento infantil.
                                    </p>
                                </div>
                                <div class="container_slick">
                                    <img src="img/home/icone-desenvolvimento.svg" alt="">
                                    <p>
                                        Acompanhe o desenvolvimento do seu filho, desde a gravidez até os primeiros anos de vida, com dicas personalizadas de acordo com a fase de vida do seu bebê.
                                    </p>
                                </div>
                                <div class="container_slick">
                                    <img src="img/home/icone-familia.svg" alt="">
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

        <section class="estudos_cientificos">
            <article>
                <div class="container_image"></div>
                <div class="content">
                    <p>
                        <span></span>
                        Estudos científicos já comprovaram que
                        a nutrição durante os primeiros 1000 dias
                        da vida de um bebê, da gravidez aos 2 anos de idade, pode ter impacto na sua saúde para o resto da vida. Mas, quando o assunto é alimentação infantil, nem sempre é fácil saber quais decisões tomar ou em quem confiar. 
                        Pensando nisso, criamos esse espaço. Queremos compartilhar com você nossos aprendizados de mais de 100 anos de pesquisas em nutrição e desenvolvimento
                        infantil ao redor do mundo e, também, ouvir as suas experiências, dúvidas e angústias, independente da fase em que você esteja.
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
                                    <a href="#" title="CONCEPÇÃO">CONCEPÇÃO</a>
                                </span>
                            </li>

                             <li>
                                <span class="container_button">
                                    <a href="#" title="CONCEPÇÃO">GRAVIDEZ</a>
                                </span>
                            </li>

                             <li>
                                <span class="container_button">
                                    <a href="#" title="CONCEPÇÃO">RECÉM-NASCIDO</a>
                                </span>
                            </li>
                            <li>
                                <span class="container_button">
                                    <a href="#" title="CONCEPÇÃO">1 A 6 MESES</a>
                                </span>
                            </li>

                             <li>
                                <span class="container_button">
                                    <a href="#" title="CONCEPÇÃO">6 A 12 MESES</a>
                                </span>
                            </li>

                             <li>
                                <span class="container_button">
                                    <a href="#" title="CONCEPÇÃO">1 A 2 ANOS</a>
                                </span>
                            </li>
                        </ul>
                    </nav>
                </div>
            </article>
        </section>

        <section class="compartilhe">
            <article>
                <div class="content">
                    <a href="#" title="Compartilhe" class="compartilhe">Compartilhe</a>
                    <p>
                        Compartilhe os melhores conteúdos sobre saúde, nutrição e bem-estar com os seus amigos e familiares através das redes sociais.
                    </p>
                </div>
            </article>
        </section>

        <?php include_once('footer.php'); ?>

        <a href="#" title="CADASTRE-SE" class="btn_stick_cadastrese">CADASTRE-SE</a>

        <script src="js/main.js"></script>