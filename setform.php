<?php
    $con= new mysqli('localhost','root','','ems');
    session_start();
    $empno= $_SESSION['empno'];
if(isset($_POST['submit'])){
    $current=$_POST['currentpassword'];
    $new= $_POST['newpassword'];
    // $_POST['currentpassword'];
    $sqlpass="UPDATE employee_admin set Userpassword='$new' where Userpassword='$current';";
    $e= mysqli_query($con, $sqlpass);
    if($e){
        require "settings.php";
        echo "<center>Password Updated Successfully</center>";
    }
}

elseif (isset($_POST['submit1'])) {
    $current=$_POST['currentpassword'];
    $new= $_POST['newpassword'];
    // $_POST['currentpassword'];
    $sqlpass="UPDATE employee_admin set Userpassword='$new' where Userpassword='$current';";
    $e= mysqli_query($con, $sqlpass);
    if($e){
        require "wsettings.php";
        echo "<center>Password Updated Successfully</center>";
    }
}

elseif (isset($_POST['submit2'])) {
    $smessage= $_POST['support'];
    $sup= "INSERT INTO admin_support values '$empno', '$smessage';";
    $sms= mysqli_query($con, $sup);
    if($sms){
        include "settings.php";
        echo "<center>message submitted, your issue will be worked upon</center>";
    }
}
elseif (isset($_POST['submit3'])) {
    $smessage= $_POST['support'];
    $sup= "INSERT INTO admin_support values '$empno', '$smessage';";
    $sms= mysqli_query($con, $sup);
    if($sms){
        include "wsettings.php";
        echo "<center>message submitted, your issue will be worked upon</center>";
    }
}

?>