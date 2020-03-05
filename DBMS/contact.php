<?php

    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $servername = 'localhost';
    

    $conn =  mysqli_connect($servername,'root','','bharad');

    if($conn->connect_error)
    {
        die("connection failed"  .$conn->connect_error);
    }
    echo "connected successfully";
   $sql = "insert into contact (email, subject, message) values ('$email', '$subject', '$message')";

//    if($conn->query($sql)== TRUE)
//    {
//        echo "error" .$sql . "<br>" . $conn->error;
//    }
//    $conn->close();
if(mysqli_query($conn,$sql)){
    echo "success";
}else{
    echo mysqli_error($conn);
}
mysqli_close($conn);
?>