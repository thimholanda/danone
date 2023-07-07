<?php /* Template Name: Cadastro */ ?>

<?php get_header('header.php'); ?>
<?php if (is_user_logged_in()) {
    include_once('menu-login.php');
} else {
    include_once('menu-logout.php');
} ?>
<?php include_once('busca.php') ?>

<style type="text/css" media="screen">
    footer {
        margin-top: 0px;
    }
</style>

<section class="cadastro">
    <article>
        <div class="content">
            <!-- <h2>Como você prefere se cadastrar?</h2>
            <div class="wrap">
                <a class="facebook_big" href="#" title="FACEBOOK"></a>

                <a id="googleSignIn" class="google_big" href="#" title="GOOGLE"></a>
            </div>             -->
            <h2 style="margin: 30px 0;">Preencha os dados abaixo:</h2>
            <form id="formulario_cadastro" action="" method="post" accept-charset="utf-8">
                <input type="text" name="nome" value="" placeholder="Insira seu nome completo">
                <input type="email" name="email" value="" placeholder="Insira seu email">
                <div class="wrap">
                    <input id="password" type="password" name="senha" value="" placeholder="Senha">

                </div>
                <div class="wrap">
                    <input type="password" name="confirmacao_senha" value="" placeholder="Confirmação de senha">
                    <!-- <span class="icon_check"></span> -->
                </div>
                <div class="wrap_checkbox">
                    <input type="checkbox" id="termos" name="aceite_termos" value="0"><label for="termos"></label>
                    <div class="termos">Concordo com os <a href="<?php echo get_page_link(56); ?>" title="termos">termos</a></div>
                </div>
                <div class="wrap_checkbox">
                    <input type="checkbox" id="termos2" name="aceite_novidades" value="0"><label for="termos2"></label>
                    <div class="termos" for="termos">Aceito receber novidades.</div>
                </div>
                <div class="wrap"><input id="btn_cadastrar" type="submit" name="btn" value="CADASTRAR"></div>
            </form>
        </div>
    </article>
</section>

<div class="modal" id="modal_depoimento">

    <span class="title">Realizando seu cadastro. Por favor, aguarde...</span>
    <!-- LOADER -->
    <div style="display:none;" class="loader loader40"><span class="container_loader"></span></div>
    <p class="retorno"></p>

</div>

<div class="pano_full_z101_no_touch" style="display:none;"></div>

<script type="text/javascript">
    var site_url = "<?php echo get_site_url(); ?>";
</script>

<?php get_footer('footer.php'); ?>
