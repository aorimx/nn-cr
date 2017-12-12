$(document).ready(function(){
    $('.nav-icon').click(function(){
        $('.navigation-mobile').toggleClass('menuMovilBlock');
        if (!$(this).hasClass('active')) {
            $(this).addClass('active');
        }
        else{
            $(this).removeClass('active');
        }

    });
})