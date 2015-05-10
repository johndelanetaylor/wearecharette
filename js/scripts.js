// Simple Weather
function loadWeather(location, woeid) {
  $.simpleWeather({
    location: location,
    woeid: woeid,
    unit: 'f',
    success: function(weather) {
      html = '<div><h2>'+weather.city+', '+weather.region+'</h2>';
      html += '<h3>'+weather.currently+'</h3></div>';
      html += '<div><h1>'+weather.temp+'&deg;<i class="icon-'+weather.code+'"></i></h1></div>';  
      
      $("#weather").html(html);
    },
    error: function(error) {
      $("#weather").html('<p>'+error+'</p>');
    }
  });
}

// Window Size
function windowSize() {
    windowHeight = window.innerHeight ? window.innerHeight : $(window).height();
    windowWidth = window.innerWidth ? window.innerWidth : $(window).width();
}
$(window).resize(function() {
    windowSize();
});

// Fade-in sections as user scrolls
$(window).scroll(function () {
    $('section').each(function() {
        var sectionBottom = $(this).position().top + $(this).outerHeight() / 3;
        var windowBottom = $(window).scrollTop() + $(window).height();
        if (windowBottom > sectionBottom) {
            $(this).animate({
                'opacity': '1'
            }, 500);
        }
    });
});

$(document).ready(function() {
    windowSize();
    loadWeather('St. Augustine','FL'); // Default
    if ('geolocation' in navigator) {
        navigator.geolocation.getCurrentPosition(function(position) {
            loadWeather(position.coords.latitude+','+position.coords.longitude);
            $('footer .five.columns h4').html('Currently in Your Area');
        });
    } // Geolocation
    $('.study a.button').hover(function(){
        $(this).closest('.row').find('.skew').toggleClass('hovered');
        $(this).closest('.row').find('.seven.columns').toggleClass('hovered');
    }); // Button Hover Skew
    $('nav a').hover(function() { $(this).parent('li').toggleClass('hovered'); });
    // Need to fix this so it hides all but the sections currently in the viewport
    $('section:not(:nth-of-type(1)):not(:nth-of-type(2))').css('opacity',0);
    if(windowWidth >= 1000) {
        $('#modal').on('click', function (e) {
            e.preventDefault();
            $('.modal, .backdrop').toggleClass('active');
        });
        $('.backdrop, .modal .close').on('click', function (e) {
            $('.modal, .backdrop').toggleClass('active');
        });
    } // Desktop size and up
});