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
        <li><a href="#"><?
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
        ?></a></li>
        <li>></li>
        <li>討論內容如下</li>
    </ol>
    <div class="big_center_div">
    	<ol class="ol_discuss">
        	<li>
                <div class="limen2 bighight"></div>
                <div class="licontext2 bighight">
                	<ul class="ul_discuss">
                    	<li class="li_width1">
                            <label class="border_style"><a href="#">回覆</a></label>
                        </li>
                        <li class="li_width2">
                            <label class="border_style"><a href="#">發帖</a></label>
                        </li>
                        <li class="li_width3">
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
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="limen">
                	<div class="divt1">kenoscar</div>
                    <div class="divpic"><IMG src="./images/11374_thumbnail.jpg"></div>
                </div>
                <div class="licontext">
                	<div class="divt2"><img src="images/online_member.gif" /><span class="font14 vtop">發表於 2010-3-2 05:44</span></div>
                    <div class="divt2 font_bold">討論標題</div>
                發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44
                </div>
            </li>
            <li class="subtract">
                <div class="limen">
                    <div class="divt3"></div>
                </div>
                <div class="div_fotter"><div><img src="images/comment2_16x16.gif" /><span class="font14 vtop">回復</span></div></div>
            </li>
            <li>
                <div class="limen2"></div>
                <div class="licontext2"></div>
            </li>
            <li>
                <div class="limen">
                	<div class="divt1">kenoscar</div>
                    <div class="divpic"><IMG src="./images/11374_thumbnail.jpg"></div>
                </div>
                <div class="licontext">
                	<div class="divt2"><img src="images/online_member.gif" /><span class="font14 vtop">發表於 2010-3-2 05:44</span></div>
                    <div class="divt2 font_bold">討論標題</div>
                發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44
                </div>
            </li>
            <li class="subtract">
                <div class="limen">
                    <div class="divt3"></div>
                </div>
                <div class="div_fotter"><div><img src="images/comment2_16x16.gif" /><span class="font14 vtop">回復</span></div></div>
            </li>
            <li>
                <div class="limen2"></div>
                <div class="licontext2"></div>
            </li>
            <li>
                <div class="limen">
                	<div class="divt1">kenoscar</div>
                    <div class="divpic"><IMG src="./images/11374_thumbnail.jpg"></div>
                </div>
                <div class="licontext">
                	<div class="divt2"><img src="images/online_member.gif" /><span class="font14 vtop">發表於 2010-3-2 05:44</span></div>
                    <div class="divt2 font_bold">討論標題</div>
                發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44
                </div>
            </li>
            <li class="subtract">
                <div class="limen">
                    <div class="divt3"></div>
                </div>
                <div class="div_fotter"><div><img src="images/comment2_16x16.gif" /><span class="font14 vtop">回復</span></div></div>
            </li>
            <li>
                <div class="limen2"></div>
                <div class="licontext2"></div>
            </li>
            <li>
                <div class="limen">
                	<div class="divt1">kenoscar</div>
                    <div class="divpic"><IMG src="./images/11374_thumbnail.jpg"></div>
                </div>
                <div class="licontext">
                	<div class="divt2"><img src="images/online_member.gif" /><span class="font14 vtop">發表於 2010-3-2 05:44</span></div>
                    <div class="divt2 font_bold">討論標題</div>
                發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44
                </div>
            </li>
            <li class="subtract">
                <div class="limen">
                    <div class="divt3"></div>
                </div>
                <div class="div_fotter"><div><img src="images/comment2_16x16.gif" /><span class="font14 vtop">回復</span></div></div>
            </li>
            <li>
                <div class="limen2"></div>
                <div class="licontext2"></div>
            </li>
            <li>
                <div class="limen">
                	<div class="divt1">kenoscar</div>
                    <div class="divpic"><IMG src="./images/11374_thumbnail.jpg"></div>
                </div>
                <div class="licontext">
                	<div class="divt2"><img src="images/online_member.gif" /><span class="font14 vtop">發表於 2010-3-2 05:44</span></div>
                    <div class="divt2 font_bold">討論標題</div>
                發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44
                </div>
            </li>
            <li class="subtract">
                <div class="limen">
                    <div class="divt3"></div>
                </div>
                <div class="div_fotter"><div><img src="images/comment2_16x16.gif" /><span class="font14 vtop">回復</span></div></div>
            </li>
            <li>
                <div class="limen2"></div>
                <div class="licontext2"></div>
            </li>
            <li>
                <div class="limen">
                	<div class="divt1">kenoscar</div>
                    <div class="divpic"><IMG src="./images/11374_thumbnail.jpg"></div>
                </div>
                <div class="licontext">
                	<div class="divt2"><img src="images/online_member.gif" /><span class="font14 vtop">發表於 2010-3-2 05:44</span></div>
                    <div class="divt2 font_bold">討論標題</div>
                發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44
                </div>
            </li>
            <li class="subtract">
                <div class="limen">
                    <div class="divt3"></div>
                </div>
                <div class="div_fotter"><div><img src="images/comment2_16x16.gif" /><span class="font14 vtop">回復</span></div></div>
            </li>
            <li>
                <div class="limen2"></div>
                <div class="licontext2"></div>
            </li>
            <li>
                <div class="limen">
                	<div class="divt1">kenoscar</div>
                    <div class="divpic"><IMG src="./images/11374_thumbnail.jpg"></div>
                </div>
                <div class="licontext">
                	<div class="divt2"><img src="images/online_member.gif" /><span class="font14 vtop">發表於 2010-3-2 05:44</span></div>
                    <div class="divt2 font_bold">討論標題</div>
                發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44
                </div>
            </li>
            <li class="subtract">
                <div class="limen">
                    <div class="divt3"></div>
                </div>
                <div class="div_fotter"><div><img src="images/comment2_16x16.gif" /><span class="font14 vtop">回復</span></div></div>
            </li>
            <li>
                <div class="limen2"></div>
                <div class="licontext2"></div>
            </li>
            <li>
                <div class="limen">
                	<div class="divt1">kenoscar</div>
                    <div class="divpic"><IMG src="./images/11374_thumbnail.jpg"></div>
                </div>
                <div class="licontext">
                	<div class="divt2"><img src="images/online_member.gif" /><span class="font14 vtop">發表於 2010-3-2 05:44</span></div>
                    <div class="divt2 font_bold">討論標題</div>
                發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44
                </div>
            </li>
            <li class="subtract">
                <div class="limen">
                    <div class="divt3"></div>
                </div>
                <div class="div_fotter"><div><img src="images/comment2_16x16.gif" /><span class="font14 vtop">回復</span></div></div>
            </li>
            <li>
                <div class="limen2"></div>
                <div class="licontext2"></div>
            </li>
			<li>
                <div class="limen">
                	<div class="divt1">kenoscar</div>
                    <div class="divpic"><IMG src="./images/11374_thumbnail.jpg"></div>
                </div>
                <div class="licontext">
                	<div class="divt2"><img src="images/online_member.gif" /><span class="font14 vtop">發表於 2010-3-2 05:44</span></div>
                    <div class="divt2 font_bold">討論標題</div>
                發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44
                </div>
            </li>
            <li class="subtract">
                <div class="limen">
                    <div class="divt3"></div>
                </div>
                <div class="div_fotter"><div><img src="images/comment2_16x16.gif" /><span class="font14 vtop">回復</span></div></div>
            </li>
            <li>
                <div class="limen2"></div>
                <div class="licontext2"></div>
            </li>
            <li>
                <div class="limen">
                    <div class="divt1">kenoscar</div>
                    <div class="divpic"><IMG src="./images/11374_thumbnail.jpg"></div>
                </div>
                <div class="licontext">
                    <div class="divt2"><img src="images/online_member.gif" /><span class="font14 vtop">發表於 2010-3-2 05:44</span></div>
                    <div class="divt2 font_bold">討論標題</div>
                發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44發表於 2010-3-2 05:44
                </div>
            </li>
            <li class="subtract">
                <div class="limen">
                    <div class="divt3"></div>
                </div>
                <div class="div_fotter"><div><img src="images/comment2_16x16.gif" /><span class="font14 vtop">回復</span></div></div>
            </li>
            <li>
                <div class="limen2 bighight"></div>
                <div class="licontext2 bighight">
                    <ul class="ul_discuss">
                        <li>
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
                        </li>
                    </ul>
                </div>
            </li>
        </ol>
    </div>
</body>
</html>
