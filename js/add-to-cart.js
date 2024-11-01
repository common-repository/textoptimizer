jQuery(document).ready(function ($) {
    // hide open common_sentences_popup sentence result
    $(".subkeyholder").hide();
    
    $("body").on("click", ".keyword-left", function(){
        var sentence_value_right = ' ' + $('#center_keyword').text();
        if ($('.clicked-keyword-right').length > 0) {
            sentence_value_right = ' ' + $('#center_keyword').text() + ' ' + $('.clicked-keyword-right').text();
            if ($('.clicked-subkeyword-right').length > 0) {
                sentence_value_right = ' ' + $('#center_keyword').text() + ' ' + $('.clicked-keyword-right').text() + ' ' + $('.clicked-subkeyword-right').text();
            }
        }
        if($(this).hasClass("clicked-keyword-left"))
        {
            $(this).removeClass("clicked-keyword-left");
            $('#sentence_popup_words').val(sentence_value_right);
            return;
        }
        $(".clicked-keyword-left").removeClass("clicked-keyword-left");
        $(this).addClass("clicked-keyword-left");
        $('#sentence_popup_words').val($(this).text() + sentence_value_right);
    });

    $("body").on("click", ".keyword-right", function () {
        var sentence_value_left = $('#center_keyword').text() + ' ';
        if ($('.clicked-keyword-left').length > 0) {
            sentence_value_left = $('.clicked-keyword-left').text() + ' ' + $('#center_keyword').text() + ' ';
        }

        $(".clicked-subkeyword-right").removeClass("clicked-subkeyword-right");
        $('.right_subkey').hide();
        
        if($(this).hasClass("clicked-keyword-right"))
        {
            $(this).removeClass("clicked-keyword-right");
            $('#sentence_popup_words').val(sentence_value_left);
            return;
        }
        
        var elementPosition = $(this).data('value');
        if ($('#right_subkey_'+ elementPosition).length) {
            $('#right_subkey_'+ elementPosition).show();
        }

        $(".clicked-keyword-right").removeClass("clicked-keyword-right");
        $(this).addClass("clicked-keyword-right");
        $('#sentence_popup_words').val(sentence_value_left + $(this).text());
    });

    $("body").on("click", ".subkeyword-right", function () {
        var sentence_value_left = $('#center_keyword').text() + ' ';
        if ($('.clicked-keyword-left').length > 0) {
            sentence_value_left = $('.clicked-keyword-left').text() + ' ' + $('#center_keyword').text() + ' ';
        }

        $('.right_subsubkey').hide();

        if($(this).hasClass("clicked-subkeyword-right"))
        {
            $(this).removeClass("clicked-subkeyword-right");
            $('#sentence_popup_words').val(sentence_value_left + $(".clicked-keyword-right").text());
            return;
        }

        $(".clicked-subkeyword-right").removeClass("clicked-subkeyword-right");
        $(this).addClass("clicked-subkeyword-right");
        $('#sentence_popup_words').val(sentence_value_left + $('.clicked-keyword-right').text() + ' ' + $(this).text());
    });

    $("body").on("mouseover", ".keyword-left", function() {
        if ($('#active_sentence_left').length > 0) {
            $('#active_sentence_left').removeAttr('id');
        }
        $(this).attr('id','active_sentence_left');
        redrawLineHolder();
    });

    $("body").on("mouseover", ".keyword-right", function() {
        if ($('[data-active-subright=active_sub_sentence_right]').length > 0) {
            $('[data-active-subright=active_sub_sentence_right]').removeAttr('data-active-subright');
        }

        $(".right_subkey .active").removeClass("active");
        
        if ($('#active_sentence_right').length) {
            $('#active_sentence_right').removeAttr('id');
        }
        $(this).attr('id','active_sentence_right');
        
        if ($('#active_sub_sentence_right').length) {
            $('#active_sub_sentence_right').removeAttr('id');
        }

        redrawLineHolder();
    });

    $("body").on("mouseover", ".subkeyword-right", function() {
        if ($('#active_sub_sentence_right').length) {
            $('#active_sub_sentence_right').removeAttr('id');
        }
        $(this).attr('id','active_sub_sentence_right');

        if ($('[data-active-subright=active_sub_sentence_right]').length > 0) {
            $('[data-active-subright=active_sub_sentence_right]').removeAttr('data-active-subright');
        }
        $(this).attr('data-active-subright', 'active_sub_sentence_right');

        var index = 0;
        var elementPosition = 0;
        $(this).parent().find(".subkeyword-right").each(function(){
            index++;
            if($(this).attr("id") == "active_sub_sentence_right")
            {
                elementPosition = index;
            }
        })
        var positionHeight =  25;
        var positionMarginTop = -10;
        if (elementPosition != 1) {
            for (i=2; i<=elementPosition;i++) {
                positionHeight = positionHeight + 40;
            }
        }
        $(this).parent().prev().find(".line").css('height', positionHeight+'px');
        $(this).parent().prev().find(".line").css('margin-top', positionMarginTop+'px');

        $(this).parent().prev().addClass("active");
    });

    document.addEventListener('scroll', function (event) {
        redrawLineHolder();
    }, true);

    function redrawLineHolder() {
        if($(".common_sentence").length == 0)
            return;

        const A = $(".common_sentence").position().top;     // Height of gap from the top of popup to the top of keywords area
        const B = 15;                                       // half of keyword height
        const C = 175;                                      // Height from the top to center keyword line in keywords area
        const D = 225;                                      // Height from the center keyword line to bottom of keywords area

        if($("#active_sentence_right").length){
            var position = $("#active_sentence_right").position();
            var offset = position.top - A + B - C;
            if(offset > 0) {
                $('#keyword-right-side').css('height', (offset > D ? D : offset) + 'px');
                $('#keyword-right-side').css('top', C + 'px');
                $('#keyword-right-side').css('bottom', 'auto');
            }else {
                $('#keyword-right-side').css('height', (Math.abs(offset) > C ? C : Math.abs(offset)) + 'px');
                $('#keyword-right-side').css('bottom', D + 'px');
                $('#keyword-right-side').css('top', 'auto');
            }
        }

        if($("#active_sentence_left").length){
            var position = $("#active_sentence_left").position();
            var offset = position.top - A + B - C;
            if(offset > 0) {
                $('#keyword-left-side').css('height', (offset > D ? D : offset) + 'px');
                $('#keyword-left-side').css('top', C + 'px');
                $('#keyword-left-side').css('bottom', 'auto');
            }else {
                $('#keyword-left-side').css('height', (Math.abs(offset) > C ? C : Math.abs(offset)) + 'px');
                $('#keyword-left-side').css('bottom', D + 'px');
                $('#keyword-left-side').css('top', 'auto');
            }
        }
    }
});