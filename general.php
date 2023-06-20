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
        <img src="logo.png" height="20px" width="20px">
       <br><strong>EMPLOYEE MANAGEMENT SYSTEM</strong><br><br>
        <!-- <img src="prof.PNG" alt="profile"> -->
    </div>
    <div class="parent-div">
<div class="left-div">
    <li></li>
    <li><img src="home.png" width="15px" height="15px"><a href="general.php"></a>Home</li>
    <li><img src="group.png" width="15px" height="15px"><a href="gm-employee.php"> Employees</a></li>
    <li><img src="file.svg" width="15px" height="15px"><a href="mg-reports.php"> Reports</a></li>
    <li><img src="tasks.png" width="15px" height="15px"> Projects</li>
    <li><img src="clock.png" width="15px" height="15px"> Events</li>
    <li><img src="rating.png" width="15px" height="15px"><a href="performance.php"> Performance </a></li>  <!--in case of choice to change salary-->
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
        echo $nrow['Fname'];     }
        ?>

<?php
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
    </b><br>
    
    
</div>
</div>
</body>
</html>