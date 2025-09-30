<?php
    include('server.php');

    if (isset($_POST['Update'])) {
        $studentID = $_POST['studentID'];
        $studentName = $_POST['studentName'];
        $studentMajor = $_POST['studentMajor'];
        $studentEventID = $_POST['studentEventID'];
    }
    
    //update 
    $sql = "UPDATE student_tb 
            SET studentName='$studentName', 
            studentMajor='$studentMajor', 
            studentEventID='$studentEventID' 
            WHERE studentID='$studentID'";

    //check
    if ($conn->query($sql) === TRUE) {        
        echo "<script type='text/javascript'>";
        echo "alert('Update Succesfully');";
        echo "window.location = 'student_update.php'; ";
        echo "</script>";
    }
    else {
        echo "<script type='text/javascript'>";
        echo "alert('Error back to cart');";
        echo "window.location = 'student_update.php'; ";
        echo "</script>";
    }
?>