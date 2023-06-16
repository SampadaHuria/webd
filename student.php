<?php
$marks = 57;

if ($marks >= 90) {
$grade = 'A+';
} elseif ($marks >= 80) {
$grade = 'A';
} elseif ($marks >= 70) {
$grade = 'B';
} elseif ($marks >= 60) {
$grade = 'C';
} elseif ($marks >= 50) {
$grade = 'D';
} else {
$grade = 'F';
}

echo "Student's marks: $marks<br>";
echo "Student's grade: $grade";
?>
