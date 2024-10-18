<?php
// submit_attendance.php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_name = $_POST['student_name'];
    $date = $_POST['date'];
    $status = $_POST['status'];

    // Prepare SQL statement
    $sql = "INSERT INTO attendance (student_name, date, status) VALUES (:student_name, :date, :status)";
    $stmt = $pdo->prepare($sql);

    // Execute the statement
    if ($stmt->execute([
        ':student_name' => $student_name,
        ':date' => $date,
        ':status' => $status
    ])) {
        echo "Attendance recorded successfully.";
    } else {
        echo "Error recording attendance.";
    }
} else {
    echo "Invalid request.";
}
?>
