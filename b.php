<?php
session_start();
echo "Welcome ". $_SESSION['Username'];
echo "<br>Your favourite category is ". $_SESSION['Category'];
echo "<br>";
?>