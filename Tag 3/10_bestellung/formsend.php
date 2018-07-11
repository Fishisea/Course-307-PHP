<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Bestellung</title>
    <link rel="stylesheet" href="../../style.css"/>
</head>
<body>
    <div class="parallax2 parallax"></div>
    <!--Regex-->
            <?php
                $nameformat = '/^[a-z]+$/i';
                if ( preg_match($nameformat, $_POST['name']) ) {
                    $name = $_POST['name'];
                }
                if ( preg_match($nameformat, $_POST['surname']) ) {
                    $name = $_POST['surname'];
                }
                $emailformat = 	'/^[a-z0-9_\-\.]+@[a-z0-9\.\-]{2,}\.[a-z]{2,4}$/i';
                if ( preg_match($emailformat, $_POST['email']) ) {
                    $email = $_POST['email'];
                }
            ?>

    <div class="box">
        <h1>Your Information</h1>
        <p>
            <?php
                if (isset($name)){
                    echo $name.'<br>';
                } else {
                    echo 'Invalid name was provided';
                }
                if (isset($name)){
                    echo $name.'<br>';
                } else {
                    echo 'Invalid name was provided';
                }
                if (isset($email)){
                    echo $email.'<br>';
                } else {
                    echo 'Invalid email was provided';
                }
                

            ?>
        </p>
    </div>

<a class="input-button" href="index.php">Return</a>
<br>
<br>
<div class="parallax"></div>
</body>
</html>
