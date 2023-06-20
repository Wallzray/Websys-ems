<?php

$con= new mysqli('localhost','root','','ems');
   
  // adding employees
//  $con= new mysqli('localhost','root','','ems');
if(isset($_POST["esub"])){
       $fname=$_POST["fname"];
       $lname=$_POST["lname"];
       $age=$_POST["age"];
       $position=$_POST["position"];
       $mail=$_POST["mail"];
       $tel=$_POST["tel"];
       $status=$_POST["status"];
       $empno=$_POST["empno"];

       $sql= "INSERT INTO employee_details(Fname,Lname,Age,Position,Email,Phone,Empstatus,Empno) values('$fname','$lname','$age','$position','$mail','$tel','$status','$empno');";
       $e= mysqli_query($con, $sql);
       if($e == TRUE){
        echo "employee added". "<br>";
        include "hr-employee.php";
        }
        else{
          echo "Error ".mysqli_error($con);
       
  }
}


//removing employees
elseif(isset($_POST['e-sub1'])){
         $eno = $_POST['eno'];
    
    $sqld= "DELETE FROM employee_details WHERE Empno= '$eno';";
    $d = mysqli_query($con,  $sqld);
       
    if($d == TRUE){
      echo "employee removed". "<br>";
      include "hr-employee.php";
}
}


elseif(isset($_POST['savetask'])){
   // include "dashboard.php";
   session_start();
   // $_SESSION["empno"] = $_POST["empno"];
   // $empno= $_SESSION["empno"];
   $date=$_POST['date'];
   $task_time=$_POST['task_time'];
   $taskname=$_POST['taskname'];

   $sqltask= "INSERT into employee_tasks(Taskdate, Tasktime,Taskname) values('$date', '$task_time', '$taskname');";
   $etask= mysqli_query($con, $sqltask);
    if($etask){
        echo "Task created successfully";
   }
   else{
      echo "Error:".mysqli_error($con);
   }
   //  include "dashboard.php";
   
   }



?>