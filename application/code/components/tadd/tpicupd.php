<?php
error_reporting(0);
 
$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {
 
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./res/img/" . $filename;
 
    $db = mysqli_connect("localhost", "root", "", "ramit", "3308");
 
    // Get all the submitted data from the form
    $sql = "update ticket set filename='$filename' where tid='$id'";
 
    // Execute query
    mysqli_query($db, $sql);
 
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        header("refresh: 1");
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
}
?>
 
<!DOCTYPE html>
<html>
 
<head>
    <title>Image Upload</title>
</head>
 
<body>
    <div id="content">
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="form-group">
                <input class="form-control" type="file" name="uploadfile" value="" />
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
            </div>
        </form>    
</body>
