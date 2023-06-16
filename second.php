<?php
$countries = array(
    array("country" => "Germany", "capital" => "Berlin"),
    array("country" => "France", "capital" => "Paris"),
    array("country" => "United States", "capital" => "Washington, D.C."),
    array("country" => "Japan", "capital" => "Tokyo"),
    array("country" => "India", "capital" => "New Delhi")
);
function sortByCapital($a, $b) {
    return strcmp($a['capital'], $b['capital']);
}

usort($countries, 'sortByCapital');
foreach ($countries as $country) {
    echo "Capital of  " . $country['country'] .  " is " . $country['capital'] . "<br>";
}
?>
