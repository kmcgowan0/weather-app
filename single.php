<?php
include_once('includes/header.php');
?>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <form class="form" id="search">
                    <p>Search for a location below</p>
                    <input id="location-search" type="search" name="city" placeholder="type a location">
                    <input type="submit" value="Search">
                </form>


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
            <p class="error">Sorry, that location could not be found, please check your spelling and try searching again.</p>
            <div class="col-xs-12 button-container">
                <a class="button" href="compare.php">Compare weather in two locations</a>
            </div>
        </div>

<?php
include_once('includes/footer.php');
?>