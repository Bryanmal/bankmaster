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
    #guest{
        background: #10100f;
        color: #f8ffe8;

        height: 100%;
        display: flex;
        align-content: center;
        align-items: center;
    }
    form {
        width: 40%;
        margin: auto;

    }
    .guest{
        padding-bottom: 30px;
    }
    #footer{
        background: #3c3c3c;
        color: black;
        height: 10%;
        align-content: center;
        padding-top: 30px;
    }
    .glyphicon{
        font-size: 90px;
        color: #fff33e;
    }
</style>
<?php require "navbar.php"?>
<body>
<div id="guest">
    <div class="container text-center">
        <span class="glyphicon glyphicon-user"></span>
        <h2 class="guest">Guest</h2>
        <form action="#">
            <div class="form-group">
                <input type="text" class="form-control" required placeholder="Name">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" required placeholder="Telephone Number">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" step="1" required placeholder="Duration(days)">
            </div>

            <div class="form-group">
                <label for="sel1"></label>
                <select class="form-control" id="sel1">
                    <option>1-bedroom</option>
                    <option>2-bedroom</option>
                    <option>Executive-room</option>
                    <option>Presidential-suite</option>
                </select>

            </div>
            <div class="form-group">

                <input type="number" class="form-control" required placeholder="Amount">

                <select class="form-control" id="sel1">
                    <option>cash</option>
                    <option>card</option>

                </select>

            </div>
            <button class="btn btn-block btn-primary">Submit</button>
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