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
<link href="./css/store.css" rel="stylesheet" type="text/css">
</head>
<body>
	<?
	include("top2.php");
	include("logo.php");
	?>
    <div class="big_center_div">
        <ol class="ol_store">
            <li><a href="store.php">商店首頁</a></li>
            <li><a href="store_pass.php">商店滿意度</a></li>
            <li><a href="store_intro.php">商店介紹</a></li>
            <li><a href="store_help.php">購物須知</a></li>
            <li class="select_index"><a href="store_customer.php">商店客服</a></li>
        </ol>
    </div>
    <div class="big_center_div">
        <DIV class="hd_frame div_bg1">
          <H2>客服信箱<span>(*為必填)</span></H2>
            <ol class="ol_vertical">
              <li class="cus_mail">
                    <div>帳號：</div>
                    <div><span>*</span> 問題主旨：</div>
                    <div class="txt_con"><span>*</span> 內容：</div>
                    <div><span>*</span>認證碼：</div>
                </li>
              	<li>
           		    <div>kenoscar</div>
                	<div><input type="text" /></div>
                    <div class="txt_con">
                    	<textarea name="textarea" id="textarea" cols="45" rows="5"></textarea>
                    </div>
                    <div><input type="text" name="chk" id="chk" class="top" /><span id="msg" name="msg"></span>&nbsp;
                    	 <img id="captcha_img" name="captcha_img" src="security_img.php" />
                	</div>
           	  </li>
            </ol>
            <div class="model_name"><input type="button" value="提交申請" class="but_search" /><input type="reset" class="but_search" value="重置表單" /></div>
        </DIV>
    </div>
</body>
</html>