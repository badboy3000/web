<?php
    $appid = 5;
    include "inc/common_needlogin.php";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="maximum-scale=7; user-scalable=1; initial-scale=1;" /> 
<title>保存数据</title>
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<meta charset="utf-8" />
</head>
<body >
<?php
    $s=$bizsession->request(5,2,0,file_get_contents("php://input"));
    $s1=$bizsession->redirecturl();
    if ($s1!="")
    {
        header('Location: '.$s1);
        exit();
    }
    else echo $s;
?>
</body>
</html>

