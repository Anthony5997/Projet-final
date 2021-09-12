$(document).ready(function(){
    $('.fa-angle-right').click(function(){
    $('.fa-angle-right').toggleClass('fa-times')
    
    })

    $('.fa-arrow-down').click(function(){
        $('.fa-arrow-down').toggleClass('fa-times')
        
        })
$(window).scroll(function(){
if ($(window).scrollTop() >= 20)
{
    $('header').addClass('active')
} else {
    $('header').removeClass('active')
}
    });})