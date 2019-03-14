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
<link href="./css/index.css" rel="stylesheet" type="text/css">
<link href="./base/jquery-ui-1.8rc1.custom.css" rel="stylesheet" type="text/css" />
<style>
	#tabs { height: 200px; width:auto; } 
	.tabs-bottom { position: relative; } 
	.tabs-bottom .ui-tabs-panel { height: 180px; width:600px; overflow: auto; margin-left:120px; } 
	.tabs-bottom .ui-tabs-nav { position: absolute !important; left: 0; bottom: 0; top:0; padding: 0px;} 
	.tabs-bottom .ui-tabs-nav li { margin: 1px 0px !important; border-left: none; clear:left;  width:100px;}
	.ui-tabs-nav li.ui-tabs-selected { width:102px; margin-right:-2px !important;  border-right-width: 0px !important; }

</style>
<script type="text/javascript" src="./jq/jquery-1.4.js"></script>
<script type="text/javascript" src="./jq/jquery-ui-1.8rc1.custom.js"></script>
</head>
<body>
	<?
	include("top2.php");
	?>
	<div class="big_left_div">
    	<DIV class="hd_frame div_bg1">
        	<H2>優質網友模特兒</H2>
        	<div id="tabs">
                <ul>
                    <li><a href="#tabs-1">個人主頁</a></li>
                    <li><a href="#tabs-2">服飾秀</a></li>
                </ul>
                <div id="tabs-1"><p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p></div>
                <div id="tabs-2"><p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p></div>
            </div>
        </DIV>
	</div>
</body>
<script type="text/javascript">
$(function(){
	$("#tabs").tabs().find(".ui-tabs-nav").sortable({axis:'x'});
	$("#tabs").addClass("tabs-bottom");
});
</script>
</html>
