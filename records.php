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
    <style>
            .form-box {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: white;
            color: #333;
            padding: 20px;
            width: 37.5rem;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
        }
        .form-box form{
            width: 100%;
        }
        .form-box label{
            text-transform: capialize;
            font-weight: bold;
            margin-bottom: 5px;       }
        .form-box input {
            width: 20rem;
            padding: 10px;
            margin-top: 10px;
        }
        .form-box input[type="submit"] {
            margin-top: 15px;
            padding: 10px;
            width: 100%;
            background: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }
        .success { color: green; }
        .error { color: red; }
    </style>
</head>
<body>
    <div class="form-box">
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
    </div>
    
</body>
</html>
