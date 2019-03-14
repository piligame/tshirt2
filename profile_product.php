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
<link href="./css/profile.css" rel="stylesheet" type="text/css">
<link href="./base/jquery-ui-1.8rc1.custom.css" rel="stylesheet" type="text/css" />
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
        <li>kenoscar服飾秀</li>
    </ol>
    <div class="big_left_div">
		<DIV class="hd_frame">
            <div class="small_left_div">
                <ol class="main_menu">
                    <li><a href="profile.php">個人主頁</a></li>
                    <li><a href="profile_show.php">服飾秀</a></li>
                    <li class="div_bg2"><a href="#">商品/收藏</a></li>
                    <li><a href="profile_talk.php">討論</a></li>
                    <li><a href="profile_friend.php">好友</a></li>
                </ol>
            </div>
			<div class="small_center_div">
          		<div class="pic100_div" style="margin-left:50px;">
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
            	</div><div class="model_name"></div>
                <div id="tabs">
                    <ul>
                        <li class="tab_li_title"><a href="#tabs-1">代言的商品</a></li>
                        <li class="tab_li_title"><a href="#tabs-2">購買的商品</a></li>
                        <li class="tab_li_title"><a href="#tabs-3">收藏的商品</a></li>
                    </ul>
                    <div id="tabs-1">
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
                    <div id="tabs-2">
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
	$("#tabs").tabs().find(".ui-tabs-nav").sortable({axis:'x'});
});
</script>