<?
//顯示欲顯示根目錄欄位訊息
function Ret_recursionsRoots($fun_category_sn,$returnField)
{	//參數：category_sn
	//顯示完整目錄名
	$category_sql = "SELECT * FROM product_category_tb WHERE category_sn =". $fun_category_sn;
	$category_data = mysql_get_info($category_sql);
	if( mysql_check_exit( $category_sql ) == true && $category_data['category_depend_sn'] != 0) 
	{
		//遞迴
		return Ret_recursionsRoots($category_data['category_depend_sn'],$returnField);
	}
	else
	{	
		//非遞迴
		return $category_data[$returnField];
	}		
}

//顯示完整路徑名(true：顯示產品名稱)
function recursionsRoot($fun_category_sn, $prod = true)
{	//參數：category_sn
	//顯示完整目錄名
	$category_sql = "SELECT * FROM product_category_tb WHERE category_sn =". $fun_category_sn;
	$category_data = mysql_get_info($category_sql);
	if( mysql_check_exit( $category_sql ) == true && $category_data['category_depend_sn'] != 0) 
	{
		//遞迴
		recursionsRoot($category_data['category_depend_sn'],$prod);
		
		if(!$prod)
		{	//products_1~3
			if($_GET['category_sn'] == $category_data['category_sn'])
			{
				echo $category_data['category_name'];
			}
			else
			{
				echo "<a href=\"products_" . $category_data['category_level'] . ".php?category_sn=" . $category_data['category_sn'] . "\">" . $category_data['category_name'] . "</a>" . " > " ;
			}
		}
		else
		{			
			//products_show
			echo "<a href=\"products_" . $category_data['category_level'] . ".php?category_sn=" . $category_data['category_sn'] . "\">" . $category_data['category_name'] . "</a>" . " > " ;
			
			if($_GET['category_sn'] == $category_data['category_sn'])
			{
				//產品
				$public_class_sql = "select * from product_tb where product_sn  = " . $_GET['product_sn'];
				$public_class_results = mysql_get_info($public_class_sql);
				echo $public_class_results['product_name'];
			}
		}
	}
	else
	{	
		//非遞迴
		if(!$prod)
		{	//products_1~3
			echo "<a href=\"products" . ".php?category_sn=" . $category_data['category_sn'] . "\">" . $category_data['category_name'] .  "</a>" . " > ";
		}
		else
		{	//products_show
			echo "<a href=\"products" . ".php?category_sn=" . $category_data['category_sn'] . "\">" . $category_data['category_name'] .  "</a>" . " > ";
		}
	}		
}

function Return_OneRoot_member($db_name,$file_name_sub,$fun_category_sn, $field_name , $prod = true ,&$return_value)
{
	//db資料表名稱、key欄位名稱、上一層欄位值、上一層欄位名稱
	//直屬上層目錄，例20=>30=>49，就從49往上推
	$category_sql = "SELECT * FROM $db_name WHERE $file_name_sub =". $fun_category_sn;
	$return_results = mysql_query($category_sql);
	while($Return_data = mysql_fetch_assoc($return_results))
	{
		if($Return_data[$field_name] != "0" && $Return_data[$field_name] != "")
		{
			$return_value .= "," . $Return_data[$field_name];
			Return_OneRoot_member($db_name,$file_name_sub,$Return_data[$field_name], $field_name, true, $return_value);
		}
	}	
	return $return_value;
}

function Return_recursionsRoot_member($db_name,$file_name_sub,$fun_category_sn, $field_name , $prod = true ,&$return_value)
{	/*參數：由上往下 或  由下往上 ，只要將$file_name_sub及$field_name的參數位置對調即可
	由上往下：
	file_name_sub:"member_depend_sn" =>
	fun_category_sn:member_depend_sn值
	field_name:"member_sn"	=>
	return_value:member_depend_sn值
	由下往上：
	file_name_sub:"member_sn" =>
	fun_category_sn:member_depend_sn值
	field_name:"member_depend_sn" =>
	return_value:member_depend_sn值
	*/
	//顯示完整目錄名
	$category_sql = "SELECT * FROM $db_name WHERE $file_name_sub  =". $fun_category_sn;
	$return_results = mysql_query($category_sql);
	
	while($Return_data = mysql_fetch_assoc($return_results))
	{
		if($Return_data[$field_name] != "0")
		{
			//處理多重來源
			if(substr($return_value,strlen($return_value)-1, 1) != ";")
				$return_value .= "," . $Return_data[$field_name];
			else
				$return_value .= $Return_data[$field_name];
		}
		else
		{	
				$return_value .= ";";
		}
			
		Return_recursionsRoot_member($db_name,$file_name_sub,$Return_data[$field_name], $field_name, true, $return_value);
	}	
	return $return_value;
}

//顯示完整路徑名(true：顯示產品名稱)
function recursionsRoot_noHtml($fun_category_sn, $field_name , $prod = true )
{	//參數：category_sn
	//顯示完整目錄名
	$category_sql = "SELECT * FROM product_category_tb WHERE category_sn =". $fun_category_sn;
	$category_data = mysql_get_info($category_sql);
	
	if( mysql_check_exit( $category_sql ) == true && $category_data['category_depend_sn'] != 0) 
	{
		//遞迴
		recursionsRoot_noHtml($category_data['category_depend_sn'], $field_name , $prod);
		
		if(!$prod)
		{	//products_1~3
			if($_GET['category_sn'] == $category_data['category_sn'])
			{
				echo $category_data[$field_name];
			}
			else
			{
				echo $category_data[$field_name] . " > " ;
			}
		} 
		else
		{			
			//products_show
			echo $category_data[$field_name] . " > " ;
			
			if($_GET['category_sn'] == $category_data['category_sn'])
			{
				//產品
				$public_class_sql = "select * from product_tb where product_sn  = " . $_GET['product_sn'];
				$public_class_results = mysql_get_info($public_class_sql);
				echo $public_class_results['product_name'];
			}
		}
	}
	else
	{	
		//非遞迴
		if(!$prod)
		{	//products_1~3
			echo  $category_data[$field_name] . " > ";
		}
		else
		{	//products_show
			echo $category_data[$field_name] . " > ";
		}
	}		
}

function Return_recursionsRoot($fun_category_sn, $field_name , $prod = true ,&$return_value)
{	//參數：category_sn
	//顯示完整目錄名
	$category_sql = "SELECT * FROM product_category_tb WHERE category_depend_sn =". $fun_category_sn;
	$return_results = mysql_query($category_sql);
	
	while($Return_data = mysql_fetch_assoc($return_results))
	{
		$return_value .= "," . $Return_data[$field_name];
		Return_recursionsRoot($Return_data['category_sn'], $field_name, true, $return_value);
	}	
	return $return_value;
}

function Return_recursionsRoot2($fun_category_sn, $field_name , $prod = true ,&$return_value)
{	//參數：category_sn
	//顯示完整目錄名
	$category_sql = "SELECT * FROM product_category_tb WHERE category_depend_sn =". $fun_category_sn;
	$return_results = mysql_query($category_sql);
	
	while($Return_data = mysql_fetch_assoc($return_results))
	{
		$return_value .= "," . $Return_data[$field_name];
		Return_recursionsRoot2($Return_data['category_sn'], $field_name, true, $return_value);
	}	
	return $return_value;
}

function Return_Down_OneRoot($fun_category_sn, $field_name , $prod = true ,&$return_value)
{	//參數：category_sn
	//顯示完整目錄名，但是針對直屬下層目錄。例如：20 > 30 > 49,50 > 72,60，則傳回：20,30,49;50,72;60
	$category_sql = "SELECT * FROM product_category_tb WHERE category_depend_sn =". $fun_category_sn;
	$return_results = mysql_query($category_sql);
	
	while($Return_data = mysql_fetch_assoc($return_results))
	{
		$return_value .= "," . $Return_data[$field_name];
		//檢查是否有子目錄
		$category_sql2 = "SELECT * FROM product_category_tb WHERE category_depend_sn =". $Return_data['category_sn'];
		$return_results2 = mysql_query($category_sql2);
		$nums_c = mysql_num_rows($return_results2);
		if($nums_c > 0)
		{		
			//$return_value .= ";";
			Return_Down_OneRoot($Return_data['category_sn'], $field_name, true, $return_value);
			$return_value .= ",";
			
		}
		else
		{
			
			Return_Down_OneRoot($Return_data['category_sn'], $field_name, true, $return_value);
			$return_value .= ";";
		}
	}	
	$return_value = str_replace(",;" , ";" , $return_value);
	
	return $return_value;
}

function Return_OneRoot($fun_category_sn, $field_name , $prod = true ,&$return_value)
{
	//直屬上層目錄，例20=>30=>49，就從49往上推
	$category_sql = "SELECT * FROM product_category_tb WHERE category_sn =". $fun_category_sn;
	$return_results = mysql_query($category_sql);
	
	while($Return_data = mysql_fetch_assoc($return_results))
	{
		if($Return_data[$field_name] != "0")
		{
			$return_value .= "," . $Return_data[$field_name];
			Return_OneRoot($Return_data[$field_name], $field_name, true, $return_value);
		}
	}	
	return $return_value;
}

function Return_OneRoot2($fun_category_sn, $field_name , $prod = true ,&$return_value)
{
	//直屬上層目錄，例20=>30=>49，就從49往上推
	$category_sql = "SELECT * FROM product_work_tb WHERE category_sn =". $fun_category_sn;
	$return_results = mysql_query($category_sql);
	
	while($Return_data = mysql_fetch_assoc($return_results))
	{
		if($Return_data[$field_name] != "0")
		{
			$return_value .= "," . $Return_data[$field_name];
			Return_OneRoot2($Return_data[$field_name], $field_name, true, $return_value);
		}
	}	
	return $return_value;
}

function Get_up_level($key)
{
	//取得上一層產品目錄(單一筆資料)
	$category_sin_product = "SELECT category_sn, category_depend_sn, category_name FROM product_category_tb  WHERE category_sn = ". $key . 
	" ORDER BY category_online_sort DESC";
	$category_sin_result = mysql_query($category_sin_product);
	$row = mysql_fetch_row($category_sin_result);
	return $row;
}

function check_down_level($key)
{
	//檢查是否有子目錄
	$category_sin_product = "SELECT count(category_sn) as num FROM product_category_tb  WHERE category_depend_sn = ". $key . 
	" ORDER BY category_online_sort DESC";
	$category_sin_result = mysql_query($category_sin_product);
	$row = mysql_fetch_row($category_sin_result);
	if($row[0] > 0)
		return true;
	else
		return false;
}
?>