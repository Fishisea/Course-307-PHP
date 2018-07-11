<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>GET</title>
    <meta name="description" content= "Formular mit GET">
    <link rel="stylesheet" href="../../style.css"/>
</head>
<body>


    <div class="box">
        <h1>Receive Formulas with the GET method</h1>
        <p>
            <?php
                print_r($_GET);
            ?>
        </p>
    </div>
    <br>
    <div class="box">
        <h3>Select specific value from return</h3>
        <p>
            <?php
                print_r($_GET['name']);
            ?>
        </p>
    </div>

    


    <div class="box">
        <h1>Send forms with the GET method</h1>
    </div>  
    <div class="box">
        <form action="index.php" method="GET">
            <label>
                Name
                <br>
                <input class="input-field" type="text" id="name" name="name">
                <br>
            </label>
            <label>
                Surname
                <br>
                <input class="input-field" type="text" id="surname" name="surname">
                <br>
            </label>
            <label>
                Home
                <br>
                <input class="input-field" type="text" id="home" name="home">
                <br>
            </label>
            <br>
        <input class="input-button" type="submit" value="Send data" name="send">
        <input class="input-button" type="reset" value="Reset inputs" name="reset">
        </form>
    </div>

    
</body>
</html>


