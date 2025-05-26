<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" href="./form.css">
</head>
<body>
   
<?php
    session_start();
    $message;
    $message=$_SESSION['message'];
    if (isset($_SESSION['loggedin'])){
        if ($_SESSION['loggedin'] == true){
            header('location: dash.php');
        }
    }
    ?>
 
    <div class="container">
        <div class="overlay">
            <!--No content-->
        </div>
    
    <div class="title">
        <h1 class="titleL">Login</h1>
        <p>Student's Login Page</p>
        <span class="subTitle">Welcome Back!</span><br>
        <?php echo $message; $_SESSION['message']= ""; ?>
    </div>
    <!-------------------------------->
    <form action="./dash.php" method="POST">
        <div class="user">
            <label for="username" >Username</label>
            <input type="text" id="username" name="userName" placeholder="Enter your Username"  required>
        </div>
<div class="user">
    <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your Password" required>
</div>
<div class="user">
    
            <input type="submit" id="submitBtn" name="submit" value="Login">
</div>

</div>



    </form>
    
</body>
</html>