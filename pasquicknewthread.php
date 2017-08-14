<?php
    $appid = 5;
    include "inc/common_needlogin.php";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
<title>发表帖子</title>
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<meta charset="utf-8" />
</head>
<body style='margin-top:0;margin-left:20px;margin-right:20px;'>
<table width=100%>
<tr><td width=1%></td><td width=98%>
<?php
    echo $bizsession->request(5,13,0,'');
?>
</td>
<td width=1%></td></tr>
</body>
</html>

