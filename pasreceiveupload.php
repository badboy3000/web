<?php
$uploaddir = '/mnt/disk_raid/51pasupload/';
$uploadfile = $uploaddir . basename($_FILES['myfile']['name']);
if (move_uploaded_file($_FILES['myfile']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload attack!\n";
}
?>
