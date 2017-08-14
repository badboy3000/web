<?php
    $appid = 5;
    include "inc/common_needlogin.php";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="maximum-scale=7; user-scalable=1; initial-scale=1;" /> 
<title>保存帖子</title>
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<meta charset="utf-8" />
</head>
<body >
<?php
    $s="";
    $requeststr="em=".$_POST["em"]."&subject=".urlencode($_POST["subject"])."&editorValue=".urlencode($_POST["editorValue"])."&attfile=".urlencode(basename($_FILES['attfile']['name']))."&bid=".$_GET["bid"];
    if (basename($_FILES['attfile']['name'])!="") {
        $s=$bizsession->request(5,16,0,'');
        $uploaddir = '/mnt/disk_raid/51pasupload/';
        $uploadfile = $uploaddir . $s;
        $b=move_uploaded_file($_FILES['attfile']['tmp_name'], $uploadfile);
        if (!$b) {
            echo "upload error!";
            exit();
        }
    }
    
    $s=$bizsession->request(5,11,0,$requeststr."&fileid=".$s);
    $s1=$bizsession->redirecturl();
    if ($s1!="")
    {
?>
<script language="javascript">
     window.location.href='<?php echo $s1; ?>';
</script>
<?php
    }
    else echo $s;
?>
</body>
</html>

