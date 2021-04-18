<?php
require 'Cloudinary.php';
require 'Uploader.php';


Cloudinary::config(array(
    "cloud_name" => "gr3atcode",
    "api_key" => "887517348283969",
    "api_secret" => "dMQLS56zWAgQgvY1ts50dnXff5Y"
));

if (isset($_POST["submit"])) {
    print_r($_FILES["fileToUpload"]);
    $cloudUpload = \Cloudinary\Uploader::upload($_FILES["fileToUpload"]['tmp_name']);
    print_r($cloudUpload);
}

?>
<!DOCTYPE HTML>
  <html>
    <head>
  </head>

  <body>

<form method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

  </body>
</html>