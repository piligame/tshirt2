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
<link href="./base/jquery-ui-1.8rc1.custom.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="./jq/jquery-1.4.js"></script>
<script language=javascript src="./jq/jquery-ui-1.8rc1.custom.js"></script>
</head>
<body>
	<?
	include("top2.php");
	?>
    <ol class="bread">
		<li><a href="index.php">首頁</a></li>
        <li>></li>
        <li>產品目錄</li>
    </ol>
    <div class="big_left_div">
    	<div class="product_title big_font">網友評論(針對show本身，支持、鼓勵、建議)</div>
    	<div class="float_left div_frm">
            <ul id="pic_clearfix" class="pic_clearfix">
                <li class="pic_li"><img src="images/11374_thumbnail.jpg" /><div class="small_font3 pic_desc">衣服圖片一</div></li>
                <li class="pic_li"><img src="images/11374_thumbnail.jpg" /><div class="small_font3 pic_desc">衣服圖片二</div></li>
                <li class="pic_li"><img src="images/11374_thumbnail.jpg" /><div class="small_font3 pic_desc">衣服圖片三</div></li>
            </ul>
            <div>
            	<UL class="pic_point">
                    <li class="next_pic_li">
                        <img src="./images/24-arrow-previous.png" onclick="gotoPage(-1,this);" /></li>
                    <li class="next_text"><label id="pic_index"></label> 1/9 <label id="pic_count"></label></li>
                    <li class="next_pic_li">
                        <img src="./images/24-arrow-next.png" border="0" onclick="gotoPage(1,this);" />
                    </li>
                </UL><div class="model_name"></div>
                <div>
                    <div>選擇顏色：</div>
                    <select class="select">
                        <option value="NO">請選擇顏色</option>
                        <option value="1">綠/藍色</option>
                        <option value="2">紅色</option>
                    </select>
                </div>
            </div>
        </div>
    	<div id="div_big_img"><img src="images/aoe.jpg" style="width:640px; height:490px;" /></div>
        <div id="tabs">
                <ul>
                    <li class="tab_li_title"><a href="#tabs-1">商品資訊</a></li>
                    <li class="tab_li_title"><a href="#tabs-2">問與答(99)</a></li>
                </ul>
                <div id="tabs-1">
        			<div class="edit_text">文字編輯器..........</div>
            	</div>
                <div id="tabs-2">
                    <OL class="bigoli">
                        <LI>
                            <div class="pic100_div small_font2 li_width4">問題99：</div>
                            <div class="pic100_div">
                                <a href="#"><IMG src="./images/11374_thumbnail.jpg"></a>
                                <div class="model_name small_font2"><a href="#">kenoscar</a></div>
                            </div>
                            <div class="pic100_div">
                                <ol class="pic100_detail">
                                    <li class="li_width3 small_font2">荷利表示：「我們終其一生，都在致力研究動物神秘斷肢現象，也在調查這種現象與越來越多人通報看見橘紅光線有無關聯。」</li>
                                    <li class="li_width2 small_font2">2010-03-31 14:56:12</li>
                                </ol>
                            </div>
                        </LI>
                        <LI class="bg_answer">
                            <div class="pic100_div small_font2 li_width4">答覆：</div>
                            <div class="pic100_div">
                                <a href="#"><IMG src="./images/11374_thumbnail.jpg"></a>
                                <div class="model_name small_font2"><a href="#">kenoscar</a></div>
                            </div>
                            <div class="pic100_div">
                                <ol class="pic100_detail">
                                    <li class="li_width3 small_font2">因為............，所以..............</li>
                                    <li class="li_width2 small_font2">2010-03-31 14:56:12</li>
                                </ol>
                            </div>
                        </LI>
                        <LI>
                            <div class="pic100_div small_font2 li_width4">問題99：</div>
                            <div class="pic100_div">
                                <a href="#"><IMG src="./images/11374_thumbnail.jpg"></a>
                                <div class="model_name small_font2"><a href="#">kenoscar</a></div>
                            </div>
                            <div class="pic100_div">
                                <ol class="pic100_detail">
                                    <li class="li_width3 small_font2">荷利表示：「我們終其一生，都在致力研究動物神秘斷肢現象，也在調查這種現象與越來越多人通報看見橘紅光線有無關聯。」</li>
                                    <li class="li_width2 small_font2">2010-03-31 14:56:12</li>
                                </ol>
                            </div>
                        </LI>
                        <LI class="bg_answer">
                            <div class="pic100_div small_font2 li_width4">答覆：</div>
                            <div class="pic100_div">
                                <a href="#"><IMG src="./images/11374_thumbnail.jpg"></a>
                                <div class="model_name small_font2"><a href="#">kenoscar</a></div>
                            </div>
                            <div class="pic100_div">
                                <ol class="pic100_detail">
                                    <li class="li_width3 small_font2">因為............，所以..............</li>
                                    <li class="li_width2 small_font2">2010-03-31 14:56:12</li>
                                </ol>
                            </div>
                        </LI>
                        <LI>
                            <div class="pic100_div small_font2 li_width4">問題99：</div>
                            <div class="pic100_div">
                                <a href="#"><IMG src="./images/11374_thumbnail.jpg"></a>
                                <div class="model_name small_font2"><a href="#">kenoscar</a></div>
                            </div>
                            <div class="pic100_div">
                                <ol class="pic100_detail">
                                    <li class="li_width3 small_font2">荷利表示：「我們終其一生，都在致力研究動物神秘斷肢現象，也在調查這種現象與越來越多人通報看見橘紅光線有無關聯。」</li>
                                    <li class="li_width2 small_font2">2010-03-31 14:56:12</li>
                                </ol>
                            </div>
                        </LI>
                        <LI class="bg_answer">
                            <div class="pic100_div small_font2 li_width4">答覆：</div>
                            <div class="pic100_div">
                                <a href="#"><IMG src="./images/11374_thumbnail.jpg"></a>
                                <div class="model_name small_font2"><a href="#">kenoscar</a></div>
                            </div>
                            <div class="pic100_div">
                                <ol class="pic100_detail">
                                    <li class="li_width3 small_font2">因為............，所以..............</li>
                                    <li class="li_width2 small_font2">2010-03-31 14:56:12</li>
                                </ol>
                            </div>
                        </LI>
                        <LI>
                            <div class="pic100_div small_font2 li_width4">問題99：</div>
                            <div class="pic100_div">
                                <a href="#"><IMG src="./images/11374_thumbnail.jpg"></a>
                                <div class="model_name small_font2"><a href="#">kenoscar</a></div>
                            </div>
                            <div class="pic100_div">
                                <ol class="pic100_detail">
                                    <li class="li_width3 small_font2">荷利表示：「我們終其一生，都在致力研究動物神秘斷肢現象，也在調查這種現象與越來越多人通報看見橘紅光線有無關聯。」</li>
                                    <li class="li_width2 small_font2">2010-03-31 14:56:12</li>
                                </ol>
                            </div>
                        </LI>
                        <LI class="bg_answer">
                            <div class="pic100_div small_font2 li_width4">答覆：</div>
                            <div class="pic100_div">
                                <a href="#"><IMG src="./images/11374_thumbnail.jpg"></a>
                                <div class="model_name small_font2"><a href="#">kenoscar</a></div>
                            </div>
                            <div class="pic100_div">
                                <ol class="pic100_detail">
                                    <li class="li_width3 small_font2">因為............，所以..............</li>
                                    <li class="li_width2 small_font2">2010-03-31 14:56:12</li>
                                </ol>
                            </div>
                        </LI>
                        <LI>
                            <div class="pic100_div small_font2 li_width4">問題99：</div>
                            <div class="pic100_div">
                                <a href="#"><IMG src="./images/11374_thumbnail.jpg"></a>
                                <div class="model_name small_font2"><a href="#">kenoscar</a></div>
                            </div>
                            <div class="pic100_div">
                                <ol class="pic100_detail">
                                    <li class="li_width3 small_font2">荷利表示：「我們終其一生，都在致力研究動物神秘斷肢現象，也在調查這種現象與越來越多人通報看見橘紅光線有無關聯。」</li>
                                    <li class="li_width2 small_font2">2010-03-31 14:56:12</li>
                                </ol>
                            </div>
                        </LI>
                        <LI class="bg_answer">
                            <div class="pic100_div small_font2 li_width4">答覆：</div>
                            <div class="pic100_div">
                                <a href="#"><IMG src="./images/11374_thumbnail.jpg"></a>
                                <div class="model_name small_font2"><a href="#">kenoscar</a></div>
                            </div>
                            <div class="pic100_div">
                                <ol class="pic100_detail">
                                    <li class="li_width3 small_font2">因為............，所以..............</li>
                                    <li class="li_width2 small_font2">2010-03-31 14:56:12</li>
                                </ol>
                            </div>
                        </LI>
                    </OL>
                    <div class="product_title edit_text small_font2 float_left">(與此商品無關之問題，官方有權刪除)</div>
                    <div class="show_content">
                        <ol style="list-style:none;">
                            <li class="li_title float_left">問題內容：</li>
                            <li class="li_value">
                              <textarea name="textarea" id="textarea" cols="60" rows="5"></textarea>
                            </li>
                        </ol>
                    </div>
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
    </div>
    <div class="right_div">
    	<?
		include("login.php");
		?>
        <DIV class="hd_frame">
         	<H2 class="bg_h2">我要購買</H2>
            <OL class="car">
            	<LI class="font_model_title"><div class="li_width5 float_left">商店首頁</div><a href="store.php" target="_blank">新鈦服飾</a>
                </LI>
                <LI>
                    <div class="li_width5 float_left">網路價</div><span class="li_width2">11,999元</span>
                </LI>
                <LI>
                    <span class="li_width5">選擇顏色</span>
                    <span class="li_width2">
                        <select>
                            <option value="NO">請選擇顏色</option>
                            <option value="1">綠/藍色</option>
                            <option value="2">紅色</option>
                        </select>
                    </span>
                </LI>
                <LI>
                    <span class="li_width5">選擇規格</span>
                    <span class="li_width2">
                        <select>
                            <option value="NO">請選擇規格</option>
                            <option value="1">M</option>
                            <option value="2">L</option>
                        </select>
                    </span>
                </LI>
                <LI>
                    <div class="li_width5 float_left">購買數量</div><span class="li_width2"><input type="text" style="width:30px;" />件</span>
                </LI>
                <li><a href="car.php"><img src="images/go.gif" style="cursor:pointer" /></a></li>
            </OL>
        </DIV>
        <DIV class="right_div hd_frame">
         	<H3>我要上傳服飾秀！</H3>
            <a href="#" class="font_red">
              <OL class="car txt_lalign">
                <li>買過該商品，穿上後秀上來</li>
                <li>本店立即獎勵5元現金折扣券！</li>
                <li>競選本店Model，可獲贈獎品！</li>
                <li class="model_name big_font">馬上秀</li>
              </OL>
          </a>
        </DIV>
        <DIV class="right_div hd_frame">
         	<H3>此商品的模特兒秀</H3>
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
<script type="text/javascript">
$(function(){
	$("#tabs").tabs().find(".ui-tabs-nav").sortable({axis:'x'});
});
	$(".bigoli > li:odd").addClass("bg_answer");
</script>
</html>
