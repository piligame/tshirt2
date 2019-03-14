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
        <li class="setup1 white">填寫帳號資料</li>
        <li class="setup2 white2">認證信箱</li>
        <li class="setup4 white2">成功啟用帳號！</li>
    </ul>
    <form id="origin_form" name="origin_form" action="<?=$next_page?>" method="post" autocomplete="off">
    	<DIV class="reg_hd fontt">
            <UL>
                <LI><div class="lbl_div">姓名：</div>
                	<input type="text" name="member_name" id="member_name" class="fontt" /><span id="msg" name="msg"></span>
                </LI>
                <LI><div class="lbl_div">電子郵件帳號：</div>
                <input type="text" name="member_email" id="member_email" size="50" /><span id="msg" name="msg"></span>
                </LI>
                <LI><div class="lbl_div"></div>
                <span class="mail_msg">請輸入您可以收信的E-mail信箱，以確保您順利的註冊。</span>
                </LI> 
              <LI><div class="lbl_div">密碼：</div>
                <input type="password" name="member_password" id="member_password" />
                </LI>
                <LI><div class="lbl_div">再輸入一次密碼：</div>
              <input type="password" name="member_repassword" id="member_repassword" /><span id="msg" name="msg"></span>                </LI>       
                <LI><div class="lbl_div">生日：</div>
              <input type="text" id="member_birthday" name="member_birthday" onClick="var mydate = new setday(this);" readOnly><span id="msg" name="msg"></span>                </LI>                  
                <LI>
                  <div class="lbl_div">性別：</div>
                  <select name="member_sex" id="member_sex">
                  	<option value="NO">選擇性別</option>
                    <option value="1">男生</option>
                    <option value="0">女生</option>
                  </select><span id="msg" name="msg"></span>
                </LI> 
                <LI><div class="lbl_div">聯絡電話：</div>
                	<input type="text" name="member_tel" id="member_tel" class="fontt" /><span id="msg" name="msg">
                </LI> 
                <LI><div class="lbl_div">郵遞區號：</div>
                <input name="zipcode" class="fontt" id="zipcode" size="6" maxlength="3" value="100" readonly /> - <input name="zipcode2" class="fontt" id="zipcode2" size="2" maxlength="3" readonly />
                </LI>
                <LI><div class="lbl_div">&nbsp;</div>
<select id="county" name="county" onChange="changeZone(document.getElementById('county'), document.getElementById('area'), document.getElementById('zipcode'));" size="1" class="box3"></select><select name="area" id="area" onChange="showZipCode(document.getElementById('county'), document.getElementById('area'), document.getElementById('zipcode'));" size="1" class="box3"></select><script language="JavaScript">initCounty(document.getElementById('county'));showZone(document.getElementById('county'), document.getElementById('area'),document.getElementById('zipcode').value);</script>                	
                </LI>     
                <LI><div class="lbl_div">地址：</div>
              <input type="text" name="member_address" id="member_address" size="60" /><span id="msg" name="msg"></span>                </LI>      
                <LI><div class="lbl_div">認證碼：</div>
                <input type="text" name="chk" id="chk" class="top" /><span id="msg" name="msg"></span>&nbsp;
                <img id="captcha_img" name="captcha_img" src="security_img.php" />
              </LI>             
              <LI>
              	<div class="lbl_div"></div>
                <span class="mail_msg">請輸入圖中文字。</span>
              </LI>                                                                                
              <LI><div class="lbl_div"></div>
                <input name="img_next" type="button" class="cursor_p" onclick="ajax_mail();" value="下一步" />
              </LI>
            </UL>
        </DIV>
    </form>
</body>
</html>
