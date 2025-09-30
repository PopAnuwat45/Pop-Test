<?PHP
    include('server.php');
?>

<html>
    <body>        
        <a href="index.php">HOME</a>
        <table border = "1">
            <tr>
                <th>รหัสนักศึกษา</th>  
                <th>ชื่อนักศึกษา</th>    
                <th>ชื่อสาขา</th>
                <th>รหัสกิจกรรม</th>
                <th>แก้ไขข้อมูล</th>
                <th>ลบข้อมูล</th>
            </tr>
            <?php include 'student_update_db.php'; ?>
        </table>
    </body>
</html>