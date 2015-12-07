var x = document.getElementById("geoLocation");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";

    }
}

function showPosition(position) {

// Assign a click event to the id of "ajaxTrigger".  When a user clicks the element the enclosed code will run.

//  To be a little  more clear on the api url structure list out each piece here.
    var baseURL = 'http://api.openweathermap.org/data/2.5/forecast/daily';
    var lat = "?lat=" + position.coords.latitude.toString();
    var lon = "&lon=" + position.coords.longitude.toString();
    var appid = '&APPID=5b7fa885220071fd69b008a834c521f8';
    var params = '&units=imperial&cnt=1';

// concat all parts of the ajax url before using it.
var ajaxURL = baseURL.concat(lat, lon, appid, params);

// jQuery ajax json call... there is a .done function if all goes well and a .fail function if it doesn't
$.getJSON( ajaxURL )
  .done(function( json ) {
    $('#geoWeather').val("Day Temp: " + json.list[0].temp.day + "  |  Min Temp: " + json.list[0].temp.min + "  |  Max Temp: " + json.list[0].temp.max + "  |  Daily Weather Description: " + json.list[0].weather[0].description);
    $('#geoLocation').val("City: " + json.city.name + "  |  Latitude: " + json.city.coord.lon + "  |  Longitude: " + json.city.coord.lat);
  })
  .fail(function( jqxhr, textStatus, error ) {
    var err = textStatus + ", " + error;
    alert( "Request Failed");
    $('#useGeoLocationNo').click();
});
}
