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

$(document).ready(function() {
    loadWeather('St. Augustine','FL'); // default
    if ("geolocation" in navigator) {
        navigator.geolocation.getCurrentPosition(function(position) {
            loadWeather(position.coords.latitude+','+position.coords.longitude);
            $('footer .five.columns h4').html('Currently in Your Area');
        });
    } // geolocation
    $('.study a.button').hover(function(){
        $(this).closest('.row').find('.skew').toggleClass('hovered');
        $(this).closest('.row').find('.seven.columns').toggleClass('hovered');
    });
});