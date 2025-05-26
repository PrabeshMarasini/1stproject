<?php
require_once('./config.php');

if(!isset($_SESSION['loggedin']) | $_SESSION['loggedin']==false){
    $_SESSION['message'] = $message;
    header('location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sudent's Panel</title>
    
    <link rel="stylesheet" href="./dash.css">
</head>
<body>
     <div class="side-menu">
        <div class="brandname">
            <h1>Welcome</h1>
        </div>
        <ul>
            <li><img src="./photo/dashboard.png" alt="">&nbsp;Dashboard</li>
            <li><img src="./photo/info.png" alt="">&nbsp;About you</li>
            <li><img src="./photo/reading-book (1).png" alt="">&nbsp;Report Card</li>
            <li><img src="./photo/reading-book (1).png" alt="">&nbsp;Homeworks</li>
            <li><img src="./photo/info.png" alt="">&nbsp;Subjects</li>
            <li><img src="./photo/payment.png" alt="">&nbsp;Fee Payment</li>
            <li><a href="./logout.php"><strong>Log Out</strong></li>
        </ul>
    </div> 
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><img src="./photo/search.png" alt=""></button>
                </div>
                <div class="user">
                    <img src="./photo/notifications.png" alt="">
                    <div class="img-case">
                        <img src="./photo/user.png" alt="">
                    </div>
                </div>
                </div>
            </div>
        
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>10</h1>
                        <h3>Subjects</h3>
                    </div>
                    <div class="icon-case">
                        <img src="./photo/students.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>2</h1>
                        <h3>Report cards</h3>
                    </div>
                    <div class="icon-case">
                        <img src="./photo/students.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>10</h1>
                        <h3>Contacts of Teacher</h3>
                    </div>
                    <div class="icon-case">
                        <img src="./photo/teachers.png" alt="">
                    </div>
                </div>
             
            </div>
            <div class="content-2">
                <div class="homework">
                    <div class="title">
                        <h2>Dashboard</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Subject</th>
                            <th>Dated on</th>
                            <th>Option</th>
                           </tr>
                           <tr>
                            <td>Science Homework</td>
                            <td>2022/10/22</td>
                            <td><a href="#" class="btn">View</a></td>
                           </tr>
                           <tr>
                            <td>Social Homework</td>
                            <td>2022/10/22</td>
                            <td><a href="#" class="btn">View</a></td>
                           </tr>
                           <tr>
                            <td>Maths Homework</td>
                            <td>2022/10/22</td>
                            <td><a href="#" class="btn">View</a></td>
                           </tr>
                           <tr>
                            <td>Fee Detail of November</td>
                            <td>2022/11/3</td>
                            <td><a href="#" class="btn">View</a></td>
                           </tr>
                           <tr>
                            <td>Second Terminal Exam Routine</td>
                            <td>2022/11/03</td>
                            <td><a href="#" class="btn">View</a></td>
                           </tr>
                    </table>
                </div>
                <div class="teachers">
                    <div class="title">
                        <h2>Teachers</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Profile</th>
                            <th>Name</th>
                            <th>Subject</th>
                            <th>Option</th>
                        </tr>
                        <tr>
                            <td><img src="./photo/user.png" alt=""></td>
                            <td>Ram Thapa</td>
                            <td>English</td>
                            <td><img src="./photo/info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="./photo/user.png" alt=""></td>
                            <td>Hemant Shrestha</td>
                            <td>Science</td>
                            <td><img src="./photo/info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="./photo/user.png" alt=""></td>
                            <td>Sita Thapa</td>
                            <td>Nepali</td>
                            <td><img src="./photo/info.png" alt=""></td>
                        </tr>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>