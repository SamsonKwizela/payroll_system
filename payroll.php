<?php
$servername = "localhost";
$username = "your_username"; 
$password = "your_password"; 
$dbname = "payroll_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM employees";
$result = $conn->query($sql);

$employees = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $employees[] = $row;
    }
}

$conn->close();
header('Content-Type: application/json');
echo json_encode($employees);
?>
