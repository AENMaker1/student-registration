<?php
// Simple form processing logic
$success = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email    = ($_POST["email"]);
    $password = $_POST["password"];
        include 'conn.php';
        $query= "SELECT * FROM registration where email= '$email' and password='$password'";
        $run = mysqli_query($connect, $query);
        if($run){
            $success = "Login successful!";
            echo "<script>location.href='index.php'</script>";
        }
        else{
            $error = "Login unsuccessful!";
        }
     }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login  Form</title>
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
    <h2></h2>
    <?php if ($success): ?>
        <p class="success"><?= $success ?></p>
    <?php elseif ($error): ?>
        <p class="error"><?= $error ?></p>
    <?php endif; ?>

    <form method="POST" action="">
        <label>Email</label>
        <input type="email" name="email" required>
        <label>password</label>
        <input type="password" name="password" required>
        <button type="submit" name="login">login</button>
   </form>
</div>

</body>
</html>
 


