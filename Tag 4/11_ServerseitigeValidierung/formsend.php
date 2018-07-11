<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Bestellung</title>
    <link rel="stylesheet" href="../../style.css"/>
</head>
<body>
    <div class="parallax"></div>
    <!--Regex-->
            <?php
                $nameformat = '/^[a-z]+$/i';
                if ( preg_match($nameformat, $_POST['name']) ) {
                    $name = $_POST['name'];
                }
                if ( preg_match($nameformat, $_POST['surname']) ) {
                    $surname = $_POST['surname'];
                }
                $emailformat = 	'/^[a-z0-9_\-\.]+@[a-z0-9\.\-]{2,}\.[a-z]{2,4}$/i';
                if ( preg_match($emailformat, $_POST['email']) ) {
                    $email = $_POST['email'];
                }

                if (isset($_POST['info'])) {
                    $info = $_POST['info'];
                }
            ?>

    <div class="box">
        <h1>Please validate information</h1>
        <p>* required</p>
    </div>
    <div class="parallax"></div>

    <form action="formsend.php" method="POST">

    
        
        <label>
            Name*
            <br>
            <?php 
                if (isset($name)){
                    echo '<input class="input-field" type="text" id="name" name="name" value="'.$name.'">';
                } else {
                    echo '<input style="border: double 2px red; color: red;" class="input-field" type="text" id="name" name="name" value="'. $_POST['name'].'">';
                }
            ?>

            <br>
        </label>

        <label>
            Surname*
            <br>
                <?php
                    if (isset($surname)){
                        echo '<input class="input-field" type="text" id="surname" name="surname" value="'.$surname.'">';
                    } else {
                        echo '<input style="border: double 2px red; color: red;" class="input-field" type="text" id="surname" name="surname" value="'. $_POST['surname'].'">';
                    }
                ?>
            <br>
        </label>
        <label>
            Email*
            <br>
                <?php
                    if (isset($email)){
                        echo '<input class="input-field" type="email" id="email" name="email" value="'.$email.'">';
                    } else {
                        echo '<input style="border: double 2px red; color: red;" class="input-field" type="text" id="email" name="email" value="'. $_POST['email'].'">';
                    }
                ?>
            <br>
        </label>
        <br>
                    
        <?php
            if (isset($info)){
                echo '<input class="input-field" type="email" id="email" name="email" value="'.$email.'">';
            } else {
                echo '<input style="border: double 2px red; color: red;" class="input-field" type="text" id="email" name="email" value="'. $_POST['email'].'">';
            }
        ?>

        <fieldset>
        <legend>I want information concerning*</legend>
        <label>
            <input class="input-field" type="checkbox" id="php" name="info[]" value="php">PHP
            <br>
        </label>

        <label>
            <input class="input-field" type="checkbox" id="js" name="info[]" value="js">JavaScript
            <br>
        </label>

        <label>
            <input class="input-field" type="checkbox" id="css" name="info[]" value="css">CSS
            <br>
        </label>

        </fieldset>
        <br>
        <br>
        <fieldset>
        <legend>I want to subscribe to the newsletter</legend>
        <label>
            <input class="input-field" type="radio" name="newsletter">Yes
            <br>
        </label>

        <label>
        <input class="input-field" type="radio" name="newsletter">No
            <br>
        </label>

        </fieldset>
        <input class="input-button" type="submit" value="Send data" name="send">
        <input class="input-button" type="reset" value="Reset inputs" name="reset">

    </form>

<a class="input-button" href="index.php">Return</a>
<br>
<br>
<div class="parallax"></div>
</body>
</html>
