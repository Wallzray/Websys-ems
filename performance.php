<!DOCTYPE html>
<html lang="en">
<head>
<?php 
        require 'meta.php';
   ?>
   <style>
    a{
    text-decoration: none;
    color: rgb(124, 6, 124);
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
    <li><img src="home.png" width="15px" height="15px"><a href="general.php"></a>Home</li>
    <li><img src="group.png" width="15px" height="15px">Employees</li>
    <li><img src="file.svg" width="15px" height="15px">Reports</li>
    <li><img src="tasks.png" width="15px" height="15px"> Projects</li>
    <li><img src="clock.png" width="15px" height="15px"> Events</li>
    <li><img src="rating.png" width="15px" height="15px"><a href="performance.php"> Performance</a> </li>
    <li><img src="settings.png" width="15px" height="15px"><a href="settings.php"> Settings</a></li>
</div>    
<div class="right-div">
    ASSESS EMPLOYEES' PERFORMANCE ACCORDING TO;
    <li onclick ="select('overview1')"> WORKING STATUS </li>
    <li onclick ="select('actions1')"> ATTENDANCE </li>
    <li onclick ="select('applications1')"> PROJECT INVOLVEMENT </li>

    <script>
function select(selectOpt) {
    var i;
    var x = document.getElementsByClassName("overview");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    var y = document.getElementsByClassName("actions");
    for (i = 0; i < y.length; i++) {
      y[i].style.display = "none";
    }
    document.getElementById(selectName).style.display = "block";
  }
</script>

</div>
</div>
</body>
</html>