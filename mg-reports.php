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
    .outer,
    .outer1{
        display: flex;
        justify-content: space-between;
    }
    .inner{
        padding-right: 20px;
        width: 400px;
        height: 200px;
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
    <li><img src="group.png" width="15px" height="15px"><a href="gm-employee.php"> Employees</a></li>
    <li><img src="file.svg" width="15px" height="15px"><a href="mg-reports.php"> Reports</a></li>
    <li><img src="tasks.png" width="15px" height="15px">Projects</li>
    <li><img src="clock.png" width="15px" height="15px">Events</li>
    <li><img src="rating.png" width="15px" height="15px"><a href="performance.php">Performance </a></li>  <!--in case of choice to change salary-->
    <li><img src="settings.png" width="15px" height="15px"><a href="settings.php"> Settings</a></li>
</div>    
<div class="right-div">

<div class="outer">
    <div class="inner">
        <h6>  Daily Attendance</h6>
    <?php
    $con= new mysqli('localhost','root','','ems');
    $date = date('Y-M-d');
    $day= date('d');
    $sqlatt= "SELECT * from employee_attendance where Dated like '%$day%';";
    $q= mysqli_query($con, $sqlatt);
    $n= mysqli_num_rows($q);

    $sqlem= "SELECT * from employee_details;";
    $q1= mysqli_query($con, $sqlem);
    $total= mysqli_num_rows($q1);
    $abs= $total - $n;
    echo"
        $date <br>
        Present Employees: $n<br>
        No. of Absentees: $abs <br>";
    ?>
    <a href="#" style= "text-align: center;">View detailed report</a>
    </div>

    <div class="inner">
        <h6>  Sales Dept</h6>
        <?php
    $con= new mysqli('localhost','root','','ems');
    $sqls= "SELECT * from employee_details where Empno = 'Sa001';";
    $qs= mysqli_query($con, $sqls);
    foreach($qs as $srow){
        echo" Department Head: $srow[Fname] <br>";
    }   
    $sqlms= "SELECT * from employee_details where Empno like 'Sa%';";
    $qms= mysqli_query($con, $sqlms);
    $nms= mysqli_num_rows($qms);

    $sqlsa= "SELECT * from employee_details where Empno like 'Sa%' and Empstatus= 'Active';";
    $qsa= mysqli_query($con, $sqlsa);
    $nsa= mysqli_num_rows($qsa);
    
    $sqlsl= "SELECT * from employee_details where Empno like 'Sa%' and Empstatus= 'Leave';";
    $qsl= mysqli_query($con, $sqlsl);
    $nsl= mysqli_num_rows($qsl);
    
    $sqlsr= "SELECT * from employee_details where Empno like 'Sa%' and Empstatus= 'Retired';";
    $qsr= mysqli_query($con, $sqlsr);
    $nsr= mysqli_num_rows($qsr);

        echo "No. of Employees: $nms <br>
              No. of Active Employees: $nsa <br>
              Employees on leave: $nsl <br>
              Recently retired employees: $nsr <br>";
?>
    <a href="#" style= "text-align: center;">View detailed report</a>   
    </div>

</div>


</div>
</div>
</body>
</html>