<!DOCTYPE html>
<html lang="en">
<head>
   <?php 
        require 'meta.php';
   ?>
   <style>
    a{
        color: rgb(124, 6, 124);
        text-decoration: none;
    }
   </style>
</head>
<body>
    <div class="main">
        
       <br><strong>EMPLOYEE MANAGEMENT SYSTEM</strong><br><br>
        <!-- <img src="prof.PNG" alt="profile"> -->
    </div>
    <div class="parent-div">
<div class="left-div">
    <li></li>
    <li><img src="home.png" width="15px" height="15px"><a href="worker.php"> Home</a></li>
    <li><img src="file.svg" width="15px" height="15px"><a href="mg-reports.php"> Reports</a></li>
    <li><img src="calendar.svg" width="15px" height="15px"><a href="attendance.php"> Attendance</a></li>
    <li><img src="tasks.png" width="15px" height="15px"> Projects</li>
    <li><img src="clock.png" width="15px" height="15px"> Events</li>
    <li><img src="info.svg" width="15px" height="15px"> Getting Started</li>
    <li><img src="settings.png" width="15px" height="15px"><a href="wsettings.php"> Settings</a></li>
    
</div>    
<div class="right-div">
    <br>
    <b>WELCOME, <?php
    // session_start();
    $con= new mysqli('localhost','root','','ems');
    $_SESSION["empno"] = $_POST["empno"];
    $empnum= $_SESSION["empno"];
     $sqlname= "SELECT Fname from employee_details where Empno= '$empnum' ;";
     $sqlne= mysqli_query($con, $sqlname);
     foreach($sqlne as $nrow){
        echo $nrow['Fname'];     }
    //  $i= 1; $i<=1; $i++
    ?>

    </b> <!--  ?php include "dashboard.php"?> -->
    <br><?php
        $date = date('Y-M-D');
        echo $date;
    ?>
    
</div>
</div>
</body>
</html>