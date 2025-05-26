
    <?php

$servername ="localhost";
$username="root";
$passwords="";
$db="login_school";

$conn= mysqli_connect($servername, $username, $passwords, $db);
session_start();
$message=$_SESSION['message'];

if($conn){
    //echo"connected";
}
else{
    die("error". mysqli_connect_error());
}


    if(isset($_POST['submit'])){

        $username = $_POST['userName'];
        $password = $_POST["password"];
      

        //sql to select if there is the detail in db
        $sql = "SELECT * FROM `admin` WHERE username = '$username' AND passwords = '$password'";
       //execute
        $result = mysqli_query($conn, $sql);
 //counts the number of account with same username and passwords
        $count = mysqli_num_rows($result);
        //put the count results into one associative array
        // $row = mysqli_fetch_assoc($result);

        //checks username is available or not
        if($count==1){
           
            $_SESSION['username']= $username;
            $_SESSION["loggedin"]= true;
            header("location: dash.php");
        }
        else{
            $_SESSION["loggedin"]= false;
            $message = "Username not found";
        }
       
    }
    ?>

      