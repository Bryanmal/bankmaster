<?php
$x = 62;

$root = sqrt($x);

echo "The square root is $root <br>";

$rounded = round($root,3);

echo "Rounded value is $rounded<br>";

$upwards = ceil($root);

$downwards = floor($root);

echo "Upwards is $upwards and downwards is $downwards<br>";

$powerd = pow($root,"2.5");

echo "powered value is $powerd";
