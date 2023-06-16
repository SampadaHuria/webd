<!DOCTYPE html>
<html>
<head>
<title>Chess Board</title>
<style>
table {
width: 400px;
border-collapse: collapse; border: 1px black solid;
}
td {
width: 30px; height: 30px;
}
.white {
background-color: #ffffff;
}
.black {
background-color: #000000;
}
</style>
</head>
<body>
<table>
<?php
for ($row = 1; $row <= 8; $row++) {
echo "<tr>";
for ($col = 1; $col <= 8; $col++) {
$total = $row + $col; if ($total % 2 == 0) {
echo "<td class='black'></td>";
} else {
echo "<td class='white'></td>";
}
}
echo "</tr>";
}
?>
</table>
</body>
</html>
