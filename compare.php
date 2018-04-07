<?php
include_once('includes/header.php');
?>
    <div class="container">
        <form class="form" id="compare">
            <p>compare weather</p>
            <input id="location-compare-1" type="text" name="location-1" placeholder="search for your weather">
            <input id="location-compare-2" type="text" name="location-2" placeholder="search for your weather">
            <input type="submit" value="compareo">
        </form>

        <div class="row">
            <div class="col-xs-12 col-sm-6 weather-output">
                <h3 class="weather"><span id="location1"></span></h3>
                <h2 class="weather"><span id="temperature1"></span>°C</h2>
                <p class="weather"><span id="forecast1"></span></p>
                <p class="weather">High: <span id="high-temp1"></span>°C</p>
                <p class="weather">Low: <span id="low-temp1"></span>°C</p>
            </div>

            <div class="col-xs-12 col-sm-6 weather-output">
                <h3 class="weather"><span id="location2"></span></h3>
                <h2 class="weather"><span id="temperature2"></span>°C</h2>
                <p class="weather"><span id="forecast2"></span></p>
                <p class="weather">High: <span id="high-temp2"></span>°C</p>
                <p class="weather">Low: <span id="low-temp2"></span>°C</p>
            </div>
        </div>

        <a href="single.php">Search Weather</a>
    </div>

<?php
include_once('includes/footer.php');
?>