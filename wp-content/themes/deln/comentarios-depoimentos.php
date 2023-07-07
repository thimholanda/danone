<div class="content">
    <!--# Principal ref. Post ID #-->
    <input type="hidden" name="comment_post_ID" value="<?php echo $comment_post_ID = get_post()->ID; ?>">

    <h6>DEPOIMENTOS</h6>
    <!-- Este botão abrirá uma view modal com o form para publicar o depoimento -->
    <button onclick="reset_modal_depoimento();exibeModal('#modal_depoimento')" class="compartilhar_comentario" type="button">Compartilhar o seu</button>
    <hr>

    <div class="depoimento_single_temp">
        <div class="depoimento_single" style="display:none;">

            <div class="comentarios_nivel0">

                <div class="info_pais">
                    <img class="foto" data-template_directotry_uri= "<?php echo get_template_directory_uri(); ?>" src="" title="">
                    <span class="nome"></span>
                    <span class="data_publicado"></span>
                </div>
                <p class="comentario">{comentario}</p>
                <span class="nao_revisado" style="display:none;">Não revisado</span>
                <div class="buttons">
                    <div class="wrap_out">
                        <div class="wrap">
                            <button class="like" data-like_status="1" data-comment_post_ID="<?php echo $comment_post_ID;?>" data-comment_id="0">
                                <span class="text">0</span>
                            </button>
                            <button class="dislike" data-like_status="0" data-comment_post_ID="<?php echo $comment_post_ID;?>" data-comment_id="0">
                                <span class="text">0</span>
                            </button>
                        </div>
                    </div>

                    <div class="wrap_out">
                        <button class="comentarios btn_comentarios_level1" id="btn_comentarios_level1" data-comment_post_ID="<?php echo $comment_post_ID;?>" data-comment_id="0"><span class="text">COMENTÁRIOS</span><span class="number">0</span></button>
                    </div>
                </div>

                <div class="comentarios_nivel1"><!-- START DOS COMENTÁRIO DE NIVEL 1 -->

                    <!-- LOOP DE COMENTÁRIOS NÍVEL 1 -->

                    <div class="comentario_single" style="display:none;"><!-- START COMENTÁRIO -->
                        <div class="info_pais_level1">
                            <img class="foto level1" data-template_directotry_uri= "<?php echo get_template_directory_uri(); ?>" src="" title="">
                            <span class="nome"></span>
                            <span class="data_publicado"></span>
                        </div>
                        <p class="comentario plevel1"></p>
                        <span class="nao_revisado" style="display:none;">Não revisado</span>
                        <div class="buttons buttons_level1">

                            <div class="wrap_out">
                                <div class="wrap">
                                    <button class="like" data-like_status="1" data-comment_post_ID="<?php echo $comment_post_ID;?>" data-comment_id="0">
                                        <span class="text">0</span>
                                    </button>
                                    <button class="dislike" data-like_status="0" data-comment_post_ID="<?php echo $comment_post_ID;?>" data-comment_id="0">
                                        <span class="text">0</span>
                                    </button>
                                </div>
                            </div>

                            <div class="wrap_out">
                                <button class="comentarios btn_comentarios_level2" id="btn_comentarios_level2" data-comment_post_ID="<?php echo $comment_post_ID;?>" data-comment_id="0"><span class="text">COMENTÁRIOS</span><span class="number">0</span></button>
                            </div>
                        </div><!-- END COMENTÁRIO -->

                        <hr id="second">

                        <div class="comentarios_nivel2"><!-- START DOS COMENTÁRIO DE NIVEL 2 -->

                            <!-- LOOP DE COMENTÁRIOS NÍVEl 2 -->

                            <div class="comentario_single" style="display:none;"><!-- START COMENTÁRIO -->
                                <div class="info_pais_level1">
                                    <img class="foto level1" data-template_directotry_uri= "<?php echo get_template_directory_uri(); ?>" src="" title="">
                                    <span class="nome"></span>
                                    <span class="data_publicado"></span>
                                </div>
                                <p class="comentario plevel1"></p>
                                <span class="nao_revisado" style="display:none;">Não revisado</span>
                                <div class="buttons buttons_level1">

                                    <div class="wrap_out">
                                        <div class="wrap">
                                            <button class="like" data-like_status="1" data-comment_post_ID="<?php echo $comment_post_ID;?>" data-comment_id="0">
                                                <span class="text">0</span>
                                            </button>
                                            <button class="dislike" data-like_status="0" data-comment_post_ID="<?php echo $comment_post_ID;?>" data-comment_id="0">
                                                <span class="text">0</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <hr id="third">

                            </div><!-- END COMENTÁRIO -->

                            <div class="nao_existe_comentario"></div>

                        </div><!-- END LOOP DOS COMENTÁRIO DE NIVEL 2 -->

                        <!-- LOADER -->
                        <div class="loadercomentarios_nivel1 loader loader40" style="display:none;"><span class="container_loader"></span></div>
                        <div class="nao_existe_comentario"></div><br/><br/>

                        <form id="comentario_nivel_2" data-nivel="2" data-comment_parent="0" action="" method="POST" accept-charset="utf-8">
                            <input type="hidden" name="comment_parent" value="0">
                            <input type="hidden" name="comment_type" value="3">
                            <input type="hidden" name="post_id" value="<?php echo $comment_post_ID; ?>">
                            <textarea class="focus_expand" name="comentario" placeholder="Comentar"></textarea>
                            <input type="submit" name="comentar" value="PUBLICAR">
                        </form>

                    </div>

                    <!-- LOADER -->
                    <div class="loader loader40" style="display:none;"><span class="container_loader"></span></div>
                    <div class="nao_existe_comentario"></div><br/><br/>
                </div><!-- END LOOP DOS COMENTÁRIO DE NIVEL 1 -->

                <!-- LOADER -->
                <div class="loadercomentarios_nivel0 loader loader40" style="display:none;"><span class="container_loader"></span></div>
                <div class="nao_existe_comentario"></div><br/><br/>

                <form id="comentario_nivel_1" data-nivel="1" data-comment_parent="0" action="" method="POST" accept-charset="utf-8">
                    <input type="hidden" name="comment_parent" value="0">
                    <input type="hidden" name="comment_type" value="3">
                    <input type="hidden" name="post_id" value="<?php echo $comment_post_ID; ?>">
                    <textarea class="focus_expand" name="comentario" placeholder="Comentar"></textarea>
                    <input type="submit" name="comentar" value="PUBLICAR">
                </form>
            </div>
        </div>
    </div>
    <!-- LOADER -->
    <div class="depoimentos loader loader40" style="display:none;"><span class="container_loader"></span></div>
    <div class="nao_existe_comentario"></div><br/><br/>
    <div class="depoimentos_slider"></div>
</div>
<div class="modal" id="modal_depoimento"><!-- MODAL INPUT DEPOIMENTOS -->

    <button class="fechar">X</button>

    <!-- LOADER -->
    <div style="display:none;" class="loader loader40"><span class="container_loader"></span></div>

    <span class="title msg-default">Compartilhe seu depoimento:</span>
    <span class="title msg-0-0" style="display:none;">Atenção</span>
    <span class="title msg-0-1" style="display:none;">Atenção</span>
    <span class="title msg-1-1" style="display:none;">Obrigado</span>
    <span class="title msg-1-2" style="display:none;">Obrigado</span>
    <span class="title msg-1-3" style="display:none;">Atenção</span>

    <form id="depoimento" action="" method="POST" accept-charset="utf-8">
        <input type="hidden" name="comment_parent" value="0">
        <input type="hidden" name="comment_type" value="2">
        <input type="hidden" name="post_id" value="<?php echo $comment_post_ID; ?>">
        <textarea class="placeholder_custom" name="comentario" placeholder="Comentar"></textarea>
        <input type="submit" name="comentar" value="Publicar">
    </form>

    <p class="retorno">
        <div class="msg msg-0-0" style="display:none;">Necessário logar primeiro antes de comentar!</div>
        <div class="msg msg-0-1" style="display:none;">Necessário logar primeiro antes curtir ou descurtir!</div>
        <div class="msg msg-1-1" style="display:none;">O seu comentário é muito importante para podermos melhorar cada vez mais nossas matérias. Ele será revisado.</div>
        <div class="msg msg-1-2" style="display:none;">O seu depoimento é muito importante para nós. Ele será revisado.</div>
        <div class="msg msg-1-3" style="display:none;">Antes de publicar insira seu comentário.</div>
    </p>

    <button class="ok">OK</button>

</div><!-- FIM MODAL INPUT DEPOIMENTOS -->

<div class="pano_full_z101"></div>
