<?php
    $appid = 5;
    include "inc/common_trylogin.php";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
<title>PAS社区</title>
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<meta charset="utf-8" />
<link href="jquery/jquery.mobile-1.4.5.min.css" rel="stylesheet" type="text/css"/>
<script src="jquery/jquery-2.1.4.min.js" type="text/javascript"></script>
<script src="jquery/jquery.mobile-1.4.5.min.js" type="text/javascript"></script>
<style>
.mainbox {
    background: #FFF;
    border: 1px solid #C1C1C1;
    padding: 1px;
    margin-bottom: 8px;
}

</style>
</head>
<body style='margin-top:0;margin-left:20px;margin-right:20px;'>
<table width=100%>
<tr><td width=1%></td><td width=98%>
<?php
    echo $bizsession->request(5,8,0,'');
?>
</td>
<td width=1%></td></tr>
</body>
</html>

