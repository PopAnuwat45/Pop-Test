<?php 
    // เชื่อมต่อฐานข้อมูล
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tiwsob_db";
    
    $conn = mysqli_connect($servername, 
           $username, $password, $dbname);
    
    /*
    // ตรวจสอบการเชื่อมต่อ       
    if ($conn->connect_error) {
        die("การเชื่อมต่อล้มเหลว: " . $conn->connect_error);
    }
    echo "เชื่อมต่อฐานข้อมูลสำเร็จ!";
    */
?>