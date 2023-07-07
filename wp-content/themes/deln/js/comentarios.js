var $j = jQuery.noConflict();

$j(document).ready(function() {

    var comentario = new Comentarios();
    var comment_post_ID = 0;

    if ($j("section#comentario input[name=comment_post_ID]").length > 0) {

        comment_post_ID = $j("section#comentario input[name=comment_post_ID]").val();
        comentario.setTypeComment(comentario.getTypes().COMENTARIO);

    } else if ($j("section#depoimento input[name=comment_post_ID]").length > 0) {

        comment_post_ID = $j("section#depoimento input[name=comment_post_ID]").val();
        comentario.setTypeComment(comentario.getTypes().DEPOIMENTO);
    }

    if (comment_post_ID != null && comment_post_ID > 0) {

        comentario.getComentarios(comment_post_ID,
            function callbackSucesso() {

            },
            function callbackError(response) {
                console.log(response);
            });
    }
});

function load_plugin(elementID) {

    $j('.focus_expand').off().focusin(function(event) {

        $j(this).animate({ height: 150 }, 500)

    }).focusout(function(event) {
        $j(this).animate({ height: 40 }, 500);
    });

    load_like();
}

function Comentarios() {

    var msg_empty_comentario = "Não há comentario no momento.";
    var msg_empty_depoimento = "Não há depoimento no momento.";

    var comment_type = 0;

    var type = { COMENTARIO: 1, DEPOIMENTO: 2, DEPOIMENTO_COMENTARIO: 3 };

    this.data = new Array();

    this.getComentarios = function(comment_post_ID, callbackSucesso, callbackError) {

        $j.ajax({
            url: config.url_ajax,
            type: 'POST',
            data: {
                'action': 'getComentarios',
                'data': {
                    'comment_post_ID': comment_post_ID,
                    'comment_type': comment_type
                }
            },
            beforeSend: function(xhr) {

                $j(".nao_existe_comentario").html("");

                if (comment_type == type.COMENTARIO) {

                    $j(".wrap_comentarios .loader.loader40").show();

                } else if (comment_type == type.DEPOIMENTO) {

                    $j(".depoimentos .loader.loader40").show();
                }
            },
            success: function(response) {

                var response = eval('(' + response + ')');

                if (comment_type == type.COMENTARIO) {

                    for (var icomm = 0; icomm < response.length; icomm++) {

                        var comentario = response[icomm];
                        var single_comentario = $j(".grupoComentarios .single_comentario").first().clone();
                        single_comentario.find(".nome").html(comentario.comment_author);
                        single_comentario.find("span.data_publicado").html(comentario.comment_date);
                        var data_template_directotry_uri = single_comentario.find("img.foto").attr("data-template_directotry_uri");
                        single_comentario.find("img.foto").attr("src", data_template_directotry_uri + comentario.foto);
                        single_comentario.find(".comentario").html(comentario.comment_content);
                        if (comentario.comment_approved == "0") { single_comentario.find(".nao_revisado").show(); }
                        single_comentario.show();
                        single_comentario.appendTo(".grupoComentarios");
                    }

                    if (response.length == 0)
                        $j(".nao_existe_comentario").html(msg_empty_comentario);

                    $j(".wrap_comentarios .loader.loader40").hide();

                } else if (comment_type == type.DEPOIMENTO) {

                    for (var icomm = 0; icomm < response.length; icomm++) {

                        /* Inserir no começo da lista entre os depoimentos */
                        var depoimento = response[icomm];
                        var single_depoimento = $j(".depoimento_single_temp .depoimento_single").first().clone();

                        /* Comentarios Nivel 0 */
                        single_depoimento.find(".comentarios_nivel0 .nome").html(depoimento.comment_author);
                        single_depoimento.find(".comentarios_nivel0 span.data_publicado").html(depoimento.comment_date);
                        var data_template_directotry_uri = single_depoimento.find("img.foto").attr("data-template_directotry_uri");
                        single_depoimento.find(".comentarios_nivel0 img.foto").attr("src", data_template_directotry_uri + depoimento.foto);
                        single_depoimento.find(".comentarios_nivel0 p.comentario").html(depoimento.comment_content);
                        if (depoimento.comment_approved == "0") { single_depoimento.find(".comentarios_nivel0 .nao_revisado").css("display", "block"); }
                        single_depoimento.find(".comentarios_nivel0 .buttons .like, .buttons .dislike, button.comentarios.btn_comentarios_level1").attr("data-comment_id", depoimento.comment_ID);
                        single_depoimento.find(".comentarios_nivel0 button[data-like_status='1'][data-comment_id='" + depoimento.comment_ID + "']").find(".text").html(depoimento.like);
                        single_depoimento.find(".comentarios_nivel0 button[data-like_status='0'][data-comment_id='" + depoimento.comment_ID + "']").find(".text").html(depoimento.dislike);
                        single_depoimento.find(".comentarios_nivel0 input[name=comment_parent]").val(depoimento.comment_ID);

                        single_depoimento.find(".comentarios_nivel0 form#comentario_nivel_1").attr("data-comment_parent", depoimento.comment_ID).attr("id", "comentario_nivel_1_" + depoimento.comment_ID);
                        single_depoimento.find(".comentarios_nivel0 #btn_comentarios_level1").attr("id", "btn_comentarios_level1_" + depoimento.comment_ID);
                        single_depoimento.find(".comentarios_nivel0 #btn_comentarios_level1_" + depoimento.comment_ID + " .number").html(depoimento.total_comentarios);

                        /* Botão Ref. Comentarios Nivel 1 */
                        single_depoimento.find(".comentarios_nivel1").attr("id", "comentarios_nivel1_" + depoimento.comment_ID);
                        single_depoimento.find("button.btn_comentarios_level1").attr("id", "comentarios_level1_" + depoimento.comment_ID);

                        single_depoimento.show();

                        $j(".depoimentos_slider").slick('slickAdd', single_depoimento);
                        $j(".depoimentos_slider .slick-dots li button").html("");

                        load_comentario_nivel(1, depoimento.comment_ID);
                    }

                    if (response.length == 0)
                        $j(".nao_existe_comentario").html(msg_empty_depoimento);

                    $j(".depoimentos .loader.loader40").hide();
                }

                callbackSucesso();
            },
            error: function(response) {

                callbackError(response);
            },
            complete: function(response) {

                load_plugin();
            }
        });
    };

    this.setComentario = function(callbackSucesso, callbackError) {

        $j.ajax({
            url: config.url_ajax,
            type: 'POST',
            data: {
                'action': 'publicarComentario',
                'data': JSON.stringify(this.data)
            },
            beforeSend: function(xhr) {

                $j(".nao_existe_comentario").html("");

                if (comment_type == type.COMENTARIO) {

                    $j(".wrap_comentarios .loader.loader40").show();

                } else if (comment_type == type.DEPOIMENTO) {

                    $j("#modal_depoimento .loader.loader40").show();
                    $j("#modal_depoimento .title.msg-default, #modal_depoimento #depoimento").hide();
                }
            },
            success: function(response) {

                if (comment_type == type.COMENTARIO) {

                    if (response == "-1") {

                        exibeModal('#modal_comentario');
                        $j(".msg-0-0").show();

                    } else {

                        var response = eval('(' + response + ')');

                        /* Inserir no começo da lista entre os comentários */
                        var single_comentario = $j(".grupoComentarios .single_comentario").first().clone();
                        single_comentario.find(".nome").html(response.comment_author);
                        single_comentario.find("span.data_publicado").html(response.comment_date);
                        var data_template_directotry_uri = single_comentario.find("img.foto").attr("data-template_directotry_uri");
                        single_comentario.find("img.foto").attr("src", data_template_directotry_uri + response.foto);
                        single_comentario.find(".comentario").html(response.comment_content);
                        single_comentario.find(".nao_revisado").show();
                        single_comentario.show();
                        $j(".grupoComentarios").prepend(single_comentario);
                    }

                    $j(".wrap_comentarios .loader.loader40").hide();

                } else if (comment_type == type.DEPOIMENTO) {

                    if (response == "-1") {

                        $j(".msg-0-0").show();

                    } else {

                        var response = eval('(' + response + ')');

                        /* Inserir no começo da lista entre os depoimentos */
                        var single_depoimento = $j(".depoimento_single_temp .depoimento_single").first().clone();
                        single_depoimento.find(".nome").html(response.comment_author);
                        single_depoimento.find("span.data_publicado").html(response.comment_date);
                        var data_template_directotry_uri = single_depoimento.find("img.foto").attr("data-template_directotry_uri");
                        single_depoimento.find("img.foto").attr("src", data_template_directotry_uri + response.foto);
                        single_depoimento.find("p.comentario").html(response.comment_content);
                        single_depoimento.find(".nao_revisado").css("display", "block");
                        single_depoimento.find(".buttons .like, .buttons .dislike, button.comentarios.btn_comentarios_level1").attr("data-comment_id", response.comment_ID);
                        single_depoimento.find("input[name=comment_parent]").val(response.comment_ID);
                        single_depoimento.find("form[data-nivel=1]").attr("data-comment_parent", response.comment_ID).attr("id", "comentario_nivel_1_" + response.comment_ID);
                        single_depoimento.find("button.btn_comentarios_level1").attr("id", "comentarios_level1_" + response.comment_ID);
                        single_depoimento.find(".comentarios_nivel1").attr("id", "comentarios_nivel1_" + response.comment_ID);

                        single_depoimento.show();
                        $j(".depoimentos_slider").slick('slickAdd', single_depoimento, true);
                        $j(".depoimentos_slider .slick-dots li button").html("");

                        $j(".msg-1-2, #modal_depoimento .ok").show();

                        load_comentario_nivel(1, response.comment_ID);
                    }

                    $j("#modal_depoimento .loader.loader40").hide();
                }

                callbackSucesso(response);
            },
            error: function(response) {

                callbackError(response);
            },
            complete: function(response) {

                load_plugin();
            }
        });
    }

    this.setComentarioNiveis = function(nivel, callbackSucesso, callbackError) {

        $j.ajax({
            url: config.url_ajax,
            type: 'POST',
            data: {
                'action': 'publicarComentario',
                'data': JSON.stringify(this.data)
            },
            beforeSend: function(xhr) {

            },
            success: function(response) {

                var response = eval('(' + response + ')');
                var elementComentarioTotalizador = $j("#comentarios_level" + nivel + "_" + response.comment_parent + " .number");
                var elementComentarios = $j("#comentarios_level" + nivel + "_" + response.comment_parent);
                var total_comentario = elementComentarioTotalizador.html();

                elementComentarioTotalizador.html(parseInt(total_comentario) + 1);

                var viewComentarios = $j("#comentarios_nivel" + nivel + "_" + response.comment_parent).attr("data-opened");

                if (viewComentarios == "0") { elementComentarios.click(); } else { elementComentarios.click().click(); }

                callbackSucesso(response);
            },
            error: function(response) {

                callbackError(response);
            },
            complete: function(response) {

                load_plugin();
            }
        });
    }

    this.getComentarioNiveis = function(nivel, comment_post_ID, comment_parent, callbackSucesso, callbackError) {

        var _nivel = (nivel + 1);
        var __nivel = (nivel - 1);

        $j.ajax({
            url: config.url_ajax,
            type: 'POST',
            data: {
                'action': 'getComentarios',
                'data': {
                    'comment_post_ID': comment_post_ID,
                    'comment_type': this.getTypes().DEPOIMENTO_COMENTARIO,
                    'comment_parent': comment_parent
                }
            },
            beforeSend: function(xhr) {

                $j(".comentarios_nivel" + nivel + " .nao_existe_comentario").html("");

                if (nivel == 1) {

                    $j("#comentarios_nivel" + nivel + "_" + comment_parent + " .comentario_single[style='display: block;']").remove();
                    $j(".loadercomentarios_nivel0.loader.loader40").show();

                } else {

                    $j("#comentarios_nivel" + nivel + "_" + comment_parent + " .comentario_single[style='display: block;']").remove();
                    $j(".loadercomentarios_nivel" + __nivel + ".loader.loader40[data-comment_id=" + comment_parent + "]").show();
                }
            },
            success: function(response) {

                var response = eval('(' + response + ')');

                for (var icomm = 0; icomm < response.length; icomm++) {

                    /* Inserir no começo da lista entre os comentarios */
                    var comentario = response[icomm];

                    var single_comentario = $j("#comentarios_nivel" + nivel + "_" + comentario.comment_parent + " .comentario_single ").first().clone();

                    single_comentario.find(".nome").html(comentario.comment_author);
                    single_comentario.find("span.data_publicado").html(comentario.comment_date);
                    var data_template_directotry_uri = single_comentario.find("img.foto").attr("data-template_directotry_uri");
                    single_comentario.find("img.foto").attr("src", data_template_directotry_uri + comentario.foto);
                    single_comentario.find("p.comentario").html(comentario.comment_content);
                    if (comentario.comment_approved == "0") { single_comentario.find(".nao_revisado").css("display", "block"); } else { single_comentario.find(".nao_revisado").css("display", "none"); }
                    single_comentario.find(".buttons .like, .comentario_single .buttons .dislike").attr("data-comment_id", comentario.comment_ID);
                    single_comentario.find("button[data-like_status='0'], button[data-like_status='1']").attr("data-comment_id", comentario.comment_ID);
                    single_comentario.find("button[data-like_status='1'][data-comment_id='" + comentario.comment_ID + "']").find(".text").html(comentario.like);
                    single_comentario.find("button[data-like_status='0'][data-comment_id='" + comentario.comment_ID + "']").find(".text").html(comentario.dislike);

                    /* Ref. próximo nível */
                    single_comentario.find("button.comentarios.btn_comentarios_level" + _nivel).attr("data-comment_id", comentario.comment_ID);
                    single_comentario.find("form[data-nivel=" + _nivel + "]").attr("data-comment_parent", comentario.comment_ID).attr("id", "comentario_nivel_" + _nivel + "_" + comentario.comment_ID);
                    single_comentario.find("input[name=comment_parent]").val(comentario.comment_ID);
                    single_comentario.find(".comentarios_nivel" + _nivel).attr("id", "comentarios_nivel" + _nivel + "_" + comentario.comment_ID);
                    single_comentario.find("button.btn_comentarios_level" + _nivel).attr("id", "comentarios_level" + _nivel + "_" + comentario.comment_ID);
                    single_comentario.find("#comentarios_level" + _nivel + "_" + comentario.comment_ID + " .number").html(comentario.total_comentarios);

                    single_comentario.find(".loadercomentarios_nivel" + nivel + ".loader.loader40").attr("data-comment_id", comentario.comment_ID);
                    single_comentario.show();

                    $j("#comentarios_nivel" + nivel + "_" + comentario.comment_parent).prepend(single_comentario);

                    load_comentario_nivel(_nivel, comentario.comment_ID);
                }

                if (response.length == 0)
                    $j("#comentarios_nivel" + nivel + "_" + comment_parent + " .nao_existe_comentario").html(msg_empty_comentario);

                if (nivel == 1) {
                    $j(".loadercomentarios_nivel0.loader.loader40").hide();
                } else {
                    $j(".loadercomentarios_nivel" + __nivel + ".loader.loader40[data-comment_id=" + comment_parent + "]").hide();
                }

                callbackSucesso(response);
            },
            error: function(response) {

                callbackError(response);
            },
            complete: function(response) {

                load_plugin();
            }
        });
    }

    this.setTypeComment = function(_typeComment) {

        comment_type = _typeComment;
    }

    this.getTypes = function() {

        return type;
    }
};


$j("form#comentario").on('click', 'input[type="submit"]', function(e) {

    e.preventDefault();

    var comentario = new Comentarios();
    comentario.data = $j("form#comentario").serializeArray();

    if (comentario.data[3].value.trim() == "") {

        exibeModal('#modal_comentario');
        $j(".msg-1-3").show();
        return;
    }

    comentario.setTypeComment(comentario.getTypes().COMENTARIO);

    comentario.setComentario(
        function callbackSucesso(response) {

            /* Limpar comentario preenchido no campo */
            if (response.status == "0") {

                $j("textarea[name=comentario]").val("");

                exibeModal('#modal_comentario');
                $j(".msg-1-0, #modal_comentario .ok").show();
            }
        },
        function callbackError(response) {

            console.log(response);
        });
});

$j("form#depoimento").on('click', 'input[type="submit"]', function(e) {

    e.preventDefault();

    var comentario = new Comentarios();
    comentario.data = $j("form#depoimento").serializeArray();

    if (comentario.data[3].value.trim() == "") {

        clearMsgs();
        $j(".msg-1-3").show();
        return;
    }

    $j(".msg-1-3").hide();

    comentario.setTypeComment(comentario.getTypes().DEPOIMENTO);

    comentario.setComentario(
        function callbackSucesso(response) {

            if (response.status == "0") {
                $j("form#depoimento").hide();
                $j("form#depoimento textarea[name=comentario]").val("");
                $j(".msg-1-2").show();
            }
        },
        function callbackError(response) {

            console.log(response);
        });
});

function clearMsgs() {

    $j(".msg-default, .msg-1-2, .msg-1-3").hide();
}

function reset_modal_depoimento() {

    $j("form#depoimento, .msg-default").show();
    $j(".msg-1-3, .msg-1-2, .msg-1-1, #modal_depoimento .ok").hide();
}

function load_comentario_nivel(nivel, comment_parent) {

    $j("form#comentario_nivel_" + nivel + "_" + comment_parent).off().on('click', 'input[type="submit"]', function(e) {

        e.preventDefault();

        var comentario = new Comentarios();
        comentario.data = $j("form#comentario_nivel_" + nivel + "_" + comment_parent).serializeArray();

        if (comentario.data[3].value.trim() == "") {

            clearMsgs();
            exibeModal('#modal_depoimento');
            $j("form#depoimento").hide();
            $j(".msg-1-3, #modal_depoimento .ok").show();
            return;
        }

        comentario.setTypeComment(comentario.getTypes().COMENTARIO);

        comentario.setComentarioNiveis(nivel,
            function callbackSucesso(response) {

                /* Limpar comentario preenchido no campo */
                if (response.status == "0") {
                    $j("textarea[name=comentario]").val("");

                    clearMsgs();
                    exibeModal('#modal_depoimento');
                    $j("form#depoimento").hide();
                    $j(".msg-1-1, #modal_depoimento .ok").show();
                }
            },
            function callbackError(response) {

                console.log(response);
            });
    });

    $j('button.btn_comentarios_level' + nivel + '#comentarios_level' + nivel + '_' + comment_parent).off().click(function(event) {

        var elementThis = $j(this);
        var comment_post_ID = elementThis.attr("data-comment_post_ID");
        var comment_id = elementThis.attr("data-comment_id");
        var target = elementThis.parent().parent().parent().find('#comentarios_nivel' + nivel + '_' + comment_parent);

        if (target.attr("data-opened") == null) {

            target.attr("data-opened", "0");
        }

        if (target.attr("data-opened") == "0") {

            var comentario = new Comentarios();

            target.attr("data-opened", "1");

            comentario.getComentarioNiveis(nivel, comment_post_ID, comment_id, function callbackSucesso(response) {

                target.slideToggle('slow');

            }, function callbackError(response) {

                console.log(response);
            });
        } else {

            target.attr("data-opened", "0");
            target.slideToggle('slow');
        }
    });
}
