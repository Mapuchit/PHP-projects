<?php

// an $initial value to start from as an octal string
$initial = '555';

// find a PHP function to convert this octal string to a decimal number
$a = octdec($initial);
echo $a; // 365

echo "\n";

// a PHP function to convert degrees to radians
$b = deg2rad($a);
echo $b; // 6.3704517697793

echo "\n";

// take the cosine of $b
$c = cos($b);
echo $c; // 0.99619469809175

echo "\n";

// round $c to 3 decimal places
$d = round($c, 3);
echo $d; // 0.996

echo "\n";

// take the natural log of $d
$e = log($d);
echo $e; // -0.0040080213975388

echo "\n";

// take the absolute value of $e
$f = abs($e);
echo $f; // 0.0040080213975388

echo "\n";

// take the inverse, or arc cosine of $f
$g = acos($f);
echo $g; // 1.5667882946663

echo "\n";

// convert radians to degrees
$h = rad2deg($g);
echo $h; // 89.770356674879

echo "\n";

// floor (round down) $h
$i = floor($h);
echo $i; // 89

echo "\n";

// Subtract 47 from $i
$j = $i -47;
echo $j; // 42

