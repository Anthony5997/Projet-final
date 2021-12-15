$(document).ready(function(){
    $('.fa-angle-right').click(function(){
    $('.fa-angle-right').toggleClass('fa-times')
    
    })

    $('.fa-bars').click(function(){
        $('.fa-bars').toggleClass('fa-times')
        
        })
$(window).scroll(function(){
if ($(window).scrollTop() >= 20)
{
    $('header').addClass('active')
} else {
    $('header').removeClass('active')
}
});})