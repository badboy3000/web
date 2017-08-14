<?php
    $appid = 5;
    include "inc/common_needlogin.php";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="maximum-scale=7; user-scalable=1; initial-scale=1;" /> 
<title>关闭帖子</title>
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<meta charset="utf-8" />
</head>
<body >
<?php
    $s=$bizsession->request(5,22,0,'');
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

