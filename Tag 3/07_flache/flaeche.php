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
        <h1>Receive and display Rectangle data</h1>
        <p>
            <?php
                $area = $_GET['length']*$_GET['width'];
                print_r('Rectangle has an area of: '.$area. ' units');
            ?>
        </p>
    </div>
    <br>
    <div class="box">
        <h3>Specifically display the dimensions</h3>
        <p>
            <?php
                print_r('Length is: '. $_GET['length']);
                echo '<br>';
                print_r('Width is: '. $_GET['width']);
            ?>
        </p>
    </div>

    


    <div class="box">
        <h1>Send forms with the GET method</h1>
    </div>  
    <div class="box">
        <form action="flaeche.php" method="GET">
            <label>
                Length
                <br>
                <input class="input-field" type="text" id="length" name="length">
                <br>
            </label>
            <label>
                Width
                <br>
                <input class="input-field" type="text" id="width" name="width">
                <br>
            </label>
            <br>
        <input class="input-button" type="submit" value="Send data" name="send">
        <input class="input-button" type="reset" value="Reset inputs" name="reset">
        </form>
    </div>

    
</body>
</html>


