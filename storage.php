<html>
<head>
    <title>PHP Test</title>
</head>
<body>
<?PHP
$dir = "/home/msreed1811/csi3670/";
function getFileList($dir)
{
    // array to hold return value
    $retval = [];

    // add trailing slash if missing
    if(substr($dir, -1) != "/") {
        $dir .= "/";
    }

    // open pointer to directory and read list of files
    $d = @dir($dir) or die("getFileList: Failed opening directory {$dir} for reading");
    while(FALSE !== ($entry = $d->read())) {
        // skip hidden files
        if($entry{0} == ".") continue;
        if(is_dir("{$dir}{$entry}")) {
            $retval[] = [
                'name' => "{$dir}{$entry}/",
                'type' => filetype("{$dir}{$entry}"),
                'size' => 0,
                'lastmod' => filemtime("{$dir}{$entry}")
            ];
        } elseif(is_readable("{$dir}{$entry}")) {
            $retval[] = [
                'name' => "{$dir}{$entry}",
                'type' => mime_content_type("{$dir}{$entry}"),
                'size' => filesize("{$dir}{$entry}"),
                'lastmod' => filemtime("{$dir}{$entry}")
            ];
        }
    }
    $d->close();

    return $retval;
    echo $dir;
}
?>

    <p>This is my dir: <?php$dir = "/home/msreed1811/csi3670/";?></p>
</body>
</html>


