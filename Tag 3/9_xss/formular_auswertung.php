<?php
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>GET</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div class="box">
        <h1>Receive Formulas with the GET method</h1>
        <p>
            <?php
                $name = strip_tags($_GET['name']);
                // Strips the value of its HTML tags
                $surname = htmlspecialchars($_GET['surname']);
                // Includes he tags but filters them so they cannot actualyl render HTML code

                // Always sanitize your inputs!
                $home = $_GET['home'];
            ?>
        </p>
    </div>
    <br>
    <div class="box">
        <h3>Select specific value from return</h3>
        <p>
            <?php
                print_r($name);
                echo '<br>';
                print_r($surname);
                echo '<br>';
                print_r($home);
            ?>
        </p>
    </div>
<a href="index.php">Return</a>
</body>
</html>
