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
        <li class="setup2 white2">認證信箱</li>
        <li class="setup3 white">成功啟用帳號！</li>
    </ul>
    <DIV class="reg_hd fontt">
    	<form id="origin_form" name="origin_form" method="post" action="<?=$self_page?>" autocomplete="off" onsubmit="check();">
            <input type="hidden" name="check_pass">
            <input type="hidden" name="key" id="key" value="<?=$key?>">
            <UL>
                <li><?=$temp_email?></li>
                <LI><div class="lbl_div">帳號：</div>
                  <span><?=$show_mail?></span>
                </LI>
                <LI><div class="lbl_div">密碼：</div>
                <input type="password" name="member_password" id="member_password" /><span id="msg" name="msg"></span>
                </LI>
                <LI><div class="lbl_div fcheckbox"><input type="checkbox" name="chk_login" id="chk_login" value="check" /></div>
                <span class="spancheck">自動登入</span>
                </LI> 
                <LI><div class="lbl_div"></div><input name="img_next" type="submit" class="cursor_p" value="登  入" />
                </LI>                    
            </UL>
            </form>
    </DIV>
</body>
</html>
