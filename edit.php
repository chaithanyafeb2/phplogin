<?php
include'connect.php';
if(isset($_POST['sub'])){
    $t=$_POST['text'];
    $u=$_POST['user'];
    $p=$_POST['pass'];
    $c=$_POST['city'];
    $g=$_POST['gen'];
    if($_FILES['f1']['name']){
    move_uploaded_file($_FILES['f1']['tmp_name'], "image/".$_FILES['f1']['name']);
    $img="image/".$_FILES['f1']['name'];
    }
    else{
        $img=$_POST['img1'];
    }
    $i="update reg set name='$t',username='$u',password='$p',city='$c',gender='$g',image='$img' where id='$_SESSION[id]'";
    mysqli_query($con, $i);
    header('location:home.php');
}
     $s="select * from reg where id='$_SESSION[id]'";
    $qu= mysqli_query($con, $s);
    $f=mysqli_fetch_assoc($qu);
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
<form method="POST" enctype="multipart/form-data">
            <table border='1'>
                <tr>
                    <td>
                        Name
                        <input type="text" name="text" value="<?php echo $f['name']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        Username
                        <input type="text" name="user" value="<?php echo $f['username']?>">
                    </td>
                </tr>
               
                <tr>
                    <td>
                        city
                        <select name="city">
                            <option value="">-select-</option>
                            <option value="NLR"<?php if($f['city']=='NLR'){ echo "selected='selected'";}?>>Nellore</option>
                            <option value="HYD"<?php if($f['city']=='HYD'){ echo "selected='selected'";}?>>Hyderabad</option>
                    </td>
                </tr>
                <tr>
                    <td>
                        Gender
                        <?php if($f['gender']=='male'){
                            ?>
                          <input type="radio"name="gen" id="gen" value="male" checked>
                        <?php
                        } else {
?>
                        <input type="radio"name="gen" id="gen" value="male">
                        <?php } ?>male
                       <?php if($f['gender']=='female'){
                            ?>
                          <input type="radio"name="gen" id="gen" value="female" checked>
                        <?php
                        } else {
?>
                        <input type="radio"name="gen" id="gen" value="female">
                        <?php } ?>female
                    </td>
                </tr>
                <tr>
                    <td>
                        Image
                        <img src="<?php echo $f['image']?>" width="100px" height="100px">
                        <input type="file" name="f1">
                        <input type="hidden" name="img1" value="<?php echo $f['image']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="submit" name="sub">
                               
                    </td>
                </tr>
            </table>
</form>
</body>
</html>