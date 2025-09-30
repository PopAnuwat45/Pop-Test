<?php
	include('server.php');

    if (isset($_POST['delete'])) {
        $studentID = $_POST['studentID'];
    }
    
    //delete 
    $sql = "DELETE FROM student_tb 
            WHERE studentID = '$studentID'";

    //check
    if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>";
        echo "alert('Delete Successfully');";
        echo "window.location = 'student_update.php'; ";
        echo "</script>";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo "<script type='text/javascript'>";
        echo "alert('Error back to Delete again');";
        echo "window.location = 'student_update.php'; ";
        echo "</script>";
    }
    $conn->close();
?>