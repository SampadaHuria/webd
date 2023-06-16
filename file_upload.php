<!DOCTYPE html>
<html>
<head>
    <style>
    .container{
        border: 2px solid black;
        border-radius: 10px;
        width: 25%;
        display: flex;
        justify-content: center;
        align-items:center;
        margin: 325px 500px;
        padding: 5px;
    }
    #btn{
        background: blue;
        border: 2px solid black;
        border-radius: 5px ;
        padding: 5px;
        color: white;
    }

    </style>
</head>
<body>
<div class="container">
<form action="lab2_fileupload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <hr> <br>
  <input type="file" name="fileToUpload" id="fileToUpload">
  <br>  <br>
  <button id="btn" type="submit" name = "submit">Upload</button>
</form>
</div></body></html>

Php file:
<?php
$target_dir = "lab2_fileupload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "Invalid Extension.";
    $uploadOk = 0;
  }
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}
?>
