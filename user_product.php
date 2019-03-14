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
                    <li><a href="user_show.php">服飾秀</a></li>
                    <li class="div_bg2"><a href="user_product.php">商品/收藏</a></li>
                    <li><a href="user_talk.php">討論</a></li>
                    <li><a href="user_friend.php">好友</a></li>
                    <li><a href="account.php">資金管理</a></li>
                    <li><a href="system_msg.php">系統訊息</a></li>
                </ol>
            </div>
            <div class="licontext">
                <div id="tabs">
                    <ul>
                        <li><a href="#tabs-1">購買中商品</a></li>
                        <li><a href="#tabs-2">代言的商品</a></li>
                        <li><a href="#tabs-3">收藏的商品</a></li>
                        <li><a href="#tabs-4">購買歷史記錄</a></li>
                    </ul>
                    <div id="tabs-1">
                    	<table id="shopping" width="100%" align="center" class="order_tb">
                          <tr class="order_tr">
                            <td width="31%"><div align="center">訂單編號</div></td>
                            <td width="35%"><div align="center">訂單日期</div></td>
                            <td width="34%"><div align="center">訂單處理狀況</div></td>
                          </tr>
                          <tr>
                            <td><div align="center"><a href="order2.php?key=2010041907">2010041907</a></div></td>
                            <td><div align="center">2010-04-19</div></td>
                            <td><div align="center">處理中</div></td>
                          </tr>
                          <tr>
                          	<td colspan="3">
                            	<table class="tbg2 div_bg1" width="100%" border="0" cellpadding="2" cellspacing="2">
                                    <tr class="tgb">
                                        <td width="90"><div>商品編號</div></td>
                                        <td width="266"><div>品名</div></td>
                                        <td width="70"><div>尺寸</div></td>
                                        <td width="80"><div>顏色</div></td>
                                        <td width="70"><div>單價</div></td>
                                        <td width="39"><div>數量</div></td>
                                        <td width="85"><div>金額</div></td>
                                    </tr>
                                    <tr>
                                        <td><div><a href="#">T8004-3</a></div></td>
                                        <td><div>最新款橫條七分袖棉T</div></td>
                                        <td><div>Free</div></td>
                                        <td><div>桔/白</div></td>
                                        <td><div class="div_width">NT$</div><div class="td_div3">7,399</div></td>
                                        <td><div class="td_div2">2</div></td>
                                        <td><div class="div_width">NT$</div><div class="td_div1">798</div></td>
                                    </tr>
                                    <tr class="urder_td">
                                        <td><div><a href="#">T8004-3</a></div></td>
                                        <td><div>最新款橫條七分袖棉T</div></td>
                                        <td><div>Free</div></td>
                                        <td><div>桔/白</div></td>
                                        <td><div class="div_width">NT$</div><div class="td_div3">7,399</div></td>
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
                                </table>
                            </td>
                          </tr>
                          <tr>
                            <td><div align="center"><a href="order2.php?key=2010041907">2010041907</a></div></td>
                            <td><div align="center">2010-04-19</div></td>
                            <td><div align="center">處理中</div></td>
                          </tr>
                          <tr>
                            <td><div align="center"><a href="order2.php?key=2010041907">2010041907</a></div></td>
                            <td><div align="center">2010-04-19</div></td>
                            <td><div align="center">處理中</div></td>
                          </tr>
                          <tr>
                            <td><div align="center"><a href="order2.php?key=2010041907">2010041907</a></div></td>
                            <td><div align="center">2010-04-19</div></td>
                            <td><div align="center">處理中</div></td>
                          </tr>
                          <tr>
                            <td><div align="center"><a href="order2.php?key=2010041907">2010041907</a></div></td>
                            <td><div align="center">2010-04-19</div></td>
                            <td><div align="center">處理中</div></td>
                          </tr>
                          <tr>
                            <td><div align="center"><a href="order2.php?key=2010041907">2010041907</a></div></td>
                            <td><div align="center">2010-04-19</div></td>
                            <td><div align="center">處理中</div></td>
                          </tr>
                        </table>
                    </div>
                    <div id="tabs-2">
                    	<OL class="show_ol_pro margin0">
                            <LI>
                                <div class="pic84_div"><IMG src="./images/11374_thumbnail.jpg"></div>
                                <div class="pic84_div">
                                    <ol class="show_text">
                                        <li class="font_model_title"><a href="show_detail.php">show名稱</a></li>
                                        <li class="font_model_desc">點擊/得分</li>
                                        <li class="font_model_desc">337/17</li>
                                    </ol>
                                </div>
                            </LI>
                            <LI>
                                <div class="pic84_div"><IMG src="./images/11374_thumbnail.jpg"></div>
                                <div class="pic84_div">
                                    <ol class="show_text">
                                        <li class="font_model_title"><a href="show_detail.php">show名稱</a></li>
                                        <li class="font_model_desc">點擊/得分</li>
                                        <li class="font_model_desc">337/17</li>
                                    </ol>
                                </div>
                            </LI>
                            <LI>
                                <div class="pic84_div"><IMG src="./images/11374_thumbnail.jpg"></div>
                                <div class="pic84_div">
                                    <ol class="show_text">
                                        <li class="font_model_title"><a href="show_detail.php">show名稱</a></li>
                                        <li class="font_model_desc">點擊/得分</li>
                                        <li class="font_model_desc">337/17</li>
                                    </ol>
                                </div>
                            </LI>
                            <LI>
                                <div class="pic84_div"><IMG src="./images/11374_thumbnail.jpg"></div>
                                <div class="pic84_div">
                                    <ol class="show_text">
                                        <li class="font_model_title"><a href="show_detail.php">show名稱</a></li>
                                        <li class="font_model_desc">點擊/得分</li>
                                        <li class="font_model_desc">337/17</li>
                                    </ol>
                                </div>
                            </LI>
                            <LI>
                                <div class="pic84_div"><IMG src="./images/11374_thumbnail.jpg"></div>
                                <div class="pic84_div">
                                    <ol class="show_text">
                                        <li class="font_model_title"><a href="show_detail.php">show名稱</a></li>
                                        <li class="font_model_desc">點擊/得分</li>
                                        <li class="font_model_desc">337/17</li>
                                    </ol>
                                </div>
                            </LI>
                            <LI>
                                <div class="pic84_div"><IMG src="./images/11374_thumbnail.jpg"></div>
                                <div class="pic84_div">
                                    <ol class="show_text">
                                        <li class="font_model_title"><a href="show_detail.php">show名稱</a></li>
                                        <li class="font_model_desc">點擊/得分</li>
                                        <li class="font_model_desc">337/17</li>
                                    </ol>
                                </div>
                            </LI>
                            <LI>
                                <div class="pic84_div"><IMG src="./images/11374_thumbnail.jpg"></div>
                                <div class="pic84_div">
                                    <ol class="show_text">
                                        <li class="font_model_title"><a href="show_detail.php">show名稱</a></li>
                                        <li class="font_model_desc">點擊/得分</li>
                                        <li class="font_model_desc">337/17</li>
                                    </ol>
                                </div>
                            </LI>
                            <LI>
                                <div class="pic84_div"><IMG src="./images/11374_thumbnail.jpg"></div>
                                <div class="pic84_div">
                                    <ol class="show_text">
                                        <li class="font_model_title"><a href="show_detail.php">show名稱</a></li>
                                        <li class="font_model_desc">點擊/得分</li>
                                        <li class="font_model_desc">337/17</li>
                                    </ol>
                                </div>
                            </LI>
                            <LI>
                                <div class="pic84_div"><IMG src="./images/11374_thumbnail.jpg"></div>
                                <div class="pic84_div">
                                    <ol class="show_text">
                                        <li class="font_model_title"><a href="show_detail.php">show名稱</a></li>
                                        <li class="font_model_desc">點擊/得分</li>
                                        <li class="font_model_desc">337/17</li>
                                    </ol>
                                </div>
                            </LI>
                            <LI>
                                <div class="pic84_div"><IMG src="./images/11374_thumbnail.jpg"></div>
                                <div class="pic84_div">
                                    <ol class="show_text">
                                        <li class="font_model_title"><a href="show_detail.php">show名稱</a></li>
                                        <li class="font_model_desc">點擊/得分</li>
                                        <li class="font_model_desc">337/17</li>
                                    </ol>
                                </div>
                            </LI>
                        </OL>
                    </div>
                    <div id="tabs-3">
                    	<OL class="show_ol_pro margin0">
                            <LI>
                                <div class="pic84_div"><IMG src="./images/11374_thumbnail.jpg"></div>
                                <div class="pic84_div">
                                    <ol class="show_text">
                                        <li class="font_model_title"><a href="store.php">新鈦服飾</a></li>
                                        <li class="font_model_desc"><a href="product_item.php">黃金套件1</a></li>
                                    </ol>
                                    <div class="bg_money"><a href="product_item.php">總價:11,999元</a></div>
                                </div>
                            </LI>
                            <LI>
                                <div class="pic84_div"><IMG src="./images/11374_thumbnail.jpg"></div>
                                <div class="pic84_div">
                                    <ol class="show_text">
                                        <li class="font_model_title"><a href="store.php">新鈦服飾</a></li>
                                        <li class="font_model_desc"><a href="product_item.php">黃金套件1</a></li>
                                    </ol>
                                    <div class="bg_money"><a href="product_item.php">總價:11,999元</a></div>
                                </div>
                            </LI>
                            <LI>
                                <div class="pic84_div"><IMG src="./images/11374_thumbnail.jpg"></div>
                                <div class="pic84_div">
                                    <ol class="show_text">
                                        <li class="font_model_title"><a href="store.php">新鈦服飾</a></li>
                                        <li class="font_model_desc"><a href="product_item.php">黃金套件1</a></li>
                                    </ol>
                                    <div class="bg_money"><a href="product_item.php">總價:11,999元</a></div>
                                </div>
                            </LI>
                            <LI>
                                <div class="pic84_div"><IMG src="./images/11374_thumbnail.jpg"></div>
                                <div class="pic84_div">
                                    <ol class="show_text">
                                        <li class="font_model_title"><a href="store.php">新鈦服飾</a></li>
                                        <li class="font_model_desc"><a href="product_item.php">黃金套件1</a></li>
                                    </ol>
                                    <div class="bg_money"><a href="product_item.php">總價:11,999元</a></div>
                                </div>
                            </LI>
                            <LI>
                                <div class="pic84_div"><IMG src="./images/11374_thumbnail.jpg"></div>
                                <div class="pic84_div">
                                    <ol class="show_text">
                                        <li class="font_model_title"><a href="store.php">新鈦服飾</a></li>
                                        <li class="font_model_desc"><a href="product_item.php">黃金套件1</a></li>
                                    </ol>
                                    <div class="bg_money"><a href="product_item.php">總價:11,999元</a></div>
                                </div>
                            </LI>
                            <LI>
                                <div class="pic84_div"><IMG src="./images/11374_thumbnail.jpg"></div>
                                <div class="pic84_div">
                                    <ol class="show_text">
                                        <li class="font_model_title"><a href="store.php">新鈦服飾</a></li>
                                        <li class="font_model_desc"><a href="product_item.php">黃金套件1</a></li>
                                    </ol>
                                    <div class="bg_money"><a href="product_item.php">總價:11,999元</a></div>
                                </div>
                            </LI>
                            <LI>
                                <div class="pic84_div"><IMG src="./images/11374_thumbnail.jpg"></div>
                                <div class="pic84_div">
                                    <ol class="show_text">
                                        <li class="font_model_title"><a href="store.php">新鈦服飾</a></li>
                                        <li class="font_model_desc"><a href="product_item.php">黃金套件1</a></li>
                                    </ol>
                                    <div class="bg_money"><a href="product_item.php">總價:11,999元</a></div>
                                </div>
                            </LI>
                            <LI>
                                <div class="pic84_div"><IMG src="./images/11374_thumbnail.jpg"></div>
                                <div class="pic84_div">
                                    <ol class="show_text">
                                        <li class="font_model_title"><a href="store.php">新鈦服飾</a></li>
                                        <li class="font_model_desc"><a href="product_item.php">黃金套件1</a></li>
                                    </ol>
                                    <div class="bg_money"><a href="product_item.php">總價:11,999元</a></div>
                                </div>
                            </LI>
                            <LI>
                                <div class="pic84_div"><IMG src="./images/11374_thumbnail.jpg"></div>
                                <div class="pic84_div">
                                    <ol class="show_text">
                                        <li class="font_model_title"><a href="store.php">新鈦服飾</a></li>
                                        <li class="font_model_desc"><a href="product_item.php">黃金套件1</a></li>
                                    </ol>
                                    <div class="bg_money"><a href="product_item.php">總價:11,999元</a></div>
                                </div>
                            </LI>
                            <LI>
                                <div class="pic84_div"><IMG src="./images/11374_thumbnail.jpg"></div>
                                <div class="pic84_div">
                                    <ol class="show_text">
                                        <li class="font_model_title"><a href="store.php">新鈦服飾</a></li>
                                        <li class="font_model_desc"><a href="product_item.php">黃金套件1</a></li>
                                    </ol>
                                    <div class="bg_money"><a href="product_item.php">總價:11,999元</a></div>
                                </div>
                            </LI>
                        </OL>
                    </div>
                    <div id="tabs-4">
                    	<table id="shopping_history" width="100%" align="center" class="order_tb">
                          <tr class="order_tr">
                            <td width="31%"><div align="center">訂單編號</div></td>
                            <td width="35%"><div align="center">訂單日期</div></td>
                            <td width="34%"><div align="center">訂單處理狀況</div></td>
                          </tr>
                          <tr>
                            <td><div align="center"><a href="order2.php?key=2010041907">2010041907</a></div></td>
                            <td><div align="center">2010-04-19</div></td>
                            <td><div align="center">處理中</div></td>
                          </tr>
                          <tr>
                          	<td colspan="3">
                            	<table class="tbg2 div_bg1" width="100%" border="0" cellpadding="2" cellspacing="2">
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
                                        <td><div><a href="#">T8004-3</a></div></td>
                                        <td><div>最新款橫條七分袖棉T</div></td>
                                        <td><div>Free</div></td>
                                        <td><div>桔/白</div></td>
                                        <td><div class="div_width">NT$</div><div class="td_div3">7399</div></td>
                                        <td><div class="td_div2">2</div></td>
                                        <td><div class="div_width">NT$</div><div class="td_div1">798</div></td>
                                    </tr>
                                    <tr class="urder_td">
                                        <td><div><a href="#">T8004-3</a></div></td>
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
                            </td>
                          </tr>
                          <tr>
                            <td><div align="center"><a href="order2.php?key=2010041907">2010041907</a></div></td>
                            <td><div align="center">2010-04-19</div></td>
                            <td><div align="center">處理中</div></td>
                          </tr>
                          <tr>
                            <td><div align="center"><a href="order2.php?key=2010041907">2010041907</a></div></td>
                            <td><div align="center">2010-04-19</div></td>
                            <td><div align="center">處理中</div></td>
                          </tr>
                          <tr>
                            <td><div align="center"><a href="order2.php?key=2010041907">2010041907</a></div></td>
                            <td><div align="center">2010-04-19</div></td>
                            <td><div align="center">處理中</div></td>
                          </tr>
                          <tr>
                            <td><div align="center"><a href="order2.php?key=2010041907">2010041907</a></div></td>
                            <td><div align="center">2010-04-19</div></td>
                            <td><div align="center">處理中</div></td>
                          </tr>
                          <tr>
                            <td><div align="center"><a href="order2.php?key=2010041907">2010041907</a></div></td>
                            <td><div align="center">2010-04-19</div></td>
                            <td><div align="center">處理中</div></td>
                          </tr>
                        </table>
                    </div>
                </div>
            </div>
        </DIV>
    </div>
</body>
</html>
<script type="text/javascript">
$(function(){
	$("#tabs").tabs({
			event: 'click'
		});
	$("#tabs").tabs().find(".ui-tabs-nav").sortable({axis:'x'});
	$("#shopping tr:gt(0):odd").addClass("order_tr_color");
	$("#shopping_history tr:gt(0):odd").addClass("order_tr_color");
});
</script>