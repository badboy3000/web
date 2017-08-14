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
.mainbox {
    background: #FFF;
    border: 1px solid #C1C1C1;
    padding: 1px;
    margin-bottom: 8px;
}
a{ text-decoration: none; color: #0053A1 }
a:hover{ text-decoration: underline }
.normaltxt				{ font: 12px Tahoma, Verdana; color: #225588 }
.quotetxt				{ font: 12px Tahoma, Verdana; color: #225588 }
.tableborder			{ background: #DEDEDE; border: 1px solid #A4B6D7 }
.singleborder			{ border: 1px solid #C1C1C1 }
.bottomline {
  border-bottom-style: solid;
  border-width: thin;
  border: 1px solid #C1C1C1
}
p {word-wrap:break-word}
.oddrow {font: 12px Arial, Tahoma; color: #225588; background-color: #D3DCEE;}
.evenrow {font: 12px Arial, Tahoma; color: #225588; background-color: #D3DCEE;}
table{
    table-layout: fixed;
}
</style>
</head>
<body style='margin-top:0;margin-left:20px;margin-right:20px;'>
<?php
    echo $bizsession->request(5,12,0,'');
?>
</body>
</html>

