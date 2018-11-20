<?php
if (isset($_POST["names"]))
{
    require "connect.php";

    extract($_POST);
    //edit tablename
    $query="insert into admin values(null,'$names','$password')";
    $result= mysqli_query($conn,$query);// or die(mysqli_error());
    if ($result)
        $message="<h4 class='text-primary text-center'>Admin $names logged in sucessfully </h4>";
    else
        $message="<h4 class='text-danger text-center'>$names already exists</h4>";
}



?>

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
    #admin{
        height: 100%;
        display: flex;
        align-content: center;
        align-items: center;

        background: #fbeea6;
        color: black;
    }
    #footer{
        background: #3c3c3c;
        color: black;
        height: 10%;
        align-content: center;
        padding-top: 30px;
    }
    /*style for form*/
    form {
        width: 35%;
        margin: auto;

    }
    .admin{
        padding-bottom: 30px;
    }

    .glyphicon{
        font-size: 90px;
        color: #10100f;
    }

</style>
<?php require "navbar.php"?>
<body>
<div id="admin">
    <div class="container text-center">
        <span class="glyphicon glyphicon-user"></span>
        <h2 class="admin">Admin</h2>
        <form action="#">
            <div class="form-group">
                User-name:<input type="user" class="form-control" id="email">
            </div>

            <div class="form-group">
                Password:<input type="password" class="form-control" id="password">
            </div>
            <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
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