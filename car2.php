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
            <img src="images/cart_03.gif" />
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
                    <td><div class="div_width">NT$</div><div class="td_div3">7,399</div></td>
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
                    <td><div class="div_width">NT$</div><div class="td_div1">9,798</div></td>
                </tr>
                <tr class="urder_td">
                    <td colspan="6" align="right">運費：</td>
                    <td><div class="div_width">NT$</div><div class="td_div1">110</div></td>
                </tr>
                <tr class="tgb">
                    <td colspan="6" align="right">總計：</td>
                    <td><div class="div_width">NT$</div><div class="td_div1">99,990</div></td>
                </tr>
            </table><br />
            <div class="red_setup">2.請選擇下列一種付款方式</div>
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="5" class="small_font2 line_hight">
              <tbody>
                <tr>
                  <td width="20" height="20" valign="top"><input name="member_pay" class="radio" type="radio" value="ATM轉帳" /></td>
                  <td width="70" align="left" valign="top" class="header">ATM轉帳</td>
                  <td width="412" align="left"><p>銀行名稱：合作金庫銀行 台中分行<br />
                    戶　　名：美香珍<br />
                    帳　　號：1234-567-111235 </p></td>
                </tr>
                <tr class="urder_td">
                  <td height="8" colspan="3">&nbsp;</td>
                </tr>
                <tr>
                  <td height="20" valign="top"><input name="member_pay" class="radio" type="radio" value="銀行匯款" /></td>
                  <td align="left" valign="top" class="header">銀行匯款</td>
                  <td align="left"><p>銀行名稱：合作金庫銀行 台中分行<br />
                    戶　　名：美香珍<br />
                    帳　　號：1234-567-111235 </p></td>
                </tr>
                <tr class="urder_td">
                  <td height="8" colspan="3">&nbsp;</td>
                </tr>
                <tr>
                  <td height="20" valign="top"><input name="member_pay" class="radio" type="radio" value="貨到付款" /></td>
                  <td align="left" valign="top" class="header">貨到付款</td>
                  <td align="left"> 訂貨後我們以電話聯絡，以確認您方便收貨的時間。並請您準備「貨款總金額」，交給我們的物流人員即可。</td>
                </tr>
              </tbody>
            </table>
        </DIV>
        <div align="center">
            <input name="preov" class="input_face" type="button" value="上一步" onclick="location='car.php'" />
            <input name="next" class="input_face" type="button" value="下一步" onclick="location='car3.php'" />
        </div>
    </div>
    <div class="right_div">
	    <?
		include("login.php");
		?>
    </div>
</body>
</html>
