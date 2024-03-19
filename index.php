<?php
$arrFiles = array();
$dirPath = "./gallery";


// Using scandir()
echo "<h1> Welcome to our Gallery! </h1>";
echo "<h2> <a href='./upload.php'> To Contribute go here <a> </h2>";
$files = scandir($dirPath);
foreach ($files as $file) {
    $filePath = $dirPath . '/' . $file;
    if (is_file($filePath)) {
        echo "<a href='./gallery/".$file."'>" .$file. "<a> <br>";
    }
}
?>