<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    require "meta.php";
    ?>
<style>
body{
    background-color: rgb(253, 192, 253);
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    margin: 0;

    }
.main{
    background-color: rgb(146, 6, 146);
    text-align: center;
}
strong{
        font-size: 20px;
}
/* .main img{ */
    /* margin-left: 140px; */

li{
    list-style-type: none;
}   
.parent-div{
    display: grid;
    display: flex;
}
.left-div{
    font-size: 20px;
    width: 150px;
    /* height: 500px; */
    background-color: white;
    border-right: solid 2px white;

}
.left-div li{
   padding-bottom: 15px; 
   padding-left: 5px;
}
.right-div{
    font-size: 20px;
    margin-left: 20px;
    width: 1000px;
    /* height: 500px; */
    background-color: white;
    border-right: solid 2px white;
}

.left-div{
    text-decoration: none;
    text-decoration-line: none;
}
/* @media screen and (max-width:615px){
   .right-div{
    margin: 20px 0 0 0;
    display: grid;
    gap: 2 rem;
    grid-template-columns: repeat(4, minmax(0, 1fr));
}} */

a{
    text-decoration: none;
}
.choice-button
{   
    margin-left: 350px    
}

.w3-bar{width:100%;overflow:hidden}.w3-center .w3-bar{display:inline-block;width:auto}
    .w3-bar .w3-bar-item{padding:8px 16px;float:left;width:auto;border:2px solid lightsteelblue ;display:block;outline:0}
    .cities{ margin-left: 100px;}
    .w3-bar .w3-dropdown-hover,.w3-bar .w3-dropdown-click{position:static;float:left}
    .w3-bar .w3-button{white-space:normal}
    .w3-bar-block .w3-bar-item{width:100%;display:block; text-align:left; border:none; white-space:normal;float:none;outline:0}
    .w3-bar-block.w3-center .w3-bar-item{text-align:center}.w3-block{display:block;width:100%}
    
    .w3-bar{width:100%;overflow:hidden; margin-left: 400px;}
table{
    /* padding-left: 20px; */
    background-color: coral;
    color: black;
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
    
    <li><img src="home.png" width="15px" height="15px"><a href="hr.php"> Home</a> </li>
    <li><img src="group.png" width="15px" height="15px"><a href="hr-employee.php"> Employees</a></li>
    <li><img src="file.svg" width="15px" height="15px"><a href="mg-reports.php"> Reports</a></li>
    <li><img src="tasks.png" width="15px" height="15px"> Projects</li>
    <li><img src="clock.png" width="15px" height="15px"> Events</li>
    <li><img src="rating.png" width="15px" height="15px"> Performance</li>
    <li><img src="settings.png" width="15px" height="15px"><a href="settings.php"> Settings</a></li>
</div>    
<div class="right-div">
<div class="select-buttons">
        <button class="choice-button1" onclick ="select('overview1')">OVERVIEW</button> 
        <button class="choice-button" onclick ="select('actions1')">ACTIONS</button>
        <button class="choice-button" onclick ="select('applications1')">APPLICATIONS</button>
    </div><br>
    <div class="overview" id="overview1">
    SEARCH FOR EMPLOYEE: <br>
    SEARCH BY:
     <form action="hr-employee.php" method="post">
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
   
      echo " 
        SEARCH RESULTS
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
      echo"<tr>
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
else{


    
}

   ?>
   
    </div>

    <div class="actions" id="actions1" style="display:none">
    ADD EMPLOYEES
    <br>
    <form action="hr-form.php" method="post">
        FIRST NAME: <br>
        <input type="text" name="fname"> <br>
        LAST NAME: <br>
        <input type="text" name="lname"> <br>
        AGE: <br>
        <input type="number" name="age"> <br>
        POSITION: <br>
        <input type="text" name="position"> <br>
        EMAIL: <br>
        <input type="email" name="mail"> <br>
        PHONE: <br>
        <input type="tel" name="tel"> <br>
        STATUS: <br>
        <input type="text" name="status"> <br>
        ID NUMBER: <br>
        <input type="text" name="empno"> <br>
        <input type="submit" name="esub" value= "ADD">
    </form>

   <b>REMOVE EMPLOYEE</b> <br>
    <form action="hr-form.php" method="post">
        PROVIDE THE EMPLOYEE'S ID NUMBER: <br>
        <input type="text" name="eno"> <br>
        <input type="submit" name="esub1" value= "REMOVE">
    </form>
    </div>

    <div class="applications" id="applications1" style= "display:none;">
    <?php 
    // $con= new mysqli('localhost','root','','ems');

    $sqlap= "SELECT * from applicant_table";
    $ape= mysqli_query($con, $sqlap);
    $apn= mysqli_num_rows($ape);
if($ape){
    if($apn == 0){
        echo "There are no applications yet";
    }
    else{
    
        echo 
        "<table>
        <th width= '150px'>First Name</th>
        <th width= '150px'>Last Name</th>
        <th width= '180px'>Email</th>
        <th width= '150px'>Phone</th>
        </table>";
for($a= 1; $a<=$apn; $a++){
       $r= mysqli_fetch_array($ape);
     echo"
     <table>
        <td width= '150px'>$r[0]</td>
        <td width= '150px'>$r[1]</td>
        <td width= '150px'>$r[2]</td>
        <td width= '150px'>$r[3]</td>
        </table>";
}    
} 
} 
else{
    echo "Error: ". mysqli_error($con);
} 
    ?>
    </div>
    
</div>
</div>

<script>
function select(selectName) {
    var i;
    var x = document.getElementsByClassName("overview");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    var y = document.getElementsByClassName("actions");
    for (i = 0; i < y.length; i++) {
      y[i].style.display = "none";
    }
    var z = document.getElementsByClassName("applications");
    for (i = 0; i < z.length; i++) {
      z[i].style.display = "none";
    }
    document.getElementById(selectName).style.display = "block";
  }
</script>
</body>
</html>