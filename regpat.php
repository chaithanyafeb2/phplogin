<?php
include 'connect.php';
if(isset($_POST['sub'])){
    $t=$_POST['text'];
    $u=$_POST['user'];
    $p=$_POST['pass'];
    $q=$_POST['dt'];
    $i="insert into patient(name,phone,age,dat)value('$t','$u','$p','$q')";
    mysqli_query($con, $i);
    echo "Patient Succesfully Registered";
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Dialysis Treatment</title>
        <style>
        .me{
                background-color: #2980B9;
                
                height: 50px;
                width: auto;
            }
            a{
                color: white;
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
    <a href="staffhome.php">Home</a>
       
            <a href="https://www.linkedin.com/in/gangisetty-sai-krishna-chaithanya-ab76bb16a/" target="blank">Developer</a>
            <a href="logout.php">Logout</a>
        </div><br><br><br>
        <form method="POST" enctype="multipart/form-data">
            <table border='1'>
                <tr>
                    <td>
                        Name
                        <input type="text" name="text">
                    </td>
                </tr>
                <tr>
                    <td>
                        Phone Number
                        <input type="number" name="user">
                    </td>
                </tr>
                <tr>
                    <td>
                        Age
                        <input type="number" name="pass">
                    </td>
                </tr>
                <tr>
                    <td>
                        Date
                        <input type="date" name="dt">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="submit" name="sub">
                               
                    </td>
                </tr>
            </table>
    </body>
</html>
