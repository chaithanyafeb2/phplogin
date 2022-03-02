<?php
include'connect.php';
if(isset($_POST['sub']) && ($_POST["vercode"] == $_SESSION["vercode"]) )
{
    $u=$_POST['user'];
    $p=$_POST['pass'];
    $p=md5($p);
    $s= "select * from staff where username='$u' and password= '$p'";   
   $qu= mysqli_query($con, $s);
   if(mysqli_num_rows($qu)>0)
   {
      $f= mysqli_fetch_assoc($qu);
      $_SESSION['id']=$f['id'];
      header ('location:staffhome.php');
   }
   else{
       echo 'username or password does not exist';
   }
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
            <a href="login.php">Admin Login</a>
            <a href="login2.php">Staff Login</a>
            <a href="login3.php">Doctor Login</a>
           <!-- <a href="reg.php">Signup</a> -->
            <a href="https://www.linkedin.com/in/gangisetty-sai-krishna-chaithanya-ab76bb16a/" target="blank">Developer</a>
        </div><br><br><br>
        <form method="POST" enctype="multipart/form-data" align:"center">
            <table border='1'>
                
                <tr>
                    <td>
                        Staff Username :
                        <input type="text" name="user">
                    </td>
                </tr>
                <tr>
                    <td>
                        Staff password :
                        <input type="password" name="pass">
                    </td>
                </tr>
                <tr>
                    <td><input type="text" name="vercode" placeholder="Verfication Code" required="required">
                        Captcha :
                        <img src="captcha.php" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="sub" value="submit">
                    </td>
                </tr>
            </table>
    </body>
</html>
