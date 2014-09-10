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
                echo '<div>'."<a href='#'><img title='$tmp' src='$filename'></a>";
                echo '<p>'.substr($filename, 10, $tmp).'</p>'.'</div>';
            }
        ?>
    </body>
</html>
