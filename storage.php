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

        if(isset($_POST['submit'])){
            $text = $_POST['text'];
            $file = fopen("test04.txt", "w+") or die("file not open");

            $inject = $text. "\n";

            fputs($file, $inject) or die("Data not written to file");

            fclose($file);
        }
        ?>

        <form action="#" method="post">
            Write to file:<input type="text" name="text" ><br>
            <input type="submit" name="submit" value="Write to file" ><br>
        </form>
    </body>
</html>


