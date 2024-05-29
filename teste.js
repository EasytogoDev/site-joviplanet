$(document).ready(function() {
    // Função para verificar se a div está visível na janela
    function isScrolledIntoView(elem) {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();
        var elemTop = $(elem).offset().top;
        return elemTop <= docViewBottom;
    }

    // Função para verificar se a div está visível e animá-la
    function checkVisibilityAndAnimate() {
        $('.animated-box').each(function() {
            if (isScrolledIntoView(this) && !$(this).hasClass('visible')) {
                $(this).addClass('visible');
            }
        });
    }

    // Verifica a visibilidade da div quando a página é carregada
    checkVisibilityAndAnimate();

    // Verifica a visibilidade da div quando a página é rolada
    $(window).scroll(function() {
        checkVisibilityAndAnimate();
    });
});
