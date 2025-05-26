<?php
require_once('./teacherdash.php');

if(!isset($_SESSION['loggedin']) | $_SESSION['loggedin']==false){
    $_SESSION['message'] = $message;
    header('location: teach.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher's Panel</title>
    
    <link rel="stylesheet" href="./dash.css">
</head>
<body>
     <div class="side-menu">
        <div class="brandname">
            <h1>Welcome</h1>
        </div>
        <ul>
            <li><img src="./photo/dashboard.png" alt="">&nbsp;Dashboard</li>
            <li><img src="./photo/info.png" alt="">&nbsp;Teacher's Profile</li>
            <li><img src="./photo/reading-book (1).png" alt="">&nbsp;Books</li>
            <li><img src="./photo/reading-book (1).png" alt="">&nbsp;Submitted Homeworks</li>
            <li><img src="./photo/info.png" alt="">&nbsp;Management Dash</li>
            <li><img src="./photo/payment.png" alt="">&nbsp;Salary Details</li>
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
                        <h1>4 refrences</h1>
                        <h3>Books</h3>
                    </div>
                    <div class="icon-case">
                        <img src="./photo/students.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>507</h1>
                        <h3>Students</h3>
                    </div>
                    <div class="icon-case">
                        <img src="./photo/students.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>2022</h1>
                        <h3>Your Schedule</h3>
                    </div>
                    <div class="icon-case">
                        <img src="./photo/teachers.png" alt="">
                    </div>
                </div>
             
            </div>
            <div class="content-2">
                <div class="homework">
                    <div class="title">
                        <h2>Notices</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Subject</th>
                            <th>Dated on</th>
                            <th>Option</th>
                           </tr>
                           <tr>
                            <td>Teacher's Meeting</td>
                            <td>2022/10/22</td>
                            <td><a href="#" class="btn">View</a></td>
                           </tr>
                           <tr>
                            <td>Sports Meet 2022</td>
                            <td>2022/11/20</td>
                            <td><a href="#" class="btn">View</a></td>
                           </tr>
                           <tr>
                            <td>Principle's Message</td>
                            <td>2022/10/01</td>
                            <td><a href="#" class="btn">View</a></td>
                           </tr>
                           <tr>
                            <td>Salary Slip of October</td>
                            <td>2022/10/30</td>
                            <td><a href="#" class="btn">View</a></td>
                           </tr>
                           <tr>
                            <td>Second Terminal Exam Routine</td>
                            <td>2022/10/22</td>
                            <td><a href="#" class="btn">View</a></td>
                           </tr>
                    </table>
                </div>
                <div class="teachers">
                    <div class="title">
                        <h2>Assignment Submission Board</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Profile</th>
                            <th>Name</th>
                            <th>Submitted o</th>
                            <th>Class</th>
                            <th>Option</th>
                        </tr>
                        <tr>
                            <td><img src="./photo/user.png" alt=""></td>
                            <td>Shreeya Gurung</td>
                            <td>2 days ago</td>
                            <td>5</td>
                            <td><img src="./photo/info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="./photo/user.png" alt=""></td>
                            <td>Atif Nepali</td>
                            <td>3 day ago</td>
                            <td>8</td>
                            <td><img src="./photo/info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="./photo/user.png" alt=""></td>
                            <td>Arjun Bhandari</td>
                            <td>5 days ago</td>
                            <td>5</td>
                            <td><img src="./photo/info.png" alt=""></td>
                        </tr>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>