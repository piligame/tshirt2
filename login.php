<div><?
if(!$login_bool)
{
	echo "Hi, 您還沒登入喔";
}
else
{
	echo $_SESSION['member_datas']['member_name'] . " 您好！";
}
?></div>
<div class="login">
	<? 
	if(!$login_bool)
	{?>
	<img class="img_pointer" src="images/member_login.jpg" onClick="
	var chk1 = new check_com('meizzDateLayer2',1,this,'text_login.php?key=1&ts='+ new Date().getTime(),myfun,true,false);chk1.light=true;chk1.div_center();" /><?
	}
	else
	{
	?><img class="img_pointer" src="images/member_logout.jpg" onClick="document.getElementById('action').value = 'logout';document.origin_form.submit();" />
	<?
	}
	?>
	<img class="img_pointer" src="images/member_regestor.jpg" onClick="location.href='register.php';" />
 </div>
 <div class="login2">
	  <a href="<?
	if($_SESSION['member_datas']['area_sn'] != "" && $_SESSION['member_datas']['area_sn'] != NULL)
		echo "./area/user.php?id=" . $_SESSION['member_datas']['area_sn'];
	else
		echo "./user.php";
		?>"><div id="div_img">我的帳戶</div></a><a href="./store.php"><div id="div_img">商店管理</div></a>
 </div><div class="model_name"></div>