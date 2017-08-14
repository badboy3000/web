<?php
    $appid = 5;
    include "inc/common_notlogin.php";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
<title>PAS社区论坛</title>
<meta http-equiv="keywords" content="freepascal pascal ebizmis pas社区 linux 开发框架 开发平台">
<meta http-equiv="description" content="freepascal pascal ebizmis pas社区 linux 开发框架 开发平台">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<meta charset="utf-8" />
<link href="jquery/jquery.mobile-1.4.5.min.css" rel="stylesheet" type="text/css"/>
<script src="jquery/jquery-2.1.4.min.js" type="text/javascript"></script>
<script src="jquery/jquery.mobile-1.4.5.min.js" type="text/javascript"></script>
<style>
a { text-decoration: none; color: #0053a1 }
</style>
</head>
<body>
<table width=100%>
<tr><td width=1%></td><td width=98%>
<?php
    echo $bizsession->request(5,8,0,'fromlogin');
?>
</td>
<td width=1%></td></tr>
<!-- <tr><td align=center colspan=3><b><font size=2>北京明润天成科技有限公司 备案号：京ICP备12030676号-5</font></b><br><br></td></tr> -->
</table>
</body>
</html>

