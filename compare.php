<?php
?>
<script src="js/jquery.js"></script>
<script src="js/script.js"></script>
<p>weatherboy</p>


<form class="form" id="compare">
<p>compare weather</p>
    <input id="location-compare-1" type="text" name="location-1" placeholder="search for your weather">
    <input id="location-compare-2" type="text" name="location-2" placeholder="search for your weather">
    <input type="submit" value="compareo">
</form>

<div class="half">
    <p id="location1"></p>
    <p id="temperature1"></p>
</div>

<div class="half">
    <p id="location2"></p>
    <p id="temperature2"></p>
</div>

<a href="single.php">Search Weather</a>