<?php
//get post
$interest=0;
$total=0;
if ( isset($_post["loan"]))
{
//   var_dump($_post);
   extract($_post);
   if ($type=="simple")
   {
       $interest = $loan * $period * $rate/100;
//   print $interest;
       $total= $loan+$interest;
   }else
       {
           $total= $loan * (1 + $rate/100)**$period;
           $interest = $total - $loan;
       }

}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Loans Calc</title>
    <link rel="stylesheet" href="bootstrap/css/boo">
</head>
<body>
<div class="row">
    <div class="col-sm-4 col-sm-offset-4">
        <h3>Enter Loan Details</h3>
        <form action="loans.php" method="post">
            <div class="radio">
                <label><input type="radio" checked value="simple" name="type">Simple Interest</label>
            </div>
            <div class="radio">
                <label><input type="radio" value="compoud" name="type">Compound Interest</label>
            </div>
            <div class="form-group">
                <input type="number" name="loan" required placeholder="Enter Loan Amount" class="form-control">
            </div>
            <div class="form-group">
                <input type="number" step="0.01" name="period" placeholder="Enter Repayment Period " class="form-control">
            </div>
            <div class="form-group">
                <input type="number" step="0.01" name="rate" placeholder="Enter Interest Rate" class="form-control">
            </div>

            <button class="bgn btn-block btn-danger">Calculate</button>
        </form>

        <h4 class="text-success">
            <?php print "Interest Is $interest"?>
        </h4>
        <h4 class="text-success">
            <?php print "Total Is $interest"?>
        </h4>

    </div>
</div>
</body>
</html>