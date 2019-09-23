<?php
// Третье и четвертое задание
function sum($a, $b){
	return $a + $b;
}
function minus($a, $b){
	return $a - $b;
}
function calc($a, $b, $operation){
	return $operation($a, $b);
}
echo calc(1, 2, 'sum');
exit;
// Задание 2
$a = rand(0,15);
    switch ($a){
        case 1:
            echo ($a++).'<br>';
        case 2:
            echo ($a++).'<br>';
        case 3:
            echo ($a++).'<br>';
        case 4:
            echo ($a++).'<br>';
        case 5:
            echo ($a++).'<br>';
        case 6:
            echo ($a++).'<br>';
        case 7:
            echo ($a++).'<br>';
        case 8:
            echo ($a++).'<br>';
        case 9:
            echo ($a++).'<br>';
        case 10:
            echo ($a++).'<br>';
        case 11:
            echo ($a++).'<br>';
        case 12:
            echo ($a++).'<br>';
        case 13:
            echo ($a++).'<br>';
        case 14:
            echo ($a++).'<br>';
        case 15:
            echo $a;
    }
for ($i = random_int(0, 15); $i <= 15; $i++) {
    echo $i,"\t";
}
exit();
// Первое задание
$a = -15;
$b = -12;
if($a >= 0 && $b >= 0){
    echo ($a - $b);
}elseif($a <0 && $b < 0){
    echo ($a * $b);
}elseif(($a < 0 && $b >= 0)||($a >=0 && $b <0)){  // или как - нибудь через xor?
    echo ($a + $b);
}
else{
    echo 'No';
}