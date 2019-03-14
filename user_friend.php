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
    <div class="big_left_div">
		<DIV class="hd_frame">
            <div class="small_left_div">
                <ol class="main_menu">
                    <li><a href="user.php">個人主頁</a></li>
                    <li><a href="user_show.php">服飾秀</a></li>
                    <li><a href="user_product.php">商品/收藏</a></li>
                    <li><a href="user_talk.php">討論</a></li>
                    <li class="div_bg2"><a href="#">好友</a></li>
                    <li><a href="account.php">資金管理</a></li>
                    <li><a href="system_msg.php">系統訊息</a></li>
                </ol>
            </div>
            <div class="small_center_div">
            	<div id="tabs">
                    <ul>
                        <li class="tab_li_title"><a href="#tabs-1">我的好友</a></li>
                        <li class="tab_li_title"><a href="#tabs-2">好友動態</a></li>
                        <li class="tab_li_title"><a href="#tabs-3">朋友邀請</a></li>
                        <li class="tab_li_title"><a href="#tabs-4">我的邀請</a></li>
                    </ul>
                    <div id="tabs-1">
                    	<div class="bd_frame">
                            <ol class="ulmember">
                                <LI class=member><A 
                                  href="http://tw.rd.yahoo.com/referurl/wretch/index/album/b/2/1/0/*http://www.wretch.cc/album/album.php?id=sweet780422&amp;book=129" 
                                  target=_blank><IMG src="./images/11374_thumbnail.jpg"></A><span><A href="http://tw.rd.yahoo.com/referurl/wretch/index/album/b/2/1/1/*http://www.wretch.cc/album/album.php?id=sweet780422&amp;book=129" target="_blank">陳麗華陳麗華陳麗華</A></span>
                                </LI>
                                <LI class=member><A 
                                  href="http://tw.rd.yahoo.com/referurl/wretch/index/album/b/2/2/0/*http://www.wretch.cc/album/album.php?id=minniecaly&amp;book=45" 
                                  target=_blank><IMG src="./images/11374_thumbnail.jpg"></A> 
                                  <span><A href="http://tw.rd.yahoo.com/referurl/wretch/index/album/b/2/2/2/*http://www.wretch.cc/album/album.php?id=minniecaly&amp;book=45" 
                                  target=_blank>陳麗華</A><A href="http://tw.rd.yahoo.com/referurl/wretch/index/album/fnlink/6/*?to=minniecaly&amp;from=" 
                                  target=_blank></A></span>
                                  </LI>
                                <LI class=member><A href="http://tw.rd.yahoo.com/referurl/wretch/index/album/b/2/3/0/*http://www.wretch.cc/album/album.php?id=mirababy888&amp;book=126" 
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
                                <LI class=member><A 
                                  href="http://tw.rd.yahoo.com/referurl/wretch/index/album/b/2/3/0/*http://www.wretch.cc/album/album.php?id=mirababy888&amp;book=126" 
                                  target=_blank><IMG src="./images/11374_thumbnail.jpg"></A> 
                                  <span><A 
                                  href="http://tw.rd.yahoo.com/referurl/wretch/index/album/b/2/3/2/*http://www.wretch.cc/album/album.php?id=mirababy888&amp;book=126" 
                                  target=_blank>kenoscar</A><A 
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
                    </div>
                    <div id="tabs-2">
                    	<div class="bd_frame">
                            <div class="blod_under">今天</div>
                            <OL class="user_image">
                                <LI><a href="#">小美 買了一件短T恤黃色</a><span>21:21</span></LI>
                                <LI><a href="#">小玉回應了小美的近況動態</a><span>21:21</span></LI> 
                                <LI><a href="#">小玉 分享了一件個人服飾照...</a><span>21:21</span></LI>
                                <LI><a href="#">小花在小玉的個人服飾照留言</a><span>21:21</span></LI>
                                <LI><a href="#">小明和小花成為好友</a><span>21:21</span></LI>
                                <LI><a href="#">小玉 回應了 小花 的近況動態</a><span>21:21</span></LI>
                                <LI><a href="#">小玉 在他的po文上留言</a><span>21:21</span></LI>
                                <LI><a href="#">郭小松：今天天氣好熱</a><span>21:21</span></LI>
                                <LI><a href="#">小玉回應了郭小松的近況動態</a><span>21:21</span></LI>
                                <LI><a href="#">小明回應了郭小松的近況動態</a><span>21:21</span></LI> 
                            </OL>
                            <div class="blod_under">昨天</div>
                            <OL class="user_image">
                                <LI><a href="#">小美 買了一件短T恤黃色</a><span>21:21</span></LI>
                                <LI><a href="#">小玉回應了小美的近況動態</a><span>21:21</span></LI> 
                                <LI><a href="#">小玉 分享了一件個人服飾照...</a><span>21:21</span></LI>
                                <LI><a href="#">小花在小玉的個人服飾照留言</a><span>21:21</span></LI>
                                <LI><a href="#">小明和小花成為好友</a><span>21:21</span></LI>
                                <LI><a href="#">小玉 回應了 小花 的近況動態</a><span>21:21</span></LI>
                                <LI><a href="#">小玉 在他的po文上留言</a><span>21:21</span></LI>
                                <LI><a href="#">郭小松：今天天氣好熱</a><span>21:21</span></LI>
                                <LI><a href="#">小玉回應了郭小松的近況動態</a><span>21:21</span></LI>
                                <LI><a href="#">小明回應了郭小松的近況動態</a><span>21:21</span></LI>
                            </OL>
                            <div class="blod_under">4月11日</div>
                            <OL class="user_image">
                                <LI><a href="#">小美 買了一件短T恤黃色</a><span>21:21</span></LI>
                                <LI><a href="#">小玉回應了小美的近況動態</a><span>21:21</span></LI> 
                                <LI><a href="#">小玉 分享了一件個人服飾照...</a><span>21:21</span></LI>
                                <LI><a href="#">小花在小玉的個人服飾照留言</a><span>21:21</span></LI>
                                <LI><a href="#">小明和小花成為好友</a><span>21:21</span></LI>
                                <LI><a href="#">小玉 回應了 小花 的近況動態</a><span>21:21</span></LI>
                                <LI><a href="#">小玉 在他的po文上留言</a><span>21:21</span></LI>
                                <LI><a href="#">郭小松：今天天氣好熱</a><span>21:21</span></LI>
                                <LI><a href="#">小玉回應了郭小松的近況動態</a><span>21:21</span></LI>
                                <LI><a href="#">小明回應了郭小松的近況動態</a><span>21:21</span></LI> 
                            </OL>
                            <div class="blod_under">4月10日</div>
                            <OL class="user_image">
                                <LI><a href="#">小美 買了一件短T恤黃色</a><span>21:21</span></LI>
                                <LI><a href="#">小玉回應了小美的近況動態</a><span>21:21</span></LI> 
                                <LI><a href="#">小玉 分享了一件個人服飾照...</a><span>21:21</span></LI>
                                <LI><a href="#">小花在小玉的個人服飾照留言</a><span>21:21</span></LI>
                                <LI><a href="#">小明和小花成為好友</a><span>21:21</span></LI>
                                <LI><a href="#">小玉 回應了 小花 的近況動態</a><span>21:21</span></LI>
                                <LI><a href="#">小玉 在他的po文上留言</a><span>21:21</span></LI>
                                <LI><a href="#">郭小松：今天天氣好熱</a><span>21:21</span></LI>
                                <LI><a href="#">小玉回應了郭小松的近況動態</a><span>21:21</span></LI>
                                <LI><a href="#">小明回應了郭小松的近況動態</a><span>21:21</span></LI>
                            </OL>
                            <a href="#" class="font_red"><div class="all_tag">顯示稍早的動態</div></a>
                       </div>
                    </div>
                    <div id="tabs-3">
                    	<ol class="friend_me">
                        	<li>
                            	<div class="float_left">
                                    <div><a href="#">黃嘉怡</a>邀請您成為好友</div>
                                    <div class="invite"><input type="button" value="答應" /><input type="button" value="拒絕" /></div>
                                </div>
                                <img src="images/11374_thumbnail.jpg" />
                            </li>
                            <li>
                            	<div class="float_left">
                                    <div><a href="#">黃嘉怡</a>邀請您成為好友</div>
                                    <div class="invite"><input type="button" value="答應" /><input type="button" value="拒絕" /></div>
                                </div>
                                <img src="images/11374_thumbnail.jpg" />
                            </li>
                        </ol>
                    </div>
                    <div id="tabs-4">
                    	<ol class="friend_me">
                        	<li>
                            	<img class="user_cancel" src="images/24-em-cross.png" />
                                <span>您邀請<a href="#">黃嘉怡</a>成為好友</span>
                            </li>
                            <li>
                            	<img class="user_cancel" src="images/24-em-cross.png" />
                                <span>您邀請<a href="#">黃嘉怡</a>成為好友</span>
                            </li>
                        </ol>
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
     </div>
</body>
</html>
<script type="text/javascript">
$(function(){
	$("#tabs").tabs({
			event: 'click'
		});
	$("#tabs").tabs().find(".ui-tabs-nav").sortable({axis:'x'});
});
</script>