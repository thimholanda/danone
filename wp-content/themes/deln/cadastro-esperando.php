<?php /* Template Name: Cadastro complementar */ ?>

<?php
	
	# Validação para o usuário acessar esta página

	# Verifica o valor da sessão

	if(isset($_SESSION['user_token_cadastro']))
	{	
		$user_meta = get_user_meta( $user_info->ID);
		$token = $_SESSION['user_token_cadastro'];
		unset($_SESSION['user_token_cadastro']);

		$token_banco = array_shift($user_meta['user_token_cadastro']);

		if($token != $token_banco)
		{
			wp_redirect(home_url() );
		}
	}

	else
	{
		wp_redirect(home_url() );
	}
?>

<?php get_header('header.php'); ?>
<?php if(is_user_logged_in()) { include_once('menu-login.php'); } else{ include_once('menu-logout.php'); } ?>
<?php include_once('busca.php') ?>

<style type="text/css" media="screen">
    footer
    {
        margin-top: 0px;
    }
</style>
           
<section class="cadastro">
    <article>
        <div class="content">
        	<a class="pular pular1" href="#" title="PULAR">PULAR</a>

            <h2>Você é?</h2>

            <form id="form_pais" action="" method="post" accept-charset="utf-8">

	            <div class="wrap_group">

	            	<div class="wrap">
	            	    <input type="radio" id="pai" name="user_sexo" value="1"><label for="pai"></label>
	            	    <div class="label pai" >Pai</div>
	            	</div>

	            	<hr>

	            	<div class="wrap">
	            	    <input type="radio" id="mae" name="user_sexo" value="0"><label for="mae"></label>
	            	    <div class="label mae" >Mãe</div>
	            	</div>
	            </div>

	            <hr class="hrmargin40">            

	            <h2 class="nomargin">Em que momento você está?</h2>

	            <div class="wrap_group">

		            <div class="wrap">
		                <input type="radio" id="momento1" name="filho_tipo" value="1"><label for="momento1"></label>
		                <div class="label" >Já está com seu bebê?</div>
		            </div>

		            <hr>

		            <div class="wrap">
		                <input type="radio" id="momento2" name="filho_tipo" value="0"><label for="momento2"></label>
		                <div class="label" >Está esperando?</div>
		            </div>

		            <hr>

		            <div class="wrap">
		                <input type="radio" id="momento3" name="filho_tipo" value=""><label for="momento3"></label>
		                <div class="label" >Querendo ter?</div>
		            </div>      
		        </div>
		        <span class="spacer_btn"></span>
		        <div class="wrap">
		        	<div class="parabens" style="display:none;"><span>Parabéns!</span></div>
		        </div>      

            </form>
        </div>
    </article>
</section>

<section id="passo2" class="cadastro nomarginmenu">
    <article>
        <div class="content">
        	<a class="pular pular2" href="#" title="PULAR">PULAR</a>

            <h2 class="data_filho data_filho_txt">Qual é a previsão de nascimento?</h2>

			<form id="form_filhos" action="" method="post" accept-charset="utf-8">            

            	<div class="wrap data_filho">
            	    <input class="calendario" type="text" id="previsao" name="filho_data_nascimento" value="" placeholder="Insira a data"><label for="previsao"></label>
            	</div>

            	<h2 class="margin25">Já escolheu o nome?</h2>

            	<div class="wrap">
            	    <input type="text" id="nome_bebe" name="filho_nome" value="" placeholder="Digite o nome">
            	</div>            

            	<hr class="hrmargin40">

	            <h2 class="nomargin">Qual é o sexo?</h2>

	            <div class="wrap_group">

	            	<div class="wrap">
	            	    <input type="radio" id="menino" name="filho_sexo" value="1"><label for="menino"></label>
	            	    <div class="label menino" >Menino</div>
	            	</div>

	            	<hr>

	            	<div class="wrap">
	            	    <input type="radio" id="menina" name="filho_sexo" value="0"><label for="menina"></label>
	            	    <div class="label menina" >Menina</div>
	            	</div>

	            	<hr>

	            	<div class="wrap">
	            	    <input type="radio" id="naosei" name="filho_sexo" value=""><label for="naosei"></label>
	            	    <div class="label naosei" >Ainda não sei</div>
	            	</div>
	            </div>

		         <div class="wrap">
		         	<input id="vamos_comecar" type="submit" name="btn" value="Vamos começar">
		         </div>

            </form>
        </div>
    </article>
</section>

<div class="modal" id="modal_depoimento">

    <span class="title">Salvando as informações. Por favor, aguarde...</span>
    <!-- LOADER -->
    <div style="display:none;" class="loader loader40"><span class="container_loader"></span></div>
    <p class="retorno"></p>

</div>

<div class="pano_full_z101_no_touch" style="display:none;"></div>

<script type="text/javascript">
    var site_url = "<?php echo get_site_url(); ?>";
</script>        
        

<?php get_footer('footer.php'); ?>