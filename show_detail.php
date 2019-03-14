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
<link href="./css/showdetail.css" rel="stylesheet" type="text/css">
</head>
<body>
	<?
	include("top2.php");
	?>
    <ol class="bread">
		<li><a href="index.php">首頁</a></li>
        <li>></li>
        <li>網友模特兒</li>
    </ol>
    <div class="big_left_div">
    	<div class="float_left">
            <ul id="pic_clearfix" class="pic_clearfix">
                <li class="pic_li"><img src="images/11374_thumbnail.jpg" /><div class="small_font3 pic_desc">這張很漂亮吧！這張很漂亮吧！這張很漂亮吧！這張很漂亮吧！</div></li>
                <li class="pic_li"><img src="images/11374_thumbnail.jpg" /><div class="small_font3 pic_desc">這張很漂亮吧！這張很漂亮吧！這張很漂亮吧！這張很漂亮吧！</div></li>
                <li class="pic_li"><img src="images/11374_thumbnail.jpg" /><div class="small_font3 pic_desc">這張很漂亮吧！這張很漂亮吧！這張很漂亮吧！這張很漂亮吧！</div></li>
            </ul>
            <UL class="pic_point">
                <li class="next_pic_li">
                    <img src="./images/24-arrow-previous.png" style="float:left; cursor:pointer; width:24px;" border="0" onclick="gotoPage(-1,this);" /></li>
                <li class="next_text"><label id="pic_index"></label> 1/9 <label id="pic_count"></label></li>
                <li class="next_pic_li">
                    <img src="./images/24-arrow-next.png" style="float:left; cursor:pointer; width:24px;" border="0" onclick="gotoPage(1,this);" /></li>
            </UL>
        </div>
    	<div id="div_big_img"><img src="images/aoe.jpg" style="width:640px; height:490px;" /></div>
        <div>
        	<ul class="show_content">
            	<li class="li_title float_left">show名稱：</li><li class="li_value">班馬王子</li>
                <li class="li_title float_left author">上傳者：</li><li class="li_value"><div class="clear_4pic"><a href="#"><IMG src="./images/11374_thumbnail.jpg"></a><div class="small_font2">陳麗華</div></div><div class="model_name"></div></li>
                <li class="li_title float_left">描述：</li><li class="li_value">清晨北台灣出現降雨，不過上午起雨勢減緩，各地甚至可以看到陽光。氣象局表示：鋒面目前在台灣北部海面滯留，預估明天下午起將南下通過台灣地區，加上東北風增強，明天下午起到後天，北台灣天氣濕涼，預估週三低溫大約在14~15度。週四起，華南雲雨區東移，降雨持續到週五上半天，天氣恢復穩定要等到週六了。至於缺水的南部地區，這一波系統有機會為南部山區帶來雨勢。</li>
                <li class="li_title float_left">提交時間：</li><li class="li_value float_left">2009-10-18 11:25:11</li>
                <li class="li_title float_left">點擊數：</li><li class="li_value float_left">337</li>
                <li class="li_title float_left">得分數：</li><li class="li_value float_left">19</li>
            </ul><div class="model_name"></div>
            <ol class="ol_button">
            	<li><span class="show_button red_name_center"><a href="#">下一個秀</a></span></li>
                <li><span class="show_button red_name_center"><a href="#">上一個秀</a></span></li>
            </ol>
            <div style="clear:left;">
            	<ol class="gefen">
                	<li>給分</li>
           		  <li class="mark">1</li>
                    <li class="mark">2</li>
                    <li class="mark">3</li>
                    <li class="mark">4</li>
                    <li class="mark">5</li>
                </ol>
               <label class="border_style"><a href="#">我要評論</a></label>
           </div>
            <div class="product_title small_font2">網友評論(針對show本身，支持、鼓勵、建議)</div>
            <OL class="bigoli">
            	<LI>
                	<div class="pic100_div">
                    	<a href="#"><IMG src="./images/11374_thumbnail.jpg"></a>
                        <div class="model_name small_font2"><a href="#">kenoscar</a></div>
                    </div>
                    <div class="pic100_div">
                        <ol class="pic100_detail">
                            <li class="li_width1 small_font2">荷利表示：「我們終其一生，都在致力研究動物神秘斷肢現象，也在調查這種現象與越來越多人通報看見橘紅光線有無關聯。」
                            	<div class="redo_detail"><span class="big_font">回復</span>:( 2009-05-25 21:25:24 ) 包包不是我的 我幫一個女生提著 呵呵回復:( 2009-05-25 21:25:24 ) 包包不是我的 我幫一個女生提著 呵呵呵呵</div>
                            </li>
                            <li class="li_width2 small_font2">2010-03-31 14:56:12<div class="redo"><a href="#">回 覆</a></div>
                            </li>
                        </ol>
                    </div>
                </LI>
                <LI>
                	<div class="pic100_div">
                    	<a href="#"><IMG src="./images/11374_thumbnail.jpg"></a>
                        <div class="model_name small_font2"><a href="#">kenoscar</a></div>
                    </div>
                    <div class="pic100_div">
                        <ol class="pic100_detail">
                            <li class="li_width1 small_font2">荷利表示：「我們終其一生，都在致力研究動物神秘斷肢現象，也在調查這種現象與越來越多人通報看見橘紅光線有無關聯。」
                            	<div class="redo_detail"><span class="big_font">回復</span>:( 2009-05-25 21:25:24 ) 包包不是我的 我幫一個女生提著 呵呵回復:( 2009-05-25 21:25:24 ) 包包不是我的 我幫一個女生提著 呵呵呵呵</div>
                            </li>
                            <li class="li_width2 small_font2">2010-03-31 14:56:12<div class="redo"><a href="#">回 覆</a></div></li>
                        </ol>
                    </div>
                </LI>
                <LI>
                	<div class="pic100_div">
                    	<a href="#"><IMG src="./images/11374_thumbnail.jpg"></a>
                        <div class="model_name small_font2"><a href="#">kenoscar</a></div>
                    </div>
                    <div class="pic100_div">
                        <ol class="pic100_detail">
                            <li class="li_width1 small_font2">荷利表示：「我們終其一生，都在致力研究動物神秘斷肢現象，也在調查這種現象與越來越多人通報看見橘紅光線有無關聯。」
                            	<div class="redo_detail"><span class="big_font">回復</span>:( 2009-05-25 21:25:24 ) 包包不是我的 我幫一個女生提著 呵呵回復:( 2009-05-25 21:25:24 ) 包包不是我的 我幫一個女生提著 呵呵呵呵</div>
                            </li>
                            <li class="li_width2 small_font2">2010-03-31 14:56:12<div class="redo"><a href="#">回 覆</a></div></li>
                        </ol>
                    </div>
                </LI>
                <LI>
                	<div class="pic100_div">
                    	<a href="#"><IMG src="./images/11374_thumbnail.jpg"></a>
                        <div class="model_name small_font2"><a href="#">kenoscar</a></div>
                    </div>
                    <div class="pic100_div">
                        <ol class="pic100_detail">
                            <li class="li_width1 small_font2">荷利表示：「我們終其一生，都在致力研究動物神秘斷肢現象，也在調查這種現象與越來越多人通報看見橘紅光線有無關聯。」
                            	<div class="redo_detail"><span class="big_font">回復</span>:( 2009-05-25 21:25:24 ) 包包不是我的 我幫一個女生提著 呵呵回復:( 2009-05-25 21:25:24 ) 包包不是我的 我幫一個女生提著 呵呵呵呵</div>
                            </li>
                            <li class="li_width2 small_font2">2010-03-31 14:56:12<div class="redo"><a href="#">回 覆</a></div></li>
                        </ol>
                    </div>
                </LI>
                <LI>
                	<div class="pic100_div">
                    	<a href="#"><IMG src="./images/11374_thumbnail.jpg"></a>
                        <div class="model_name small_font2"><a href="#">kenoscar</a></div>
                    </div>
                    <div class="pic100_div">
                        <ol class="pic100_detail">
                            <li class="li_width1 small_font2">荷利表示：「我們終其一生，都在致力研究動物神秘斷肢現象，也在調查這種現象與越來越多人通報看見橘紅光線有無關聯。」
                            	<div class="redo_detail"><span class="big_font">回復</span>:( 2009-05-25 21:25:24 ) 包包不是我的 我幫一個女生提著 呵呵回復:( 2009-05-25 21:25:24 ) 包包不是我的 我幫一個女生提著 呵呵呵呵</div>
                            </li>
                            <li class="li_width2 small_font2">2010-03-31 14:56:12<div class="redo"><a href="#">回 覆</a></div></li>
                        </ol>
                    </div>
                </LI>
            </OL>
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
        </div>
    </div>
    <div class="right_div">
    	<?
		include("login.php");
		?>
        <DIV class="hd_frame">
         	<H2>相關商品</H2>
            <OL class="show_ol_pro">
                <LI>
                    <div class="pic84_div"><IMG src="./images/11374_thumbnail.jpg"></div>
                    <div class="pic84_div">
                        <ol class="show_text">
                            <li class="font_model_title"><a href="product_item.php">新鈦服飾</a></li>
                            <li class="font_model_desc"><a href="product_item.php">黃金套件1</a></li>
                        </ol>
                        <div class="bg_money"><a href="product_item.php">總價:11,999元</a></div>
                    </div>
                </LI>
                <LI>
                    <div class="pic84_div"><IMG src="./images/11374_thumbnail.jpg"></div>
                    <div class="pic84_div">
                        <ol class="show_text">
                            <li class="font_model_title"><a href="product_item.php">新鈦服飾</a></li>
                            <li class="font_model_desc"><a href="product_item.php">黃金套件2</a></li>
                        </ol>
                        <div class="bg_money"><a href="product_item.php">總價:11,999元</a></div>
                    </div>
                </LI>
                <LI>
                    <div class="pic84_div"><IMG src="./images/11374_thumbnail.jpg"></div>
                    <div class="pic84_div">
                        <ol class="show_text">
                            <li class="font_model_title"><a href="product_item.php">新鈦服飾</a></li>
                            <li class="font_model_desc"><a href="product_item.php">黃金套件3</a></li>
                        </ol>
                        <div class="bg_money"><a href="product_item.php">總價:11,999元</a></div>
                    </div>
                </LI>
            </OL>
        </DIV>
        <DIV class="right_div hd_frame">
         	<H2>該網友其他秀</H2>
            <OL class="pic193">
                <LI>
                    <div class="pic84_div"><IMG src="./images/11374_thumbnail.jpg"><div class="model_name"><a href="#">show名稱</a></div></div>
                </LI>
                <LI>
                    <div class="pic84_div"><IMG src="./images/11374_thumbnail.jpg"><div class="model_name"><a href="#">show名稱</a></div></div>
                </LI>
            </OL>
        </DIV>
        <DIV class="right_div hd_frame">
         	<H3>相關商品其他模特兒</H2>
            <OL class="pic193">
                <LI>
                    <div class="pic84_div"><IMG src="./images/11374_thumbnail.jpg"><div class="model_name"><a href="#">show名稱</a></div>
                    <div class="red_name_center"><a href="#">(kenoscar)</a></div></div>
                </LI>
                <LI>
                    <div class="pic84_div"><IMG src="./images/11374_thumbnail.jpg"><div class="model_name"><a href="#">show名稱</a></div>
                    <div class="red_name_center"><a href="#">(kenoscar)</a></div></div>
                </LI>
            </OL>
        </DIV>
    </div>
</body>
</html>
