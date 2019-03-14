<?php
include("./public/ajax_security.php");
function LoadJpeg($imgname, $path="")
{
	$upload_path = "./upload/";
	if($path != "")
		$imgname = $upload_path . $path . "/" . $imgname;
	else
		$imgname = $upload_path . $imgname;
		
    /* 開啟來源圖片 */
    $im = @imagecreatefromjpeg($imgname);

    /* 如果無法開啟圖片，設定輸出錯誤圖片 */
    if(!$im)
    {
        /* 建立一個黑色底圖 */
        $im  = imagecreatetruecolor(150, 30);
        $bgc = imagecolorallocate($im, 255, 255, 255);
        $tc  = imagecolorallocate($im, 0, 0, 0);

        imagefilledrectangle($im, 0, 0, 150, 30, $bgc);

        /* 在黑色底圖上寫入文字 */
        imagestring($im, 1, 5, 5, 'Error loading ' . $imgname, $tc);
    }

    return $im;
}

header('Content-Type: image/jpeg');
//設定來源圖片位址（實體路徑）

if(isset($_GET['par1']) && isset($_GET['par2']))
	$img = LoadJpeg($_GET['par1'], $_GET['par2']);
else if(isset($_GET['par1']) && !isset($_GET['par2']))
	$img = LoadJpeg($_GET['par1']);

imagejpeg($img);
imagedestroy($img);
?>