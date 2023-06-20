<!DOCTYPE html>
<html lang="en">
<head>
<?php 
        require 'meta.php';
   ?>
   <style>
    body{
        text-align:center;
    }
   </style>
</head>
<body>
    <strong>EMPLOYEE MANAGEMENT SYSTEM</strong> <br><br> 
    <b>LOG IN TO ACCESS MORE FEATURES</b>
    <form action="dashboard.php" method="post">
        
        <label>Id Number</label><br><br>
        <input type="text" name="empno" id= "empno"><br><br>
        <label>Password / Set Password</label><br><br>
        <input type="password" name="password" id="password"><br><br>
        <input type="submit" value="Confirm" name= "submit">
    </form>

    
</body>
</html>