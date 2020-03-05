<?php
    $conn =  mysqli_connect('localhost','root','','bharad');
    $sql="select * from bus";
    $result = mysqli_query($conn,$sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<h1>firstname: " . $row["firstname"].  " - dateb: " . $row["dateb"]. "- gender: " .$row["gender"]. "- email: " .$row["email"]. "- phone: " .$row["phone"]. "- busname: " .$row["busname"]. "<br></h1>";
        }
    } else {
        echo "0 results";
    }
?>
