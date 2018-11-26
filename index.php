<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Простейший PHP-сценарий</title>
</head>
<body>
<h1>Здравствуйте</h1>
<p>
<?php
//вычисляем текущую дату в формате "день.месяц.год"
$dat = date("d.m y");

//вычисляем текущее время
$tm = date ("h:i:s");

# выводим их
echo "Текущая дата: $dat года<br />\n";
echo "Текущее время: $tm<br />\n";

# выводим цифры
echo "А вот квадраты и кубы первых пяти натуральных чисел:<br />\n";
echo "<ul>\n";
for ($i = 1; $i <=5; $i++) {
    echo "<li>$i в квадрате = " . ($i * $i);
    echo ", $i в кубе = " . ($i * $i *$i) . "</li>\n";
}
?>
</ul>
</p>
<?php 
echo PHP_INT_MAX;
$a = 1;
$b = 2;
echo "<br>$a, $b";

$b = $a++;

echo "<br>$a, $b";
?>
    
</body>
</html>