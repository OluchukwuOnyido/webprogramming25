<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?php 
        if (isset($title) && !empty($title)) {
            echo $title;
        } else {
            echo "Default Title";
        }
        ?>
    </title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        nav {
            background-color: #222;
            padding: 10px;
            text-align: center;
        }
        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
        }
        nav a:hover {
            text-decoration: underline;
        }
        header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }
        footer {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
            width: 100%;
        }
        main {
            padding: 20px;
            text-align: center;
        }
    </style>
</head>

<body>

    <nav>
        <a href="index.php">Home</a>
        <a href="ex3.php">Exercise 3</a>
        <a href="ex4.php">Exercise 4</a>
    </nav>

    <header>
        <h1>Welcome to My Website</h1>
        <p>Your go-to source for web development tutorials</p>
    </header>
