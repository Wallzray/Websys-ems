
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
    .app-cont{
        margin-left: 50px;
        margin-right: 50px;
        background-color: white;
    }
    .b{
        background-color: rgb(95, 12, 95);
        text-align:center;
        padding-top: 10px;
        padding-bottom: 10px;
        font-size: 20px;
    }
    input{
        margin-bottom: 5px;
    }
</style>
</head>
<body>
<div class= "b"> <b>VERSATILE TRACKING AND PRECISIONS LTD</b></div>

<div class= "app-cont">
<p>Application Page</p>
    <p>At Versatile, you get an opportunity to work with the best employees while improving your skills <br>
    The advantage of working here is not only presence of a large salary and employee advantages but also <br>
    A vast area of opportunities to network with critical and important people in the government and <br>
    Useful relations with strong around the world. <br>

    Fill in the form below to apply at Versatile
    <form action="appform.php" method="post" enctype="multipart/form-data">
        
        First Name: <input type="text" name="fname"> <br>
        Last Name: <input type="text" name="lname"> <br>
        Email add: <input type="email" name="email"> <br>
        Telephone:  <input type="tel" name="phone"> <br>
        Resume/CV:  <input type="file" name="myfile"> <br>
        <!-- Support docs: <input type="file" name="sdocs"> <br> -->
        <input type="submit" name= "submit" value="Save">
    </form>
</div>
</body>
</html>