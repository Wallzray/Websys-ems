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
        
    </div>
    <div class="parent-div">
<div class="left-div">
    <li></li>
    <li><a href="worker.php"><img src="home.png" width="15px" height="15px"> Home</a></li>
    <li><img src="file.svg" width="15px" height="15px"> Reports</li>
    <li><img src="calendar.svg" width="15px" height="15px"><a href="attendance.php"> Attendance</a></li>
    <li><img src="tasks.png" width="15px" height="15px"> Projects</li>
    <li><img src="clock.png" width="15px" height="15px"> Events</li>
    <li><img src="info.svg" width="15px" height="15px"> Getting Started</li>
    <li><img src="settings.png" width="15px" height="15px"><a href="wsettings.php"> Settings</a></li>
    
</div>    
<div class="right-div">
<b>DAILY ATTENDANCE: <br>
    PROVIDE YOUR ID NUMBER TO CONTINUE!
</b>
    <form action= "attendance.php" method= "post">
    <input type="text" name="empno" placeholder= "Id Number">
    <input type="submit" value="CONTINUE" name="submit">
    </form>
    <?php
    $con= new mysqli('localhost','root','','ems');
    if(isset($_POST['submit'])){
    $empno= $_POST['empno'];
    $day= date("Y-m-d");
    

    $sql= "INSERT INTO employee_attendance VALUES('$day', '$empno'); ";
    $r= mysqli_query($con, $sql);
    if($r){        echo 'attendence recorded';
    }
    else{
        echo 'error:'. mysqli_error($con);
    }
}
    ?>
</div>
</div>
</body>
</html>