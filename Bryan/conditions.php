<?php
$weight =200;
$height =2.99;

$bmi =$weight /($height*$height);

print  "$bmi<br>";

if ($bmi<15)
{
    echo "You are very severely underweight";
}
else if ($bmi>=15 and $bmi<16)
{
    echo "You are severely underweight";
}
else if ($bmi>=16 and $bmi<18.5)
{
  echo "You are underweight";
}
else if($bmi>=18.5 and $bmi<=25)
{
    echo "You are healthy weight";
}
else if($bmi>=25 and $bmi<=30)
{
   echo "You are overweight";
}
else if($bmi>=30 and $bmi<=35)
{
    echo "You are obese class 1";
}
else if($bmi>=35 and $bmi<=40)
{
    echo "You are obese class 2";
}
else if($bmi>=40)
{
    echo " You are obese class 3";
}