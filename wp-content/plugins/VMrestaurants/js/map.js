jQuery(function($){
    "use strict";

    function initMap() {
        //Initialize
        var lng = $('#map').data("lng");
        var lat = $('#map').data("lat");

        var myLatLng = {lat: lat, lng: lng};


        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map'), {
            center: myLatLng,
            scrollwheel: false,
            zoom: 14,
            mapTypeId : google.maps.MapTypeId.TERRAIN, // Type de carte, différentes valeurs possible HYBRID, ROADMAP, SATELLITE, TERRAIN
            maxZoom   : 20,
            styles : [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]


        });
        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Bouddha wok',
            icon: "wp-content/plugins/VMrestaurants/img/panneau.png"
        });
    }





    /*=====================================
     =            INIT FUNCTION            =
     =====================================*/

    jQuery(document).ready(function(){
        initMap();
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