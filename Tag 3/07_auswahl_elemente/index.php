<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Auswahl Elemente | Serverseitig</title>
    <meta name="description" content= "Formular mit POST">
    <link rel="stylesheet" href="../../style.css"/>
</head>
<body>
<?php
    echo '<div class="box">';
    echo implode('<br>', $_POST);
    echo '<br>';
    print_r($_POST);
    echo '</div>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>index.php</title>
</head>
<body>
<div class="box">
<form action="index.php" method="post">
    <label>
        Name
        <input class="input-field" type="text" name="name" required>
        <br>
    </label>
    <label>
        E-Mail
        <input class="input-field" type="email" name="email" required>
        <br>
    </label>

    <fieldset>
        <legend>Course Books</legend>
        <p>
            <label>
                Angular Framework
                <input type="checkbox" name="medium[]" value="html">
            </label>
        </p>
        <p>
            <label>
                Backend Development with Node.js
                <input type="checkbox" name="medium[]" value="php" >
            </label>
        </p>
        <p>
            <label>
                Project Management
                <input type="checkbox" name="medium[]" value="js" >
            </label>
        </p>
    </fieldset>
    <br>
    <br>
    <fieldset>
        <legend>Language</legend>
        <label>
            English
            <input type="radio" name="format" value="en" required>
        </label>
        <label>
            German
            <input type="radio" name="format" value="de" required>
        </label>

    </fieldset>
    <br>
    <br>
    <fieldset>
        <legend>Payment Method</legend>
        <label>
            Cash
            <input type="radio" name="pay" value="cash" required>
        </label>
        <label>
            Credit Card
            <input type="radio" name="pay" value="credit" required>
        </label>
        <label>
            Invoice
            <input type="radio" name="pay" value="invoice" required>
        </label>
    </fieldset>
    <br>
    <br>
    <input class="input-button" type="submit">
</form>
</div>
</body>
</html>

