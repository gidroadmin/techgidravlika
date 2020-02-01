$(document).ready(function(){
    $('.header__burger').click(function(event){
        $('.header__burger, .left-nav').toggleClass("active");
        $('body').toggleClass('lock');
    });
});