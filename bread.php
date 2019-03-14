<?
$top_category_sn = "";
$top_category_id = "";
if(isset($_GET['category_id']))
{
	$top_category_sn = htmlspecialchars($_GET['category_id'],ENT_QUOTES);
	$top_category_id = $top_category_sn;
	$bs = recursionsRoot_array_string($top_category_id,"category_depend_sn",$top_category_id);
	
	$sql_bread = sprintf("select category_sn, category_name, category_level from $product_category_tb where category_sn in (%s) order by category_level asc", mysql_real_escape_string($bs));
	$results_bread = mysql_work_get_more($sql_bread);
}
?>
<ol class="bread">
	<li><a href="index.php">首頁</a></li>
<?
if(isset($results_bread))
{
	while($data_bread = mysql_fetch_assoc($results_bread))
	{
	?>
    <li>></li>
	<li>
	<?
		if($top_category_sn == $data_bread['category_sn'])
		{
			echo $data_bread['category_name'];
		}
		else
		{
    ?>
    	<a href="<?
		if($data_bread['category_level'] == 1)
			echo "category_product.php";
		else if($data_bread['category_level'] == 2)
			echo "category_product2.php";
    			?>?leve=<?=$data_bread['category_level']?>&category_id=<?=$data_bread['category_sn']?>"><?=$data_bread['category_name']?>
    	</a><?
		}
	?>
    </li>
    <?
	}
}
?>
</ol>