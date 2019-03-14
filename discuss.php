<?
include("./tsaserver/config.php"); 
include("./tsaserver/hihot_functiom.php");

$typeid = "";
if(isset($_GET['typeid']))
{
	$typeid = htmlspecialchars($_GET['typeid'],ENT_QUOTES);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=query_website_name()?></title>
<link href="./css/top.css" rel="stylesheet" type="text/css">
<link href="./css/discuss.css" rel="stylesheet" type="text/css">
</head>
<body>
	<?
	include("top2.php");
	?>
    <ol class="bread">
		<li><a href="index.php">首頁</a></li>
        <li>></li>
        <li><?
		switch($typeid)
		{
			case 1:
				echo "場合問服飾";
				break;
			case 2:
				echo "服飾問場合";
				break;
			case 3:
				echo "其他討論";
				break;
			default:
				echo "場合問服飾";
		}
        ?></li>
    </ol>
    <div class="big_left_div">
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
        <OL class="bigoli">
        	<li class="focusblue">場合問服飾</li>
            <li><a href="#">服飾問場合</a></li>
            <li><a href="#">其他討論</a></li>
            <li class="createpaper">發表文章</li>
        </OL><div class="model_name"></div>
        <div class="newblog_down font14">
        	<div class="hd_pap hd_pap_padding">標題文章</div>
            <div class="hd_pap2 hd_pap_padding">作者</div>
            <div class="hd_pap3 hd_pap_padding"><a href="#">點閱<img src="./images/up.gif" /><img src="./images/down.gif" /></a></div>
            <div class="hd_pap3 hd_pap_padding"><a href="#">回應<img src="./images/up.gif" /><img src="./images/down.gif" /></a></div>
            <div class="hd_pap4 hd_pap_padding"><a href="#">最後回應<img src="./images/up.gif" /><img src="./images/down.gif" /></a></div>
            <div class="model_name"></div>
        </div>
        <div class="newblog_down detail">
            <div id="" class="hd_pap hd_pap_padding"><a href="discuss_detail.php">王文洋指出，王永慶生前堅持一夫一妻制，對於李寶珠宣稱和王永慶有公開喜宴，他深表不以為然，法界專家指出以台灣的法規，其實家譜確實具有法律效力。</a></div>
            <div class="hd_pap2 hd_pap_padding"><a href="http://www.kimo.com.tw">陳阿明</a><div class="small_font">2009-10-02</div></div>
            <div class="hd_pap3 hd_pap_padding">1000</div>
            <div class="hd_pap3 hd_pap_padding">10</div>
            <div class="hd_pap4 hd_pap_padding"><a href="http://www.kimo.com.tw">陳阿明</a><div class="small_font">2009-10-02 11:23</div></div>
            <div class="model_name"></div>
        </div>
        <div class="newblog_down detail">
            <div id="" class="hd_pap hd_pap_padding"><a href="discuss_detail.php">王文洋指出，王永慶生前堅持一夫一妻制，對於李寶珠宣稱和王永慶有公開喜宴，他深表不以為然，法界專家指出以台灣的法規，其實家譜確實具有法律效力。</a></div>
            <div class="hd_pap2 hd_pap_padding"><a href="http://www.kimo.com.tw">陳阿明</a><div class="small_font">2009-10-02</div></div>
            <div class="hd_pap3 hd_pap_padding">1000</div>
            <div class="hd_pap3 hd_pap_padding">10</div>
            <div class="hd_pap4 hd_pap_padding"><a href="http://www.kimo.com.tw">陳阿明</a><div class="small_font">2009-10-02 11:23</div></div>
            <div class="model_name"></div>
        </div>
        <div class="newblog_down detail">
            <div id="" class="hd_pap hd_pap_padding"><a href="discuss_detail.php">王文洋指出，王永慶生前堅持一夫一妻制，對於李寶珠宣稱和王永慶有公開喜宴，他深表不以為然，法界專家指出以台灣的法規，其實家譜確實具有法律效力。</a></div>
            <div class="hd_pap2 hd_pap_padding"><a href="http://www.kimo.com.tw">陳阿明</a><div class="small_font">2009-10-02</div></div>
            <div class="hd_pap3 hd_pap_padding">1000</div>
            <div class="hd_pap3 hd_pap_padding">10</div>
            <div class="hd_pap4 hd_pap_padding"><a href="http://www.kimo.com.tw">陳阿明</a><div class="small_font">2009-10-02 11:23</div></div>
            <div class="model_name"></div>
        </div>
        <div class="newblog_down detail">
            <div id="" class="hd_pap hd_pap_padding"><a href="discuss_detail.php">王文洋指出，王永慶生前堅持一夫一妻制，對於李寶珠宣稱和王永慶有公開喜宴，他深表不以為然，法界專家指出以台灣的法規，其實家譜確實具有法律效力。</a></div>
            <div class="hd_pap2 hd_pap_padding"><a href="http://www.kimo.com.tw">陳阿明</a><div class="small_font">2009-10-02</div></div>
            <div class="hd_pap3 hd_pap_padding">1000</div>
            <div class="hd_pap3 hd_pap_padding">10</div>
            <div class="hd_pap4 hd_pap_padding"><a href="http://www.kimo.com.tw">陳阿明</a><div class="small_font">2009-10-02 11:23</div></div>
            <div class="model_name"></div>
        </div>
        <div class="newblog_down detail">
            <div id="" class="hd_pap hd_pap_padding"><a href="discuss_detail.php">王文洋指出，王永慶生前堅持一夫一妻制，對於李寶珠宣稱和王永慶有公開喜宴，他深表不以為然，法界專家指出以台灣的法規，其實家譜確實具有法律效力。</a></div>
            <div class="hd_pap2 hd_pap_padding"><a href="http://www.kimo.com.tw">陳阿明</a><div class="small_font">2009-10-02</div></div>
            <div class="hd_pap3 hd_pap_padding">1000</div>
            <div class="hd_pap3 hd_pap_padding">10</div>
            <div class="hd_pap4 hd_pap_padding"><a href="http://www.kimo.com.tw">陳阿明</a><div class="small_font">2009-10-02 11:23</div></div>
            <div class="model_name"></div>
        </div>
        <div class="newblog_down detail">
            <div id="" class="hd_pap hd_pap_padding"><a href="discuss_detail.php">王文洋指出，王永慶生前堅持一夫一妻制，對於李寶珠宣稱和王永慶有公開喜宴，他深表不以為然，法界專家指出以台灣的法規，其實家譜確實具有法律效力。</a></div>
            <div class="hd_pap2 hd_pap_padding"><a href="http://www.kimo.com.tw">陳阿明</a><div class="small_font">2009-10-02</div></div>
            <div class="hd_pap3 hd_pap_padding">1000</div>
            <div class="hd_pap3 hd_pap_padding">10</div>
            <div class="hd_pap4 hd_pap_padding"><a href="http://www.kimo.com.tw">陳阿明</a><div class="small_font">2009-10-02 11:23</div></div>
            <div class="model_name"></div>
        </div>
        <div class="newblog_down detail">
            <div id="" class="hd_pap hd_pap_padding"><a href="discuss_detail.php">王文洋指出，王永慶生前堅持一夫一妻制，對於李寶珠宣稱和王永慶有公開喜宴，他深表不以為然，法界專家指出以台灣的法規，其實家譜確實具有法律效力。</a></div>
            <div class="hd_pap2 hd_pap_padding"><a href="http://www.kimo.com.tw">陳阿明</a><div class="small_font">2009-10-02</div></div>
            <div class="hd_pap3 hd_pap_padding">1000</div>
            <div class="hd_pap3 hd_pap_padding">10</div>
            <div class="hd_pap4 hd_pap_padding"><a href="http://www.kimo.com.tw">陳阿明</a><div class="small_font">2009-10-02 11:23</div></div>
            <div class="model_name"></div>
        </div>
        <div class="newblog_down detail">
            <div id="" class="hd_pap hd_pap_padding"><a href="discuss_detail.php">王文洋指出，王永慶生前堅持一夫一妻制，對於李寶珠宣稱和王永慶有公開喜宴，他深表不以為然，法界專家指出以台灣的法規，其實家譜確實具有法律效力。</a></div>
            <div class="hd_pap2 hd_pap_padding"><a href="http://www.kimo.com.tw">陳阿明</a><div class="small_font">2009-10-02</div></div>
            <div class="hd_pap3 hd_pap_padding">1000</div>
            <div class="hd_pap3 hd_pap_padding">10</div>
            <div class="hd_pap4 hd_pap_padding"><a href="http://www.kimo.com.tw">陳阿明</a><div class="small_font">2009-10-02 11:23</div></div>
            <div class="model_name"></div>
        </div>
        <div class="newblog_down detail">
            <div id="" class="hd_pap hd_pap_padding"><a href="discuss_detail.php">王文洋指出，王永慶生前堅持一夫一妻制，對於李寶珠宣稱和王永慶有公開喜宴，他深表不以為然，法界專家指出以台灣的法規，其實家譜確實具有法律效力。</a></div>
            <div class="hd_pap2 hd_pap_padding"><a href="http://www.kimo.com.tw">陳阿明</a><div class="small_font">2009-10-02</div></div>
            <div class="hd_pap3 hd_pap_padding">1000</div>
            <div class="hd_pap3 hd_pap_padding">10</div>
            <div class="hd_pap4 hd_pap_padding"><a href="http://www.kimo.com.tw">陳阿明</a><div class="small_font">2009-10-02 11:23</div></div>
            <div class="model_name"></div>
        </div>
        <div class="newblog_down detail">
            <div id="" class="hd_pap hd_pap_padding"><a href="discuss_detail.php">王文洋指出，王永慶生前堅持一夫一妻制，對於李寶珠宣稱和王永慶有公開喜宴，他深表不以為然，法界專家指出以台灣的法規，其實家譜確實具有法律效力。</a></div>
            <div class="hd_pap2 hd_pap_padding"><a href="http://www.kimo.com.tw">陳阿明</a><div class="small_font">2009-10-02</div></div>
            <div class="hd_pap3 hd_pap_padding">1000</div>
            <div class="hd_pap3 hd_pap_padding">10</div>
            <div class="hd_pap4 hd_pap_padding"><a href="http://www.kimo.com.tw">陳阿明</a><div class="small_font">2009-10-02 11:23</div></div>
            <div class="model_name"></div>
        </div>
        <div class="newblog_down detail">
            <div id="" class="hd_pap hd_pap_padding"><a href="discuss_detail.php">王文洋指出，王永慶生前堅持一夫一妻制，對於李寶珠宣稱和王永慶有公開喜宴，他深表不以為然，法界專家指出以台灣的法規，其實家譜確實具有法律效力。</a></div>
            <div class="hd_pap2 hd_pap_padding"><a href="http://www.kimo.com.tw">陳阿明</a><div class="small_font">2009-10-02</div></div>
            <div class="hd_pap3 hd_pap_padding">1000</div>
            <div class="hd_pap3 hd_pap_padding">10</div>
            <div class="hd_pap4 hd_pap_padding"><a href="http://www.kimo.com.tw">陳阿明</a><div class="small_font">2009-10-02 11:23</div></div>
            <div class="model_name"></div>
        </div>
        <div class="newblog_down detail">
            <div id="" class="hd_pap hd_pap_padding"><a href="discuss_detail.php">王文洋指出，王永慶生前堅持一夫一妻制，對於李寶珠宣稱和王永慶有公開喜宴，他深表不以為然，法界專家指出以台灣的法規，其實家譜確實具有法律效力。</a></div>
            <div class="hd_pap2 hd_pap_padding"><a href="http://www.kimo.com.tw">陳阿明</a><div class="small_font">2009-10-02</div></div>
            <div class="hd_pap3 hd_pap_padding">1000</div>
            <div class="hd_pap3 hd_pap_padding">10</div>
            <div class="hd_pap4 hd_pap_padding"><a href="http://www.kimo.com.tw">陳阿明</a><div class="small_font">2009-10-02 11:23</div></div>
            <div class="model_name"></div>
        </div>
        <div class="newblog_down detail">
            <div id="" class="hd_pap hd_pap_padding"><a href="discuss_detail.php">王文洋指出，王永慶生前堅持一夫一妻制，對於李寶珠宣稱和王永慶有公開喜宴，他深表不以為然，法界專家指出以台灣的法規，其實家譜確實具有法律效力。</a></div>
            <div class="hd_pap2 hd_pap_padding"><a href="http://www.kimo.com.tw">陳阿明</a><div class="small_font">2009-10-02</div></div>
            <div class="hd_pap3 hd_pap_padding">1000</div>
            <div class="hd_pap3 hd_pap_padding">10</div>
            <div class="hd_pap4 hd_pap_padding"><a href="http://www.kimo.com.tw">陳阿明</a><div class="small_font">2009-10-02 11:23</div></div>
            <div class="model_name"></div>
        </div>
        <div class="newblog_down detail">
            <div id="" class="hd_pap hd_pap_padding"><a href="discuss_detail.php">王文洋指出，王永慶生前堅持一夫一妻制，對於李寶珠宣稱和王永慶有公開喜宴，他深表不以為然，法界專家指出以台灣的法規，其實家譜確實具有法律效力。</a></div>
            <div class="hd_pap2 hd_pap_padding"><a href="http://www.kimo.com.tw">陳阿明</a><div class="small_font">2009-10-02</div></div>
            <div class="hd_pap3 hd_pap_padding">1000</div>
            <div class="hd_pap3 hd_pap_padding">10</div>
            <div class="hd_pap4 hd_pap_padding"><a href="http://www.kimo.com.tw">陳阿明</a><div class="small_font">2009-10-02 11:23</div></div>
            <div class="model_name"></div>
        </div>
        <div class="newblog_down detail">
            <div id="" class="hd_pap hd_pap_padding"><a href="discuss_detail.php">王文洋指出，王永慶生前堅持一夫一妻制，對於李寶珠宣稱和王永慶有公開喜宴，他深表不以為然，法界專家指出以台灣的法規，其實家譜確實具有法律效力。</a></div>
            <div class="hd_pap2 hd_pap_padding"><a href="http://www.kimo.com.tw">陳阿明</a><div class="small_font">2009-10-02</div></div>
            <div class="hd_pap3 hd_pap_padding">1000</div>
            <div class="hd_pap3 hd_pap_padding">10</div>
            <div class="hd_pap4 hd_pap_padding"><a href="http://www.kimo.com.tw">陳阿明</a><div class="small_font">2009-10-02 11:23</div></div>
            <div class="model_name"></div>
        </div>
        <div class="newblog_down detail">
            <div id="" class="hd_pap hd_pap_padding"><a href="discuss_detail.php">王文洋指出，王永慶生前堅持一夫一妻制，對於李寶珠宣稱和王永慶有公開喜宴，他深表不以為然，法界專家指出以台灣的法規，其實家譜確實具有法律效力。</a></div>
            <div class="hd_pap2 hd_pap_padding"><a href="http://www.kimo.com.tw">陳阿明</a><div class="small_font">2009-10-02</div></div>
            <div class="hd_pap3 hd_pap_padding">1000</div>
            <div class="hd_pap3 hd_pap_padding">10</div>
            <div class="hd_pap4 hd_pap_padding"><a href="http://www.kimo.com.tw">陳阿明</a><div class="small_font">2009-10-02 11:23</div></div>
            <div class="model_name"></div>
        </div>
        <div class="newblog_down detail">
            <div id="" class="hd_pap hd_pap_padding"><a href="discuss_detail.php">王文洋指出，王永慶生前堅持一夫一妻制，對於李寶珠宣稱和王永慶有公開喜宴，他深表不以為然，法界專家指出以台灣的法規，其實家譜確實具有法律效力。</a></div>
            <div class="hd_pap2 hd_pap_padding"><a href="http://www.kimo.com.tw">陳阿明</a><div class="small_font">2009-10-02</div></div>
            <div class="hd_pap3 hd_pap_padding">1000</div>
            <div class="hd_pap3 hd_pap_padding">10</div>
            <div class="hd_pap4 hd_pap_padding"><a href="http://www.kimo.com.tw">陳阿明</a><div class="small_font">2009-10-02 11:23</div></div>
            <div class="model_name"></div>
        </div>
        <div class="newblog_down detail">
            <div id="" class="hd_pap hd_pap_padding"><a href="discuss_detail.php">王文洋指出，王永慶生前堅持一夫一妻制，對於李寶珠宣稱和王永慶有公開喜宴，他深表不以為然，法界專家指出以台灣的法規，其實家譜確實具有法律效力。</a></div>
            <div class="hd_pap2 hd_pap_padding"><a href="http://www.kimo.com.tw">陳阿明</a><div class="small_font">2009-10-02</div></div>
            <div class="hd_pap3 hd_pap_padding">1000</div>
            <div class="hd_pap3 hd_pap_padding">10</div>
            <div class="hd_pap4 hd_pap_padding"><a href="http://www.kimo.com.tw">陳阿明</a><div class="small_font">2009-10-02 11:23</div></div>
            <div class="model_name"></div>
        </div>
        <div class="newblog_down detail">
            <div id="" class="hd_pap hd_pap_padding"><a href="discuss_detail.php">王文洋指出，王永慶生前堅持一夫一妻制，對於李寶珠宣稱和王永慶有公開喜宴，他深表不以為然，法界專家指出以台灣的法規，其實家譜確實具有法律效力。</a></div>
            <div class="hd_pap2 hd_pap_padding"><a href="http://www.kimo.com.tw">陳阿明</a><div class="small_font">2009-10-02</div></div>
            <div class="hd_pap3 hd_pap_padding">1000</div>
            <div class="hd_pap3 hd_pap_padding">10</div>
            <div class="hd_pap4 hd_pap_padding"><a href="http://www.kimo.com.tw">陳阿明</a><div class="small_font">2009-10-02 11:23</div></div>
            <div class="model_name"></div>
        </div>
        <div class="newblog_down detail">
            <div id="" class="hd_pap hd_pap_padding"><a href="discuss_detail.php">王文洋指出，王永慶生前堅持一夫一妻制，對於李寶珠宣稱和王永慶有公開喜宴，他深表不以為然，法界專家指出以台灣的法規，其實家譜確實具有法律效力。</a></div>
            <div class="hd_pap2 hd_pap_padding"><a href="http://www.kimo.com.tw">陳阿明</a><div class="small_font">2009-10-02</div></div>
            <div class="hd_pap3 hd_pap_padding">1000</div>
            <div class="hd_pap3 hd_pap_padding">10</div>
            <div class="hd_pap4 hd_pap_padding"><a href="http://www.kimo.com.tw">陳阿明</a><div class="small_font">2009-10-02 11:23</div></div>
            <div class="model_name"></div>
        </div>
        <div class="page hd_pap5">
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
            </div><div class="createpaper2">發表文章</div>
    </div>
    <div class="right_div">
    	<?
		include("login.php");
		?>
        <DIV class="hd_frame">
         	<H2>此頁討論網友</H2>
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
                </ol>
            </div>
         </DIV>
         <DIV class="right_div hd_frame">
         	<H2>此頁討論好友</H2>
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
                </ol>
            </div>
         </DIV>
    </div>
</body>
</html>
