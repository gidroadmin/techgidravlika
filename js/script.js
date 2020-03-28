$(document).ready(function(){

    $('.header__burger').click(function(event)
    {
        $('.header__burger, .left-nav, .burger-menu__overlay').toggleClass('active');
        $('body').toggleClass('lock');
    });

});

$(document).ready(function(){
    $('.header__logo').click(function(event)
        {
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

//Header scroll for view_post
// $(document).ready(function(){
//             //$('#header').removeClass("default");
//                 var navHeight;
//                 navHeight = $('header').outerHeight(true);
//                 $('<div class="clone-nav"></div>').insertBefore('header').css('height',navHeight).hide();
//             $(window).scroll(function(){
//                 if($(this).scrollTop() > 0){
//                     $('#header').addClass("header_fixed");
//                     $('.clone-nav').show();
//                 } else {
//                     $('#header').removeClass("header_fixed");
//                     $('.clone-nav').hide();
//                 }
//             });
//         });


//Sticky header for index.html
        window.onscroll = function showHeader() {
            var header = document.querySelector('.header');
            var container = document.querySelector('.container');
            if(window.pageYOffset > 0){
                header.classList.add('header_fixed');
                container.classList.add('container_fixed');
            } else{
                header.classList.remove('header_fixed');
                container.classList.remove('container_fixed');

            }
        }        

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
});