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
			echo "<form method='POST' action='student_update_process.php'>";

			echo "<td>
					<input type='text' value='".$row["studentID"]."' disabled>
                	<input type='hidden' name='studentID' value='".$row["studentID"]."'>
              	</td>";
				

			echo "<td><input type='text' name='studentName' value='".$row["studentName"]."'></td>";

			echo "<td>
					<select name='studentMajor'>
						<option value='สารสนเทศ' ".($row["studentMajor"]=="สารสนเทศ"?"selected":"").">สารสนเทศ</option>
						<option value='ธุรกิจดิจิทัล' ".($row["studentMajor"]=="ธุรกิจดิจิทัล"?"selected":"").">ธุรกิจดิจิทัล</option>
						<option value='other' ".($row["studentMajor"]=="other"?"selected":"").">อื่น ๆ</option>
					</select>
				</td>";
						
			echo "<td>
                	<select name='studentEventID'>
						<option value='EVT-01' ".($row["eventID"]=="EVT-01"?"selected":"").">ปลูกผัก</option>
						<option value='EVT-02' ".($row["eventID"]=="EVT-02"?"selected":"").">ว่ายน้ำ</option>
						<option value='EVT-03' ".($row["eventID"]=="EVT-03"?"selected":"").">วิ่งผลัด</option>
                	</select>
              	</td>";

			echo "<td><input type='submit' name='Update' value='อัพเดตข้อมูล'></td>";

			echo "</form>";

			echo "<form method='post' action='student_delete_db.php' onsubmit='return confirm(\"confirm?\");'>";
			echo "<input type='hidden' name='studentID' value='".$row["studentID"]."'>";
			echo "<td>"."<input type='submit' name='delete' value='ลบรายการ'>"."</td>";
			echo "</form>";

        	echo "</tr>";


			
		}
	} else {
		echo "ไม่พบข้อมูล" ;  	  				
	}	 
	$conn->close();
?>
	