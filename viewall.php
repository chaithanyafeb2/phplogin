<?php
include 'connect.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>VIT-AP</title>
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
    <a href="home.php">Home</a>
            <a href="viewall.php">All Users</a>
            <a href="https://www.linkedin.com/in/gangisetty-sai-krishna-chaithanya-ab76bb16a/" target="blank">Developer</a>
            <a href="logout.php">Logout</a>
        </div><br><br><br>
<table border='1'>
    <tr>
        <th>
            Name
        </th>
        <th>
            Username
        </th>
    </tr>

<?php
$sq="select * from reg";
$qu=mysqli_query($con,$sq);
while($f=  mysqli_fetch_assoc($qu)){
    ?>
    <tr>
        <td>
            <?php echo $f['name']?>
        </td>
        <td>
            <?php echo $f['username']?>
        </td>
    </tr>
    <?php
}
?>
</table>
</body>
</html>