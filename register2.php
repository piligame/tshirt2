<?
include("./tsaserver/config.php"); 
include("./tsaserver/hihot_functiom.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=query_website_name()?></title>
<link href="./css/top.css" rel="stylesheet" type="text/css">
<link href="./css/register.css" rel="stylesheet" type="text/css">
</head>
<body>
	<?
	include("top2.php");
	?>
    <ol class="bread">
        <li><a href="index.php">首頁</a></li>
        <li>></li>
        <li>帳號註冊</li>
    </ol><div class="model_name"></div>
    <hr class="hr_dot" />
    <ul class="account_setup">
        <li class="setup2 white2">填寫帳號資料</li>
        <li class="setup1 white">認證信箱</li>
        <li class="setup4 white2">成功啟用帳號！</li>
    </ul>
    <?=$temp_email?>
</body>
</html>
