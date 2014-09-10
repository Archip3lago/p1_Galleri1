<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="galleri_style.css">
        <title></title>
    </head>
    <body>
        <?php
            foreach(glob("thumbnail/*.jpg") as $filename){
                $tmp = strlen($filename) - 14;
                $filename_img = "img/".substr($filename, 10, $tmp + 4);
                $title = substr($filename, 10, $tmp);
                echo '<div>'."<a href='$filename_img'><img title='$title' src='$filename'></a>";
                echo '<p>'.$title.'</p>'.'</div>';
            }
        ?>
    </body>
</html>
