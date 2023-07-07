<?php /* Template Name: Perfil */ ?>

<?php
	
	if(!is_user_logged_in())
	{
		wp_safe_redirect( home_url() ); exit; 
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

<section class="foto_user">

	<div class="wrap_foto_user">

		<div class="container_image">

			<?php 
			    $sexo_usuario = get_user_meta( $user_info->ID,'user_sexo',true);
			    $user_cep = get_user_meta( $user_info->ID,'user_cep',true);
			    $user_telefone = get_user_meta( $user_info->ID,'user_telefone',true);
			    $user_nascimento = get_user_meta( $user_info->ID,'user_nascimento',true);
			    $user_aceite_novidades = get_user_meta( $user_info->ID,'user_aceite_novidades',true);
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

		<span class="name">
		    <?php
		        $user_id = $user_info->ID;
		        $nome_full = $user_info->display_name; 
		        $nome_usuario = getFirstSecondName($nome_full);
		        echo $nome_usuario;
		    ?>
		</span>

	</div>

</section>
           
<section class="section_perfil cadastro perfil">
    <article class="perfil padding_top_perfil">

    	<button type="button" class="btn_meus_dados btn_dados"><span class="text">MEUS DADOS</span><span class="icon_seta"></span></button>

	        <div style="display:none;" class="content perfil_content content_pais">            

	            <form id="form_pais" action="" method="post" accept-charset="utf-8">

		            <h2>Nome completo</h2>

	            	<div class="wrap">
	            	    <input type="text" id="nome_bebe" name="user_nome" value="<?php echo $user_info->display_name; ?>" placeholder="Digite o nome">
	            	</div>

	            	<h2>Você é:</h2>

		            <div class="wrap_group">

		            	<div class="wrap">
		            	    <input <?php if($sexo_usuario == '1') echo 'checked'; ?> type="radio" id="pai" name="user_sexo" value="1"><label for="pai"></label>
		            	    <div class="label pai" >Pai</div>
		            	</div>

		            	<hr>

		            	<div class="wrap">
		            	    <input <?php if($sexo_usuario == '0') echo 'checked'; ?> type="radio" id="mae" name="user_sexo" value="0"><label for="mae"></label>
		            	    <div class="label mae" >Mãe</div>
		            	</div>
		            </div>

		            <h2>Email</h2>

	            	<div class="wrap">
	            	    <input type="email" id="nome_bebe" name="user_email" value="<?php echo $user_info->user_email; ?>" placeholder="Digite o email">
	            	</div>

	            	<h2>Data de nascimento</h2>

	            	<div class="wrap">
	            	    <input class="calendario" type="text" id="nome_bebe" name="user_nascimento" value="<?php if($user_info->user_nascimento)echo convert_data_front($user_info->user_nascimento); ?>" placeholder="Digite a data">
	            	</div>

	            	<h2>Telefone</h2>

	            	<div class="wrap">
	            	    <input type="text" id="nome_bebe" name="user_telefone" value="<?php echo $user_info->user_telefone; ?>" placeholder="Digite o telefone">
	            	</div>

	            	<h2>CEP</h2>

	            	<div class="wrap">
	            	    <input type="text" id="nome_bebe" name="user_cep" value="<?php echo $user_info->user_cep; ?>" placeholder="Digite o CEP">
	            	</div>

	            	<div class="wrap_novidades">
            			<span>Aceito receber novidades</span><input  <?php if($user_aceite_novidades == '0') echo 'checked'; ?> type="checkbox" id="user_novidades" name="user_novidades" value="0"><label for="user_novidades"></label>
            		</div>

	            	<div class="wrap">
	            		<input class="btn_perfil" id="salvar_pai" type="submit" value="Salvar">
	            	</div> 
		        </form>
	        </div>
	    

    </article>
</section>

<section class="section_perfil cadastro perfil ">
    <article class="perfil">

    	<button type="button" class="btn_meus_dados btn_filhos"><span class="text">MEUS FILHOS</span><span class="icon_seta"></span></button>

	        <div style="display:none;" class="content perfil_content content_filhos">            

	            <form class="form_filhos_out" id="form_filhos" action="" method="post" accept-charset="utf-8">

	            	<div class="anchor"></div>

	            	<?php
	            		$i = 0;
	            		$filhos = get_all_filhos($user_id);
	            		foreach ($filhos as $filho):
	            		$i++;
	            	?>


		            <div filho-id="<?php echo $filho->filho_id; ?>" class="single_filho single_filho_update update">

		            	<button class="excluir_filho" type="button"><span>-</span></button>

    		            <h2>Nome do filho</h2>

    	            	<div class="wrap">
    	            	    <input type="text" id="nome_bebe" name="filho_nome" value="<?php echo $filho->filho_nome; ?>" placeholder="Digite o nome">
    	            	</div>

    	            	<h2>Sexo</h2>

    	            	<div class="wrap filho_sexo_wrap">

    	            		<div class="wrap_filho_sexo_in">
    	            			<input <?php if($filho->filho_sexo == '0') echo 'checked'; ?> type="radio" id="filho_sexo_feminino<?php echo 'u'.$i; ?>" name="filho_sexo<?php echo 'u'.$i; ?>" value="0"><label for="filho_sexo_feminino<?php echo 'u'.$i; ?>"></label><span class="filho_sexo_texto">Feminino</span>
    	            		</div>
    	            		<div class="spacer_column"></div>
    	            		<div class="wrap_filho_sexo_in">
    	            			<span class="filho_sexo_texto">Masculino</span><input <?php if($filho->filho_sexo == '1') echo 'checked'; ?> type="radio" id="filho_sexo_masculino<?php echo 'u'.$i; ?>" name="filho_sexo<?php echo 'u'.$i; ?>" value="1"><label for="filho_sexo_masculino<?php echo 'u'.$i; ?>"></label>
    	            		</div>
    	            	    
    	            	    
    	            	</div>

    	            	<h2>Tipo</h2>

    	            	<div class="wrap filho_sexo_wrap">

    	            		<div class="wrap_filho_sexo_in">
    	            			<input <?php if($filho->filho_tipo == '1') echo 'checked'; ?> type="radio" id="filho_tipo_nascido<?php echo 'u'.$i; ?>" name="filho_tipo<?php echo 'u'.$i; ?>" value="1"><label for="filho_tipo_nascido<?php echo 'u'.$i; ?>"></label><span class="filho_sexo_texto">Nascido</span>
    	            		</div>
    	            		<div class="spacer_column"></div>
    	            		<div class="wrap_filho_sexo_in">
    	            			<span class="filho_sexo_texto">Gravidez</span><input <?php if($filho->filho_tipo == '0') echo 'checked'; ?> type="radio" id="filho_tipo_gravidez<?php echo 'u'.$i; ?>" name="filho_tipo<?php echo 'u'.$i; ?>" value="0"><label for="filho_tipo_gravidez<?php echo 'u'.$i; ?>"></label>
    	            		</div> 	            	    
    	            	 
    	            	</div>

    	            	<h2>Nascimento ou previsão</h2>

    	            	<div class="wrap">
    	            	   <input class="calendario" type="text" id="previsao" name="filho_data_nascimento" value="<?php if($filho->filho_data_nascimento)echo convert_data_front($filho->filho_data_nascimento); ?>" placeholder="Insira a data"><label for="previsao"></label>
    	            	</div>

		            </div>

		        	<?php endforeach; ?>

		            <div class="wrap">
		            	<button class="adicionar"><span>+</span>ADICIONAR</button>
		            </div>

	            	<div class="wrap">
	            		<input class="btn_perfil" id="salvar_filho" type="submit" value="Salvar">
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