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
                    <li><a href="user_friend.php">好友</a></li>
                    <li><a href="account.php">資金管理</a></li>
                    <li class="div_bg2"><a href="#">系統訊息</a></li>
                </ol>
            </div>
            <div class="small_center_div">       
                <div class="bd_frame">
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
                    <a href="#" class="font_red"><div class="all_tag">顯示稍早的系統訊息</div></a>
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
