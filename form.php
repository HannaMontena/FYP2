<!-- form.php -->
<?php
// Database connection details
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = "usbw";// Replace with your database password
$dbname = "shazliana"; // Replace with your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize a variable to store the input data after submission
$submitted_data = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text_input = $_POST['text_input'];

    // Insert data into the database
    $sql = "INSERT INTO text_data (content) VALUES (?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $text_input);

    if ($stmt->execute()) {
        $submitted_data = $text_input; // Store the input text in a variable
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Retrieve the latest data from the database to display
$sql = "SELECT content FROM text_data ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Get the latest data
    $row = $result->fetch_assoc();
    $submitted_data = $row['content'];
}

// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data and Display</title>
</head>
<body>

<!-- The Form -->
<form action="form.php" method="POST">
    <label for="text_input">Enter Text:</label>
    <input type="text" id="text_input" name="text_input" required>
    <input type="submit" value="Submit">
</form>

<!-- Display the submitted data -->
<?php if (!empty($submitted_data)): ?>
    <h2>Submitted Data:</h2>
    <p><?php echo htmlspecialchars($submitted_data); ?></p>
<?php endif; ?>

</body>
</html>
