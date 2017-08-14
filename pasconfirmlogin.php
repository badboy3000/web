<?php
    $appid = 5;
    require "inc/common_needlogin.php";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="maximum-scale=7; user-scalable=1; initial-scale=1;" /> 
<title>确定登录</title>
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<meta charset="utf-8" />
<link href="jquery/jquery.mobile-1.4.5.css" rel="stylesheet" type="text/css"/>
<script src="jquery/jquery-2.1.3.min.js" type="text/javascript"></script>
<script src="jquery/jquery.mobile-1.4.5.min.js" type="text/javascript"></script>
<style>
</style>
</head>
<body >
<div data-role="page" name="wqpage" id="wqpage" data-dom-cache="false" >
<?php
    $s = $bizsession->request($appid,7,0,file_get_contents("php://input"));
    echo $s;
?>
</body>
</html>

