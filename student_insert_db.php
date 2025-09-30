<?php
    include('server.php');

    if (isset($_POST['sub'])) {
        $studentID = $_POST['studentID'];
        $studentName = $_POST['studentName'];
        $studentMajor = $_POST['studentMajor'];
        $studentEventID = $_POST['studentEventID'];
    }

    $sql = "INSERT INTO student_tb 
            (studentID, studentName, studentMajor, studentEventID) 
            VALUES ('$studentID', '$studentName', '$studentMajor', '$studentEventID')";
    
    //check
    if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>";
        echo "alert('Insert Succesfully');";
        echo "window.location = 'student_insert.php'; ";
        echo "</script>";
    }
    else {
        echo "<script type='text/javascript'>";
        echo "alert('Error back to Insert again');";
        echo "window.location = 'student_insert.php'; ";
        echo "</script>";
    }
?>