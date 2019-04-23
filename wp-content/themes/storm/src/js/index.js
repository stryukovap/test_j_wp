import '../scss/style.scss';
import 'jquery';
import 'slick-carousel';
import 'slick-carousel/slick/slick.scss'
import 'slick-carousel/slick/slick-theme.css'

jQuery(document).ready(function( $ ){
    $('.slider').slick();

    $('.header__menu-mobile-img').click(function (){
        $('.header__menu-mobile').toggleClass('visible')
    });
    $('.header__menu-mobile a').click(function (){
        $('.header__menu-mobile').toggleClass('visible')
    });
});

