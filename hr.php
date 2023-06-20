<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R-EMS</title>
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
    <li><img src="home.png" width="15px" height="15px"><a href="hr.php">Home</a> </li>
    <li><img src="group.png" width="15px" height="15px"><a href="hr-employee.php">Employees</a></li>
    <li><img src="file.svg" width="15px" height="15px"><a href="mg-reports.php"> Reports</a></li>
    <li><img src="tasks.png" width="15px" height="15px">Projects</li>
    <li><img src="clock.png" width="15px" height="15px">Events</li>
    <li><img src="rating.png" width="15px" height="15px"><a href= "performance.php"> Performance </a></li>  <!--in case of choice to change salary-->
    <li><img src="settings.png" width="15px" height="15px"><a href="settings.php"> Settings</a></li>
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
        echo $nrow['Fname'];     
    }

    //  $i= 1; $i<=1; $i++
    ?></b>
    <br><?php
        $date = date('Y-M-d');
        echo $date;
    ?>

<div>
    
<h5>KEEP PRODUCTIVE EVERYDAY</h5>

<button class="task-button" onclick ="openTask('task-form')">Create Tasks</button>
<!-- CREATE TASKS -->
<div class="tasks">
    <form action="hr-form.php" method="post">
        Date for the Task: <br>
            <input type="date" name="date"><br>
        Time to do the Task: <br>
            <input type="time" name="task_time"><br>
        Name of the task: <br>
            <input type="text" name="taskname" placeholder="Description of your task"><br>
        <input type="submit" value="SAVE" name="savetask">
    </form>
    

</div>

<h6>FIND YOUR DAILY TASKS</h6>

<table>
    <th width= '100px'>Id</th>
    <th width= '100px'>Time</th>
    <th width= '100px'>Task</th>
    <th width= '100px'>Status</th>

    <?php
    $con= new mysqli('localhost','root','','ems');
    $_SESSION["empno"] = $_POST["empno"];
    $empno= $_SESSION["empno"];
    $date = date('d');
    $sqlret= "SELECT * from employee_tasks where Taskdate like '$date';";
    $eret= mysqli_query($con, $sqlret);
    $nret= mysqli_num_rows($eret);
    if($nret== 0){
        echo "You have nothing here, create tasks";
    }
    else{
    for($i=1; $i<=$nret; $i++){
    $row= mysqli_fetch_array($eret);
    echo "
    <tr>
        <td width= '100px'>$row[0]</td>
        <td width= '100px'>$row[3]</td>
        <td width= '100px'>$row[4]</td>
        <td width= '100px'>
        <input type='radio' name='status' value='Done'>Complete
        <input type='radio' name='status' value='Pending'>Pending</td>
    </tr>";
}
}
    if(isset($_POST['status'])){
    $status=$_POST['status'];
    $sqlstat= "INSERT into employee_tasks(Taskstatus) values('$status')";
    $estat= mysqli_query($sqlstat);
    }
?>

</table>

</div>
</div>
</div>
<script>
    function openTask(taskName){
        var i;
    var x = document.getElementsByClassName("tasks");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    document.getElementById(cityName).style.display = "block";  
    }
</script>



</body>
</html>