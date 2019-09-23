<?php
$file = $_FILES["file"];
if (move_uploaded_file($file['tmp_name'], "uploads/" .$file["name"]))
    header('location: index.php?send=success&upl='.$file['name']);
else
    header("location: index.php?send=fails");