<html>
    <head>
        <meta charset="UTF-8">
        <title>::EVENT::</title>
    </head>
    <body>
        <a href="index.php">HOME</a><br>
        <form action="event_insert_db.php" method="POST">
            <label>eventID:</label><br>            
            <input type="text" name="eventID" required><br>
            <label>eventName:</label><br>
            <input type="text" name="eventName" required><br>
            <label>eventImage:</label><br>            
            <input type="file" name="eventImage" required><br><br>
            <input type="submit" name="sub" value="INSERT">
        </form>
    </body>
</html>

