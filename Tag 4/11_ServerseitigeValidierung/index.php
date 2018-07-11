<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Bestellung</title>
    <link rel="stylesheet" href="../../style.css"/>
</head>
<body>

<div class="parallax"></div>
    <div class="box">
        <h1>Enter your details</h1>
        <p>* required</p>
    </div>
<div class="parallax"></div>
<div class="box">


    <form action="formsend.php" method="POST">

    
        
            <label>
                Name*
                <br>
                <input class="input-field" type="text" id="name" name="name">

                <br>
            </label>
            <label>
                Surname*
                <br>
                <input class="input-field" type="text" id="surname" name="surname">
                <br>
            </label>
            <label>
                Email*
                <br>
                <input class="input-field" type="text" id="email" name="email">
                <br>
            </label>
            <br>
        

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
    </div>


    <div class="parallax"></div>

    
</body>
</html>


