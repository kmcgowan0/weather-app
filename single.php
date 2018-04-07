<?php
include_once('includes/header.php');
?>
    <div class="container">
        <form class="form" id="search">
            <p>Search for a location below</p>
            <input id="location-search" type="search" name="city" placeholder="search for your weather">
            <input type="submit" value="Search">
        </form>

        <div class="row">

            <div class="col-sm-8 col-sm-offset-2">
                <div class="weather-output">
                    <h3 class="weather"><span id="location"></span></h3>
                    <h2 class="weather"><span id="temperature"></span>°C</h2>
                    <p class="weather"><span id="forecast"></span></p>
                    <p class="weather">High: <span id="high-temp"></span>°C</p>
                    <p class="weather">Low: <span id="low-temp"></span>°C</p>
                </div>
            </div>
        </div>
        <a href="compare.php">Compare weather in two locations</a>
    </div>

<?php
include_once('includes/footer.php');
?>