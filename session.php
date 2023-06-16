<?php
// Start a session
session_start();

// Check if the session counter is set, if not, initialize it to 0
if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0;
}

// Check if the cookie counter is set, if not, initialize it to 0
if (!isset($_COOKIE['counter'])) {
    setcookie('counter', 0, time() + 3600); // Cookie will expire in 1 hour
}

// Increment the session counter
$_SESSION['counter']++;

// Increment the cookie counter
$cookieCounter = $_COOKIE['counter'];
$cookieCounter++;
setcookie('counter', $cookieCounter, time() + 3600); // Update the cookie expiration time

// Display the session counter
echo "Session Counter: " . $_SESSION['counter'] . "<br>";

// Display the cookie counter
echo "Cookie Counter: " . $_COOKIE['counter'];
?>
