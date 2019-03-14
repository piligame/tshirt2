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
<link href="./css/car.css" rel="stylesheet" type="text/css">
</head>
<body>
	<?
	include("top2.php");
	?>
    <ol class="bread">
		<li><a href="index.php">首頁</a></li>
        <li>></li>
        <li>購物車</li>
    </ol>
    <div class="big_left_div">
    	<DIV class="hd_frame div_bg1">
         	<H2>我的購物車</H2>
            <div class="div_margin small_font2 line_hight">
	            <div>已經完成訂購！您的訂單編號是 <span class="font_red">2010041901</span>。 感謝您的支持，若有問題請您依訂單編號向我們查詢。</div>
                <div>訂購日期：2010年04月19日</div>
                <div class="red_setup2">陳奕華您好，這是您的購物清單：</div>
                <table class="tbg2" width="100%" border="0" cellpadding="2" cellspacing="2">
                    <tr class="tgb">
                        <td width="90"><div align="center">商品編號</div></td>
                        <td width="266"><div align="center">品名</div></td>
                        <td width="70"><div align="center">尺寸</div></td>
                        <td width="80"><div align="center">顏色</div></td>
                        <td width="70"><div align="center">單價</div></td>
                        <td width="39"><div align="center">數量</div></td>
                        <td width="85"><div align="center">金額</div></td>
                    </tr>
                    <tr>
                        <td><div>T8004-3 </div></td>
                        <td><div>最新款橫條七分袖棉T</div></td>
                        <td><div>Free</div></td>
                        <td><div>桔/白</div></td>
                        <td><div class="div_width">NT$</div><div class="td_div3">7399</div></td>
                        <td><div class="td_div2">2</div></td>
                        <td><div class="div_width">NT$</div><div class="td_div1">798</div></td>
                    </tr>
                    <tr class="urder_td">
                        <td><div>T8004-3 </div></td>
                        <td><div>最新款橫條七分袖棉T</div></td>
                        <td><div>Free</div></td>
                        <td><div>桔/白</div></td>
                        <td><div class="div_width">NT$</div><div class="td_div3">7399</div></td>
                        <td><div class="td_div2">10</div></td>
                        <td><div class="div_width">NT$</div><div class="td_div1">9798</div></td>
                    </tr>
                    <tr>
                        <td colspan="6" align="right">小計：</td>
                        <td><div class="div_width">NT$</div><div class="td_div1">9798</div></td>
                    </tr>
                    <tr class="urder_td">
                        <td colspan="6" align="right">運費：</td>
                        <td><div class="div_width">NT$</div><div class="td_div1">110</div></td>
                    </tr>
                    <tr class="tgb">
                        <td colspan="6" align="right">總計：</td>
                        <td><div class="div_width">NT$</div><div class="td_div1">99990</div></td>
                    </tr>
                </table>
                <hr class="hr_dot" />
                <div class="red_setup">3.確認訂購者資訊</div>
                <UL class="bigoli small_font2">
                    <LI><div class="lbl_div">姓名：</div><div class="lbl_div2">陳奕華</div></LI>
                    <LI><div class="lbl_div">性別：</div><div class="lbl_div2">女</div></LI>
                    <LI><div class="lbl_div">電子郵件：</div><div class="lbl_div2">aa@aa.com.tw</div></LI>
                    <LI><div class="lbl_div">聯絡電話：</div><div class="lbl_div2">0424521260</div></LI>
                    <LI><div class="lbl_div">手機號碼：</div><div class="lbl_div2">0923832111</div></LI>
                    <LI><div class="lbl_div">聯絡地址：</div><div class="lbl_div2">414 台中市太平市中山路100號</div></LI>
                </UL>
                <hr class="hr_dot" />
                <div class="red_setup">3.收件者資料</div>
                <UL class="bigoli small_font2">
                    <LI><div class="lbl_div">姓名：</div><div class="lbl_div2">陳奕華</div></LI>
                    <LI><div class="lbl_div">性別：</div><div class="lbl_div2">女</div></LI>
                    <LI><div class="lbl_div">聯絡電話：</div><div class="lbl_div2">0424521260</div></LI>
                    <LI><div class="lbl_div">手機號碼：</div><div class="lbl_div2">0923832111</div></LI>
                    <LI><div class="lbl_div">送貨地址：</div><div class="lbl_div2">414 台中市太平市中山路100號</div></LI>
                    <LI><div class="lbl_div">指定到貨時段：</div><div class="lbl_div2">晚上 17點~20點</div></LI>
                    <LI><div class="lbl_div">備註：</div><div class="lbl_div2">測試看看</div></LI>
                </UL>
                <hr class="hr_dot" />
                <div class="red_setup">3.交易資訊</div>
                <UL class="bigoli small_font2">
                    <LI><div class="lbl_div">付款方式：</div><div class="lbl_div2">ATM轉帳</div></LI>
                </UL>
                <hr class="hr_dot" />
                <p><div align="center">
                    <input name="print" class="input_face" type="button" value="列印本頁" onclick="window.print();" />
                </div></p>
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
