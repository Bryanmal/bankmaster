
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<style>
    html,body{
        height: 100%;
    }
    #receptionist{
        height: 100%;
        display: flex;
        align-content: center;
        align-items: center;

        background: #10100f;
        color: #f8ffe8;
    }
    form {
        width: 40%;
        margin: auto;

    }
    .glyphicon{
        font-size: 90px;
        color: #801b2c;
    }
    #footer{
        background: #3c3c3c;
        color: black;
        height: 10%;
        align-content: center;
        padding-top: 30px;
    }

</style>
<?php require "navbar.php"?>
<body>

<div id="receptionist">
    <div class="container text-center">
        <span class="glyphicon glyphicon-user"></span>
        <h2>Receptionist</h2>
        <form action="#">
            <input type="vacant" class="form-control" placeholder="Vacant">
            <!--<label class="radio-inline"><input type="radio" name="optradio">2nd floor</label>-->
            <!--<label class="radio-inline"><input type="radio" name="optradio">3rd floor</label>-->
            <!--<label class="radio-inline"><input type="radio" name="optradio">4th floor</label>-->
            <!--<label class="radio-inline"><input type="radio" name="optradio">Executive-room</label>-->
            <!--<label class="radio-inline"><input type="radio" name="optradio">Presidential-suite</label>-->
            <div class="form-group">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="#">1st Floor</a></li>
                        <li><a href="#">2nd Floor</a></li>
                        <li><a href="#">3rd Floor</a></li>
                        <li><a href="#">4th Floor</a></li>
                        <li><a href="#">Executive Floor </a></li>
                        <li><a href="#">Presidential Suite</a></li>
                    </ul>
                </div>

                <input type="number" class="form-control" required placeholder="Amount">
                <select class="form-control" id="sel1">
                    <option>cash</option>
                    <option>card</option>

                </select>

            </div>
            <button class="btn btn-block btn-primary">Select</button>
        </form>
    </div>
</div>
<div id="footer">
    <div class="container text-center">
        Copyright &copy;2018 Nasra
    </div>
</div>
</body>
</html>