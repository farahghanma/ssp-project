$(document).ready(function (){
    $('.fa-bars').click(function (){
        //this is for the hamburger menu when the screen is <= 768 px
        $(this).toggleClass('fa-times');
        $('.navbar').toggleClass('nav-toggle'); // X sign 
    });

    $(window).on('load scroll', function(){
        $('.fa-bars').removeClass('fa-times');
        $('.navbar').removeClass('nav-toggle');

        //since the header is fixed, I used jQuery to change the color of the header when we scroll 
        //instead of having a transparent background 
        if($(window).scrollTop() > 30){
            //
            $('header').css({
                'background': '#AC8E60',
                'box-shadow': '0 .2rem .5rem rgba(0,0,0,0.4)'
            });
        }

        //if we are not scrolling for more than 30, the header remains as it is 
        //this basically retuns the header as it initially was when we go back to home section
        else {
            $('header').css({
                'background': 'none'
            });
        }
    });
    
    $("#contactForm").submit(function(e) {
        $("#mainFormDiv").hide();
        $("#submitMessage").show();
    });
    
    
    $("#unsubscribe_link").click(function() {
        $("#submitMessage").hide();
        $("#unsubscribe").show();
    });
    
    $("#unsubscribeForm").submit(function(e) {
        $("#unsubscribe").hide();
        $("#confirm-unsubscribe").show();
    });
    
}); //ready