<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> form login </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
    <form action="" method="post" class="form" > 
        <div class="main">
    <div class="top">
        <h1>Create An Account</h1>
        <p>Enter your personal Details to Create account</p>
    </div>
    <div class="midle">
        <p>Your Name</p>
        <input type="text" name="Name" id=""><br>
        <p>Yout Email</p>
        <i class="fa fa-envelope icon"></i>
        <input type="text" name="email" ><br>
        <p>Username</p>
        <input type="text" name="username" value=""><br>
        <p>Password</p>
        <input type="password" name="Password" >
    </div>
        <div class="condition">
            <input type="checkbox" name="I agree and accept the  " > I agree and accept the 
            <a href="#"> terms and condition </a> 
        </div>
        <input type="submit"  name="btn" class="submit" value="Create Account ?">
        <!-- <button name="btn" id="btnsubmit" class="mybutton">Create Account ?</button> -->    
        <div class="down">
            <p>Already have an account ?  <p><a href="#">log in</a>
        </div>
    
    </div>
    </form>
</center>
    <?php

if(isset($_POST['btn']))
{
  $Name = $_POST["Name"];
  $email = $_POST["email"];
  $username = $_POST["username"];
  $pass = $_POST["Password"];
}
?>
<center>
    <br>
    <br>
    <table border="1">
        <?php
            // ?>
            <tr>
                <td>Your Name</td>
                <td>email</td>
                <td>UserName</td>
                <td>pass</td>
            </tr>
        <tr>
            <td><?php echo $Name ?></td>
            <td><?php echo $email ?></td>
            <td><?php echo $username ?></td>
            <td><?php echo $pass ?></td>
        </tr>
    </table>
</center>
</body>
</html>
<?php 

?>