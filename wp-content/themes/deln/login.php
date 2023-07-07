<?php /* Template Name: Login */ ?>

<?php


$creds = array();

?>

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
            <!-- <h2>Como você prefere entrar?</h2>
            <div class="wrap">
                <a class="facebook_big" href="#" title="FACEBOOK"></a>

                <a id="googleSignIn" class="google_big" href="#" title="GOOGLE"></a>
            </div>             -->
            <h2 style="margin: 30px 0;">Preencha os dados abaixo:</h2>
            <form id="formulario_cadastro" action="" method="POST" accept-charset="utf-8">
                <input type="email" name="email" value="" placeholder="Insira seu email">
                <div class="wrap">
                    <input type="password" name="senha" value="" placeholder="Senha">
                </div>
                <div class="wrap_checkbox">
                    <div class="termos">Esqueceu sua senha? Clique <a href="#" title="termos">aqui</a></div>
                </div>
                <div class="wrap"><input id="btn_entrar" type="submit" name="btn" value="ENTRAR"></div>
            </form>
        </div>
    </article>
</section>

<div class="modal" id="modal_depoimento">

    <span class="title">Realizando seu login. Por favor, aguarde...</span>
    <!-- LOADER -->
    <div style="display:none;" class="loader loader40"><span class="container_loader"></span></div>
    <p class="retorno"></p>

</div>

<div class="pano_full_z101_no_touch" style="display:none;"></div>

<script type="text/javascript">
    var site_url = "<?php echo get_site_url(); ?>";
</script>

<?php get_footer('footer.php'); ?>
