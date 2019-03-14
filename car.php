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
            <div class="red_setup">1.選擇【修改】訂單商品與數量</div>
            <ol class="show_content">
            	<li><div class="header">更新購物</div><div>如果您修改商品數量，請在數量欄輸入正確的數量後，按下『更新購物』即可 。</div></li>
                <li><div class="header">刪除商品</div><div>如果您要刪除不想訂購的商品，請點選刪除欄中的<img src="./images/remove.gif" width="20" height="16" />符號~</div>
                </li>
                <li><div class="header">宅配方式</div><div>滿4000元免宅配費，未滿4000元酌收110元宅配費。</div>
                </li>
          	</ol>
            <table class="tbg2" width="100%" border="0" cellpadding="2" cellspacing="2">
                <tr class="tgb">
                    <td width="40"><div align="center">刪除</div></td>
                    <td width="90"><div align="center">商品編號</div></td>
                    <td width="226"><div align="center">品名</div></td>
                    <td width="70"><div align="center">尺寸</div></td>
                    <td width="80"><div align="center">顏色</div></td>
                    <td width="70"><div align="center">單價</div></td>
                    <td width="39"><div align="center">數量</div></td>
                    <td width="85"><div align="center">金額</div></td>
                </tr>
                <tr>
                    <td><div><img src="./images/remove.gif" width="20" height="16" alt="刪除" /></div></td>
                    <td><div>T8004-3 </div></td>
                    <td><div>最新款橫條七分袖棉T</div></td>
                    <td><div>Free</div></td>
                    <td><div>桔/白</div></td>
                    <td><div class="div_width">NT$</div>
                    <div class="td_div3">7,399</div></td>
                    <td><input name="number" type="text" class="td_div2" value="2" /></td>
                    <td><div class="div_width">NT$</div><div class="td_div1">798</div></td>
                </tr>
                <tr class="urder_td">
                    <td><div><img src="./images/remove.gif" width="20" height="16" alt="刪除" /></div></td>
                    <td><div>T8004-3 </div></td>
                    <td><div>最新款橫條七分袖棉T</div></td>
                    <td><div>Free</div></td>
                    <td><div>桔/白</div></td>
                    <td><div class="div_width">NT$</div><div class="td_div3">7399</div></td>
                    <td><input name="number" type="text" class="td_div2" value="10" /></td>
                    <td><div class="div_width">NT$</div><div class="td_div1">9798</div></td>
                </tr>
                <tr>
                    <td colspan="7" align="right">小計：</td>
                    <td><div class="div_width">NT$</div><div class="td_div1">9798</div></td>
                </tr>
                <tr class="urder_td">
                    <td colspan="7" align="right">運費：</td>
                    <td><div class="div_width">NT$</div><div class="td_div1">110</div></td>
                </tr>
                <tr class="tgb">
                    <td colspan="7" align="right">總計：</td>
                    <td><div class="div_width">NT$</div><div class="td_div1">99,990</div></td>
                </tr>
                <tr>
                    <td colspan="8"></td>
                </tr>
                <tr>
                    <td colspan="8" align="center">
                        <input name="countiue" class="input_face" type="button" value="繼續購物" onclick="location='index.php'" />
                        <input name="update" class="input_face" type="button" value="更新購物" />
                        <input name="next" class="input_face" type="button" value="下一步" onclick="location='car2.php'" />
                    </td>
                </tr>
            </table>
      </DIV>
    </div>
    <div class="right_div">
	    <?
		include("login.php");
		?>
    </div>
</body>
</html>