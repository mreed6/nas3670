<html>
<head>
    <title>PHP Test</title>
</head>
<body>
<?php
$dir    = '/home/msreed1811/csi3670';
$files1 = scandir($dir);
$files2 = scandir($dir, 1);

print_r($files1);
print_r($files2);
?>

<!--    <p>This is my dir: --><?php$//dir = "/home/msreed1811/csi3670/";?><!--</p>-->
</body>
</html>


