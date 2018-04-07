<?php
include_once('includes/header.php');
?>
<input id="location-search" type="search" name="city" placeholder="search for your weather">

<p class="weather" style="display: none">It's currently <span id="temperature"></span>°C with a high of <span id="high-temp"></span>°C and a low of <span id="low-temp"></span>°C</p>


<a href="compare.php">Compare Weather</a>


<?php
include_once('includes/footer.php');
?>