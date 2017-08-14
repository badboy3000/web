<?php
    $appid = 5;
    require "inc/common_notlogin.php";
    if (!$bizsession->islogin())
    {
	$remember=$_COOKIE["bizremember_".$appid]."";
	if ($remember!="")
	{
         	if ($bizsession->login('9^'.$remember)!=true)
                {
			setcookie("bizremember_".$appid, "", 0);
                }
		else 
		{
			setcookie("bizremember_".$appid, $remember, time()+3600*24*365*10);
		}
	}

        if (!$bizsession->islogin())
	{
		if ($bizsession->login('2^'.$_GET['u'])!=true)
        	{
            		echo '请等待用户扫描';
            		exit;
		}
		else
		{
			$s = $bizsession->request(1,34,0,$_GET['u']);
			if ($s=="1")
			{
				setcookie("bizremember_".$appid, $_GET['u'], time()+3600*24*365*10);
			}
			else
			{
				setcookie("bizremember_".$appid, "", 0);
			}
		}
        }
	else 
	{
	}
    }

    echo '1';
?>
