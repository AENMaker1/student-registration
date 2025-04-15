<?php
// Connection to the database
$host = "localhost";
$user = "root";
$password = ""; // or your password
$database = "millehills";

$conn = new mysqli($host, $user, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $conn->real_escape_string($_POST['firstname']);
    $lastname = $conn->real_escape_string($_POST['lastname']);
    $school = $conn->real_escape_string($_POST['school']);
    $trade = $conn->real_escape_string($_POST['trade']);
    $level = $conn->real_escape_string($_POST['level']);

    $sql = "INSERT INTO students records (firstname, lastname, school,trade,level) VALUES ('$firstname', '$lastname', '$school','$trade','$level')";

    if ($conn->query($sql) === TRUE) {
        echo "🎉 Student record created successfully!";
    } else {
        echo "❌ Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Student Record</title>
</head>
<body>
    <h2>Create Student Record</h2>
    <form method="POST" action="index.php">
        <label>firstname:</label><br>
        <input type="text" name="firstname" required><br><br>
        <label>lastname:</label><br>
        <input type="text" name="lastname" required><br><br>

        <label>school:</label><br>
        <input type="text" name="school" required><br><br>

        <label>trade:</label><br>
        <input type="text" name="trade" required><br><br>
        <label>level:</label><br>
        <input type="text" name="level" required><br><br>

        <input type="submit" value="Save">
    </form>
</body>
</html>
