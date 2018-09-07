<?php

$text = "The quick brown fox jumped over a lazy dog";//string

echo strtoupper($text);
echo "<br>";
echo "$text";
echo "<br>";
echo strlen($text);//characters
echo "<br>";
echo str_word_count($text);//words
echo "<br>";
echo ucwords($text);

$x = ucwords($text);
echo "<br>";

echo $x;
echo "<br>";

echo ucwords("jay mark");
echo "<br>";

echo strtoupper("This is my sentence");
