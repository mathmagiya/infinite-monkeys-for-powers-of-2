<?php

include "functions.php";

for($i=1; $i<=12500; $i++){
    $ii=bcmath_baseconvert($i,10,29);
    echo $ii."------>> feel like: ".$i."<br/>";
    $pow=bcmath_baseconvert(bcpow(2, $i),10,29); // base10 result converts to base29;
    echo "2^".$i." at the base 29: ".$pow."<br/>";
	
	echo "<b>As a part of text: </b>".changeStr($pow)."<br/>";
	echo "------------------<br/><br/>";
       }

echo "<br/>";
echo "The End!";

?>
