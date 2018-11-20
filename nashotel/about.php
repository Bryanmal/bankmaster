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
    #about{
        background: #fbeea6;
        color: black;
    }
    #about{
        height: 100%;
        display: flex;
        align-content: center;
        align-items: center;
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
<div id="about">
    <div class="container text-center">

        <div class="row">
            <div class="col-sm-4">
                <h2>About-Us</h2>
                <p>We have been delivering for 2years now.We are here to offer good services</p>
            </div>
            <div class="col-sm-4">
                <h2>Location</h2>
                <P>We are located in Athi-River.Off the main road.Telephone:0720100100</P>
            </div>
            <div class="col-sm-4">
                <h2>Services</h2>
                <p>Quality& Affordable</p>
            </div>
        </div>
    </div>
</div>
<div id="footer">
       <div class="container text-center">
           Copyright &copy;2018 Nasra
       </div>
   </div>
</body>
</html>