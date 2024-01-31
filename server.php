<?php 

    $servername = "localhost"; <ไว้ใช้ในเครื่อง>
    $username = "root"; <ถ้าใช้ในxampp>
    $password = ""; <ในxampp password ไม่มีใส่เป็นค่าว่าง>
    $dbname = "ชื่อฐานข้อมูล"

    // create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // check connection
    if (!$conn) {
        die("connection failed" , mysqli_connect_error());
    } else {
        echo "connected successfully";
    }
  
?>