<?php

    $firstname = $_POST['first_name'];
    $dateb = $_POST['dateb'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $busname = $_POST['busname'];
    $servername = 'localhost';
    

    $conn =  mysqli_connect($servername,'root','','bharad');

    if($conn->connect_error)
    {
        die("connection failed"  .$conn->connect_error);
    }
    echo "connected successfully";
    $sql = "select noseat from busseat where busname = '$busname'";
    $resultsd1 = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($resultsd1,MYSQLI_ASSOC);

    $noseat = $row['noseat']-1;
    $sql = "UPDATE busseat
   SET noseat = $noseat
   WHERE busname= '$busname';";

$resultsd1 = mysqli_query($conn, $sql);


   


header("Location: display.php");
?>
    

