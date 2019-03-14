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
                <li class="select_index"><a href="store_intro.php">商店介紹</a></li>
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
    	<DIV class="hd_frame div_bg1">
        	<H3>商店介紹</H3>
            <div>文字編輯器</div>
        </DIV>
        <DIV class="hd_frame">
        	<H3>基本資料</H3>
            <ol class="please_ol">
            	<li>商店名稱：傑恩服飾開發有限公司</li>
                <li>服務電話：0226963586</li>
                <li>傳真號碼：0226963585</li>
                <li>商店地址：台北縣汐止市新台五路一段96號16樓</li>
                <li>開店日期：2008.10.15</li>
            </ol>
            <div class="map">
            	Google Map
            </div>
        </DIV>
    </div>
</body>
</html>
