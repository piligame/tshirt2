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
            <div class="reg_hd header"><br />
                <div class="red_setup">3.確認訂購者資訊</div>
                <UL class="bigoli small_font2">
                    <LI><div class="lbl_div">姓名：</div>
                        <input type="text" name="member_name" id="member_name" class="fontt" /><span id="msg" name="msg"></span>
                    </LI>
                    <LI>
                      <div class="lbl_div">性別：</div>
                      <select name="member_sex" id="member_sex">
                        <option value="NO" selected="selected">選擇性別</option>
                        <option value="1">男生</option>
                        <option value="0">女生</option>
                      </select><span id="msg" name="msg"></span>
                    </LI>
                    <LI><div class="lbl_div">電子郵件：</div>
                        <input type="text" name="member_email" id="member_email" size="50" /><span id="msg" name="msg"></span>
                    </LI>                   
                    <LI><div class="lbl_div">聯絡電話：</div>
                        <input type="text" name="member_tel" id="member_tel" class="fontt" /><span id="msg" name="msg"></span>
                    </LI>
                    <LI><div class="lbl_div">手機號碼：</div>
                        <input type="text" name="member_phone" id="member_phone" class="fontt" /><span id="msg" name="msg"></span>
                    </LI>
                    <LI><div class="lbl_div">郵遞區號：</div>
                    <input name="zipcode" class="fontt" id="zipcode" size="6" maxlength="3" value="100" readonly /> - <input name="zipcode2" class="fontt" id="zipcode2" size="2" maxlength="3" readonly />
                    </LI>
                    <LI><div class="lbl_div">&nbsp;</div>
    <select id="county" name="county" onChange="changeZone(document.getElementById('county'), document.getElementById('area'), document.getElementById('zipcode'));" size="1" class="box3"></select><select name="area" id="area" onChange="showZipCode(document.getElementById('county'), document.getElementById('area'), document.getElementById('zipcode'));" size="1" class="box3"></select><script language="JavaScript">initCounty(document.getElementById('county'));showZone(document.getElementById('county'), document.getElementById('area'),document.getElementById('zipcode').value);</script>                	
                    </LI>     
                    <LI><div class="lbl_div">聯絡地址：</div>
                  	<input type="text" name="member_address" id="member_address" size="60" /><span id="msg" name="msg"></span>
                    </LI>                 
                </UL><br />
                <div class="red_setup">3.請輸入收件者資料<a href="javascript:copy_base();" class="font_red font_normal">【 同訂購者請按此 】</a></div>
                <UL class="bigoli small_font2">
                    <LI><div class="lbl_div">收件者姓名：</div>
                        <input type="text" name="member_name" id="member_name" class="fontt" /><span id="msg" name="msg"></span>
                    </LI>
                    <LI>
                      <div class="lbl_div">性別：</div>
                      <select name="member_sex" id="member_sex">
                        <option value="NO" selected="selected">選擇性別</option>
                        <option value="1">男生</option>
                        <option value="0">女生</option>
                      </select><span id="msg" name="msg"></span>
                    </LI>               
                    <LI><div class="lbl_div">聯絡電話：</div>
                        <input type="text" name="member_tel" id="member_tel" class="fontt" /><span id="msg" name="msg"></span>
                    </LI>
                    <LI><div class="lbl_div">手機號碼：</div>
                        <input type="text" name="member_phone" id="member_phone" class="fontt" /><span id="msg" name="msg"></span>
                    </LI>
                    <LI><div class="lbl_div">送貨郵遞區號：</div>
                    <input name="zipcode" class="fontt" id="zipcode" size="6" maxlength="3" value="100" readonly /> - <input name="zipcode2" class="fontt" id="zipcode2" size="2" maxlength="3" readonly />
                    </LI>
                    <LI><div class="lbl_div">&nbsp;</div>
    <select id="county" name="county" onChange="changeZone(document.getElementById('county'), document.getElementById('area'), document.getElementById('zipcode'));" size="1" class="box3"></select><select name="area" id="area" onChange="showZipCode(document.getElementById('county'), document.getElementById('area'), document.getElementById('zipcode'));" size="1" class="box3"></select><script language="JavaScript">initCounty(document.getElementById('county'));showZone(document.getElementById('county'), document.getElementById('area'),document.getElementById('zipcode').value);</script>                	
                    </LI>     
                    <LI><div class="lbl_div">送貨地址：</div>
                  	<input type="text" name="member_address" id="member_address" size="60" /><span id="msg" name="msg"></span>
                    </LI>
                    <LI>
                      <div class="lbl_div">指定到貨時段：</div>
                      <select name="send_time" id="send_time">
                        <option value="不指定" selected="selected">不指定</option>
                        <option value="早上 8點~12點">早上 8點~12點</option>
                        <option value="下午 12點~17點">下午 12點~17點</option>
                        <option value="晚上 17點~20點">晚上 17點~20點</option>
                      </select><span id="msg" name="msg"></span>
                    </LI>
                    <LI>
                    	<div class="lbl_div">備註：</div>
                    	<textarea name="buy_memo" id="buy_memo" cols="60" rows="4" wrap="virtual" class="aco13"></textarea>
                    </LI>        
                </UL><br />
                <div class="red_setup">3.確認您的交易資訊如下</div>
                <UL class="bigoli small_font2">
                    <LI><div><span class="lbl_div">付款方式：</span><span class="font_normal">銀行匯款</span></div></LI>
                </UL>
                <p><div align="center">
                    <input name="preov" class="input_face" type="button" value="上一步" onclick="location='car2.php'" />
                    <input name="next" class="input_face" type="button" value="送出訂單" onclick="location='car4.php'" />
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
