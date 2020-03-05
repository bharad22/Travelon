<?php

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $servername = 'localhost';
    echo $username;
    

    $conn =  mysqli_connect($servername,'root','','bharad');

    if($conn->connect_error)
    {
        die("connection failed"  .$conn->connect_error);
    }
        
   $sql = "insert into signup (username, email, password, confirm_password) values ('$username', '$email', '$password', '$confirm_password')";
   header("location:sign-up.php");
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