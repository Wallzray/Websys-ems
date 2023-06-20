<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        require 'meta.php';
   ?>
    <style>
    .right-div{
        text-align: center;
    }
    #support{
        padding-right: 200px;
        padding-bottom: 100px;
    }
    a{
    text-decoration: none;
    color: rgb(124, 6, 124);
}
#s-align{
    margin-right: 8px; 
    padding-right: 10px;
    width: 175px;
}
#newpass{
    width: 160px
}
.left-div{
    font-size: 20px;
    width: 150px;
    /* height: 500px; */
    background-color: white;
    border-right: solid 2px white;

}
form{
        background-color: black;
        margin-right: 0px;
        color: whitesmoke;
        width: 500px;
    }
</style>
</head>
<body>
    <div class="main">
        <br><strong>EMPLOYEE MANAGEMENT SYSTEM</strong><br><br>
    </div>
    
    <div class="parent-div">
        <div class="left-div">
            <li></li>
    <li><img src="home.png" width="15px" height="15px"><a href="login.php"> Home</a></li>
<li><img src="group.png" width="15px" height="15px"><a href="hr-employee.php"> Employees</a></li>
<li><img src="file.svg" width="15px" height="15px"><a href="mg-reports.php"> Reports</a></li>
<li><img src="tasks.png" width="15px" height="15px"> Projects</li>
<li><img src="clock.png" width="15px" height="15px"> Events</li>
<li><img src="rating.png" width="15px" height="15px"> Performance</li>
<li><img src="settings.png" width="15px" height="15px"><a href="settings.php"> Settings</a></li>            
        </div>    
        
        <div class="right-div">
            <br>
            <b>SETTINGS</b> <br>
        UPDATE PASSWORD: <br>
        <form action="setform.php" method="post">
            CURRENT PASSWORD:   <input type="password" name="currentpassword" id= "s-align"><br><br>
            ENTER NEW PASSWORD: <input type="password" name="newpassword" id= "newpass"> <br><br>
            CONFIRM PASSWORD:   <input type="password" name="newpassword" id= "s-align"> <br><br>
            <input type="submit" value="SUBMIT" name="submit">
        </form><br>
         SUPPORT: <br>
         RAISE YOUR CONCERN
         <form action="setform.php" method="post">
            <input type="text" name="support" id="support" placeholder="Type your message here..."><br><br>
            <input type="submit" value="SUBMIT" name="submit2">
         </form>
    </div>
    </div>
</body>
</html>