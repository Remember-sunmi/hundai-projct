/*
	Load more content with jQuery -Web Taxonomy

*/   


$(function () {
    $(".container2 .more").slice(0, 2).show();
    $(".container2 #loadMore").on('click', function (e) {
        var height = $(document).height() - $(window).height();
        e.preventDefault();
        $(".container2 .more:hidden").slice(0, 1).show();
        window.scrollTo(0, height);
        if ($(".container2 .more:hidden").length == 0) {
             $("#loadMore").hide();
        }
        /*$('html,body').animate({
             scrollTop: $(this).offset().top
         }, 0);*/
    });
});

