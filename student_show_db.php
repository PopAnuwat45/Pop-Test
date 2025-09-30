<?php
	//database
	include('server.php');

	//Select data 
	$sql = "SELECT * 
	FROM student_tb
	JOIN  event_tb ON student_tb.studentEventID = event_tb.eventID";
	$result = $conn->query($sql);
	
	//Check Data 
	if ($result->num_rows > 0) {
		//Show Data
		while($row = $result->fetch_assoc()) {
			echo "<tr>" ;
			echo "<td>".$row["studentID"]."</td>" ;
			echo "<td>".$row["studentName"]."</td>" ;
			echo "<td>".$row["studentMajor"]."</td>" ;
			echo "<td>".$row["eventID"]."</td>" ;
			echo "<td>".$row["eventName"]."</td>" ;
            echo "<td>"."<img src='image/".$row["eventImage"]."'> </td>" ;
			
		}
	} else {
		echo "ไม่พบข้อมูล" ;  	  				
	}	 
	$conn->close();
?>
	