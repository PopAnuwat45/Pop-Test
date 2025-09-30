<html>
    <head>
        <meta charset="UTF-8">
        <title>::STUDENT::</title>
    </head>
    <body>
        <a href="index.php">HOME</a><br>
        <form action="student_insert_db.php" method="POST">

            <label>studentID:</label><br>            
            <input type="text" name="studentID" required><br>

            <label>studentName:</label><br>
            <input type="text" name="studentName" required><br>

            <label>studentMajor:</label><br>           
            <select name="studentMajor" id="studentMajor" required><br><br>
            <option value="สารสนเทศ">สารสนเทศ</option>
            <option value="ธุรกิจดิจิทัล">ธุรกิจดิจิทัล</option>
            <option value="other">อื่น ๆ</option>
            </select><br><br>

            <label>studentEventID:</label><br>           
            <select name="studentEventID" id="studentEventID" required><br><br>
            <option value="EVT-01">ปลูกผัก</option>
            <option value="EVT-02">ว่ายน้ำ</option>
            <option value="EVT-03">วิ่งผลัด</option>
            </select><br><br>


            <input type="submit" name="sub" value="INSERT">
        </form>
    </body>
</html>

