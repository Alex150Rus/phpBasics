<?php
$h1 = '<h1>Привет<h1>';
$title = '<title>Привет</title>';
$date = date("d.m.y") . "- текущая дата<br>";
$time = date("h:i:s") . "- текущее время";
$html = <<<php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    $title
</head>
<body>
    $h1
    $date
    $time
</body>
</html>
php;

echo $html;