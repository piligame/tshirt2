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
<script type="text/javascript" src="./jq/jquery-1.4.js"></script>
</head>
<body>
	<?
	include("top2.php");
	include("logo.php");
	?>
    <div class="big_center_div">
        <ol class="ol_store">
            <li><a href="store.php">商店首頁</a></li>
            <li class="select_index"><a href="store_pass.php">商店滿意度</a></li>
            <li><a href="store_intro.php">商店介紹</a></li>
            <li><a href="store_help.php">購物須知</a></li>
            <li><a href="store_customer.php">商店客服</a></li>
        </ol>
    </div>
    <div class="left_div">
    	<DIV class="hd_frame">
         	<H2>本店商品搜尋</H2>
            <div class="prod_search">
                <div>關鍵字：<input type="text" name="key_word" size="17" />
                </div>
                <div>價格：<input type="text" name="key_word" size="5" />至<input type="text" name="key_word" size="5" />
                </div>
                <div class="model_name">
                  <input type="button" name="search" class="store_but" value="搜尋" />
                </div>
            </div>
        </DIV>
        <DIV class="hd_frame">
         	<H2>本店全部分類</H2>
            <div class="bd_frame">
                <ol class="ol_category">
                	<LI class="li_all"><a href="#">全部商品</a>(1123)</LI>
                    <LI><a href="#">T恤</a>(123)</LI>
                    <LI><a href="#">T恤</a>(123)</LI>
                    <LI><a href="#">T恤</a>(123)</LI>
                    <LI><a href="#">T恤</a>(123)</LI>
                    <LI><a href="#">T恤</a>(123)</LI>
                    <LI><a href="#">T恤</a>(123)</LI>
                </ol>
            </div>
        </DIV>
    </div>
    <div class="big_left_div">
    	<DIV class="under_frame div_bg1">
         	<H3>商店滿意度</H3>
            <div class="please main">商店滿意度
            	<div>87分</div>
                <div class="bar_border">
	                <div class="bar_size"><div class="bar_fill" style="width:87px;"></div></div>
                </div>
        	</div>
            <div class="phelp">
            	<div class="phelp_L">詳細滿意度內容</div><a class="border_href" href="#"><div class="help_img"></div><div>說明</div></a>
            </div>
            <ol class="please_ol">
            	<li><div class="title_name">商品品質：</div><span>87分</span><div class="bar_size"><div class="bar_fill" style="width:87px;"></div></div></li>
                <li><div class="title_name">出貨速度：</div><span>84分</span><div class="bar_size"><div class="bar_fill" style="width:84px;"></div></div></li>
                <li><div class="title_name">售後服務：</div><span>81分</span><div class="bar_size"><div class="bar_fill" style="width:81px;"></div></div></li>
            </ol>
        </DIV>
        <DIV class="hd_frame div_bg1">
         	<H2>詳細滿意度列表<span>（近一年已經有 119 筆評分）</span></H2>
            <div class="page">
                <span><a href="#">上一頁</a></span>
                <span><a href="#">1</a></span>
                <span>2</span>
                <span><a href="#">3</a></span>
                <span><a href="#">4</a></span>
                <span><a href="#">5</a></span>
                <span><a href="#">6</a></span>
                <span><a href="#">7</a></span>
                <span><a href="#">8</a></span>
                <span><a href="#">9</a></span>
                <span><a href="#">10</a></span>
                <span><a href="#">下一頁</a></span>
            </div>
            <ol class="please_list">
            	<li class="list_title"><div class="list1"><a href="#" class="border_href">滿意度分數<img src="./images/up.gif" /><img src="./images/down.gif" /></a></div><div class="list2">商品名稱／意見與回覆</div><div class="list3">買家帳號</div><div class="list4"><a href="#" class="border_href">日期<img src="./images/up.gif" /><img src="./images/down.gif" /></a></div><div class="model_name"></div></li>
                <li>
                	<div class="list1">
                    	<div class="score">87分</div>
                        <div class="bar_border">
                            <div class="bar_size"><div class="bar_fill" style="width:87px;"></div></div>
                        </div>
                    </div>
                    <div class="list2">
                    	<ul>
                        	<li>《媽咪我愛你》Elizabeth Arden 雅頓 綠茶SPA隨身組</li>
                            <li>【最新到貨】FG票選特優! BONANZA 寶藝 酵素冷膜(KFM) 550g</li>
                            <li>Semon 頂級保加利亞玫瑰全效精華乳 120ml</li>
                    	</ul>
                        <div class="open">[♁更多]</div>
                        <div class="opinion">意見：很快揪收到囉~唯一美中不足的揪是沒有說明書,搞好久ㄒ一ㄒa,使用起來有咻咻聲!不過大致上都很喜歡~</div>
                    </div><div class="list3">dora****</div><div class="list4">2010/05/04</div><div class="model_name"></div>
                </li>
                <li>
                	<div class="list1">
                    	<div class="score">87分</div>
                        <div class="bar_border">
                            <div class="bar_size"><div class="bar_fill" style="width:87px;"></div></div>
                        </div>
                    </div>
                    <div class="list2">
                    	<ul>
                        	<li>《媽咪我愛你》Elizabeth Arden 雅頓 綠茶SPA隨身組</li>
                    	</ul>
                        <div class="open">[♁更多]</div>
                        <div class="opinion">意見：很快揪收到囉~唯一美中不足的揪是沒有說明書,搞好久ㄒ一ㄒa,使用起來有咻咻聲!不過大致上都很喜歡~</div>
                    </div><div class="list3">dora****</div><div class="list4">2010/05/04</div><div class="model_name"></div>
                </li>
                <li>
                	<div class="list1">
                    	<div class="score">87分</div>
                        <div class="bar_border">
                            <div class="bar_size"><div class="bar_fill" style="width:87px;"></div></div>
                        </div>
                    </div>
                    <div class="list2">
                    	<ul>
                        	<li>《媽咪我愛你》Elizabeth Arden 雅頓 綠茶SPA隨身組</li>
                            <li>【最新到貨】FG票選特優! BONANZA 寶藝 酵素冷膜(KFM) 550g</li>
                            <li>Semon 頂級保加利亞玫瑰全效精華乳 120ml</li>
                    	</ul>
                        <div class="open">[♁更多]</div>
                        <div class="opinion">意見：很快揪收到囉~唯一美中不足的揪是沒有說明書,搞好久ㄒ一ㄒa,使用起來有咻咻聲!不過大致上都很喜歡~</div>
                    </div><div class="list3">dora****</div><div class="list4">2010/05/04</div><div class="model_name"></div>
                </li>
                <li>
                	<div class="list1">
                    	<div class="score">87分</div>
                        <div class="bar_border">
                            <div class="bar_size"><div class="bar_fill" style="width:87px;"></div></div>
                        </div>
                    </div>
                    <div class="list2">
                    	<ul>
                        	<li>《媽咪我愛你》Elizabeth Arden 雅頓 綠茶SPA隨身組</li>
                    	</ul>
                        <div class="open">[♁更多]</div>
                        <div class="opinion">意見：很快揪收到囉~唯一美中不足的揪是沒有說明書,搞好久ㄒ一ㄒa,使用起來有咻咻聲!不過大致上都很喜歡~</div>
                    </div><div class="list3">dora****</div><div class="list4">2010/05/04</div><div class="model_name"></div>
                </li>
                <li>
                	<div class="list1">
                    	<div class="score">87分</div>
                        <div class="bar_border">
                            <div class="bar_size"><div class="bar_fill" style="width:87px;"></div></div>
                        </div>
                    </div>
                    <div class="list2">
                    	<ul>
                        	<li>《媽咪我愛你》Elizabeth Arden 雅頓 綠茶SPA隨身組</li>
                            <li>【最新到貨】FG票選特優! BONANZA 寶藝 酵素冷膜(KFM) 550g</li>
                            <li>Semon 頂級保加利亞玫瑰全效精華乳 120ml</li>
                    	</ul>
                        <div class="open">[♁更多]</div>
                        <div class="opinion">意見：很快揪收到囉~唯一美中不足的揪是沒有說明書,搞好久ㄒ一ㄒa,使用起來有咻咻聲!不過大致上都很喜歡~</div>
                    </div><div class="list3">dora****</div><div class="list4">2010/05/04</div><div class="model_name"></div>
                </li>
                <li>
                	<div class="list1">
                    	<div class="score">87分</div>
                        <div class="bar_border">
                            <div class="bar_size"><div class="bar_fill" style="width:87px;"></div></div>
                        </div>
                    </div>
                    <div class="list2">
                    	<ul>
                        	<li>《媽咪我愛你》Elizabeth Arden 雅頓 綠茶SPA隨身組</li>
                    	</ul>
                        <div class="open">[♁更多]</div>
                        <div class="opinion">意見：很快揪收到囉~唯一美中不足的揪是沒有說明書,搞好久ㄒ一ㄒa,使用起來有咻咻聲!不過大致上都很喜歡~</div>
                    </div><div class="list3">dora****</div><div class="list4">2010/05/04</div><div class="model_name"></div>
                </li>
                <li>
                	<div class="list1">
                    	<div class="score">87分</div>
                        <div class="bar_border">
                            <div class="bar_size"><div class="bar_fill" style="width:87px;"></div></div>
                        </div>
                    </div>
                    <div class="list2">
                    	<ul>
                        	<li>《媽咪我愛你》Elizabeth Arden 雅頓 綠茶SPA隨身組</li>
                            <li>【最新到貨】FG票選特優! BONANZA 寶藝 酵素冷膜(KFM) 550g</li>
                            <li>Semon 頂級保加利亞玫瑰全效精華乳 120ml</li>
                    	</ul>
                        <div class="open">[♁更多]</div>
                        <div class="opinion">意見：很快揪收到囉~唯一美中不足的揪是沒有說明書,搞好久ㄒ一ㄒa,使用起來有咻咻聲!不過大致上都很喜歡~</div>
                    </div><div class="list3">dora****</div><div class="list4">2010/05/04</div><div class="model_name"></div>
                </li>
                <li>
                	<div class="list1">
                    	<div class="score">87分</div>
                        <div class="bar_border">
                            <div class="bar_size"><div class="bar_fill" style="width:87px;"></div></div>
                        </div>
                    </div>
                    <div class="list2">
                    	<ul>
                        	<li>《媽咪我愛你》Elizabeth Arden 雅頓 綠茶SPA隨身組</li>
                    	</ul>
                        <div class="open">[♁更多]</div>
                        <div class="opinion">意見：很快揪收到囉~唯一美中不足的揪是沒有說明書,搞好久ㄒ一ㄒa,使用起來有咻咻聲!不過大致上都很喜歡~</div>
                    </div><div class="list3">dora****</div><div class="list4">2010/05/04</div><div class="model_name"></div>
                </li>
                <li>
                	<div class="list1">
                    	<div class="score">87分</div>
                        <div class="bar_border">
                            <div class="bar_size"><div class="bar_fill" style="width:87px;"></div></div>
                        </div>
                    </div>
                    <div class="list2">
                    	<ul>
                        	<li>《媽咪我愛你》Elizabeth Arden 雅頓 綠茶SPA隨身組</li>
                            <li>【最新到貨】FG票選特優! BONANZA 寶藝 酵素冷膜(KFM) 550g</li>
                            <li>Semon 頂級保加利亞玫瑰全效精華乳 120ml</li>
                    	</ul>
                        <div class="open">[♁更多]</div>
                        <div class="opinion">意見：很快揪收到囉~唯一美中不足的揪是沒有說明書,搞好久ㄒ一ㄒa,使用起來有咻咻聲!不過大致上都很喜歡~</div>
                    </div><div class="list3">dora****</div><div class="list4">2010/05/04</div><div class="model_name"></div>
                </li>
                <li>
                	<div class="list1">
                    	<div class="score">87分</div>
                        <div class="bar_border">
                            <div class="bar_size"><div class="bar_fill" style="width:87px;"></div></div>
                        </div>
                    </div>
                    <div class="list2">
                    	<ul>
                        	<li>《媽咪我愛你》Elizabeth Arden 雅頓 綠茶SPA隨身組</li>
                    	</ul>
                        <div class="open">[♁更多]</div>
                        <div class="opinion">意見：很快揪收到囉~唯一美中不足的揪是沒有說明書,搞好久ㄒ一ㄒa,使用起來有咻咻聲!不過大致上都很喜歡~</div>
                    </div><div class="list3">dora****</div><div class="list4">2010/05/04</div><div class="model_name"></div>
                </li>
            </ol>
            <div class="page">
                <span><a href="#">上一頁</a></span>
                <span><a href="#">1</a></span>
                <span>2</span>
                <span><a href="#">3</a></span>
                <span><a href="#">4</a></span>
                <span><a href="#">5</a></span>
                <span><a href="#">6</a></span>
                <span><a href="#">7</a></span>
                <span><a href="#">8</a></span>
                <span><a href="#">9</a></span>
                <span><a href="#">10</a></span>
                <span><a href="#">下一頁</a></span>
            </div>
        </DIV>
    </div>
</body>
</html>
<script type="text/javascript">
$(function(){
	$(".list2 ul").each(function(){
		if($(this).children("li").size() > 1)
			$(this).children("li:gt(0)").css("display","none");
		else
			$(this).next().text("");
	});
	
	$(".open").bind("click", function(){
		if($(this).text() == "[♁更多]")
		{
			$(this).prev().children("").css("display","block");
			$(this).text("[θ收摺]");
		}
		else
		{
			$(this).prev().children("li:gt(0)").css("display","none");
			$(this).text("[♁更多]");
		}
	});
});
</script>