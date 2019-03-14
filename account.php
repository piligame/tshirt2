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
<link href="./base/jquery-ui-1.8rc1.custom.css" rel="stylesheet" type="text/css" />
<link href="./css/profile.css" rel="stylesheet" type="text/css">
<link href="./css/user.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./jq/jquery-1.4.js"></script>
<script type="text/javascript" src="./jq/jquery-ui-1.8rc1.custom.js"></script>
</head>
<body>
	<?
	include("top2.php");
	?>
    <ol class="bread">
		<li><a href="index.php">首頁</a></li>
        <li>></li>
        <li>kenoscar的帳戶</li>
    </ol>
    <div class="big_left_div">
		<DIV class="hd_frame">
            <div class="small_left_div">
                <ol class="main_menu">
                    <li><a href="user.php">個人主頁</a></li>
                    <li><a href="user_show.php">服飾秀</a></li>
                    <li><a href="user_product.php">商品/收藏</a></li>
                    <li><a href="user_talk.php">討論</a></li>
                    <li><a href="user_friend.php">好友</a></li>
                    <li class="div_bg2"><a href="account.php">資金管理</a></li>
                    <li><a href="system_msg.php">系統訊息</a></li>
                </ol>
            </div>
            <div class="small_center_div">
            	<div id="tabs">
                    <ul>
                        <li class="tab_li_title"><a href="#tabs-1">四月帳戶記錄</a></li>
                        <li class="tab_li_title"><a href="#tabs-2">我要提現</a></li>
                        <li class="tab_li_title"><a href="#tabs-3">帳戶歷史記錄</a></li>
                    </ul>
                    <div id="tabs-1">
                    	<table width="100%" border="0" cellpadding="4" cellspacing="1">
                            <tr class="td_head">
                                <th width="20%">操作時間</th><th width="50%">類型</th><th width="15%">金額</th><th width="15%">餘額</th>
                            </tr>
                            <tr>
                                <td>2010-09-20 12:01:02</td><td class="friend_me"><a href="#">網站推廣收入</a></td><td><div class="div_width">NT$</div><div class="td_div4">212,000</div></td><td><div class="div_width">NT$</div><div class="td_div4">212,000</div></td>
                            </tr>
                            <tr class="tr_center">
                                <td colspan="4">目前沒有上傳Show</td>
                            </tr>
                        </table>
                    </div>
                    <div id="tabs-2">
                    	<table width="100%" border="0" cellpadding="4" cellspacing="1">
                            <tr>
                                <td class="td_head2" width="40%">提領金額(需提領2000元以上):</td><td width="60%"><input type="text" name="get_money" /></td>
                            </tr>
                            <tr>
                                <td class="td_head2">填寫您接受款項的帳號方式如：<br />
                                銀行名稱：合作金庫銀行-台中分行<br />
                                戶名：賴小宏<br />
                                帳號：1234-567-111235                                
                                </td>
                                <td><textarea name="textarea" id="textarea" cols="50" rows="5"></textarea></td>
                            </tr>
                            <tr>
                            	<td class="td_head2">認證碼：</td>
                                <td><input type="text" name="chk" id="chk" class="top" /><span id="msg" name="msg"></span>&nbsp;
                <img id="captcha_img" name="captcha_img" src="security_img.php" /></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="button" value="提交申請" class="but_search" /><input type="reset" class="but_search" value="重置表單" /></td>
                            </tr>
                        </table>
                  </div>
                    <div id="tabs-3">
                    	<div class="acc_div">日期起：<input type="text" name="sdate" /></div><div class="acc_div">日期迄：<input type="text" name="edate" /></div><div><input type="button" name="search" class="but_search" value="查詢" /></div>
                    	<table width="100%" border="0" cellpadding="4" cellspacing="1">
                            <tr class="td_head">
                                <th width="20%">操作時間</th><th width="50%">類型</th><th width="15%">金額</th><th width="15%">餘額</th>
                            </tr>
                            <tr>
                                <td>2010-09-20 12:01:02</td><td class="friend_me"><a href="#">網站推廣收入</a></td><td><div class="div_width">NT$</div><div class="td_div4">212,000</div></td><td><div class="div_width">NT$</div><div class="td_div4">212,000</div></td>
                            </tr>
                            <tr class="tr_center">
                                <td colspan="4">目前沒有上傳Show</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </DIV>
    </div>
    <div class="right_div">
    	<?
		include("login.php");
		?>
    </div>
</body>
</html>
<script type="text/javascript">
$(function(){
	$("#tabs").tabs({
			event: 'click'
		});
	$("#tabs").tabs().find(".ui-tabs-nav").sortable({axis:'x'});
});
</script>