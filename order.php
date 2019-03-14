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
<link href="./css/car.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./jq/jquery-1.4.js"></script>
</head>
<body>
	<?
	include("top2.php");
	?>
    <ol class="bread">
		<li><a href="index.php">首頁</a></li>
        <li>></li>
        <li>訂單查詢</li>
    </ol>
    <div class="big_left_div">
    	<DIV class="hd_frame div_bg1">
         	<H2>訂單查詢</H2>
            <p>
            <table width="600" align="center" class="order_tb">
              <tr>
                <th height="30" colspan="3"><div class="red_setup2">陳奕華您好，以下為您的訂單資料：</div></th>
              </tr>
              <tr class="order_tr">
                <td width="31%"><div align="center">訂單編號</div></td>
                <td width="35%"><div align="center">訂單日期</div></td>
                <td width="34%"><div align="center">訂單處理狀況</div></td>
              </tr>
              <tr>
                <td><div align="center"><a href="order2.php?key=2010041907">2010041907</a></div></td>
                <td><div align="center">2010-04-19</div></td>
                <td><div align="center">處理中</div></td>
              </tr>
              <tr>
                <td><div align="center"><a href="order2.php?key=2010041907">2010041907</a></div></td>
                <td><div align="center">2010-04-19</div></td>
                <td><div align="center">處理中</div></td>
              </tr>
              <tr>
                <td><div align="center"><a href="order2.php?key=2010041907">2010041907</a></div></td>
                <td><div align="center">2010-04-19</div></td>
                <td><div align="center">處理中</div></td>
              </tr>
              <tr>
                <td><div align="center"><a href="order2.php?key=2010041907">2010041907</a></div></td>
                <td><div align="center">2010-04-19</div></td>
                <td><div align="center">處理中</div></td>
              </tr>
              <tr>
                <td><div align="center"><a href="order2.php?key=2010041907">2010041907</a></div></td>
                <td><div align="center">2010-04-19</div></td>
                <td><div align="center">處理中</div></td>
              </tr>
              <tr>
                <td><div align="center"><a href="order2.php?key=2010041907">2010041907</a></div></td>
                <td><div align="center">2010-04-19</div></td>
                <td><div align="center">處理中</div></td>
              </tr>
            </table>
            </p>
        </DIV>
    </div>
    <div class="right_div">
	    <?
		include("login.php");
		?>
    </div>
</body>
</html>
<script type="text/javascript">
$(function(){
	$("tr:gt(1):odd").addClass("order_tr_color");
});
</script>