$(document).ready(function () {

    var latitude = 54.321475;
    var longitude = -6.306556;
    var appid = '86afc7330041b7b874026b441fdf564e';

    //single weather search
    $('#search').submit(function () {
        var location = $('#search #location-search').val();

        $.getJSON("http://api.openweathermap.org/data/2.5/weather?q=" + location + "&units=metric&APPID=" + appid, function (data) {
            var rawJson = JSON.stringify(data);
            var json = JSON.parse(rawJson);
            $('#temperature').html(Math.round(json.main.temp));
            $('#location').html(json.name);
            $('#high-temp').html(json.main.temp_max);
            $('#low-temp').html(json.main.temp_min);
            $('#forecast').html(json.weather[0].description);
            $('.weather').css({"display": "block"});
            console.log(json);
        });
return false;
    });

    //comparing weather search
    $("#compare").submit(function () {
        var location1 = $('#compare #location-compare-1').val();
        var location2 = $('#compare #location-compare-2').val();
        $.getJSON("http://api.openweathermap.org/data/2.5/weather?q=" + location1 + "&units=metric&APPID=" + appid, function (data) {
            var rawJson = JSON.stringify(data);
            var json = JSON.parse(rawJson);
            $('#temperature1').html(Math.round(json.main.temp));
            $('#location1').html(json.name);
            $('#high-temp1').html(json.main.temp_max);
            $('#low-temp1').html(json.main.temp_min);
            $('#forecast1').html(json.weather[0].description);
            $('.weather').css({"display": "block"});
        });
        $.getJSON("http://api.openweathermap.org/data/2.5/weather?q=" + location2 + "&units=metric&APPID=" + appid, function (data) {
            var rawJson = JSON.stringify(data);
            var json = JSON.parse(rawJson);
            $('#temperature2').html(Math.round(json.main.temp));
            $('#location2').html(json.name);
            $('#high-temp2').html(json.main.temp_max);
            $('#low-temp2').html(json.main.temp_min);
            $('#forecast2').html(json.weather[0].description);
        });
        return false;
    });


});
