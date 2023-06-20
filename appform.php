<?php
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'ems');

    
$target_dir= "applications/";
$file = $target_dir. basename($_FILES['myfile']['name']);
$uploadOk= 1;
$extension= strtolower(pathinfo($file, PATHINFO_EXTENSION));
// Uploads files
 if(isset($_POST['submit'])) { // if save button on the form is clicked
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];

    // the physical file on a temporary upload directory on the server
    // $cv = $_POST['myfile']['tmp_name'];

    
    if (!in_array($extension, ['pdf', 'docx'])) {
        echo "You file extension must be .pdf or .docx";}
     else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($_FILES['myfile']['tmp_name'], $file)) {
            $cvname= $_FILES['myfile']['tmp_name'];
            $sql = "INSERT INTO applicant_table(Fname, Lname, Email, Phone, CV) VALUES ('$fname','$lname','$email','$phone','$cvname')";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
            }
            else{
                echo "Error ".mysqli_error($conn);
            }
        } else {
            echo "Failed to upload file. ";
        }
    }

    $sql1="SELECT * FROM applicant_table";
    $result= mysqli_query($conn, $sql1);
    $files= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }






?>