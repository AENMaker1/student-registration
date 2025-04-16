<?php
// Simple form processing logic
$success = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username    = ($_POST["username"]);
    $email    = ($_POST["email"]);
    $password = $_POST["password"];
    $telephone = $_POST["telephone"];
    $confirm =$_POST["confirm_password"];

    if ($password !== $confirm) {
        $error = "Passwords do not match!";
    } elseif (strlen($password) < 8) {
        $error = "Password must be at least 8 characters long.";
    } else {
        include 'conn.php';
        $query= "INSERT into registration  VALUES('','$username','$email','$telephone','$password')";
        $run = mysqli_query($connect, $query); //registration working very well
        if($run){
            $success = "Registration successful!";
            echo "<script>window.location.href='login.php'</script>"; 
        }
        else{
            $error = "Registration unsuccessful!";
        }
     }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Registration Form</title>
    <style>
        body {
            font-family: Arial;
            background: #f5f5f5;
            display: flex;
            justify-content: center;
            margin-top: 50px;
        }
        .form-box {
            background: white;
            padding: 20px;
            width: 350px;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
        }
        .form-box input {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
        }
        .form-box button {
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
    <h2>Register</h2>
    <?php if ($success): ?>
        <p class="success"><?= $success ?></p>
    <?php elseif ($error): ?>
        <p class="error"><?= $error ?></p>
    <?php endif; ?>

    <form method="POST" action="">
        <label>username</label>
        <input type="text" name="username" required>

        <label>Email</label>
        <input type="email" name="email" required>
        <label>phone</label>
        <input type="numbers"  name="telephone" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <label>Confirm Password</label>
        <input type="password" name="confirm_password" required>
        <button type="submit" name="register">register</button>
    </form>
</div>

</body>
</html>

