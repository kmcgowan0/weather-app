<?php
include_once('includes/header.php');
?>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <form class="form" id="compare">
                    <p>Compare weather in two different locations</p>
                    <p>Search for a town, country, city, or state</p>
                    <input id="location-compare-1" type="text" name="location-1" placeholder="location one">
                    <input id="location-compare-2" type="text" name="location-2" placeholder="location two">
                    <input type="submit" value="Compare">
                </form>

            </div>
            <div class="col-xs-12 col-sm-6 weather-output">
                <h3 class="weather weather1"><span id="location1"></span></h3>
                <h2 class="weather weather1"><span id="temperature1"></span>°C</h2>
                <p class="weather weather1"><span id="forecast1"></span></p>
                <p class="weather weather1">High: <span id="high-temp1"></span>°C</p>
                <p class="weather weather1">Low: <span id="low-temp1"></span>°C</p>
                <p class="error1">Sorry, that location could not be found, please check your spelling and try searching again.</p>
            </div>

            <div class="col-xs-12 col-sm-6 weather-output">
                <h3 class="weather weather2"><span id="location2"></span></h3>
                <h2 class="weather weather2"><span id="temperature2"></span>°C</h2>
                <p class="weather weather2"><span id="forecast2"></span></p>
                <p class="weather weather2">High: <span id="high-temp2"></span>°C</p>
                <p class="weather weather2">Low: <span id="low-temp2"></span>°C</p>
                <p class="error2">Sorry, that location could not be found, please check your spelling and try searching again.</p>
            </div>
        </div>
        <div class="col-xs-12 button-container">
            <a class="button" href="single.php">Search weather in one location</a>
        </div>
    </div>

<?php
include_once('includes/footer.php');
?>