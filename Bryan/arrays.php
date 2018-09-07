<?php
//arrays
$scores =[ 56,37,45,83,91,26,34,56,76,89,97,75,83,56,55,45];

$names = ["Mark","Jane","John","Susan","Bryan","Doe","marry","Wayn"];

foreach ($scores as $main){

if($main % 2 != 0){

print "$main <br>";
      }
}
rsort($scores);
print "<br>$scores[0]";

echo array_sum($scores)."<br>";

echo max($scores)."<br>";






















/*print "$scores[0] $scores[8]<br> ";

print "$names[3]<br>";

foreach($names as $jina)
{
   print "$jina <br>";
}


foreach($scores as $Joe)
{
   print "$Joe <br>";
}

$data = array("nairobi"=>4000000,"kampala"=>35000000,"arusha"=>1000000);


print  $data["nairobi"];
extract($data);

print "<br>$nairobi <br>";
print"$kampala <br>";
print"$arusha <br>";*/