<!DOCTYPE html>
<html>
<head>
<title>Первый сайт на PHP</title>
<meta charset="utf-8">
</head>
<body>
<?php
$name = $_POST["firstname"];
$surname = $_POST["lastname"];
echo "Ваше имя: <b>".$name . " " . $surname . "</b>";
?>
</body>
</html>
