<?php

require("../alib.php");
$ALIB = new alib();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if($ALIB->uploadToDir($_FILES["userfile"], "upload-directory/", true)){
        echo "Pass!";
    } else {
        echo "Fail!";
    }
}

?>

<form enctype="multipart/form-data" method="post">
    <input type="file" name="userfile" id="file">
    <input type="submit" value="Upload">
</form>