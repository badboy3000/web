<?php
    $appid = 5;
    include "inc/common_notlogin.php";
    $bizsession->logoff();
    setcookie("bizsession_".$appid, "", 0);
    setcookie("bizremember_".$appid, "", 0);
    //    header('Location: index.php');
?>
<html>
<body>
<script language="javascript">
    window.location.href='http://www.51pas.com';
</script>
</body>
</html>
