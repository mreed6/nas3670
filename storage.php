<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <?php
        $dir = '/storage';

        if($except = opendir($dir.'/')){
            echo "Looking inside the '$dir'" . '<br>';
        }

        while($file = readdir($except)){
            echo $file . '<br>';
        }
        ?>
    </body>
</html>


