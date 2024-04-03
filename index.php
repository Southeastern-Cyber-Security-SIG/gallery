<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome to Our Gallery</title>
<style>
.banner {
    width: 100%;
    height: 200px; 
    background-image: url('banner3.jpg');
    background-size: cover;
    background-position: center;
    position: relative;
    overflow: hidden;
  }
  /* dark mode */
  body {
    background-color: #333;
    color: #fff;
  }
  .title {
    display: block; /* put the title on a separate stupid line before I throw my laptop */
    font-size: 24px;
    margin-bottom: 10px;
  }

  .button {
    padding: 10px 20px;
    background-color: #FF69B4;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-decoration: none;
    transition: background-color 0.3s ease;
  }

  /* Button hover */
  .button:hover {
    background-color: #FF1493;
  }
</style>
</head>
<div class="banner"></div>
</html>
<?php
$arrFiles = array();
$dirPath = "./gallery";


// Using scandir()
echo "<br><center> <h1> Welcome to our Gallery! </h1> </center>";
echo "<center> <h2> <a href='./upload.php' class='button'> Click me to contribute! <a> </h2> </center>";
echo "<br><center> <h3 class='title'> Here are our current pieces </h3> </center>";
$files = scandir($dirPath);
foreach ($files as $file) {
    $filePath = $dirPath . '/' . $file;
    if (is_file($filePath)) {
        echo "<center> <a href='./gallery/".$file."'style='color: pink' >" .$file. "<a> <br> </center>";
    }
}
?>