<!DOCTYPE html>
<html>
<head>
    <title>Image Gallery</title>
    <meta charset="utf-8" >
    <meta name="description">
    <link rel="stylesheet" href="../../style.css"/>
</head>
<body>
<div class="parallax"></div>
    <div class="box">
<h1>Bildergalerie</h1>
</div>
<div class="parallax"></div>
    <div class="parallax"></div>
    <div class="box">
        <fieldset>
            <?php
            $dir = "images/";
            $search = array (
                ".jpg", "_", "ae"
            );
            $replace = array (
                "", " ", "ä"
            );
            if (is_dir($dir)) {
                if ($dh = opendir($dir)) {
                    while (($file = readdir($dh)) !== false) {
                        if (!is_dir($file)) {
                            $im = imagecreatefromjpeg('images/'.$file);
                            $width = imagesx($im);
                            $height = imagesy($im);
                            $width2 = $width;
                            $height2 = $height;
                            $im2 = imagecreatetruecolor($width2, $height2);
                            imagecopyresampled($im2, $im, 0, 0, 0, 0, $width2, $height2, $width, $height);
                            imagejpeg($im2, 'thumbnails/'.$im2);
                            echo '<form class="images" action="index.php" method="post">';
                            echo  "<figure>";
                            $title = ucfirst(str_replace($search , $replace ,$file));
                            echo "<img src='images/$file' class='img'>";
                            echo "<input type='hidden' value='$file' name='file'>";
                            echo '<figcaption>' . $title . '</figcaption><input class="input-button" type="submit" value="Delete" name="Delete" >';
                            echo '</figure>';
                            echo '</form>';
                        }
                    }
                    closedir($dh);
                }
            }
            if (isset($_POST['file'])){
                unlink('images/' . $_POST['file']);
                header('Location: index.php');
            }

            ?>
        </fieldset>
        <br>
        <fieldset>
            <form action="index.php" method="post" enctype="multipart/form-data">

                <br><br><br>
                *Select image to upload:
                <input type="file" name="image"><br>
                *Assign new name to file:
                <input class="input-field" type="text" name="filename" id="filename">
                <input type="submit" value="Upload Image" name="submit">

            </form>
        </fieldset>
        <?php
            if (isset($_POST['submit'])) {
                $dstPathImg = 'images/';
                $newfilename = $_POST['filename'];
                move_uploaded_file($_FILES['image']['tmp_name'], $dstPathImg . $newfilename);
                header('Location: index.php');
            }
        ?>
        
        </div>
    <div class="parallax parallax2"></div>
</body>
</html>

