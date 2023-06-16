<?php
$countries = array( "Germany =>Berlin","Germany =>Berlin","Germany =>Berlin");
    

function sortByCapital($a, $b) {
    return strcmp($a['capital'], $b['capital']);
}

usort($countries, 'sortByCapital');
foreach ($countries as $country) {
    echo "Capital: " . $country['capital'] . ", Country: " . $country['country'] . "<br>";
}
?>