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
    <div class="big_center_div">
        <DIV class="hd_frame">
            <div class="small_left_div">
                <ol class="main_menu">
                    <li><a href="user.php">個人主頁</a></li>
                    <li class="div_bg2"><a href="#">服飾秀</a></li>
                    <li><a href="user_product.php">商品/收藏</a></li>
                    <li><a href="user_talk.php">討論</a></li>
                    <li><a href="user_friend.php">好友</a></li>
                    <li><a href="account.php">資金管理</a></li>
                    <li><a href="system_msg.php">系統訊息</a></li>
                </ol>
            </div>
            <div class="licontext">
                <div id="tabs">
                    <ul>
                        <li><a href="#tabs-1">我的秀</a></li>
                        <li><a href="#tabs-2">上傳秀</a></li>
                        <li><a href="#tabs-3">等待上傳的秀</a></li>
                    </ul>
                    <div id="tabs-1">
                        <table width="100%" border="0" cellpadding="4" cellspacing="1">
                            <tr class="td_head">
                                <th>Show圖片</th><th>Show名稱</th><th>比賽名稱</th><th>上傳時間</th><th>點擊</th><th>得分</th><th>名次</th><th>作品狀態</th><th>操作</th>
                            </tr>
                            <tr class="tr_center">
                                <td colspan="9">目前沒有上傳Show</td>
                            </tr>
                        </table>
                    </div>
                    <div id="tabs-2">
                        <table width="100%" border="0" cellpadding="4" cellspacing="1">
                            <tr>
                                <td class="td_head">比賽名稱：</td><td>2009春季比賽</td>
                            </tr>
                            <tr>
                                <td class="td_head">選擇穿著的T恤：</td>
                                <td>輸入商品名稱或貨號<input name="product_name" type="text" /><input type="button" class="but_search" value="查詢T恤" />
                                    <select name="select_t">
                                        <option value="NO">請選擇穿著的T恤</option>
                                        <option value="t001">CK籃球</option>
                                        <option value="t002">nike籃球</option>
                                    </select>                            </td>
                            </tr>
                            <tr>
                                <td class="td_head">Show名稱：</td><td><input name="show_name" type="text" size="34" /></td>
                            </tr>
                            <tr>
                                <td class="td_head">Show描述：</td><td><textarea name="textarea" id="textarea" cols="58" rows="5"></textarea></td>
                            </tr>
                            <tr>
                                <td class="td_head">Show圖片：</td><td><input name="show_pic" type="button" class="but_search" value="BROWSE" /></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center"><input name="show_pic" type="button" class="up_but" value="上傳Show照片" /></td>
                            </tr>
                        </table>
                    </div>
                    <div id="tabs-3">
                    	<table class="tbg2 div_bg1 order_tb" width="100%" border="0" cellpadding="2" cellspacing="2">
                            <tr class="tgb">
                            	<td width="100"><div>訂單編號</div></td>
                                <td width="90"><div>商品編號</div></td>
                                <td width="266"><div>品名</div></td>
                                <td width="70"><div>尺寸</div></td>
                                <td width="80"><div>顏色</div></td>
                                <td width="94"><div>操作</div></td>
                            </tr>
                            <tr>
                            	<td><div><a href="order2.php?key=2010041907">2010041907</a></div></td>
                                <td><div><a href="#">T8004-3</a></div></td>
                                <td><div>最新款橫條七分袖棉T</div></td>
                                <td><div>Free</div></td>
                                <td><div>桔/白</div></td>
                                <td><div><input type="button" class="up_but" value="我要上傳秀" /></div></td>
                            </tr>
                        </table>
                    </div>
            	</div>
        	</DIV>
		</div>
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