<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<style>
    html,body{
        height: 100%;
    }

    #home{
        height: 100%;
        display: flex;
        align-content: center;
        align-items: center;

    }
    .jumbotron{
        background: black;
    }
    .jumbotron h1{
        color: white;
    }
    .jumbotron p{
        color: white;
    }
    .jumbo {
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0;
        width: 100%;

    }
    #home {
        background: #f8ffe8;
        color: black;
        /*background-image: url("stoas .jpg");*/
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
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<div id="home">
    <div class="container jumbo">
        <div class="jumbotron text-center">
            <h1>ECO-HOTEL KENYA</h1>
            <p>Welcome to the eco-hotel kenya.Its all about comfort and best services.</p>

        </div>


    </div>

</div>
<div id="footer">
    <div class="container text-center">
        Copyright &copy;2018 Ramon
    </div>
</div>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/jquery.easing.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/smoothScroll.js"></script>
<script>
    $('a[href^="#"]').smoothPageScroll();
</script>
</body>
</html>