<!DOCTYPE html>
<html>
<head>
  <title>Welcome to Our Gallery</title>
  
</head>
<body>
  <form enctype="multipart/form-data" action="index.php" method="POST">
    <?php echo "<!--The flag is :   -->"; #flag{P3p_1s_0LD_DoNt_U331t} ?>
    <a href="./">Click here to see everyone's art</a>
    <p>OR</p>
    <p>Upload your own Art Work</p>
    <input type="file" name="uploaded_file"></input><br />
    <input type="submit" value="Upload"></input>
  </form>
</body>
</html>

<?PHP
  if(!empty($_FILES['uploaded_file']))
  {
    $path = "/var/www/html/gallery/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);

    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {

      echo "Your Art Work use this <a href='/gallery/".basename( $_FILES['uploaded_file']['name'])."'>link to share it <a>";
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }
?>