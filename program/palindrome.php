<?php
$num=122;
$b=$num;
$rev=0;
while($num!=0)
{
	$rev=$rev*10+$num%10;
	$num=(int)($num/10);
	
}
if($rev==$b)
{
	echo $b."number is palindrome";
	
}
else
{
	echo $b."not palindrome";
}
?>