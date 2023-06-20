<!DOCTYPE html>
<html lang="en">
<head>
   <?php 
        require 'meta.php';
   ?>
   <style>
    a{
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
    <li><a href="worker.php"><!--<img src="" alt="home"> -->Home</a></li>
    <li><img src="file.svg" width="15px" height="15px"><a href="mg-reports.php"> Reports</a></li>
    <li><img src="calendar.svg" width="15px" height="15px"> Attendance</li>
    <li><img src="tasks.png" width="15px" height="15px"> Projects</li>
    <li><!--<img src="" alt="alert">--> Messages</li>
    <li><!--<img src="" alt="event">--> Events</li>
    <li><!--<img src="" alt="pay">--> Getting Started</li>
    <li><a href="wsettings.php">Settings</a><!--<img src="" alt="settings">--></li>
    
</div>    
<div class="right-div">
    <br>
    <b>SETTINGS</b> <br>
        UPDATE PASSWORD: <br>
        <form action="setform.php" method="post">
            CURRENT PASSWORD: <input type="password" name="currentpassword"><br><br>
            ENTER NEW PASSWORD: <input type="password" name="newpassword" id="newpass"> <br><br>
            CONFIRM PASSWORD: <input type="password" name="newpassword" id="newpass"> <br><br>
            <input type="submit" value="SUBMIT" name="submit1">
        </form><br>
         SUPPORT: <br>
         RAISE YOUR CONCERN
         <form action="setform.php" method="post">
            <input type="text" name="support" id="support" placeholder="Type your message here..."><br><br>
            <input type="submit" value="SUBMIT" name="submit3">
         </form>
</div>
</div>
</body>
</html>