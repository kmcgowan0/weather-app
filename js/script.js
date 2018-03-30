$(document).ready(function() {

    function updateWeather (json) {

        longitude = json.coord.lon;
        latitude = json.coord.lat;
    }


    var latitude = 54.321475;
    var longitude = -6.306556;
    var appid = '86afc7330041b7b874026b441fdf564e';
$.getJSON("http://api.openweathermap.org/data/2.5/weather?lat=" + latitude + "&lon=" + longitude + "&APPID=" + appid, function (data) {
    var rawJson = JSON.stringify(data);
    var json = JSON.parse(rawJson);
    updateWeather(json); //Update Weather parameters
});


});