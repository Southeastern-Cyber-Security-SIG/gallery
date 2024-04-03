<!DOCTYPE html>
<html>
<head>
  <title>Welcome to Our Gallery</title>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Interactive Banner</title>
<style>

  /* banner stuff */
  .banner {
    width: 100%;
    height: 300px; 
    background-image: url('banner2.jpg');
    background-size: cover;
    background-position: center;
    position: relative;
    overflow: hidden;
  }

  /* make it hover */
  .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    opacity: 0;
    transition: opacity 0.3s ease;
    display: flex;
    flex-direction: column; /* the line that fixed the damn title */
    justify-content: center;
    align-items: center;
    color: #fff;
    text-align: center;
  }

  .overlay-text {
    font-size: 24px;
  }

  .button {
    display: block;
    padding: 10px 20px;
    background-color: #FF69B4; /* hot pink */
    color: #fff; 
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-decoration: none;
    transition: background-color 0.3s ease;
  }

  /* Button hover  */
  .button:hover {
    background-color: #FF1493; /* deep pink */
  }

  /* banner hover  */
  .banner:hover .overlay {
    opacity: 1;
  }

  .title {
    display: block; /* put the title on a separate stupid line before I throw my laptop */
    font-size: 35px;
    margin-bottom: 10px;
  }

  /* yayy dark mode */
  body {
    background-color: #333; 
    color: #fff;
  }
</style>
</head>
<body>

<div class="banner">
<center><br /><br /><br /><br /><br /><br /><div style="color:white;font-size:50px">Welcome Artists</div></center>
  <div class="overlay">
  <div style="color:white;font-size:50px">Welcome Artists</div>
    <div>
      <a href="./" class="button">Click here to see everyone's art</a>
    </div>
  </div>
</div>

  <form enctype="multipart/form-data" action="upload.php" method="POST">
    <?php echo "<!--The flag is :   -->"; #flag{P3p_1s_0LD_DoNt_U331t} ?>
    <a href="./"></a>
    <center>
      <br /> <br />
      <p>OR</p> <br />
      <div class="title">Upload your own art work</div>
    <input type="file" name="uploaded_file"></input><br /><br />
    <input type="submit" value="Upload"></input>
    </center>
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
