var $j = jQuery.noConflict();

var likes = new Likes();

$j(document).ready(function() {

    var comment_id = 0;
    var comment_post_ID = $j("section#comentario input[name=comment_post_ID]").val();

    if (comment_post_ID != null) {

        likes.getLikes(comment_post_ID, comment_id);
    }
});


function Likes() {

    this.getLikes = function(comment_post_ID, comment_id) {

        $j.ajax({
            url: config.url_ajax,
            type: 'POST',
            data: {
                'action': 'getLikes',
                'data': {
                    'comment_post_ID': comment_post_ID,
                    'comment_ID': comment_id
                }
            },
            beforeSend: function(xhr) {

                $j(".like .loader.loader20.small, .dislike .loader.loader20.small").show();

            },
            success: function(response) {

                var response = eval('(' + response + ')');

                $j("button[data-like_status='1'][data-comment_id='" + response.comment_ID + "']").find(".text").html(response.like);
                $j("button[data-like_status='0'][data-comment_id='" + response.comment_ID + "']").find(".text").html(response.dislike);

                $j(".like .loader.loader20.small, .dislike .loader.loader20.small").hide();
            },
            error: function(response) {

                console.log(response);
            }
        });
    }

    this.setLikes = function(like_status, comment_post_ID, comment_id) {

        $j.ajax({
            url: config.url_ajax,
            type: 'POST',
            data: {
                'action': 'setLikes',
                'data': {
                    'like_status': like_status,
                    'comment_post_ID': comment_post_ID,
                    'comment_ID': comment_id
                }
            },
            beforeSend: function(xhr) {

                $j(".like .loader.loader20.small, .dislike .loader.loader20.small").show();

            },
            success: function(response) {

                if (response == "-1") {

                    exibeModal('#modal_comentario');
                    $j(".msg-0-1").show();

                } else {

                    var response = eval('(' + response + ')');

                    $j("button[data-like_status='1'][data-comment_id='" + response.comment_ID + "']").find(".text").html(response.like);
                    $j("button[data-like_status='0'][data-comment_id='" + response.comment_ID + "']").find(".text").html(response.dislike);
                }

                $j(".like .loader.loader20.small, .dislike .loader.loader20.small").hide();
            },
            error: function(response) {

                console.log(response);
            }
        });
    }
}

/* Carregar ou outro método externo chamada esse método */
function load_like() {

    $j("button.like, button.dislike").off().on('click', function(e) {

        e.preventDefault();

        var comment_post_ID = $j(this).attr("data-comment_post_ID");
        var like_status = $j(this).attr("data-like_status");
        var comment_id = $j(this).attr("data-comment_id");

        likes.setLikes(like_status, comment_post_ID, comment_id);
    });
}

load_like();
