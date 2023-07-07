<div class="content">
    <!--# Principal ref. Post ID #-->
    <input type="hidden" name="comment_post_ID" value="<?php echo $comment_post_ID = get_post()->ID; ?>">
    <div class="wrap_publicacao">
        <div class="botoes">
            <button class="like" data-like_status="1" data-comment_post_ID="<?php echo $comment_post_ID;?>" data-comment_id="0">
                <!-- LOADER -->
                <div class="loader loader20 small"><span class="container_loader"></span></div>
                <span class="icon"></span><span class="text">0</span>
            </button>
            <button class="dislike" data-like_status="0" data-comment_post_ID="<?php echo $comment_post_ID;?>" data-comment_id="0">
                <!-- LOADER -->
                <div class="loader loader20 small"><span class="container_loader"></span></div>
                <span class="icon"></span><span class="text">0</span>
            </button>
            <button class="comment" disabled><span class="icon"></span><span class="mask"></span>
            </button>
            <button class="share"><span class="icon"></span></button>
        </div>
        <form id="comentario" action="" method="POST" accept-charset="utf-8">
            <div class="test"></div>
            <input type="hidden" name="comment_parent" value="0">
            <input type="hidden" name="comment_type" value="1">
            <input type="hidden" name="post_id" value="<?php echo $comment_post_ID; ?>">
            <div class="wrap_text_area">
                <textarea class="focus_expand" name="comentario" placeholder="Comentar"></textarea>
                <input type="submit" name="comentar" value="PUBLICAR">
            </div>
        </form>
    </div>
    <div class="wrap_comentarios">
        <span class="title"><span class="text">COMENTÁRIOS</span><span class="trace"></span></span>
        <!-- LOADER -->
        <div class="loader loader40"><span class="container_loader"></span></div>
        <div class="nao_existe_comentario"></div>
        <div class="grupoComentarios">
            <div class="single_comentario" style="display:none;">
                <img class="foto" data-template_directotry_uri= "<?php echo get_template_directory_uri(); ?>" src="" title="">
                <div class="wrap_content">
                    <span class="nome"></span>
                    <span class="data_publicado"></span>
                    <p class="comentario"></p>
                    <span class="nao_revisado" style="display:none">Não revisado</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="modal_comentario"><!-- MODAL INPUT COMENTARIOS -->

    <button class="fechar">X</button>

    <span class="title msg-1-0" style="display:none;">Obrigado</span>
    <span class="title msg-1-3" style="display:none;">Atenção</span>

    <p class="retorno">
        <div class="msg msg-0-0" style="display:none;">Necessário logar primeiro antes de comentar!</div>
        <div class="msg msg-0-1" style="display:none;">Necessário logar primeiro antes curtir ou descurtir!</div>
        <div class="msg msg-1-0" style="display:none;">O seu comentário é muito importante para podermos melhorar cada vez mais nossas matérias. Ele será revisado.</div>
        <div class="msg msg-1-3" style="display:none;">Antes de publicar insira seu comentário.</div>
    </p>

    <button class="ok">OK</button>
</div><!-- FIM MODAL INPUT COMENTARIOS -->

<div class="pano_full_z101"></div>
