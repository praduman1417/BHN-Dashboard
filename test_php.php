<!DOCTYPE html>
<html>
<head>
        <title>Untitled</title>
</head>

<body>

<?php

$servername = "192.168.254.129";
$username = "root";
$password = "redhat";
$dbname = "html";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "select exp_no,exp_code,resolved_date,month,year,resolved_by from html.exception_data ;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "|exception#: " . $row["exp_no"]."|Name: " . $row["exp_code"]. "|Resolved_Date " . $row["resolved_date"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>


</body>
</html>


