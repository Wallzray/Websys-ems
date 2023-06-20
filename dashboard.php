
<?php


session_start();
if(isset($_POST["submit"])){
$empno = $_POST["empno"];
$password = $_POST["password"];
}
    
// check whether user exists
$q1= "SELECT * from employee_admin where Empno= '$empno';";
$row= mysqli_query($con, $q1);
$num= mysqli_num_rows($row);
if($num < 1){
    $sqli= "INSERT INTO employee_admin values('$empno', '$password');";
    mysqli_query($con, $sqli);
    $p= "SELECT * from employee_admin where Empno= '$empno';";
    $w= mysqli_query($con, $p);
    $n= mysqli_num_rows($w);
   for($a=1; $a <= $n; $a++){
    $rp= mysqli_($w);
    $rpassword= $rp[1];
    $rempno= $rp[0];
}


   if($empno== "Ge001"){
        if($empno== "Ge001" and $rpassword== $password){
       require_once 'general.php';
       }
       else{echo "Password incorrect";}
    }
    
    if($empno= "Hr001"){
        if($empno== "Hr001" and $rpassword== $password ){
        require_once 'hr.php';
      }
       else{echo "Password incorrect"; $att= include 'login.php'; }
    }
    else{
        require_once 'worker.php';
    }
}
elseif ($num == 1) {
    $p= "SELECT * from employee_admin where Empno= '$empno';";
    $w= mysqli_query($con, $p);
    $n= mysqli_num_rows($w);
   for($a=1; $a <= $n; $a++){
    $rp= mysqli_fetch_array($w);
    $rpassword= $rp[1];
    $rempno= $rp[0];
}

   if($empno== "Ge001"){
        if($empno== "Ge001" and $rpassword== $password){
       require 'general.php';
       }
       else{echo "Password incorrect";}
    }
    
    if($empno= "Hr001"){
        if($empno== "Hr001" and $rpassword== $password ){
        require 'hr.php';
      }
       else{echo "Password incorrect"."<br>"; include 'login.php'; }
    }
    else{
        require 'worker.php';
    }
}    
    
else{
    echo "User already exists";
}


?>
