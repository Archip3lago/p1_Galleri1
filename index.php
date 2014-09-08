<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="galleri_style.css">
        <title></title>
    </head>
    <body>
        <?php
            foreach(glob("*.jpg") as $filename){
                echo '<div>'."<a href='#'><img title='$filename' src='$filename'></a>";
                $tmp = strlen($filename) - 4;
                echo '<p>'.substr($filename, 0, $tmp).'</p>'.'</div>';
            }
        ?>
    </body>
</html>
