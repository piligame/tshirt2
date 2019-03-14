<?
$product_category_tb = "product_category_tb";

$sql_product_category = "select category_sn, category_name, category_level from $product_category_tb where category_level = 1 order by category_online_sort asc";
$results_product_category = mysql_work_get_more($sql_product_category);
//系統安全檢查
//$login_bool = security_checks();
$login_bool = false;
?>
<link href="./css/top.css" rel="stylesheet" type="text/css">
<div class="top_search">
    <div class="img_logo"><img src="images/yps_uh_logo.gif" /></div>
    <div class="top_search_title">
        <input type="text" id="search_text" name="search_text" />
        <select name="select_type" id="select_type">
            <option value="NO">所有</option>
            <option value="product">商品</option>
            <option value="shop">商店</option>
        </select>
        <input type="button" name="but_search" id="but_search" value="搜尋" onclick="location.href='search.php';" />
        <label class="top_search_hot">熱門：<a href="search.php?keyword=">刺客</a>&nbsp;&nbsp;<a href="search.php?keyword=">武道家</a>&nbsp;&nbsp;<a href="search.php?keyword=">流氓家</a>&nbsp;&nbsp;<a href="search.php?keyword=">騎士</a>&nbsp;&nbsp;<a href="search.php?keyword=">弓箭手</a></label>
    </div>
</div>
<div class="top_product_1">
    <ol>
        <li><a href="index.php">首頁</a></li>
        <?
        while($data_product_category = mysql_fetch_assoc($results_product_category))
        {
            $sql_level2 = sprintf("select category_sn, category_name, category_level from $product_category_tb where category_level = 2 and category_depend_sn = %d order by category_online_sort asc", quote_smart($data_product_category['category_sn'],false));
        ?>
        <li class="class_product"><a href="category_product.php?level=<?=$data_product_category['category_level']?>&category_id=<?=$data_product_category['category_sn']?>"><?=$data_product_category['category_name']?></a>
            <?
            if(mysql_check_exit($sql_level2))
            {
            ?>
            <div>
                <ul>
                    <?
                    $results_level2 = mysql_work_get_more($sql_level2);
                    while($data_product_category2 = mysql_fetch_assoc($results_level2))
                    {
                    ?>
                    <li><a href="category_product2.php?level=<?=$data_product_category2['category_level']?>&category_id=<?=$data_product_category2['category_sn']?>"><?=$data_product_category2['category_name']?></a></li>
                    <?
                    }
                    ?>
                </ul>
            </div>
            <?
            }
            ?>
        </li>
        <?
        }
        ?>
    </ol>
    <div class="div_msg">
        <ul>
            <li title="訊息"><a href="#"><img src="./images/24-message-info.png" /><div class="bg_money small_font2">( 999 )</div></a></li>
            <li title="朋友邀請"><a href="invite.php"><img src="./images/24-member-add.png" /><div class="bg_money small_font2">( 99 )</div></a></li>
            <li title="好友動態"><a href="notifications_friend.php"><img src="./images/24-member-heart.png" /><div class="bg_money small_font2">( 102 )</div></a></li>
            <li title="網友動態"><a href="notifications.php"><img src="./images/24-member.png" /><div class="bg_money small_font2">( 724 )</div></a></li>
            <li title="購物車"><a href="car.php"><img src="./images/24-car.gif" /><div class="bg_money small_font2">( 2 )</div></a></li>
        </ul>
    </div>
</div>