$(window).ready(function(){
    $(".dropdown-wrapper").each(function(){
        var $box = $(this);
        $(document.body).click(function(e){
            if (!$box.has(e.target).length) { // if the click was not within $box
                $box.removeClass("open");
            }
        });
    });
    $(".dropdown-button").click(function(){
        $(this).parent().toggleClass('open');
        $(this).blur();
    })
    $(".dropdown-button + .dropdown > a").click(function(){
        $(this).parent().parent().removeClass('open');
        $(this).parent().parent().children('.dropdown-button').blur();
    })
    var $box = $('#box');
    $(document.body).click(function(){
        if (!$box.has(this).length) { // if the click was not within $box
            $box.hide();
        }
    });
});