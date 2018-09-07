<?php
//loops for while do while

/*for($x=1; $x<=100; $x++)
{
//    print "$x reign<br>";
     $results = $x * $x;
     print "The square of $x is $results <br>";
}*/

/*$x=  100;

while($x>= -20)
{
    print "$x<br>";
    $x-=2;
}*/
/*$x =1;
$sum=0;

do
    {
    //  print "$x<br>";
    $sum+=$x;
      $x++;
    }
while($x<=10);

print $sum;*/


$q = 1;

    while($q<=100)
    {
        if ($q % 3 ==0 or $q % 4 ==0)
        {
            print "$q<br>";
        }

        $q++;
    }