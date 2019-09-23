<?php
    $a = 5;
    $b = '05';
    var_dump($a == $b);         // Всегда приводится к числу
    var_dump((int)'012345');     // Приведение строки к числу 12345?
    var_dump((float)123.0 === (int)123.0); // Строгая типизация. Типы данных должны быть одинаковыми, здесь int и float.
    var_dump((int)0 === (int)'hello, world'); // Строка преобразуется к цислу и будет равна нулю
?>


 

<?php 
$title = 'PHP';
$h1 = 'Hello World';
$year = date('Y');
?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title><?php echo $title; ?></title>
 </head>
 <body>
 <h1><?php echo $h1; ?></h1>
 <span> <?php echo $year; ?></span> <br>
 </body> 
 </html>