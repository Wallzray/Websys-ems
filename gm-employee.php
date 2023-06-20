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
    <li><img src="group.png" width="15px" height="15px"><a href="gm-employee.php"> Employees</a></li>
    <li><img src="file.svg" width="15px" height="15px"> Reports</li>
    <li><img src="tasks.png" width="15px" height="15px"> Projects</li>
    <li><img src="clock.png" width="15px" height="15px"> Events</li>
    <li><img src="rating.png" width="15px" height="15px"><a href="performance.php"> Performance </a></li>  <!--in case of choice to change salary-->
    <li><img src="settings.png" width="15px" height="15px"><a href="settings.php"> Settings</a></li>
</div>    
<div class="right-div">
<div class="overview" id="overview1">
    SEARCH FOR EMPLOYEE:
    SEARCH BY: <form action="hr-employee.php" method="post">
    <select name="search">
        <option>First Name</option><br>
        <option>Last Name</option><br>
        <option>Id Number</option><br>
        <option>Status</option>
    </select><br>
    <input type="text" name="value"> <input type="submit" name="search" value="search">
    </form>
    <table border= 1>
        <th>Empno</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th>Position</th>
        <th>Salary</th>
        <th>Email</th>
        <th>Telephone</th>
        <th>Work status</th>
    <?php
    $con= new mysqli('localhost','root','','ems');
    $sqlw="SELECT * from employee_details;";
    $e= mysqli_query($con, $sqlw);
    $n= mysqli_num_rows($e);
    for($v=1; $v<= $n; $v++){
        $wrow= mysqli_fetch_array($e);
        echo 
    "<tr>
          <td height= 15px>$wrow[8]</td>
          <td height= 15px>$wrow[0]</td>
          <td height= 15px>$wrow[1]</td>
          <td height= 15px>$wrow[2]</td>
          <td height= 15px>$wrow[3]</td>
          <td height= 15px>$wrow[4]</td>
          <td height= 15px>$wrow[5]</td>
          <td height= 15px>$wrow[6]</td>
          <td height= 15px>$wrow[7]</td>
      </tr></br> ";
    }?>
    </table><br><br>
    <?php
   if(isset($_POST['search'])){
   $value=$_POST['value'];
    
    $sqls= "SELECT * FROM employee_details WHERE Fname = '$value' OR Lname = '$value' OR Empno= '$value' OR Empstatus= '$value';";
    $s=mysqli_query($con, $sqls);
    $n= mysqli_num_rows($s);
   if($s){
    echo "SEARCH RESULTS
    <table border= 1>
       <th>Empno</th>
       <th>First Name</th>
       <th>Last Name</th>
       <th>Age</th>
       <th>Position</th>
       <th>Salary</th>
       <th>Email</th>
       <th>Telephone</th>
       <th>Work status</th>";
   for($i=1; $i<= $n; $i++){
      $srow= mysqli_fetch_array($s);
      echo " 
      <tr>
          <td>$srow[8]</td>
          <td>$srow[0]</td>
          <td>$srow[1]</td>
          <td>$srow[2]</td>
          <td>$srow[3]</td>
          <td>$srow[4]</td>
          <td>$srow[5]</td>
          <td>$srow[6]</td>
          <td>$srow[7]</td>
      </tr>
   </table>";
    }
    }
    else{
          echo "Error:".mysqli_error($con);
    }

}
?>
   
</div>
</div>
</div>
</body>
</html>