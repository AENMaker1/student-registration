<?php
$page_title = "Welcome to My Website";
include 'nav.php'; 
include 'records.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        header {
            background-color: #333;
            color: white;
            padding: 1em 0;
        }
        main {
            padding: 2em;
        }
        footer {
            background-color: #ddd;
            padding: 1em 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<header>
    <h1><?php echo $page_title; ?></h1>
</header>

<main>
    <p>Hello! Today's date is <?php echo date("l, F j, Y"); ?>.</p>
    <p>This is a simple index.php homepage.</p>
</main>

<footer>
    <p>&copy; <?php echo date("Y"); ?> My Website. All rights reserved.</p>
</footer>

</body>
</html>

