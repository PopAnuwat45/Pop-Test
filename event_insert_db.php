<?php
    include('server.php');

    if (isset($_POST['sub'])) {
        $eventID = $_POST['eventID'];
        $eventName = $_POST['eventName'];
        $eventImage = $_POST['eventImage'];
    }

    $sql = "INSERT INTO event_tb 
            (eventID, eventName, eventImage) 
            VALUES ('$eventID', '$eventName', '$eventImage')";
    
    //check
    if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>";
        echo "alert('Insert Succesfully');";
        echo "window.location = 'event_insert.php'; ";
        echo "</script>";
    }
    else {
        echo "<script type='text/javascript'>";
        echo "alert('Error back to Regis again');";
        echo "window.location = 'event_insert.php'; ";
        echo "</script>";
    }
?>