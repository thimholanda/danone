<?php

    if (is_user_logged_in()):

    $user_id = $user_info->ID;

    if(isset($_GET['ativar_filho']))  ativa_filho((int)$_GET['ativar_filho'], $user_id);

    $nome_full = $user_info->display_name;
    $nome_usuario = getFirstName($nome_full);

    #acessando infos do filho ativo
    $array_filho_ativo = get_filho_ativo($user_id);
    $count_filho_ativo = count($array_filho_ativo);
    $obj_filho_ativo = array_shift($array_filho_ativo);
    $nome_filho_ativo_full = $obj_filho_ativo->filho_nome;
    $nome_filho_ativo = getFirstName($nome_filho_ativo_full);
    $id_filho_ativo = $obj_filho_ativo->filho_id;

    #Criação das variáveis para definir as fases

    #0 gravidez / 1 = nascido
    $tipo_filho = $obj_filho_ativo->filho_tipo;


    $data_nascimento = $obj_filho_ativo->filho_data_nascimento;
    $agora = new DateTime();
    $data_referencia = new DateTime($data_nascimento . ' 00:00:00');
    $diferenca = date_diff($data_referencia,$agora);

    $dif_mes = $diferenca->m;
    $dif_ano = $diferenca->y;
    $dif_semana = floor($diferenca->days/7) + 1;
    $dif_semana_gravidez = floor(41 - ($diferenca->days/7) + 1 );

    $semana_atual;

    #condição para filho nascido
    // echo 'ano' . $dif_ano .'<br/>';
    // $dif_ano = 0;
    // echo 'mes' . $dif_mes .'<br/>';
    // $dif_mes = 1;
    // echo 'semana' . $dif_semana .'<br/>';
    // $dif_semana = 5;
    // echo 'semana gravidez' .$dif_semana_gravidez .'<br/>';

    if($tipo_filho != ''):

        if($tipo_filho == 1)
        {
            #condicoes para todos menos gravidez

            #condicao recem nascido
            if($dif_semana <= 4 && $dif_ano < 1 )
            {
                // echo 'recem-nascido';
                $categoria_atual_filho = 'recem-nascido';
                $semana_atual = $dif_semana;
                $semana_atual;
                    //     //     // $categoria_atual_filho = 'recem-nascido';
            }

            #condicao 1 a 6 meses
            else if($dif_mes <= 6 && $dif_ano < 1)
            {
                // echo '1 a 6 meses';
                $categoria_atual_filho = '1-a-6-meses';
                $mes_atual = $dif_mes;
                $mes_atual;
            }

             #condicao 6 a 12 meses
            else if($dif_mes <= 12 && $dif_ano < 1)
            {
                // echo '6 a 12 meses';
                $categoria_atual_filho = '6-a-12-meses';
                $mes_atual = $dif_mes;
                $mes_atual = $mes_atual;
            }

            #condição para 1 a 2 anos
            else if($dif_ano >= 1)
            {
                // echo '1 a 2 anos';
                $categoria_atual_filho = '1-a-2-anos';
                $mes_atual = $dif_mes;

                if($mes_atual == 0)
                {
                    $mes_atual = 1;
                }
                
            }
        }

        else if($tipo_filho == 0)
        {
            $categoria_atual_filho = 'gravidez';
            if($dif_semana_gravidez <= 0)
            {
                $dif_semana_gravidez = 1;
            }

            else if($dif_semana_gravidez > 40)
            {
                $dif_semana_gravidez = 40;
            }

            $semana_atual = $dif_semana_gravidez;
        }

        else
        {
            $categoria_atual_filho = 'concepcao';
        }

    else:
        $categoria_atual_filho = 'concepcao';
    endif;

    # definindo as variáveis

   if ($nome_filho_ativo != "") {
       $nome = getFirstName($nome_filho_ativo_full);
   }
   else
   {
       $nome_filho_ativo = 'Qual o nome?';
   }

   $sexo_ativo = $obj_filho_ativo->filho_sexo;

   switch ($sexo_ativo) {
       case '0':
       $sexo_icon_ativo = 'fem';
       break;

       case '1':
       $sexo_icon_ativo = 'masc';
       break;

       case '3':
       $sexo_icon_ativo = '';
       break;
   }

    #acessando infos dos outros filhos
    $array_filhos_inativos =  get_filhos_inativos($user_id);
    $count_filhos_inativos = count($array_filhos_inativos);
?>

<nav class="select_filhos_inline">
    <ul>
        <li><span class="wrap_nome">Olá, <?php echo $nome_usuario; ?></span></li>
        <?php if ($count_filho_ativo > 0): ?>
        <li id-filho-ativo="<?php echo $id_filho_ativo; ?>" class="button button_filho_ativo">
            <span class="icone_sexo <?php echo $sexo_icon_ativo; ?>"></span><span class="nome"><?php echo $nome_filho_ativo; ?></span><span <?php if($count_filhos_inativos > 0) echo 'class="icon_seta"' ?> ></span>
        </li>

            <?php if($count_filhos_inativos > 0): ?>

                <nav class="filhos_inline">
                    <ul>

                    <?php foreach ($array_filhos_inativos as $obj):?>

                    <?php 

                        $nome = getFirstName($obj->filho_nome);

                        # definindo as variáveis
                        if ($nome != "") {
                            $nome = getFirstName($obj->filho_nome);
                        }
                        else
                        {
                            $nome = 'Qual o nome?';
                        }

                        $sexo = $obj->filho_sexo;
                        $id_filho = $obj->filho_id;

                        switch ($sexo) {
                            case '0':
                            $sexo_icon = 'fem';
                            break;

                            case '1':
                            $sexo_icon = 'masc';
                            break;

                            case '3':
                            $sexo_icon = '';
                            break;
                        }

                    ?>
                    
                        <li id-filho-inativo="<?php echo $id_filho; ?>" class="btn_filho_inativo"><span class="icone_sexo <?php echo $sexo_icon; ?>"></span><span class="nome"><?php echo $nome; ?></span></li>
                        
                    <?php endforeach; ?>

                    </ul>
                </nav>
            <?php endif; ?>

    <?php else: ?>
        <li>    
            <span class="nome">+ Cadastrar filho</span>
        </li>
    <?php endif; ?>
    </ul>
</nav>

<script type="text/javascript">
    var site_url = "<?php echo get_site_url(); ?>";
</script> 

<?php endif; ?>