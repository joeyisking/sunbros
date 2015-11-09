$( document ).ready(function() {
    chat_submit();
    clear_button();
    scroll_down();
    voting();
});

function voting(){
    var vote = 0;
    var id = 0;

    $("[id^=upvote]").click( function() {
        id = $(this).attr("id").substr(7);
        vote = 1;
        update_votes(id, vote);
    });

    $("[id^=downvote]").click( function() {
        id = $(this).attr("id").substr(9);
        vote = -1;
        update_votes(id, vote);
    });
}

function update_votes(id, vote){
    if (vote == 1){
        $("#upvote_" + id).css("color", "blue");
        $("#upvote_" + id).css("pointer-events", "none");
    }else{
        $("#downvote_" + id).css("color", "red");
    }

    $.ajax({
        type: "POST",
        url: "posts/update_votes",
        data: {
            '_token': $('input[name=_token]').val(),
            'id': id,
            'vote': vote
        },
        success: function (data) {
            var result = JSON.parse(data);
            $("#current_votes_" + result['id']).text(result['votes']);

        }
    });
}
function chat_submit(){

    /*$("#chat_submit").click( function() {
        var scroll = $("#chat_window");
        var height = scroll[0].scrollHeight;

        $.ajax({
            type: "POST",
            url: "chat/store",
            data: {
                '_token': $('input[name=_token]').val(),
                'message': $("#message_field").val()
            },
            success: function (data) {
                var result = JSON.parse(data);

                if (result != false){
                    $("#message_field").val('');
                    display = "<b>" + result['name'] + ": </b>" + result['message'] + "<br />";
                    $("#chat_window").append(display);
                    scroll.scrollTop(height);
                }
            }
        });
    });*/
}

function clear_button(){
    $("#clear_field").click( function() {
        $("#message_field").val('');
    });
}

function scroll_down(){

    if ($("#chat_window").length){
        var scroll = $("#chat_window");
        var height = scroll[0].scrollHeight
        scroll.scrollTop(height);
    }

};

