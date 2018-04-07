$(document).ready(function () {

    var latitude = 54.321475;
    var longitude = -6.306556;
    var appid = '86afc7330041b7b874026b441fdf564e';
    var timer = null;

    $('#location-search').on('keyup', function () {
        var location = $(this).val();
        clearTimeout(timer);
        timer = setTimeout(function () {
            $.getJSON("http://api.openweathermap.org/data/2.5/weather?q=" + location + "&units=metric&APPID=" + appid, function (data) {
                var rawJson = JSON.stringify(data);
                var json = JSON.parse(rawJson);
                $('#temperature').html(Math.round(json.main.temp));
                $('#location').html(json.name);
                $('#high-temp').html(json.main.temp_max);
                $('#low-temp').html(json.main.temp_min);
                console.log(json);
            });
        }, 2000);

    });

    $("#compare").submit(function () {
        var location1 = $('#compare #location-compare-1').val();
        var location2 = $('#compare #location-compare-2').val();
        $.getJSON("http://api.openweathermap.org/data/2.5/weather?q=" + location1 + "&units=metric&APPID=" + appid, function (data) {
            var rawJson = JSON.stringify(data);
            var json = JSON.parse(rawJson);
            $('#temperature1').html(Math.round(json.main.temp));
            $('#location1').html(json.name);

        });
        $.getJSON("http://api.openweathermap.org/data/2.5/weather?q=" + location2 + "&units=metric&APPID=" + appid, function (data) {
            var rawJson = JSON.stringify(data);
            var json = JSON.parse(rawJson);
            $('#temperature2').html(Math.round(json.main.temp));
            $('#location2').html(json.name);

        });
        console.log(location1);
        console.log(location2);
        return false;
    });


});
