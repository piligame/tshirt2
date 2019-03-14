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
          	<li class="select_index"><a href="store_help.php">購物須知</a></li>
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
         	<a name="hhelp"><H3>購物說明</H3></a>
            <ol class="ol_num">
            	<li><span class="help_title">付款方式</span>
                	<div class="help_context">1.提供線上信用卡一次付清交易，本站接受VISA、Master或JCB信用卡線上刷卡(限台灣本國信用卡)不接受國外信用卡的使用。
2.提供線上信用卡分期交易(3期，6期，12期，24期，36期），20多家的信用卡分期機制。
3.提供ATM轉帳及電腦線上轉帳，選擇ATM自動櫃員機轉帳繳款，則可用電腦或提款機轉帳，讓您在全省任何一部ATM自動櫃員機及電腦線上轉帳，都能執行交易，十分安全方便。(使用ATM轉帳時，系統會提供你專屬的虛擬帳號，請照訂單上面的金額做匯款動作及臨櫃匯款(若金額不符，系統則無法辨識），若需臨櫃匯款需來電詢問資料。
4.若需國外交易我們將提供西聯匯款作為主要付款方式（若有需求問題請洽詢客服諮詢）
					</div>
                    <div class="top_right"><a href="#hhelp" class="border_href"><img src="./images/up.gif" />TOP</a></div>
                </li>
                <li><span class="help_title">付款方式</span>
                	<div class="help_context">1.提供線上信用卡一次付清交易，本站接受VISA、Master或JCB信用卡線上刷卡(限台灣本國信用卡)不接受國外信用卡的使用。
2.提供線上信用卡分期交易(3期，6期，12期，24期，36期），20多家的信用卡分期機制。
3.提供ATM轉帳及電腦線上轉帳，選擇ATM自動櫃員機轉帳繳款，則可用電腦或提款機轉帳，讓您在全省任何一部ATM自動櫃員機及電腦線上轉帳，都能執行交易，十分安全方便。(使用ATM轉帳時，系統會提供你專屬的虛擬帳號，請照訂單上面的金額做匯款動作及臨櫃匯款(若金額不符，系統則無法辨識），若需臨櫃匯款需來電詢問資料。
4.若需國外交易我們將提供西聯匯款作為主要付款方式（若有需求問題請洽詢客服諮詢）
					</div>
                    <div class="top_right"><a href="#hhelp" class="border_href"><img src="./images/up.gif" />TOP</a></div>
                </li>
                <li><span class="help_title">付款方式</span>
                	<div class="help_context">1.提供線上信用卡一次付清交易，本站接受VISA、Master或JCB信用卡線上刷卡(限台灣本國信用卡)不接受國外信用卡的使用。
2.提供線上信用卡分期交易(3期，6期，12期，24期，36期），20多家的信用卡分期機制。
3.提供ATM轉帳及電腦線上轉帳，選擇ATM自動櫃員機轉帳繳款，則可用電腦或提款機轉帳，讓您在全省任何一部ATM自動櫃員機及電腦線上轉帳，都能執行交易，十分安全方便。(使用ATM轉帳時，系統會提供你專屬的虛擬帳號，請照訂單上面的金額做匯款動作及臨櫃匯款(若金額不符，系統則無法辨識），若需臨櫃匯款需來電詢問資料。
4.若需國外交易我們將提供西聯匯款作為主要付款方式（若有需求問題請洽詢客服諮詢）
					</div>
                    <div class="top_right"><a href="#hhelp" class="border_href"><img src="./images/up.gif" />TOP</a></div>
                </li>
                <li><span class="help_title">付款方式</span>
                	<div class="help_context">1.提供線上信用卡一次付清交易，本站接受VISA、Master或JCB信用卡線上刷卡(限台灣本國信用卡)不接受國外信用卡的使用。
2.提供線上信用卡分期交易(3期，6期，12期，24期，36期），20多家的信用卡分期機制。
3.提供ATM轉帳及電腦線上轉帳，選擇ATM自動櫃員機轉帳繳款，則可用電腦或提款機轉帳，讓您在全省任何一部ATM自動櫃員機及電腦線上轉帳，都能執行交易，十分安全方便。(使用ATM轉帳時，系統會提供你專屬的虛擬帳號，請照訂單上面的金額做匯款動作及臨櫃匯款(若金額不符，系統則無法辨識），若需臨櫃匯款需來電詢問資料。
4.若需國外交易我們將提供西聯匯款作為主要付款方式（若有需求問題請洽詢客服諮詢）
					</div>
                    <div class="top_right"><a href="#hhelp" class="border_href"><img src="./images/up.gif" />TOP</a></div>
                </li>
                <li><span class="help_title">付款方式</span>
                	<div class="help_context">1.提供線上信用卡一次付清交易，本站接受VISA、Master或JCB信用卡線上刷卡(限台灣本國信用卡)不接受國外信用卡的使用。
2.提供線上信用卡分期交易(3期，6期，12期，24期，36期），20多家的信用卡分期機制。
3.提供ATM轉帳及電腦線上轉帳，選擇ATM自動櫃員機轉帳繳款，則可用電腦或提款機轉帳，讓您在全省任何一部ATM自動櫃員機及電腦線上轉帳，都能執行交易，十分安全方便。(使用ATM轉帳時，系統會提供你專屬的虛擬帳號，請照訂單上面的金額做匯款動作及臨櫃匯款(若金額不符，系統則無法辨識），若需臨櫃匯款需來電詢問資料。
4.若需國外交易我們將提供西聯匯款作為主要付款方式（若有需求問題請洽詢客服諮詢）
					</div>
                    <div class="top_right"><a href="#hhelp" class="border_href"><img src="./images/up.gif" />TOP</a></div>
                </li>
            </ol>
        </DIV>
    </div>
</body>
</html>
