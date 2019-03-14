<?php
include("../tsaserver/config.php");
include("../tsaserver/hihot_functiom.php");
include("../public/ajax_security.php");

$database_name = "member_tb";
$member_id = $_POST['member_id'];
$rand = $_POST['rand'];

if(!security_check())
{
	echo "error";
	exit();
}
else
{
	if($_SESSION['chk2'] != "" && $_SESSION['chk2'] != NULL && $rand == $_SESSION["chk2"])
	{
		$sql_member = sprintf("select member_id from $database_name where member_id = %s", quote_smart($member_id));
		if(mysql_check_exit($sql_member))
		{
			echo "此帳號已存在！請使用另一個帳號";
		}
		else
		{
			echo "此帳號可以使用！";
		}
	}
	else
	{
		echo "error";
	}
}
session_unregister("chk2");
?>