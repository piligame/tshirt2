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
<link href="./css/profile_tab.css" rel="stylesheet" type="text/css">
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
        <li>kenoscar個人主頁</li>
    </ol>
	<div class="big_left_div">
   	  <DIV class="hd_frame">
       	  <div class="small_left_div">
            <ol class="main_menu">
            	<li class="div_bg2"><a href="#">個人主頁</a></li>
                <li><a href="profile_show.php">服飾秀</a></li>
                <li><a href="profile_product.php">商品/收藏</a></li>
                <li><a href="profile_talk.php">討論</a></li>
                <li><a href="profile_friend.php">好友</a></li>
            </ol>
          </div>
          <div class="small_center_div">
            <div id="tabs">
                <ul>
                    <li><a href="#tabs-1">個人主頁</a></li>
                    <li><a href="#tabs-2">大頭照</a></li>
                </ul>
                <div id="tabs-1">
               	  <div class="pic100_div">
                    	<IMG src="./images/11374_thumbnail.jpg">
                    	<div class="model_name"><a href="#">加為好友</a></div>
                    </div>
                    <div class="profile_desc">
                        <ol class="small_font2">
                        	<li class="name">kenoscar</li>
                            <li><div class="li_title font_bold">註冊日期：</div><div class="li_title2">2010-10-03</div>
                            	<div class="li_title font_bold">秀服飾數：</div><div class="li_title2">72</div>
                            </li>
                            <li><div class="li_title font_bold">發帖數：</div><div class="li_title2">2010-10-03</div>
                            	<div class="li_title font_bold">積分數：</div><div class="li_title2">72</div>
                            </li>
                            <li><div class="li_title font_bold">個人部落格：</div><div>http://xiaocoolll.blog.163.com</div>
                            </li>
                        </ol>
                   	</div>
                    <div class="model_name"></div>
                    <DIV>
                    	<h4>基本資料</h4>
                        <UL class="area_clearfix_top">
                        	<LI class="house_shop_nounder"><div class="lbl_div_left">姓名：</div><div class="lbl_div_center">賴建宏</div>
                            	<div class="lbl_div_right_edit"><span class="edit_text" title="編輯">編輯</span><img class="edit_img" title="編輯" src="images/edit-yellow.gif" /></div>
                            </LI>
                            <LI class="house_shop_nounder"><div class="lbl_div_left">性別：</div>男</LI>
                            <LI class="house_shop_nounder"><div class="lbl_div_left">生日：</div>1977-09-20</LI>
                            <LI class="house_shop_nounder" style="display:none;"><div class="lbl_div_left">地址：</div>台中縣太平市宜佳街40巷10號11樓</LI>
                            <LI class="house_shop_nounder"><div class="lbl_div_left">血型：</div>A</LI>
                   			<LI class="house_shop_nounder"><div class="lbl_div_left">感情狀況：</div>單身</LI>
                        </UL>
                        <h4 style="display:none;">聯絡方式</h4>
                        <UL class="area_clearfix_top" style="display:none;">
                        	<LI class="house_shop_nounder"><div class="lbl_div_left">電子郵件：</div><div class="lbl_div_center">a@a.com.tw</div>
                            	<div class="lbl_div_right_edit"><span class="edit_text" title="編輯">編輯</span><img class="edit_img" title="編輯" src="images/edit-yellow.gif" /></div>
                            </LI>
                            <LI class="house_shop_nounder"><div class="lbl_div_left">手機或電話：</div>04-555556</LI>
                        </UL>
                        <h4>工作經歷</h4>
                        <UL class="area_clearfix_top">
                        	<LI class="house_shop_nounder"><div class="lbl_div_left">公司名稱：</div><div class="lbl_div_center">王品集團</div>
                            	<div class="lbl_div_right_edit"><span class="edit_text" title="編輯">編輯</span><img class="edit_img" title="編輯" src="images/edit-yellow.gif" /></div>
                            </LI>
                            <LI class="house_shop_nounder"><div class="lbl_div_left">職稱：</div>程式設計師</LI>
                            <LI class="house_shop_nounder"><div class="lbl_div_left">任職期間：</div>1999年9月 至今</LI>
                        </UL>
                        <h4>學歷資料</h4>
                        <UL class="area_clearfix_top">
                        	<LI class="house_shop_nounder"><div class="lbl_div_left">學校名稱：</div><div class="lbl_div_center">台中技術學院</div>
                            	<div class="lbl_div_right_edit"><span class="edit_text" title="編輯">編輯</span><img class="edit_img" title="編輯" src="images/edit-yellow.gif" /></div>
                            </LI>
                            <LI class="house_shop_nounder"><div class="lbl_div_left">學制：</div>二技</LI>
                            <LI class="house_shop_nounder"><div class="lbl_div_left">畢業年份：</div>1999年</LI>
                        </UL>
                    </DIV>
                </div>
                <div id="tabs-2">
                	<div id="div_big_img"><img src="images/aoe.jpg" /></div>
                    <ul class="pic_clearfix">
                        <li class="pic_li focus_li"><img src="images/11374_thumbnail.jpg" /></li>
                        <li class="pic_li"><img src="images/11374_thumbnail.jpg" /></li>
                        <li class="pic_li"><img src="images/11374_thumbnail.jpg" /></li>
                        <li class="pic_li"><img src="images/11374_thumbnail.jpg" /></li>
                        <li class="pic_li"><img src="images/11374_thumbnail.jpg" /></li>
                    </ul>
                    <div class="model_name" style="height:20px; width:450px;">
                        <UL class="pic_point">
                            <li class="next_pic_li">
                                <img src="./images/24-arrow-previous.png" style="float:left; cursor:pointer; width:24px;" border="0" onclick="gotoPage(-1,this);" />
                            </li>
                            <li class="next_text"><label id="pic_index"></label> 99/99 <label id="pic_count"></label></li>
                            <li class="next_pic_li">
                                <img src="./images/24-arrow-next.png" style="float:left; cursor:pointer; width:24px;" border="0" onclick="gotoPage(1,this);" />
                            </li>
                        </UL>
                    </div>
                </div>
            </div>
            <div class="product_title small_font2">網友留言</div>
            <OL class="bigoli">
            	<LI>
                	<div class="pic100_div">
                    	<a href="#"><IMG src="./images/11374_thumbnail.jpg"></a>
                        <div class="model_name small_font2"><a href="#">kenoscar</a></div>
                    </div>
                    <div class="pic100_div">
                        <ol class="pic100_detail">
                            <li class="li_width1">荷利表示：「我們終其一生，都在致力研究動物神秘斷肢現象，也在調查這種現象與越來越多人通報看見橘紅光線有無關聯。」
                            	<div class="redo_detail"><span class="big_font">回復</span>:( 2009-05-25 21:25:24 ) 包包不是我的 我幫一個女生提著 呵呵回復:( 2009-05-25 21:25:24 ) 包包不是我的 我幫一個女生提著 呵呵呵呵</div>
                            </li>
                            <li class="li_width2">2010-03-31 14:56:12<div class="redo"><a href="#">回 覆</a></div>
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
                            <li class="li_width1">荷利表示：「我們終其一生，都在致力研究動物神秘斷肢現象，也在調查這種現象與越來越多人通報看見橘紅光線有無關聯。」
                            	<div class="redo_detail"><span class="big_font">回復</span>:( 2009-05-25 21:25:24 ) 包包不是我的 我幫一個女生提著 呵呵回復:( 2009-05-25 21:25:24 ) 包包不是我的 我幫一個女生提著 呵呵呵呵</div>
                            </li>
                            <li class="li_width2">2010-03-31 14:56:12<div class="redo"><a href="#">回 覆</a></div></li>
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
                            <li class="li_width1">荷利表示：「我們終其一生，都在致力研究動物神秘斷肢現象，也在調查這種現象與越來越多人通報看見橘紅光線有無關聯。」
                            	<div class="redo_detail"><span class="big_font">回復</span>:( 2009-05-25 21:25:24 ) 包包不是我的 我幫一個女生提著 呵呵回復:( 2009-05-25 21:25:24 ) 包包不是我的 我幫一個女生提著 呵呵呵呵</div>
                            </li>
                            <li class="li_width2">2010-03-31 14:56:12<div class="redo"><a href="#">回 覆</a></div></li>
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
                            <li class="li_width1">荷利表示：「我們終其一生，都在致力研究動物神秘斷肢現象，也在調查這種現象與越來越多人通報看見橘紅光線有無關聯。」
                            	<div class="redo_detail"><span class="big_font">回復</span>:( 2009-05-25 21:25:24 ) 包包不是我的 我幫一個女生提著 呵呵回復:( 2009-05-25 21:25:24 ) 包包不是我的 我幫一個女生提著 呵呵呵呵</div>
                            </li>
                            <li class="li_width2">2010-03-31 14:56:12<div class="redo"><a href="#">回 覆</a></div></li>
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
                            <li class="li_width1">荷利表示：「我們終其一生，都在致力研究動物神秘斷肢現象，也在調查這種現象與越來越多人通報看見橘紅光線有無關聯。」
                            	<div class="redo_detail"><span class="big_font">回復</span>:( 2009-05-25 21:25:24 ) 包包不是我的 我幫一個女生提著 呵呵回復:( 2009-05-25 21:25:24 ) 包包不是我的 我幫一個女生提著 呵呵呵呵</div>
                            </li>
                            <li class="li_width2">2010-03-31 14:56:12<div class="redo"><a href="#">回 覆</a></div></li>
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
            <div class="product_title put_text small_font2 float_left">我要留言</div>
            <div class="show_content">
                <ol>
                    <li class="li_title float_left">問題內容：</li>
                    <li class="li_value">
                      <textarea name="textarea" id="textarea" cols="50" rows="5"></textarea>
                    </li>
                </ol>
            </div>
        </div>
      </DIV>
	</div>
    <div class="right_div">
    	<?
		include("login.php");
		?>
        <DIV class="hd_frame">
         	<H2>最近訪客</H2>
        	<div class="bd_frame">
                <ol class="ulmember">
                    <LI class="member member_height"><A 
                      href="http://tw.rd.yahoo.com/referurl/wretch/index/album/b/2/1/0/*http://www.wretch.cc/album/album.php?id=sweet780422&amp;book=129" 
                      target=_blank><IMG src="./images/11374_thumbnail.jpg"></A>
                      	<div><A href="http://tw.rd.yahoo.com/referurl/wretch/index/album/b/2/1/1/*http://www.wretch.cc/album/album.php?id=sweet780422&amp;book=129" target="_blank">陳麗華</A><label>2009-09-16</label>
                      	</div>
                    </LI>
                    <LI class="member member_height"><A 
                      href="http://tw.rd.yahoo.com/referurl/wretch/index/album/b/2/1/0/*http://www.wretch.cc/album/album.php?id=sweet780422&amp;book=129" 
                      target=_blank><IMG src="./images/11374_thumbnail.jpg"></A>
                      	<div><A href="http://tw.rd.yahoo.com/referurl/wretch/index/album/b/2/1/1/*http://www.wretch.cc/album/album.php?id=sweet780422&amp;book=129" target="_blank">陳麗華</A><label>2009-09-16</label>
                      	</div>
                    </LI>
                    <LI class="member member_height"><A 
                      href="http://tw.rd.yahoo.com/referurl/wretch/index/album/b/2/1/0/*http://www.wretch.cc/album/album.php?id=sweet780422&amp;book=129" 
                      target=_blank><IMG src="./images/11374_thumbnail.jpg"></A>
                      	<div><A href="http://tw.rd.yahoo.com/referurl/wretch/index/album/b/2/1/1/*http://www.wretch.cc/album/album.php?id=sweet780422&amp;book=129" target="_blank">陳麗華</A><label>2009-09-16</label>
                      	</div>
                    </LI>
                    <LI class="member member_height"><A 
                      href="http://tw.rd.yahoo.com/referurl/wretch/index/album/b/2/1/0/*http://www.wretch.cc/album/album.php?id=sweet780422&amp;book=129" 
                      target=_blank><IMG src="./images/11374_thumbnail.jpg"></A>
                      	<div><A href="http://tw.rd.yahoo.com/referurl/wretch/index/album/b/2/1/1/*http://www.wretch.cc/album/album.php?id=sweet780422&amp;book=129" target="_blank">陳麗華</A><label>2009-09-16</label>
                      	</div>
                    </LI>
                    <LI class="member member_height"><A 
                      href="http://tw.rd.yahoo.com/referurl/wretch/index/album/b/2/1/0/*http://www.wretch.cc/album/album.php?id=sweet780422&amp;book=129" 
                      target=_blank><IMG src="./images/11374_thumbnail.jpg"></A>
                      	<div><A href="http://tw.rd.yahoo.com/referurl/wretch/index/album/b/2/1/1/*http://www.wretch.cc/album/album.php?id=sweet780422&amp;book=129" target="_blank">陳麗華</A><label>2009-09-16</label>
                      	</div>
                    </LI>
                </ol>
            </div>
         </DIV>
         <DIV class="right_div hd_frame">
         	<H2>好友列表</H2>
            <div class="bd_frame">
                <ol class="ulmember">
                    <LI class=member><A 
                      href="http://tw.rd.yahoo.com/referurl/wretch/index/album/b/2/1/0/*http://www.wretch.cc/album/album.php?id=sweet780422&amp;book=129" 
                      target=_blank><IMG src="./images/11374_thumbnail.jpg"></A><span><A href="http://tw.rd.yahoo.com/referurl/wretch/index/album/b/2/1/1/*http://www.wretch.cc/album/album.php?id=sweet780422&amp;book=129" target="_blank">陳麗華陳麗華陳麗華</A></span>
                    </LI>
                    <LI class=member><A 
                      href="http://tw.rd.yahoo.com/referurl/wretch/index/album/b/2/2/0/*http://www.wretch.cc/album/album.php?id=minniecaly&amp;book=45" 
                      target=_blank><IMG src="./images/11374_thumbnail.jpg"></A> 
                      <span><A 
                      href="http://tw.rd.yahoo.com/referurl/wretch/index/album/b/2/2/2/*http://www.wretch.cc/album/album.php?id=minniecaly&amp;book=45" 
                      target=_blank>陳麗華</A><A 
                      href="http://tw.rd.yahoo.com/referurl/wretch/index/album/fnlink/6/*?to=minniecaly&amp;from=" 
                      target=_blank></A></span>
                      </LI>
                    <LI class=member><A 
                      href="http://tw.rd.yahoo.com/referurl/wretch/index/album/b/2/3/0/*http://www.wretch.cc/album/album.php?id=mirababy888&amp;book=126" 
                      target=_blank><IMG src="./images/11374_thumbnail.jpg"></A> 
                      <span><A 
                      href="http://tw.rd.yahoo.com/referurl/wretch/index/album/b/2/3/2/*http://www.wretch.cc/album/album.php?id=mirababy888&amp;book=126" 
                      target=_blank>陳麗華</A><A 
                      href="http://tw.rd.yahoo.com/referurl/wretch/index/album/fnlink/7/*?to=mirababy888&amp;from=" 
                      target=_blank></A></span>
                    </LI>
                    <LI class=member><A 
                      href="http://tw.rd.yahoo.com/referurl/wretch/index/album/b/2/3/0/*http://www.wretch.cc/album/album.php?id=mirababy888&amp;book=126" 
                      target=_blank><IMG src="./images/11374_thumbnail.jpg"></A> 
                      <span><A 
                      href="http://tw.rd.yahoo.com/referurl/wretch/index/album/b/2/3/2/*http://www.wretch.cc/album/album.php?id=mirababy888&amp;book=126" 
                      target=_blank>陳麗華</A><A 
                      href="http://tw.rd.yahoo.com/referurl/wretch/index/album/fnlink/7/*?to=mirababy888&amp;from=" 
                      target=_blank></A></span>
                    </LI>
                    <LI class=member><A 
                      href="http://tw.rd.yahoo.com/referurl/wretch/index/album/b/2/3/0/*http://www.wretch.cc/album/album.php?id=mirababy888&amp;book=126" 
                      target=_blank><IMG src="./images/11374_thumbnail.jpg"></A> 
                      <span><A 
                      href="http://tw.rd.yahoo.com/referurl/wretch/index/album/b/2/3/2/*http://www.wretch.cc/album/album.php?id=mirababy888&amp;book=126" 
                      target=_blank>kenoscar</A><A 
                      href="http://tw.rd.yahoo.com/referurl/wretch/index/album/fnlink/7/*?to=mirababy888&amp;from=" 
                      target=_blank></A></span>
                    </LI>
                </ol>
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
	$("#tabs").addClass("tabs-bottom");
});
</script>
