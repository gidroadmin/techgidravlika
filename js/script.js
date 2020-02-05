$(document).ready(function(){

    $('.header__burger').click(function(event)
    {
        $('.header__burger, .left-nav').toggleClass('active');
        $('body').toggleClass('lock');
    });

    
    
});

$(document).ready(function(){
    $('.header__logo').click(function(event)
        {
            $('.menu').toggleClass('active');
            $('body').toggleClass('lock');
        })

});