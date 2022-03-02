<?php
include'connect.php';
     $s="select * from doctor where id='$_SESSION[id]'";
    $qu= mysqli_query($con, $s);
    $f=mysqli_fetch_assoc($qu);
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
    <a href="dochome.php">Home</a>
            
            <a href="https://www.linkedin.com/in/gangisetty-sai-krishna-chaithanya-ab76bb16a/" target="blank">Developer</a>
            <a href="logout.php">Logout</a>
        </div><br><br><br>
<table border='1'>
    <tr>
        <td>
            Name
        </td><td>
            
<?php echo $f['name'];?>
            </td>
    </tr>
    <tr>
    <td> Username</td>
    
    <td>
            
<?php
echo $f['username'];?>
        </td></tr>

  <tr><td> City </td>   <td>           
 <?php
 echo $f['city']."<br>";?></td></tr>
  <tr>
      <td>Gender</td>
      <td><?php
echo $f['gender']."<br>";?></td>
  </tr>
  <tr><td> Image</td><td>

 <img src="<?php
echo $f['image'];?>" width="100px" height="100px">
</td>

</tr>
</table>

<a href="patanaly.php">Patient Analysis</a>

    </body>
</html>