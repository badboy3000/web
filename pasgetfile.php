<?php
    $appid = 5;
    include "inc/common_needlogin.php";
    $s = $bizsession->request(5,27,0,"");
    $fileinfo = json_decode($s);
    header('Content-Description: Download File');
    header('Content-Type: '.$fileinfo->{'contenttype'});
    if ($fileinfo->{'displayonly'}==0)
        header('Content-Disposition: attachment; filename="'.$fileinfo->{'filename'}.'"');

    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . $fileinfo->{'filesize'});
    readfile($fileinfo->{'fullfilename'});
?>
