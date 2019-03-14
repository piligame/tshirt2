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
                    <li><a href="user_product.php">商品/收藏</a></li>
                    <li class="div_bg2"><a href="#">討論</a></li>
                    <li><a href="user_friend.php">好友</a></li>
                    <li><a href="account.php">資金管理</a></li>
                    <li><a href="system_msg.php">系統訊息</a></li>
                </ol>
            </div>
            <div class="licontext">
                <div id="tabs">
                    <ul>
                        <li class="tab_li_title"><a href="#tabs-1">發起討論</a></li>
                        <li class="tab_li_title"><a href="#tabs-2">參與討論</a></li>
                        <li class="tab_li_title"><a href="#tabs-3">商品評論</a></li>
                        <li class="tab_li_title"><a href="#tabs-4">Show評論</a></li>
                    </ul>
                    <div id="tabs-1">
                    	<OL class="bigoli">
                            <LI>
                                <ol class="pic100_detail">
                                    <li class="header">
                                        <div class="user_width3">主題</div>
                                        <div class="li_width2">時間</div>
                                        <div class="user_del">操作</div>
                                    </li>
                                    <li>
                                        <div class="user_width3"><a href="#">荷利表示：「我們終其一生，都在致力研究動物神秘斷肢現象，也在調查這種現象與越來越多人通報看見橘紅光線有無關聯。」</a></div>
                                        <div class="li_width2">2010-03-31 14:56:12</div>
                                        <div class="user_del"><input type="button" value="刪除" /></div>
                                    </li>
                                    <li>
                                        <div class="user_width3"><a href="#">荷利表示：「我們終其一生，都在致力研究動物神秘斷肢現象，也在調查這種現象與越來越多人通報看見橘紅光線有無關聯。」</a></div>
                                        <div class="li_width2">2010-03-31 14:56:12</div>
                                        <div class="user_del"><input type="button" value="刪除" /></div>
                                    </li>
                                </ol>
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
                    <div id="tabs-2">
                    	<OL class="bigoli">
                            <LI>
                                <ol class="pic100_detail">
                                    <li class="header">
                                        <div class="user_width3">主題</div>
                                        <div class="li_width2">時間</div>
                                        <div class="user_del">操作</div>
                                    </li>
                                    <li>
                                        <div class="user_width3"><a href="#">荷利表示：「我們終其一生，都在致力研究動物神秘斷肢現象，也在調查這種現象與越來越多人通報看見橘紅光線有無關聯。」</a></div>
                                        <div class="li_width2">2010-03-31 14:56:12</div>
                                        <div class="user_del"><input type="button" value="刪除" /></div>
                                    </li>
                                    <li>
                                        <div class="user_width3"><a href="#">荷利表示：「我們終其一生，都在致力研究動物神秘斷肢現象，也在調查這種現象與越來越多人通報看見橘紅光線有無關聯。」</a></div>
                                        <div class="li_width2">2010-03-31 14:56:12</div>
                                        <div class="user_del"><input type="button" value="刪除" /></div>
                                    </li>
                                </ol>
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
                    <div id="tabs-3">
                    	<OL class="bigoli">
                            <LI>
                                <ol class="pic100_detail">
                                    <li class="header">
                                        <div class="user_talk1">商品名稱</div>
                                        <div class="user_talk2">評論內容</div>
                                        <div class="li_width2">時間</div>
                                        <div class="user_del">操作</div>
                                    </li>
                                    <li>
                                    	<div class="user_talk1"><a href="#">007卡通T恤</a></div>
                                        <div class="user_talk2">荷利表示：「我們終其一生，都在致力研究動物神秘斷肢現象，也在調查這種現象與越來越多人通報看見橘紅光線有無關聯。」</div>
                                        <div class="li_width2">2010-03-31 14:56:12</div>
                                        <div class="user_del"><input type="button" value="刪除" /></div>
                                    </li>
                                    <li>
                                    	<div class="user_talk1"><a href="#">007卡通T恤</a></div>
                                        <div class="user_talk2">荷利表示：「我們終其一生，都在致力研究動物神秘斷肢現象，也在調查這種現象與越來越多人通報看見橘紅光線有無關聯。」</div>
                                        <div class="li_width2">2010-03-31 14:56:12</div>
                                        <div class="user_del"><input type="button" value="刪除" /></div>
                                    </li>
                                </ol>
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
                    <div id="tabs-4">
                    	<OL class="bigoli">
                            <LI>
                                <ol class="pic100_detail">
                                    <li class="header">
                                        <div class="user_talk1">商品名稱</div>
                                        <div class="user_talk2">評論內容</div>
                                        <div class="li_width2">時間</div>
                                        <div class="user_del">操作</div>
                                    </li>
                                    <li>
                                    	<div class="user_talk1"><a href="#">007卡通T恤</a></div>
                                        <div class="user_talk2">荷利表示：「我們終其一生，都在致力研究動物神秘斷肢現象，也在調查這種現象與越來越多人通報看見橘紅光線有無關聯。」</div>
                                        <div class="li_width2">2010-03-31 14:56:12</div>
                                        <div class="user_del"><input type="button" value="刪除" /></div>
                                    </li>
                                    <li>
                                    	<div class="user_talk1"><a href="#">007卡通T恤</a></div>
                                        <div class="user_talk2">荷利表示：「我們終其一生，都在致力研究動物神秘斷肢現象，也在調查這種現象與越來越多人通報看見橘紅光線有無關聯。」</div>
                                        <div class="li_width2">2010-03-31 14:56:12</div>
                                        <div class="user_del"><input type="button" value="刪除" /></div>
                                    </li>
                                </ol>
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
	$(".pic100_detail li:not(:.header):odd").addClass("bg_answer2");
});
</script>