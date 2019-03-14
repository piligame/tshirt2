<?
$database_count2 = "count_tb";

//記錄Session 及 Count異動
if(isset($_SESSION['login']) == false)
{
	$_SESSION['login'] = "login";

	$count2_sql = "select * from $database_count2";
	$count2_data = mysql_get_info($count2_sql);
	$add_y = 1;
	$add_m = 1;
	$add_d = 1;
	
	$today = array(date("Y",time()),date("m",time()),date("d",time()));
	foreach($today as $key => $value)
	{
		switch($key)
		{
			case 0:
				if($value == $count2_data['year_date'])					//同年
					$add_y = intval($count2_data['year_count']) + 1;
				break;
			case 1:
				if($value == $count2_data['month_date'] && $add_y != 1)	//同年、同月
					$add_m = intval($count2_data['month_count']) + 1;
				break;
			case 2:
				if($value == $count2_data['today_date'] && $add_y != 1 && $add_m != 1)		//同年、同月、同日
					$add_d = intval($count2_data['today_count']) + 1;
				break;
		}
	}
	
	
	$updat_count = sprintf("update $database_count2 set today_count = %d, month_count = %d, year_count = %d, today_date = %s, month_date = %s, year_date = %s, total_count = %d", $add_d, $add_m, $add_y, quote_smart($today[2]), quote_smart($today[1]), quote_smart($today[0]), intval($count2_data['total_count']) + 1);
	mysql_execute($updat_count);
}
?>