<?php
echo '<div class="box"><pre>';
echo implode('<br>', $_POST);
echo '<br>';
print_r($_POST);
echo '</pre></div>';
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>POST</title>
    <title>Formular Elemente</title>
    <link rel="stylesheet" href="../../style.css"/>
</head>
<body>
    <div class="box">
        <form action="index.php" method="post">
            <p>Email</p>
            <input class="input-field" type="email" name="email" ><br>
            <br>
            <p>Button</p>
            <input class="input-button" type="button" name="button" value="click me"><br>
            <br>
            <p>Checkbox</p>
            <input class="input-field" type="checkbox" name="checkbox" ><br>
            <br>
            <p>Color</p>
            <input class="input-field" type="color" name="color" ><br>
            <br>
            <p>Date</p>
            <input class="input-field" type="date" name="date" ><br>
            <br>
            <p>Datetime</p>
            <input class="input-field" type="datetime" name="datetime" ><br>
            <br>
            <p>Pattern Example '5 letter word'</p>
            <input class="input-field" type="text" name="pattern" pattern="[a-z]{5}" title="Word must contain 5 letters"><br>
            <br>
            <p>Number</p>
            <input class="input-field" type="number" name="number" ><br>
            <br>
            <p>Password</p>
            <input class="input-field" type="password" name="password" ><br>
            <br>
            <p>Radio</p>
            <input class="input-field" type="radio" name="radio" ><br>
            <br>
            <p>Text</p>
            <input class="input-field" type="text" name="text" ><br>
            <br>
            <p>URL</p>
            <input class="input-field" type="url" name="url" ><br>
            <br>
            <p>Week</p>
            <input class="input-field" type="week" name="week" ><br>
            <br>
            <p>Hidden</p>
            <input class="input-field" type="hidden" name="hidden"><br>
            <br>
            <p>Range</p>
            <input class="input-field" type="range" min="0"  max="100" name="range"><br>
            <br>
            <p>Submit</p>
            <input class="input-field" class="input-button" type="submit">
        </form>
    </div>
</body>
</html>
