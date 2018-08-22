import $ from 'jquery';
import whatInput from 'what-input';

window.$ = $;

import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
//import './lib/foundation-explicit-pieces';

$(document).foundation();


$('.menu-button').on('click', function () {
    $('.contact-menu').toggleClass('setMenu');
    $(this).toggleClass('setButton');
    

});

$('#menuIcon').on('click', function () {
    $('#menuIcon').toggleClass('hover');
    
});