<?
include("./tsaserver/config.php"); 
include("./tsaserver/hihot_functiom.php");
include("./public/fun_public.php");

$product_category_tb = "product_category_tb";

if(isset($_GET['category_id']))
{
	$category_id = htmlspecialchars($_GET['category_id'],ENT_QUOTES);
	$sql_category1 = sprintf("select category_name from $product_category_tb where category_sn = %d", quote_smart($category_id,false));
	$data_category1 = mysql_get_info($sql_category1);
	$sql_category2 = sprintf("select category_sn, category_name, category_level from $product_category_tb where category_depend_sn = %d", quote_smart($category_id,false));
	$results_category2 = mysql_work_get_more($sql_category2);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=query_website_name()?></title>
<link href="./css/top.css" rel="stylesheet" type="text/css">
<link href="./css/category.css" rel="stylesheet" type="text/css">
<link href="./base/jquery-ui-1.8rc1.custom.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="./jq/jquery-1.4.js"></script>
<script language=javascript src="./jq/jquery-ui-1.8rc1.custom.js"></script>
</head>
<body>
	<?
	include("top2.php");
	include("bread.php");
	?>
    <div class="left_div">
    	<DIV class="hd_frame">
		<H2><?=$data_category1['category_name']?></H2>
            <div class="bd_frame bd_ol_size">
                <ol class="category">
                <?
				if(isset($results_category2))
				{
					while($data_category2 = mysql_fetch_assoc($results_category2))
					{
                ?>
                    <li><a href="category_product2.php?level=<?=$data_category2['category_level']?>&category_id=<?=$data_category2['category_sn']?>"><?=$data_category2['category_name']?></a></li>
                <?
                	}
				}
                ?>
                </ol>
            </div>
        </DIV>
        <DIV class="hd_frame">
         	<H2>優質店家</H2>
            <div class="bd_frame">
                <ol class="home_image">
                    <LI><a href="store.php">新鈦服飾</a>(123)</LI>
                    <LI><a href="store.php">NET服飾</a>(12)</LI> 
                    <LI><a href="store.php">Hant服飾</a>(13)</LI>
                    <LI><a href="store.php">jordan服飾</a>(11)</LI>
                    <LI><a href="store.php">jordan服飾</a>(1)</LI>
                    <LI><a href="store.php">jordan服飾</a>(33)</LI>
                    <LI><a href="store.php">jordan服飾</a>(33)</LI>
                    <LI><a href="store.php">jordan服飾</a>(33)</LI>
                    <LI><a href="store.php">jordan服飾</a>(33)</LI>
                    <LI><a href="store.php">jordan服飾</a>(33)</LI>
                </ol>
            </div>
         </DIV>
    </div>
    <div class="center_div">
    	<DIV class="hd_frame">
         	<H2>活動廣告</H2>
            <div id="tabs_commer">
                <ul>
                    <li class="tab_li_title"><a href="#tabs_commer-1">活動廣告1</a></li>
                    <li class="tab_li_title"><a href="#tabs_commer-2">活動廣告2</a></li>
                </ul>
                <div id="tabs_commer-1"><div class="commer"><img src="images/560x210_03.jpg" /></div></div>
                <div id="tabs_commer-2"><div class="commer"><img src="images/560x210_03.jpg" /></div></div>
            </div>
        </DIV>
    	<DIV class="hd_frame">
         	<H2>流行服飾</H2>
            <div id="tabs_cloth">
                <ul>
                    <li class="tab_li_title"><a href="#tabs_cloth-1">流行速報</a></li>
                    <li class="tab_li_title"><a href="#tabs_cloth-2">最熱門產品</a></li>
                    <li class="tab_li_title"><a href="#tabs_cloth-3">最殺商品</a></li>
                </ul>
                <div id="tabs_cloth-1">
                    <OL class="pic100">
                    <?
					for($i=1;$i<=6;$i++)
					{
					?>
                		<LI>
                        	<div>
                                <div class="pic100_div"><IMG src="./images/11374_thumbnail.jpg"></div>
                                <div class="pic100_div">
                                    <ol class="souit">
                                        <li class="font_model_title"><a href="store.php">新鈦服飾</a></li>
                                        <li class="font_model_desc"><a href="#">防禦力+200，附加火焰燃燒功能</a></li>
                                    </ol>
                                    <div class="bg_money"><a href="#">總價:11,999元</a></div>
                                </div>
                            </div>
                        </LI>
                    <?
					}
					?>
                	</OL>
                    <div class="model_name"></div>
                </div>
                <div id="tabs_cloth-2">
                    <OL class="pic100">
                    <?
					for($i=1;$i<=6;$i++)
					{
					?>
                		<LI>
                        	<div>
                                <div class="pic100_div"><IMG src="./images/11374_thumbnail.jpg"></div>
                                <div class="pic100_div">
                                    <ol class="souit">
                                        <li class="font_model_title"><a href="store.php">新鈦服飾</a></li>
                                        <li class="font_model_desc"><a href="#">防禦力+200，附加火焰燃燒功能</a></li>
                                    </ol>
                                    <div class="bg_money"><a href="#">總價:11,999元</a></div>
                                </div>
                            </div>
                        </LI>
                    <?
					}
					?>
                	</OL>
                    <div class="model_name"></div>
                </div>
                <div id="tabs_cloth-3">
                    <OL class="pic100">
                    <?
					for($i=1;$i<=6;$i++)
					{
					?>
                		<LI>
                        	<div>
                                <div class="pic100_div"><IMG src="./images/11374_thumbnail.jpg"></div>
                                <div class="pic100_div">
                                    <ol class="souit">
                                        <li class="font_model_title"><a href="store.php">新鈦服飾</a></li>
                                        <li class="font_model_desc"><a href="#">防禦力+200，附加火焰燃燒功能</a></li>
                                    </ol>
                                    <div class="bg_money"><a href="#">總價:11,999元</a></div>
                                </div>
                            </div>
                        </LI>
                    <?
					}
					?>
                	</OL>
                    <div class="model_name"></div>
                </div>
            </div>
         </DIV>
    </div>
    <div class="right_div">
    	<?
		include("login.php");
		?>
        <DIV class="hd_frame">
         	<H3><?=$data_category1['category_name']?>商品模特兒</H3>
            <OL class="pic84">
                <LI>
                    <div class="pic84_div"><IMG src="./images/11374_thumbnail.jpg"><div class="model_name"><a href="#">kenoscar</a></div></div>
                    <div class="pic84_div">
                        <ol class="model_ol">
                            <li class="font_model_title"><a href="#">show名稱</a></li>
                            <li class="font_model_desc">點擊/得分</li>
                            <li class="font_model_desc">337/17</li>
                        </ol>
                    </div>
                    <div class="model_name"></div>
                </LI>
                <LI>
                    <div class="pic84_div"><IMG src="./images/11374_thumbnail.jpg"><div class="model_name"><a href="#">kenoscar</a></div></div>
                    <div class="pic84_div">
                        <ol class="model_ol">
                            <li class="font_model_title"><a href="#">show名稱</a></li>
                            <li class="font_model_desc">點擊/得分</li>
                            <li class="font_model_desc">337/17</li>
                        </ol>
                    </div>
                    <div class="model_name"></div>
                </LI>
                <LI>
                    <div class="pic84_div"><IMG src="./images/11374_thumbnail.jpg"><div class="model_name"><a href="#">kenoscar</a></div></div>
                    <div class="pic84_div">
                        <ol class="model_ol">
                            <li class="font_model_title"><a href="#">show名稱</a></li>
                            <li class="font_model_desc">點擊/得分</li>
                            <li class="font_model_desc">337/17</li>
                        </ol>
                    </div>
                    <div class="model_name"></div>
                </LI>
                <LI>
                    <div class="pic84_div"><IMG src="./images/11374_thumbnail.jpg"><div class="model_name"><a href="#">kenoscar</a></div></div>
                    <div class="pic84_div">
                        <ol class="model_ol">
                            <li class="font_model_title"><a href="#">show名稱</a></li>
                            <li class="font_model_desc">點擊/得分</li>
                            <li class="font_model_desc">337/17</li>
                        </ol>
                    </div>
                    <div class="model_name"></div>
                </LI>
                <LI>
                    <div class="pic84_div"><IMG src="./images/11374_thumbnail.jpg"><div class="model_name"><a href="#">kenoscar</a></div></div>
                    <div class="pic84_div">
                        <ol class="model_ol">
                            <li class="font_model_title"><a href="#">show名稱</a></li>
                            <li class="font_model_desc">點擊/得分</li>
                            <li class="font_model_desc">337/17</li>
                        </ol>
                    </div>
                    <div class="model_name"></div>
                </LI>
                <LI>
                    <div class="pic84_div"><IMG src="./images/11374_thumbnail.jpg"><div class="model_name"><a href="#">kenoscar</a></div></div>
                    <div class="pic84_div">
                        <ol class="model_ol">
                            <li class="font_model_title"><a href="#">show名稱</a></li>
                            <li class="font_model_desc">點擊/得分</li>
                            <li class="font_model_desc">337/17</li>
                        </ol>
                    </div>
                    <div class="model_name"></div>
                </LI>
                <LI>
                    <div class="pic84_div"><IMG src="./images/11374_thumbnail.jpg"><div class="model_name"><a href="#">kenoscar</a></div></div>
                    <div class="pic84_div">
                        <ol class="model_ol">
                            <li class="font_model_title"><a href="#">show名稱</a></li>
                            <li class="font_model_desc">點擊/得分</li>
                            <li class="font_model_desc">337/17</li>
                        </ol>
                    </div>
                    <div class="model_name"></div>
                </LI>
                <LI>
                    <div class="pic84_div"><IMG src="./images/11374_thumbnail.jpg"><div class="model_name"><a href="#">kenoscar</a></div></div>
                    <div class="pic84_div">
                        <ol class="model_ol">
                            <li class="font_model_title"><a href="#">show名稱</a></li>
                            <li class="font_model_desc">點擊/得分</li>
                            <li class="font_model_desc">337/17</li>
                        </ol>
                    </div>
                    <div class="model_name"></div>
                </LI>
                <LI>
                    <div class="pic84_div"><IMG src="./images/11374_thumbnail.jpg"><div class="model_name"><a href="#">kenoscar</a></div></div>
                    <div class="pic84_div">
                        <ol class="model_ol">
                            <li class="font_model_title"><a href="#">show名稱</a></li>
                            <li class="font_model_desc">點擊/得分</li>
                            <li class="font_model_desc">337/17</li>
                        </ol>
                    </div>
                    <div class="model_name"></div>
                </LI>
                <LI>
                    <div class="pic84_div"><IMG src="./images/11374_thumbnail.jpg"><div class="model_name"><a href="#">kenoscar</a></div></div>
                    <div class="pic84_div">
                        <ol class="model_ol">
                            <li class="font_model_title"><a href="#">show名稱</a></li>
                            <li class="font_model_desc">點擊/得分</li>
                            <li class="font_model_desc">337/17</li>
                        </ol>
                    </div>
                    <div class="model_name"></div>
                </LI>
            </OL>
        </DIV>
    </div>
</body>
<script type="text/javascript">
$(function(){
	$("#tabs_cloth").tabs().find(".ui-tabs-nav").sortable({axis:'x'});
	$("#tabs_commer").tabs().find(".ui-tabs-nav").sortable({axis:'x'});
	
	$(".pic100").each(function(){
		i=1;
		$(this).children("").each(function(){
			if(i<=4)
			{
				$(this).children("div").addClass("horizontal_dot");
			}
	
			if((i % 2) == 1)
			{
				$(this).addClass("vertical_dot");
			}
			i++;
		});
	});
});
</script>
</html>
