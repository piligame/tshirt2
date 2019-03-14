<?php
  //�üƲ������ҽX
  
  class RandomImageText
  {
     var $image;   //�v�����
	 var $iHeight; //����
	 var $iWidth;  //�e��
	 var $fHeight; //�r������
	 var $fWidth;  //�r���e��
	 var $xPos;    //����X��m
	 var $fonts;
	 
	 function RandomImageText($jpeg, $fHeight = 10, $fWidth = 18)
	 {
	    $this->image = ImageCreateFromJPEG($jpeg);
		$this->iHeight = ImageSY($this->image);
		$this->iWidth = ImageSX($this->image);
		$this->fHeight = $fHeight;
		$this->fWidth = $fWidth;
		$this->xPos = 0;
		$this->fonts = array(3,10,3,10);
	 }
	 
	 function addText($text, $r=38, $g=38, $b=38)
	 {
	    $length = $this->fWidth * strlen($text);
		if($length >= ($this->iWidth-$this->fWidth*2))
		{
		   return FALSE;
		}
		$im = $this->image;
		$this->xPos = floor(($this->iWidth-$length)/1.8);
		$fColor = imagecolorallocate($im, $r, $g, $b);
		srand((float)microtime()*1000000);
		$fonts = array(3,10,3,10);
		$yStart = floor(($this->iHeight/2)-$this->fHeight);
		$yEnd = $yStart+$this->fHeight;
		$yPos = range($yStart, $yEnd);
		for($strPos=0; $strPos<$length; $strPos++)
		{
		   shuffle($fonts);
		   imagestring($this->image,
		               $fonts[0],
					   $this->xPos,
					   $yPos[0],
					   substr($text, $strPos, 1),
					   $fColor);
		   $this->xPos += $this->fWidth;
		}
		return TRUE;
	 }
	 
	 function clearFonts()
	 {
	    return $this->fonts = array();
	 }
	 
	 function addFont($font)
	 {
	    $this->fonts[] = imageloadfont($font);
	 }
	 
	 function getHeight()
	 {
	    return $this->iHeight;
	 }
	 
	 function getWidth()
	 {
	    return $this->iWidth;
	 }
	 
	 function getImage()
	 {
	    return $this->image;
	 }
	 
	 function createRandString()
	 {
	   srand((double)microtime()*1000000);
	   $letters = range('A','Z');
	   $numbers = range(1,9);
	   $chars = array_merge($letters, $numbers);
	   $randString = '';
	   for($i=0; $i<5; $i++)
	   {
	      shuffle($chars);
		  $randString .= $chars[0];
	   }
	   return $randString;
	 }
  }

?>
