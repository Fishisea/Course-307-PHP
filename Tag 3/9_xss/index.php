<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>GET</title>
    <meta name="description" content= "Formular mit GET">
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div class="box">
        <h1>Send forms with the GET method</h1>
    </div>  
    <div class="box">
        <form action="formular_auswertung.php" method="GET">
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


