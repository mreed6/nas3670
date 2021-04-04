<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <?php
        $dir = '/storage';

        if($except = opendir($dir.'/')){
            echo "Looking inside the ";
            echo $dir . '<br>';
        }
        ?>
        <ul>
            <?php
            while($file = readdir($except))
            {
                echo $file . '<br>';
            }

            ?>
        </ul>

        <?php
        if(isset($_POST['submit'])){
            $text = $_POST['text'];
            $file = fopen("/storage/test04.txt", "w") or die("file not open");

            $inject = $text. "\n";

            fputs($file, $inject) or die("Data not written to file");

            fclose($file);
        }


        ?>

        <form action="#" method="post">
            Write to file:<input type="text" name="text" ><br>
            <input type="submit" name="submit" value="Write to file" ><br>
        </form>

        <form action="">
            <?php
              if(isset($_POST['submit'])){
                  $open = fopen("/storage/test.txt","r" ) or die ("file does not exist");
                  echo fread($open, filesize("storage/test.txt"));
            }
            ?>
            <input type="submit" name="open" value="Open file"
        </form>
    </body>
</html>


