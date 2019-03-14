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
            <li class="select_index"><a href="store.php">商店首頁</a></li>
            <li><a href="store_pass.php">商店滿意度</a></li>
            <li><a href="store_intro.php">商店介紹</a></li>
            <li><a href="store_help.php">購物須知</a></li>
            <li><a href="store_customer.php">商店客服</a></li>
            <li><a href="store_model.php">本店優勝Model</a></li>
        </ol>
    </div>
    <div class="big_center_div">
    文字編輯器
    </div>
    <div class="left_div">
    	<DIV class="hd_frame">
        	<div class="please">商店滿意度
            	<div>87分</div>
                <div class="bar_border">
	                <div class="bar_size"><div class="bar_fill" style="width:87px;"></div></div>
                </div>
        	</div>
        </DIV>
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
    <div class="center_div">
    	<DIV class="under_frame div_bg1">
         	<H3>商店公告</H3>
            <div>大同/東元/國際牌家電為原廠安裝配送服務!!全館所有商品通通免運費!!家電/生活/餐廚/親子用品各大廠牌一應俱全~</div>
        </DIV>
        <DIV class="hd_frame">
         	<H2>主推商品</H2>
            <a href="product_item.php"><div class="pic110_div model_name"><IMG src="./images/11374_thumbnail.jpg"></div></a>
            <div class="pic110_text">
                <ol>
                    <li class="font_model_title"><a href="product_item.php">OUTER SPACE 4號行星 LOGO T (白紅)</a></li>
                    <li>防禦力+200，附加火焰燃燒</li>
                </ol>
                <div class="bg_money"><a href="product_item.php">網路價:11,999元<img src="images/ico_onsale.gif" /></a></div>
            </div>
        </DIV>
        <DIV class="hd_frame">
       	  	<H2>店長嚴選</H2>
            <ol class="ol_twopic">
                <li>   
                    <a href="product_item.php"><div class="pic110_div model_name"><img src="./images/11374_thumbnail.jpg" /></div></a>
                    <div class="txt_m model_name"><a href="product_item.php">OUTER SPACE 4號行星 LOGO T (白紅)</a></div>
                    <div class="bg_money" style="width:auto;"><a href="product_item.php">網路價:11,999元<img src="images/ico_onsale.gif" /></a></div>
                </li>
                <li>   
                    <a href="product_item.php"><div class="pic110_div model_name"><img src="./images/11374_thumbnail.jpg" /></div></a>
                    <div class="txt_m model_name"><a href="product_item.php">OUTER SPACE 4號行星 LOGO T (白紅)</a></div>
                    <div class="bg_money" style="width:auto;"><a href="product_item.php">網路價:11,999元<img src="images/ico_onsale.gif" /></a></div>
                </li>
                <li>   
                    <a href="product_item.php"><div class="pic110_div model_name"><img src="./images/11374_thumbnail.jpg" /></div></a>
                    <div class="txt_m model_name"><a href="product_item.php">OUTER SPACE 4號行星 LOGO T (白紅)</a></div>
                    <div class="bg_money" style="width:auto;"><a href="product_item.php">網路價:11,999元<img src="images/ico_onsale.gif" /></a></div>
                </li>
                <li>   
                    <a href="product_item.php"><div class="pic110_div model_name"><img src="./images/11374_thumbnail.jpg" /></div></a>
                    <div class="txt_m model_name"><a href="product_item.php">OUTER SPACE 4號行星 LOGO T (白紅)</a></div>
                    <div class="bg_money" style="width:auto;"><a href="product_item.php">網路價:11,999元<img src="images/ico_onsale.gif" /></a></div>
                </li>
            </ol>
        </DIV>
        <DIV class="hd_frame div_bg1">
            <H2>全部商品</H2>
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
            <div class="newblog_down">
            <div class="hd_pap hd_pap_padding"><a href="#">商品名稱<img src="./images/up.gif" /><img src="./images/down.gif" /></a></div>
            <div class="hd_pap2 hd_pap_padding"><a href="#">購買人次<img src="./images/up.gif" /><img src="./images/down.gif" /></a></div>
            <div class="hd_pap3 hd_pap_padding"><a href="#">價格<img src="./images/up.gif" /><img src="./images/down.gif" /></a></div>
            <div class="hd_pap4 hd_pap_padding"><a href="#">刊登日期<img src="./images/up.gif" /><img src="./images/down.gif" /></a></div>
            </div>
            <ol class="ol_twopic page_top_border">
                <li>   
                    <a href="product_item.php"><div class="pic110_div model_name"><img src="./images/11374_thumbnail.jpg" /></div></a>
                    <div class="txt_m model_name"><a href="product_item.php">OUTER SPACE 4號行星 LOGO T (白紅)</a></div>
                    <div class="bg_money" style="width:auto;"><a href="product_item.php">網路價:11,999元<img src="images/ico_onsale.gif" /></a></div>
                </li>
                <li>   
                    <a href="product_item.php"><div class="pic110_div model_name"><img src="./images/11374_thumbnail.jpg" /></div></a>
                    <div class="txt_m model_name"><a href="product_item.php">OUTER SPACE 4號行星 LOGO T (白紅)</a></div>
                    <div class="bg_money" style="width:auto;"><a href="product_item.php">網路價:11,999元<img src="images/ico_onsale.gif" /></a></div>
                </li>
                <li>   
                    <a href="product_item.php"><div class="pic110_div model_name"><img src="./images/11374_thumbnail.jpg" /></div></a>
                    <div class="txt_m model_name"><a href="product_item.php">OUTER SPACE 4號行星 LOGO T (白紅)</a></div>
                    <div class="bg_money" style="width:auto;"><a href="product_item.php">網路價:11,999元<img src="images/ico_onsale.gif" /></a></div>
                </li>
                <li>   
                    <a href="product_item.php"><div class="pic110_div model_name"><img src="./images/11374_thumbnail.jpg" /></div></a>
                    <div class="txt_m model_name"><a href="product_item.php">OUTER SPACE 4號行星 LOGO T (白紅)</a></div>
                    <div class="bg_money" style="width:auto;"><a href="product_item.php">網路價:11,999元<img src="images/ico_onsale.gif" /></a></div>
                </li>
                <li>   
                    <a href="product_item.php"><div class="pic110_div model_name"><img src="./images/11374_thumbnail.jpg" /></div></a>
                    <div class="txt_m model_name"><a href="product_item.php">OUTER SPACE 4號行星 LOGO T (白紅)</a></div>
                    <div class="bg_money" style="width:auto;"><a href="product_item.php">網路價:11,999元<img src="images/ico_onsale.gif" /></a></div>
                </li>
                <li>   
                    <a href="product_item.php"><div class="pic110_div model_name"><img src="./images/11374_thumbnail.jpg" /></div></a>
                    <div class="txt_m model_name"><a href="product_item.php">OUTER SPACE 4號行星 LOGO T (白紅)</a></div>
                    <div class="bg_money" style="width:auto;"><a href="product_item.php">網路價:11,999元<img src="images/ico_onsale.gif" /></a></div>
                </li>
                <li>   
                    <a href="product_item.php"><div class="pic110_div model_name"><img src="./images/11374_thumbnail.jpg" /></div></a>
                    <div class="txt_m model_name"><a href="product_item.php">OUTER SPACE 4號行星 LOGO T (白紅)</a></div>
                    <div class="bg_money" style="width:auto;"><a href="product_item.php">網路價:11,999元<img src="images/ico_onsale.gif" /></a></div>
                </li>
                <li>   
                    <a href="product_item.php"><div class="pic110_div model_name"><img src="./images/11374_thumbnail.jpg" /></div></a>
                    <div class="txt_m model_name"><a href="product_item.php">OUTER SPACE 4號行星 LOGO T (白紅)</a></div>
                    <div class="bg_money" style="width:auto;"><a href="product_item.php">網路價:11,999元<img src="images/ico_onsale.gif" /></a></div>
                </li>
                <li>   
                    <a href="product_item.php"><div class="pic110_div model_name"><img src="./images/11374_thumbnail.jpg" /></div></a>
                    <div class="txt_m model_name"><a href="product_item.php">OUTER SPACE 4號行星 LOGO T (白紅)</a></div>
                    <div class="bg_money" style="width:auto;"><a href="product_item.php">網路價:11,999元<img src="images/ico_onsale.gif" /></a></div>
                </li>
                <li>   
                    <a href="product_item.php"><div class="pic110_div model_name"><img src="./images/11374_thumbnail.jpg" /></div></a>
                    <div class="txt_m model_name"><a href="product_item.php">OUTER SPACE 4號行星 LOGO T (白紅)</a></div>
                    <div class="bg_money" style="width:auto;"><a href="product_item.php">網路價:11,999元<img src="images/ico_onsale.gif" /></a></div>
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
    <div class="right_div">
    	<DIV class="hd_frame">
    		<h2>促銷優惠活動</h2>
            <ol class="ol_disc">
            	<li><a href="#">初夏搶鮮報-任選2件288元</a></li>
                <li><a href="#">初夏搶鮮報-任選2件288元</a></li>
                <li><a href="#">初夏搶鮮報-任選2件288元</a></li>
                <li><a href="#">初夏搶鮮報-任選2件288元</a></li>
                <li><a href="#">初夏搶鮮報-任選2件288元</a></li>
            </ol>
        </DIV>
        <DIV class="hd_frame">
    		<h2>銷售排行榜</h2>
            <ol class="ol_right">
                <li>
                    <a href="product_item.php"><div class="right_pic model_name"><IMG src="./images/11374_thumbnail.jpg"></div></a>
                    <div class="num">1</div>
                    <div class="num_title url_font"><a href="product_item.php">初春物語【M336050】女孩氣息˙水玉圓點羅紋邊挖背長洋裝˙3色˙預購</a></div>
                </li>
				<li>
		            <a href="product_item.php"><div class="right_pic model_name"><IMG src="./images/11374_thumbnail.jpg"></div></a>
                    <div class="num">2</div>
                    <div class="num_title url_font"><a href="product_item.php">初春物語【M336050】女孩氣息˙水玉圓點羅紋邊挖背長洋裝˙3色˙預購</a></div>
              	</li>
                <li>
		            <a href="product_item.php"><div class="right_pic model_name"><IMG src="./images/11374_thumbnail.jpg"></div></a>
                    <div class="num">3</div>
                    <div class="num_title url_font"><a href="product_item.php">初春物語【M336050】女孩氣息˙水玉圓點羅紋邊挖背長洋裝˙3色˙預購</a></div>
              	</li>
                <li>
		            <a href="product_item.php"><div class="right_pic model_name"><IMG src="./images/11374_thumbnail.jpg"></div></a>
                    <div class="num">4</div>
                    <div class="num_title url_font"><a href="product_item.php">初春物語【M336050】女孩氣息˙水玉圓點羅紋邊挖背長洋裝˙3色˙預購</a></div>
              	</li>
                <li>
		            <a href="product_item.php"><div class="right_pic model_name"><IMG src="./images/11374_thumbnail.jpg"></div></a>
                    <div class="num">5</div>
                    <div class="num_title url_font"><a href="product_item.php">初春物語【M336050】女孩氣息˙水玉圓點羅紋邊挖背長洋裝˙3色˙預購</a></div>
              	</li>
            </ol>
        </DIV>
    </div>
</body>
</html>
