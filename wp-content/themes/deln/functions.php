<?php

// Report all errors except E_NOTICE
error_reporting(E_ALL ^ E_NOTICE);

function theme_scripts()
{
	wp_enqueue_style('normalize',get_template_directory_uri().'/css/normalize.css', array(), '20160804');

  wp_enqueue_style('form-reset',get_template_directory_uri().'/css/form-reset.css', array(), '20160804');

	wp_enqueue_style('main',get_template_directory_uri().'/css/main.css', array(), '20160804');

  wp_enqueue_style('base',get_template_directory_uri().'/css/base.css', array(), '20160804');

  wp_enqueue_style('slick','http://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css', array(), '20160804');

	wp_enqueue_script('modernizr',get_template_directory_uri().'/js/vendor/modernizr-2.8.3.min.js', array(),'20160804',false);

	wp_enqueue_script('plugins',get_template_directory_uri().'/js/plugins.js', array('jquery'),'20160804',true);

  wp_enqueue_script('jquery-ui','http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js', array('jquery'),'20160804',true);

  wp_enqueue_script('tween-max','https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js', array('jquery'),'20160804',true);

  wp_enqueue_script('Draggable','https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/utils/Draggable.min.js', array('jquery'),'20160804',true);

   wp_enqueue_script('csssplugin','https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/plugins/CSSPlugin.min.js', array('jquery'),'20160804',true);

  wp_enqueue_script('slick-slider','http://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js', array('jquery'),'20160804',true);

  wp_enqueue_script('throwprops',get_template_directory_uri().'/js/ThrowPropsPlugin.min.js', array('jquery'),'20160804',true);

  wp_enqueue_script('scrollto',get_template_directory_uri().'/js/ScrollToPlugin.min.js', array('jquery'),'20160804',true);

  wp_enqueue_script('main',get_template_directory_uri().'/js/main.js', array('jquery'),'20160804',true);

  wp_enqueue_script('ativa-filhos',get_template_directory_uri().'/js/ativa-filhos.js', array('jquery'),'20160804',true);

  wp_enqueue_script('busca',get_template_directory_uri().'/js/busca.js', array('jquery'),'20160804',true);

  wp_localize_script( 'busca', 'obj', array(
      'ajax_url' => admin_url( 'admin-ajax.php' )
    ));

 /* Begin: Comentarios customizado */
  wp_enqueue_script('likes',get_template_directory_uri().'/js/likes.js', array(), '20160804', true);
  wp_localize_script('likes', 'config', array('url_ajax' => admin_url( 'admin-ajax.php' )));

  wp_enqueue_script('comentarios',get_template_directory_uri().'/js/comentarios.js', array(), '20160804', true);
  wp_localize_script('comentarios', 'config', array('url_ajax' => admin_url( 'admin-ajax.php' )));
  /* End: Comentarios customizado */

  if(is_page('Cadastro'))
  {
    wp_enqueue_script('cadastro',get_template_directory_uri().'/js/cadastro.js', array('jquery'),'20161010',true);
    wp_enqueue_script('facebook',get_template_directory_uri().'/js/facebook-login.js', array('jquery'),'20161010',true);
    wp_enqueue_script('google-callback','https://apis.google.com/js/platform.js?onload=onLoadGoogleCallback', array('jquery'),'20161010',true);
    wp_enqueue_script('validate',get_template_directory_uri().'/js/jquery.validate.min.js', array('jquery'),'20161010',true);
    wp_enqueue_script('validate-aditional',get_template_directory_uri().'/js/additional-methods.min.js', array('jquery'),'20161010',true);

    

    wp_localize_script( 'cadastro', 'obj', array(
      'ajax_url' => admin_url( 'admin-ajax.php' )
    ));
  }

  if(is_page('Login'))
  {
    wp_enqueue_script('login',get_template_directory_uri().'/js/login.js', array('jquery'),'20161010',true);

    wp_enqueue_script('facebook',get_template_directory_uri().'/js/facebook-login.js', array('jquery'),'20161010',true);
     wp_enqueue_script('google-callback','https://apis.google.com/js/platform.js?onload=onLoadGoogleCallback', array('jquery'),'20161010',true);

    wp_localize_script( 'login', 'obj', array(
      'ajax_url' => admin_url( 'admin-ajax.php' )
    ));
  }

  if(is_page('Fale com a gente'))
  {
    wp_enqueue_script('fale',get_template_directory_uri().'/js/fale.js', array('jquery'),'20161010',true);
    wp_enqueue_script('masked-input',get_template_directory_uri().'/js/maskedinput.min.js', array('jquery'),'20161010',true);
    wp_enqueue_script('validate',get_template_directory_uri().'/js/jquery.validate.min.js', array('jquery'),'20161010',true);

    wp_localize_script( 'fale', 'obj', array(
      'ajax_url' => admin_url( 'admin-ajax.php' )
    ));
  }

  if(is_page('Perfil'))
  {
    wp_enqueue_script('perfil',get_template_directory_uri().'/js/perfil.js', array('jquery'),'20161010',true);

    wp_enqueue_script('masked-input',get_template_directory_uri().'/js/maskedinput.min.js', array('jquery'),'20161010',true);

    wp_localize_script( 'perfil', 'obj', array(
      'ajax_url' => admin_url( 'admin-ajax.php' )
    ));
  }

  if(is_page('Cadastro Complementar'))
  {
    wp_enqueue_script('cadastro-complementar',get_template_directory_uri().'/js/cadastro-complementar.js', array('jquery'),'20161010',true);

    wp_localize_script( 'cadastro-complementar', 'obj', array(
      'ajax_url' => admin_url( 'admin-ajax.php' )
    ));
  }

  if(is_page( array('Cadastro Complementar','Perfil') ))
  {
    wp_enqueue_script('picker',get_template_directory_uri().'/js/picker.js', array('jquery'),'20161010',true);

    wp_enqueue_script('picker-date',get_template_directory_uri().'/js/picker.date.js', array('jquery'),'20161010',true);

    wp_enqueue_script('picker-time',get_template_directory_uri().'/js/picker.time.js', array('jquery'),'20161010',true);

    wp_enqueue_script('legacy',get_template_directory_uri().'/js/legacy.js', array('jquery'),'20161010',true);

    wp_enqueue_script('pt-br',get_template_directory_uri().'/js/pt_PT.js', array('jquery'),'20161010',true);

    wp_enqueue_style('classic',get_template_directory_uri().'/css/classic.css', array(), '20160804');

    wp_enqueue_style('classic-date',get_template_directory_uri().'/css/classic.date.css', array(), '20160804');
  }
}

add_action('wp_enqueue_scripts','theme_scripts');

add_action('wp_ajax_nopriv_executa_login','executa_login');
add_action('wp_ajax_executa_login','executa_login');

add_action('wp_ajax_nopriv_executa_cadastro','executa_cadastro');
add_action('wp_ajax_executa_cadastro','executa_cadastro');

add_action('wp_ajax_nopriv_executa_cadastro_complementar','executa_cadastro_complementar');
add_action('wp_ajax_executa_cadastro_complementar','executa_cadastro_complementar');

add_action('wp_ajax_nopriv_atualizar_pai','atualizar_pai');
add_action('wp_ajax_atualizar_pai','atualizar_pai');

add_action('wp_ajax_nopriv_atualizar_filhos','atualizar_filhos');
add_action('wp_ajax_atualizar_filhos','atualizar_filhos');

add_action('wp_ajax_nopriv_executa_login_facebook','executa_login_facebook');
add_action('wp_ajax_executa_login_facebook','executa_login_facebook');

add_action('wp_ajax_nopriv_executa_busca','executa_busca');
add_action('wp_ajax_executa_busca','executa_busca');

add_action('wp_ajax_nopriv_executa_fale','executa_fale');
add_action('wp_ajax_executa_fale','executa_fale');


function executa_fale()
{
  $json = stripslashes($_POST['data']);
  $decoded = json_decode($json,true);

  $produtos;

  foreach ($decoded as $array) {
    
    if($array['name'] == 'produtos[]')
    {
      $produtos[] = $array['value']; 
    }

    else
    {
      $$array['name'] = $array['value'];
    }    
  }

  $produtos = implode(', ', $produtos);

  $user_nome;
  $user_email;
  $user_email;
  $user_telefone;
   if($produtos != ''){$produtos = $produtos; }else{$produtos = 'Não Informado'; };
  $produtos;
  $assunto;
  if($assunto != ''){$assunto = $assunto; }else{$assunto = 'Não Informado'; };
  $assunto;
  $mensagem;
  if($aceite_novidades == '0'){$aceite_novidades = 'Sim'; }else{$aceite_novidades = 'Não'; };
  $aceite_novidades;

  require('classes/SendEmail.class.php');
  require('emails/email-fale.php');
  $enviar_email = new SendEmail($user_email, $user_nome , $user_nome . ' - Enviou um mensagem', $email_message );

  if ($enviar_email->sendEmail() == 1)
  {
    # Cadastro e envio de e-mail com sucesso
    echo 1;
  }
  else
  {
    echo 0;
  }

  die();
}

function atualizar_filhos()
{
  global $wpdb;
  global $user_info;

  $user_id = $user_info->ID;

  $json = stripslashes($_POST['data']);
  $decoded = json_decode($json,true);

  foreach ($decoded as $key => $value) {
    $$key = $value;
  }

  #update
  if(count($update) > 0)
  {
    foreach ($update as $array) 
    {
      $filho_id = $array['filho_id'];
      $filho_nome = $array['filho_nome'];
      $filho_sexo = $array['filho_sexo'];
      $filho_tipo = $array['filho_tipo'];
      $filho_data_nascimento = $array['filho_data_nascimento'];
      $filho_data_submit = $array['filho_data_submit'];

      if (strpos($filho_data_nascimento, '/') !== false) {
        $filho_data_submit = invert_data($filho_data_nascimento);
      }
      else
      {
         $filho_data_submit = convert_data($filho_data_submit);
      }

      #realiza query para atualizar todos os filhos para 0
      $tablename = $wpdb->prefix . "filhos";
      $sql = $wpdb->prepare( "UPDATE $tablename SET filho_nome = %s, filho_sexo = %s, filho_tipo = %s, filho_data_nascimento = %s WHERE filho_id = %d", 
        $filho_nome, $filho_sexo, $filho_tipo, $filho_data_submit, $filho_id);

      $wpdb->query($sql);
    }
  }

  #create
  if(count($insert) > 0)
  {
    foreach ($insert as $array) 
    {
      $filho_nome = $array['filho_nome'];
      $filho_sexo = $array['filho_sexo'];
      if ($filho_sexo == '') {$filho_sexo = '3'; }
      $filho_tipo = $array['filho_tipo'];
      if ($filho_tipo == '') {$filho_tipo = '3'; }
      $filho_data_nascimento = $array['filho_data_nascimento'];
      $filho_data_submit = $array['filho_data_submit'];

      if($filho_data_submit == ''){
       $filho_data_submit = getNow(); 
      }
      else
      {
        $filho_data_submit = convert_data($filho_data_submit);
      }     

      #realiza query para inserir todos os filhos
      $tablename = $wpdb->prefix . "filhos";
      $sql = $wpdb->prepare( "INSERT INTO $tablename(filho_nome,filho_sexo,filho_tipo,filho_data_nascimento,user_id,filho_registered) VALUES(%s,%s,%s,%s,%d,%s)", 
        $filho_nome, $filho_sexo, $filho_tipo, $filho_data_submit, $user_id, getNow());

      $wpdb->query($sql);
    }
  }

  #delete
  if(count($delete) > 0)
   {
     foreach ($delete as $value) 
     {
        $filho_id = $value;

        #realiza query para excluir o filho
        $tablename = $wpdb->prefix . "filhos";
        $sql = $wpdb->prepare( "DELETE FROM $tablename WHERE filho_id = %d", 
          $filho_id);

        $wpdb->query($sql);      
     }
   }

  #seleciona o filho mais atual
   $tablename = $wpdb->prefix . "filhos";
   $sql = $wpdb->prepare( "SELECT MAX(t_f.filho_id) FROM $tablename t_f WHERE user_id = %d", 
     $user_id);

   $resultado = $wpdb->get_results($sql);
   $resultado = array_shift($resultado);
   $filho_recente = $resultado->{"MAX(t_f.filho_id)"};

   #atualiza todos os filhos para status 0
   $tablename = $wpdb->prefix . "filhos";
   $sql = $wpdb->prepare( "UPDATE $tablename SET filho_status = %d WHERE user_id = %d", 0, $user_id);
   $wpdb->query($sql);

   #atualiza o id do filho selecionado para 1
   $tablename = $wpdb->prefix . "filhos";
   $sql = $wpdb->prepare( "UPDATE $tablename SET filho_status = %d WHERE filho_id = %d AND user_id = %d", 1, $filho_recente, $user_id);
   $wpdb->query($sql);

  die('1');
}

function atualizar_pai()
{
  $json = stripslashes($_POST['data']);
  $decoded = json_decode($json,true);

  // var_dump($decoded);

  foreach ($decoded as $array) {
    
    $$array['name'] = $array['value'];
  }

  global $user_info;
  global $wpdb;

  $user_id = $user_info->ID;

  $user_nome;
  $user_sexo;
  $user_email;
  $user_nascimento_submit;
  $user_telefone;
  $user_cep;
  $user_novidades;

  if (strpos($user_nascimento, '/') !== false) {
    $user_nascimento_submit = invert_data($user_nascimento);
  }
  else
  {
     $user_nascimento_submit = convert_data($user_nascimento_submit);
  }

  if(!isset($user_novidades)) $user_novidades = '1';

  $userdata = array(
      'ID'                    =>  $user_id,
      'user_nicename'         =>  apply_filters("pre_user_nicename", $wpdb->escape(trim( ucwords($user_nome) ))),
      'nickname'              =>  apply_filters("pre_user_nickname", $wpdb->escape(trim( ucwords($user_nome) ))),
      'display_name'          =>  apply_filters("pre_user_display_name", $wpdb->escape(trim( ucwords($user_nome) ))),
      'user_login'            =>  apply_filters("pre_user_login", sanitize_email($user_email)),
      'user_email'            =>  apply_filters("pre_user_email", sanitize_email($user_email)),
  );

  $retorno = array(
    'response_error'    => 0,
    'email_igual'       => 0
  );

  if( email_exists( $user_email )) {
    $retorno['email_igual'] = 1;
  }

  wp_update_user($userdata);

  update_user_meta( $user_id, 'user_aceite_novidades', $wpdb->escape(trim($user_novidades)));
  update_user_meta( $user_id, 'user_sexo', $user_sexo);
  update_user_meta( $user_id, 'user_telefone', $user_telefone);
  update_user_meta( $user_id, 'user_cep', $user_cep);
  update_user_meta( $user_id, 'user_nascimento', $user_nascimento_submit);


  if (is_wp_error( $user_id ))
  {
    $retorno['response'] = 1;
  }

  echo json_encode($retorno);

  die();
}

function ativa_filho($id_filho,$id_user)
{
  if($id_filho)
  {

    global $wpdb;

    #realiza query para atualizar todos os filhos para 0
    $tablename = $wpdb->prefix . "filhos";
    $sql = $wpdb->prepare( "UPDATE $tablename SET filho_status = %d WHERE user_id = %d", 0, $id_user);
    $wpdb->query($sql);

    #atualiza o id do filho selecionado para 1
    $tablename = $wpdb->prefix . "filhos";
    $sql = $wpdb->prepare( "UPDATE $tablename SET filho_status = %d WHERE filho_id = %d AND user_id = %d", 1, $id_filho, $id_user);
    $wpdb->query($sql);

  }
  
}

function executa_cadastro()
{

  global $wpdb;

  $json = stripslashes($_POST['data']);
  $decoded = json_decode($json,true);

  foreach ($decoded as $value) {
    if($value['name'] != 'senha' && $value['name'] != 'img_user')
    {
      $$value['name'] = mb_strtolower($value['value'],'utf8');
    }

    else if($value['name'] == 'senha')
    {
      $$value['name'] = $value['value'];
    }

    else if($value['name'] == 'img_user')
    {
      $$value['name'] = $value['value'];
    }

  }

  if(!isset($senha))
  {
    $senha = wp_generate_password();

  }

  if(!isset($img_user))
  {
    $img_user = '';
  }

  /*
  $nome                        %s wp_usermeta
  $email                       %s wp_users
  $senha                       %s wp_users
  $aceite_termos               %s wp_usermeta
  $aceite_novidades            %s wp_usermeta
  */

  $token = bin2hex(random_bytes(20));

  $user_registered = getNow();

  $userdata = array(
      'user_nicename'         =>  apply_filters("pre_user_nicename", $wpdb->escape(trim( ucwords($nome) ))),
      'nickname'              =>  apply_filters("pre_user_nickname", $wpdb->escape(trim( ucwords($nome) ))),
      'display_name'          =>  apply_filters("pre_user_display_name", $wpdb->escape(trim( ucwords($nome) ))),
      'user_login'            =>  apply_filters("pre_user_login", sanitize_email($email)),
      'user_email'            =>  apply_filters("pre_user_email", sanitize_email($email)),
      'user_pass'             =>  apply_filters("pre_user_pass", $senha),
      'user_registered'       =>  $user_registered,
      'role'                  =>  'subscriber',
      'show_admin_bar_front'  =>  'false'
  );

  $user_id = wp_insert_user($userdata);

  $retorno = array(
    'user_token_cadastro' => $token
  );

  require('classes/SendEmail.class.php');

  if (!is_wp_error( $user_id ))
  {
    // insert meta_keys

    if($aceite_termos != 1) $aceite_termos = 0;
    if($aceite_novidades != 1) $aceite_novidades = 0;

    add_user_meta( $user_id, 'user_aceite_termos', $wpdb->escape(trim($aceite_termos)));
    add_user_meta( $user_id, 'user_aceite_novidades', $wpdb->escape(trim($aceite_novidades)));
    add_user_meta( $user_id, 'user_permissao', 'assinante');
    add_user_meta( $user_id, 'user_sexo', '');
    add_user_meta( $user_id, 'user_telefone', '');
    add_user_meta( $user_id, 'user_cep', '');
    add_user_meta( $user_id, 'user_nascimento', '');
    add_user_meta( $user_id, 'user_img', $img_user);
    add_user_meta( $user_id, 'user_token_cadastro', $retorno['user_token_cadastro']);

    # Envia o e-mail
    $nome_email = ucwords($nome);
    require('emails/email-cadastro.php');
    $enviar_email = new SendEmail($email, $nome_email , $nome_email . ' - Seja bem-vinda(o)', $email_message );

    if ($enviar_email->sendEmail() == 1)
    {
      # Cadastro e envio de e-mail com sucesso
      $retorno['response'] = '2';

      $_SESSION['user_token_cadastro'] = $token;

      # executa o login do usuário cadastrado
      $creds = array();
      $creds['user_login'] = sanitize_email($email);
      $creds['user_password'] = $senha;
      $creds['remember'] = true;
      $user = wp_signon( $creds, false );

      if(is_wp_error($user))
      {
        $retorno['error_login'] = true;
      }
    }
    else
    {
      # Cadastro realizado com com sucesso mas falha no envio do e-mail
      $retorno['response'] = '3';

      $_SESSION['user_token_cadastro'] = $token;

      # executa o login do usuário cadastrado
      $creds = array();
      $creds['user_login'] = sanitize_email($email);
      $creds['user_password'] = $senha;
      $creds['remember'] = true;
      $user = wp_signon( $creds, false );

      if(is_wp_error($user))
      {
        $retorno['error_login'] = true;
      }
    }
  }
  else
  {
    if(email_exists(sanitize_email($email)))
    {
      // Email existe
      $retorno['response'] = '1';
    }
    else
    {
      // Algum erro
      $retorno['response'] = '0';
    }
  }

  echo json_encode($retorno);

  die();
}


function executa_cadastro_complementar()
{
  global $wpdb;

  $json = stripslashes($_POST['data']);
  $decoded = json_decode($json,true);

  foreach ($decoded as $value) {
    $$value['name'] = $value['value'];
  }

  #update meta
  global $user_info;

  #atualiza user
  if($user_sexo == ''){ $user_sexo = 3; };
  update_user_meta( $user_info->ID, 'user_sexo', $user_sexo);

  #insere filhos
  if($filho_tipo != '' || $filho_sexo != ''):

  #trata as vars vazias
  if($filho_tipo == ''){ $filho_tipo = 3; };
  if($filho_sexo == ''){ $filho_sexo = 3; };
  

  $filho_nome = mb_strtolower($filho_nome,'utf-8');

  $filho_status = 1;
  $data_final = convert_data($filho_data_nascimento_submit);

  #gravar na tabela filhos

  // insert data to table filhos
  $tablename = $wpdb->prefix . "filhos";

  $sql = $wpdb->prepare( "INSERT INTO $tablename (filho_tipo, filho_data_nascimento, filho_nome, filho_sexo, user_id, filho_status, filho_registered)
    values (%d, %s, %s, %d, %d, %d, %s)",
    $filho_tipo, $data_final, $wpdb->escape( trim( ucwords($filho_nome) ) ), $filho_sexo, $user_info->ID,$filho_status,getNow() );

  $wpdb->query($sql);

  endif;

  #sucesso
  echo '1';

  die();
}

function convert_data($date)
{
  return preg_replace('#(\d{4})/(\d{2})/(\d{2})#', '$1-$2-$3', $date);
}

function invert_data($date)
{
  return preg_replace('#(\d{2})/(\d{2})/(\d{4})#', '$3-$2-$1', $date);
}

function convert_data_front($date)
{
  return preg_replace('#(\d{4})-(\d{2})-(\d{2})#', '$3/$2/$1', $date);
}

function getNow()
{
  $date = new DateTime();
  $date->setTimezone(new DateTimeZone('America/Sao_Paulo'));
  return $date->format('Y-m-d H:i:s');
}

function getNowDate()
{
  $date = new DateTime();
  $date->setTimezone(new DateTimeZone('America/Sao_Paulo'));
  return $date->format('Y-m-d');
}


add_filter( 'manage_edit-fases_columns', 'minhas_colunas_de_fases' );

add_filter( 'manage_edit-materias_columns', 'minhas_colunas_de_materias' );

add_filter( 'manage_edit-home-fases_columns', 'minhas_colunas_de_homes' );

function minhas_colunas_de_fases( $columns ) {

  $columns = array(
    'cb' => '<input type="checkbox" />',
    'title' => __( 'Fase' ),
    'fase_cat' => __( 'Categoria' ),
    'semana' => __( 'Semana' ),
    'mes' => __( 'Mês' ),
    'date' => __( 'Date' )
  );

  return $columns;
}

function minhas_colunas_de_materias( $columns ) {

  $columns = array(
    'cb' => '<input type="checkbox" />',
    'title' => __( 'Matéria' ),
    'materia_cat' => __( 'Categoria' ),
    'semana' => __( 'Semana' ),
    'mes' => __( 'Mês' ),
    'tags' => __( 'Tags' ),
    'date' => __( 'Date' )
  );

  return $columns;
}

function minhas_colunas_de_homes( $columns ) {

  $columns = array(
    'cb' => '<input type="checkbox" />',
    'title' => __( 'Título' ),
    'home_cat' => __( 'Categoria' ),
    'date' => __( 'Date' )
  );

  return $columns;
}

add_action( 'manage_materias_posts_custom_column', 'gerenciador_de_colunas_de_fases', 10, 2 );
add_action( 'manage_fases_posts_custom_column', 'gerenciador_de_colunas_de_fases', 10, 2 );
add_action( 'manage_home-fases_posts_custom_column', 'gerenciador_de_colunas_de_fases', 10, 2 );


function gerenciador_de_colunas_de_fases( $column, $post_id ) {
  global $post;

  switch( $column ) {

    case 'semana' :

      /* Get the post meta. */
      $semana = get_post_meta( $post_id, 'semana', true );

      $semana = (int)$semana;

      /* If no duration is found, output a default message. */
      if ( empty( $semana ) )
        echo __( '--' );

      /* If there is a duration, append 'minutes' to the text string. */
      else
        echo( $semana );

      break;

      case 'mes' :

      /* Get the post meta. */
      $mes = get_post_meta( $post_id, 'mes', true );

      $mes = (int)$mes;

      /* If no duration is found, output a default message. */
      if ( empty( $mes ) )
        echo __( '--' );

      /* If there is a duration, append 'minutes' to the text string. */
      else
        echo( $mes );

      break;

    /* If displaying the 'genre' column. */
    case 'fase_cat' :

      /* Get the genres for the post. */
      $terms = get_the_terms( $post_id, 'fase' );

      /* If terms were found. */
      if ( !empty( $terms ) ) {

        $out = array();

        /* Loop through each term, linking to the 'edit posts' page for the specific term. */
        foreach ( $terms as $term ) {
          $out[] = sprintf( '<a href="%s">%s</a>',
            esc_url( add_query_arg( array( 'post_type' => $post->post_type, 'fase' => $term->slug ), 'edit.php' ) ),
            esc_html( sanitize_term_field( 'name', $term->name, $term->term_id, 'fase', 'display' ) )
          );
        }

        /* Join the terms, separating them with a comma. */
        echo join( ', ', $out );
      }

      /* If no terms were found, output a default message. */
      else {
        _e( '--' );
      }

      break;

      /* If displaying the 'genre' column. */
      case 'materia_cat' :

        /* Get the genres for the post. */
        $terms = get_the_terms( $post_id, 'materia' );

        /* If terms were found. */
        if ( !empty( $terms ) ) {

          $out = array();

          /* Loop through each term, linking to the 'edit posts' page for the specific term. */
          foreach ( $terms as $term ) {
            $out[] = sprintf( '<a href="%s">%s</a>',
              esc_url( add_query_arg( array( 'post_type' => $post->post_type, 'materia' => $term->slug ), 'edit.php' ) ),
              esc_html( sanitize_term_field( 'name', $term->name, $term->term_id, 'materia', 'display' ) )
            );
          }

          /* Join the terms, separating them with a comma. */
          echo join( ', ', $out );
        }

        /* If no terms were found, output a default message. */
        else {
          _e( '--' );
        }

        break;

        case 'home_cat' :

        /* Get the genres for the post. */
        $terms = get_the_terms( $post_id, 'home-fase' );

        /* If terms were found. */
        if ( !empty( $terms ) ) {

          $out = array();

          /* Loop through each term, linking to the 'edit posts' page for the specific term. */
          foreach ( $terms as $term ) {
            $out[] = sprintf( '<a href="%s">%s</a>',
              esc_url( add_query_arg( array( 'post_type' => $post->post_type, 'home-fase' => $term->slug ), 'edit.php' ) ),
              esc_html( sanitize_term_field( 'name', $term->name, $term->term_id, 'home-fase', 'display' ) )
            );
          }

          /* Join the terms, separating them with a comma. */
          echo join( ', ', $out );
        }

        /* If no terms were found, output a default message. */
        else {
          _e( '--' );
        }

        break;



    /* Just break out of the switch statement for everything else. */
    default :
      break;
  }
}

add_filter( 'manage_edit-fases_sortable_columns', 'minha_coluna_sort' );
add_filter( 'manage_edit-materias_sortable_columns', 'minha_coluna_sort' );

function minha_coluna_sort( $columns ) {

  $columns['semana'] = 'semana';
  $columns['mes'] = 'mes';

  return $columns;
}

/* Only run our customization on the 'edit.php' page in the admin. */
add_action( 'load-edit.php', 'my_edit_fases_load' );
add_action( 'load-edit.php', 'my_edit_materias_load' );

function my_edit_fases_load() {
  add_filter( 'request', 'meu_sort_fases' );
}

function my_edit_materias_load() {
  add_filter( 'request', 'meu_sort_materias' );
}

// /* Sorts the movies. */
function meu_sort_fases( $vars ) {

  /* Check if we're viewing the 'movie' post type. */
  if ( isset( $vars['post_type'] ) && 'fases' == $vars['post_type'] ) {

    // Check if 'orderby' is set to 'duration'.
    if ( isset( $vars['orderby'] ) && 'semana' == $vars['orderby'] ) {

      /* Merge the query vars with our custom variables. */

      $vars = array_merge(
        $vars,
        array(
          'meta_key' => 'semana',
          'orderby' => 'meta_value',
          'meta_type' => 'UNSIGNED',
        )
      );
    }

    // Check if 'orderby' is set to 'duration'.
    if ( isset( $vars['orderby'] ) && 'mes' == $vars['orderby'] ) {

      /* Merge the query vars with our custom variables. */

      $vars = array_merge(
        $vars,
        array(
          'meta_key' => 'mes',
          'orderby' => 'meta_value',
          'meta_type' => 'UNSIGNED',
        )
      );
    }

  }

  return $vars;
}

// /* Sorts the movies. */
function meu_sort_materias( $vars ) {

  /* Check if we're viewing the 'movie' post type. */
  if ( isset( $vars['post_type'] ) && 'materias' == $vars['post_type'] ) {

    // Check if 'orderby' is set to 'duration'.
    if ( isset( $vars['orderby'] ) && 'semana' == $vars['orderby'] ) {

      /* Merge the query vars with our custom variables. */

      $vars = array_merge(
        $vars,
        array(
          'meta_key' => 'semana',
          'orderby' => 'meta_value',
          'meta_type' => 'UNSIGNED',
        )
      );
    }

    // Check if 'orderby' is set to 'duration'.
    if ( isset( $vars['orderby'] ) && 'mes' == $vars['orderby'] ) {

      /* Merge the query vars with our custom variables. */

      $vars = array_merge(
        $vars,
        array(
          'meta_key' => 'mes',
          'orderby' => 'meta_value',
          'meta_type' => 'UNSIGNED',
        )
      );
    }
  }

  return $vars;
}

function get_menor_semana($categoria_atual, $post_type, $meta_key_sort)
{
  global $wpdb;

  $query = "SELECT * FROM (SELECT MAX(d_p.ID), d_p_m.meta_value FROM deln_posts d_p

  INNER JOIN deln_term_relationships d_t_r ON d_p.ID = d_t_r.object_id
  INNER JOIN deln_terms d_t ON d_t_r.term_taxonomy_id = d_t.term_id
  INNER JOIN deln_postmeta d_p_m ON d_p.ID = d_p_m.post_id

  WHERE d_p.post_status = 'publish' AND d_p.post_type = '$post_type' AND d_t.slug = '$categoria_atual'  AND d_p_m.meta_key = '$meta_key_sort'

  GROUP BY d_p_m.meta_value) total ORDER BY cast(meta_value as unsigned)

  ";

  $resultado = $wpdb->get_results($query);

  $resultado = array_shift($resultado);

  return $resultado->meta_value;
}


function get_menu_footer($post_type, $term_id, $meta_key_sort)
{
  global $wpdb;

  $query = " SELECT * FROM ( SELECT MAX(d_p.ID), d_p_m.meta_value FROM deln_posts d_p

  INNER JOIN deln_term_relationships d_t_r ON d_p.ID = d_t_r.object_id
  INNER JOIN deln_terms d_t ON d_t_r.term_taxonomy_id = d_t.term_id
  INNER JOIN deln_postmeta d_p_m ON d_p.ID = d_p_m.post_id

  WHERE d_p.post_status = 'publish' AND d_p.post_type = '$post_type' AND d_p_m.meta_key = '$meta_key_sort' AND d_t.term_id = '$term_id'

  GROUP BY d_p_m.meta_value ) total ORDER BY (cast(meta_value as unsigned)) ASC
  ";

  return $resultado = $wpdb->get_results($query);
}




function get_menor_semana_materias($categoria_atual)
{
 // Verificar a menor semana cadastrada para esta categoria
  global $wpdb;

  $query = "SELECT * FROM (SELECT MAX(d_p.ID), d_p_m.meta_value FROM deln_posts d_p

  INNER JOIN deln_term_relationships d_t_r ON d_p.ID = d_t_r.object_id
  INNER JOIN deln_terms d_t ON d_t_r.term_taxonomy_id = d_t.term_id
  INNER JOIN deln_postmeta d_p_m ON d_p.ID = d_p_m.post_id

  WHERE d_p.post_status = 'publish' AND d_p.post_type = 'materias' AND d_t.slug = '$categoria_atual'  AND d_p_m.meta_key = 'semana'

  GROUP BY d_p_m.meta_value) total ORDER BY cast(meta_value as unsigned)

  ";

  $resultado = $wpdb->get_results($query);

  $resultado = array_shift($resultado);

  return $resultado->meta_value;
}

add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
    show_admin_bar(false);
}

function get_categoria_single_fases()
{
  $post_id = get_post()->ID;
  $term =  wp_get_post_terms($post_id, 'fase');
  return  $term[0]->slug;
}

function get_categoria_single_home_fases()
{
  $post_id = get_post()->ID;
  $term =  wp_get_post_terms($post_id, 'home-fase');
  return  $term[0]->slug;
}

function get_categoria_single_materias()
{
  $post_id = get_post()->ID;
  $term =  wp_get_post_terms($post_id, 'materia');
  return $term[0]->slug;
}

function new_excerpt_length($length) {
    return 10;
}
add_filter('excerpt_length', 'new_excerpt_length');

function definirImagemAbertura($cat)
{

  global $imagem_abertura;

  switch ($cat) {

    case 'concepcao':
      $imagem_abertura = 'concepcao';
      break;

      case 'gravidez':
      $imagem_abertura = 'gravidez';
      break;

      case 'recem-nascido':
      $imagem_abertura = 'recem_nascido';
      break;

      case '1-a-6-meses':
      $imagem_abertura = 'um_mes';
      break;

      case '6-a-12-meses':
      $imagem_abertura = 'seis_meses';
      break;

      case '1-a-2-anos':
      $imagem_abertura = 'um_ano';
      break;

    default:
      # code...
      break;

  }
}

function get_idade_e_categoria($obj_filho)
{
    $tipo_filho = $obj_filho->filho_tipo;
    $data_nascimento = $obj_filho->filho_data_nascimento;
    $agora = new DateTime();
    $data_referencia = new DateTime($data_nascimento . ' 00:00:00');
    $diferenca = date_diff($data_referencia,$agora);

    $dif_mes = $diferenca->m;
    $dif_ano = $diferenca->y;
    $dif_semana = floor($diferenca->days/7) + 1;
    $dif_semana_gravidez = floor(41 - ($diferenca->days/7) + 1 );

    $semana_atual;

  if($tipo_filho != ''):



      if($tipo_filho == '1')
      {
          #condicoes para todos menos gravidez

          #condicao recem nascido
          if($dif_semana <= 4 && $dif_ano < 1 )
          {
              // echo 'recem-nascido';
              $categoria_atual_filho = 'Recém-nascido';
              $semana_atual = $dif_semana;
              $semana_atual;
                  //     //     // $categoria_atual_filho = 'recem-nascido';
          }

          #condicao 1 a 6 meses
          else if($dif_mes <= 6 && $dif_ano < 1)
          {
              // echo '1 a 6 meses';
              $categoria_atual_filho = '1 a 6 meses';
              $mes_atual = $dif_mes;
              $mes_atual;
          }

           #condicao 6 a 12 meses
          else if($dif_mes <= 12 && $dif_ano < 1)
          {
              // echo '6 a 12 meses';
              $categoria_atual_filho = '6 a 12 meses';
              $mes_atual = $dif_mes;
              $mes_atual = $mes_atual;
          }

          #condição para 1 a 2 anos
          else if($dif_ano >= 1)
          {
              // echo '1 a 2 anos';
              $categoria_atual_filho = '1 a 2 anos';
              $mes_atual = $dif_mes;

              if($mes_atual == 0)
              {
                  $mes_atual = 1;
              }
              
          }
      }

      else if($tipo_filho == '0')
      {
          $categoria_atual_filho = 'Gravidez';
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
          $categoria_atual_filho = 'Concepção';
      }

  else:
      $categoria_atual_filho = 'Concepção';
  endif;

  if($semana_atual != '')
  { 
    echo $categoria_atual_filho . ' - Semana ' . $semana_atual;
  }

  else
  {
    if($categoria_atual_filho == 'Concepção')
    {
      echo $categoria_atual_filho; 
    }
    else
    {
      echo $categoria_atual_filho . ' - Mês ' . $mes_atual; 
    }
  }
}

function executa_login_facebook()
{
  $email = $_POST['data'];

  $user = get_user_by('email',$email);

  if ( $user->ID != '' )
  {
      wp_clear_auth_cookie();
      wp_set_current_user ( $user->ID );
      wp_set_auth_cookie  ( $user->ID );

      echo 0;
  }

  else
  {
    echo 2;
  }

  die();
}

function executa_login()
{
  
  global $wpdb;

  $json = stripslashes($_POST['data']);
  $decoded = json_decode($json,true);
  $creds = array();



  foreach ($decoded as $array)
  {
    if($array['name'] == 'email')
    {
      $creds['user_login'] = sanitize_email( $array['value'] );
    }
    
    $creds['user_password'] = $array['value'];
  }

  $creds['remember'] = 'true';

  $user = wp_signon( $creds, false );
  if ( is_wp_error($user) )
  {
    echo $user->get_error_message();
  }
  else
  {
    echo "0";
  }

  die();
}

function register_my_session()
{
  if( !session_id() )
  {
    session_start();
  }
}

add_action('init', 'register_my_session');

function get_user_info()
{
  global $user_info;
  $user_info = get_userdata(get_current_user_id());
}

add_action('init', 'get_user_info');

function restrict_admin() {

  if ( !current_user_can( 'edit_pages' ) && ( !defined( 'DOING_AJAX' ) || !DOING_AJAX ) ) {
    wp_redirect( get_post_type_archive_link('fases') );
  }
}
add_action( 'admin_init', 'restrict_admin', 1 );


function my_redirector(){

  if( is_page( array('Cadastro Esperando') ) )
  {

    if( !is_user_logged_in() )
    {
      wp_redirect(home_url());
      exit;
    }
  }
}

add_action('wp', 'my_redirector', 1);


function get_filho_ativo($user_id)
{
  global $wpdb;
  $results = $wpdb->get_results( 
    $wpdb->prepare("SELECT * FROM {$wpdb->prefix}filhos WHERE user_id = %d AND filho_status = %d", 
      $user_id, 1) 
  );

  return $results;
}

function get_filhos_inativos($user_id)
{
  global $wpdb;
  $results = $wpdb->get_results( 
    $wpdb->prepare("SELECT * FROM {$wpdb->prefix}filhos WHERE user_id = %d AND filho_status = %d", 
      $user_id, 0) 
  );

  return $results;
}

function get_all_filhos($user_id)
{
  global $wpdb;
  $results = $wpdb->get_results( 
    $wpdb->prepare("SELECT * FROM {$wpdb->prefix}filhos WHERE user_id = %d", 
      $user_id) 
  );

  return $results;
}

function getFirstName($str)
{
  $nome_array = explode(' ', $str);

  if(count($nome_array) > 0)
  {
    $nome = array_shift($nome_array);
  }

  else
  {
    $nome = $str;
  }

  return $nome;
}

function getFirstSecondName($str)
{
  $nome_array = explode(' ', $str);

  if(count($nome_array) > 0)
  {
    $nome = array_shift($nome_array) . ' ' . end($nome_array);
  }

  else
  {
    $nome = $str;
  }

  return $nome;
}

/* Begin: Comentarios customizado */
function publicarComentario() {

    global $wpdb;

    $comentario = array();

    //converter de json para array
    foreach (json_decode(stripslashes($_POST['data']),true) as $value) {

        $comentario[$value['name']] = $wpdb->escape(trim($value['value']));
    }

    $wp_usuario_logado = wp_get_current_user();

    if ( $wp_usuario_logado->ID == 0 ) {

        die("-1");
    }

    $comment_approved = 0; /* 0 - não revisado | 1 - aprovado */

    $data = array(
        'comment_post_ID'       => $comentario['post_id'],
        'comment_parent'        => $comentario['comment_parent'],
        'comment_approved'      => $comment_approved,
        'user_id'               => $wp_usuario_logado->ID,
        'comment_author'        => $wp_usuario_logado->display_name,
        'comment_author_email'  => $wp_usuario_logado->user_email,
        'comment_author_url'    => $wp_usuario_logado->user_url,
        'comment_content'       => $comentario['comentario'],
        'comment_date'          => current_time('mysql'),
        'comment_type'          => ''
    );

    $comment_id = wp_insert_comment( $data );

    if ( !is_wp_error($comment_id) ) {

        add_comment_meta($comment_id,'comment_type',$comentario['comment_type']); /* comment_type - 0 [N/A] | 1 [Comentário] | 2 [Depoimento] */
    }

    $comment_date = date("d/m/Y h:i:s", strtotime(current_time( 'mysql' )));

    $retorno  = array(
        'status' => '0',
        'comment_author' => $wp_usuario_logado->display_name,
        'comment_content' => $comentario['comentario'],
        'comment_ID' => $comment_id,
        'comment_parent' => $comentario['comment_parent'],
        'comment_date' => $comment_date,
        'foto' => getFotoUser()

    );

    die(json_encode($retorno));
}

function getComentarios($comment_post_ID = 0, $comment_type = 0, $comment_start = 1, $isPaginacao = false) {

  $user_info = get_userdata(get_current_user_id());
  $sexo_usuario = get_user_meta( $user_info->ID,'user_sexo',true);

  switch ($sexo_usuario) {
      case '1':
       $foto_default = "/img/base-images/menu/avatar-pai.svg";
          break;

      case '0':
          $foto_default = "/img/base-images/menu/avatar-mae.svg";
          break;

      case '3':
          $foto_default = "/img/base-images/menu/avatar-pai.svg";
          break;
      
      default:
          # code...
          break;
  }

  // $foto_default = "/img/interna/default-thumb.jpg";

  global $wpdb;

  $query_comment_parent = "";

  if ( isset($_POST['data']) ) {

      $comment_post_ID = (isset($_POST['data']['comment_post_ID']))?$_POST['data']['comment_post_ID']:0;
      $comment_type = (isset($_POST['data']['comment_type']))?$_POST['data']['comment_type']:0;
      $comment_parent = (isset($_POST['data']['comment_parent']))?$_POST['data']['comment_parent']:0;

      if ( $comment_parent != null ){

        $query_comment_parent = " AND co.comment_parent = ${comment_parent}";
      }
  }

  $paginacao = '';

  if ( $isPaginacao ) {

    $comment_end = 5; /* Limite Exibição */

    if ($comment_start > 0) {

        $comment_start--;
        $comment_start = ($comment_start * $comment_end);
    }

    $paginacao = "limit {$comment_start}, {$comment_end}";
  }

  $query = "";

  $results = $wpdb->get_results(
      $wpdb->prepare("

SELECT
     comment_ID
    ,comment_author
    ,comment_content
    ,comment_parent
    ,comment_approved
    ,sum(dislike) dislike
    ,sum(likes) 'like'
    ,total_comentarios
    ,comment_date
    ,foto
FROM (

      SELECT
         co.comment_ID
        ,co.comment_author
        ,co.comment_content
        ,co.comment_parent
        ,co.comment_approved
        ,IF (li.like_status = 0, 1, 0) 'dislike'
        ,IF (li.like_status = 1, 1, 0) 'likes'
        ,(select count(co_p.comment_ID) from {$wpdb->prefix}comments co_p where co_p.comment_parent = co.comment_ID and co_p.comment_approved IN ('0', '1')) 'total_comentarios'
        ,date_format(co.comment_date, '%%d/%%m/%%Y %%H:%%i:%%s') as 'comment_date'
        ,IF(usm.meta_key = 'foto',usm.meta_value,'{$foto_default}') as 'foto'
     FROM
        {$wpdb->prefix}comments co
        inner join {$wpdb->prefix}commentmeta cm
            on co.comment_ID = cm.comment_id
        left join {$wpdb->prefix}likes li
            on co.comment_ID = li.comment_ID AND co.comment_post_ID = li.comment_post_ID
        inner join {$wpdb->prefix}users us
            on co.user_id = us.ID
        inner join {$wpdb->prefix}usermeta usm
            on co.user_id = usm.user_id
    WHERE
        co.comment_approved IN ('0', '1')
    AND cm.meta_key = 'comment_type'
    AND cm.meta_value = '{$comment_type}'
    AND co.comment_post_ID = {$comment_post_ID}
    {$query_comment_parent}
    GROUP BY
        comment_ID
) likes
    GROUP BY
        comment_ID
    ORDER BY
        comment_date DESC
       {$paginacao}
    ",
    null)
  );

  if ( isset($_POST['data']) ) {

      die(json_encode($results));
  }

  return $results;
}

function getFotoUser() {

    global $wpdb;

    $user_info = get_userdata(get_current_user_id());
    $sexo_usuario = get_user_meta( $user_info->ID,'user_sexo',true);

    switch ($sexo_usuario) {
        case '1':
         $foto_default = "/img/base-images/menu/avatar-pai.svg";
            break;

        case '0':
            $foto_default = "/img/base-images/menu/avatar-mae.svg";
            break;

        case '3':
            $foto_default = "/img/base-images/menu/avatar-pai.svg";
            break;
        
        default:
            # code...
            break;
    }

    // $foto_default = "/img/interna/default-thumb.jpg";

    $wp_usuario_logado = wp_get_current_user();

    $user_id = $wp_usuario_logado->ID;

    $results = $wpdb->get_results(
        $wpdb->prepare("
        SELECT
            IF(usm.meta_key = 'foto',usm.meta_value,'{$foto_default}') as 'foto'
        FROM
           {$wpdb->prefix}users us
            inner join {$wpdb->prefix}usermeta usm
                on us.ID = usm.user_id
        WHERE
            us.ID = %d",
        $user_id)
    );

    return $results[0]->foto;
}
/* End: Comentarios customizado */


/* Begin: Like customizado */
function getLikes($comment_post_ID = 0, $comment_ID = 0) {

    global $wpdb;

    if ( isset($_POST['data']) ) {

        $comment_post_ID = (isset($_POST['data']['comment_post_ID']))?$_POST['data']['comment_post_ID']:0;
        $comment_ID = (isset($_POST['data']['comment_ID']))?$_POST['data']['comment_ID']:0;
    }

    $results = $wpdb->get_results(
      $wpdb->prepare("
        SELECT
            SUM(IF (like_status = 0, 1, 0)) 'dislike',
            SUM(IF (like_status = 1, 1, 0)) 'like'
        FROM
            {$wpdb->prefix}likes
        WHERE
            comment_post_ID = %d
        AND comment_ID = %d", $comment_post_ID, $comment_ID)
    );

    $retorno = array(

      'dislike' => ($results[0]->dislike == null)?0:$results[0]->dislike,
      'like' => ($results[0]->like == null)?0:$results[0]->like,
      'comment_ID' => $comment_ID
    );

    if ( isset($_POST['data']) ) {

        die(json_encode($retorno));
    }

    return $retorno;
}

function setLikes() {

    global $wpdb;

    $wp_usuario_logado = wp_get_current_user();

    if ( $wp_usuario_logado->ID == 0 ) {

        die("-1");
    }

    $like_status = $_POST['data']['like_status'];
    $comment_post_ID = $_POST['data']['comment_post_ID'];
    $comment_ID = $_POST['data']['comment_ID'];

    $user_id = wp_get_current_user()->ID;

    $results = $wpdb->get_results(
      $wpdb->prepare("
        SELECT
            count(user_id) as 'exists'
        FROM
            {$wpdb->prefix}likes
        WHERE
            comment_post_ID = %d
        AND user_id = %d
        AND comment_ID=%d", $comment_post_ID, $user_id, $comment_ID)
    );

    if ( $results[0]->exists > 0 ) {

            $results = $wpdb->get_results(
            $wpdb->prepare("
                UPDATE
                    {$wpdb->prefix}likes
                SET
                    like_status = %d
                WHERE
                    comment_post_ID = %d
                AND user_id = %d AND comment_ID=%d", $like_status, $comment_post_ID, $user_id, $comment_ID)
            );
    }else{

        $results = $wpdb->get_results(
            $wpdb->prepare("
                INSERT INTO {$wpdb->prefix}likes ( like_status, comment_post_ID, user_id, comment_ID )
                VALUES ( %d, %d, %d, %d )", $like_status, $comment_post_ID, $user_id, $comment_ID)
        );
    }


    die(json_encode(getLikes($comment_post_ID, $comment_ID)));
}

/* End: Like customizado */


/* Begin: Load customizado */

add_action('wp_ajax_publicarComentario','publicarComentario');
add_action('wp_ajax_nopriv_publicarComentario', 'publicarComentario');
add_action('wp_ajax_getComentarios','getComentarios');
add_action('wp_ajax_nopriv_getComentarios', 'getComentarios');
add_action('wp_ajax_setLikes','setLikes');
add_action('wp_ajax_nopriv_setLikes', 'setLikes');
add_action('wp_ajax_getLikes','getLikes');
add_action('wp_ajax_nopriv_getLikes', 'getLikes');

/* End: Load customizado */
