<?php

// Array of countries and their capitals
$countries = array(
    "Germany" => "Berlin",
    "France" => "Paris",
    "United States" => "Washington, D.C.",
    "United Kingdom" => "London",
    "Canada" => "Ottawa"
);

// Sort the countries by capital
asort($countries);

// Display the capital and country name
foreach ($countries as $country => $capital) {
    echo "Capital of $country is $capital" . PHP_EOL ."<br>";
}
?>
