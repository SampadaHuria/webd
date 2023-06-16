<?php

function changeCase($array, $case) {
    $result = array();
    foreach ($array as $key => $value) {
        if ($case === "lower") {
            $result[$key] = strtolower($value);
        } elseif ($case === "upper") {
            $result[$key] = strtoupper($value);
        }
    }
    return $result;
}

// Example usage
$color = array("a" => "blue", "b" => "green", "c" => "red");

// Changing values to lower case
$lowerCaseColors = changeCase($color, "lower");
print_r($lowerCaseColors);

?>
