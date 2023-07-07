<?php /* Template Name: Fale */ ?>

<?php get_header('header.php'); ?>
<?php if(is_user_logged_in()) { include_once('menu-login.php'); } else{ include_once('menu-logout.php'); } ?>
<?php include_once('busca.php') ?>

<style type="text/css" media="screen">
    footer
    {
        margin-top: 0px;
    }
</style>

          
<section class="section_perfil cadastro perfil fale_conosco">
    <article class="perfil padding_top_perfil">

    <form id="form_pais" class="fale_conosco_form" action="" method="post" accept-charset="utf-8">

        <h2>*Nome completo</h2>

    	<div class="wrap">
    	    <input type="text" id="nome_bebe" name="user_nome" value="" placeholder="Digite o nome">
    	</div>

        <h2>*Email</h2>

    	<div class="wrap">
    	    <input type="email" id="nome_bebe" name="user_email" value="" placeholder="Digite o email">
    	</div>

        <h2>*Telefone</h2>

        <div class="wrap">
            <input type="text" id="nome_bebe" name="user_telefone" value="" placeholder="Digite o telefone">
        </div>

    	<h2>Você já utilizou algum produto da Danone Baby?</h2>

        <div class="wrap_group">

        	<div class="wrap check2">
        	    <input class="btn_produtos_fale" type="radio" id="pai" name="utilizou_produto" value="Sim"><label for="pai"></label>
        	    <div class="label" >Sim</div>
        	</div>

        	<hr>

        	<div class="wrap check2">
        	    <input class="btn_produtos_fale" type="radio" id="mae" name="utilizou_produto" value="Não"><label for="mae"></label>
        	    <div class="label" >Não</div>
        	</div>
        </div>

        <div style="display:none;" class="wrap_produtos">

            <div class="wrap_group produtos">

                <div class="wrap">
                    <input type="checkbox" id="produto_1" name="produtos[]" value="Aptamil"><label for="produto_1"></label>
                    <div class="label" >Aptamil</div>
                </div>

                <hr>

                <div class="wrap">
                    <input type="checkbox" id="produto_2" name="produtos[]" value="Milnutri"><label for="produto_2"></label>
                    <div class="label" >Milnutri</div>
                </div>

                <hr>

                <div class="wrap">
                    <input type="checkbox" id="produto_3" name="produtos[]" value="Milupa"><label for="produto_3"></label>
                    <div class="label" >Milupa</div>
                </div>

                <hr>

                <div class="wrap">
                    <input type="checkbox" id="produto_4" name="produtos[]" value="Pregomin"><label for="produto_4"></label>
                    <div class="label" >Pregomin</div>
                </div>
            </div>

        </div>

        <h2>Assunto</h2>

        <div class="wrap_group paddingnone">

        	<div class="wrap">
        	    <select name="assunto">
                    <option value="Elogio">Elogio</option>
                    <option value="Informação">Informação</option>
                    <option value="Sugestão">Sugestão</option>
                    <option value="Solicitação">Solicitação</option>
                    <option value="Reclamação">Reclamação</option>
                </select>
        	</div>

        </div>

    	<h2>*Mensagem</h2>

    	<textarea name="mensagem"></textarea>

        <div class="wrap_checkbox marginbigger">
            <input type="checkbox" id="termos2" name="aceite_novidades" value="0"><label for="termos2"></label>
            <div class="termos" for="termos">Quero receber novidades por e-mail.</div>
        </div>

        <div class="wrap_checkbox">
            <input type="checkbox" id="termos" name="aceite_termos" value="0"><label for="termos"></label>
            <div class="termos linebigger"> Li e concordo com a política de Privacidade*</div>
        </div>
 
    	<div class="wrap">
    		<input class="btn_perfil" id="salvar_pai" type="submit" value="Enviar">
    	</div> 
    </form>	    

    </article>
</section>

<section class="detalhes_fale">

    <article>
        <div class="content">

            <div class="wrap_detalhes">
                <p>
                    Entre em contato com a gente através
                    dos nossos Canais de Atendimento ao Consumidor, por telefone: 0800-7017561
                    (de segunda à sexta-feira das 8h às 17h30)
                    ou por e-mail danonebaby@danone.com.
                </p>
            </div>

            <div class="wrap_detalhes">
                
                <p>
                   Você, profissional de impresa, pode receber informações sobre a Danone Early Nutrition por meio da nossa assessoria de comunicação. 
                </p>

                <p>
                    <strong>Responsável por marcas</strong><br/>
                    Mayara Federzoni | mayara.federzoni@mslgroup.com<br/> 
                    Tel (+55-11) 3169-9337
                </p>

                <p>
                    <strong>Responsável por assuntos corporativos</strong><br/>
                    Felipe Correia | felipe.correia@mslgroup.com<br/> 
                    55 11 3169-9336
                </p>
            
            </div>

        </div>
    </article>

</section>

</section>

<div class="modal" id="modal_depoimento">

    <span class="title">Enviando as informações. Por favor, aguarde...</span>
    <!-- LOADER -->
    <div style="display:none;" class="loader loader40"><span class="container_loader"></span></div>
    <p class="retorno"></p>

</div>

<div class="pano_full_z101_no_touch" style="display:none;"></div>

<script type="text/javascript">
    var site_url = "<?php echo get_site_url(); ?>";
</script>        
        

<?php get_footer('footer.php'); ?>