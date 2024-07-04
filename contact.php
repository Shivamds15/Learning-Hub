<?php

    $db_hostname="localhost";
    $db_username="root";
    $db_password="";
    $db_name="dbname";

    $conn = mysqli_connect($db_hostname,$db_username,$db_password,$db_name);

    if(!$conn){
        echo"Connection Failed:",mysqli_connect_error();
        exit;
    }

    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $sql = "INSERT INTO contact(name,email,phone,subject,message) values ('$name','$email','$phone','$subject','$message')";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "<script>alert('We will contact you soon');</script>";
    }else{
        echo "<script>alert('Try again after some time, query failed!')</script>";
    }
    
?>