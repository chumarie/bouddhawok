jQuery(function($){
    "use strict";

    //scroll
    $('ul#main-menu').find('a').on('click', function() { // Au clic sur un élément
        var page = $(this).attr('href'); // Page cible
        var speed = 550; // Durée de l'animation (en ms)
        $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
        return false;
    });


    function initializeIsotope(){
        if($('.grid').length){
            // init Isotope
            var $grid = $('.grid').isotope({
                itemSelector: '.element-item',
                horiz: {
                    columnWidth: '.grid-sizer'
                },
                getSortData: {
                    name: '.name',
                    symbol: '.symbol',
                    number: '.number parseInt',
                    category: '[data-category]',
                    weight: function( itemElem ) {
                        var weight = $( itemElem ).find('.weight').text();
                        return parseFloat( weight.replace( /[\(\)]/g, '') );
                    }
                }
            });

            // filter functions
            var filterFns = {
                // show if number is greater than 50
                numberGreaterThan50: function() {
                    var number = $(this).find('.number').text();
                    return parseInt( number, 10 ) > 50;
                },
                // show if name ends with -ium
                ium: function() {
                    var name = $(this).find('.name').text();
                    return name.match( /ium$/ );
                }
            };

            // bind filter button click
            $('#filters').on( 'click', 'button', function() {
                var filterValue = $( this ).attr('data-filter');
                // use filterFn if matches value
                filterValue = filterFns[ filterValue ] || filterValue;
                $grid.isotope({ filter: filterValue });
            });

            // bind sort button click
            $('#sorts').on( 'click', 'button', function() {
                var sortByValue = $(this).attr('data-sort-by');
                $grid.isotope({ sortBy: sortByValue });
            });

            // change is-checked class on buttons
            $('.button-group').each( function( i, buttonGroup ) {
                var $buttonGroup = $( buttonGroup );
                $buttonGroup.on( 'click', 'button', function() {
                    $buttonGroup.find('.is-checked').removeClass('is-checked');
                    $( this ).addClass('is-checked');
                });
            });
        }
    }





    /*=====================================
     =            INIT FUNCTION            =
     =====================================*/

    jQuery(document).ready(function(){
        initializeIsotope();
    });

    jQuery(window).on('load', function() {

    });

    /*=====  End of INIT FUNCTION  ======*/

    /*=====================================
     =            RESIZE FUNCTION          =
     =====================================*/

    jQuery( window ).resize(function() {

    });

    /*=====  End of RESIZE FUNCTION  =====*/


});