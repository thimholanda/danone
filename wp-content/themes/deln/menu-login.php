<?php 
    $user_info;
    get_user_info();
?>

<header>
    <button class="lupa"><span>Lupa</button>
    <h1><span>Danone Early Life Nutrition</span></h1>
    <button class="menu"><span>Menu</span></button>
        <nav class="menu">
            <ul>
                <li>
                    <a class="profile_item" href="#" title="Perfil">
                        <div class="container_image">
                            <?php 
                                $sexo_usuario = get_user_meta( $user_info->ID,'user_sexo',true);
                                $base_url = get_template_directory_uri();

                                $img_usuario = get_user_meta($user_info->ID, 'user_img', true);

                                if($img_usuario != '')
                                {
                                    echo "<img src='{$img_usuario}' title='{$user_info->display_name}'>";
                                }

                                else
                                {
                                    switch ($sexo_usuario) {
                                        case '1':
                                            echo "<img src='{$base_url}/img/base-images/menu/avatar-pai.svg' title='{$user_info->display_name}'>";
                                            break;

                                        case '0':
                                            echo "<img src='{$base_url}/img/base-images/menu/avatar-mae.svg' title='{$user_info->display_name}'>";
                                            break;

                                        case '3':
                                            echo "<img src='{$base_url}/img/base-images/menu/avatar-pai.svg' title='{$user_info->display_name}'>";
                                            break;
                                    }
                                }
                            ?>
                            
                            <span class="mask"></span>
                        </div> 
                        <div class="wrap_menu">
                            <span class="name">
                                <?php
                                    $user_id = $user_info->ID;
                                    $nome_full = $user_info->display_name; 
                                    $nome_usuario = getFirstSecondName($nome_full);
                                    echo $nome_usuario;
                                ?>
                            </span>
                            <div class="wrap_account">
                                <span class="account"><span></span>Perfil</span>
                                <span class="arrow_account"></span>
                            </div>                               
                        </div>                      
                    </a>
                </li>
                <li>
                    <nav class="select_filhos">
                        <ul>

                            <?php 
                                $array_filho_ativo = get_filho_ativo($user_id);
                                $count_filho_ativo = count($array_filho_ativo);
                                $obj_filho_ativo = array_shift($array_filho_ativo);
                                $nome_filho_ativo_full = $obj_filho_ativo->filho_nome;
                                $nome_filho_ativo = getFirstSecondName($nome_filho_ativo_full);
                                $id_filho_ativo = $obj_filho_ativo->filho_id;
                            ?>

                            <?php if ($count_filho_ativo > 0): ?>

                                <li id-filho-ativo="<?php echo $id_filho_ativo; ?>" class="item_selected btn_filho_ativo">
                                    <span class="icon_selected"></span>
                                    <div class="wrap_select">
                                        <h3>
                                            <?php 
                                                if($nome_filho_ativo != ' ')
                                                {
                                                    echo $nome_filho_ativo; 
                                                }
                                                else
                                                {
                                                    echo 'Qual o nome?';
                                                }                                                
                                            ?>
                                        </h3>
                                        <p><?php get_idade_e_categoria($obj_filho_ativo); ?></p>
                                    </div>
                                </li>

                                <?php 
                                    #acessando infos dos outros filhos
                                    $array_filhos_inativos =  get_filhos_inativos($user_id);
                                    $count_filhos_inativos = count($array_filhos_inativos);
                                ?>

                                <?php if($count_filhos_inativos > 0): ?>

                                    <?php 

                                        foreach ($array_filhos_inativos as $obj):

                                        $nome = getFirstName($obj->filho_nome);

                                        # definindo as variáveis
                                        if ($nome != "") {
                                            $nome = getFirstSecondName($obj->filho_nome);
                                        }
                                        else
                                        {
                                            $nome = 'Qual o nome?';
                                        }

                                        $id_filho = $obj->filho_id;
                                    ?>

                                    <li id-filho-inativo="<?php echo $id_filho;?>" class="item_unselected btn_filho_inativo">
                                        <a title="<?php echo $nome;?>">
                                            <span class="icon_radio"></span>
                                            <div class="wrap_select">
                                                <h3><?php echo $nome;?></h3>
                                                <p><?php get_idade_e_categoria($obj); ?></p>
                                            </div>
                                        </a>
                                    </li>

                                    <?php endforeach; ?>

                                <?php endif; ?>

                                <li class="item_unselected">
                                    <a href="<?php echo get_page_link(313) ; ?>" title="Adicionar">
                                        <span class="icon_adicionar"></span>
                                        <div class="wrap_select">
                                            <h3>Adicionar</h3>
                                        </div>
                                    </a>
                                </li>
                        <?php else: ?>

                        <li class="item_unselected">
                            <a href="<?php echo get_page_link(313) ; ?>" title="Adicionar">
                                <span class="icon_adicionar"></span>
                                <div class="wrap_select">
                                    <h3>Adicionar</h3>
                                </div>
                            </a>
                        </li>

                    <?php endif; ?>

                        </ul>
                    </nav>
                </li>

                <li class="regular1">
                    <a class="regular_itens" href="#" title="BUSCA"><span>BUSCA</span></a>
                </li>

                <li class="regular2">
                    <a class="regular_itens" href="<?php echo get_post_type_archive_link('fases'); ?>" title="HOME"><span>HOME</span></a>
                </li>

                <li class="regular3">
                    <a class="regular_itens" href="#" title="FASES"><span class="arrow_menu">FASES<span></span></span></a>
                    <nav class="fases">
                        <ul>
                            <li><a href="<?php echo get_term_link( 'concepcao', 'home-fase' ); ?>" title="Concepção">Concepção</a><span class="trace"></span></li>
                            <li><a href="<?php echo get_term_link( 'gravidez', 'home-fase' ); ?>" title="Gravidez">Gravidez</a><span class="trace"></span></li>
                            <li><a href="<?php echo get_term_link( 'recem-nascido', 'home-fase' ); ?>" title="Recém Nascido">Recém Nascido</a><span class="trace"></span></li>
                            <li><a href="<?php echo get_term_link( '1-a-6-meses', 'home-fase' ); ?>" title="1 a 6 meses">1 a 6 meses</a><span class="trace"></span></li>
                            <li><a href="<?php echo get_term_link( '6-a-12-meses', 'home-fase' ); ?>" title="6 a 12 meses">6 a 12 meses</a><span class="trace"></span></li>
                            <li><a href="<?php echo get_term_link( '1-a-2-anos', 'home-fase' ); ?>" title="1 a 2 anos">1 a 2 anos</a></li>

                        </ul>
                    </nav>
                </li>

                <li class="regular4">
                    <a class="regular_itens" href="<?php echo get_page_link(67) ; ?>" title="NOSSOS PRODUTOS"><span>NOSSOS PRODUTOS</span></a>
                </li>

                <li class="regular5">
                    <a class="regular_itens" href="<?php echo get_page_link(313) ; ?>" title="CONFIGURAÇÕES"><span>CONFIGURAÇÕES</span></a>
                </li>

                <li class="sair">
                    <a href=" <?php echo wp_logout_url( home_url() ); ?> " title="SAIR">SAIR</a>
                </li>
            </ul>
        </nav>

    </header>