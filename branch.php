<?php
include'connect.php';
if(isset($_POST['sub']))
{
    $u=$_POST['bran'];
    $v=$_POST['amt'];
    $i="insert into branch(city,amt)value('$u','$v')";
    mysqli_query($con, $i);
    echo "Branch added successfully";
}
    ?>
<html>
    <head>
    <title>Dialysis Treatment</title>
        <style>
        .me{
                background-color: #2980B9;
                
                height: 50px;
                width: auto;
            }
            a{
                color: black;
                padding: 10px;
                font-size: 20px;
                text-decoration: none;
                margin: 10px;
                float: left;
            }
            a:hover{
                color: red;
            }
            body {
    text-align: center;
    background-color: rgb(243,250,250)
}
form {
    display: inline-block;
}
        </style>
    </head>
    <body>
    <div class="me">
    <a href="home.php">Home</a>
            <a href="viewall.php">All Users</a>
            <a href="https://www.linkedin.com/in/gangisetty-sai-krishna-chaithanya-ab76bb16a/" target="blank">Developer</a>
            <a href="logout.php">Logout</a>
        </div><br><br><br>
        <form method="POST" enctype="multipart/form-data">
City Name : <input type="text" name="bran">
Amount per patient : <input type="number" name="amt">
<input type="submit" value="submit" name="sub">

    </body>
</html>