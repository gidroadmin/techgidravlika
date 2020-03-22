$(document).ready(function(){

    $('.header__burger').click(function(event)
    {
<<<<<<< HEAD
        $('.header__burger, .left-nav, .burger-menu__overlay').toggleClass('active');
        $('body').toggleClass('lock');
    });

=======
        $('.header__burger, .left-nav').toggleClass('active');
        $('body').toggleClass('lock');
    });

    
    
>>>>>>> bef840ffeade7242cdfb32f9d90570b622ee80e4
});

$(document).ready(function(){
    $('.header__logo').click(function(event)
        {
<<<<<<< HEAD
            $('.menu, .burger-menu__overlay-menu').toggleClass('active');
            $('body').toggleClass('lock');
        })

});

function hideBody(){
	$('.header__burger, .left-nav, .burger-menu__overlay').toggleClass('active');
	$('body').toggleClass('lock');
	
}

function hideMenu(){
	$('.menu, .burger-menu__overlay-menu').toggleClass('active');
	$('body').toggleClass('lock');
}

$(document).ready(function(){
            //$('#header').removeClass("default");
            $(window).scroll(function(){
                if($(this).scrollTop() > 50){
                    $('#header').addClass("scroll");
                } else {
                    $('#header').removeClass("scroll");
                }
            });
        });

$(document).ready(function($){
    var url=document.location.href;
    $.each($("#preface"), function(){
        if(this.href==url){$(this).addClass('activeCSS');};
    });
}
);

/*
$(document).ready(function(){
    $('#box').hide(); // прячем выпадающий список
    $('#list').click(function(){
       $('#box').toggle("fast");  // настраиваем выпадающий список
    )}
});*/

/*
$(window).on('resize',function(){
    
    if($(window).width < 768)
    {
        $('#box').hide(); 
        $('#list').click(function(){
       $('#box').toggle("fast");  
    }
}

});*/

$(function()
{
    if($(window).width() < 768)
    {
        $('#box').hide(); 

        $('#list').click(function()
        {
        $('#box').toggle("fast");
        });
    }
    else{
        $('#list').click(function()
        {
           $('#box').toggle("fast");
        });
    }
=======
            $('.menu').toggleClass('active');
            $('body').toggleClass('lock');
        })

>>>>>>> bef840ffeade7242cdfb32f9d90570b622ee80e4
});